<?php

use App\Models\User;

test('the chat loader is optional and page HTML has no signed assertion', function () {
    $this->view('partials.website-chat')->assertDontSee('spokane-website-chat.js');
    $this->getJson('/website-chat/identity')->assertNotFound();
    config(['services.website_chat.widget' => 'public-widget', 'services.website_chat.secret' => 'private-key']);
    $this->view('partials.website-chat')->assertSee('spokane-website-chat.js')->assertSee('public-widget')
        ->assertDontSee('data-identity')->assertDontSee('private-key');
    $this->getJson('/website-chat/identity')->assertExactJson(['identity' => null, 'account' => null])
        ->assertHeader('Cache-Control', 'no-store, private');
});

test('signed-in accounts receive a private fresh assertion and only verified emails are included', function (bool $verified) {
    config(['services.website_chat.widget' => 'public-widget', 'services.website_chat.secret' => 'private-key']);
    $user = User::factory()->make(['id' => 123, 'email_verified_at' => $verified ? now() : null]);
    $response = $this->actingAs($user)->getJson('/website-chat/identity')->assertOk()
        ->assertHeader('Cache-Control', 'no-store, private')->assertDontSee('private-key');
    $response->assertJsonPath('account', '123');
    [$payload, $signature] = explode('.', $response->json('identity'));
    expect(hash_hmac('sha256', $payload, 'private-key'))->toBe($signature);
    $claims = json_decode(base64_decode(strtr($payload, '-_', '+/')), true);
    expect($claims)->toMatchArray(['sub' => '123', 'name' => $user->name])
        ->and($claims['exp'])->toBeBetween(time() + 290, time() + 300);
    if ($verified) {
        expect($claims['email'])->toBe($user->email);
    } else {
        expect($claims)->not->toHaveKey('email');
    }
})->with([true, false]);

test('a signed-in account cannot fall back to a guest conversation if signing is unavailable', function () {
    config(['services.website_chat.widget' => 'public-widget', 'services.website_chat.secret' => null]);
    $this->actingAs(User::factory()->make())->getJson('/website-chat/identity')->assertStatus(503);
});

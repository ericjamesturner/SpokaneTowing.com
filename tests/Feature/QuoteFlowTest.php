<?php

use App\Models\Quote;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Http;

uses(RefreshDatabase::class);

beforeEach(function () {
    config(['services.resend.key' => null, 'towing.notification_email' => null, 'towing.google_maps.api_key' => 'test-key']);
    Http::preventStrayRequests();
});

it('serves an indexable quote form without creating a quote or calling Maps', function () {
    $response = $this->get('/quote');
    $response->assertOk()
        ->assertSee('Get a Towing Quote in Spokane')
        ->assertSee('action="'.route('quote.store').'"', false)
        ->assertSee('href="'.route('quote.start').'"', false)
        ->assertHeaderMissing('X-Robots-Tag');
    expect(Quote::count())->toBe(0);
    Http::assertNothingSent();
});

it('preserves the quote POST, minimum charge and successful conversion without counting a refresh', function () {
    Http::fake([
        '*geocode/json*' => Http::response(['status' => 'OK', 'results' => [['geometry' => ['location' => ['lat' => 47.6588, 'lng' => -117.4260]]]]]),
        '*distancematrix/json*' => Http::response(['status' => 'OK', 'rows' => [['elements' => [['status' => 'OK', 'distance' => ['value' => 8047], 'duration' => ['value' => 900]]]]]]),
    ]);
    $response = $this->post('/quote', ['name' => 'Test Driver', 'phone' => '5095550100', 'from' => 'Test pickup Spokane', 'to' => 'Test destination Spokane']);
    $quote = Quote::sole();
    $response->assertRedirect(route('quote.show', $quote->uuid))->assertSessionHas('analytics_event', 'quote_created');
    expect((float) $quote->total)->toBe(200.0);
    $this->get(route('quote.show', $quote->uuid))->assertOk()
        ->assertHeader('X-Robots-Tag', 'noindex, follow')
        ->assertSee("window.clarity('event', 'quote_created')", false)
        ->assertSee('data-site="spokanetowing.com"', false)
        ->assertSee('window.trackEvent("Quote Created"', false)
        ->assertSee('window.trackEvent.identify({"name":"Test Driver","phone":"5095550100"})', false);
    $this->get(route('quote.show', $quote->uuid))->assertOk()
        ->assertDontSee("window.clarity('event', 'quote_created')", false)
        ->assertDontSee('window.trackEvent("Quote Created"', false)
        ->assertDontSee('trackEvent.identify', false);
    expect(Quote::count())->toBe(1);
});

it('does not count invalid submissions and preserves entered values', function () {
    $this->from('/quote')->post('/quote', ['from' => 'x', 'to' => 'y', 'name' => 'Test Driver'])
        ->assertRedirect('/quote')->assertSessionHasErrors(['from', 'to'])->assertSessionMissing('analytics_event');
    $this->get('/quote')->assertOk()->assertSee('value="Test Driver"', false);
    expect(Quote::count())->toBe(0);
    Http::assertNothingSent();
});

it('offers the call fallback instead of inventing a quote when Maps is not configured', function () {
    config(['towing.google_maps.api_key' => '']);
    $this->post('/quote', ['from' => 'Test pickup Spokane', 'to' => 'Test destination Spokane'])
        ->assertRedirect(route('quote.error'))->assertSessionMissing('analytics_event');
    $this->get(route('quote.error'))->assertOk()
        ->assertSee('window.trackEvent("Quote Error", {"reason":"pickup_not_found"})', false);
    expect(Quote::count())->toBe(0);
    Http::assertNothingSent();
});

it('keeps utility pages out of search', function (string $url) {
    $this->get($url)->assertOk()->assertHeader('X-Robots-Tag', 'noindex, follow');
})->with(['/booking-confirmation', '/contact/thank-you', '/quote/error']);

it('puts the analytics tracker on public pages', function (string $url) {
    $this->get($url)->assertOk()
        ->assertSee('<script defer data-site="spokanetowing.com" data-outbound src="https://analytics-production-azlxso.laravel.cloud/script.js"></script>', false)
        ->assertDontSee('trackEvent.identify', false);
})->with(['/', '/quote', '/faq', '/contact', '/flatbed-towing', '/towing-cheney', '/service-areas', '/quote/error']);

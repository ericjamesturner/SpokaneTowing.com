<?php

use Illuminate\Http\Client\ConnectionException;
use Illuminate\Http\Client\Request;
use Illuminate\Support\Facades\Http;

const GPTBOT = 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; GPTBot/1.2; +https://openai.com/gptbot)';
const CHROME = 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/142.0.0.0 Safari/537.36';

beforeEach(function () {
    $this->withoutVite();
    config(['services.analytics.key' => 'sk_test', 'services.analytics.crawl_url' => 'https://analytics.test/api/server/crawl']);
    Http::preventStrayRequests();
    Http::fake(['analytics.test/*' => Http::response(['outcome' => 'recorded'], 202)]);
});

it('reports a bot\'s request to the analytics app, with what it asked for and what it got', function () {
    $this->withHeaders(['User-Agent' => GPTBOT])->get('/quote?ref=x')->assertOk();

    Http::assertSentCount(1);
    Http::assertSent(fn (Request $request) => $request->url() === 'https://analytics.test/api/server/crawl'
        && $request->hasHeader('Authorization', 'Bearer sk_test')
        && str_ends_with($request['url'], '/quote?ref=x')
        && $request['user_agent'] === GPTBOT
        && $request['status'] === 200
        && filled($request['ip']));
});

it('reports the pages bots ask for that are not there', function () {
    $this->withHeaders(['User-Agent' => 'curl/8.5.0'])->get('/wp-login.php')->assertNotFound();

    Http::assertSent(fn (Request $request) => str_ends_with($request['url'], '/wp-login.php') && $request['status'] === 404);
});

it('says nothing about a person, the health check, or anything when there is no key', function () {
    $this->withHeaders(['User-Agent' => CHROME])->get('/quote')->assertOk();
    $this->withHeaders(['User-Agent' => GPTBOT])->get('/up')->assertOk();

    config(['services.analytics.key' => null]);
    $this->withHeaders(['User-Agent' => GPTBOT])->get('/quote')->assertOk();

    Http::assertNothingSent();
});

it('serves the page all the same when the analytics app cannot be reached', function () {
    Http::fake(fn () => throw new ConnectionException('down'));

    $this->withHeaders(['User-Agent' => GPTBOT])->get('/quote')->assertOk();
});

<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Symfony\Component\HttpFoundation\Response;

/**
 * Tells the analytics app about requests from bots: AI crawlers, search
 * engines and the rest. They do not run JavaScript, so the tracking script in
 * the page never sees them, and this is the only place they can be seen.
 *
 * It passes on every request that does not look like a person's browser, once
 * the response has been sent. The analytics app works out which bot it was and
 * what it is for; a person's request that slips through is ignored there.
 */
class ReportBots
{
    // Anything that does not look like a person's browser. The analytics
    // app decides what it really is, so this only has to be generous.
    private const NOT_A_BROWSER = '/bot|crawl|spider|slurp|fetch|scrap|http|GPT|Claude|anthropic|Perplexity'
        .'|cohere|Mistral|Gemini|NotebookLM|agent|python|curl|wget|okhttp|axios|node|undici|Go-|java|ruby|libwww|headless/i';

    public function handle(Request $request, Closure $next): Response
    {
        return $next($request);
    }

    // Runs once the response has been sent, so it never slows a page down.
    public function terminate(Request $request, Response $response): void
    {
        $userAgent = (string) $request->userAgent();
        $key = config('services.analytics.key');

        // The health check is asked for every few seconds by the host itself.
        if (! $key || $request->is('up') || ($userAgent !== '' && ! preg_match(self::NOT_A_BROWSER, $userAgent))) {
            return;
        }

        rescue(fn () => Http::withToken($key)
            ->timeout(2)
            ->post(config('services.analytics.crawl_url'), [
                'url' => $request->fullUrl(),
                'user_agent' => $userAgent,
                'ip' => $request->ip(),
                'status' => $response->getStatusCode(),
            ]), report: false);
    }
}

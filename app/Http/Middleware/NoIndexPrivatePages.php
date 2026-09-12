<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class NoIndexPrivatePages
{
    public function handle(Request $request, Closure $next): Response
    {
        $response = $next($request);

        if ($request->routeIs('quote.show', 'quote.book', 'quote.thankyou', 'quote.error', 'booking.confirmation', 'contact.thankyou')) {
            $response->headers->set('X-Robots-Tag', 'noindex, follow');
        }

        return $response;
    }
}

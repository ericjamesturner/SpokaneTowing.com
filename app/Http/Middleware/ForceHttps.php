<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class ForceHttps
{
    public function handle(Request $request, Closure $next)
    {
        if (!app()->environment('production')) {
            return $next($request);
        }

        $host = $request->getHost();
        $requestUri = $request->getRequestUri();
        
        // Check if we need to redirect (either not https OR has www)
        $needsRedirect = !$request->secure() || str_starts_with($host, 'www.');
        
        if ($needsRedirect) {
            // Build the correct URL in one redirect (both https AND non-www)
            $correctHost = str_replace('www.', '', $host);
            $correctUrl = 'https://' . $correctHost . $requestUri;
            
            return redirect($correctUrl, 301);
        }
        
        return $next($request);
    }
}
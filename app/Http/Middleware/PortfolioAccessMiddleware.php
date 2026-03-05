<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Log;

class PortfolioAccessMiddleware
{
    public function handle(Request $request, Closure $next): Response
    {
        // Requirement 1: Log access
        Log::info('Portfolio accessed from IP: ' . $request->ip());

        // Requirement 2 & 3: Restrict access by simple condition & Display custom message
        // Example: Block access if the URL has ?locked=true
        if ($request->query('locked') === 'true') {
            return response('Portfolio is currently locked for maintenance. Please check back later.', 403);
        }

        return $next($request);
    }
}

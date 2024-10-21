<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class VerifyCsrfToken
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    // public function handle(Request $request, Closure $next): Response
    // {
    //     \Log::info('CSRF Middleware Accessed for URI: ' . $request->path());
    //     return $next($request);
    // }

    protected function tokensMatch($request)
    {
        $match = parent::tokensMatch($request);
        if (!$match) {
            Log::debug('CSRF token mismatch for request: ' . $request->fullUrl());
        }
        return $match;
    }

    protected $except = [
        'payments/midtrans-notification',
    ];
}

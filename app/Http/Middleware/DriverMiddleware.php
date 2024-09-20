<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class DriverMiddleware
{
    public function handle($request, Closure $next)
    {
        if (Auth::check() && Auth::user()->role === 'driver') {
            return $next($request);
        }
        return redirect('/driver/login')->with('error', 'Unauthorized access.');
    }
}

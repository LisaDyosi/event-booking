<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    /*public function handle(Request $request, Closure $next)
    {
        if (Auth::check() && Auth::user()->role === 'admin') {
            return $next($request);
        }
        return redirect('/dashboard')->with('error', 'Access Denied!');
    }*/

    public function handle(Request $request, Closure $next)
{
    if (Auth::check()) {
        if (Auth::user()->role === 'admin') {
            return $next($request);
        }

        // Redirect to the correct dashboard based on role
        return redirect($this->getDashboardRoute(Auth::user()->role))->with('error', 'Access Denied!');
    }

    return redirect('/login')->with('error', 'Please log in first.');
}

private function getDashboardRoute($role)
{
    return match ($role) {
        'organizer' => '/organizer/dashboard',
        default => '/dashboard', // Fallback
    };
}

}

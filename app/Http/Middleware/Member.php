<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Member
{
    public function handle(Request $request, Closure $next)
    {
        // Check if the user is authenticated and has a specific role or attribute
        if (auth()->check() && auth()->user()) {
            return $next($request);
        }

        // Redirect or handle unauthorized access
        return redirect()->route('userlogin.form'); // Redirect to the login page
    }
}

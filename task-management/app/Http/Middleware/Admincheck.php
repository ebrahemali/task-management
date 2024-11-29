<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Admincheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
{
    // Check if the user is authenticated
    if (auth()->check() && auth()->user()->role == 'Admin') {
        return $next($request);
    }

    // If not authenticated or not an admin, redirect to home
    return redirect('/login');
}

}

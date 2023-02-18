<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AdminUser
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
        if (Auth::check()) {
            if (auth()->user()->user_type == 'admin') {
                return $next($request);
            } else {
                Auth::logout();
                return redirect()->route('auth_login')->with('error', 'Invalid permission');
            }
        } else {
            return redirect()->route('auth_login')->with('error', 'User is not valid');
        }
    }
}

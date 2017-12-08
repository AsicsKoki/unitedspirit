<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfSubscribed
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = 'auth')
    {
        if (Auth::guard($guard)->check()) {
            $user = Auth::user();
            if (!$user::has('subscriptions'))
                redirect('/home');
        }

        return $next($request);
    }
}
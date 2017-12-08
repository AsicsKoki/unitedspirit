<?php

namespace App\Http\Middleware;

use App\User as User;
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
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->check()) {
            $user = User::with('subscriptions')->where('id',  Auth::user()->id)->first();
            if($user->subscriptions->isEmpty())
              return redirect('/home');
        }

        return $next($request);
    }
}
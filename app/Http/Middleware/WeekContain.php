<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use App\User as User;

class WeekContain
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->check()) {
            $user = User::with('weeks')->where('id',  Auth::user()->id)->first();
            if(!$user->weeks->contains($request->wid))
                return redirect('/mycampus');
        }

        return $next($request);
    }
}

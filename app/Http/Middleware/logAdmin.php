<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;


class logAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure                 $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (auth::user() && auth::user()->is_admin === 1) {

            return $next($request);
        }
        return redirect('/home');
    }
}
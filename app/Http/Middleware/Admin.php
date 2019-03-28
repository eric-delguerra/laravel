<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (Auth::user() && Auth::user()->isAdmin === 1) 
        //if (Auth()->user()->isAdmin == 1) 

        {
            return $next($request);
        }

    return redirect('products')->with('error','You have not admin access');

    }
}

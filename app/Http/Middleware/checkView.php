<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class checkView
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if(!auth()->user()){
            return redirect('/login')->with('loginFail','Please login first.');;
        }
        return $next($request);
    }
}

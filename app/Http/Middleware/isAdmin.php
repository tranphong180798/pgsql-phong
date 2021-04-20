<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Auth;

class isAdmin
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

        if (auth()->user() == null) {
            return redirect('/users')->with('loginFail','You have not admin access');
        }

        if(auth()->user()->role == 'employee' || auth()->user()->role == 'admin'){
            return $next($request);
        }

        return redirect('/users')->with('loginFail','You have not admin access');

    }


}

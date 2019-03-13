<?php

namespace App\Http\Middleware;

use Illuminate\Support\Facades\Auth;
use Closure;

class Duknis
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
         if(Auth::check()){
            if(Auth::user()->role != 2){
                return redirect('/');
            }
        } else {
            return redirect('/');
        }
        return $next($request);
    }
}

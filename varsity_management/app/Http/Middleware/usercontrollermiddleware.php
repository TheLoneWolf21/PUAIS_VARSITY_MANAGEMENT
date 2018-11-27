<?php

namespace App\Http\Middleware;

use Closure;
use Session;

class usercontrollermiddleware
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
        if($request->session()->has('user_name'))
        {
            return $next($request);
        }
        else
        {
            return redirect('/login');
        }
        return $next($request);
        
    }
}

<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class TestMiddleware
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
       $arr = [
           'Bangladesh',
           'America',
           'Canada',
           'Brasil'
       ];

       if(in_array($request->country, $arr)){
           dd("{$request->country} is available in this array");
       }
       return $next($request);
    }
}

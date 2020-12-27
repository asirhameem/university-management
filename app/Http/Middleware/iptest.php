<?php

namespace App\Http\Middleware;

use Closure;

class iptest
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

    	$ip = $request->ip();
    	if($ip == '::1') {

    		 return redirect()->route('login.index');
    	}
        return $next($request);
    }
}

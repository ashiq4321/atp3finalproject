<?php

namespace App\Http\Middleware;

use Closure;

class areYoumanager
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
        if(Session('utype')!="Manager"){
            return response()->view('manager.notmanager');
            
        }
        else{
            return $next($request);
        }
    }
}

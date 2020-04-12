<?php

namespace App\Http\Middleware;

use Closure;

class alreadyLogged
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
        if($request->session()->has('uname')){
            if ($request->session()->get('utype')=="Manager") {
                return redirect()->route('manager.index');
            }
            elseif ($request->session()->get('utype')=="Admin") {
                return redirect()->route('admin.index');
            }
            elseif ($request->session()->get('utype')=="Customer") {
                return redirect()->route('customer.index');
            }
            elseif ($request->session()->get('utype')=="HouseProvider") {
                return redirect()->route('houseProvider.index');
            }
        }else{
            return $next($request);
        }
    }
}

<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\DB;

class pendingUser
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
        if(DB::table('managers')
        ->where('username', $request->uname)
        ->where('type','Pending')
        ->exists()) {
            $request->session()->flash('msg', 'Your Account verification is under process! till then, keep browsing ');
            return redirect()->route('login.index');

        }
        elseif(DB::table('customers')
        ->where('username', $request->uname)
        ->where('type','Pending')
        ->exists()) {
            $request->session()->flash('msg', 'Your Account verification is under process! till then, keep browsing ');
            return redirect()->route('login.index');

        }
        elseif(DB::table('houseowners')
        ->where('username', $request->uname)
        ->where('type','Pending')
        ->exists()) {
            $request->session()->flash('msg', 'Your Account verification is under process! till then, keep browsing ');
            return redirect()->route('login.index');

        }
        return $next($request);
    }
}

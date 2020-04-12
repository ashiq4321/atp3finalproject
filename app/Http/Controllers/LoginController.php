<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\login;

class LoginController extends Controller
{
    
    public function index(Request $req){
    	return view('login.index');
    }

    public function verify(Request $req){
    	$user = DB::table('users')
                    ->where('username', $req->uname)
                    ->where('password', $req->password)
                    ->first();

    	if($user != null){
            $req->session()->put('uname', $req->uname);
            $req->session()->put('utype', $user->usertype);
            if($user->status!="blocked"){
                if($user->usertype=="Manager"){
                    return redirect()->route('manager.index');
                }
                elseif ($user->usertype=="Customer") {
                    return redirect()->route('customer.index');
                }
                elseif ($user->usertype=="HouseProvider") {
                    return redirect()->route('houseProvider.index');
                }     
                elseif ($user->usertype=="Admin") {
                    return redirect()->route('admin.index');
                }
            }else{
                return redirect('/userblocked');
            }
    	}else{
            $req->session()->flash('msg', 'invalid username/password');
            return redirect('/login');
    	}
    }
}

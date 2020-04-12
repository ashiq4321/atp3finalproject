<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SignupController extends Controller
{
    
    public function index(Request $req){
    	return view('signup.index');
    }

    public function verify(Request $req){
    	
    	if($req->uname == $req->password){

            $req->session()->put('uname', $req->uname);
    		return redirect()->route('manager.index');

    	}else{
            $req->session()->flash('msg', 'invalid username/password');
            return redirect('/login');
    	}
    }
}

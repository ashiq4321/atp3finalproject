<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\login;
use Validator;
use App\User;

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
    public function passrecover(Request $req){
    	return view('login.passrecover');
    }
    public function passrecovered(Request $request){
    	
    $validation = Validator::make($request->all(), [
        'username'=>'required|exists:users',
        'phone'=>'required|size:11|exists:users',
        'password'=>'required',
        'cpassword'=>'same:password'
    ]);
    if($validation->fails()){
        return back()
                ->with('errors', $validation->errors())
                ->withInput();
        return redirect()->route('login.passrecover')
                        ->with('errors', $validation->errors())
                        ->withInput();		
    }
    DB::table('users')
    ->where('username', $request->username)
    ->update(array('password'=> $request->password));
    $request->session()->flash('username', $request->username);
                $request->session()->flash('msg', 'password recoverd successfully!Enter new password and log in to the system');
                return redirect()->route('login.index'); 
    }

}

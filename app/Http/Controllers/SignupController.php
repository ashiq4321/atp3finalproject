<?php

namespace App\Http\Controllers;

use Validator;
use App\User;
use App\customer;
use App\houseProvider;
use Illuminate\Http\Request;

class SignupController extends Controller
{
    
    public function index(Request $req){
    	return view('signup.index');
    }

    public function store(Request $request)
    {
        $validation = Validator::make($request->all(), [
            'fname'=>'required',
            'lname'=>'required',
            'username'=>'required|unique:users',
            'email'=>'required|email|unique:houseowners|unique:customers',
            'division'=>'required',
            'area'=>'required',
            'address'=>'required',
            'nid'=>'required|size:13',
            'phone'=>'required|size:11',
            'usertype'=>'required',
            'password'=>'required',
            'cpassword'=>'same:password'
		]);
		if($validation->fails()){
			return back()
					->with('errors', $validation->errors())
					->withInput();
			return redirect()->route('signup.index')
							->with('errors', $validation->errors())
							->withInput();		
        }
       
        $user 			= new User;
        $user->username 	=$request->username;
		$user->password 	= $request->password;
        $user->usertype = $request->usertype;
        $user->phone 	= $request->phone;
        $houseProvider 			= new houseProvider;
        $customer 			= new customer;

        if($request->usertype=='House Provider'){
            $houseProvider->fname 	=$request->fname;
            $houseProvider->lname 	=$request->lname;
            $houseProvider->username 	=$request->username;
            $houseProvider->email = $request->email;
            $houseProvider->nid = $request->nid;
            $houseProvider->address = $request->address;
            $houseProvider->type = "Pending";
            if($user->save() &&  $houseProvider->save()){
                $request->session()->flash('username', $request->username);
                $request->session()->flash('msg', 'registered successfully!Enter password and log in to the system');
                return redirect()->route('login.index');
            }else{
                $request->session()->flash('msg', 'try again');
                return redirect()->route('signup.index');
            }
        }
        elseif($request->usertype=='Customer'){
            $customer->fname 	=$request->fname;
            $customer->lname 	=$request->lname;
            $customer->username 	=$request->username;
            $customer->email = $request->email;
            $customer->nid = $request->nid;
            $customer->address = $request->address;
            $customer->type = "Pending";

            if($user->save() && $customer->save()){
                $request->session()->flash('username', $request->username);
                $request->session()->flash('msg', 'registered successfully !Enter password and log in to the system');
                return redirect()->route('login.index');
            }else{
                $request->session()->flash('msg', 'try again');
                return redirect()->route('signup.index');
            }

        }	
    }
}

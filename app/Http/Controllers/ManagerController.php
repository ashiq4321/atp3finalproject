<?php

namespace App\Http\Controllers;

use App\manager;
use App\customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\DB;
use Validator;

class ManagerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $user = DB::table('managers')->where('username', $request->session()->get('uname'))->first();
        return view('manager.index', ['user'=>$user]);
    }

    public function pendingCustomers()
    {
        $users = customer::all()->where('type', 'Pending');
		return view('manager.pendingCustomers', ['users'=>$users]);
    }
    public function rejectCustomer(Request $request)
    {
        DB::table('customers')->where('username',$request->username)->delete();
        return redirect()->route('customer.pending');
    }
    public function acceptCustomer(Request $request,manager $manager)
    {
       $affected= DB::table('customers')
              ->where('username', $request->username)
              ->update(array('type'=> 'Accept'));
              return redirect()->route('customer.pending');             

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\manager  $manager
     * @return \Illuminate\Http\Response
     */
    public function show(manager $manager)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\manager  $manager
     * @return \Illuminate\Http\Response
     */
    public function edit(manager $manager)
    {
        
    }
    public function editProfile(Request $request)
    {
        $user = DB::table('managers')->where('username', $request->session()->get('uname'))->first();
            return view('manager.edit', ['user'=>$user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\manager  $manager
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, manager $manager)
    {
        //
    }
    public function updateProfile(Request $request, manager $manager)
    {
        $validation = Validator::make($request->all(), [
            'fname'=>'required',
            'lname'=>'required',
            'phone'=>'required|size:11',
            'nid'=>'required|size:13',
            'address'=>'required',
            'email'=>'required|email',
            'password'=>'required',
            'cpassword'=>'same:password'
		]);
		if($validation->fails()){
			return back()
					->with('errors', $validation->errors())
					->withInput();
			return redirect()->route('add.bus')
							->with('errors', $validation->errors())
							->withInput();		
        }
       $affected= DB::table('managers')
              ->where('username', $request->username)
              ->update(array('fname' => $request->fname,
                       'lname' => $request->lname, 
                       'password' => $request->password,
                       'email' => $request->email,      
                       'phone' => $request->phone,
                       'address' => $request->address,
                       'nid' => $request->nid));
            return redirect()->route('manager.index');               

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\manager  $manager
     * @return \Illuminate\Http\Response
     */
    public function destroy(manager $manager)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\manager;
use App\customer;
use App\houseinfo;
use App\houseProvider;
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
    
    public function rentedhouse()
    {
        $houses = houseinfo::all()->where('status', 'Rented');
		return view('manager.rentedHouses', ['houses'=>$houses]);
    }
    public function housetolet()
    {
        $houses = houseinfo::all()->where('status', 'Available');
		return view('manager.availableHouses', ['houses'=>$houses]);
    }
    public function owners()
    {
        $users = houseProvider::all()->where('type', 'Accept');
		return view('manager.availableHouseOwner', ['users'=>$users]);
    }
    public function blockOwner(Request $request)
    {
        DB::table('houseowners')
              ->where('username', $request->username)
              ->update(array('status'=> 'Blocked'));
		return redirect()->route('manager.owners');  
    }
    public function unblockOwner(Request $request)
    {
        DB::table('houseowners')
              ->where('username', $request->username)
              ->update(array('status'=> 'Unblocked'));
    	return redirect()->route('manager.owners');  

    }
    
    public function customers()
    {
        $users = customer::all()->where('type', 'Accept');
		return view('manager.availableCustomer', ['users'=>$users]);
    }
    public function blockCustomer(Request $request)
    {
        DB::table('customers')
              ->where('username', $request->username)
              ->update(array('status'=> 'Blocked'));
		return redirect()->route('manager.customers');  
    }
    public function unblockCustomer(Request $request)
    {
        DB::table('customers')
              ->where('username', $request->username)
              ->update(array('status'=> 'Unblocked'));
    	return redirect()->route('manager.customers');  

    }
    public function pendingHouseowners()
    {
        $users = houseProvider::all()->where('type', 'Pending');
		return view('manager.pendingHouseowners', ['users'=>$users]);
    }
    public function rejecthouseProvider(Request $request)
    {
        DB::table('houseowners')->where('username',$request->username)->delete();
        return redirect()->route('manager.pendingHouseOwner');    
    }
    public function accepthouseProvider(Request $request,manager $manager)
    {
                DB::table('houseowners')
              ->where('username', $request->username)
              ->update(array('type'=> 'Accept'));
              return redirect()->route('manager.pendingHouseOwner');             

    }
    public function pendingCustomers()
    {
        $users = customer::all()->where('type', 'Pending');
		return view('manager.pendingCustomers', ['users'=>$users]);
    }
    public function rejectCustomer(Request $request)
    {
        DB::table('customers')->where('username',$request->username)->delete();
        return redirect()->route('manager.pendingCustomers');    
    }
    public function acceptCustomer(Request $request,manager $manager)
    {
                DB::table('customers')
              ->where('username', $request->username)
              ->update(array('type'=> 'Accept'));
              return redirect()->route('manager.pendingCustomers');             

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

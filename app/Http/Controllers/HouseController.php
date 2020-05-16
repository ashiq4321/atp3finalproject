<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Mapper;

class HouseController extends Controller
{
    public function index(Request $request){
        $msg='Select as interested';
        $house=DB::table('houseinfos')->where('houseid',$request->houseid)->first();
        if(Str::contains($house->interestedcustomer, $request->session()->get('uname'))){
            $msg='select as not interested';
        }
        $houseowner=DB::table('houseowners')->where('username',$house->houseowner)->first();

        $address=explode(',',$house->address);
        Mapper::map($address[0],$address[1] );

    	return view('house.index', ['house'=>$house,'msg'=>$msg,'contact'=>$houseowner->phone,'map']);
    }

    public function selectAsInterested(Request $request){
        $house=DB::table('houseinfos')->where('houseid',$request->houseid)->first();
        DB::table('houseinfos')
              ->where('houseid', $request->houseid)
              ->update(array('interestedcustomer'=> $house->interestedcustomer.','.$request->session()->get('uname')));
              return redirect()->route('house.index',$request->houseid);
    }

    public function selectAsNotInterested(Request $request){
        $house=DB::table('houseinfos')->where('houseid',$request->houseid)->first();
        $house->interestedcustomer=str_replace(','.$request->session()->get('uname'),"",$house->interestedcustomer);
        DB::table('houseinfos')
              ->where('houseid', $request->houseid)
              ->update(array('interestedcustomer'=> $house->interestedcustomer));
              return redirect()->route('house.index',$request->houseid);
    }
}

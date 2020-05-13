<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Support\Collection;
use App\houseinfo;

class SearchController extends Controller
{
    public function index(Request $Request){
        $houses = houseinfo::all()->where('status', 'Available');
        $houses = collect($houses )->paginate(10);
		return view('search.index', ['houses'=>$houses]);
    }
    public function filter(Request $request, houseinfo $houses ){

        $houses = $houses->newQuery();

        $size = explode(',',$request->input('size'));
        $price = explode(',',$request->input('price'));


        if ($request->has('division')) {
            $houses->where('division', $request->input('division'));
        }

        if ($request->has('area')) {
            $houses->where('area', $request->input('area'));
        }
    
        if ($request->has('size')) {
            $houses->whereBetween('size', [ $size[0],$size[1]]);
        }
        
        if ($request->has('price')) {
            $houses->whereBetween('rent', [ $price[0],$price[1]]);
        }
        $houses = collect($houses->get())->paginate(10);
		return view('search.index', ['houses'=>$houses]);

    }

}

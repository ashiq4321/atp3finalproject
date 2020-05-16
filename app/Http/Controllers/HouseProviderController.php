<?php

namespace App\Http\Controllers;

use App\houseProvider;
use Illuminate\Http\Request;

class HouseProviderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {	
        return view('houseProvider.index');
		
    }
    public function placeAds(Request $request)
    {	
        return view('houseProvider.placeAds');
		
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
     * @param  \App\houseProvider  $houseProvider
     * @return \Illuminate\Http\Response
     */
    public function show(houseProvider $houseProvider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\houseProvider  $houseProvider
     * @return \Illuminate\Http\Response
     */
    public function edit(houseProvider $houseProvider)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\houseProvider  $houseProvider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, houseProvider $houseProvider)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\houseProvider  $houseProvider
     * @return \Illuminate\Http\Response
     */
    public function destroy(houseProvider $houseProvider)
    {
        //
    }
}

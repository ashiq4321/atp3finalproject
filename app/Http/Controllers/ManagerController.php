<?php

namespace App\Http\Controllers;

use App\manager;
use App\customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class ManagerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
			return view('manager.index');
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
        if (View::exists('manager.pendingCustomers')) {
            return view('manager.index');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\manager  $manager
     * @return \Illuminate\Http\Response
     */
    public function edit(manager $manager)
    {
        //
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

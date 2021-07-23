<?php

namespace App\Http\Controllers;

use App\Cephalopod;
use Illuminate\Http\Request;

class CephalopodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('user.cephalopod');
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
     * @param  \App\Cephalopod  $cephalopod
     * @return \Illuminate\Http\Response
     */
    public function show(Cephalopod $cephalopod)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cephalopod  $cephalopod
     * @return \Illuminate\Http\Response
     */
    public function edit(Cephalopod $cephalopod)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cephalopod  $cephalopod
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cephalopod $cephalopod)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cephalopod  $cephalopod
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cephalopod $cephalopod)
    {
        //
    }
}

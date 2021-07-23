<?php

namespace App\Http\Controllers;

use App\Turkey;
use Illuminate\Http\Request;

class TurkeyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('user.turkey');
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
     * @param  \App\Turkey  $turkey
     * @return \Illuminate\Http\Response
     */
    public function show(Turkey $turkey)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Turkey  $turkey
     * @return \Illuminate\Http\Response
     */
    public function edit(Turkey $turkey)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Turkey  $turkey
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Turkey $turkey)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Turkey  $turkey
     * @return \Illuminate\Http\Response
     */
    public function destroy(Turkey $turkey)
    {
        //
    }
}

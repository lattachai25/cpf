<?php

namespace App\Http\Controllers;

use App\Whiteonion;
use Illuminate\Http\Request;

class WhiteonionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('user.whiteonion');
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
     * @param  \App\Whiteonion  $whiteonion
     * @return \Illuminate\Http\Response
     */
    public function show(Whiteonion $whiteonion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Whiteonion  $whiteonion
     * @return \Illuminate\Http\Response
     */
    public function edit(Whiteonion $whiteonion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Whiteonion  $whiteonion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Whiteonion $whiteonion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Whiteonion  $whiteonion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Whiteonion $whiteonion)
    {
        //
    }
}

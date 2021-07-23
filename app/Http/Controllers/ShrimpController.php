<?php

namespace App\Http\Controllers;

use App\Shrimp;
use Illuminate\Http\Request;

class ShrimpController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('user.shrimp');
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
     * @param  \App\Shrimp  $shrimp
     * @return \Illuminate\Http\Response
     */
    public function show(Shrimp $shrimp)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Shrimp  $shrimp
     * @return \Illuminate\Http\Response
     */
    public function edit(Shrimp $shrimp)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Shrimp  $shrimp
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Shrimp $shrimp)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Shrimp  $shrimp
     * @return \Illuminate\Http\Response
     */
    public function destroy(Shrimp $shrimp)
    {
        //
    }
}

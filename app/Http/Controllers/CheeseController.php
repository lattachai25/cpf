<?php

namespace App\Http\Controllers;

use App\Cheese;
use Illuminate\Http\Request;

class CheeseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('user.cheese');
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
     * @param  \App\Cheese  $cheese
     * @return \Illuminate\Http\Response
     */
    public function show(Cheese $cheese)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cheese  $cheese
     * @return \Illuminate\Http\Response
     */
    public function edit(Cheese $cheese)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cheese  $cheese
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cheese $cheese)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cheese  $cheese
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cheese $cheese)
    {
        //
    }
}

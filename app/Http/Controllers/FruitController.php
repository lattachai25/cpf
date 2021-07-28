<?php

namespace App\Http\Controllers;

use App\Fruit;
use Illuminate\Http\Request;

class FruitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('user.fruit');
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
     * @param  \App\Fruit  $fruit
     * @return \Illuminate\Http\Response
     */
    public function show(Fruit $fruit)
    {
        //
        return view('admin/Fruit/index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Fruit  $fruit
     * @return \Illuminate\Http\Response
     */
    public function edit(Fruit $fruit)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Fruit  $fruit
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Fruit $fruit)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Fruit  $fruit
     * @return \Illuminate\Http\Response
     */
    public function destroy(Fruit $fruit)
    {
        //
    }
}

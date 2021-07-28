<?php

namespace App\Http\Controllers;

use App\Carrot;
use Illuminate\Http\Request;

class CarrotController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('user.carrot');
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
     * @param  \App\Carrot  $carrot
     * @return \Illuminate\Http\Response
     */
    public function show(Carrot $carrot)
    {
        //
        return view('admin/Carrot/index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Carrot  $carrot
     * @return \Illuminate\Http\Response
     */
    public function edit(Carrot $carrot)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Carrot  $carrot
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Carrot $carrot)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Carrot  $carrot
     * @return \Illuminate\Http\Response
     */
    public function destroy(Carrot $carrot)
    {
        //
    }
}

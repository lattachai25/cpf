<?php

namespace App\Http\Controllers;

use App\Venison;
use Illuminate\Http\Request;

class VenisonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('user.venison');
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
     * @param  \App\Venison  $venison
     * @return \Illuminate\Http\Response
     */
    public function show(Venison $venison)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Venison  $venison
     * @return \Illuminate\Http\Response
     */
    public function edit(Venison $venison)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Venison  $venison
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Venison $venison)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Venison  $venison
     * @return \Illuminate\Http\Response
     */
    public function destroy(Venison $venison)
    {
        //
    }
}

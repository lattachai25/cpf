<?php

namespace App\Http\Controllers;

use App\Strawberry;
use Illuminate\Http\Request;

class StrawberryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('user.strawberry');
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
     * @param  \App\Strawberry  $strawberry
     * @return \Illuminate\Http\Response
     */
    public function show(Strawberry $strawberry)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Strawberry  $strawberry
     * @return \Illuminate\Http\Response
     */
    public function edit(Strawberry $strawberry)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Strawberry  $strawberry
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Strawberry $strawberry)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Strawberry  $strawberry
     * @return \Illuminate\Http\Response
     */
    public function destroy(Strawberry $strawberry)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\Cherries;
use Illuminate\Http\Request;

class CherriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('user.cherries');
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
     * @param  \App\Cherries  $cherries
     * @return \Illuminate\Http\Response
     */
    public function show(Cherries $cherries)
    {
        //
        return view('admin/Cherries/index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cherries  $cherries
     * @return \Illuminate\Http\Response
     */
    public function edit(Cherries $cherries)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cherries  $cherries
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cherries $cherries)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cherries  $cherries
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cherries $cherries)
    {
        //
    }
}

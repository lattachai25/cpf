<?php

namespace App\Http\Controllers;

use App\Beetroot;
use Illuminate\Http\Request;

class BeetrootController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('user.beetroot');
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
     * @param  \App\Beetroot  $beetroot
     * @return \Illuminate\Http\Response
     */
    public function show(Beetroot $beetroot)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Beetroot  $beetroot
     * @return \Illuminate\Http\Response
     */
    public function edit(Beetroot $beetroot)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Beetroot  $beetroot
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Beetroot $beetroot)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Beetroot  $beetroot
     * @return \Illuminate\Http\Response
     */
    public function destroy(Beetroot $beetroot)
    {
        //
    }
}

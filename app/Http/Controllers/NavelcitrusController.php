<?php

namespace App\Http\Controllers;

use App\Navelcitrus;
use Illuminate\Http\Request;

class NavelcitrusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('user.navelcitrus');
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
     * @param  \App\Navelcitrus  $navelcitrus
     * @return \Illuminate\Http\Response
     */
    public function show(Navelcitrus $navelcitrus)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Navelcitrus  $navelcitrus
     * @return \Illuminate\Http\Response
     */
    public function edit(Navelcitrus $navelcitrus)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Navelcitrus  $navelcitrus
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Navelcitrus $navelcitrus)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Navelcitrus  $navelcitrus
     * @return \Illuminate\Http\Response
     */
    public function destroy(Navelcitrus $navelcitrus)
    {
        //
    }
}

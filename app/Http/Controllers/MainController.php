<?php

namespace App\Http\Controllers;

use App\main;
use Illuminate\Http\Request;

class MainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $slide = 1;
        return view('user.main', compact('slide'));
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
     * @param  \App\main  $main
     * @return \Illuminate\Http\Response
     */
    public function show(main $main)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\main  $main
     * @return \Illuminate\Http\Response
     */
    public function edit(main $main)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\main  $main
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, main $main)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\main  $main
     * @return \Illuminate\Http\Response
     */
    public function destroy(main $main)
    {
        //
    }
}

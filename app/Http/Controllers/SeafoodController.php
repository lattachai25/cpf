<?php

namespace App\Http\Controllers;

use App\Seafood;
use Illuminate\Http\Request;

class SeafoodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('user.seafood');
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
     * @param  \App\Seafood  $seafood
     * @return \Illuminate\Http\Response
     */
    public function show(Seafood $seafood)
    {
        //
        return view('admin/Seafood/index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Seafood  $seafood
     * @return \Illuminate\Http\Response
     */
    public function edit(Seafood $seafood)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Seafood  $seafood
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Seafood $seafood)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Seafood  $seafood
     * @return \Illuminate\Http\Response
     */
    public function destroy(Seafood $seafood)
    {
        //
    }
}

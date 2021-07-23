<?php

namespace App\Http\Controllers;

use App\Processedfood;
use Illuminate\Http\Request;

class ProcessedfoodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('user.processedfood');
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
     * @param  \App\Processedfood  $processedfood
     * @return \Illuminate\Http\Response
     */
    public function show(Processedfood $processedfood)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Processedfood  $processedfood
     * @return \Illuminate\Http\Response
     */
    public function edit(Processedfood $processedfood)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Processedfood  $processedfood
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Processedfood $processedfood)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Processedfood  $processedfood
     * @return \Illuminate\Http\Response
     */
    public function destroy(Processedfood $processedfood)
    {
        //
    }
}

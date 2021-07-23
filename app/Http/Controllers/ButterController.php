<?php

namespace App\Http\Controllers;

use App\Butter;
use Illuminate\Http\Request;

class ButterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('user.butter');
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
     * @param  \App\Butter  $butter
     * @return \Illuminate\Http\Response
     */
    public function show(Butter $butter)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Butter  $butter
     * @return \Illuminate\Http\Response
     */
    public function edit(Butter $butter)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Butter  $butter
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Butter $butter)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Butter  $butter
     * @return \Illuminate\Http\Response
     */
    public function destroy(Butter $butter)
    {
        //
    }
}

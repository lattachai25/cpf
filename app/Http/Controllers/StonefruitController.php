<?php

namespace App\Http\Controllers;

use App\Stonefruit;
use Illuminate\Http\Request;

class StonefruitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('user.stonefruit');
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
     * @param  \App\Stonefruit  $stonefruit
     * @return \Illuminate\Http\Response
     */
    public function show(Stonefruit $stonefruit)
    {
        //
        return view('admin/Stonefruit/index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Stonefruit  $stonefruit
     * @return \Illuminate\Http\Response
     */
    public function edit(Stonefruit $stonefruit)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Stonefruit  $stonefruit
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Stonefruit $stonefruit)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Stonefruit  $stonefruit
     * @return \Illuminate\Http\Response
     */
    public function destroy(Stonefruit $stonefruit)
    {
        //
    }
}

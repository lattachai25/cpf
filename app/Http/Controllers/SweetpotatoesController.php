<?php

namespace App\Http\Controllers;

use App\Sweetpotatoes;
use Illuminate\Http\Request;

class SweetpotatoesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('user.sweetpotatoes');
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
     * @param  \App\Sweetpotatoes  $sweetpotatoes
     * @return \Illuminate\Http\Response
     */
    public function show(Sweetpotatoes $sweetpotatoes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Sweetpotatoes  $sweetpotatoes
     * @return \Illuminate\Http\Response
     */
    public function edit(Sweetpotatoes $sweetpotatoes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Sweetpotatoes  $sweetpotatoes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sweetpotatoes $sweetpotatoes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Sweetpotatoes  $sweetpotatoes
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sweetpotatoes $sweetpotatoes)
    {
        //
    }
}

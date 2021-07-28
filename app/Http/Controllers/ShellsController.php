<?php

namespace App\Http\Controllers;

use App\Shells;
use Illuminate\Http\Request;

class ShellsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('user.shells');
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
     * @param  \App\Shells  $shells
     * @return \Illuminate\Http\Response
     */
    public function show(Shells $shells)
    {
        //
        return view('admin/Shells/index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Shells  $shells
     * @return \Illuminate\Http\Response
     */
    public function edit(Shells $shells)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Shells  $shells
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Shells $shells)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Shells  $shells
     * @return \Illuminate\Http\Response
     */
    public function destroy(Shells $shells)
    {
        //
    }
}

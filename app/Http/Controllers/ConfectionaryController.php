<?php

namespace App\Http\Controllers;

use App\Confectionary;
use Illuminate\Http\Request;

class ConfectionaryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('user.confectionary');
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
     * @param  \App\Confectionary  $confectionary
     * @return \Illuminate\Http\Response
     */
    public function show(Confectionary $confectionary)
    {
        //
        return view('admin/Confectionary/index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Confectionary  $confectionary
     * @return \Illuminate\Http\Response
     */
    public function edit(Confectionary $confectionary)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Confectionary  $confectionary
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Confectionary $confectionary)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Confectionary  $confectionary
     * @return \Illuminate\Http\Response
     */
    public function destroy(Confectionary $confectionary)
    {
        //
    }
}

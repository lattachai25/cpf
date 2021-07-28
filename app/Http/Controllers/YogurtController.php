<?php

namespace App\Http\Controllers;

use App\Yogurt;
use Illuminate\Http\Request;

class YogurtController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('user.yogurt');
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
     * @param  \App\Yogurt  $yogurt
     * @return \Illuminate\Http\Response
     */
    public function show(Yogurt $yogurt)
    {
        //
        return view('admin/Yogurt/index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Yogurt  $yogurt
     * @return \Illuminate\Http\Response
     */
    public function edit(Yogurt $yogurt)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Yogurt  $yogurt
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Yogurt $yogurt)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Yogurt  $yogurt
     * @return \Illuminate\Http\Response
     */
    public function destroy(Yogurt $yogurt)
    {
        //
    }
}

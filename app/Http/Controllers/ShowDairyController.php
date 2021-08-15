<?php

namespace App\Http\Controllers;

use App\show_dairy;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ShowDairyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){

    }
    public function show($id)
    {
        

        $venisons = DB::table('venisons')->where('venisons.id', $id)
        ->join('brands', 'venisons.brade', '=', 'brands.id')
        ->join('categories', 'venisons.category', '=', 'categories.id')
        ->join('sub_categories', 'venisons.sub_category', '=', 'sub_categories.id')
        ->select('venisons.*', 'brands.name_brand_en', 'brands.name_brand_th', 'brands.images', 'categories.name_categories', 'sub_categories.name_sub_categories')
        ->get();

        return view('user.show_turkey', compact('venisons'));
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
     * Show the form for editing the specified resource.
     *
     * @param  \App\show_dairy  $show_dairy
     * @return \Illuminate\Http\Response
     */
    public function edit(show_dairy $show_dairy)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\show_dairy  $show_dairy
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, show_dairy $show_dairy)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\show_dairy  $show_dairy
     * @return \Illuminate\Http\Response
     */
    public function destroy(show_dairy $show_dairy)
    {
        //
    }
}

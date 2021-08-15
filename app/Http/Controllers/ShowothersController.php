<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ShowothersController extends Controller
{
    //
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

}

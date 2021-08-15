<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\lamb;
use App\Brand;
use App\Category;
use App\SubCategory;
use DB;


class ShowlambController extends Controller
{
    //
    public function index(){

    }

    public function show($id)
    {
        

        $lamb = DB::table('lambs')->where('lambs.id', $id)
        ->join('brands', 'lambs.brade', '=', 'brands.id')
        ->join('categories', 'lambs.category', '=', 'categories.id')
        ->join('sub_categories', 'lambs.sub_category', '=', 'sub_categories.id')
        ->select('lambs.*', 'brands.name_brand_en', 'brands.name_brand_th', 'brands.images', 'categories.name_categories', 'sub_categories.name_sub_categories')
        ->get();

        return view('user.Show_lamb', compact('lamb'));
    }

}

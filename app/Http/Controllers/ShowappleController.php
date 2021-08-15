<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Apple;
use App\Brand;
use App\Category;
use App\SubCategory;
use DB;

class ShowappleController extends Controller
{
    //
    public function index(){

    }
    public function show($id)
    {
        

        $apple = DB::table('apples')->where('apples.id', $id)
        ->join('brands', 'apples.brade', '=', 'brands.id')
        ->join('categories', 'apples.category', '=', 'categories.id')
        ->join('sub_categories', 'apples.sub_category', '=', 'sub_categories.id')
        ->select('apples.*', 'brands.name_brand_en', 'brands.name_brand_th', 'brands.images', 'categories.name_categories', 'sub_categories.name_sub_categories')
        ->get();

        return view('user.Show_apple', compact('apple'));
    }
}

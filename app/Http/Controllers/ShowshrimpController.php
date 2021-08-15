<?php

namespace App\Http\Controllers;

use App\Shrimp;
use App\Brand;
use App\Category;
use App\SubCategory;
use DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ShowshrimpController extends Controller
{
    //
    public function index(){

    }
    public function show($id)
    {
        

        $shrimps = DB::table('shrimps')->where('shrimps.id', $id)
        ->join('brands', 'shrimps.brade', '=', 'brands.id')
        ->join('categories', 'shrimps.category', '=', 'categories.id')
        ->join('sub_categories', 'shrimps.sub_category', '=', 'sub_categories.id')
        ->select('shrimps.*', 'brands.name_brand_en', 'brands.name_brand_th', 'brands.images', 'categories.name_categories', 'sub_categories.name_sub_categories')
        ->get();

        return view('user.Show_shrimp', compact('shrimps'));
    }
}

<?php

namespace App\Http\Controllers;
use App\Turkey;
use App\Brand;
use App\Category;
use App\SubCategory;
use DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ShowyogurtController extends Controller
{
    //
    public function index(){

    }
    public function show($id)
    {
        

        $yogurts = DB::table('yogurts')->where('yogurts.id', $id)
        ->join('brands', 'yogurts.brade', '=', 'brands.id')
        ->join('categories', 'yogurts.category', '=', 'categories.id')
        ->join('sub_categories', 'yogurts.sub_category', '=', 'sub_categories.id')
        ->select('yogurts.*', 'brands.name_brand_en', 'brands.name_brand_th', 'brands.images', 'categories.name_categories', 'sub_categories.name_sub_categories')
        ->get();

        return view('user.Show_yogurt', compact('yogurts'));
    }
}

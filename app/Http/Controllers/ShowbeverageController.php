<?php

namespace App\Http\Controllers;
use App\Beverage;
use App\Brand;
use App\Category;
use App\SubCategory;
use DB;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ShowbeverageController extends Controller
{
    //
    public function index(){

    }
    public function show($id)
    {
        

        $beverages = DB::table('beverages')->where('beverages.id', $id)
        ->join('brands', 'beverages.brade', '=', 'brands.id')
        ->join('categories', 'beverages.category', '=', 'categories.id')
        ->join('sub_categories', 'beverages.sub_category', '=', 'sub_categories.id')
        ->select('beverages.*', 'brands.name_brand_en', 'brands.name_brand_th', 'brands.images', 'categories.name_categories', 'sub_categories.name_sub_categories')
        ->get();

        return view('user.Show_beverage', compact('beverages'));
    }
}

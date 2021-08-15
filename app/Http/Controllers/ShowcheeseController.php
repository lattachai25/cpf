<?php

namespace App\Http\Controllers;
use App\Cheese;
use App\Brand;
use App\Category;
use App\SubCategory;
use DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ShowcheeseController extends Controller
{
    //
    public function index(){

    }
    public function show($id)
    {
        

        $cheeses = DB::table('cheeses')->where('cheeses.id', $id)
        ->join('brands', 'cheeses.brade', '=', 'brands.id')
        ->join('categories', 'cheeses.category', '=', 'categories.id')
        ->join('sub_categories', 'cheeses.sub_category', '=', 'sub_categories.id')
        ->select('cheeses.*', 'brands.name_brand_en', 'brands.name_brand_th', 'brands.images', 'categories.name_categories', 'sub_categories.name_sub_categories')
        ->get();

        return view('user.Show_cheese', compact('cheeses'));
    }
}

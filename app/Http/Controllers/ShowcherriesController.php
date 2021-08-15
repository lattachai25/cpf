<?php

namespace App\Http\Controllers;
use App\Cherries;
use App\Brand;
use App\Category;
use App\SubCategory;
use DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ShowcherriesController extends Controller
{
    //
    public function index(){

    }
    public function show($id)
    {
        

        $cherries = DB::table('cherries')->where('cherries.id', $id)
        ->join('brands', 'cherries.brade', '=', 'brands.id')
        ->join('categories', 'cherries.category', '=', 'categories.id')
        ->join('sub_categories', 'cherries.sub_category', '=', 'sub_categories.id')
        ->select('cherries.*', 'brands.name_brand_en', 'brands.name_brand_th', 'brands.images', 'categories.name_categories', 'sub_categories.name_sub_categories')
        ->get();

        return view('user.Show_cherries', compact('cherries'));
    }
}

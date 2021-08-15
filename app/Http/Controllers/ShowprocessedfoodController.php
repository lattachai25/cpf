<?php

namespace App\Http\Controllers;
use App\Processedfood;
use App\Brand;
use App\Category;
use App\SubCategory;
use DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ShowprocessedfoodController extends Controller
{
    //
    public function index(){

    }
    public function show($id)
    {
        

        $processedfoods = DB::table('processedfoods')->where('processedfoods.id', $id)
        ->join('brands', 'processedfoods.brade', '=', 'brands.id')
        ->join('categories', 'processedfoods.category', '=', 'categories.id')
        ->join('sub_categories', 'processedfoods.sub_category', '=', 'sub_categories.id')
        ->select('processedfoods.*', 'brands.name_brand_en', 'brands.name_brand_th', 'brands.images', 'categories.name_categories', 'sub_categories.name_sub_categories')
        ->get();

        return view('user.Show_processedfood', compact('processedfoods'));
    }
}

<?php

namespace App\Http\Controllers;
use App\Carrot;
use App\Brand;
use App\Category;
use App\SubCategory;
use DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ShowcarrotController extends Controller
{
    //
    public function index(){

    }
    public function show($id)
    {
        

        $carrots = DB::table('carrots')->where('carrots.id', $id)
        ->join('brands', 'carrots.brade', '=', 'brands.id')
        ->join('categories', 'carrots.category', '=', 'categories.id')
        ->join('sub_categories', 'carrots.sub_category', '=', 'sub_categories.id')
        ->select('carrots.*', 'brands.name_brand_en', 'brands.name_brand_th', 'brands.images', 'categories.name_categories', 'sub_categories.name_sub_categories')
        ->get();

        return view('user.Show_carrot', compact('carrots'));
    }
}

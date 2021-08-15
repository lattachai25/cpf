<?php

namespace App\Http\Controllers;
use App\Butter;
use App\Brand;
use App\Category;
use App\SubCategory;
use DB;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ShowbutterController extends Controller
{
    //
    public function index(){

    }
    public function show($id)
    {
        

        $butter = DB::table('butter')->where('butter.id', $id)
        ->join('brands', 'butter.brade', '=', 'brands.id')
        ->join('categories', 'butter.category', '=', 'categories.id')
        ->join('sub_categories', 'butter.sub_category', '=', 'sub_categories.id')
        ->select('butter.*', 'brands.name_brand_en', 'brands.name_brand_th', 'brands.images', 'categories.name_categories', 'sub_categories.name_sub_categories')
        ->get();

        return view('user.Show_butter', compact('butter'));
    }
}

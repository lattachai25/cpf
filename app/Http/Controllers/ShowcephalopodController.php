<?php

namespace App\Http\Controllers;
use App\Cephalopod;
use App\Brand;
use App\Category;
use App\SubCategory;
use DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ShowcephalopodController extends Controller
{
    //
    public function index(){

    }
    public function show($id)
    {
        
        $cephalopods = DB::table('cephalopods')->where('cephalopods.id', $id)
        ->join('brands', 'cephalopods.brade', '=', 'brands.id')
        ->join('categories', 'cephalopods.category', '=', 'categories.id')
        ->join('sub_categories', 'cephalopods.sub_category', '=', 'sub_categories.id')
        ->select('cephalopods.*', 'brands.name_brand_en', 'brands.name_brand_th', 'brands.images', 'categories.name_categories', 'sub_categories.name_sub_categories')
        ->get();

        return view('user.Show_cephalopod', compact('cephalopods'));
    }
}

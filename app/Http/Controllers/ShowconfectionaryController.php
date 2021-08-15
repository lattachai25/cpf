<?php

namespace App\Http\Controllers;
use App\Confectionary;
use App\Brand;
use App\Category;
use App\SubCategory;
use DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ShowconfectionaryController extends Controller
{
    //
    public function index(){

    }
    public function show($id)
    {
        

        $confectionaries = DB::table('confectionaries')->where('confectionaries.id', $id)
        ->join('brands', 'confectionaries.brade', '=', 'brands.id')
        ->join('categories', 'confectionaries.category', '=', 'categories.id')
        ->join('sub_categories', 'confectionaries.sub_category', '=', 'sub_categories.id')
        ->select('confectionaries.*', 'brands.name_brand_en', 'brands.name_brand_th', 'brands.images', 'categories.name_categories', 'sub_categories.name_sub_categories')
        ->get();

        return view('user.Show_confectionary', compact('confectionaries'));
    }
}

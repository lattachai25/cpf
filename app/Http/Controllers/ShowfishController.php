<?php

namespace App\Http\Controllers;
use App\Fish;
use App\Brand;
use App\Category;
use App\SubCategory;
use DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ShowfishController extends Controller
{
    //
    public function index(){

    }
    public function show($id)
    {
        

        $fish = DB::table('fish')->where('fish.id', $id)
        ->join('brands', 'fish.brade', '=', 'brands.id')
        ->join('categories', 'fish.category', '=', 'categories.id')
        ->join('sub_categories', 'fish.sub_category', '=', 'sub_categories.id')
        ->select('fish.*', 'brands.name_brand_en', 'brands.name_brand_th', 'brands.images', 'categories.name_categories', 'sub_categories.name_sub_categories')
        ->get();

        return view('user.Show_fish', compact('fish'));
    }
}

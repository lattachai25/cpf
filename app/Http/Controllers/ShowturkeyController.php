<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Turkey;
use App\Brand;
use App\Category;
use App\SubCategory;
use DB;

class ShowturkeyController extends Controller
{
    //
    public function index(){

    }
    public function show($id)
    {
        

        $turkeys = DB::table('turkeys')->where('turkeys.id', $id)
        ->join('brands', 'turkeys.brade', '=', 'brands.id')
        ->join('categories', 'turkeys.category', '=', 'categories.id')
        ->join('sub_categories', 'turkeys.sub_category', '=', 'sub_categories.id')
        ->select('turkeys.*', 'brands.name_brand_en', 'brands.name_brand_th', 'brands.images', 'categories.name_categories', 'sub_categories.name_sub_categories')
        ->get();

        return view('user.show_turkey', compact('turkeys'));
    }


}

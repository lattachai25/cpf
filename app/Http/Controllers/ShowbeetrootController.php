<?php

namespace App\Http\Controllers;
use App\Beetroot;
use App\Brand;
use App\Category;
use App\SubCategory;
use DB;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ShowbeetrootController extends Controller
{
    //
    public function index(){

    }
    public function show($id)
    {
        

        $beetroots = DB::table('beetroots')->where('beetroots.id', $id)
        ->join('brands', 'beetroots.brade', '=', 'brands.id')
        ->join('categories', 'beetroots.category', '=', 'categories.id')
        ->join('sub_categories', 'beetroots.sub_category', '=', 'sub_categories.id')
        ->select('beetroots.*', 'brands.name_brand_en', 'brands.name_brand_th', 'brands.images', 'categories.name_categories', 'sub_categories.name_sub_categories')
        ->get();

        return view('user.Show_beetroot', compact('beetroots'));
    }
}

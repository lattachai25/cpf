<?php

namespace App\Http\Controllers;
use App\Stonefruit;
use App\Brand;
use App\Category;
use App\SubCategory;
use DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ShowstonefruitController extends Controller
{
    //
    public function index(){

    }
    public function show($id)
    {
        

        $stonefruits = DB::table('stonefruits')->where('stonefruits.id', $id)
        ->join('brands', 'stonefruits.brade', '=', 'brands.id')
        ->join('categories', 'stonefruits.category', '=', 'categories.id')
        ->join('sub_categories', 'stonefruits.sub_category', '=', 'sub_categories.id')
        ->select('stonefruits.*', 'brands.name_brand_en', 'brands.name_brand_th', 'brands.images', 'categories.name_categories', 'sub_categories.name_sub_categories')
        ->get();

        return view('user.Show_stonefruit', compact('stonefruits'));
    }
}

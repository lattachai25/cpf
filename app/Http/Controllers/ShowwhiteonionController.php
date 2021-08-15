<?php

namespace App\Http\Controllers;
use App\Whiteonion;
use App\Brand;
use App\Category;
use App\SubCategory;
use DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ShowwhiteonionController extends Controller
{
    //
    public function index(){

    }
    public function show($id)
    {
        

        $whiteonions = DB::table('whiteonions')->where('whiteonions.id', $id)
        ->join('brands', 'whiteonions.brade', '=', 'brands.id')
        ->join('categories', 'whiteonions.category', '=', 'categories.id')
        ->join('sub_categories', 'whiteonions.sub_category', '=', 'sub_categories.id')
        ->select('whiteonions.*', 'brands.name_brand_en', 'brands.name_brand_th', 'brands.images', 'categories.name_categories', 'sub_categories.name_sub_categories')
        ->get();

        return view('user.Show_whiteonion', compact('whiteonions'));
    }
}

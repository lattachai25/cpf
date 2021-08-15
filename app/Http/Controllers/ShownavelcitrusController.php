<?php

namespace App\Http\Controllers;
use App\Navelcitrus;
use App\Brand;
use App\Category;
use App\SubCategory;
use DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ShownavelcitrusController extends Controller
{
    //
    public function index(){

    }
    public function show($id)
    {
        

        $navelcitruses = DB::table('navelcitruses')->where('navelcitruses.id', $id)
        ->join('brands', 'navelcitruses.brade', '=', 'brands.id')
        ->join('categories', 'navelcitruses.category', '=', 'categories.id')
        ->join('sub_categories', 'navelcitruses.sub_category', '=', 'sub_categories.id')
        ->select('navelcitruses.*', 'brands.name_brand_en', 'brands.name_brand_th', 'brands.images', 'categories.name_categories', 'sub_categories.name_sub_categories')
        ->get();

        return view('user.Show_navelcitrus', compact('navelcitruses'));
    }
}

<?php

namespace App\Http\Controllers;
use App\Shells;
use App\Brand;
use App\Category;
use App\SubCategory;
use DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ShowshellsController extends Controller
{
    //
    public function index(){

    }
    public function show($id)
    {
        

        $shells = DB::table('shells')->where('shells.id', $id)
        ->join('brands', 'shells.brade', '=', 'brands.id')
        ->join('categories', 'shells.category', '=', 'categories.id')
        ->join('sub_categories', 'shells.sub_category', '=', 'sub_categories.id')
        ->select('shells.*', 'brands.name_brand_en', 'brands.name_brand_th', 'brands.images', 'categories.name_categories', 'sub_categories.name_sub_categories')
        ->get();

        return view('user.show_shells', compact('shells'));
    }
}

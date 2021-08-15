<?php

namespace App\Http\Controllers;
use App\Beef;
use App\Brand;
use App\Category;
use App\SubCategory;
use DB;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ShowbeefController extends Controller
{
    //
    public function index(){

    }
    public function show($id)
    {
        

        $beef = DB::table('Beefs')->where('Beefs.id', $id)
        ->join('brands', 'Beefs.brade', '=', 'brands.id')
        ->join('categories', 'Beefs.category', '=', 'categories.id')
        ->join('sub_categories', 'Beefs.sub_category', '=', 'sub_categories.id')
        ->select('Beefs.*', 'brands.name_brand_en', 'brands.name_brand_th', 'brands.images', 'categories.name_categories', 'sub_categories.name_sub_categories')
        ->get();

        return view('user.Show_beef', compact('beef'));
    }
}

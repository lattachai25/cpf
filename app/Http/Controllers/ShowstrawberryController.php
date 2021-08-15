<?php

namespace App\Http\Controllers;
use App\Strawberry;
use App\Brand;
use App\Category;
use App\SubCategory;
use DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ShowstrawberryController extends Controller
{
    //
    public function index(){

    }
    public function show($id)
    {
        

        $strawberries = DB::table('strawberries')->where('strawberries.id', $id)
        ->join('brands', 'strawberries.brade', '=', 'brands.id')
        ->join('categories', 'strawberries.category', '=', 'categories.id')
        ->join('sub_categories', 'strawberries.sub_category', '=', 'sub_categories.id')
        ->select('strawberries.*', 'brands.name_brand_en', 'brands.name_brand_th', 'brands.images', 'categories.name_categories', 'sub_categories.name_sub_categories')
        ->get();

        return view('user.Show_strawberry', compact('strawberries'));
    }
}

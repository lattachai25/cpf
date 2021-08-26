<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Venison;
use App\Brand;
use App\Category;
use App\SubCategory;
use DB;
class ShowvenisonController extends Controller
{
    //
    public function index(){

    }
    public function show($id)
    {
        

        $venison = DB::table('venisons')->where('venisons.id', $id)
        ->join('brands', 'venisons.brade', '=', 'brands.id')
        ->join('categories', 'venisons.category', '=', 'categories.id')
        ->join('sub_categories', 'venisons.sub_category', '=', 'sub_categories.id')
        ->select('venisons.*', 'brands.name_brand_en', 'brands.name_brand_th', 'brands.images', 'categories.name_categories', 'sub_categories.name_sub_categories')
        ->get();

        return view('user.Show_venison', compact('venison'));
    }
}
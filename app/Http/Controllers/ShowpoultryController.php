<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Poultry;
use App\Brand;
use App\Category;
use App\SubCategory;
use DB;


class ShowpoultryController extends Controller
{
    //


    public function show($id)
    {
        

        $poultry = DB::table('poultries')->where('poultries.id', $id)
        ->join('brands', 'poultries.brade', '=', 'brands.id')
        ->join('categories', 'poultries.category', '=', 'categories.id')
        ->join('sub_categories', 'poultries.sub_category', '=', 'sub_categories.id')
        ->select('poultries.*', 'brands.name_brand_en', 'brands.name_brand_th', 'brands.images', 'categories.name_categories', 'sub_categories.name_sub_categories')
        ->get();

        return view('user.show_poultry', compact('poultry'));
    }

}

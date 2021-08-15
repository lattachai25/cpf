<?php

namespace App\Http\Controllers;
use App\Sweetpotatoes;
use App\Brand;
use App\Category;
use App\SubCategory;
use DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ShowsweetpotatoesController extends Controller
{
    //
    public function index(){

    }
    public function show($id)
    {
        

        $sweetpotatoes = DB::table('sweetpotatoes')->where('sweetpotatoes.id', $id)
        ->join('brands', 'sweetpotatoes.brade', '=', 'brands.id')
        ->join('categories', 'sweetpotatoes.category', '=', 'categories.id')
        ->join('sub_categories', 'sweetpotatoes.sub_category', '=', 'sub_categories.id')
        ->select('sweetpotatoes.*', 'brands.name_brand_en', 'brands.name_brand_th', 'brands.images', 'categories.name_categories', 'sub_categories.name_sub_categories')
        ->get();

        return view('user.Show_sweetpotatoes', compact('sweetpotatoes'));
    }
}

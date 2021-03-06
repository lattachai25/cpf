<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Poultry;
use App\Brand;
use App\Category;
use App\SubCategory;
use DB;

class PoultryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
      
        $poultry = DB::table('poultries')
        ->orderBy('id', 'DESC')
        ->limit(2)
        ->join('brands', 'poultries.brade', '=', 'brands.id')
        ->join('categories', 'poultries.category', '=', 'categories.id')
        ->join('sub_categories', 'poultries.sub_category', '=', 'sub_categories.id')
        ->select('poultries.*', 'brands.name_brand_en', 'brands.name_brand_th', 'brands.images', 'categories.name_categories', 'sub_categories.name_sub_categories')
        ->get();

        $poultry2 = DB::table('poultries')
        ->orderBy('id', 'DESC')
        ->limit(1)
        ->join('brands', 'poultries.brade', '=', 'brands.id')
        ->join('categories', 'poultries.category', '=', 'categories.id')
        ->join('sub_categories', 'poultries.sub_category', '=', 'sub_categories.id')
        ->select('poultries.*', 'brands.name_brand_en', 'brands.name_brand_th', 'brands.images', 'categories.name_categories', 'sub_categories.name_sub_categories')
        ->get();

        $poultry3 = DB::table('poultries')
        ->orderBy('id', 'DESC')
        ->offset(1)
        ->limit(4)
        ->join('brands', 'poultries.brade', '=', 'brands.id')
        ->join('categories', 'poultries.category', '=', 'categories.id')
        ->join('sub_categories', 'poultries.sub_category', '=', 'sub_categories.id')
        ->select('poultries.*', 'brands.name_brand_en', 'brands.name_brand_th', 'brands.images', 'categories.name_categories', 'sub_categories.name_sub_categories')
        ->get();


        $poultry4 = DB::table('poultries')
        ->orderBy('id', 'DESC')
        ->limit(5)
        ->join('brands', 'poultries.brade', '=', 'brands.id')
        ->join('categories', 'poultries.category', '=', 'categories.id')
        ->join('sub_categories', 'poultries.sub_category', '=', 'sub_categories.id')
        ->select('poultries.*', 'brands.name_brand_en', 'brands.name_brand_th', 'brands.images', 'categories.name_categories', 'sub_categories.name_sub_categories')
        ->get();



        $poultry5 = DB::table('poultries')
        ->orderBy('id', 'DESC')
        ->join('brands', 'poultries.brade', '=', 'brands.id')
        ->join('categories', 'poultries.category', '=', 'categories.id')
        ->join('sub_categories', 'poultries.sub_category', '=', 'sub_categories.id')
        ->select('poultries.*', 'brands.name_brand_en', 'brands.name_brand_th', 'brands.images', 'categories.name_categories', 'sub_categories.name_sub_categories')
        ->get();

        return view('user.poultry', compact('poultry', 'poultry2', 'poultry3' , 'poultry4' , 'poultry5'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $brand = Brand::all();
        $category = Category::all();
        $subcategory = SubCategory::all();
        return view('admin/Poultry/create', compact('brand','category','subcategory'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
     
        // dd($request->all());
        $image = array();
        if($files = $request-> file('images_product1')){
            foreach ($files as $file){
                $image_name = md5(rand(100, 10000));
                $ext = strtolower($file->getClientOriginalExtension());
                $image_full_name = $image_name.'.'.$ext;
                $upload_path = 'files_upload/Poultry/';
                $image_url = $upload_path.$image_full_name;
                $file->move($upload_path, $image_full_name);
                $image[] = $image_url;
            }
        }
        $images_show = array();
        if($files = $request-> file('images_show')){
            foreach ($files as $file){
                $image_name = md5(rand(100, 10000));
                $ext = strtolower($file->getClientOriginalExtension());
                $image_full_name = $image_name.'.'.$ext;
                $upload_path = 'files_upload/Poultry/';
                $image_url = $upload_path.$image_full_name;
                $file->move($upload_path, $image_full_name);
                $images_show[] = $image_url;
            }
        }
        
        $attachment = array();
        if($files = $request-> file('attachment')){
            foreach ($files as $file){
                $image_name = md5(rand(1000, 10000));
                $ext = strtolower($file->getClientOriginalExtension());
                $image_full_name = $image_name.'.'.$ext;
                $upload_path = 'files_upload/Poultry/';
                $image_url = $upload_path.$image_full_name;
                $file->move($upload_path, $image_full_name);
                $attachment[] = $image_url;
            }
        }
        Poultry::insert([
                'title' => $request->title,
                'keywords' => $request->keywords,
                'description' => $request->description,
                'google_code' => $request->google_code,
                'facrbook_code' => $request->facrbook_code,
                'orteh_code' => $request->orteh_code,
                
                'brade' => $request->brade,
                'category' => $request->category,
                'sub_category' => $request->sub_category,

                'text_title_en' => $request->text_title_en,
                'text_title_th' => $request->text_title_th,

                'name_product_en' => $request->name_product_en,
                'name_product_th' => $request->name_product_th,

                'detel_product_en' => $request->detel_product_en,
                'detel_product_th' => $request->detel_product_th,

                'status' => $request->status,

                'images_product1' => implode('|', $image),
                'attachment' => implode('|', $attachment),
                'images_show' => implode('|', $images_show),
            ]);
     return redirect('Poultry/show')->with('successfully', '????????????????????????????????????????????????????????????????????????????????????????????????');





    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Poultry  $poultry
     * @return \Illuminate\Http\Response
     */
    public function show(Poultry $poultry)
    {
        //

        $poultry = poultry::orderBy('id', 'DESC')->paginate(20);
        return view('admin/Poultry/index', compact('poultry'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Poultry  $poultry
     * @return \Illuminate\Http\Response
     */
    public function edit(Poultry $poultry, $id)
    {
        //
        $Poultry = poultry::find($id);
        $brand = Brand::all();
        $category = Category::all();
        $subcategory = SubCategory::all();
        return view('admin/Poultry/edit', compact('Poultry','brand','category','subcategory'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Poultry  $poultry
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Poultry $poultry ,$id)
    {
        //
        $poultry = poultry::find($id);
        $poultry->title = $request->get('title');
        $poultry->keywords = $request->get('keywords');
        $poultry->description = $request->get('description');
        $poultry->google_code = $request->get('google_code');
        $poultry->facrbook_code = $request->get('facrbook_code');
        $poultry->orteh_code = $request->get('orteh_code');

        $poultry->brade = $request->get('brade');
        $poultry->category = $request->get('category');
        $poultry->sub_category = $request->get('sub_category');

        $poultry->text_title_en = $request->get('text_title_en');
        $poultry->text_title_th = $request->get('text_title_th');

        $poultry->name_product_en = $request->get('name_product_en');
        $poultry->name_product_th = $request->get('name_product_th');

        $poultry->status = $request->get('status');

        $poultry->images_product1 = $request->get('images_product1');
        $poultry->attachment = $request->get('attachment');


        $image = array();
        if($files = $request-> file('images_product1')){
            foreach ($files as $file){
                $image_name = md5(rand(100, 10000));
                $ext = strtolower($file->getClientOriginalExtension());
                $image_full_name = $image_name.'.'.$ext;
                $upload_path = 'files_upload/Poultry/';
                $image_url = $upload_path.$image_full_name;
                $file->move($upload_path, $image_full_name);
                $image[] = $image_url;
            }
        }

        $attachment = array();
        if($files = $request-> file('attachment')){
            foreach ($files as $file){
                $image_name = md5(rand(1000, 10000));
                $ext = strtolower($file->getClientOriginalExtension());
                $image_full_name = $image_name.'.'.$ext;
                $upload_path = 'files_upload/Poultry/';
                $image_url = $upload_path.$image_full_name;
                $file->move($upload_path, $image_full_name);
                $attachment[] = $image_url;
            }
        }
        $poultry->save();
      return redirect('Poultry/show')->with('success', '????????????????????????????????????????????????????????????????????????????????????????????????');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Poultry  $poultry
     * @return \Illuminate\Http\Response
     */
    public function destroy(Poultry $poultry, $id)
    {
        //
        $poultry = poultry::find($id);
        $poultry->delete();

        return redirect('/Poultry/show')->with('success', '???????????????????????????????????????????????? ???????????????????????????????????????');
    }
}

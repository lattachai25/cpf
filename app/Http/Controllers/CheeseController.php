<?php

namespace App\Http\Controllers;

use App\Cheese;
use App\Brand;
use App\Category;
use App\SubCategory;
use DB;
use Illuminate\Http\Request;

class CheeseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $cheeses = DB::table('cheeses')
        ->orderBy('id', 'DESC')
        ->limit(3)
        ->join('brands', 'cheeses.brade', '=', 'brands.id')
        ->join('categories', 'cheeses.category', '=', 'categories.id')
        ->join('sub_categories', 'cheeses.sub_category', '=', 'sub_categories.id')
        ->select('cheeses.*', 'brands.name_brand_en', 'brands.name_brand_th', 'brands.images', 'categories.name_categories', 'sub_categories.name_sub_categories')
        ->get();

        $cheeses2 = DB::table('cheeses')
        ->orderBy('id', 'DESC')
        ->limit(1)
        ->join('brands', 'cheeses.brade', '=', 'brands.id')
        ->join('categories', 'cheeses.category', '=', 'categories.id')
        ->join('sub_categories', 'cheeses.sub_category', '=', 'sub_categories.id')
        ->select('cheeses.*', 'brands.name_brand_en', 'brands.name_brand_th', 'brands.images', 'categories.name_categories', 'sub_categories.name_sub_categories')
        ->get();

        $cheeses3 = DB::table('cheeses')
        ->orderBy('id', 'DESC')
        ->offset(1)
        ->limit(4)
        ->join('brands', 'cheeses.brade', '=', 'brands.id')
        ->join('categories', 'cheeses.category', '=', 'categories.id')
        ->join('sub_categories', 'cheeses.sub_category', '=', 'sub_categories.id')
        ->select('cheeses.*', 'brands.name_brand_en', 'brands.name_brand_th', 'brands.images', 'categories.name_categories', 'sub_categories.name_sub_categories')
        ->get();


        $cheeses4 = DB::table('cheeses')
        ->orderBy('id', 'DESC')
        ->limit(5)
        ->join('brands', 'cheeses.brade', '=', 'brands.id')
        ->join('categories', 'cheeses.category', '=', 'categories.id')
        ->join('sub_categories', 'cheeses.sub_category', '=', 'sub_categories.id')
        ->select('cheeses.*', 'brands.name_brand_en', 'brands.name_brand_th', 'brands.images', 'categories.name_categories', 'sub_categories.name_sub_categories')
        ->get();



        $cheeses5 = DB::table('cheeses')
        ->orderBy('id', 'DESC')
        ->join('brands', 'cheeses.brade', '=', 'brands.id')
        ->join('categories', 'cheeses.category', '=', 'categories.id')
        ->join('sub_categories', 'cheeses.sub_category', '=', 'sub_categories.id')
        ->select('cheeses.*', 'brands.name_brand_en', 'brands.name_brand_th', 'brands.images', 'categories.name_categories', 'sub_categories.name_sub_categories')
        ->get();

        return view('user.cheese', compact('cheeses', 'cheeses2', 'cheeses3' , 'cheeses4' , 'cheeses5'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $cheese = Cheese::all();
        $brand = Brand::all();
        $category = Category::all();
        $subcategory = SubCategory::all();
        return view('admin/Cheese/create', compact('cheese','brand','category','subcategory'));
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
                $upload_path = 'files_upload/Cheese/';
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
                $upload_path = 'files_upload/Cheese/';
                $image_url = $upload_path.$image_full_name;
                $file->move($upload_path, $image_full_name);
                $attachment[] = $image_url;
            }
        }
        $images_show = array();
        if($files = $request-> file('images_show')){
            foreach ($files as $file){
                $image_name = md5(rand(100, 10000));
                $ext = strtolower($file->getClientOriginalExtension());
                $image_full_name = $image_name.'.'.$ext;
                $upload_path = 'files_upload/Cheese/';
                $image_url = $upload_path.$image_full_name;
                $file->move($upload_path, $image_full_name);
                $images_show[] = $image_url;
            }
        }
        Cheese::insert([
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
     return redirect('Cheese/show')->with('successfully', '????????????????????????????????????????????????????????????????????????????????????????????????');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cheese  $cheese
     * @return \Illuminate\Http\Response
     */
    public function show(Cheese $cheese)
    {
        //
        $cheese = Cheese::orderBy('id', 'DESC')->paginate(20);
        return view('admin/Cheese/index', compact('cheese'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cheese  $cheese
     * @return \Illuminate\Http\Response
     */
    public function edit(Cheese $cheese, $id)
    {
        //
        $cheese = Cheese::find($id);
        $brand = Brand::all();
        $category = Category::all();
        $subcategory = SubCategory::all();
        return view('admin/Cheese/edit', compact('cheese','brand','category','subcategory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cheese  $cheese
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cheese $cheese, $id)
    {
        //
        $cheese = Cheese::find($id);
        $cheese->title = $request->get('title');
        $cheese->keywords = $request->get('keywords');
        $cheese->description = $request->get('description');
        $cheese->google_code = $request->get('google_code');
        $cheese->facrbook_code = $request->get('facrbook_code');
        $cheese->orteh_code = $request->get('orteh_code');

        $cheese->brade = $request->get('brade');
        $cheese->category = $request->get('category');
        $cheese->sub_category = $request->get('sub_category');

        $cheese->text_title_en = $request->get('text_title_en');
        $cheese->text_title_th = $request->get('text_title_th');

        $cheese->name_product_en = $request->get('name_product_en');
        $cheese->name_product_th = $request->get('name_product_th');

        $cheese->status = $request->get('status');

        $cheese->images_product1 = $request->get('images_product1');
        $cheese->attachment = $request->get('attachment');
        $cheese->images_show = $request->get('images_show');


        $image = array();
        if($files = $request-> file('images_product1')){
            foreach ($files as $file){
                $image_name = md5(rand(100, 10000));
                $ext = strtolower($file->getClientOriginalExtension());
                $image_full_name = $image_name.'.'.$ext;
                $upload_path = 'files_upload/Cheese/';
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
                $upload_path = 'files_upload/Cheese/';
                $image_url = $upload_path.$image_full_name;
                $file->move($upload_path, $image_full_name);
                $attachment[] = $image_url;
            }
        }
        $images_show = array();
        if($files = $request-> file('images_show')){
            foreach ($files as $file){
                $image_name = md5(rand(100, 10000));
                $ext = strtolower($file->getClientOriginalExtension());
                $image_full_name = $image_name.'.'.$ext;
                $upload_path = 'files_upload/Cheese/';
                $image_url = $upload_path.$image_full_name;
                $file->move($upload_path, $image_full_name);
                $images_show[] = $image_url;
            }
        }
        $cheese->save();
      return redirect('Cheese/show')->with('success', '????????????????????????????????????????????????????????????????????????????????????????????????');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cheese  $cheese
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cheese $cheese, $id)
    {
        //
        $cheese = Cheese::find($id);
        $cheese->delete();

        return redirect('/Cheese/show')->with('success', '???????????????????????????????????????????????? ???????????????????????????????????????');
    }
}

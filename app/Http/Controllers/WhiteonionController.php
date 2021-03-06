<?php

namespace App\Http\Controllers;

use App\Whiteonion;
use App\Brand;
use App\Category;
use App\SubCategory;
use DB;
use Illuminate\Http\Request;

class WhiteonionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $whiteonions = DB::table('whiteonions')
        ->orderBy('id', 'DESC')
        ->limit(3)
        ->join('brands', 'whiteonions.brade', '=', 'brands.id')
        ->join('categories', 'whiteonions.category', '=', 'categories.id')
        ->join('sub_categories', 'whiteonions.sub_category', '=', 'sub_categories.id')
        ->select('whiteonions.*', 'brands.name_brand_en', 'brands.name_brand_th', 'brands.images', 'categories.name_categories', 'sub_categories.name_sub_categories')
        ->get();

        $whiteonions2 = DB::table('whiteonions')
        ->orderBy('id', 'DESC')
        ->limit(1)
        ->join('brands', 'whiteonions.brade', '=', 'brands.id')
        ->join('categories', 'whiteonions.category', '=', 'categories.id')
        ->join('sub_categories', 'whiteonions.sub_category', '=', 'sub_categories.id')
        ->select('whiteonions.*', 'brands.name_brand_en', 'brands.name_brand_th', 'brands.images', 'categories.name_categories', 'sub_categories.name_sub_categories')
        ->get();

        $whiteonions3 = DB::table('whiteonions')
        ->orderBy('id', 'DESC')
        ->offset(1)
        ->limit(4)
        ->join('brands', 'whiteonions.brade', '=', 'brands.id')
        ->join('categories', 'whiteonions.category', '=', 'categories.id')
        ->join('sub_categories', 'whiteonions.sub_category', '=', 'sub_categories.id')
        ->select('whiteonions.*', 'brands.name_brand_en', 'brands.name_brand_th', 'brands.images', 'categories.name_categories', 'sub_categories.name_sub_categories')
        ->get();


        $whiteonions4 = DB::table('whiteonions')
        ->orderBy('id', 'DESC')
        ->limit(5)
        ->join('brands', 'whiteonions.brade', '=', 'brands.id')
        ->join('categories', 'whiteonions.category', '=', 'categories.id')
        ->join('sub_categories', 'whiteonions.sub_category', '=', 'sub_categories.id')
        ->select('whiteonions.*', 'brands.name_brand_en', 'brands.name_brand_th', 'brands.images', 'categories.name_categories', 'sub_categories.name_sub_categories')
        ->get();



        $whiteonions5 = DB::table('whiteonions')
        ->orderBy('id', 'DESC')
        ->join('brands', 'whiteonions.brade', '=', 'brands.id')
        ->join('categories', 'whiteonions.category', '=', 'categories.id')
        ->join('sub_categories', 'whiteonions.sub_category', '=', 'sub_categories.id')
        ->select('whiteonions.*', 'brands.name_brand_en', 'brands.name_brand_th', 'brands.images', 'categories.name_categories', 'sub_categories.name_sub_categories')
        ->get();

        return view('user.whiteonion', compact('whiteonions', 'whiteonions2', 'whiteonions3' , 'whiteonions4' , 'whiteonions5'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $whiteonion = Whiteonion::all();
        $brand = Brand::all();
        $category = Category::all();
        $subcategory = SubCategory::all();
        return view('admin/Whiteonion/create', compact('whiteonion','brand','category','subcategory'));
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
                     $upload_path = 'files_upload/Whiteonion/';
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
                    $upload_path = 'files_upload/Whiteonion/';
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
                     $upload_path = 'files_upload/Whiteonion/';
                     $image_url = $upload_path.$image_full_name;
                     $file->move($upload_path, $image_full_name);
                     $attachment[] = $image_url;
                 }
             }
             Whiteonion::insert([
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
          return redirect('Whiteonion/show')->with('successfully', '????????????????????????????????????????????????????????????????????????????????????????????????');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Whiteonion  $whiteonion
     * @return \Illuminate\Http\Response
     */
    public function show(Whiteonion $whiteonion)
    {
        //
        $whiteonion = Whiteonion::orderBy('id', 'DESC')->paginate(20);
        return view('admin/Whiteonion/index', compact('whiteonion'));        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Whiteonion  $whiteonion
     * @return \Illuminate\Http\Response
     */
    public function edit(Whiteonion $whiteonion, $id)
    {
        //
        $whiteonion = Whiteonion::find($id);
        $brand = Brand::all();
        $category = Category::all();
        $subcategory = SubCategory::all();
        return view('admin/Whiteonion/edit', compact('whiteonion','brand','category','subcategory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Whiteonion  $whiteonion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Whiteonion $whiteonion, $id)
    {
        //
        $whiteonion = Whiteonion::find($id);
        $whiteonion->title = $request->get('title');
        $whiteonion->keywords = $request->get('keywords');
        $whiteonion->description = $request->get('description');
        $whiteonion->google_code = $request->get('google_code');
        $whiteonion->facrbook_code = $request->get('facrbook_code');
        $whiteonion->orteh_code = $request->get('orteh_code');

        $whiteonion->brade = $request->get('brade');
        $whiteonion->category = $request->get('category');
        $whiteonion->sub_category = $request->get('sub_category');

        $whiteonion->text_title_en = $request->get('text_title_en');
        $whiteonion->text_title_th = $request->get('text_title_th');

        $whiteonion->name_product_en = $request->get('name_product_en');
        $whiteonion->name_product_th = $request->get('name_product_th');

        $whiteonion->status = $request->get('status');

        $whiteonion->images_product1 = $request->get('images_product1');
        $whiteonion->attachment = $request->get('attachment');
        $whiteonion->images_show = $request->get('images_show');


        $image = array();
        if($files = $request-> file('images_product1')){
            foreach ($files as $file){
                $image_name = md5(rand(100, 10000));
                $ext = strtolower($file->getClientOriginalExtension());
                $image_full_name = $image_name.'.'.$ext;
                $upload_path = 'files_upload/Whiteonion/';
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
                $upload_path = 'files_upload/Whiteonion/';
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
                $upload_path = 'files_upload/Whiteonion/';
                $image_url = $upload_path.$image_full_name;
                $file->move($upload_path, $image_full_name);
                $attachment[] = $image_url;
            }
        }
        $whiteonion->save();
      return redirect('Whiteonion/show')->with('success', '????????????????????????????????????????????????????????????????????????????????????????????????');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Whiteonion  $whiteonion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Whiteonion $whiteonion, $id)
    {
        //
        $whiteonion = Whiteonion::find($id);
        $whiteonion->delete();

        return redirect('/Whiteonion/show')->with('success', '???????????????????????????????????????????????? ???????????????????????????????????????');
    }
}

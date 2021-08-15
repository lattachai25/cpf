<?php

namespace App\Http\Controllers;

use App\Shrimp;
use App\Brand;
use App\Category;
use App\SubCategory;
use DB;
use Illuminate\Http\Request;

class ShrimpController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $shrimps = DB::table('shrimps')
        ->orderBy('id', 'DESC')
        ->limit(3)
        ->join('brands', 'shrimps.brade', '=', 'brands.id')
        ->join('categories', 'shrimps.category', '=', 'categories.id')
        ->join('sub_categories', 'shrimps.sub_category', '=', 'sub_categories.id')
        ->select('shrimps.*', 'brands.name_brand_en', 'brands.name_brand_th', 'brands.images', 'categories.name_categories', 'sub_categories.name_sub_categories')
        ->get();

        $shrimps2 = DB::table('shrimps')
        ->orderBy('id', 'DESC')
        ->limit(1)
        ->join('brands', 'shrimps.brade', '=', 'brands.id')
        ->join('categories', 'shrimps.category', '=', 'categories.id')
        ->join('sub_categories', 'shrimps.sub_category', '=', 'sub_categories.id')
        ->select('shrimps.*', 'brands.name_brand_en', 'brands.name_brand_th', 'brands.images', 'categories.name_categories', 'sub_categories.name_sub_categories')
        ->get();

        $shrimps3 = DB::table('shrimps')
        ->orderBy('id', 'DESC')
        ->offset(1)
        ->limit(4)
        ->join('brands', 'shrimps.brade', '=', 'brands.id')
        ->join('categories', 'shrimps.category', '=', 'categories.id')
        ->join('sub_categories', 'shrimps.sub_category', '=', 'sub_categories.id')
        ->select('shrimps.*', 'brands.name_brand_en', 'brands.name_brand_th', 'brands.images', 'categories.name_categories', 'sub_categories.name_sub_categories')
        ->get();


        $shrimps4 = DB::table('shrimps')
        ->orderBy('id', 'DESC')
        ->limit(5)
        ->join('brands', 'shrimps.brade', '=', 'brands.id')
        ->join('categories', 'shrimps.category', '=', 'categories.id')
        ->join('sub_categories', 'shrimps.sub_category', '=', 'sub_categories.id')
        ->select('shrimps.*', 'brands.name_brand_en', 'brands.name_brand_th', 'brands.images', 'categories.name_categories', 'sub_categories.name_sub_categories')
        ->get();



        $shrimps5 = DB::table('shrimps')
        ->orderBy('id', 'DESC')
        ->join('brands', 'shrimps.brade', '=', 'brands.id')
        ->join('categories', 'shrimps.category', '=', 'categories.id')
        ->join('sub_categories', 'shrimps.sub_category', '=', 'sub_categories.id')
        ->select('shrimps.*', 'brands.name_brand_en', 'brands.name_brand_th', 'brands.images', 'categories.name_categories', 'sub_categories.name_sub_categories')
        ->get();

        return view('user.shrimp', compact('shrimps', 'shrimps2', 'shrimps3' , 'shrimps4' , 'shrimps5'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $shrimp = Shrimp::all();
        $brand = Brand::all();
        $category = Category::all();
        $subcategory = SubCategory::all();
        return view('admin/Shrimp/create', compact('shrimp','brand','category','subcategory'));
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
                 $upload_path = 'files_upload/Shrimp/';
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
                $upload_path = 'files_upload/Shrimp/';
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
                 $upload_path = 'files_upload/Shrimp/';
                 $image_url = $upload_path.$image_full_name;
                 $file->move($upload_path, $image_full_name);
                 $attachment[] = $image_url;
             }
         }
         Shrimp::insert([
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
      return redirect('Shrimp/show')->with('successfully', 'ได้ทำการเพิ่มข้อมูลเรียบร้อยแล้ว');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Shrimp  $shrimp
     * @return \Illuminate\Http\Response
     */
    public function show(Shrimp $shrimp)
    {
        //
        $shrimp = Shrimp::orderBy('id', 'DESC')->paginate(20);
        return view('admin/Shrimp/index', compact('shrimp'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Shrimp  $shrimp
     * @return \Illuminate\Http\Response
     */
    public function edit(Shrimp $shrimp, $id)
    {
        //
        $shrimp = Shrimp::find($id);
        $brand = Brand::all();
        $category = Category::all();
        $subcategory = SubCategory::all();
        return view('admin/Shrimp/edit', compact('shrimp','brand','category','subcategory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Shrimp  $shrimp
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Shrimp $shrimp, $id)
    {
        //
        $shrimp = Shrimp::find($id);
        $shrimp->title = $request->get('title');
        $shrimp->keywords = $request->get('keywords');
        $shrimp->description = $request->get('description');
        $shrimp->google_code = $request->get('google_code');
        $shrimp->facrbook_code = $request->get('facrbook_code');
        $shrimp->orteh_code = $request->get('orteh_code');

        $shrimp->brade = $request->get('brade');
        $shrimp->category = $request->get('category');
        $shrimp->sub_category = $request->get('sub_category');

        $shrimp->text_title_en = $request->get('text_title_en');
        $shrimp->text_title_th = $request->get('text_title_th');

        $shrimp->name_product_en = $request->get('name_product_en');
        $shrimp->name_product_th = $request->get('name_product_th');

        $shrimp->status = $request->get('status');

        $shrimp->images_product1 = $request->get('images_product1');
        $shrimp->attachment = $request->get('attachment');
        $shrimp->images_show = $request->get('images_show');


        $image = array();
        if($files = $request-> file('images_product1')){
            foreach ($files as $file){
                $image_name = md5(rand(100, 10000));
                $ext = strtolower($file->getClientOriginalExtension());
                $image_full_name = $image_name.'.'.$ext;
                $upload_path = 'files_upload/Shrimp/';
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
                $upload_path = 'files_upload/Shrimp/';
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
                $upload_path = 'files_upload/Shrimp/';
                $image_url = $upload_path.$image_full_name;
                $file->move($upload_path, $image_full_name);
                $attachment[] = $image_url;
            }
        }
        $shrimp->save();
      return redirect('Shrimp/show')->with('success', 'ได้ทำการแก้ไขข้อมูลเรียบร้อยแล้ว');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Shrimp  $shrimp
     * @return \Illuminate\Http\Response
     */
    public function destroy(Shrimp $shrimp, $id)
    {
        //
        $shrimp = Shrimp::find($id);
        $shrimp->delete();

        return redirect('/Shrimp/show')->with('success', 'ได้ทำการลบข้อมูล เรียบร้อยแล้ว');
    }
}

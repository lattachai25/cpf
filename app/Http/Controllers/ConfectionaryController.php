<?php

namespace App\Http\Controllers;

use App\Confectionary;
use App\Brand;
use App\Category;
use App\SubCategory;
use DB;
use Illuminate\Http\Request;

class ConfectionaryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $confectionaries = DB::table('confectionaries')
        ->orderBy('id', 'DESC')
        ->limit(3)
        ->join('brands', 'confectionaries.brade', '=', 'brands.id')
        ->join('categories', 'confectionaries.category', '=', 'categories.id')
        ->join('sub_categories', 'confectionaries.sub_category', '=', 'sub_categories.id')
        ->select('confectionaries.*', 'brands.name_brand_en', 'brands.name_brand_th', 'brands.images', 'categories.name_categories', 'sub_categories.name_sub_categories')
        ->get();

        $confectionaries2 = DB::table('confectionaries')
        ->orderBy('id', 'DESC')
        ->limit(1)
        ->join('brands', 'confectionaries.brade', '=', 'brands.id')
        ->join('categories', 'confectionaries.category', '=', 'categories.id')
        ->join('sub_categories', 'confectionaries.sub_category', '=', 'sub_categories.id')
        ->select('confectionaries.*', 'brands.name_brand_en', 'brands.name_brand_th', 'brands.images', 'categories.name_categories', 'sub_categories.name_sub_categories')
        ->get();

        $confectionaries3 = DB::table('confectionaries')
        ->orderBy('id', 'DESC')
        ->offset(1)
        ->limit(4)
        ->join('brands', 'confectionaries.brade', '=', 'brands.id')
        ->join('categories', 'confectionaries.category', '=', 'categories.id')
        ->join('sub_categories', 'confectionaries.sub_category', '=', 'sub_categories.id')
        ->select('confectionaries.*', 'brands.name_brand_en', 'brands.name_brand_th', 'brands.images', 'categories.name_categories', 'sub_categories.name_sub_categories')
        ->get();


        $confectionaries4 = DB::table('confectionaries')
        ->orderBy('id', 'DESC')
        ->limit(5)
        ->join('brands', 'confectionaries.brade', '=', 'brands.id')
        ->join('categories', 'confectionaries.category', '=', 'categories.id')
        ->join('sub_categories', 'confectionaries.sub_category', '=', 'sub_categories.id')
        ->select('confectionaries.*', 'brands.name_brand_en', 'brands.name_brand_th', 'brands.images', 'categories.name_categories', 'sub_categories.name_sub_categories')
        ->get();



        $confectionaries5 = DB::table('confectionaries')
        ->orderBy('id', 'DESC')
        ->join('brands', 'confectionaries.brade', '=', 'brands.id')
        ->join('categories', 'confectionaries.category', '=', 'categories.id')
        ->join('sub_categories', 'confectionaries.sub_category', '=', 'sub_categories.id')
        ->select('confectionaries.*', 'brands.name_brand_en', 'brands.name_brand_th', 'brands.images', 'categories.name_categories', 'sub_categories.name_sub_categories')
        ->get();

        return view('user.confectionary', compact('confectionaries', 'confectionaries2', 'confectionaries3' , 'confectionaries4' , 'confectionaries5'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $confectionary = Confectionary::all();
        $brand = Brand::all();
        $category = Category::all();
        $subcategory = SubCategory::all();
        return view('admin/Confectionary/create', compact('confectionary','brand','category','subcategory'));
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
                 $upload_path = 'files_upload/Confectionary/';
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
                 $upload_path = 'files_upload/Confectionary/';
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
                 $upload_path = 'files_upload/Confectionary/';
                 $image_url = $upload_path.$image_full_name;
                 $file->move($upload_path, $image_full_name);
                 $images_show[] = $image_url;
             }
         }
         
         Confectionary::insert([
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
      return redirect('Confectionary/show')->with('successfully', 'ได้ทำการเพิ่มข้อมูลเรียบร้อยแล้ว');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Confectionary  $confectionary
     * @return \Illuminate\Http\Response
     */
    public function show(Confectionary $confectionary)
    {
        //
        $confectionary = Confectionary::orderBy('id', 'DESC')->paginate(20);
        return view('admin/Confectionary/index', compact('confectionary'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Confectionary  $confectionary
     * @return \Illuminate\Http\Response
     */
    public function edit(Confectionary $confectionary, $id)
    {
        //
        $confectionary = Confectionary::find($id);
        $brand = Brand::all();
        $category = Category::all();
        $subcategory = SubCategory::all();
        return view('admin/Confectionary/edit', compact('confectionary','brand','category','subcategory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Confectionary  $confectionary
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Confectionary $confectionary, $id)
    {
        //
        $confectionary = Confectionary::find($id);
        $confectionary->title = $request->get('title');
        $confectionary->keywords = $request->get('keywords');
        $confectionary->description = $request->get('description');
        $confectionary->google_code = $request->get('google_code');
        $confectionary->facrbook_code = $request->get('facrbook_code');
        $confectionary->orteh_code = $request->get('orteh_code');

        $confectionary->brade = $request->get('brade');
        $confectionary->category = $request->get('category');
        $confectionary->sub_category = $request->get('sub_category');

        $confectionary->text_title_en = $request->get('text_title_en');
        $confectionary->text_title_th = $request->get('text_title_th');

        $confectionary->name_product_en = $request->get('name_product_en');
        $confectionary->name_product_th = $request->get('name_product_th');

        $confectionary->status = $request->get('status');

        $confectionary->images_product1 = $request->get('images_product1');
        $confectionary->attachment = $request->get('attachment');
        $confectionary->images_show = $request->get('images_show');


        $image = array();
        if($files = $request-> file('images_product1')){
            foreach ($files as $file){
                $image_name = md5(rand(100, 10000));
                $ext = strtolower($file->getClientOriginalExtension());
                $image_full_name = $image_name.'.'.$ext;
                $upload_path = 'files_upload/Confectionary/';
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
                $upload_path = 'files_upload/Confectionary/';
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
                $upload_path = 'files_upload/Confectionary/';
                $image_url = $upload_path.$image_full_name;
                $file->move($upload_path, $image_full_name);
                $images_show[] = $image_url;
            }
        }
        
        $confectionary->save();
      return redirect('Confectionary/show')->with('success', 'ได้ทำการแก้ไขข้อมูลเรียบร้อยแล้ว');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Confectionary  $confectionary
     * @return \Illuminate\Http\Response
     */
    public function destroy(Confectionary $confectionary, $id)
    {
        //
        $confectionary = Confectionary::find($id);
        $confectionary->delete();

        return redirect('/Confectionary/show')->with('success', 'ได้ทำการลบข้อมูล เรียบร้อยแล้ว');
    }
}

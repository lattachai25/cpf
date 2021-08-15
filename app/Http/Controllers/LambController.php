<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lamb;
use App\Brand;
use App\Category;
use App\SubCategory;
use DB;

class LambController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lamb = DB::table('lambs')
        ->orderBy('id', 'DESC')
        ->limit(2)
        ->join('brands', 'lambs.brade', '=', 'brands.id')
        ->join('categories', 'lambs.category', '=', 'categories.id')
        ->join('sub_categories', 'lambs.sub_category', '=', 'sub_categories.id')
        ->select('lambs.*', 'brands.name_brand_en', 'brands.name_brand_th', 'brands.images', 'categories.name_categories', 'sub_categories.name_sub_categories')
        ->get();

        $lamb2 = DB::table('lambs')
        ->orderBy('id', 'DESC')
        ->limit(1)
        ->join('brands', 'lambs.brade', '=', 'brands.id')
        ->join('categories', 'lambs.category', '=', 'categories.id')
        ->join('sub_categories', 'lambs.sub_category', '=', 'sub_categories.id')
        ->select('lambs.*', 'brands.name_brand_en', 'brands.name_brand_th', 'brands.images', 'categories.name_categories', 'sub_categories.name_sub_categories')
        ->get();

        $lamb3 = DB::table('lambs')
        ->orderBy('id', 'DESC')
        ->offset(1)
        ->limit(4)
        ->join('brands', 'lambs.brade', '=', 'brands.id')
        ->join('categories', 'lambs.category', '=', 'categories.id')
        ->join('sub_categories', 'lambs.sub_category', '=', 'sub_categories.id')
        ->select('lambs.*', 'brands.name_brand_en', 'brands.name_brand_th', 'brands.images', 'categories.name_categories', 'sub_categories.name_sub_categories')
        ->get();


        $lamb4 = DB::table('lambs')
        ->orderBy('id', 'DESC')
        ->limit(5)
        ->join('brands', 'lambs.brade', '=', 'brands.id')
        ->join('categories', 'lambs.category', '=', 'categories.id')
        ->join('sub_categories', 'lambs.sub_category', '=', 'sub_categories.id')
        ->select('lambs.*', 'brands.name_brand_en', 'brands.name_brand_th', 'brands.images', 'categories.name_categories', 'sub_categories.name_sub_categories')
        ->get();



        $lamb5 = DB::table('lambs')
        ->orderBy('id', 'DESC')
        ->join('brands', 'lambs.brade', '=', 'brands.id')
        ->join('categories', 'lambs.category', '=', 'categories.id')
        ->join('sub_categories', 'lambs.sub_category', '=', 'sub_categories.id')
        ->select('lambs.*', 'brands.name_brand_en', 'brands.name_brand_th', 'brands.images', 'categories.name_categories', 'sub_categories.name_sub_categories')
        ->get();

        return view('user.lamb', compact('lamb', 'lamb2', 'lamb3' , 'lamb4' , 'lamb5'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $lamb = lamb::all();
        $brand = Brand::all();
        $category = Category::all();
        $subcategory = SubCategory::all();
        return view('admin/Lamb/create', compact('lamb','brand','category','subcategory'));
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
                     $upload_path = 'files_upload/Lamb/';
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
                $upload_path = 'files_upload/Lamb/';
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
                     $upload_path = 'files_upload/Lamb/';
                     $image_url = $upload_path.$image_full_name;
                     $file->move($upload_path, $image_full_name);
                     $attachment[] = $image_url;
                 }
             }
             lamb::insert([
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
          return redirect('Lamb/show')->with('successfully', 'ได้ทำการเพิ่มข้อมูลเรียบร้อยแล้ว');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Lamb  $lamb
     * @return \Illuminate\Http\Response
     */
    public function show(Lamb $lamb)
    {
        //
        $lamb = Lamb::orderBy('id', 'DESC')->paginate(20);
        return view('admin/Lamb/index', compact('lamb'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Lamb  $lamb
     * @return \Illuminate\Http\Response
     */
    public function edit(Lamb $lamb, $id)
    {
        //
        $lamb = lamb::find($id);
        $brand = Brand::all();
        $category = Category::all();
        $subcategory = SubCategory::all();
        return view('admin/Lamb/edit', compact('lamb','brand','category','subcategory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Lamb  $lamb
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Lamb $lamb, $id)
    {
        //
        $lamb = lamb::find($id);
        $lamb->title = $request->get('title');
        $lamb->keywords = $request->get('keywords');
        $lamb->description = $request->get('description');
        $lamb->google_code = $request->get('google_code');
        $lamb->facrbook_code = $request->get('facrbook_code');
        $lamb->orteh_code = $request->get('orteh_code');

        $lamb->brade = $request->get('brade');
        $lamb->category = $request->get('category');
        $lamb->sub_category = $request->get('sub_category');

        $lamb->text_title_en = $request->get('text_title_en');
        $lamb->text_title_th = $request->get('text_title_th');

        $lamb->name_product_en = $request->get('name_product_en');
        $lamb->name_product_th = $request->get('name_product_th');

        $lamb->status = $request->get('status');

        $lamb->images_product1 = $request->get('images_product1');
        $lamb->attachment = $request->get('attachment');
        $lamb->images_show = $request->get('images_show');


        $image = array();
        if($files = $request-> file('images_product1')){
            foreach ($files as $file){
                $image_name = md5(rand(100, 10000));
                $ext = strtolower($file->getClientOriginalExtension());
                $image_full_name = $image_name.'.'.$ext;
                $upload_path = 'files_upload/Lamb/';
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
                $upload_path = 'files_upload/Lamb/';
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
                $upload_path = 'files_upload/Lamb/';
                $image_url = $upload_path.$image_full_name;
                $file->move($upload_path, $image_full_name);
                $attachment[] = $image_url;
            }
        }
        $lamb->save();
      return redirect('Lamb/show')->with('success', 'ได้ทำการแก้ไขข้อมูลเรียบร้อยแล้ว');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Lamb  $lamb
     * @return \Illuminate\Http\Response
     */
    public function destroy(Lamb $lamb, $id)
    {
        //
        $lamb = Lamb::find($id);
        $lamb->delete();

        return redirect('/Lamb/show')->with('success', 'ได้ทำการลบข้อมูล เรียบร้อยแล้ว');
    }
}

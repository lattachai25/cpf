<?php

namespace App\Http\Controllers;

use App\Turkey;
use App\Brand;
use App\Category;
use App\SubCategory;
use DB;
use Illuminate\Http\Request;

class TurkeyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $turkeys = DB::table('turkeys')
        ->orderBy('id', 'DESC')
        ->limit(2)
        ->join('brands', 'turkeys.brade', '=', 'brands.id')
        ->join('categories', 'turkeys.category', '=', 'categories.id')
        ->join('sub_categories', 'turkeys.sub_category', '=', 'sub_categories.id')
        ->select('turkeys.*', 'brands.name_brand_en', 'brands.name_brand_th', 'brands.images', 'categories.name_categories', 'sub_categories.name_sub_categories')
        ->get();

        $turkeys2 = DB::table('turkeys')
        ->orderBy('id', 'DESC')
        ->limit(1)
        ->join('brands', 'turkeys.brade', '=', 'brands.id')
        ->join('categories', 'turkeys.category', '=', 'categories.id')
        ->join('sub_categories', 'turkeys.sub_category', '=', 'sub_categories.id')
        ->select('turkeys.*', 'brands.name_brand_en', 'brands.name_brand_th', 'brands.images', 'categories.name_categories', 'sub_categories.name_sub_categories')
        ->get();

        $turkeys3 = DB::table('turkeys')
        ->orderBy('id', 'DESC')
        ->offset(1)
        ->limit(4)
        ->join('brands', 'turkeys.brade', '=', 'brands.id')
        ->join('categories', 'turkeys.category', '=', 'categories.id')
        ->join('sub_categories', 'turkeys.sub_category', '=', 'sub_categories.id')
        ->select('turkeys.*', 'brands.name_brand_en', 'brands.name_brand_th', 'brands.images', 'categories.name_categories', 'sub_categories.name_sub_categories')
        ->get();


        $turkeys4 = DB::table('turkeys')
        ->orderBy('id', 'DESC')
        ->limit(5)
        ->join('brands', 'turkeys.brade', '=', 'brands.id')
        ->join('categories', 'turkeys.category', '=', 'categories.id')
        ->join('sub_categories', 'turkeys.sub_category', '=', 'sub_categories.id')
        ->select('turkeys.*', 'brands.name_brand_en', 'brands.name_brand_th', 'brands.images', 'categories.name_categories', 'sub_categories.name_sub_categories')
        ->get();



        $turkeys5 = DB::table('turkeys')
        ->orderBy('id', 'DESC')
        ->join('brands', 'turkeys.brade', '=', 'brands.id')
        ->join('categories', 'turkeys.category', '=', 'categories.id')
        ->join('sub_categories', 'turkeys.sub_category', '=', 'sub_categories.id')
        ->select('turkeys.*', 'brands.name_brand_en', 'brands.name_brand_th', 'brands.images', 'categories.name_categories', 'sub_categories.name_sub_categories')
        ->get();

        return view('user.turkey', compact('turkeys', 'turkeys2', 'turkeys3' , 'turkeys4' , 'turkeys5'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $turkey = Turkey::all();
        $brand = Brand::all();
        $category = Category::all();
        $subcategory = SubCategory::all();
        return view('admin/Turkey/create', compact('turkey','brand','category','subcategory'));
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
        $image = array();
        if($files = $request-> file('images_product1')){
            foreach ($files as $file){
                $image_name = md5(rand(100, 10000));
                $ext = strtolower($file->getClientOriginalExtension());
                $image_full_name = $image_name.'.'.$ext;
                $upload_path = 'files_upload/Turkey/';
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
                $upload_path = 'files_upload/Turkey/';
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
                $upload_path = 'files_upload/Turkey/';
                $image_url = $upload_path.$image_full_name;
                $file->move($upload_path, $image_full_name);
                $attachment[] = $image_url;
            }
        }
        Turkey::insert([
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
     return redirect('Turkey/show')->with('successfully', 'ได้ทำการเพิ่มข้อมูลเรียบร้อยแล้ว');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Turkey  $turkey
     * @return \Illuminate\Http\Response
     */
    public function show(Turkey $turkey)
    {
        //
        $turkey = Turkey::orderBy('id', 'DESC')->paginate(20);
        return view('admin/Turkey/index', compact('turkey'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Turkey  $turkey
     * @return \Illuminate\Http\Response
     */
    public function edit(Turkey $turkey, $id)
    {
        //
        $turkey = Turkey::find($id);
        $brand = Brand::all();
        $category = Category::all();
        $subcategory = SubCategory::all();
        return view('admin/Turkey/edit', compact('turkey','brand','category','subcategory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Turkey  $turkey
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Turkey $turkey, $id)
    {
        //
        $turkey = Turkey::find($id);
        $turkey->title = $request->get('title');
        $turkey->keywords = $request->get('keywords');
        $turkey->description = $request->get('description');
        $turkey->google_code = $request->get('google_code');
        $turkey->facrbook_code = $request->get('facrbook_code');
        $turkey->orteh_code = $request->get('orteh_code');

        $turkey->brade = $request->get('brade');
        $turkey->category = $request->get('category');
        $turkey->sub_category = $request->get('sub_category');

        $turkey->text_title_en = $request->get('text_title_en');
        $turkey->text_title_th = $request->get('text_title_th');

        $turkey->name_product_en = $request->get('name_product_en');
        $turkey->name_product_th = $request->get('name_product_th');

        $turkey->status = $request->get('status');

        $turkey->images_product1 = $request->get('images_product1');
        $turkey->attachment = $request->get('attachment');
        $turkey->images_show = $request->get('images_show');


        $image = array();
        if($files = $request-> file('images_product1')){
            foreach ($files as $file){
                $image_name = md5(rand(100, 10000));
                $ext = strtolower($file->getClientOriginalExtension());
                $image_full_name = $image_name.'.'.$ext;
                $upload_path = 'files_upload/Turkey/';
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
                $upload_path = 'files_upload/Turkey/';
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
                $upload_path = 'files_upload/Turkey/';
                $image_url = $upload_path.$image_full_name;
                $file->move($upload_path, $image_full_name);
                $attachment[] = $image_url;
            }
        }
        $turkey->save();
      return redirect('Turkey/show')->with('success', 'ได้ทำการแก้ไขข้อมูลเรียบร้อยแล้ว');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Turkey  $turkey
     * @return \Illuminate\Http\Response
     */
    public function destroy(Turkey $turkey, $id)
    {
        //
        $turkey = Turkey::find($id);
        $turkey->delete();

        return redirect('/Turkey/show')->with('success', 'ได้ทำการลบข้อมูล เรียบร้อยแล้ว');
    }
}

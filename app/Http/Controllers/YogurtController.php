<?php

namespace App\Http\Controllers;

use App\Yogurt;
use App\Brand;
use App\Category;
use App\SubCategory;
use DB;
use Illuminate\Http\Request;

class YogurtController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        
        $yogurts = DB::table('yogurts')
        ->orderBy('id', 'DESC')
        ->limit(2)
        ->join('brands', 'yogurts.brade', '=', 'brands.id')
        ->join('categories', 'yogurts.category', '=', 'categories.id')
        ->join('sub_categories', 'yogurts.sub_category', '=', 'sub_categories.id')
        ->select('yogurts.*', 'brands.name_brand_en', 'brands.name_brand_th', 'brands.images', 'categories.name_categories', 'sub_categories.name_sub_categories')
        ->get();

        $yogurts2 = DB::table('yogurts')
        ->orderBy('id', 'DESC')
        ->limit(1)
        ->join('brands', 'yogurts.brade', '=', 'brands.id')
        ->join('categories', 'yogurts.category', '=', 'categories.id')
        ->join('sub_categories', 'yogurts.sub_category', '=', 'sub_categories.id')
        ->select('yogurts.*', 'brands.name_brand_en', 'brands.name_brand_th', 'brands.images', 'categories.name_categories', 'sub_categories.name_sub_categories')
        ->get();

        $yogurts3 = DB::table('yogurts')
        ->orderBy('id', 'DESC')
        ->offset(1)
        ->limit(4)
        ->join('brands', 'yogurts.brade', '=', 'brands.id')
        ->join('categories', 'yogurts.category', '=', 'categories.id')
        ->join('sub_categories', 'yogurts.sub_category', '=', 'sub_categories.id')
        ->select('yogurts.*', 'brands.name_brand_en', 'brands.name_brand_th', 'brands.images', 'categories.name_categories', 'sub_categories.name_sub_categories')
        ->get();


        $yogurts4 = DB::table('yogurts')
        ->orderBy('id', 'DESC')
        ->limit(5)
        ->join('brands', 'yogurts.brade', '=', 'brands.id')
        ->join('categories', 'yogurts.category', '=', 'categories.id')
        ->join('sub_categories', 'yogurts.sub_category', '=', 'sub_categories.id')
        ->select('yogurts.*', 'brands.name_brand_en', 'brands.name_brand_th', 'brands.images', 'categories.name_categories', 'sub_categories.name_sub_categories')
        ->get();



        $yogurts5 = DB::table('yogurts')
        ->orderBy('id', 'DESC')
        ->join('brands', 'yogurts.brade', '=', 'brands.id')
        ->join('categories', 'yogurts.category', '=', 'categories.id')
        ->join('sub_categories', 'yogurts.sub_category', '=', 'sub_categories.id')
        ->select('yogurts.*', 'brands.name_brand_en', 'brands.name_brand_th', 'brands.images', 'categories.name_categories', 'sub_categories.name_sub_categories')
        ->get();

        return view('user.yogurt', compact('yogurts', 'yogurts2', 'yogurts3' , 'yogurts4' , 'yogurts5'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $yogurt = Yogurt::all();
        $brand = Brand::all();
        $category = Category::all();
        $subcategory = SubCategory::all();
        return view('admin/Yogurt/create', compact('yogurt','brand','category','subcategory'));
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
                  $upload_path = 'files_upload/Yogurt/';
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
                  $upload_path = 'files_upload/Yogurt/';
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
                  $upload_path = 'files_upload/Yogurt/';
                  $image_url = $upload_path.$image_full_name;
                  $file->move($upload_path, $image_full_name);
                  $images_show[] = $image_url;
              }
          }
          
          Yogurt::insert([
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
       return redirect('Yogurt/show')->with('successfully', 'ได้ทำการเพิ่มข้อมูลเรียบร้อยแล้ว');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Yogurt  $yogurt
     * @return \Illuminate\Http\Response
     */
    public function show(Yogurt $yogurt)
    {
        //

        $yogurt = Yogurt::orderBy('id', 'DESC')->paginate(20);
        return view('admin/Yogurt/index', compact('yogurt'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Yogurt  $yogurt
     * @return \Illuminate\Http\Response
     */
    public function edit(Yogurt $yogurt, $id)
    {
        //
        $yogurt = Yogurt::find($id);
        $brand = Brand::all();
        $category = Category::all();
        $subcategory = SubCategory::all();
        return view('admin/Yogurt/edit', compact('yogurt','brand','category','subcategory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Yogurt  $yogurt
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Yogurt $yogurt, $id)
    {
        //
        $yogurt = Yogurt::find($id);
        $yogurt->title = $request->get('title');
        $yogurt->keywords = $request->get('keywords');
        $yogurt->description = $request->get('description');
        $yogurt->google_code = $request->get('google_code');
        $yogurt->facrbook_code = $request->get('facrbook_code');
        $yogurt->orteh_code = $request->get('orteh_code');

        $yogurt->brade = $request->get('brade');
        $yogurt->category = $request->get('category');
        $yogurt->sub_category = $request->get('sub_category');

        $yogurt->text_title_en = $request->get('text_title_en');
        $yogurt->text_title_th = $request->get('text_title_th');

        $yogurt->name_product_en = $request->get('name_product_en');
        $yogurt->name_product_th = $request->get('name_product_th');

        $yogurt->status = $request->get('status');

        $yogurt->images_product1 = $request->get('images_product1');
        $yogurt->attachment = $request->get('attachment');
        $yogurt->images_show = $request->get('images_show');


        $image = array();
        if($files = $request-> file('images_product1')){
            foreach ($files as $file){
                $image_name = md5(rand(100, 10000));
                $ext = strtolower($file->getClientOriginalExtension());
                $image_full_name = $image_name.'.'.$ext;
                $upload_path = 'files_upload/Yogurt/';
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
                $upload_path = 'files_upload/Apple/';
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
                $upload_path = 'files_upload/Yogurt/';
                $image_url = $upload_path.$image_full_name;
                $file->move($upload_path, $image_full_name);
                $attachment[] = $image_url;
            }
        }
        $yogurt->save();
      return redirect('Yogurt/show')->with('success', 'ได้ทำการแก้ไขข้อมูลเรียบร้อยแล้ว');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Yogurt  $yogurt
     * @return \Illuminate\Http\Response
     */
    public function destroy(Yogurt $yogurt)
    {
        //
        $yogurt = Yogurt::find($id);
        $yogurt->delete();

        return redirect('/Yogurt/show')->with('success', 'ได้ทำการลบข้อมูล เรียบร้อยแล้ว');
    }
}

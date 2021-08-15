<?php

namespace App\Http\Controllers;

use App\Cephalopod;
use App\Brand;
use App\Category;
use App\SubCategory;
use DB;
use Illuminate\Http\Request;

class CephalopodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $cephalopods = DB::table('cephalopods')
        ->orderBy('id', 'DESC')
        ->limit(3)
        ->join('brands', 'cephalopods.brade', '=', 'brands.id')
        ->join('categories', 'cephalopods.category', '=', 'categories.id')
        ->join('sub_categories', 'cephalopods.sub_category', '=', 'sub_categories.id')
        ->select('cephalopods.*', 'brands.name_brand_en', 'brands.name_brand_th', 'brands.images', 'categories.name_categories', 'sub_categories.name_sub_categories')
        ->get();

        $cephalopods2 = DB::table('cephalopods')
        ->orderBy('id', 'DESC')
        ->limit(1)
        ->join('brands', 'cephalopods.brade', '=', 'brands.id')
        ->join('categories', 'cephalopods.category', '=', 'categories.id')
        ->join('sub_categories', 'cephalopods.sub_category', '=', 'sub_categories.id')
        ->select('cephalopods.*', 'brands.name_brand_en', 'brands.name_brand_th', 'brands.images', 'categories.name_categories', 'sub_categories.name_sub_categories')
        ->get();

        $cephalopods3 = DB::table('cephalopods')
        ->orderBy('id', 'DESC')
        ->offset(1)
        ->limit(4)
        ->join('brands', 'cephalopods.brade', '=', 'brands.id')
        ->join('categories', 'cephalopods.category', '=', 'categories.id')
        ->join('sub_categories', 'cephalopods.sub_category', '=', 'sub_categories.id')
        ->select('cephalopods.*', 'brands.name_brand_en', 'brands.name_brand_th', 'brands.images', 'categories.name_categories', 'sub_categories.name_sub_categories')
        ->get();


        $cephalopods4 = DB::table('cephalopods')
        ->orderBy('id', 'DESC')
        ->limit(5)
        ->join('brands', 'cephalopods.brade', '=', 'brands.id')
        ->join('categories', 'cephalopods.category', '=', 'categories.id')
        ->join('sub_categories', 'cephalopods.sub_category', '=', 'sub_categories.id')
        ->select('cephalopods.*', 'brands.name_brand_en', 'brands.name_brand_th', 'brands.images', 'categories.name_categories', 'sub_categories.name_sub_categories')
        ->get();



        $cephalopods5 = DB::table('cephalopods')
        ->orderBy('id', 'DESC')
        ->join('brands', 'cephalopods.brade', '=', 'brands.id')
        ->join('categories', 'cephalopods.category', '=', 'categories.id')
        ->join('sub_categories', 'cephalopods.sub_category', '=', 'sub_categories.id')
        ->select('cephalopods.*', 'brands.name_brand_en', 'brands.name_brand_th', 'brands.images', 'categories.name_categories', 'sub_categories.name_sub_categories')
        ->get();

        return view('user.cephalopod', compact('cephalopods', 'cephalopods2', 'cephalopods3' , 'cephalopods4' , 'cephalopods5'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $cephalopod = Cephalopod::all();
        $brand = Brand::all();
        $category = Category::all();
        $subcategory = SubCategory::all();
        return view('admin/Cephalopod/create', compact('cephalopod','brand','category','subcategory'));
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
                             $upload_path = 'files_upload/Cephalopod/';
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
                             $upload_path = 'files_upload/Cephalopod/';
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
                             $upload_path = 'files_upload/Cephalopod/';
                             $image_url = $upload_path.$image_full_name;
                             $file->move($upload_path, $image_full_name);
                             $images_show[] = $image_url;
                         }
                     }
                     Cephalopod::insert([
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
                  return redirect('Cephalopod/show')->with('successfully', 'ได้ทำการเพิ่มข้อมูลเรียบร้อยแล้ว');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cephalopod  $cephalopod
     * @return \Illuminate\Http\Response
     */
    public function show(Cephalopod $cephalopod)
    {
        //
        $cephalopod = Cephalopod::orderBy('id', 'DESC')->paginate(20);
        return view('admin/Cephalopod/index', compact('cephalopod'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cephalopod  $cephalopod
     * @return \Illuminate\Http\Response
     */
    public function edit(Cephalopod $cephalopod, $id)
    {
        //
        $cephalopod = Cephalopod::find($id);
        $brand = Brand::all();
        $category = Category::all();
        $subcategory = SubCategory::all();
        return view('admin/Cephalopod/edit', compact('cephalopod','brand','category','subcategory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cephalopod  $cephalopod
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cephalopod $cephalopod, $id)
    {
        //
        $cephalopod = Cephalopod::find($id);
        $cephalopod->title = $request->get('title');
        $cephalopod->keywords = $request->get('keywords');
        $cephalopod->description = $request->get('description');
        $cephalopod->google_code = $request->get('google_code');
        $cephalopod->facrbook_code = $request->get('facrbook_code');
        $cephalopod->orteh_code = $request->get('orteh_code');

        $cephalopod->brade = $request->get('brade');
        $cephalopod->category = $request->get('category');
        $cephalopod->sub_category = $request->get('sub_category');

        $cephalopod->text_title_en = $request->get('text_title_en');
        $cephalopod->text_title_th = $request->get('text_title_th');

        $cephalopod->name_product_en = $request->get('name_product_en');
        $cephalopod->name_product_th = $request->get('name_product_th');

        $cephalopod->status = $request->get('status');

        $cephalopod->images_product1 = $request->get('images_product1');
        $cephalopod->attachment = $request->get('attachment');
        $cephalopod->images_show = $request->get('images_show');


        $image = array();
        if($files = $request-> file('images_product1')){
            foreach ($files as $file){
                $image_name = md5(rand(100, 10000));
                $ext = strtolower($file->getClientOriginalExtension());
                $image_full_name = $image_name.'.'.$ext;
                $upload_path = 'files_upload/Cephalopod/';
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
                $upload_path = 'files_upload/Cephalopod/';
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
                $upload_path = 'files_upload/Cephalopod/';
                $image_url = $upload_path.$image_full_name;
                $file->move($upload_path, $image_full_name);
                $images_show[] = $image_url;
            }
        }

        $cephalopod->save();
      return redirect('Cephalopod/show')->with('success', 'ได้ทำการแก้ไขข้อมูลเรียบร้อยแล้ว');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cephalopod  $cephalopod
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cephalopod $cephalopod, $id)
    {
        //
        $cephalopod = Cephalopod::find($id);
        $cephalopod->delete();

        return redirect('/Cephalopod/show')->with('success', 'ได้ทำการลบข้อมูล เรียบร้อยแล้ว');
    }
}

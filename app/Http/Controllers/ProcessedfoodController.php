<?php

namespace App\Http\Controllers;

use App\Processedfood;
use App\Brand;
use App\Category;
use App\SubCategory;
use DB;
use Illuminate\Http\Request;

class ProcessedfoodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $processedfoods = DB::table('processedfoods')
        ->orderBy('id', 'DESC')
        ->limit(3)
        ->join('brands', 'processedfoods.brade', '=', 'brands.id')
        ->join('categories', 'processedfoods.category', '=', 'categories.id')
        ->join('sub_categories', 'processedfoods.sub_category', '=', 'sub_categories.id')
        ->select('processedfoods.*', 'brands.name_brand_en', 'brands.name_brand_th', 'brands.images', 'categories.name_categories', 'sub_categories.name_sub_categories')
        ->get();

        $processedfoods2 = DB::table('processedfoods')
        ->orderBy('id', 'DESC')
        ->limit(1)
        ->join('brands', 'processedfoods.brade', '=', 'brands.id')
        ->join('categories', 'processedfoods.category', '=', 'categories.id')
        ->join('sub_categories', 'processedfoods.sub_category', '=', 'sub_categories.id')
        ->select('processedfoods.*', 'brands.name_brand_en', 'brands.name_brand_th', 'brands.images', 'categories.name_categories', 'sub_categories.name_sub_categories')
        ->get();

        $processedfoods3 = DB::table('processedfoods')
        ->orderBy('id', 'DESC')
        ->offset(1)
        ->limit(4)
        ->join('brands', 'processedfoods.brade', '=', 'brands.id')
        ->join('categories', 'processedfoods.category', '=', 'categories.id')
        ->join('sub_categories', 'processedfoods.sub_category', '=', 'sub_categories.id')
        ->select('processedfoods.*', 'brands.name_brand_en', 'brands.name_brand_th', 'brands.images', 'categories.name_categories', 'sub_categories.name_sub_categories')
        ->get();


        $processedfoods4 = DB::table('processedfoods')
        ->orderBy('id', 'DESC')
        ->limit(5)
        ->join('brands', 'processedfoods.brade', '=', 'brands.id')
        ->join('categories', 'processedfoods.category', '=', 'categories.id')
        ->join('sub_categories', 'processedfoods.sub_category', '=', 'sub_categories.id')
        ->select('processedfoods.*', 'brands.name_brand_en', 'brands.name_brand_th', 'brands.images', 'categories.name_categories', 'sub_categories.name_sub_categories')
        ->get();



        $processedfoods5 = DB::table('processedfoods')
        ->orderBy('id', 'DESC')
        ->join('brands', 'processedfoods.brade', '=', 'brands.id')
        ->join('categories', 'processedfoods.category', '=', 'categories.id')
        ->join('sub_categories', 'processedfoods.sub_category', '=', 'sub_categories.id')
        ->select('processedfoods.*', 'brands.name_brand_en', 'brands.name_brand_th', 'brands.images', 'categories.name_categories', 'sub_categories.name_sub_categories')
        ->get();

        return view('user.Processedfood', compact('processedfoods', 'processedfoods2', 'processedfoods3' , 'processedfoods4' , 'processedfoods5'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $processedfood = Processedfood::all();
        $brand = Brand::all();
        $category = Category::all();
        $subcategory = SubCategory::all();
        return view('admin/Processedfood/create', compact('processedfood','brand','category','subcategory'));
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
                             $upload_path = 'files_upload/Processedfood/';
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
                $upload_path = 'files_upload/Processedfood/';
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
                             $upload_path = 'files_upload/Processedfood/';
                             $image_url = $upload_path.$image_full_name;
                             $file->move($upload_path, $image_full_name);
                             $attachment[] = $image_url;
                         }
                     }
                     Processedfood::insert([
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
                  return redirect('Processedfood/show')->with('successfully', '????????????????????????????????????????????????????????????????????????????????????????????????');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Processedfood  $processedfood
     * @return \Illuminate\Http\Response
     */
    public function show(Processedfood $processedfood)
    {
        //  
        $processedfood = Processedfood::orderBy('id', 'DESC')->paginate(20);
        return view('admin/Processedfood/index', compact('processedfood'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Processedfood  $processedfood
     * @return \Illuminate\Http\Response
     */
    public function edit(Processedfood $processedfood, $id)
    {
        //
        $processedfood = Processedfood::find($id);
        $brand = Brand::all();
        $category = Category::all();
        $subcategory = SubCategory::all();
        return view('admin/Processedfood/edit', compact('processedfood','brand','category','subcategory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Processedfood  $processedfood
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Processedfood $processedfood)
    {
        //
        $processedfood = Processedfood::find($id);
        $processedfood->title = $request->get('title');
        $processedfood->keywords = $request->get('keywords');
        $processedfood->description = $request->get('description');
        $processedfood->google_code = $request->get('google_code');
        $processedfood->facrbook_code = $request->get('facrbook_code');
        $processedfood->orteh_code = $request->get('orteh_code');

        $processedfood->brade = $request->get('brade');
        $processedfood->category = $request->get('category');
        $processedfood->sub_category = $request->get('sub_category');

        $processedfood->text_title_en = $request->get('text_title_en');
        $processedfood->text_title_th = $request->get('text_title_th');

        $processedfood->name_product_en = $request->get('name_product_en');
        $processedfood->name_product_th = $request->get('name_product_th');

        $processedfood->status = $request->get('status');

        $processedfood->images_product1 = $request->get('images_product1');
        $processedfood->attachment = $request->get('attachment');
        $processedfood->images_show = $request->get('images_show');


        $image = array();
        if($files = $request-> file('images_product1')){
            foreach ($files as $file){
                $image_name = md5(rand(100, 10000));
                $ext = strtolower($file->getClientOriginalExtension());
                $image_full_name = $image_name.'.'.$ext;
                $upload_path = 'files_upload/Processedfood/';
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
                $upload_path = 'files_upload/Processedfood/';
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
                $upload_path = 'files_upload/Processedfood/';
                $image_url = $upload_path.$image_full_name;
                $file->move($upload_path, $image_full_name);
                $attachment[] = $image_url;
            }
        }
        $processedfood->save();
      return redirect('Processedfood/show')->with('success', '????????????????????????????????????????????????????????????????????????????????????????????????');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Processedfood  $processedfood
     * @return \Illuminate\Http\Response
     */
    public function destroy(Processedfood $processedfood, $id)
    {
        //
        $processedfood = Processedfood::find($id);
        $processedfood->delete();

        return redirect('/Processedfood/show')->with('success', '???????????????????????????????????????????????? ???????????????????????????????????????');
    }
}

<?php

namespace App\Http\Controllers;

use App\Apple;
use App\Brand;
use App\Category;
use App\SubCategory;
use DB;
use Illuminate\Http\Request;

class AppleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('user.apple');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $apple = apple::all();
        $brand = Brand::all();
        $category = Category::all();
        $subcategory = SubCategory::all();
        return view('admin/Apple/create', compact('apple','brand','category','subcategory'));
        
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
                             $upload_path = 'files_upload/Apple/';
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
                             $upload_path = 'files_upload/Apple/';
                             $image_url = $upload_path.$image_full_name;
                             $file->move($upload_path, $image_full_name);
                             $attachment[] = $image_url;
                         }
                     }
                     Apple::insert([
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
                         ]);
                  return redirect('Apple/show')->with('successfully', 'ได้ทำการเพิ่มข้อมูลเรียบร้อยแล้ว');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Apple  $apple
     * @return \Illuminate\Http\Response
     */
    public function show(Apple $apple)
    {
        //
        $apple = apple::orderBy('id', 'DESC')->paginate(20);
        return view('admin/Apple/index', compact('apple'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Apple  $apple
     * @return \Illuminate\Http\Response
     */
    public function edit(Apple $apple, $id)
    {
        //
        $apple = apple::find($id);
        $brand = Brand::all();
        $category = Category::all();
        $subcategory = SubCategory::all();
        return view('admin/Apple/edit', compact('apple','brand','category','subcategory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Apple  $apple
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Apple $apple, $id)
    {
        //
        $apple = Apple::find($id);
        $apple->title = $request->get('title');
        $apple->keywords = $request->get('keywords');
        $apple->description = $request->get('description');
        $apple->google_code = $request->get('google_code');
        $apple->facrbook_code = $request->get('facrbook_code');
        $apple->orteh_code = $request->get('orteh_code');

        $apple->brade = $request->get('brade');
        $apple->category = $request->get('category');
        $apple->sub_category = $request->get('sub_category');

        $apple->text_title_en = $request->get('text_title_en');
        $apple->text_title_th = $request->get('text_title_th');

        $apple->name_product_en = $request->get('name_product_en');
        $apple->name_product_th = $request->get('name_product_th');

        $apple->status = $request->get('status');

        $apple->images_product1 = $request->get('images_product1');
        $apple->attachment = $request->get('attachment');


        $image = array();
        if($files = $request-> file('images_product1')){
            foreach ($files as $file){
                $image_name = md5(rand(100, 10000));
                $ext = strtolower($file->getClientOriginalExtension());
                $image_full_name = $image_name.'.'.$ext;
                $upload_path = 'files_upload/Apple/';
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
                $upload_path = 'files_upload/Apple/';
                $image_url = $upload_path.$image_full_name;
                $file->move($upload_path, $image_full_name);
                $attachment[] = $image_url;
            }
        }
        $apple->save();
      return redirect('Apple/show')->with('success', 'ได้ทำการแก้ไขข้อมูลเรียบร้อยแล้ว');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Apple  $apple
     * @return \Illuminate\Http\Response
     */
    public function destroy(Apple $apple, $id)
    {
        //
        $apple = Apple::find($id);
        $apple->delete();

        return redirect('/Apple/show')->with('success', 'ได้ทำการลบข้อมูล เรียบร้อยแล้ว');
    }
}

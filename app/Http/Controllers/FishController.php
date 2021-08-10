<?php

namespace App\Http\Controllers;

use App\Fish;
use App\Brand;
use App\Category;
use App\SubCategory;
use DB;
use Illuminate\Http\Request;

class FishController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('user.fish');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $fish = Fish::all();
        $brand = Brand::all();
        $category = Category::all();
        $subcategory = SubCategory::all();
        return view('admin/Fish/create', compact('fish','brand','category','subcategory'));
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
                             $upload_path = 'files_upload/Fish/';
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
                             $upload_path = 'files_upload/Fish/';
                             $image_url = $upload_path.$image_full_name;
                             $file->move($upload_path, $image_full_name);
                             $attachment[] = $image_url;
                         }
                     }
                     Fish::insert([
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
                  return redirect('Fish/show')->with('successfully', 'ได้ทำการเพิ่มข้อมูลเรียบร้อยแล้ว');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Fish  $fish
     * @return \Illuminate\Http\Response
     */
    public function show(Fish $fish)
    {
        //
        $fish = Fish::orderBy('id', 'DESC')->paginate(20);
        return view('admin/Fish/index', compact('fish'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Fish  $fish
     * @return \Illuminate\Http\Response
     */
    public function edit(Fish $fish, $id)
    {
        //
        $fish = Fish::find($id);
        $brand = Brand::all();
        $category = Category::all();
        $subcategory = SubCategory::all();
        return view('admin/Fish/edit', compact('fish','brand','category','subcategory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Fish  $fish
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Fish $fish, $id)
    {
        //
        $fish = Fish::find($id);
        $fish->title = $request->get('title');
        $fish->keywords = $request->get('keywords');
        $fish->description = $request->get('description');
        $fish->google_code = $request->get('google_code');
        $fish->facrbook_code = $request->get('facrbook_code');
        $fish->orteh_code = $request->get('orteh_code');

        $fish->brade = $request->get('brade');
        $fish->category = $request->get('category');
        $fish->sub_category = $request->get('sub_category');

        $fish->text_title_en = $request->get('text_title_en');
        $fish->text_title_th = $request->get('text_title_th');

        $fish->name_product_en = $request->get('name_product_en');
        $fish->name_product_th = $request->get('name_product_th');

        $fish->status = $request->get('status');

        $fish->images_product1 = $request->get('images_product1');
        $fish->attachment = $request->get('attachment');


        $image = array();
        if($files = $request-> file('images_product1')){
            foreach ($files as $file){
                $image_name = md5(rand(100, 10000));
                $ext = strtolower($file->getClientOriginalExtension());
                $image_full_name = $image_name.'.'.$ext;
                $upload_path = 'files_upload/Fish/';
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
                $upload_path = 'files_upload/Fish/';
                $image_url = $upload_path.$image_full_name;
                $file->move($upload_path, $image_full_name);
                $attachment[] = $image_url;
            }
        }
        $fish->save();
      return redirect('Fish/show')->with('success', 'ได้ทำการแก้ไขข้อมูลเรียบร้อยแล้ว');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Fish  $fish
     * @return \Illuminate\Http\Response
     */
    public function destroy(Fish $fish, $id)
    {
        //
        $fish = Fish::find($id);
        $fish->delete();

        return redirect('/Fish/show')->with('success', 'ได้ทำการลบข้อมูล เรียบร้อยแล้ว');
    }
}

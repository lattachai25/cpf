<?php

namespace App\Http\Controllers;

use App\Cheese;
use App\Brand;
use App\Category;
use App\SubCategory;
use DB;
use Illuminate\Http\Request;

class CheeseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('user.cheese');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $cheese = Cheese::all();
        $brand = Brand::all();
        $category = Category::all();
        $subcategory = SubCategory::all();
        return view('admin/Cheese/create', compact('cheese','brand','category','subcategory'));
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
                $upload_path = 'files_upload/Cheese/';
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
                $upload_path = 'files_upload/Cheese/';
                $image_url = $upload_path.$image_full_name;
                $file->move($upload_path, $image_full_name);
                $attachment[] = $image_url;
            }
        }
        Cheese::insert([
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
     return redirect('Cheese/show')->with('successfully', 'ได้ทำการเพิ่มข้อมูลเรียบร้อยแล้ว');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cheese  $cheese
     * @return \Illuminate\Http\Response
     */
    public function show(Cheese $cheese)
    {
        //
        $cheese = Cheese::orderBy('id', 'DESC')->paginate(20);
        return view('admin/Cheese/index', compact('cheese'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cheese  $cheese
     * @return \Illuminate\Http\Response
     */
    public function edit(Cheese $cheese, $id)
    {
        //
        $cheese = Cheese::find($id);
        $brand = Brand::all();
        $category = Category::all();
        $subcategory = SubCategory::all();
        return view('admin/Cheese/edit', compact('cheese','brand','category','subcategory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cheese  $cheese
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cheese $cheese, $id)
    {
        //
        $cheese = Cheese::find($id);
        $cheese->title = $request->get('title');
        $cheese->keywords = $request->get('keywords');
        $cheese->description = $request->get('description');
        $cheese->google_code = $request->get('google_code');
        $cheese->facrbook_code = $request->get('facrbook_code');
        $cheese->orteh_code = $request->get('orteh_code');

        $cheese->brade = $request->get('brade');
        $cheese->category = $request->get('category');
        $cheese->sub_category = $request->get('sub_category');

        $cheese->text_title_en = $request->get('text_title_en');
        $cheese->text_title_th = $request->get('text_title_th');

        $cheese->name_product_en = $request->get('name_product_en');
        $cheese->name_product_th = $request->get('name_product_th');

        $cheese->status = $request->get('status');

        $cheese->images_product1 = $request->get('images_product1');
        $cheese->attachment = $request->get('attachment');


        $image = array();
        if($files = $request-> file('images_product1')){
            foreach ($files as $file){
                $image_name = md5(rand(100, 10000));
                $ext = strtolower($file->getClientOriginalExtension());
                $image_full_name = $image_name.'.'.$ext;
                $upload_path = 'files_upload/Cheese/';
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
                $upload_path = 'files_upload/Cheese/';
                $image_url = $upload_path.$image_full_name;
                $file->move($upload_path, $image_full_name);
                $attachment[] = $image_url;
            }
        }
        $cheese->save();
      return redirect('Cheese/show')->with('success', 'ได้ทำการแก้ไขข้อมูลเรียบร้อยแล้ว');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cheese  $cheese
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cheese $cheese, $id)
    {
        //
        $cheese = Cheese::find($id);
        $cheese->delete();

        return redirect('/Cheese/show')->with('success', 'ได้ทำการลบข้อมูล เรียบร้อยแล้ว');
    }
}

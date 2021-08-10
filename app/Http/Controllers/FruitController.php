<?php

namespace App\Http\Controllers;

use App\Fruit;
use App\Brand;
use App\Category;
use App\SubCategory;
use DB;
use Illuminate\Http\Request;

class FruitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('user.fruit');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $fruit = Fruit::all();
        $brand = Brand::all();
        $category = Category::all();
        $subcategory = SubCategory::all();
        return view('admin/Fruit/create', compact('fruit','brand','category','subcategory'));
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
                   $upload_path = 'files_upload/Fruit/';
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
                   $upload_path = 'files_upload/Fruit/';
                   $image_url = $upload_path.$image_full_name;
                   $file->move($upload_path, $image_full_name);
                   $attachment[] = $image_url;
               }
           }
           Fruit::insert([
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
        return redirect('Fruit/show')->with('successfully', 'ได้ทำการเพิ่มข้อมูลเรียบร้อยแล้ว');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Fruit  $fruit
     * @return \Illuminate\Http\Response
     */
    public function show(Fruit $fruit)
    {
        //
        $fruit = Fruit::orderBy('id', 'DESC')->paginate(20);
        return view('admin/Fruit/index', compact('fruit'));
        return view('admin/Fruit/index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Fruit  $fruit
     * @return \Illuminate\Http\Response
     */
    public function edit(Fruit $fruit, $id)
    {
        //
        $fruit = Fruit::find($id);
        $brand = Brand::all();
        $category = Category::all();
        $subcategory = SubCategory::all();
        return view('admin/Fruit/edit', compact('fruit','brand','category','subcategory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Fruit  $fruit
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Fruit $fruit ,$id)
    {
        //
        $fruit = Fruit::find($id);
        $fruit->title = $request->get('title');
        $fruit->keywords = $request->get('keywords');
        $fruit->description = $request->get('description');
        $fruit->google_code = $request->get('google_code');
        $fruit->facrbook_code = $request->get('facrbook_code');
        $fruit->orteh_code = $request->get('orteh_code');

        $fruit->brade = $request->get('brade');
        $fruit->category = $request->get('category');
        $fruit->sub_category = $request->get('sub_category');

        $fruit->text_title_en = $request->get('text_title_en');
        $fruit->text_title_th = $request->get('text_title_th');

        $fruit->name_product_en = $request->get('name_product_en');
        $fruit->name_product_th = $request->get('name_product_th');

        $fruit->status = $request->get('status');

        $fruit->images_product1 = $request->get('images_product1');
        $fruit->attachment = $request->get('attachment');


        $image = array();
        if($files = $request-> file('images_product1')){
            foreach ($files as $file){
                $image_name = md5(rand(100, 10000));
                $ext = strtolower($file->getClientOriginalExtension());
                $image_full_name = $image_name.'.'.$ext;
                $upload_path = 'files_upload/Fruit/';
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
                $upload_path = 'files_upload/Fruit/';
                $image_url = $upload_path.$image_full_name;
                $file->move($upload_path, $image_full_name);
                $attachment[] = $image_url;
            }
        }
        $fruit->save();
      return redirect('Fruit/show')->with('success', 'ได้ทำการแก้ไขข้อมูลเรียบร้อยแล้ว');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Fruit  $fruit
     * @return \Illuminate\Http\Response
     */
    public function destroy(Fruit $fruit, $id)
    {
        //
        $fruit = Fruit::find($id);
        $fruit->delete();

        return redirect('/Fruit/show')->with('success', 'ได้ทำการลบข้อมูล เรียบร้อยแล้ว');
    }
}

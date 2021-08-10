<?php

namespace App\Http\Controllers;

use App\Beverage;
use App\Brand;
use App\Category;
use App\SubCategory;
use DB;
use Illuminate\Http\Request;

class BeverageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('user.beverage');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $beverage = Beverage::all();
        $brand = Brand::all();
        $category = Category::all();
        $subcategory = SubCategory::all();
        return view('admin/Beverage/create', compact('beverage','brand','category','subcategory'));
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
                  $upload_path = 'files_upload/Beverage/';
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
                  $upload_path = 'files_upload/Beverage/';
                  $image_url = $upload_path.$image_full_name;
                  $file->move($upload_path, $image_full_name);
                  $attachment[] = $image_url;
              }
          }
          Beverage::insert([
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
       return redirect('Beverage/show')->with('successfully', 'ได้ทำการเพิ่มข้อมูลเรียบร้อยแล้ว');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Beverage  $beverage
     * @return \Illuminate\Http\Response
     */
    public function show(Beverage $beverage)
    {
        //
        $beverage = Beverage::orderBy('id', 'DESC')->paginate(20);
        return view('admin/Beverage/index', compact('beverage'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Beverage  $beverage
     * @return \Illuminate\Http\Response
     */
    public function edit(Beverage $beverage, $id)
    {
        //
        $beverage = Beverage::find($id);
        $brand = Brand::all();
        $category = Category::all();
        $subcategory = SubCategory::all();
        return view('admin/Beverage/edit', compact('beverage','brand','category','subcategory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Beverage  $beverage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Beverage $beverage, $id)
    {
        //
        $beverage = Beverage::find($id);
        $beverage->title = $request->get('title');
        $beverage->keywords = $request->get('keywords');
        $beverage->description = $request->get('description');
        $beverage->google_code = $request->get('google_code');
        $beverage->facrbook_code = $request->get('facrbook_code');
        $beverage->orteh_code = $request->get('orteh_code');

        $beverage->brade = $request->get('brade');
        $beverage->category = $request->get('category');
        $beverage->sub_category = $request->get('sub_category');

        $beverage->text_title_en = $request->get('text_title_en');
        $beverage->text_title_th = $request->get('text_title_th');

        $beverage->name_product_en = $request->get('name_product_en');
        $beverage->name_product_th = $request->get('name_product_th');

        $beverage->status = $request->get('status');

        $beverage->images_product1 = $request->get('images_product1');
        $beverage->attachment = $request->get('attachment');


        $image = array();
        if($files = $request-> file('images_product1')){
            foreach ($files as $file){
                $image_name = md5(rand(100, 10000));
                $ext = strtolower($file->getClientOriginalExtension());
                $image_full_name = $image_name.'.'.$ext;
                $upload_path = 'files_upload/Beverage/';
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
                $upload_path = 'files_upload/Beverage/';
                $image_url = $upload_path.$image_full_name;
                $file->move($upload_path, $image_full_name);
                $attachment[] = $image_url;
            }
        }
        $beverage->save();
      return redirect('Beverage/show')->with('success', 'ได้ทำการแก้ไขข้อมูลเรียบร้อยแล้ว');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Beverage  $beverage
     * @return \Illuminate\Http\Response
     */
    public function destroy(Beverage $beverage, $id)
    {
        //
        $beverage = Beverage::find($id);
        $beverage->delete();

        return redirect('/Beverage/show')->with('success', 'ได้ทำการลบข้อมูล เรียบร้อยแล้ว');
    }
}

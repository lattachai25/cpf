<?php

namespace App\Http\Controllers;

use App\Confectionary;
use App\Brand;
use App\Category;
use App\SubCategory;
use DB;
use Illuminate\Http\Request;

class ConfectionaryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('user.confectionary');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $confectionary = Confectionary::all();
        $brand = Brand::all();
        $category = Category::all();
        $subcategory = SubCategory::all();
        return view('admin/Confectionary/create', compact('confectionary','brand','category','subcategory'));
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
                 $upload_path = 'files_upload/Confectionary/';
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
                 $upload_path = 'files_upload/Confectionary/';
                 $image_url = $upload_path.$image_full_name;
                 $file->move($upload_path, $image_full_name);
                 $attachment[] = $image_url;
             }
         }
         Confectionary::insert([
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
      return redirect('Confectionary/show')->with('successfully', 'ได้ทำการเพิ่มข้อมูลเรียบร้อยแล้ว');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Confectionary  $confectionary
     * @return \Illuminate\Http\Response
     */
    public function show(Confectionary $confectionary)
    {
        //
        $confectionary = Confectionary::orderBy('id', 'DESC')->paginate(20);
        return view('admin/Confectionary/index', compact('confectionary'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Confectionary  $confectionary
     * @return \Illuminate\Http\Response
     */
    public function edit(Confectionary $confectionary, $id)
    {
        //
        $confectionary = Confectionary::find($id);
        $brand = Brand::all();
        $category = Category::all();
        $subcategory = SubCategory::all();
        return view('admin/Confectionary/edit', compact('confectionary','brand','category','subcategory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Confectionary  $confectionary
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Confectionary $confectionary, $id)
    {
        //
        $confectionary = Confectionary::find($id);
        $confectionary->title = $request->get('title');
        $confectionary->keywords = $request->get('keywords');
        $confectionary->description = $request->get('description');
        $confectionary->google_code = $request->get('google_code');
        $confectionary->facrbook_code = $request->get('facrbook_code');
        $confectionary->orteh_code = $request->get('orteh_code');

        $confectionary->brade = $request->get('brade');
        $confectionary->category = $request->get('category');
        $confectionary->sub_category = $request->get('sub_category');

        $confectionary->text_title_en = $request->get('text_title_en');
        $confectionary->text_title_th = $request->get('text_title_th');

        $confectionary->name_product_en = $request->get('name_product_en');
        $confectionary->name_product_th = $request->get('name_product_th');

        $confectionary->status = $request->get('status');

        $confectionary->images_product1 = $request->get('images_product1');
        $confectionary->attachment = $request->get('attachment');


        $image = array();
        if($files = $request-> file('images_product1')){
            foreach ($files as $file){
                $image_name = md5(rand(100, 10000));
                $ext = strtolower($file->getClientOriginalExtension());
                $image_full_name = $image_name.'.'.$ext;
                $upload_path = 'files_upload/Confectionary/';
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
                $upload_path = 'files_upload/Confectionary/';
                $image_url = $upload_path.$image_full_name;
                $file->move($upload_path, $image_full_name);
                $attachment[] = $image_url;
            }
        }
        $confectionary->save();
      return redirect('Confectionary/show')->with('success', 'ได้ทำการแก้ไขข้อมูลเรียบร้อยแล้ว');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Confectionary  $confectionary
     * @return \Illuminate\Http\Response
     */
    public function destroy(Confectionary $confectionary, $id)
    {
        //
        $confectionary = Confectionary::find($id);
        $confectionary->delete();

        return redirect('/Confectionary/show')->with('success', 'ได้ทำการลบข้อมูล เรียบร้อยแล้ว');
    }
}

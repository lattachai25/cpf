<?php

namespace App\Http\Controllers;

use App\Beetroot;
use App\Brand;
use App\Category;
use App\SubCategory;
use DB;
use Illuminate\Http\Request;

class BeetrootController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('user.beetroot');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $beetroot = Beetroot::all();
        $brand = Brand::all();
        $category = Category::all();
        $subcategory = SubCategory::all();
        return view('admin/Beetroot/create', compact('beetroot','brand','category','subcategory'));
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
                                     $upload_path = 'files_upload/Beetroot/';
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
                                     $upload_path = 'files_upload/Beetroot/';
                                     $image_url = $upload_path.$image_full_name;
                                     $file->move($upload_path, $image_full_name);
                                     $attachment[] = $image_url;
                                 }
                             }
                             Beetroot::insert([
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
                          return redirect('Beetroot/show')->with('successfully', 'ได้ทำการเพิ่มข้อมูลเรียบร้อยแล้ว');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Beetroot  $beetroot
     * @return \Illuminate\Http\Response
     */
    public function show(Beetroot $beetroot)
    {
        //
        $beetroot = Beetroot::orderBy('id', 'DESC')->paginate(20);
        return view('admin/Beetroot/index', compact('beetroot'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Beetroot  $beetroot
     * @return \Illuminate\Http\Response
     */
    public function edit(Beetroot $beetroot, $id)
    {
        //
        $beetroot = Beetroot::find($id);
        $brand = Brand::all();
        $category = Category::all();
        $subcategory = SubCategory::all();
        return view('admin/Beetroot/edit', compact('beetroot','brand','category','subcategory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Beetroot  $beetroot
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Beetroot $beetroot, $id)
    {
        //
        $beetroot = Beetroot::find($id);
        $beetroot->title = $request->get('title');
        $beetroot->keywords = $request->get('keywords');
        $beetroot->description = $request->get('description');
        $beetroot->google_code = $request->get('google_code');
        $beetroot->facrbook_code = $request->get('facrbook_code');
        $beetroot->orteh_code = $request->get('orteh_code');

        $beetroot->brade = $request->get('brade');
        $beetroot->category = $request->get('category');
        $beetroot->sub_category = $request->get('sub_category');

        $beetroot->text_title_en = $request->get('text_title_en');
        $beetroot->text_title_th = $request->get('text_title_th');

        $beetroot->name_product_en = $request->get('name_product_en');
        $beetroot->name_product_th = $request->get('name_product_th');

        $beetroot->status = $request->get('status');

        $beetroot->images_product1 = $request->get('images_product1');
        $beetroot->attachment = $request->get('attachment');


        $image = array();
        if($files = $request-> file('images_product1')){
            foreach ($files as $file){
                $image_name = md5(rand(100, 10000));
                $ext = strtolower($file->getClientOriginalExtension());
                $image_full_name = $image_name.'.'.$ext;
                $upload_path = 'files_upload/Beetroot/';
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
                $upload_path = 'files_upload/Beetroot/';
                $image_url = $upload_path.$image_full_name;
                $file->move($upload_path, $image_full_name);
                $attachment[] = $image_url;
            }
        }
        $beetroot->save();
      return redirect('Beetroot/show')->with('success', 'ได้ทำการแก้ไขข้อมูลเรียบร้อยแล้ว');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Beetroot  $beetroot
     * @return \Illuminate\Http\Response
     */
    public function destroy(Beetroot $beetroot, $id)
    {
        //
        $beetroot = Beetroot::find($id);
        $beetroot->delete();

        return redirect('/Beetroot/show')->with('success', 'ได้ทำการลบข้อมูล เรียบร้อยแล้ว');
    }
}

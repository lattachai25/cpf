<?php

namespace App\Http\Controllers;

use App\Dairy;
use App\Brand;
use App\Category;
use App\SubCategory;
use DB;
use Illuminate\Http\Request;

class DairyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('user.dairy');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $dairy = Dairy::all();
        $brand = Brand::all();
        $category = Category::all();
        $subcategory = SubCategory::all();
        return view('admin/Dairy/create', compact('dairy','brand','category','subcategory'));
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
         $images_show = array();
         if($files = $request-> file('images_show')){
             foreach ($files as $file){
                 $image_name = md5(rand(100, 10000));
                 $ext = strtolower($file->getClientOriginalExtension());
                 $image_full_name = $image_name.'.'.$ext;
                 $upload_path = 'files_upload/Dairy/';
                 $image_url = $upload_path.$image_full_name;
                 $file->move($upload_path, $image_full_name);
                 $images_show[] = $image_url;
             }
         }
         
         $image = array();
         if($files = $request-> file('images_product1')){
             foreach ($files as $file){
                 $image_name = md5(rand(100, 10000));
                 $ext = strtolower($file->getClientOriginalExtension());
                 $image_full_name = $image_name.'.'.$ext;
                 $upload_path = 'files_upload/Dairy/';
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
                 $upload_path = 'files_upload/Dairy/';
                 $image_url = $upload_path.$image_full_name;
                 $file->move($upload_path, $image_full_name);
                 $attachment[] = $image_url;
             }
         }
         Dairy::insert([
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
      return redirect('Dairy/show')->with('successfully', 'ได้ทำการเพิ่มข้อมูลเรียบร้อยแล้ว');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Dairy  $dairy
     * @return \Illuminate\Http\Response
     */
    public function show(Dairy $dairy)
    {
        //
        $dairy = Dairy::orderBy('id', 'DESC')->paginate(20);
        return view('admin/Dairy/index', compact('dairy'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Dairy  $dairy
     * @return \Illuminate\Http\Response
     */
    public function edit(Dairy $dairy, $id)
    {
        //
        $dairy = Dairy::find($id);
        $brand = Brand::all();
        $category = Category::all();
        $subcategory = SubCategory::all();
        return view('admin/Dairy/edit', compact('dairy','brand','category','subcategory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Dairy  $dairy
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dairy $dairy, $id)
    {
        //
        $dairy = Dairy::find($id);
        $dairy->title = $request->get('title');
        $dairy->keywords = $request->get('keywords');
        $dairy->description = $request->get('description');
        $dairy->google_code = $request->get('google_code');
        $dairy->facrbook_code = $request->get('facrbook_code');
        $dairy->orteh_code = $request->get('orteh_code');

        $dairy->brade = $request->get('brade');
        $dairy->category = $request->get('category');
        $dairy->sub_category = $request->get('sub_category');

        $dairy->text_title_en = $request->get('text_title_en');
        $dairy->text_title_th = $request->get('text_title_th');

        $dairy->name_product_en = $request->get('name_product_en');
        $dairy->name_product_th = $request->get('name_product_th');

        $dairy->status = $request->get('status');

        $dairy->images_product1 = $request->get('images_product1');
        $dairy->attachment = $request->get('attachment');
        $dairy->images_show = $request->get('images_show');


        $image = array();
        if($files = $request-> file('images_product1')){
            foreach ($files as $file){
                $image_name = md5(rand(100, 10000));
                $ext = strtolower($file->getClientOriginalExtension());
                $image_full_name = $image_name.'.'.$ext;
                $upload_path = 'files_upload/Dairy/';
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
                $upload_path = 'files_upload/Dairy/';
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
                $upload_path = 'files_upload/Dairy/';
                $image_url = $upload_path.$image_full_name;
                $file->move($upload_path, $image_full_name);
                $attachment[] = $image_url;
            }
        }
        $dairy->save();
      return redirect('Dairy/show')->with('success', 'ได้ทำการแก้ไขข้อมูลเรียบร้อยแล้ว');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Dairy  $dairy
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dairy $dairy, $id)
    {
        //
        $dairy = Dairy::find($id);
        $dairy->delete();

        return redirect('/Dairy/show')->with('success', 'ได้ทำการลบข้อมูล เรียบร้อยแล้ว');
    }
}

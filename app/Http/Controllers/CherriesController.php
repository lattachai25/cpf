<?php

namespace App\Http\Controllers;

use App\Cherries;
use App\Brand;
use App\Category;
use App\SubCategory;
use DB;
use Illuminate\Http\Request;

class CherriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('user.cherries');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $cherries = Cherries::all();
        $brand = Brand::all();
        $category = Category::all();
        $subcategory = SubCategory::all();
        return view('admin/Cherries/create', compact('cherries','brand','category','subcategory'));
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
                             $upload_path = 'files_upload/Cherries/';
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
                             $upload_path = 'files_upload/Cherries/';
                             $image_url = $upload_path.$image_full_name;
                             $file->move($upload_path, $image_full_name);
                             $attachment[] = $image_url;
                         }
                     }
                     Cherries::insert([
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
                  return redirect('Cherries/show')->with('successfully', 'ได้ทำการเพิ่มข้อมูลเรียบร้อยแล้ว');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cherries  $cherries
     * @return \Illuminate\Http\Response
     */
    public function show(Cherries $cherries)
    {
        //
        $cherries = Cherries::orderBy('id', 'DESC')->paginate(20);
        return view('admin/Cherries/index', compact('cherries'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cherries  $cherries
     * @return \Illuminate\Http\Response
     */
    public function edit(Cherries $cherries, $id)
    {
        //
        $cherries = Cherries::find($id);
        $brand = Brand::all();
        $category = Category::all();
        $subcategory = SubCategory::all();
        return view('admin/Cherries/edit', compact('cherries','brand','category','subcategory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cherries  $cherries
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cherries $cherries, $id )
    {
        //
        $cherries = Cherries::find($id);
        $cherries->title = $request->get('title');
        $cherries->keywords = $request->get('keywords');
        $cherries->description = $request->get('description');
        $cherries->google_code = $request->get('google_code');
        $cherries->facrbook_code = $request->get('facrbook_code');
        $cherries->orteh_code = $request->get('orteh_code');

        $cherries->brade = $request->get('brade');
        $cherries->category = $request->get('category');
        $cherries->sub_category = $request->get('sub_category');

        $cherries->text_title_en = $request->get('text_title_en');
        $cherries->text_title_th = $request->get('text_title_th');

        $cherries->name_product_en = $request->get('name_product_en');
        $cherries->name_product_th = $request->get('name_product_th');

        $cherries->status = $request->get('status');

        $cherries->images_product1 = $request->get('images_product1');
        $cherries->attachment = $request->get('attachment');


        $image = array();
        if($files = $request-> file('images_product1')){
            foreach ($files as $file){
                $image_name = md5(rand(100, 10000));
                $ext = strtolower($file->getClientOriginalExtension());
                $image_full_name = $image_name.'.'.$ext;
                $upload_path = 'files_upload/Cherries/';
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
                $upload_path = 'files_upload/Cherries/';
                $image_url = $upload_path.$image_full_name;
                $file->move($upload_path, $image_full_name);
                $attachment[] = $image_url;
            }
        }
        $cherries->save();
      return redirect('Cherries/show')->with('success', 'ได้ทำการแก้ไขข้อมูลเรียบร้อยแล้ว');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cherries  $cherries
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cherries $cherries, $id)
    {
        //
        $cherries = Cherries::find($id);
        $cherries->delete();

        return redirect('/Cherries/show')->with('success', 'ได้ทำการลบข้อมูล เรียบร้อยแล้ว');
    }
}

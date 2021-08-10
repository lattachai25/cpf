<?php

namespace App\Http\Controllers;

use App\Butter;
use App\Brand;
use App\Category;
use App\SubCategory;
use Illuminate\Http\Request;

class ButterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('user.butter');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $butter = Butter::all();
        $brand = Brand::all();
        $category = Category::all();
        $subcategory = SubCategory::all();
        return view('admin/Butter/create', compact('butter','brand','category','subcategory'));
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
                             $upload_path = 'files_upload/Butter/';
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
                             $upload_path = 'files_upload/Butter/';
                             $image_url = $upload_path.$image_full_name;
                             $file->move($upload_path, $image_full_name);
                             $attachment[] = $image_url;
                         }
                     }
                     Butter::insert([
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
                  return redirect('Butter/show')->with('successfully', 'ได้ทำการเพิ่มข้อมูลเรียบร้อยแล้ว');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Butter  $butter
     * @return \Illuminate\Http\Response
     */
    public function show(Butter $butter)
    {
        //
        $butter = Butter::orderBy('id', 'DESC')->paginate(20);
        return view('admin/Butter/index', compact('butter'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Butter  $butter
     * @return \Illuminate\Http\Response
     */
    public function edit(Butter $butter, $id)
    {
        //
        $butter = Butter::find($id);
        $brand = Brand::all();
        $category = Category::all();
        $subcategory = SubCategory::all();
        return view('admin/Butter/edit', compact('butter','brand','category','subcategory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Butter  $butter
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Butter $butter, $id)
    {
        //
        $butter = Butter::find($id);
        $butter->title = $request->get('title');
        $butter->keywords = $request->get('keywords');
        $butter->description = $request->get('description');
        $butter->google_code = $request->get('google_code');
        $butter->facrbook_code = $request->get('facrbook_code');
        $butter->orteh_code = $request->get('orteh_code');

        $butter->brade = $request->get('brade');
        $butter->category = $request->get('category');
        $butter->sub_category = $request->get('sub_category');

        $butter->text_title_en = $request->get('text_title_en');
        $butter->text_title_th = $request->get('text_title_th');

        $butter->name_product_en = $request->get('name_product_en');
        $butter->name_product_th = $request->get('name_product_th');

        $butter->status = $request->get('status');

        $butter->images_product1 = $request->get('images_product1');
        $butter->attachment = $request->get('attachment');


        $image = array();
        if($files = $request-> file('images_product1')){
            foreach ($files as $file){
                $image_name = md5(rand(100, 10000));
                $ext = strtolower($file->getClientOriginalExtension());
                $image_full_name = $image_name.'.'.$ext;
                $upload_path = 'files_upload/Butter/';
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
                $upload_path = 'files_upload/Butter/';
                $image_url = $upload_path.$image_full_name;
                $file->move($upload_path, $image_full_name);
                $attachment[] = $image_url;
            }
        }
        $butter->save();
      return redirect('Butter/show')->with('success', 'ได้ทำการแก้ไขข้อมูลเรียบร้อยแล้ว');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Butter  $butter
     * @return \Illuminate\Http\Response
     */
    public function destroy(Butter $butter, $id)
    {
        //
        $butter = Butter::find($id);
        $butter->delete();

        return redirect('/Butter/show')->with('success', 'ได้ทำการลบข้อมูล เรียบร้อยแล้ว');
    }
}

<?php

namespace App\Http\Controllers;

use App\Seafood;
use App\Brand;
use App\Category;
use App\SubCategory;
use DB;
use Illuminate\Http\Request;

class SeafoodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('user.seafood');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $seafood = Seafood::all();
        $brand = Brand::all();
        $category = Category::all();
        $subcategory = SubCategory::all();
        return view('admin/Seafood/create', compact('seafood','brand','category','subcategory'));
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
                    $upload_path = 'files_upload/Seafood/';
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
                $upload_path = 'files_upload/Seafood/';
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
                    $upload_path = 'files_upload/Seafood/';
                    $image_url = $upload_path.$image_full_name;
                    $file->move($upload_path, $image_full_name);
                    $attachment[] = $image_url;
                }
            }
            Seafood::insert([
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
                    'images_show' => implode('|', $imaes_show),
                ]);
         return redirect('Seafood/show')->with('successfully', 'ได้ทำการเพิ่มข้อมูลเรียบร้อยแล้ว');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Seafood  $seafood
     * @return \Illuminate\Http\Response
     */
    public function show(Seafood $seafood)
    {
        //
        $seafood = Seafood::orderBy('id', 'DESC')->paginate(20);
        return view('admin/Seafood/index', compact('seafood'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Seafood  $seafood
     * @return \Illuminate\Http\Response
     */
    public function edit(Seafood $seafood, $id)
    {
        //
        $seafood = Seafood::find($id);
        $brand = Brand::all();
        $category = Category::all();
        $subcategory = SubCategory::all();
        return view('admin/Seafood/edit', compact('seafood','brand','category','subcategory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Seafood  $seafood
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Seafood $seafood, $id)
    {
        //
        $seafood = Seafood::find($id);
        $seafood->title = $request->get('title');
        $seafood->keywords = $request->get('keywords');
        $seafood->description = $request->get('description');
        $seafood->google_code = $request->get('google_code');
        $seafood->facrbook_code = $request->get('facrbook_code');
        $seafood->orteh_code = $request->get('orteh_code');

        $seafood->brade = $request->get('brade');
        $seafood->category = $request->get('category');
        $seafood->sub_category = $request->get('sub_category');

        $seafood->text_title_en = $request->get('text_title_en');
        $seafood->text_title_th = $request->get('text_title_th');

        $seafood->name_product_en = $request->get('name_product_en');
        $seafood->name_product_th = $request->get('name_product_th');

        $seafood->status = $request->get('status');

        $seafood->images_product1 = $request->get('images_product1');
        $seafood->attachment = $request->get('attachment');
        $seafood->images_show = $request->get('images_show');


        $image = array();
        if($files = $request-> file('images_product1')){
            foreach ($files as $file){
                $image_name = md5(rand(100, 10000));
                $ext = strtolower($file->getClientOriginalExtension());
                $image_full_name = $image_name.'.'.$ext;
                $upload_path = 'files_upload/Seafood/';
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
                $upload_path = 'files_upload/Seafood/';
                $image_url = $upload_path.$image_full_name;
                $file->move($upload_path, $image_full_name);
                $attachment[] = $image_url;
            }
        }
        $images_show = array();
        if($files = $request-> file('images_show')){
            foreach ($files as $file){
                $image_name = md5(rand(100, 10000));
                $ext = strtolower($file->getClientOriginalExtension());
                $image_full_name = $image_name.'.'.$ext;
                $upload_path = 'files_upload/Seafood/';
                $image_url = $upload_path.$image_full_name;
                $file->move($upload_path, $image_full_name);
                $images_show[] = $image_url;
            }
        }
        
        $seafood->save();
      return redirect('Seafood/show')->with('success', 'ได้ทำการแก้ไขข้อมูลเรียบร้อยแล้ว');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Seafood  $seafood
     * @return \Illuminate\Http\Response
     */
    public function destroy(Seafood $seafood, $id)
    {
        //
        $seafood = Seafood::find($id);
        $seafood->delete();

        return redirect('/Seafood/show')->with('success', 'ได้ทำการลบข้อมูล เรียบร้อยแล้ว');
    }
}

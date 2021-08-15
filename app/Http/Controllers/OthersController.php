<?php

namespace App\Http\Controllers;

use App\Others;
use Illuminate\Http\Request;

class OthersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('user.others');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $others = Others::all();
        $brand = Brand::all();
        $category = Category::all();
        $subcategory = SubCategory::all();
        return view('admin/Others/create', compact('others','brand','category','subcategory'));
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
                          $upload_path = 'files_upload/Others/';
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
                $upload_path = 'files_upload/Others/';
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
                          $upload_path = 'files_upload/Others/';
                          $image_url = $upload_path.$image_full_name;
                          $file->move($upload_path, $image_full_name);
                          $attachment[] = $image_url;
                      }
                  }
                  Others::insert([
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
               return redirect('Others/show')->with('successfully', 'ได้ทำการเพิ่มข้อมูลเรียบร้อยแล้ว');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Others  $others
     * @return \Illuminate\Http\Response
     */
    public function show(Others $others)
    {
        //
        $others = Others::orderBy('id', 'DESC')->paginate(20);
        return view('admin/Others/index', compact('others'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Others  $others
     * @return \Illuminate\Http\Response
     */
    public function edit(Others $others, $id)
    {
        //
        $others = Others::find($id);
        $brand = Brand::all();
        $category = Category::all();
        $subcategory = SubCategory::all();
        return view('admin/Others/edit', compact('others','brand','category','subcategory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Others  $others
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Others $others, $id)
    {
        //
        $others = Others::find($id);
        $others->title = $request->get('title');
        $others->keywords = $request->get('keywords');
        $others->description = $request->get('description');
        $others->google_code = $request->get('google_code');
        $others->facrbook_code = $request->get('facrbook_code');
        $others->orteh_code = $request->get('orteh_code');

        $others->brade = $request->get('brade');
        $others->category = $request->get('category');
        $others->sub_category = $request->get('sub_category');

        $others->text_title_en = $request->get('text_title_en');
        $others->text_title_th = $request->get('text_title_th');

        $others->name_product_en = $request->get('name_product_en');
        $others->name_product_th = $request->get('name_product_th');

        $others->status = $request->get('status');

        $others->images_product1 = $request->get('images_product1');
        $others->attachment = $request->get('attachment');
        $others->images_show = $request->get('images_show');


        $image = array();
        if($files = $request-> file('images_product1')){
            foreach ($files as $file){
                $image_name = md5(rand(100, 10000));
                $ext = strtolower($file->getClientOriginalExtension());
                $image_full_name = $image_name.'.'.$ext;
                $upload_path = 'files_upload/Others/';
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
                $upload_path = 'files_upload/Others/';
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
                $upload_path = 'files_upload/Others/';
                $image_url = $upload_path.$image_full_name;
                $file->move($upload_path, $image_full_name);
                $attachment[] = $image_url;
            }
        }
        $others->save();
      return redirect('Others/show')->with('success', 'ได้ทำการแก้ไขข้อมูลเรียบร้อยแล้ว');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Others  $others
     * @return \Illuminate\Http\Response
     */
    public function destroy(Others $others, $id)
    {
        //
        $others = Others::find($id);
        $others->delete();

        return redirect('/Others/show')->with('success', 'ได้ทำการลบข้อมูล เรียบร้อยแล้ว');
    }
}

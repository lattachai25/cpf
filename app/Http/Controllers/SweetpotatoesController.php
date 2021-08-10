<?php

namespace App\Http\Controllers;

use App\Sweetpotatoes;
use App\Brand;
use App\Category;
use App\SubCategory;
use DB;
use Illuminate\Http\Request;

class SweetpotatoesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('user.sweetpotatoes');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $sweetpotatoes = Sweetpotatoes::all();
        $brand = Brand::all();
        $category = Category::all();
        $subcategory = SubCategory::all();
        return view('admin/Sweetpotatoes/create', compact('sweetpotatoes','brand','category','subcategory'));
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
                             $upload_path = 'files_upload/Sweetpotatoes/';
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
                             $upload_path = 'files_upload/Sweetpotatoes/';
                             $image_url = $upload_path.$image_full_name;
                             $file->move($upload_path, $image_full_name);
                             $attachment[] = $image_url;
                         }
                     }
                     Sweetpotatoes::insert([
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
                  return redirect('Sweetpotatoes/show')->with('successfully', 'ได้ทำการเพิ่มข้อมูลเรียบร้อยแล้ว');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Sweetpotatoes  $sweetpotatoes
     * @return \Illuminate\Http\Response
     */
    public function show(Sweetpotatoes $sweetpotatoes)
    {
        //
        $sweetpotatoes = Sweetpotatoes::orderBy('id', 'DESC')->paginate(20);
        return view('admin/Sweetpotatoes/index', compact('sweetpotatoes'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Sweetpotatoes  $sweetpotatoes
     * @return \Illuminate\Http\Response
     */
    public function edit(Sweetpotatoes $sweetpotatoes, $id)
    {
        //
        $sweetpotatoes = Sweetpotatoes::find($id);
        $brand = Brand::all();
        $category = Category::all();
        $subcategory = SubCategory::all();
        return view('admin/Sweetpotatoes/edit', compact('sweetpotatoes','brand','category','subcategory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Sweetpotatoes  $sweetpotatoes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sweetpotatoes $sweetpotatoes, $id)
    {
        //
        $sweetpotatoes = Sweetpotatoes::find($id);
        $sweetpotatoes->title = $request->get('title');
        $sweetpotatoes->keywords = $request->get('keywords');
        $sweetpotatoes->description = $request->get('description');
        $sweetpotatoes->google_code = $request->get('google_code');
        $sweetpotatoes->facrbook_code = $request->get('facrbook_code');
        $sweetpotatoes->orteh_code = $request->get('orteh_code');

        $sweetpotatoes->brade = $request->get('brade');
        $sweetpotatoes->category = $request->get('category');
        $sweetpotatoes->sub_category = $request->get('sub_category');

        $sweetpotatoes->text_title_en = $request->get('text_title_en');
        $sweetpotatoes->text_title_th = $request->get('text_title_th');

        $sweetpotatoes->name_product_en = $request->get('name_product_en');
        $sweetpotatoes->name_product_th = $request->get('name_product_th');

        $sweetpotatoes->status = $request->get('status');

        $sweetpotatoes->images_product1 = $request->get('images_product1');
        $sweetpotatoes->attachment = $request->get('attachment');


        $image = array();
        if($files = $request-> file('images_product1')){
            foreach ($files as $file){
                $image_name = md5(rand(100, 10000));
                $ext = strtolower($file->getClientOriginalExtension());
                $image_full_name = $image_name.'.'.$ext;
                $upload_path = 'files_upload/Sweetpotatoes/';
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
                $upload_path = 'files_upload/Sweetpotatoes/';
                $image_url = $upload_path.$image_full_name;
                $file->move($upload_path, $image_full_name);
                $attachment[] = $image_url;
            }
        }
        $sweetpotatoes->save();
      return redirect('Sweetpotatoes/show')->with('success', 'ได้ทำการแก้ไขข้อมูลเรียบร้อยแล้ว');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Sweetpotatoes  $sweetpotatoes
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sweetpotatoes $sweetpotatoes, $id)
    {
        //
        $sweetpotatoes = Sweetpotatoes::find($id);
        $sweetpotatoes->delete();

        return redirect('/Sweetpotatoes/show')->with('success', 'ได้ทำการลบข้อมูล เรียบร้อยแล้ว');
    }
}

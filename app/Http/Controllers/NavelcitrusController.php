<?php

namespace App\Http\Controllers;

use App\Navelcitrus;
use App\Brand;
use App\Category;
use App\SubCategory;
use DB;
use Illuminate\Http\Request;

class NavelcitrusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('user.navelcitrus');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $navelcitrus = Navelcitrus::all();
        $brand = Brand::all();
        $category = Category::all();
        $subcategory = SubCategory::all();
        return view('admin/Navelcitrus/create', compact('navelcitrus','brand','category','subcategory'));
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
                            $upload_path = 'files_upload/Navelcitrus/';
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
                            $upload_path = 'files_upload/navelcitrus/';
                            $image_url = $upload_path.$image_full_name;
                            $file->move($upload_path, $image_full_name);
                            $attachment[] = $image_url;
                        }
                    }
                    Navelcitrus::insert([
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
                 return redirect('Navelcitrus/show')->with('successfully', 'ได้ทำการเพิ่มข้อมูลเรียบร้อยแล้ว');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Navelcitrus  $navelcitrus
     * @return \Illuminate\Http\Response
     */
    public function show(Navelcitrus $navelcitrus)
    {
        //
        $navelcitrus = Navelcitrus::orderBy('id', 'DESC')->paginate(20);
        return view('admin/Navelcitrus/index', compact('navelcitrus'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Navelcitrus  $navelcitrus
     * @return \Illuminate\Http\Response
     */
    public function edit(Navelcitrus $navelcitrus, $id)
    {
        //
        $navelcitrus = Navelcitrus::find($id);
        $brand = Brand::all();
        $category = Category::all();
        $subcategory = SubCategory::all();
        return view('admin/Navelcitrus/edit', compact('navelcitrus','brand','category','subcategory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Navelcitrus  $navelcitrus
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Navelcitrus $navelcitrus, $id)
    {
        //
        $navelcitrus = Navelcitrus::find($id);
        $navelcitrus->title = $request->get('title');
        $navelcitrus->keywords = $request->get('keywords');
        $navelcitrus->description = $request->get('description');
        $navelcitrus->google_code = $request->get('google_code');
        $navelcitrus->facrbook_code = $request->get('facrbook_code');
        $navelcitrus->orteh_code = $request->get('orteh_code');

        $navelcitrus->brade = $request->get('brade');
        $navelcitrus->category = $request->get('category');
        $navelcitrus->sub_category = $request->get('sub_category');

        $navelcitrus->text_title_en = $request->get('text_title_en');
        $navelcitrus->text_title_th = $request->get('text_title_th');

        $navelcitrus->name_product_en = $request->get('name_product_en');
        $navelcitrus->name_product_th = $request->get('name_product_th');

        $navelcitrus->status = $request->get('status');

        $navelcitrus->images_product1 = $request->get('images_product1');
        $navelcitrus->attachment = $request->get('attachment');


        $image = array();
        if($files = $request-> file('images_product1')){
            foreach ($files as $file){
                $image_name = md5(rand(100, 10000));
                $ext = strtolower($file->getClientOriginalExtension());
                $image_full_name = $image_name.'.'.$ext;
                $upload_path = 'files_upload/Navelcitrus/';
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
                $upload_path = 'files_upload/Navelcitrus/';
                $image_url = $upload_path.$image_full_name;
                $file->move($upload_path, $image_full_name);
                $attachment[] = $image_url;
            }
        }
        $navelcitrus->save();
      return redirect('Navelcitrus/show')->with('success', 'ได้ทำการแก้ไขข้อมูลเรียบร้อยแล้ว');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Navelcitrus  $navelcitrus
     * @return \Illuminate\Http\Response
     */
    public function destroy(Navelcitrus $navelcitrus)
    {
        //
        $navelcitrus = Navelcitrus::find($id);
        $navelcitrus->delete();

        return redirect('/Navelcitrus/show')->with('success', 'ได้ทำการลบข้อมูล เรียบร้อยแล้ว');
    }
}

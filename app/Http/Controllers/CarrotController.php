<?php

namespace App\Http\Controllers;

use App\Carrot;
use App\Brand;
use App\Category;
use App\SubCategory;
use Illuminate\Http\Request;

class CarrotController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('user.carrot');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $carrot = Carrot::all();
        $brand = Brand::all();
        $category = Category::all();
        $subcategory = SubCategory::all();
        return view('admin/Carrot/create', compact('carrot','brand','category','subcategory'));
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
                $upload_path = 'files_upload/Carrot/';
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
                $upload_path = 'files_upload/Carrot/';
                $image_url = $upload_path.$image_full_name;
                $file->move($upload_path, $image_full_name);
                $attachment[] = $image_url;
            }
        }
        Carrot::insert([
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
     return redirect('Carrot/show')->with('successfully', 'ได้ทำการเพิ่มข้อมูลเรียบร้อยแล้ว');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Carrot  $carrot
     * @return \Illuminate\Http\Response
     */
    public function show(Carrot $carrot)
    {
        //
        $carrot = Carrot::orderBy('id', 'DESC')->paginate(20);
        return view('admin/Carrot/index', compact('carrot'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Carrot  $carrot
     * @return \Illuminate\Http\Response
     */
    public function edit(Carrot $carrot, $id)
    {
        //
        $carrot = Carrot::find($id);
        $brand = Brand::all();
        $category = Category::all();
        $subcategory = SubCategory::all();
        return view('admin/Carrot/edit', compact('carrot','brand','category','subcategory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Carrot  $carrot
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Carrot $carrot, $id)
    {
        //
        $carrot = Carrot::find($id);
        $carrot->title = $request->get('title');
        $carrot->keywords = $request->get('keywords');
        $carrot->description = $request->get('description');
        $carrot->google_code = $request->get('google_code');
        $carrot->facrbook_code = $request->get('facrbook_code');
        $carrot->orteh_code = $request->get('orteh_code');

        $carrot->brade = $request->get('brade');
        $carrot->category = $request->get('category');
        $carrot->sub_category = $request->get('sub_category');

        $carrot->text_title_en = $request->get('text_title_en');
        $carrot->text_title_th = $request->get('text_title_th');

        $carrot->name_product_en = $request->get('name_product_en');
        $carrot->name_product_th = $request->get('name_product_th');

        $carrot->status = $request->get('status');

        $carrot->images_product1 = $request->get('images_product1');
        $carrot->attachment = $request->get('attachment');


        $image = array();
        if($files = $request-> file('images_product1')){
            foreach ($files as $file){
                $image_name = md5(rand(100, 10000));
                $ext = strtolower($file->getClientOriginalExtension());
                $image_full_name = $image_name.'.'.$ext;
                $upload_path = 'files_upload/Carrot/';
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
                $upload_path = 'files_upload/Carrot/';
                $image_url = $upload_path.$image_full_name;
                $file->move($upload_path, $image_full_name);
                $attachment[] = $image_url;
            }
        }
        $carrot->save();
      return redirect('Carrot/show')->with('success', 'ได้ทำการแก้ไขข้อมูลเรียบร้อยแล้ว');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Carrot  $carrot
     * @return \Illuminate\Http\Response
     */
    public function destroy(Carrot $carrot, $id)
    {
        //
        $carrot = Carrot::find($id);
        $carrot->delete();

        return redirect('/Carrot/show')->with('success', 'ได้ทำการลบข้อมูล เรียบร้อยแล้ว');
    }
}

<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Beef;
use App\Brand;
use App\Category;
use App\SubCategory;
use DB;

class BeefController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('user.beef');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $brand = Brand::all();
        $category = Category::all();
        $subcategory = SubCategory::all();
        return view('admin/Beef/create', compact('brand','category','subcategory'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // dd($request->all());
        $image = array();
        if($files = $request-> file('images_product1')){
            foreach ($files as $file){
                $image_name = md5(rand(100, 10000));
                $ext = strtolower($file->getClientOriginalExtension());
                $image_full_name = $image_name.'.'.$ext;
                $upload_path = 'files_upload/Beef/';
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
                $upload_path = 'files_upload/Beef/';
                $image_url = $upload_path.$image_full_name;
                $file->move($upload_path, $image_full_name);
                $attachment[] = $image_url;
            }
        }
            Beef::insert([
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
            return redirect('/Beef/show')->with('success', 'ได้ทำการลบข้อมูล เรียบร้อยแล้ว');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Beef  $beef
     * @return \Illuminate\Http\Response
     */
    public function show(Beef $beef)
    {
        //

    // $beef = Beef::all();

    $beef = Beef::orderBy('id', 'DESC')->paginate(20);


    // $beef = DB::table('beefs')
    // ->join('brands', 'beefs.brade', '=', 'brands.id')
    // ->join('categories', 'beefs.category', '=', 'categories.id')
    // ->join('sub_categories', 'beefs.sub_category', '=', 'sub_categories.id')
    // ->select('beefs.*', 'categories.*','sub_categories.*','brands.*')
    // ->get();


    // $beef = DB::table('beefs')
    // ->join('brands', 'beefs.brade', '=', 'brands.id')
    // ->select('beefs.*','brands.*')
    // ->orderBy('beefs.id', 'DESC')
    // ->paginate(20);
     
    return view('admin/Beef/index', compact('beef'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Beef  $beef
     * @return \Illuminate\Http\Response
     */
    public function edit(Beef $beef, $id)
    {
        //
        $beef = beef::find($id);
        $brand = Brand::all();
        $category = Category::all();
        $subcategory = SubCategory::all();
        return view('admin/Beef/edit', compact('beef','brand','category','subcategory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Beef  $beef
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Beef $beef ,$id)
    {
        //
        $beef = Beef::find($id);
        $beef->title = $request->get('title');
        $beef->keywords = $request->get('keywords');
        $beef->description = $request->get('description');
        $beef->google_code = $request->get('google_code');
        $beef->facrbook_code = $request->get('facrbook_code');
        $beef->orteh_code = $request->get('orteh_code');

        $beef->brade = $request->get('brade');
        $beef->category = $request->get('category');
        $beef->sub_category = $request->get('sub_category');

        $beef->text_title_en = $request->get('text_title_en');
        $beef->text_title_th = $request->get('text_title_th');

        $beef->name_product_en = $request->get('name_product_en');
        $beef->name_product_th = $request->get('name_product_th');

        $beef->status = $request->get('status');

        $beef->images_product1 = $request->get('images_product1');
        $beef->attachment = $request->get('attachment');


        $image = array();
        if($files = $request-> file('images_product1')){
            foreach ($files as $file){
                $image_name = md5(rand(100, 10000));
                $ext = strtolower($file->getClientOriginalExtension());
                $image_full_name = $image_name.'.'.$ext;
                $upload_path = 'files_upload/Beef/';
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
                $upload_path = 'files_upload/Beef/';
                $image_url = $upload_path.$image_full_name;
                $file->move($upload_path, $image_full_name);
                $attachment[] = $image_url;
            }
        }
        $beef->save();
      return redirect('Beef/show')->with('success', 'ได้ทำการแก้ไขข้อมูลเรียบร้อยแล้ว');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Beef  $beef
     * @return \Illuminate\Http\Response
     */
    public function destroy(Beef $beef, $id)
    {
        //
        $beef = Beef::find($id);
        $beef->delete();

        return redirect('/Beef/show')->with('success', 'ได้ทำการลบข้อมูล เรียบร้อยแล้ว');
    }
}

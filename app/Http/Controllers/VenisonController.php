<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Venison;
use App\Brand;
use App\Category;
use App\SubCategory;
use DB;
class VenisonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $venison = DB::table('venisons')
        ->orderBy('id', 'DESC')
        ->limit(2)
        ->join('brands', 'venisons.brade', '=', 'brands.id')
        ->join('categories', 'venisons.category', '=', 'categories.id')
        ->join('sub_categories', 'venisons.sub_category', '=', 'sub_categories.id')
        ->select('venisons.*', 'brands.name_brand_en', 'brands.name_brand_th', 'brands.images', 'categories.name_categories', 'sub_categories.name_sub_categories')
        ->get();

        $venison2 = DB::table('venisons')
        ->orderBy('id', 'DESC')
        ->limit(1)
        ->join('brands', 'venisons.brade', '=', 'brands.id')
        ->join('categories', 'venisons.category', '=', 'categories.id')
        ->join('sub_categories', 'venisons.sub_category', '=', 'sub_categories.id')
        ->select('venisons.*', 'brands.name_brand_en', 'brands.name_brand_th', 'brands.images', 'categories.name_categories', 'sub_categories.name_sub_categories')
        ->get();

        $venison3 = DB::table('venisons')
        ->orderBy('id', 'DESC')
        ->offset(1)
        ->limit(4)
        ->join('brands', 'venisons.brade', '=', 'brands.id')
        ->join('categories', 'venisons.category', '=', 'categories.id')
        ->join('sub_categories', 'venisons.sub_category', '=', 'sub_categories.id')
        ->select('venisons.*', 'brands.name_brand_en', 'brands.name_brand_th', 'brands.images', 'categories.name_categories', 'sub_categories.name_sub_categories')
        ->get();


        $venison4 = DB::table('venisons')
        ->orderBy('id', 'DESC')
        ->limit(5)
        ->join('brands', 'venisons.brade', '=', 'brands.id')
        ->join('categories', 'venisons.category', '=', 'categories.id')
        ->join('sub_categories', 'venisons.sub_category', '=', 'sub_categories.id')
        ->select('venisons.*', 'brands.name_brand_en', 'brands.name_brand_th', 'brands.images', 'categories.name_categories', 'sub_categories.name_sub_categories')
        ->get();



        $venison5 = DB::table('venisons')
        ->orderBy('id', 'DESC')
        ->join('brands', 'venisons.brade', '=', 'brands.id')
        ->join('categories', 'venisons.category', '=', 'categories.id')
        ->join('sub_categories', 'venisons.sub_category', '=', 'sub_categories.id')
        ->select('venisons.*', 'brands.name_brand_en', 'brands.name_brand_th', 'brands.images', 'categories.name_categories', 'sub_categories.name_sub_categories')
        ->get();

        return view('user.venison', compact('venison', 'venison2', 'venison3' , 'venison4' , 'venison5'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $venison = Venison::all();
        $brand = Brand::all();
        $category = Category::all();
        $subcategory = SubCategory::all();
        return view('admin/Venison/create', compact('venison','brand','category','subcategory'));
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
        $image = array();
        if($files = $request-> file('images_product1')){
            foreach ($files as $file){
                $image_name = md5(rand(100, 10000));
                $ext = strtolower($file->getClientOriginalExtension());
                $image_full_name = $image_name.'.'.$ext;
                $upload_path = 'files_upload/Venison/';
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
                $upload_path = 'files_upload/Venison/';
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
                $upload_path = 'files_upload/Venison/';
                $image_url = $upload_path.$image_full_name;
                $file->move($upload_path, $image_full_name);
                $attachment[] = $image_url;
            }
        }
        Venison::insert([
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
     return redirect('Venison/show')->with('successfully', 'ได้ทำการเพิ่มข้อมูลเรียบร้อยแล้ว');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Venison  $venison
     * @return \Illuminate\Http\Response
     */
    public function show(Venison $venison)
    {
        //

        $venison = Venison::orderBy('id', 'DESC')->paginate(20);
        return view('admin/Venison/index', compact('venison'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Venison  $venison
     * @return \Illuminate\Http\Response
     */
    public function edit(Venison $venison, $id)
    {
        //
        $venison = Venison::find($id);
        $brand = Brand::all();
        $category = Category::all();
        $subcategory = SubCategory::all();
        return view('admin/Venison/edit', compact('venison','brand','category','subcategory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Venison  $venison
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Venison $venison, $id)
    {
        //
        $venison = Venison::find($id);
        $venison->title = $request->get('title');
        $venison->keywords = $request->get('keywords');
        $venison->description = $request->get('description');
        $venison->google_code = $request->get('google_code');
        $venison->facrbook_code = $request->get('facrbook_code');
        $venison->orteh_code = $request->get('orteh_code');

        $venison->brade = $request->get('brade');
        $venison->category = $request->get('category');
        $venison->sub_category = $request->get('sub_category');

        $venison->text_title_en = $request->get('text_title_en');
        $venison->text_title_th = $request->get('text_title_th');

        $venison->name_product_en = $request->get('name_product_en');
        $venison->name_product_th = $request->get('name_product_th');

        $venison->status = $request->get('status');

        $venison->images_product1 = $request->get('images_product1');
        $venison->attachment = $request->get('attachment');
        $venison->images_show = $request->get('images_show');


        $image = array();
        if($files = $request-> file('images_product1')){
            foreach ($files as $file){
                $image_name = md5(rand(100, 10000));
                $ext = strtolower($file->getClientOriginalExtension());
                $image_full_name = $image_name.'.'.$ext;
                $upload_path = 'files_upload/Venison/';
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
                $upload_path = 'files_upload/Venison/';
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
                $upload_path = 'files_upload/Venison/';
                $image_url = $upload_path.$image_full_name;
                $file->move($upload_path, $image_full_name);
                $attachment[] = $image_url;
            }
        }
        $venison->save();
      return redirect('Venison/show')->with('success', 'ได้ทำการแก้ไขข้อมูลเรียบร้อยแล้ว');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Venison  $venison
     * @return \Illuminate\Http\Response
     */
    public function destroy(Venison $venison, $id)
    {
        //
        $poultry = poultry::find($id);
        $poultry->delete();

        return redirect('/Poultry/show')->with('success', 'ได้ทำการลบข้อมูล เรียบร้อยแล้ว');
    }
}

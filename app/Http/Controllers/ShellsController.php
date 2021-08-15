<?php

namespace App\Http\Controllers;

use App\Shells;
use App\Brand;
use App\Category;
use App\SubCategory;
use DB;
use Illuminate\Http\Request;

class ShellsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $shells = DB::table('shells')
        ->orderBy('id', 'DESC')
        ->limit(3)
        ->join('brands', 'shells.brade', '=', 'brands.id')
        ->join('categories', 'shells.category', '=', 'categories.id')
        ->join('sub_categories', 'shells.sub_category', '=', 'sub_categories.id')
        ->select('shells.*', 'brands.name_brand_en', 'brands.name_brand_th', 'brands.images', 'categories.name_categories', 'sub_categories.name_sub_categories')
        ->get();

        $shells2 = DB::table('shells')
        ->orderBy('id', 'DESC')
        ->limit(1)
        ->join('brands', 'shells.brade', '=', 'brands.id')
        ->join('categories', 'shells.category', '=', 'categories.id')
        ->join('sub_categories', 'shells.sub_category', '=', 'sub_categories.id')
        ->select('shells.*', 'brands.name_brand_en', 'brands.name_brand_th', 'brands.images', 'categories.name_categories', 'sub_categories.name_sub_categories')
        ->get();

        $shells3 = DB::table('shells')
        ->orderBy('id', 'DESC')
        ->offset(1)
        ->limit(4)
        ->join('brands', 'shells.brade', '=', 'brands.id')
        ->join('categories', 'shells.category', '=', 'categories.id')
        ->join('sub_categories', 'shells.sub_category', '=', 'sub_categories.id')
        ->select('shells.*', 'brands.name_brand_en', 'brands.name_brand_th', 'brands.images', 'categories.name_categories', 'sub_categories.name_sub_categories')
        ->get();


        $shells4 = DB::table('shells')
        ->orderBy('id', 'DESC')
        ->limit(5)
        ->join('brands', 'shells.brade', '=', 'brands.id')
        ->join('categories', 'shells.category', '=', 'categories.id')
        ->join('sub_categories', 'shells.sub_category', '=', 'sub_categories.id')
        ->select('shells.*', 'brands.name_brand_en', 'brands.name_brand_th', 'brands.images', 'categories.name_categories', 'sub_categories.name_sub_categories')
        ->get();



        $shells5 = DB::table('shells')
        ->orderBy('id', 'DESC')
        ->join('brands', 'shells.brade', '=', 'brands.id')
        ->join('categories', 'shells.category', '=', 'categories.id')
        ->join('sub_categories', 'shells.sub_category', '=', 'sub_categories.id')
        ->select('shells.*', 'brands.name_brand_en', 'brands.name_brand_th', 'brands.images', 'categories.name_categories', 'sub_categories.name_sub_categories')
        ->get();

        return view('user.shells', compact('shells', 'shells2', 'shells3' , 'shells4' , 'shells5'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $shells = Shells::all();
        $brand = Brand::all();
        $category = Category::all();
        $subcategory = SubCategory::all();
        return view('admin/Shells/create', compact('shells','brand','category','subcategory'));
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
                             $upload_path = 'files_upload/Shells/';
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
                             $upload_path = 'files_upload/Shells/';
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
                             $upload_path = 'files_upload/Shells/';
                             $image_url = $upload_path.$image_full_name;
                             $file->move($upload_path, $image_full_name);
                             $images_show[] = $image_url;
                         }
                     }
                     

                     Shells::insert([
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
                  return redirect('Shells/show')->with('successfully', 'ได้ทำการเพิ่มข้อมูลเรียบร้อยแล้ว');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Shells  $shells
     * @return \Illuminate\Http\Response
     */
    public function show(Shells $shells)
    {
        //
        $shells = Shells::orderBy('id', 'DESC')->paginate(20);
        return view('admin/Shells/index', compact('shells'));    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Shells  $shells
     * @return \Illuminate\Http\Response
     */
    public function edit(Shells $shells, $id)
    {
        //
        $shells = Shells::find($id);
        $brand = Brand::all();
        $category = Category::all();
        $subcategory = SubCategory::all();
        return view('admin/Shells/edit', compact('shells','brand','category','subcategory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Shells  $shells
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Shells $shells, $id)
    {
        //
        $shells = Shells::find($id);
        $shells->title = $request->get('title');
        $shells->keywords = $request->get('keywords');
        $shells->description = $request->get('description');
        $shells->google_code = $request->get('google_code');
        $shells->facrbook_code = $request->get('facrbook_code');
        $shells->orteh_code = $request->get('orteh_code');

        $shells->brade = $request->get('brade');
        $shells->category = $request->get('category');
        $shells->sub_category = $request->get('sub_category');

        $shells->text_title_en = $request->get('text_title_en');
        $shells->text_title_th = $request->get('text_title_th');

        $shells->name_product_en = $request->get('name_product_en');
        $shells->name_product_th = $request->get('name_product_th');

        $shells->status = $request->get('status');

        $shells->images_product1 = $request->get('images_product1');
        $shells->attachment = $request->get('attachment');
        $shells->images_show = $request->get('images_show');


        $image = array();
        if($files = $request-> file('images_product1')){
            foreach ($files as $file){
                $image_name = md5(rand(100, 10000));
                $ext = strtolower($file->getClientOriginalExtension());
                $image_full_name = $image_name.'.'.$ext;
                $upload_path = 'files_upload/Shells/';
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
                $upload_path = 'files_upload/Shells/';
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
                $upload_path = 'files_upload/Shells/';
                $image_url = $upload_path.$image_full_name;
                $file->move($upload_path, $image_full_name);
                $attachment[] = $image_url;
            }
        }
        $shells->save();
      return redirect('Shells/show')->with('success', 'ได้ทำการแก้ไขข้อมูลเรียบร้อยแล้ว');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Shells  $shells
     * @return \Illuminate\Http\Response
     */
    public function destroy(Shells $shells)
    {
        //
        $lamb = Lamb::find($id);
        $lamb->delete();

        return redirect('/Lamb/show')->with('success', 'ได้ทำการลบข้อมูล เรียบร้อยแล้ว');
    }
}

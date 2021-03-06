<?php

namespace App\Http\Controllers;

use App\Vegetable;
use App\Brand;
use App\Category;
use App\SubCategory;
use DB;
use Illuminate\Http\Request;

class VegetableController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('user.vegetable');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $vegetable = Vegetable::all();
        $brand = Brand::all();
        $category = Category::all();
        $subcategory = SubCategory::all();
        return view('admin/Vegetable/create', compact('vegetable','brand','category','subcategory'));
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
                    $upload_path = 'files_upload/Vegetable/';
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
                $upload_path = 'files_upload/Vegetable/';
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
                    $upload_path = 'files_upload/Vegetable/';
                    $image_url = $upload_path.$image_full_name;
                    $file->move($upload_path, $image_full_name);
                    $attachment[] = $image_url;
                }
            }
            Vegetable::insert([
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
         return redirect('Vegetable/show')->with('successfully', '????????????????????????????????????????????????????????????????????????????????????????????????');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Vegetable  $vegetable
     * @return \Illuminate\Http\Response
     */
    public function show(Vegetable $vegetable)
    {
        //
        $vegetable = Vegetable::orderBy('id', 'DESC')->paginate(20);
        return view('admin/Vegetable/index', compact('vegetable'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Vegetable  $vegetable
     * @return \Illuminate\Http\Response
     */
    public function edit(Vegetable $vegetable, $id)
    {
        //
        $vegetable = Vegetable::find($id);
        $brand = Brand::all();
        $category = Category::all();
        $subcategory = SubCategory::all();
        return view('admin/Vegetable/edit', compact('vegetable','brand','category','subcategory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Vegetable  $vegetable
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vegetable $vegetable, $id)
    {
        //
        $vegetable = Vegetable::find($id);
        $vegetable->title = $request->get('title');
        $vegetable->keywords = $request->get('keywords');
        $vegetable->description = $request->get('description');
        $vegetable->google_code = $request->get('google_code');
        $vegetable->facrbook_code = $request->get('facrbook_code');
        $vegetable->orteh_code = $request->get('orteh_code');

        $vegetable->brade = $request->get('brade');
        $vegetable->category = $request->get('category');
        $vegetable->sub_category = $request->get('sub_category');

        $vegetable->text_title_en = $request->get('text_title_en');
        $vegetable->text_title_th = $request->get('text_title_th');

        $vegetable->name_product_en = $request->get('name_product_en');
        $vegetable->name_product_th = $request->get('name_product_th');

        $vegetable->status = $request->get('status');

        $vegetable->images_product1 = $request->get('images_product1');
        $vegetable->attachment = $request->get('attachment');
        $vegetable->images_show = $request->get('images_show');


        $image = array();
        if($files = $request-> file('images_product1')){
            foreach ($files as $file){
                $image_name = md5(rand(100, 10000));
                $ext = strtolower($file->getClientOriginalExtension());
                $image_full_name = $image_name.'.'.$ext;
                $upload_path = 'files_upload/Vegetable/';
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
                $upload_path = 'files_upload/Vegetable/';
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
                $upload_path = 'files_upload/Vegetable/';
                $image_url = $upload_path.$image_full_name;
                $file->move($upload_path, $image_full_name);
                $attachment[] = $image_url;
            }
        }
        $vegetable->save();
      return redirect('Vegetable/show')->with('success', '????????????????????????????????????????????????????????????????????????????????????????????????');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Vegetable  $vegetable
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vegetable $vegetable)
    {
        //
        $vegetable = Vegetable::find($id);
        $vegetable->delete();

        return redirect('/Vegetable/show')->with('success', '???????????????????????????????????????????????? ???????????????????????????????????????');
    }
}

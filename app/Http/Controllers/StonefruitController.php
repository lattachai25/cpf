<?php

namespace App\Http\Controllers;

use App\Stonefruit;
use App\Brand;
use App\Category;
use App\SubCategory;
use DB;
use Illuminate\Http\Request;

class StonefruitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //        
        $stonefruits = DB::table('stonefruits')
        ->orderBy('id', 'DESC')
        ->limit(3)
        ->join('brands', 'stonefruits.brade', '=', 'brands.id')
        ->join('categories', 'stonefruits.category', '=', 'categories.id')
        ->join('sub_categories', 'stonefruits.sub_category', '=', 'sub_categories.id')
        ->select('stonefruits.*', 'brands.name_brand_en', 'brands.name_brand_th', 'brands.images', 'categories.name_categories', 'sub_categories.name_sub_categories')
        ->get();

        $stonefruits2 = DB::table('stonefruits')
        ->orderBy('id', 'DESC')
        ->limit(1)
        ->join('brands', 'stonefruits.brade', '=', 'brands.id')
        ->join('categories', 'stonefruits.category', '=', 'categories.id')
        ->join('sub_categories', 'stonefruits.sub_category', '=', 'sub_categories.id')
        ->select('stonefruits.*', 'brands.name_brand_en', 'brands.name_brand_th', 'brands.images', 'categories.name_categories', 'sub_categories.name_sub_categories')
        ->get();

        $stonefruits3 = DB::table('stonefruits')
        ->orderBy('id', 'DESC')
        ->offset(1)
        ->limit(4)
        ->join('brands', 'stonefruits.brade', '=', 'brands.id')
        ->join('categories', 'stonefruits.category', '=', 'categories.id')
        ->join('sub_categories', 'stonefruits.sub_category', '=', 'sub_categories.id')
        ->select('stonefruits.*', 'brands.name_brand_en', 'brands.name_brand_th', 'brands.images', 'categories.name_categories', 'sub_categories.name_sub_categories')
        ->get();


        $stonefruits4 = DB::table('stonefruits')
        ->orderBy('id', 'DESC')
        ->limit(5)
        ->join('brands', 'stonefruits.brade', '=', 'brands.id')
        ->join('categories', 'stonefruits.category', '=', 'categories.id')
        ->join('sub_categories', 'stonefruits.sub_category', '=', 'sub_categories.id')
        ->select('stonefruits.*', 'brands.name_brand_en', 'brands.name_brand_th', 'brands.images', 'categories.name_categories', 'sub_categories.name_sub_categories')
        ->get();



        $stonefruits5 = DB::table('stonefruits')
        ->orderBy('id', 'DESC')
        ->join('brands', 'stonefruits.brade', '=', 'brands.id')
        ->join('categories', 'stonefruits.category', '=', 'categories.id')
        ->join('sub_categories', 'stonefruits.sub_category', '=', 'sub_categories.id')
        ->select('stonefruits.*', 'brands.name_brand_en', 'brands.name_brand_th', 'brands.images', 'categories.name_categories', 'sub_categories.name_sub_categories')
        ->get();

        return view('user.stonefruit', compact('stonefruits', 'stonefruits2', 'stonefruits3' , 'stonefruits4' , 'stonefruits5'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $stonefruit = Stonefruit::all();
        $brand = Brand::all();
        $category = Category::all();
        $subcategory = SubCategory::all();
        return view('admin/Stonefruit/create', compact('stonefruit','brand','category','subcategory'));
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
                             $upload_path = 'files_upload/Stonefruit/';
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
                $upload_path = 'files_upload/Stonefruit/';
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
                             $upload_path = 'files_upload/Stonefruit/';
                             $image_url = $upload_path.$image_full_name;
                             $file->move($upload_path, $image_full_name);
                             $attachment[] = $image_url;
                         }
                     }
                     Stonefruit::insert([
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
                  return redirect('Stonefruit/show')->with('successfully', '????????????????????????????????????????????????????????????????????????????????????????????????');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Stonefruit  $stonefruit
     * @return \Illuminate\Http\Response
     */
    public function show(Stonefruit $stonefruit)
    {
        //
        $stonefruit = Stonefruit::orderBy('id', 'DESC')->paginate(20);
        return view('admin/stonefruit/index', compact('stonefruit'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Stonefruit  $stonefruit
     * @return \Illuminate\Http\Response
     */
    public function edit(Stonefruit $stonefruit, $id)
    {
        //
        $stonefruit = Stonefruit::find($id);
        $brand = Brand::all();
        $category = Category::all();
        $subcategory = SubCategory::all();
        return view('admin/Stonefruit/edit', compact('stonefruit','brand','category','subcategory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Stonefruit  $stonefruit
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Stonefruit $stonefruit, $id)
    {
        //
        $stonefruit = Stonefruit::find($id);
        $stonefruit->title = $request->get('title');
        $stonefruit->keywords = $request->get('keywords');
        $stonefruit->description = $request->get('description');
        $stonefruit->google_code = $request->get('google_code');
        $stonefruit->facrbook_code = $request->get('facrbook_code');
        $stonefruit->orteh_code = $request->get('orteh_code');

        $stonefruit->brade = $request->get('brade');
        $stonefruit->category = $request->get('category');
        $stonefruit->sub_category = $request->get('sub_category');

        $stonefruit->text_title_en = $request->get('text_title_en');
        $stonefruit->text_title_th = $request->get('text_title_th');

        $stonefruit->name_product_en = $request->get('name_product_en');
        $stonefruit->name_product_th = $request->get('name_product_th');

        $stonefruit->status = $request->get('status');

        $stonefruit->images_product1 = $request->get('images_product1');
        $stonefruit->attachment = $request->get('attachment');
        $stonefruit->images_show = $request->get('images_show');


        $image = array();
        if($files = $request-> file('images_product1')){
            foreach ($files as $file){
                $image_name = md5(rand(100, 10000));
                $ext = strtolower($file->getClientOriginalExtension());
                $image_full_name = $image_name.'.'.$ext;
                $upload_path = 'files_upload/Stonefruit/';
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
                $upload_path = 'files_upload/Stonefruit/';
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
                $upload_path = 'files_upload/Stonefruit/';
                $image_url = $upload_path.$image_full_name;
                $file->move($upload_path, $image_full_name);
                $attachment[] = $image_url;
            }
        }
        $stonefruit->save();
      return redirect('Stonefruit/show')->with('success', '????????????????????????????????????????????????????????????????????????????????????????????????');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Stonefruit  $stonefruit
     * @return \Illuminate\Http\Response
     */
    public function destroy(Stonefruit $stonefruit, $id)
    {
        //
        $stonefruit = Stonefruit::find($id);
        $stonefruit->delete();

        return redirect('/Stonefruit/show')->with('success', '???????????????????????????????????????????????? ???????????????????????????????????????');
    }
}

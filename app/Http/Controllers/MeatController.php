<?php

namespace App\Http\Controllers;

use App\Meat;
use App\Brand;
use App\Category;
use App\SubCategory;
use DB;
use Illuminate\Http\Request;

class MeatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $meat = Meat::where("status", 1)->orderBy('id', 'desc')->take(5)->first();
        // $meats1 = Meat::orderBy('id', 'desc')->take(5)->first();
        // $meat = explode('|', $meats1->images_product1);
        
        $meat = DB::table('meats')
        ->join('brands', 'meats.brade', '=', 'brands.id')
        ->join('categories', 'meats.category', '=', 'categories.id')
        ->join('sub_categories', 'meats.sub_category', '=', 'sub_categories.id')
        ->select('meats.*', 'brands.name_brand_en', 'brands.name_brand_th', 'categories.name_categories', 'sub_categories.name_sub_categories')
        ->get();


        return view('user.meat', compact('meat'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $meat = Meat::all();
        $brand = Brand::all();
        $category = Category::all();
        $subcategory = SubCategory::all();
        return view('admin/Meat/create', compact('meat','brand','category','subcategory'));
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

                    $images_show = array();
                    if($files = $request-> file('images_show')){
                        foreach ($files as $file){
                            $image_name = md5(rand(100, 10000));
                            $ext = strtolower($file->getClientOriginalExtension());
                            $image_full_name = $image_name.'.'.$ext;
                            $upload_path = 'files_upload/Meat/';
                            $image_url = $upload_path.$image_full_name;
                            $file->move($upload_path, $image_full_name);
                            $images_show[] = $image_url;
                        }
                    }
                     $image = array();
                     if($files = $request-> file('images_product1')){
                         foreach ($files as $file){
                             $image_name = md5(rand(100, 10000));
                             $ext = strtolower($file->getClientOriginalExtension());
                             $image_full_name = $image_name.'.'.$ext;
                             $upload_path = 'files_upload/Meat/';
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
                             $upload_path = 'files_upload/Meat/';
                             $image_url = $upload_path.$image_full_name;
                             $file->move($upload_path, $image_full_name);
                             $attachment[] = $image_url;
                         }
                     }
                     Meat::insert([
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
            
                             'images_show' => implode('|', $images_show),
                             'images_product1' => implode('|', $image),
                             'attachment' => implode('|', $attachment),
                         ]);
                  return redirect('Meat/show')->with('successfully', 'ได้ทำการเพิ่มข้อมูลเรียบร้อยแล้ว');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Meat  $meat
     * @return \Illuminate\Http\Response
     */
    public function show(Meat $meat)
    {
        //
        $meat = Meat::orderBy('id', 'DESC')->paginate(20);
        return view('admin/Meat/index', compact('meat'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Meat  $meat
     * @return \Illuminate\Http\Response
     */
    public function edit(Meat $meat, $id)
    {
        //
        $meat = Meat::find($id);
        $brand = Brand::all();
        $category = Category::all();
        $subcategory = SubCategory::all();
        return view('admin/Meat/edit', compact('meat','brand','category','subcategory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Meat  $meat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Meat $meat, $id)
    {
        //
        $meat = Meat::find($id);
        $meat->title = $request->get('title');
        $meat->keywords = $request->get('keywords');
        $meat->description = $request->get('description');
        $meat->google_code = $request->get('google_code');
        $meat->facrbook_code = $request->get('facrbook_code');
        $meat->orteh_code = $request->get('orteh_code');

        $meat->brade = $request->get('brade');
        $meat->category = $request->get('category');
        $meat->sub_category = $request->get('sub_category');

        $meat->text_title_en = $request->get('text_title_en');
        $meat->text_title_th = $request->get('text_title_th');

        $meat->name_product_en = $request->get('name_product_en');
        $meat->name_product_th = $request->get('name_product_th');

        $meat->status = $request->get('status');

        $meat->images_product1 = $request->get('images_product1');
        $meat->attachment = $request->get('attachment');
        $meat->images_show = $request->get('images_show');


        $image = array();
        if($files = $request-> file('images_product1')){
            foreach ($files as $file){
                $image_name = md5(rand(100, 10000));
                $ext = strtolower($file->getClientOriginalExtension());
                $image_full_name = $image_name.'.'.$ext;
                $upload_path = 'files_upload/Meat/';
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
                $upload_path = 'files_upload/Meat/';
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
                $upload_path = 'files_upload/Meat/';
                $image_url = $upload_path.$image_full_name;
                $file->move($upload_path, $image_full_name);
                $attachment[] = $image_url;
            }
        }
        $meat->save();
      return redirect('Meat/show')->with('success', 'ได้ทำการแก้ไขข้อมูลเรียบร้อยแล้ว');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Meat  $meat
     * @return \Illuminate\Http\Response
     */
    public function destroy(Meat $meat, $id)
    {
        //
        $Meat = Meat::find($id);
        $Meat->delete();

        return redirect('/Meat/show')->with('success', 'ได้ทำการลบข้อมูล เรียบร้อยแล้ว');
    }
}

<?php

namespace App\Http\Controllers;

use App\Brand;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // 
        return view('admin.Brand');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin/Brand/create');
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
        $input = new brand([
            'name_brand_en' => $request->input('name_brand_en'),
            'name_brand_th' => $request->input('name_brand_th'),
            'status' => $request->input('status'),
            'images' => $request->images->getClientOriginalName()
            ]);

          $input->save();
          $input = $request->all();
          $input = request()->images->getClientOriginalName();
          $request->images->move(public_path('/files_upload/Brand'), $input);


          return redirect('Brand/show')->with('success', 'ได้ทำการเพิ่มข้อมูลเรียบร้อยแล้ว');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function show(Brand $brand)
    {
        //
        $brand = Brand::all();
        return view('admin/Brand/index', compact('brand'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function edit(Brand $brand ,$id)
    {
        //

        $brand = brand::find($id);
        return view('admin/Brand/edit', compact('brand'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Brand $brand, $id)
    {
        //
        $brand = brand::find($id);
        $brand->name_brand_en = $request->get('name_brand_en');
        $brand->name_brand_th = $request->get('name_brand_th');
        $brand->status = $request->get('status');
        $brand->images = $request->get('images');
        
          if ($request->hasfile('images')){
              $file = $request->file('images');
              $extension = $file->getClientOriginalName();
              $filename = time() .'.'. $extension;
              $file->move('files_upload/Brand', $filename);
              $brand->images = $filename;
          }

        $brand->save();
      return redirect('Brand/show')->with('success', 'ได้ทำการแก้ไขข้อมูลเรียบร้อยแล้ว');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function destroy(Brand $brand, $id)
    {
        //
        $brand = brand::find($id);
        $brand->delete();

        return redirect('/Brand/show')->with('success', 'ได้ทำการลบข้อมูล เรียบร้อยแล้ว');
    }
}

<?php

namespace App\Http\Controllers;

use App\Poultry;
use App\Brand;
use App\Category;
use App\SubCategory;
use DB;
use Illuminate\Http\Request;

class PoultryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('user.poultry');
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
        return view('admin/Poultry/create', compact('brand','category','subcategory'));
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
        $input = new contact([
            'title' => $request->input('title'),
            'keywords' => $request->input('keywords'),
            'description' => $request->input('description'),
            'google_code' => $request->input('google_code'),
            'facrbook_code' => $request->input('facrbook_code'),
            'orteh_code' => $request->input('orteh_code'),

            'brade' => $request->input('brade'),
            'category' => $request->input('category'),
            'sub_category' => $request->input('sub_category'),

            'images_logo' => $request->input('images_logo'),
            'text_title_en' => $request->input('text_title_en'),
            'text_title_th' => $request->input('text_title_th'),
            'name_product_en' => $request->input('name_product_en'),
            'name_product_th' => $request->input('name_product_th'),

            'detel_product_en' => $request->input('detel_product_en'),
            'detel_product_th' => $request->input('detel_product_th'),
            'images_product1' => $request->input('images_product1'),
            'images_product2' => $request->input('images_product2'),
            'images_product3' => $request->input('images_product3'),
            'images_product4' => $request->input('images_product4'),
            'images_product5' => $request->input('images_product5'),
            'images_product6' => $request->input('images_product6'),
            'attachment' => $request->input('attachment'),
            'status' => $request->input('status')

            ]);

          $input->save();

          return redirect('Poultry/show')->with('success', 'ได้ทำการเพิ่มข้อมูลเรียบร้อยแล้ว');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Poultry  $poultry
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
        $poultry = poultry::all();
        return view('admin/Poultry/index', compact('poultry'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Poultry  $poultry
     * @return \Illuminate\Http\Response
     */
    public function edit(Poultry $poultry, $id)
    {
        //
        $poultry = poultry::find($id);
        return view('admin/Poultry/edit', compact('poultry'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Poultry  $poultry
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Poultry $poultry, $id)
    {
        //
        $poultry = poultry::find($id);
        $poultry->title = $request->get('title');
        $poultry->keywords = $request->get('keywords');
        $poultry->description = $request->get('description');
        $poultry->google_code = $request->get('google_code');
        $poultry->facrbook_code = $request->get('facrbook_code');
        $poultry->orteh_code = $request->get('orteh_code');

        $poultry->brade = $request->get('brade');
        $poultry->category = $request->get('category');
        $poultry->sub_category = $request->get('sub_category');
        $poultry->images_logo = $request->get('images_logo');
        $poultry->text_title_en = $request->get('text_title_en');
        $poultry->text_title_th = $request->get('text_title_th');
        $poultry->name_product_en = $request->get('name_product_en');
        $poultry->name_product_th = $request->get('name_product_th');
        $poultry->detel_product_en = $request->get('detel_product_en');
        $poultry->detel_product_th = $request->get('detel_product_th');
        $poultry->images_product1 = $request->get('images_product1');
        $poultry->images_product2 = $request->get('images_product2');
        $poultry->images_product3 = $request->get('images_product3');
        $poultry->images_product4 = $request->get('images_product4');
        $poultry->images_product5 = $request->get('images_product5');
        $poultry->images_product6 = $request->get('images_product6');
        $poultry->attachment = $request->get('attachment');
        $poultry->status = $request->get('status');

        $poultry->save();
        return redirect('Poultry/show')->with('success', 'ได้ทำการแก้ไขข้อมูลเรียบร้อยแล้ว');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Poultry  $poultry
     * @return \Illuminate\Http\Response
     */
    public function destroy(Poultry $poultry)
    {
        //
        $poultry = poultry::find($id);
        $poultry->delete();

        return redirect('/Poultry/show')->with('success', 'ได้ทำการลบข้อมูล เรียบร้อยแล้ว');
    }
}

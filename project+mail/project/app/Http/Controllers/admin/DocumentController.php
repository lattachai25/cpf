<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\document;
use DB;


class DocumentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $document = document::all();
        return view('document.index', compact('document'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'document_name' => 'required',
            'document_id' => ''
        ]);

        $images=array();
        if($files=$request->file('document_name')){
        foreach($files as $file){
        $name=$file->getClientOriginalName();
        $file->move(public_path('/File_document'),$name);

        $images[]=$name;
        /*Insert your data*/
        DB::table('documents')->insert([
        'documents_name' => $name
        ]);
        /*Insert your data*/
        }
        }

    return redirect('/admin/document')->with('success', 'ได้ทำการอับโหลด เอกสารเรียบร้อยแล้ว');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\document  $document
     * @return \Illuminate\Http\Response
     */
    public function show(document $document)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\document  $document
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $name = document::find($id);
        return view('document.edit', compact('name'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\document  $document
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    $name = document::find($id);

     $this->validate($request, [
            'document_name' => 'required'
        ]);

        $images=array();
        if($files=$request->file('document_name')){
        foreach($files as $file){
        $name=$file->getClientOriginalName();
        $file->move(public_path('/File_document'),$name);

        $images[]=$name;
        /*Insert your data*/
        DB::table('documents')->insert([
        'documents_name' => $name
        ]);
        /*Insert your data*/
        }
        }

    return redirect('/admin/document')->with('success', 'ได้ทำการอับโหลด เอกสารเรียบร้อยแล้ว');









    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\document  $document
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
                $documents = document::find($id);
                $documents->delete();

                return redirect('/admin/document')->with('success', 'ได้ทำการลบข้อมูล เรียบร้อยแล้ว');
    }












}

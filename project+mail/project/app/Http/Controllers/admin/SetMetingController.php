<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\set_meting;
use App\Series_Meting;
use DB;

class SetMetingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
       // $set = set_meting::all();

        $set = DB::table('set_metings')
        ->orderBy('series_name', 'desc')
        ->orderBy('id', 'asc')
        ->get();



        return view('set_meting.index', compact('set'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $meetings = Series_Meting::all();



       // $meetings = BD::table('Series_Meting')->get()->pluck('series_name');
        return view('set_meting.create', ['meetings' => $meetings]);
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
        //   $this->validate($request, [
        //     'series_name'=>'required',
        //     'set_name'=>'required',
        //     'set_group'=>'required',
        //     'detel'=>'required',
        //     'note' => 'required',
        //     'file'=>'file'
        // ]);

        $input = $request->all();
        $input = request()->file->getClientOriginalName();
        $request->file->move(public_path('/files_upload'), $input);

        $input = new set_meting([
            'series_name' => $request->input('series_name'),
            'set_name' => $request->input('set_name'),
            'detel' => $request->input('detel'),
            'note' => $request->input('note'),
            'date' => $request->input('date'),
            'time' => $request->input('time'),
            'file' => $request->file->getClientOriginalName()
            ]);

            $input->save();



                return redirect('/admin/setmeting')->with('success', 'ได้ทำการเพิ่ม การประชุมย่อย เรียบร้อยแล้ว');
                }


    /**
     * Display the specified resource.
     *
     * @param  \App\set_meting  $set_meting
     * @return \Illuminate\Http\Response
     */
    public function show(set_meting $set_meting)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\set_meting  $set_meting
     * @return \Illuminate\Http\Response
     */
    public function edit(set_meting $set_meting, $id)
    {
        //

        $set = set_meting::find($id);
        return view('set_meting.edit', compact('set'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\set_meting  $set_meting
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, set_meting $set_meting ,$id)
    {
        //
        // $request->validate([
        //     'series_name'=>'required',
        //     'set_name'=>'required',
        //     'set_name'=>'required',
        //     'set_name'=>'required',
        //     'set_name'=>'required',
        //     'set_id'=>'required'
        //   ]);

          $set = set_meting::find($id);
          $set->series_name = $request->get('series_name');
          $set->set_name = $request->get('set_name');
          $set->detel = $request->get('detel');
          $set->note = $request->get('note');
          $set->date = $request->get('date');
          $set->time = $request->get('time');
          $set->file = $request->get('file');


          $set->save();

          return redirect('/admin/setmeting')->with('success', 'ได้ทำการเพิ่มข้อมูลเรียบร้อยแล้ว');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\set_meting  $set_meting
     * @return \Illuminate\Http\Response
     */
    public function destroy(set_meting $set_meting ,$id)
    {
        //
             //
             $set = set_meting::find($id);
             $set->delete();

             return redirect('/admin/setmeting')->with('success', 'ได้ทำการลบข้อมูล เรียบร้อยแล้ว');
    }
}

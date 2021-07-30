<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Series_Meting;


class SeriesMetingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $smg = Series_Meting::all();
        return view('SeriesMeting.index', compact('smg'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('SeriesMeting.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


     /*  smg = SeriesMeting  */
    public function store(Request $request)
    {
        $request->validate([
          'series_name'=>'required'
        ]);
        $smg = new Series_Meting([
          'series_name' => $request->get('series_name')
        ]);
        $smg->save();


        return redirect('/admin/seriesmeting')->with('success', 'ได้ทำการเพิ่ม หัวข้อวาระการประชุม เรียบร้อยแล้ว');
      }

    /**
     * Display the specified resource.
     *
     * @param  \App\series_meting  $series_meting
     * @return \Illuminate\Http\Response
     */
    public function show(series_meting $series_meting)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\series_meting  $series_meting
     * @return \Illuminate\Http\Response
     */
    public function edit(series_meting $series_meting, $id)
    {
        //

        $smg = Series_Meting::find($id);
        return view('seriesmeting.edit', compact('smg'));


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\series_meting  $series_meting
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, series_meting $series_meting ,$id)
    {
        //
        $request->validate([
            'series_name'=>'required',
            'series_set'=>'required'
          ]);

          $smg = Series_Meting::find($id);
          $smg->series_name = $request->get('series_name');
          $smg->series_set = $request->get('series_set');

          $smg->save();

          return redirect('/admin/seriesmeting')->with('success', 'ได้ทำการเพิ่มข้อมูลเรียบร้อยแล้ว');



    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\series_meting  $series_meting
     * @return \Illuminate\Http\Response
     */
    public function destroy(series_meting $series_meting ,$id)
    {
        //
        $smg = Series_Meting::find($id);
        $smg->delete();

        return redirect('/admin/seriesmeting')->with('success', 'ได้ทำการลบข้อมูล เรียบร้อยแล้ว');
    }
}

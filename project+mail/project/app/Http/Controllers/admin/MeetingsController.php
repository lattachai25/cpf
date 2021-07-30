<?php

namespace App\Http\Controllers\admin;

use App\meetings;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\set_meting;
use App\user;
use App\Position;
use App\Board;
use App\series_meting;
use App\nums;
use DB;
class MeetingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $meetings = meetings::all();
        return view('Meetings.index', compact('meetings'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        //return view('Meetings.store');
        $boa = Board::all();
        $num = nums::all();
        $ser_user = user::all();
        $series_metings = Series_Meting::all();
        $set = set_meting::all();

        return view('Meetings.create', compact('set','ser_user','boa','series_metings','num'));


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
          $input = new meetings([
            'series_name' => $request->input('series_name'),
            'set_name' => $request->input('set_name'),
            'group_name' => $request->input('group_name'),
            'date' => $request->input('date'),
            'time' => $request->input('time'),
            'note' => $request->input('note'),
            'file' => $request->file->getClientOriginalName()
            ]);

          $input->save();
          $input = $request->all();
          $input = request()->file->getClientOriginalName();
          $request->file->move(public_path('/files_upload'), $input);


          return redirect('admin/meetings')->with('success', 'ได้ทำการเพิ่ม หัวข้อวาระการประชุม เรียบร้อยแล้ว');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\meetings  $meetings
     * @return \Illuminate\Http\Response
     */
    public function show(meetings $meetings)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\meetings  $meetings
     * @return \Illuminate\Http\Response
     */
    public function edit(meetings $meetings)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\meetings  $meetings
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, meetings $meetings)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\meetings  $meetings
     * @return \Illuminate\Http\Response
     */
    public function destroy(meetings $meetings)
    {
        //
    }

}

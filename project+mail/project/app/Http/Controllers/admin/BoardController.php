<?php

namespace App\Http\Controllers\admin;

use App\Board;
use App\Position;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\user;
use App\nums;




class BoardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $ser_user = Board::all();
        $positions = Position::all();
        return view('board.index', compact('ser_user','positions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ser_user = user::all();
        $positions = Position::all();

        return view('board.create', compact('ser_user','positions'));
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

        // $request->validate([
        //     'board_name'=>'required'
        //   ]);

         Board ::create([
            'board_name' => $request->input('board_name'),
            'user_name' => $request->input('user_name'),
            'position' => $request->input('position'),
            'pro_num' => $request->input('board_name'),
          ]);

          nums ::create([
            'num_name' => $request->input('board_name'),
          ]);

        // $ser_user->save();


          return redirect('/admin/board/')->with('success', 'ได้ทำการเพิ่ม หัวข้อวาระการประชุม เรียบร้อยแล้ว');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Board  $board
     * @return \Illuminate\Http\Response
     */
    public function show(Board $board)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Board  $board
     * @return \Illuminate\Http\Response
     */
    public function edit(Board $board)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Board  $board
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Board $board ,$id)
    {
        //
        $request->validate([
            'id'=>'required',
            'type'=>'required'
          ]);

          $ser_user = Series_Meting::find($id);
          $ser_user->type = $request->get('type');

          $ser_user->save();

          return redirect('/admin/board/')->with('success', 'ได้ทำการเพิ่มข้อมูลเรียบร้อยแล้ว');






    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Board  $board
     * @return \Illuminate\Http\Response
     */
    public function destroy(Board $board)
    {
        //
    }
}

<?php

namespace App\Http\Controllers\admin;

use App\sand_mails;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Redirect,Response,DB,Config;
use App\meetings;
use App\User;
use Mail;
use App\Board;
use App\Position;
use App\nums;

class SandMailsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {

        $ser_user = Board::all();
        $meetings = meetings::all();
        $user = User::all();

foreach ($ser_user as $p)
{
     $data['board_name'] = $p->board_name;
     $data['user_name'] = $p->user_name;
     $data['position'] = $p->position;
}

foreach ($meetings as $p)
{
     $data['series_name'] = $p->series_name;
     $data['set_name'] = $p->set_name;
     $data['group_name'] = $p->group_name;
     $data['date'] = $p->date;
     $data['time'] = $p->time;
     $data['note'] = $p->note;
}


foreach ($user as $p)
{
   $data['name'] = $p->name;
   $emails = $data['email'] = $p->email;
}


        $data['title'] = "เชิญประชุม";

        Mail::send('emails.email', $data, function($message) {

            $message->to('$emails', 'Receiver Name')
                    ->subject('ส่งเมล์');
        });
        return view('Meetings.index');
    }

    /**     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\sand_mails  $sand_mails
     * @return \Illuminate\Http\Response
     */
    public function show(sand_mails $sand_mails)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\sand_mails  $sand_mails
     * @return \Illuminate\Http\Response
     */
    public function edit(sand_mails $sand_mails)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\sand_mails  $sand_mails
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, sand_mails $sand_mails)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\sand_mails  $sand_mails
     * @return \Illuminate\Http\Response
     */
    public function destroy(sand_mails $sand_mails)
    {
        //
    }

}

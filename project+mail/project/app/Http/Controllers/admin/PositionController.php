<?php

namespace App\Http\Controllers\admin;
use App\Position;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;



class PositionController extends Controller
{
    //
    public function index()
    {
        $ser_user = user::all();

        $set = set_meting::all();
        return view('Meetings.index', compact('set','ser_user'));

    }


    public function create()
    {
        //
        //return view('Meetings.store');
    }










}

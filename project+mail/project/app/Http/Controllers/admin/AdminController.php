<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\set_meting;
use App\meetings;
use DB;




class AdminController extends Controller
{
    //
    public function index()
    {


        $set = meetings::all();

        return view('admin/dashboard', compact('set'));

    }









}

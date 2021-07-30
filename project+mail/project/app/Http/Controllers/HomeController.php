<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use app\set_meting;
use App\Series_Meting;
use App\meetings;
use DB;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index()
    {
       // $set = set_meting::all();
        if(auth()->user()->isAdmin()) {
            return view('admin/dashboard');
        } else {

            $set = DB::table('set_metings')
            ->orderBy('series_name', 'desc')
            ->orderBy('id', 'asc')
            ->get();
        $meetings = meetings::all();
           return view('home', compact('set','meetings'));
        }
    }



}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ShowseafoodController extends Controller
{
    //
    public function index()
    {
        //
        return view('user.show_seafood');
    }

}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IntroController extends Controller
{
    //
    public function index()
    {
        return view('user.intro');
    }
}

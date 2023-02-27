<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutContoller extends Controller
{
    //
    public function about(){
        return view('about');
    }
}

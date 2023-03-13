<?php

namespace App\Http\Controllers;
use App\models\About;

use Illuminate\Http\Request;

class AboutController 
{
    //
    public function index(){
        return view('main.About',
    [
        'About' => About::all()
    ]);
    }
}

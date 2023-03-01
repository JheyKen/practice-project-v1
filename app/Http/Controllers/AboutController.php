<?php

namespace App\Http\Controllers;
use App\models\About;

use Illuminate\Http\Request;

class AboutController 
{
    //
    public function index(){
        return view('About',
    [
        'About' => About::all()
    ]);
    }
}

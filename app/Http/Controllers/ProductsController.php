<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\product;

class ProductsController extends Controller
{
    //
    public function index(){
        return view('products',
        [
            'products' => product::all()
        ]
    );
    }
}

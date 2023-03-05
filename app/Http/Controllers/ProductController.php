<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function marbel_edu(){
        return view ('product');
    }

    public function marbel_friend(){
        return view ('product1');
    }

    public function riri_story(){
        return view ('product2');
    }

    public function kolak_songs(){
        return view ('product3');
    }


}

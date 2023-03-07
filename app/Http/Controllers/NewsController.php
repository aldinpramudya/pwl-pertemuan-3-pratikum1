<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function news($id=0){
        return view ('newsparam', ['id' => $id]);
    }

}

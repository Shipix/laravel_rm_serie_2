<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Page4Controller extends Controller
{   
    public function index(){
        $item = [ "gomme","crayon","stylo","cahier" ];
        return view ('page4',compact("item"));
    }
}

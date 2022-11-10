<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ViewDanle extends Controller
{ 
    public function index()
    {
        
        return view('hi',['linh'=>'1']);
    }
  
}

<?php

namespace App\Http\Controllers;

use App\Models\DetailOder;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MathPay extends Controller
{ public function payment($id, Request $request){

    $price=DB::table('product')->select('price')->where('id','=',$id);
    $amount=$request->amount;
    $total=$price * $amount;
    $invoice=  new DetailOder(['qty'=>$amount,'total'=>$total,'price'=>$price]);
    $product =  Product::find($id);
    $product->detail()->saveMany($invoice);

    }
}
<?php

namespace App\Http\Controllers;

use App\Http\Requests\PGrequest;
use App\Http\Requests\ProductRequest;
use App\Models\PG;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class MathPG extends Controller
{
  public function payment($id, PGrequest $request)
  { 
    $price = DB::table('PG')->select('price')->where('id', '=', $id)->first();
    $pri = json_decode(json_encode($price), true);

    $amountskin = $request->amountskinpg;
    $time = $request->time;
    $amountmale = $request->amountmalepg;
    $amountfemale = $request->amountfemalepg;

    $status = DB::table('PG')->select('amount')->where('id', '=', $id)->first();
    $st = json_decode(json_encode($status), true);
    $total = $amountmale * 150000 + $amountfemale * 150000 + $pri['price'] * $amountskin + ($amountmale * 150000 + $amountfemale * 150000 + $pri['price'] * $amountskin) * 0.2;

    $invoice = (['amountmale' => $amountmale, 'timeadress' => $time, 'amountfemale' => $amountfemale, 'qtyskin' => $amountskin, 'total' => $total, 'priceskin' => $pri['price'], 'pg_id' => $id, 'user_id' => Auth::user()->id]);
    $product = PG::find($id);
    $pass = $st['amount'] - $amountskin;
    $product->detail()->create($invoice);

    $product->fill(array('amount' => $pass));
    $product->push();
    if ($pass <= 0) {
      DB::table('pg')->where('id', $id)->delete();
    }
    return redirect()->back();
  }
}
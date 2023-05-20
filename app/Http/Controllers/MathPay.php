<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\DetailOder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\ProductRequest;


class MathPay extends Controller
{
    public function payment($id, ProductRequest $request)
    {

        $price = DB::table('product')->select('price')->where('id', '=', $id)->first();
        $pri = json_decode(json_encode($price), true);

        $amountskin = $request->amountskin;
        $time = $request->timedl;
        $amountmale = $request->amountmale;
        $amountfemale = $request->amountfemale;

        $status = DB::table('product')->select('amount')->where('id', '=', $id)->first();
        $st = json_decode(json_encode($status), true);
        $total = $amountmale * 150000 + $amountfemale * 150000 + $pri['price'] * $amountskin + ($amountmale * 150000 + $amountfemale * 150000 + $pri['price'] * $amountskin) * 0.2;

        $invoice = (['amountmale' => $amountmale, 'timeadress' => $time, 'amountfemale' => $amountfemale, 'qtyskin' => $amountskin, 'total' => $total, 'priceskin' => $pri['price'], 'product_id' => $id, 'user_id' => Auth::user()->id]);
        $product = Product::find($id);
        $pass = $st['amount'] - $amountskin;
        $product->detail()->create($invoice);

        $product->fill(array('amount' => $pass));
        $product->push();
        if ($pass <= 0) {
            DB::table('product')->where('id', $id)->delete();

        }
        return redirect()->back();

    }
}
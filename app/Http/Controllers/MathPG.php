<?php

namespace App\Http\Controllers;

use App\Models\PG;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class MathPG extends Controller
{
    public function payment(Request $request, $id)
    {
        $price = DB::table('PG')->select('price')->where('id', '=', $id)->first();
        $pri = json_decode(json_encode($price), true);

        $amountskin = $request->amountskinpg;

        $amountmale = $request->amountmalepg;
        $amountfemale = $request->amountfemalepg;

        $status = DB::table('PG')->select('amount')->where('id', '=', $id)->first();
        $st = json_decode(json_encode($status), true);
        $tt = ($amountmale * 15000 + $amountfemale * 150000 + $pri['price'] * $amountskin) * 0.2;
        $total = ($amountmale * 15000 + $amountfemale * 150000 + $pri['price'] * $amountskin) + $tt;

        $invoice = (['amountmale' => $amountmale, 'amountfemale' => $amountfemale, 'qtyskin' => $amountskin, 'total' => $total, 'priceskin' => $pri['price'], 'pg_id' => $id, 'user_id' => Auth::user()->id]);
        $product = PG::find($id);
        $pass = $st['amount'] - $amountskin;
        $product->detailpg()->create($invoice);

        $product->fill(array('amount' => $pass));
        $product->push();
    }
}

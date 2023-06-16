<?php

namespace App\Http\Controllers;

use App\Models\PG;
use Exception;
use Illuminate\Http\Request;

class PGController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    public function index(Request $request)
    {
        //
        if ($request->ajax()) {
            $product = PG::all();
            return datatables()->of($product)

                ->addColumn('action', function ($row) {
                    $html = '<button  class="btn btn-xs btn-secondary btn-edit-pg">Edit ';
                    $html .= '<button data-rowid="' . $row->id . '" class="btn btn-xs btn-danger btn-deletepg">Del</button>';
                    return $html;
                })->toJson();
        }
        return view('formadmin');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     */
    public function store(Request $request)
    {   try {
        $data = new PG();
        if (!$request->file('image-pg')) {
            return "Mời chọn file cần upload";
        }
        $file = $request->file('image-pg');
        $filename = date('YmdHi') . $file->getClientOriginalName();
        $file->move(public_path('public/image'), $filename);
        $validate = $request->validate([
            'price' => 'Decimal',
            'amount' => 'Integer',
            'photo'=> 'mimes:jpg,bmp,png',
        ]);
        $data['photo'] = $filename;
        $data['name'] = $request->input('name-pg');
        $data['price'] = $request->input('price-pg');
        $data['amount'] = $request->input('amount-pg');

        $data->save();
        return redirect()->back();
        }
        catch(Exception $e){
            return $e;
        }
    }

    /**
     * Display the specified resource.
     *
     */
    public function show(Request $request)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product = PG::where('id', '=', $id);
        $input = $request->all();

        if ($image = $request->file('img-pg-in')) {
            $destinationPath = 'public/image/';
            $imageprofile = date('YmdHis') . "." . $image->getClientOriginalName();
            $image->move($destinationPath, $imageprofile);
            $input['img-pg-in'] = $imageprofile;
        } else {
            unset($input['img-pg-in']);
        }
        $product->update(['name' => $input['name-pg-in'], 'amount' => $input['amount-pg-in'], 'price' => $input['price-pg-in'], 'photo' => $input['img-pg-in']]);
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     */
    public function destroy($id)
    {
        //
        PG::find($id)->delete();
        return ['success' => true, 'message' => 'Deleted Successfully'];
        //
    }
}
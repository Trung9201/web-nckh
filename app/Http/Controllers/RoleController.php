<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function __construct()
{
   $this->middleware('auth'); 
}


public function store(Request $request)
{
    if ($request->user()->can('create-tasks')) {
        //Code goes here
    }
}

public function destroy(Request $request, $id)
{   
    if ($request->user()->can('delete-tasks')) {
      //Code goes here
    }

}
}

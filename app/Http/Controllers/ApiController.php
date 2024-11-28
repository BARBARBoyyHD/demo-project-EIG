<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function getData(Request $request){
        $data= "hello world";
        return response()->json($data,200);
    }
}

<?php

// routes/api.php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get("/message", function (Request $request) {
    return response()->json(["message" => "hello world"], 200);
});

<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use App\Http\Controllers\ApiController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

// Define the home route to return an Inertia component
Route::get('/', function () {
    return Inertia::render('Home'); // Correctly use Inertia::render
});
Route::get('/data', [ApiController::class, 'getData']);

// Include authentication routes
require __DIR__.'/auth.php';

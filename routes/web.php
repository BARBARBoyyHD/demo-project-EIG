<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectController;
use Illuminate\Foundation\Application;
use App\Http\Controllers\ApiController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

// Define the home route to return an Inertia component
Route::get('/', function () {
    return Inertia::render('Home'); // Correctly use Inertia::render
});
Route::get('/data', [ApiController::class, 'getData']);


Route::get('/proj',[ProjectController::class, 'index'])->name("proj.index");
Route::get('/proj/create',[ProjectController::class, 'create'])->name("proj.create");
Route::get('/proj/{project}/edit',[ProjectController::class, 'edit'])->name("proj.edit");

Route::patch('/proj/{project}',[ProjectController::class, 'update'])->name("proj.update");
Route::delete('/proj/{project}',[ProjectController::class, 'delete'])->name("proj.delete");
Route::post('/proj',[ProjectController::class, 'store'])->name("proj.store");


// Include authentication routes

require __DIR__.'/auth.php';

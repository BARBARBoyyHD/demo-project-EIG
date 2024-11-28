<?php


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// Fetch all projects
Route::get('/projects', [ProjectController::class, 'index'])->name("projects.index");

// Create a new project
Route::post('/projects', [ProjectController::class, 'store'])->name("projects.store");

// Edit (fetch data for a specific project)
Route::get('/projects/{id}', [ProjectController::class, 'show']);


// Update a project
Route::patch('/projects/{id}', [ProjectController::class, 'update'])->name("projects.update");

// Delete a project

Route::delete('/projects/{id}', [ProjectController::class, 'destroy'])->name("projects.destroy");


Route::delete('/projects/{project}', [ProjectController::class, 'destroy'])->name("projects.destroy");




<?php


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


use App\Http\Controllers\ProjectController;

// Fetch all projects
Route::get('/projects', [ProjectController::class, 'index'])->name("projects.index");

// Create a new project
Route::post('/projects', [ProjectController::class, 'store'])->name("projects.store");

// Edit (fetch data for a specific project)
Route::get('/projects/{project}', [ProjectController::class, 'edit'])->name("projects.edit");

// Update a project
Route::patch('/projects/{project}', [ProjectController::class, 'update'])->name("projects.update");

// Delete a project
Route::delete('/projects/{project}', [ProjectController::class, 'destroy'])->name("projects.destroy");



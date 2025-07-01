<?php

use App\Http\Controllers\TareasController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// Route::apiResource('tareas', TareasController::class);

Route::get('/tareas', [TareasController::class, 'index']);
Route::post('/tareas', [TareasController::class, 'store']);
Route::put('/tareas/{id}', [TareasController::class, 'update']);
Route::delete('/tareas/{id}', [TareasController::class, 'destroy']);

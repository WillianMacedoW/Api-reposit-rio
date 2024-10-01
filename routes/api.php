<?php

use App\Http\Controllers\ClienteController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/cliente', action: [ClienteController::class,"listar"]);
Route::post('/cliente', action: [ClienteController::class,"Salvar"]);
Route::put('/cliente/{id}', action: [ClienteController::class,"editar"]);
Route::delete("/cliente/{id}", action: [ClienteController::class,"excluir"]);
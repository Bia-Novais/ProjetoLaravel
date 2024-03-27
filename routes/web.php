<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContatoController;

Route::get("/", [ContatoController::class, "index"]);
Route::post("/adicionar", [ContatoController::class, "adicionar"]);
Route::get("/editar/{id}", [ContatoController::class, "editar"]);
Route::get("/excluir/{id}", [ContatoController::class, "excluir"]);
Route::post("/atualizar/{id}", [ContatoController::class, "atualizar"]);



/*Route::get('/listar', function () {
    return view('listar');
});*/
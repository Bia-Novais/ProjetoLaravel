<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContatoController;

Route::get("/", [ContatoController::class, "index"]);
Route::post("/adicionar", [ContatoController::class, "adicionar"]);

/*Route::get('/listar', function () {
    return view('listar');
});*/
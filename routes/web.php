<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;


Route::get('/usuarios/create', [UsuarioController::class, 'create']);

Route::post('/usuarios', [UsuarioController::class, 'store']);

Route::get('/usuarios', [UsuarioController::class, 'index']);

Route::get('/', function () {
    return view('welcome');
});

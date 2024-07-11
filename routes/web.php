<?php

use App\Http\Controllers\ClienteController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index-cliente',[ClienteController::class, 'index'])->name('cliente.index');
//formulario de criação
Route::get('/create-cliente',[ClienteController::class, 'create'])->name('cliente.create');
//mostrar resultado
Route::get('/show-cliente',[ClienteController::class, 'show'])->name('cliente.show');
//rota para inserir no db
Route::post('/store-cliente',[ClienteController::class, 'store'])->name('cliente.store');




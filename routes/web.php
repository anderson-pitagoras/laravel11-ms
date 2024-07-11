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
//visualizar de acordo com id para  no db
Route::get('/edit-cliente/{cliente}',[ClienteController::class, 'edit'])->name('cliente.edit');
// editar informações no DB
Route::put('/update-cliente/{cliente}',[ClienteController::class, 'update'])->name('cliente.update');
// excluir lientes por id
Route::delete('/delete-cliente/{cliente}',[ClienteController::class, 'delete'])->name('cliente.delete');




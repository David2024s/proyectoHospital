<?php

use App\Http\Controllers\MenuController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/',[HomeController::class, "index"])->name('web.home');



Route::get('/usuarios/crear', [MenuController::class, 'create'])->name('usuarios.create');
Route::post('/usuarios/editar', [MenuController::class, 'date'])->name('usuarios.edit');
Route::patch('/usuarios/estado', [MenuController::class, 'Status'])->name('usuarios.status');
Route::patch('/usuarios/rol', [MenuController::class, 'Role'])->name('usuarios.role');
Route::delete('/usuarios/eliminar', [MenuController::class, 'delete'])->name('usuarios.confirm-delete');

require __DIR__.'/settings.php';

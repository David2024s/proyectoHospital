<?php

use App\Http\Controllers\MenuController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/',[MenuController::class, "index"])->name('web.home');



Route::get('/usuarios/crear', [MenuController::class, 'create'])->name('usuarios.create');
Route::get('/usuarios/editar', [MenuController::class, 'date'])->name('usuarios.edit');
Route::get('/usuarios/estado', [MenuController::class, 'Status'])->name('usuarios.status');
Route::get('/usuarios/rol', [MenuController::class, 'Role'])->name('usuarios.role');
Route::get('/usuarios/eliminar', [MenuController::class, 'delete'])->name('usuarios.confirm-delete');

require __DIR__.'/settings.php';

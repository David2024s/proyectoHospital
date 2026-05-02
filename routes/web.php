<?php

use App\Http\Controllers\Menucontroller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;

Route::get('/', [Menucontroller::class, "index"])->name('web.home');

// Rutas de Usuarios (Compañeros)
Route::get('/usuarios/crear', [Menucontroller::class, 'create'])->name('usuarios.create');
Route::get('/usuarios/editar', [Menucontroller::class, 'edit'])->name('usuarios.edit');
Route::get('/usuarios/estado', [Menucontroller::class, 'status'])->name('usuarios.status');
Route::get('/usuarios/rol', [Menucontroller::class, 'role'])->name('usuarios.role');
Route::get('/usuarios/eliminar', [Menucontroller::class, 'delete'])->name('usuarios.confirm-delete');

require __DIR__ . '/settings.php';

// --- RUTAS DE ROLES ---
Route::get('/roles', [RoleController::class, 'index'])->name('roles.index');
Route::get('/roles/crear', [RoleController::class, 'create'])->name('roles.create');
Route::post('/roles', [RoleController::class, 'store'])->name('roles.store');
Route::get('/roles/{role}/editar', [RoleController::class, 'edit'])->name('roles.edit');
Route::put('/roles/{role}', [RoleController::class, 'update'])->name('roles.update');
Route::delete('/roles/{role}', [RoleController::class, 'destroy'])->name('roles.destroy');
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controladorVistas;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\VuelosController;

// Rutas del controlador de vistas generales
Route::get('/', [controladorVistas::class, 'home'])->name('rutahome');
Route::get('/login', [controladorVistas::class, 'login'])->name('rutalogin');
Route::get('/signup', [controladorVistas::class, 'signup'])->name('rutasignup');
Route::get('/flights', [controladorVistas::class, 'flights'])->name('rutavuelos');
Route::get('/hotels', [controladorVistas::class, 'hotels'])->name('rutahoteles');

Route::get('/flights-management', [controladorVistas::class, 'adminv'])->name('rutaadminv');
Route::get('/hotels-management', [controladorVistas::class, 'adminh'])->name('rutaadminh');

// Rutas del CRUD de usuarios
Route::get('/usuarios', [UsuarioController::class, 'index'])->name('rutaUsuarios');
Route::get('/usuarios/create', [UsuarioController::class, 'create'])->name('rutaCrearUsuario');
Route::post('/usuarios', [UsuarioController::class, 'store'])->name('rutaGuardarUsuario');
Route::delete('/usuarios/{id}', [UsuarioController::class, 'destroy'])->name('rutaEliminarUsuario');

Route::post('/signup', [UsuarioController::class, 'store'])->name('procesarRegistro');


// Rutas para Vuelos
Route::get('/flights-management', [VuelosController::class, 'create'])->name('rutaadminv');
Route::post('/flights-management', [VuelosController::class, 'store'])->name('rutaadminv');

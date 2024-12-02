<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controladorVistas;

// Vistas de usuarios
Route::get('/', [controladorVistas::class, 'home'])->name('rutahome');
Route::get('/login', [controladorVistas::class, 'login'])->name('rutalogin');
Route::get('/signup', [controladorVistas::class, 'signup'])->name('rutasignup');
Route::post('/signup', [controladorVistas::class, 'guardarUsuario'])->name('procesarRegistro');
Route::get('/flights', [controladorVistas::class, 'flights'])->name('rutavuelos');
Route::get('/hotels', [controladorVistas::class, 'hotels'])->name('rutahoteles');

// Vistas de administración
Route::get('/flights-management', [controladorVistas::class, 'adminv'])->name('rutaadminv');
Route::get('/hotels-management', [controladorVistas::class, 'adminh'])->name('rutaadminh');

// Gestión de usuarios (CRUD)
Route::get('/crud-users', [controladorVistas::class, 'mostrarUsuarios'])->name('crudUsers');
Route::delete('/crud-users/{id}', [controladorVistas::class, 'eliminarUsuario'])->name('eliminarUsuario');

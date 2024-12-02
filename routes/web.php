<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controladorVistas;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\HotelManagementController;
use App\Http\Controllers\FlightManagementController;
use App\Http\Controllers\FlightsController;
use App\Http\Controllers\HotelsController;

// Rutas del controlador de vistas generales
Route::get('/', [controladorVistas::class, 'home'])->name('rutahome');
Route::get('/login', [controladorVistas::class, 'login'])->name('rutalogin');
Route::get('/signup', [controladorVistas::class, 'signup'])->name('rutasignup');

// Rutas del CRUD de Usuarios
Route::get('/usuarios', [UsuarioController::class, 'index'])->name('rutaUsuarios');
Route::get('/usuarios/create', [UsuarioController::class, 'create'])->name('rutaCrearUsuario');
Route::post('/usuarios', [UsuarioController::class, 'store'])->name('rutaGuardarUsuario');
Route::delete('/usuarios/{id}', [UsuarioController::class, 'destroy'])->name('rutaEliminarUsuario');
Route::post('/signup', [UsuarioController::class, 'store'])->name('procesarRegistro');

// Rutas de administración de hoteles
Route::get('/hotels-management', [HotelManagementController::class, 'index'])->name('rutaadminh');
Route::get('/hotels-management/create', [HotelManagementController::class, 'create'])->name('rutaCrearHotel');
Route::post('/hotels-management', [HotelManagementController::class, 'store'])->name('rutaGuardarHotel');
Route::get('/hotels-management/{id}/edit', [HotelManagementController::class, 'edit'])->name('rutaEditarHotel');
Route::put('/hotels-management/{id}', [HotelManagementController::class, 'update'])->name('rutaActualizarHotel');
Route::delete('/hotels-management/{id}', [HotelManagementController::class, 'destroy'])->name('rutaEliminarHotel');

// Rutas de administración de vuelos
Route::get('/flights-management', [FlightManagementController::class, 'index'])->name('rutaadminv');
Route::get('/flights-management/create', [FlightManagementController::class, 'create'])->name('rutaCrearVuelo');
Route::post('/flights-management', [FlightManagementController::class, 'store'])->name('rutaGuardarVuelo');
Route::get('/flights-management/{id}/edit', [FlightManagementController::class, 'edit'])->name('rutaEditarVuelo');
Route::put('/flights-management/{id}', [FlightManagementController::class, 'update'])->name('rutaActualizarVuelo');
Route::delete('/flights-management/{id}', [FlightManagementController::class, 'destroy'])->name('rutaEliminarVuelo');

// Tuta de las aerolineas
Route::get('/flights', [FlightsController::class, 'index'])->name('rutaVuelos'); // Ruta necesaria para las aerolíneas

Route::get('/hotels', [HotelsController::class, 'index'])->name('rutaHoteles');


<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controladorUsuarios;
use App\Http\Controllers\controladorAdmins;

route::get('/',[controladorUsuarios::class, 'home'])->name('rutahome');
route::get('/login',[controladorUsuarios::class, 'login'])->name('rutalogin');
route::get('/signup',[controladorUsuarios::class, 'signup'])->name('rutasignup');
route::get('/flights',[controladorUsuarios::class, 'flights'])->name('rutavuelos');

route::get('/vuelos',[controladorUsuarios::class, 'vuelos'])->name('rutavuelo');
route::get('/hospedajes',[controladorUsuarios::class, 'hospedajes'])->name('rutahospedajes');

route::get('/sesion',[controladorUsuarios::class, 'sesion'])->name('rutasesion');
route::get('/registro',[controladorUsuarios::class, 'registro'])->name('rutaregistro');
route::post('/procesarRegistro',[controladorUsuarios::class, 'procesarRegistro'])->name('rutaprocesarregistro');

route::get('/agregarVuelos',[controladorAdmins::class, 'agregarVuelos'])->name('rutaagregarvuelo');
route::post('/procesarVuelo',[controladorAdmins::class, 'procesarVuelo'])->name('rutaprocesarvuelo');
route::get('/agregarHoteles',[controladorAdmins::class, 'agregarHoteles'])->name('rutaagregarhotel');
route::post('/procesarHotel',[controladorAdmins::class, 'procesarHotel'])->name('rutaprocesarhotel');
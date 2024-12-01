<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controladorVistas;


route::get('/',[controladorVistas::class, 'home'])->name('rutahome');
route::get('/login',[controladorVistas::class, 'login'])->name('rutalogin');
route::get('/signup',[controladorVistas::class, 'signup'])->name('rutasignup');
route::get('/flights',[controladorVistas::class, 'flights'])->name('rutavuelos');


///

route::get('/vuelos',[controladorVistas::class, 'vuelos'])->name('rutavuelo');
route::get('/hospedajes',[controladorVistas::class, 'hospedajes'])->name('rutahospedajes');

route::get('/sesion',[controladorVistas::class, 'sesion'])->name('rutasesion');
route::get('/registro',[controladorVistas::class, 'registro'])->name('rutaregistro');
route::post('/procesarRegistro',[controladorVistas::class, 'procesarRegistro'])->name('rutaprocesarregistro');

route::get('/agregarVuelos',[controladorVistas::class, 'agregarVuelos'])->name('rutaagregarvuelo');
route::post('/procesarVuelo',[controladorVistas::class, 'procesarVuelo'])->name('rutaprocesarvuelo');
route::get('/agregarHoteles',[controladorVistas::class, 'agregarHoteles'])->name('rutaagregarhotel');
route::post('/procesarHotel',[controladorVistas::class, 'procesarHotel'])->name('rutaprocesarhotel');
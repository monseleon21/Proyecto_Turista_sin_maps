<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controladorVistas;

//vistas usuarios
route::get('/',[controladorVistas::class, 'home'])->name('rutahome');
route::get('/login',[controladorVistas::class, 'login'])->name('rutalogin');
route::get('/signup',[controladorVistas::class, 'signup'])->name('rutasignup');
route::get('/flights',[controladorVistas::class, 'flights'])->name('rutavuelos');
route::get('/hotels',[controladorVistas::class, 'hotels'])->name('rutahoteles');

//vistas administracion
route::get('/flights-management',[controladorVistas::class, 'adminv'])->name('rutaadminv');
route::get('/hotels-management',[controladorVistas::class, 'adminh'])->name('rutaadminh');
<?php

namespace App\Http\Controllers;

use App\Http\Requests\validadorRegistro;
use App\Http\Requests\validadorVuelo;
use App\Http\Requests\validadorHotel;
use Illuminate\Http\Request;

class controladorVistas extends Controller
{
    
    public function home(){
        return view('home');
    }
    
    public function inicio(){
        return view('inicio');
    }

    public function vuelos(){
        return view('vuelos');
    }

    public function sesion(){
        return view('sesion');
    }

    public function registro(){
        return view('registro');
    }

    public function hospedajes(){
        return view('hospedajes');
    }

    public function agregarVuelos(){
        return view('agregarVuelos');
    }

    public function agregarHoteles(){
        return view('agregarHoteles');
    }

    public function procesarRegistro(validadorRegistro $peticionValidada){
        $name = $peticionValidada->input('name');

        session()->flash('successfully-registered', 'Gracias por tu registro, ' . $name);
        return to_route('rutainicio');
    }
    public function procesarVuelo(validadorVuelo $peticionValidada){
        $flightNumber = $peticionValidada->input('flightNumber');

        session()->flash('successfully-added-flight', 'Vuelo número ' . $flightNumber .' agregado correctamente');
        return to_route('rutaagregarvuelo');
    }
    public function procesarHotel(validadorHotel $peticionValidada){
        $hotelName = $peticionValidada->input('hotelName');

        session()->flash('successfully-added-hotel', 'Hotel '. $hotelName .' agregado correctamente');
        return to_route('rutaagregarhotel');
    }
}

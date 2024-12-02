<?php

namespace App\Http\Controllers;

use App\Http\Requests\validadorVuelo;
use App\Http\Requests\validadorHotel;

use Illuminate\Http\Request;

class controladorAdmins extends Controller
{
    public function agregarVuelos(){
        return view('agregarVuelos');
    }

    public function agregarHoteles(){
        return view('agregarHoteles');
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

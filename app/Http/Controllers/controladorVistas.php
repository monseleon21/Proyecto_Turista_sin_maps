<?php

namespace App\Http\Controllers;

use App\Http\Requests\validadorRegistro;
use App\Http\Requests\validadorVuelo;
use App\Http\Requests\validadorHotel;
use Illuminate\Http\Request;

class controladorVistas extends Controller
{
    
    public function home(){
        return view('users/home');
    }
    
    public function login(){
        return view('users/login');
    }

    public function signup(){
        return view('users/singup');
    }

    public function flights(){
        return view('users/flights');
    }

    public function hotels(){
        return view('users/hotels');
    }

    public function adminv(){
        return view('managements/manage_flights');
    }

    public function adminh(){
        return view('managements/manage_hotels');
    }


    
    public function procesarRegistro(validadorRegistro $peticionValidada){
        $name = $peticionValidada->input('name');

        session()->flash('successfully-registered', 'Gracias por tu registro, ' . $name);
        return to_route('rutalogin');
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

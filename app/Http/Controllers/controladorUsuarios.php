<?php

namespace App\Http\Controllers;

use App\Http\Requests\validadorRegistro;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use App\Http\Requests\validadorSesion;

class controladorUsuarios extends Controller
{
    public function home(){
        return view('home');
    }
    
    public function login(){
        return view('login');
    }

    public function signup(){
        return view('signup');
    }

    public function flights(){
        return view('flights');
    }

    public function vuelos(){
        return view('vuelos');
    }

    public function sesion(){
        return view('sesion');
    }

    public function hospedajes(){
        return view('hospedajes');
    }

    public function procesarRegistro(validadorRegistro $peticionValidada){
        DB::table('usuarios')->insert([
            'nombre' => $peticionValidada->input('name'),
            'apellido' => $peticionValidada->input('lastname'),
            'email' => $peticionValidada->input('email'),
            'password' => bcrypt($peticionValidada->input('password')),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        $name = $peticionValidada->input('nombre');

        session()->flash('successfully-registered', 'Gracias por tu registro, ' . $name);
        return to_route('rutahome');
    }
    public function startSession(validadorSesion $peticionValidada){
        $credentials = $peticionValidada->getCredentials();

        if(!Auth::validate($credentials)):
            return redirect()->back()->withInput($peticionValidada->all())->withErrors(['email' => 'Correo o contraseña incorrectos']);
        endif;

        $user = Auth::getProvider()->retrieveByCredentials($credentials);

        Auth::login($user);

        return $this->authenticated($peticionValidada, $user);
    }
}

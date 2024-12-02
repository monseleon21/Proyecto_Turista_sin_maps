<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controladorVistas extends Controller
{
    public function home()
    {
        return view('users/home');
    }

    public function login()
    {
        return view('users/login');
    }

    public function signup()
    {
        return view('users/singup');
    }

    public function flights()
    {
        return view('users/flights');
    }

    public function hotels()
    {
        return view('users/hotels');
    }

    public function adminv()
    {
        return view('managements/manage_flights');
    }

    public function adminh()
    {
        return view('managements/manage_hotels');
    }
}

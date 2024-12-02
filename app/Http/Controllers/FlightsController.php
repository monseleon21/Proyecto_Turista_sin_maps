<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FlightsController extends Controller
{
    public function index()
    {
        // Obtener los vuelos y sus aerolíneas
        $vuelos = DB::table('vuelos')
            ->join('aerolineas', 'vuelos.aerolinea_id', '=', 'aerolineas.id_aerolinea')
            ->select(
                'vuelos.*',
                'aerolineas.nombre as nombre_aerolinea'
            )
            ->get();

        return view('users.flights', compact('vuelos'));
    }
}

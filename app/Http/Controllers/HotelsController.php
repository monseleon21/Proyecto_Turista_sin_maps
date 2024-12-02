<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HotelsController extends Controller
{
    /**
     * Mostrar todos los hoteles.
     */
    public function index()
    {
        // Obtener los datos de la tabla hoteles
        $hoteles = DB::table('hoteles')->get();

        // Enviar los datos a la vista de hoteles
        return view('users.hotels', compact('hoteles'));
    }
}

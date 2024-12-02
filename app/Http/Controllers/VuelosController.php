<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VuelosController extends Controller
{
    public function create()
    {
        // Obtener aerolíneas para el select
        $aerolineas = DB::table('aerolineas')->get();

        return view('managements.manage_flights', compact('aerolineas'));
    }

    public function store(Request $request)
    {
        // Validación de datos
        $request->validate([
            'numero_vuelo' => 'required|string|max:50',
            'aerolinea_id' => 'required|exists:aerolineas,id_aerolinea',
            'origen' => 'required|string|max:100',
            'destino' => 'required|string|max:100',
            'fecha_salida' => 'required|date',
            'fecha_llegada' => 'required|date|after_or_equal:fecha_salida',
            'horario_salida' => 'required',
            'horario_llegada' => 'required',
            'precio_por_pasajero' => 'required|numeric|min:0',
            'disponibilidad_asientos' => 'required|integer|min:1',
        ]);
    
        // Guardar el vuelo
        DB::table('vuelos')->insert([
            'numero_vuelo' => $request->input('numero_vuelo'),
            'aerolinea_id' => $request->input('aerolinea_id'),
            'origen' => $request->input('origen'),
            'destino' => $request->input('destino'),
            'fecha_salida' => $request->input('fecha_salida'),
            'fecha_llegada' => $request->input('fecha_llegada'),
            'horario_salida' => $request->input('horario_salida'),
            'horario_llegada' => $request->input('horario_llegada'),
            'precio_por_pasajero' => $request->input('precio_por_pasajero'),
            'disponibilidad_asientos' => $request->input('disponibilidad_asientos'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    
        // Guardar el mensaje en la sesión
        return redirect()->route('rutaadminv')->with('success', 'Vuelo registrado exitosamente.');
    }
    
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FlightManagementController extends Controller
{
    /**
     * Listar todos los vuelos.
     */
    public function index()
    {
        // Obtener todos los vuelos junto con las aerolíneas
        $vuelos = DB::table('vuelos')
            ->join('aerolineas', 'vuelos.aerolinea_id', '=', 'aerolineas.id_aerolinea')
            ->select(
                'vuelos.*',
                'aerolineas.nombre as nombre_aerolinea'
            )
            ->get();

        return view('managements.crud-vuelos', compact('vuelos'));
    }

    /**
     * Mostrar formulario para crear un nuevo vuelo.
     */
    public function create()
    {
        // Obtener las aerolíneas para el formulario
        $aerolineas = DB::table('aerolineas')->get();
        return view('managements.formulario-vuelo', compact('aerolineas'));
    }

    /**
     * Guardar un nuevo vuelo en la base de datos.
     */
    public function store(Request $request)
    {
        $request->validate([
            'numero_vuelo' => 'required|string|max:50',
            'aerolinea_id' => 'required|exists:aerolineas,id_aerolinea',
            'origen' => 'required|string|max:100',
            'destino' => 'required|string|max:100',
            'fecha_salida' => 'required|date',
            'fecha_llegada' => 'required|date|after_or_equal:fecha_salida',
            'horario_salida' => 'required',
            'horario_llegada' => 'required',
            'escalas' => 'required|boolean',
            'precio_por_pasajero' => 'required|numeric|min:0',
            'disponibilidad_asientos' => 'required|integer|min:1',
        ]);

        DB::table('vuelos')->insert([
            'numero_vuelo' => $request->input('numero_vuelo'),
            'aerolinea_id' => $request->input('aerolinea_id'),
            'origen' => $request->input('origen'),
            'destino' => $request->input('destino'),
            'fecha_salida' => $request->input('fecha_salida'),
            'fecha_llegada' => $request->input('fecha_llegada'),
            'horario_salida' => $request->input('horario_salida'),
            'horario_llegada' => $request->input('horario_llegada'),
            'escalas' => $request->input('escalas'),
            'precio_por_pasajero' => $request->input('precio_por_pasajero'),
            'disponibilidad_asientos' => $request->input('disponibilidad_asientos'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect()->route('rutaadminv')->with('success', 'Vuelo registrado exitosamente.');
    }

    /**
     * Mostrar el formulario de edición para un vuelo específico.
     */
    public function edit($id)
    {
        $vuelo = DB::table('vuelos')->where('id_vuelo', $id)->first();
        $aerolineas = DB::table('aerolineas')->get();

        if (!$vuelo) {
            return redirect()->route('rutaadminv')->with('error', 'El vuelo no fue encontrado.');
        }

        return view('managements.editar-vuelo', compact('vuelo', 'aerolineas'));
    }

    /**
     * Actualizar los datos de un vuelo.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'numero_vuelo' => 'required|string|max:50',
            'aerolinea_id' => 'required|exists:aerolineas,id_aerolinea',
            'origen' => 'required|string|max:100',
            'destino' => 'required|string|max:100',
            'fecha_salida' => 'required|date',
            'fecha_llegada' => 'required|date|after_or_equal:fecha_salida',
            'horario_salida' => 'required',
            'horario_llegada' => 'required',
            'escalas' => 'required|boolean',
            'precio_por_pasajero' => 'required|numeric|min:0',
            'disponibilidad_asientos' => 'required|integer|min:1',
        ]);

        DB::table('vuelos')->where('id_vuelo', $id)->update([
            'numero_vuelo' => $request->input('numero_vuelo'),
            'aerolinea_id' => $request->input('aerolinea_id'),
            'origen' => $request->input('origen'),
            'destino' => $request->input('destino'),
            'fecha_salida' => $request->input('fecha_salida'),
            'fecha_llegada' => $request->input('fecha_llegada'),
            'horario_salida' => $request->input('horario_salida'),
            'horario_llegada' => $request->input('horario_llegada'),
            'escalas' => $request->input('escalas'),
            'precio_por_pasajero' => $request->input('precio_por_pasajero'),
            'disponibilidad_asientos' => $request->input('disponibilidad_asientos'),
            'updated_at' => now(),
        ]);

        return redirect()->route('rutaadminv')->with('success', 'Vuelo actualizado correctamente.');
    }

    /**
     * Eliminar un vuelo de la base de datos.
     */
    public function destroy($id)
    {
        DB::table('vuelos')->where('id_vuelo', $id)->delete();

        return redirect()->route('rutaadminv')->with('success', 'Vuelo eliminado correctamente.');
    }
}

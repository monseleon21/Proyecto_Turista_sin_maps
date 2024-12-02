<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HotelManagementController extends Controller
{
    /**
     * Listar todos los hoteles.
     */
    public function index()
    {
        $hoteles = DB::table('hoteles')->get();
        return view('managements.crud-hoteles', compact('hoteles'));
    }

    /**
     * Mostrar formulario para crear un nuevo hotel.
     */
    public function create()
    {
        return view('managements.formulario-hotel');
    }

    /**
     * Guardar un nuevo hotel en la base de datos.
     */
    public function store(Request $request)
    {
        $request->validate([
            'ubicacion' => 'required|string|max:255',
            'nombreHotel' => 'required|string|max:255',
            'direccion' => 'required|string|max:255',
            'calificacion' => 'required|string|in:1 estrella,2 estrellas,3 estrellas,4 estrellas,5 estrellas',
            'servicios' => 'required|array',
            'precio' => 'required|numeric|min:0',
            'disponibilidad' => 'required|integer|min:1',
        ]);

        DB::table('hoteles')->insert([
            'ubicacion' => $request->input('ubicacion'),
            'nombreHotel' => $request->input('nombreHotel'),
            'direccion' => $request->input('direccion'),
            'calificacion' => $request->input('calificacion'),
            'servicios' => json_encode($request->input('servicios')),
            'precio' => $request->input('precio'),
            'disponibilidad' => $request->input('disponibilidad'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect()->route('rutaadminh')->with('success', 'Hotel registrado exitosamente.');
    }

    /**
     * Mostrar el formulario de edición para un hotel específico.
     */
    public function edit($id)
    {
        $hotel = DB::table('hoteles')->where('id_hotel', $id)->first();

        if (!$hotel) {
            return redirect()->route('rutaadminh')->with('error', 'El hotel no fue encontrado.');
        }

        return view('managements.editar-hotel', compact('hotel'));
    }

    /**
     * Actualizar los datos de un hotel.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'ubicacion' => 'required|string|max:255',
            'nombreHotel' => 'required|string|max:255',
            'direccion' => 'required|string|max:255',
            'calificacion' => 'required|string|in:1 estrella,2 estrellas,3 estrellas,4 estrellas,5 estrellas',
            'servicios' => 'required|array',
            'precio' => 'required|numeric|min:0',
            'disponibilidad' => 'required|integer|min:1',
        ]);

        DB::table('hoteles')->where('id_hotel', $id)->update([
            'ubicacion' => $request->input('ubicacion'),
            'nombreHotel' => $request->input('nombreHotel'),
            'direccion' => $request->input('direccion'),
            'calificacion' => $request->input('calificacion'),
            'servicios' => json_encode($request->input('servicios')),
            'precio' => $request->input('precio'),
            'disponibilidad' => $request->input('disponibilidad'),
            'updated_at' => now(),
        ]);

        return redirect()->route('rutaadminh')->with('success', 'Hotel actualizado correctamente.');
    }
    
    public function destroy($id)
    {
        DB::table('hoteles')->where('id_hotel', $id)->delete();

        return redirect()->route('rutaadminh')->with('success', 'Hotel eliminado correctamente.');
    }
}

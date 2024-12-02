<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\validadorRegistro;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the users.
     */
    public function index()
    {
        $usuarios = DB::table('usuarios')->get();
        return view('managements.crud-user', compact('usuarios'));
    }

    /**
     * Show the form for creating a new user.
     */
    public function create()
    {
        return view('managements.create-user'); // Crear esta vista para el formulario de creación
    }

    /**
     * Store a newly created user in storage.
     */
    public function store(validadorRegistro $request)
    {
        DB::table('usuarios')->insert([
            'nombre' => $request->input('name'),
            'apellido' => $request->input('lastname'),
            'email' => $request->input('email'),
            'telefono' => $request->input('phone'),
            'contraseña' => bcrypt($request->input('password')),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        session()->flash('success', 'Usuario registrado exitosamente.');
        return redirect()->route('rutalogin');
    }

    /**
     * Remove the specified user from storage.
     */
    public function destroy($id)
    {
        DB::table('usuarios')->where('id_usuario', $id)->delete();
        session()->flash('success', 'Usuario eliminado correctamente.');
        return redirect()->route('rutaUsuarios');
    }
}

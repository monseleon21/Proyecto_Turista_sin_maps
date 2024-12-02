<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\validadorRegistro;

class UsuarioController extends Controller
{
    // Mostrar la lista de usuarios
    public function index()
    {
        $usuarios = DB::table('usuarios')->get();
        return view('managements.crud-user', ['usuarios' => $usuarios]);
    }

    // Mostrar formulario de creación (opcional, ya cubierto con el registro)
    public function create()
    {
        return view('users.signup');
    }

    // Guardar un nuevo usuario
    public function store(validadorRegistro $request)
    {
        DB::table('usuarios')->insert([
            'nombre' => $request->input('name'),
            'apellido' => $request->input('lastname'),
            'email' => $request->input('email'),
            'telefono' => $request->input('phone'),
            'contraseña' => bcrypt($request->input('password')), // Encriptar la contraseña
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        session()->flash('success', 'Usuario registrado exitosamente.');
        return redirect()->route('crudUsers');
    }

    // Eliminar un usuario
    public function destroy($id)
    {
        DB::table('usuarios')->where('id_usuario', $id)->delete();

        session()->flash('success', 'Usuario eliminado correctamente.');
        return redirect()->route('crudUsers');
    }
}

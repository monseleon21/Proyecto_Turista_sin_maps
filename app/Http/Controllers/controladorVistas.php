<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\validadorRegistro;

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

    // Método para guardar un usuario
    public function guardarUsuario(validadorRegistro $request)
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

        session()->flash('success', 'Registro exitoso. Por favor, inicia sesión.');
        return redirect()->route('rutalogin');
    }

    // Método para mostrar los usuarios en el CRUD
    public function mostrarUsuarios()
    {
        $usuarios = DB::table('usuarios')->get();
        return view('managements.crud-user', ['usuarios' => $usuarios]);
    }

    // Método para eliminar un usuario
    public function eliminarUsuario($id)
    {
        DB::table('usuarios')->where('id_usuario', $id)->delete();
        session()->flash('success', 'Usuario eliminado correctamente.');
        return redirect()->route('crudUsers');
    }
}

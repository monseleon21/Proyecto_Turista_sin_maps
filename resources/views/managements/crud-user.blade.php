@extends('layouts.navbar-admin')

@section('titulo', 'CrudUsers')

@section('contenido')

    <div class="container mt-5">
        <h1 class="mb-4">Gestión de Usuarios</h1>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <div class="row">
            @foreach($usuarios as $usuario)
                <div class="col-md-4">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h5 class="card-title">{{ $usuario->nombre }} {{ $usuario->apellido }}</h5>
                            <p class="card-text">
                                <strong>Email:</strong> {{ $usuario->email }} <br>
                                <strong>Teléfono:</strong> {{ $usuario->telefono }}
                            </p>
                            <form action="{{ route('eliminarUsuario', $usuario->id_usuario) }}" method="POST" onsubmit="return confirm('¿Estás seguro de eliminar este usuario?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Eliminar</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>


@endsection

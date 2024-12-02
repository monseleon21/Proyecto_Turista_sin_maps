@extends('layouts.navbar-admin')

@section('titulo', 'Gestión de Vuelos')

@section('contenido')

<div class="container mt-5">
    <h1 class="mb-4">Gestión de Vuelos</h1>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if(session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    <a href="{{ route('rutaCrearVuelo') }}" class="btn btn-primary mb-3">Registrar Nuevo Vuelo</a>

    <div class="table-responsive">
        <table class="table table-bordered table-hover">
            <thead class="table-dark">
                <tr>
                    <th>#</th>
                    <th>Número de Vuelo</th>
                    <th>Aerolínea</th>
                    <th>Origen</th>
                    <th>Destino</th>
                    <th>Fecha de Salida</th>
                    <th>Fecha de Llegada</th>
                    <th>Horario de Salida</th>
                    <th>Horario de Llegada</th>
                    <th>Escalas</th>
                    <th>Precio</th>
                    <th>Disponibilidad</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @forelse($vuelos as $vuelo)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $vuelo->numero_vuelo }}</td>
                        <td>{{ $vuelo->nombre_aerolinea }}</td>
                        <td>{{ $vuelo->origen }}</td>
                        <td>{{ $vuelo->destino }}</td>
                        <td>{{ $vuelo->fecha_salida }}</td>
                        <td>{{ $vuelo->fecha_llegada }}</td>
                        <td>{{ $vuelo->horario_salida }}</td>
                        <td>{{ $vuelo->horario_llegada }}</td>
                        <td>{{ $vuelo->escalas ? 'Sí' : 'No' }}</td>
                        <td>${{ number_format($vuelo->precio_por_pasajero, 2) }} MXN</td>
                        <td>{{ $vuelo->disponibilidad_asientos }} asientos</td>
                        <td>
                            <!-- Botón para editar -->
                            <a href="{{ route('rutaEditarVuelo', $vuelo->id_vuelo) }}" class="btn btn-warning btn-sm">Editar</a>

                            <!-- Formulario para eliminar -->
                            <form action="{{ route('rutaEliminarVuelo', $vuelo->id_vuelo) }}" method="POST" class="d-inline" onsubmit="return confirm('¿Estás seguro de eliminar este vuelo?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="13" class="text-center">No hay vuelos registrados.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>

@endsection

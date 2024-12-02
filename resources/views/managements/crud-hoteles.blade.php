@extends('layouts.navbar-admin')

@section('titulo', 'Gestión de Hoteles')

@section('contenido')

<div class="container mt-5">
    <h1 class="mb-4">Gestión de Hoteles</h1>

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

    <a href="{{ route('rutaCrearHotel') }}" class="btn btn-primary mb-3">Registrar Nuevo Hotel</a>

    <div class="row">
        @foreach($hoteles as $hotel)
            <div class="col-md-4">
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">{{ $hotel->nombreHotel }}</h5>
                        <p class="card-text">
                            <strong>Ubicación:</strong> {{ $hotel->ubicacion }} <br>
                            <strong>Dirección:</strong> {{ $hotel->direccion }} <br>
                            <strong>Calificación:</strong> {{ $hotel->calificacion }} <br>
                            <strong>Servicios:</strong> {{ implode(', ', json_decode($hotel->servicios)) }} <br>
                            <strong>Precio:</strong> ${{ number_format($hotel->precio, 2) }} MXN <br>
                            <strong>Disponibilidad:</strong> {{ $hotel->disponibilidad }} habitaciones
                        </p>

                        <a href="{{ route('rutaEditarHotel', $hotel->id_hotel) }}" class="btn btn-warning">Editar</a>

                        <form action="{{ route('rutaEliminarHotel', $hotel->id_hotel) }}" method="POST" class="d-inline" onsubmit="return confirm('¿Estás seguro de eliminar este hotel?');">
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

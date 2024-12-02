@extends('layouts.navbar-admin')

@section('titulo', 'Editar Hotel')

@section('contenido')

<div class="container mt-5">
    <h1 class="mb-4">Editar Hotel</h1>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('rutaActualizarHotel', $hotel->id_hotel) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="ubicacion" class="form-label">Ubicación</label>
            <input type="text" class="form-control" id="ubicacion" name="ubicacion" value="{{ $hotel->ubicacion }}" required>
        </div>
        <div class="mb-3">
            <label for="nombreHotel" class="form-label">Nombre del Hotel</label>
            <input type="text" class="form-control" id="nombreHotel" name="nombreHotel" value="{{ $hotel->nombreHotel }}" required>
        </div>
        <div class="mb-3">
            <label for="direccion" class="form-label">Dirección</label>
            <input type="text" class="form-control" id="direccion" name="direccion" value="{{ $hotel->direccion }}" required>
        </div>
        <div class="mb-3">
            <label for="calificacion" class="form-label">Calificación</label>
            <select class="form-select" id="calificacion" name="calificacion" required>
                <option value="1 estrella" {{ $hotel->calificacion === '1 estrella' ? 'selected' : '' }}>1 estrella</option>
                <option value="2 estrellas" {{ $hotel->calificacion === '2 estrellas' ? 'selected' : '' }}>2 estrellas</option>
                <option value="3 estrellas" {{ $hotel->calificacion === '3 estrellas' ? 'selected' : '' }}>3 estrellas</option>
                <option value="4 estrellas" {{ $hotel->calificacion === '4 estrellas' ? 'selected' : '' }}>4 estrellas</option>
                <option value="5 estrellas" {{ $hotel->calificacion === '5 estrellas' ? 'selected' : '' }}>5 estrellas</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="servicios" class="form-label">Servicios</label>
            <input type="text" class="form-control" id="servicios" name="servicios[]" value="{{ implode(', ', json_decode($hotel->servicios)) }}" required>
        </div>
        <div class="mb-3">
            <label for="precio" class="form-label">Precio por Noche</label>
            <input type="number" class="form-control" id="precio" name="precio" value="{{ $hotel->precio }}" step="0.01" required>
        </div>
        <div class="mb-3">
            <label for="disponibilidad" class="form-label">Disponibilidad de Habitaciones</label>
            <input type="number" class="form-control" id="disponibilidad" name="disponibilidad" value="{{ $hotel->disponibilidad }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Guardar Cambios</button>
    </form>
</div>

@endsection

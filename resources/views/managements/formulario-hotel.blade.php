@extends('layouts.navbar-admin')

@section('titulo', 'Registrar Hotel')

@section('contenido')

<div class="container mt-5">
    <h1 class="mb-4">Registrar Hotel</h1>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('rutaGuardarHotel') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="ubicacion" class="form-label">Ubicación</label>
            <input type="text" class="form-control" id="ubicacion" name="ubicacion" required>
        </div>
        <div class="mb-3">
            <label for="nombreHotel" class="form-label">Nombre del Hotel</label>
            <input type="text" class="form-control" id="nombreHotel" name="nombreHotel" required>
        </div>
        <div class="mb-3">
            <label for="direccion" class="form-label">Dirección</label>
            <input type="text" class="form-control" id="direccion" name="direccion" required>
        </div>
        <div class="mb-3">
            <label for="calificacion" class="form-label">Calificación</label>
            <select class="form-select" id="calificacion" name="calificacion" required>
                <option value="">Selecciona una calificación</option>
                <option value="1 estrella">1 estrella</option>
                <option value="2 estrellas">2 estrellas</option>
                <option value="3 estrellas">3 estrellas</option>
                <option value="4 estrellas">4 estrellas</option>
                <option value="5 estrellas">5 estrellas</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="servicios" class="form-label">Servicios (separados por comas)</label>
            <input type="text" class="form-control" id="servicios" name="servicios[]" placeholder="Ejemplo: WiFi, Piscina, Gimnasio" required>
        </div>
        <div class="mb-3">
            <label for="precio" class="form-label">Precio por Noche</label>
            <input type="number" class="form-control" id="precio" name="precio" step="0.01" required>
        </div>
        <div class="mb-3">
            <label for="disponibilidad" class="form-label">Disponibilidad de Habitaciones</label>
            <input type="number" class="form-control" id="disponibilidad" name="disponibilidad" required>
        </div>
        <button type="submit" class="btn btn-primary">Registrar Hotel</button>
    </form>
</div>

@endsection

@extends('layouts.navbar-admin')

@section('titulo', 'Hospedajes')

@section('contenido')

<link rel="stylesheet" href="{{ asset('css/hospedajes.css') }}">

<div class="container mt-4">
    <h1 class="text-center mb-4">Registrar Hospedaje</h1>

    <form action="" method="POST">
        @csrf

        <div class="row mb-3">
            <div class="col-md-6">
                <label for="destino" class="form-label">Destino</label>
                <input type="text" class="form-control" id="destino" name="destino" required>
            </div>
            <div class="col-md-6">
                <label for="fechas" class="form-label">Fechas</label>
                <input type="text" class="form-control" id="fechas" placeholder="Llegada - Salida" name="fechas" required>
            </div>
        </div>

        <!-- Habitaciones y Huéspedes -->
        <div class="row mb-3">
            <div class="col-md-6">
                <label for="numero_habitaciones" class="form-label">Habitaciones</label>
                <input type="number" class="form-control" id="numero_habitaciones" name="numero_habitaciones" required>
            </div>
            <div class="col-md-6">
                <label for="numero_huespedes" class="form-label">Huéspedes</label>
                <input type="number" class="form-control" id="numero_huespedes" name="numero_huespedes" required>
            </div>
        </div>

        <!-- Servicios (Checkboxes) -->
        <div class="row mb-3">
            <div class="col-md-12">
                <label class="form-label">Servicios</label>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="wifi" name="servicios[]" value="wifi">
                    <label class="form-check-label" for="wifi">WiFi</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="piscina" name="servicios[]" value="piscina">
                    <label class="form-check-label" for="piscina">Piscina</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gimnasio" name="servicios[]" value="gimnasio">
                    <label class="form-check-label" for="gimnasio">Gimnasio</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="spa" name="servicios[]" value="spa">
                    <label class="form-check-label" for="spa">Spa</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="estacionamiento" name="servicios[]" value="estacionamiento">
                    <label class="form-check-label" for="estacionamiento">Estacionamiento</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="desayuno_incluido" name="servicios[]" value="desayuno_incluido">
                    <label class="form-check-label" for="desayuno_incluido">Desayuno Incluido</label>
                </div>
            </div>
        </div>

        <!-- Precio y Calificación -->
        <div class="row mb-3">
            <div class="col-md-6">
                <label for="precio" class="form-label">Precio por noche (MXN)</label>
                <input type="number" class="form-control" id="precio" name="precio" step="0.01" required>
            </div>
            <div class="col-md-6">
                <label for="calificacion" class="form-label">Calificación</label>
                <select class="form-select" id="calificacion" name="calificacion">
                    <option value="1">1 Estrella</option>
                    <option value="2">2 Estrellas</option>
                    <option value="3">3 Estrellas</option>
                    <option value="4">4 Estrellas</option>
                    <option value="5">5 Estrellas</option>
                </select>
            </div>
        </div>

        <!-- Nombre y Descripción -->
        <div class="row mb-3">
            <div class="col-md-6">
                <label for="nombre_hotel" class="form-label">Nombre del Hotel</label>
                <input type="text" class="form-control" id="nombre_hotel" name="nombre_hotel" required>
            </div>
            <div class="col-md-6">
                <label for="descripcion" class="form-label">Descripción</label>
                <textarea class="form-control" id="descripcion" name="descripcion" rows="4" required></textarea>
            </div>
        </div>

        <div class="text-center">
            <button type="submit" class="btn btn-primary">Guardar Hospedaje</button>
        </div>
    </form>
</div>

@endsection

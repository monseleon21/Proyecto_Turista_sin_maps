@extends('layouts.navbar-admin')

@section('titulo', 'Hospedajes')

@section('contenido')

<link rel="stylesheet" href="{{ asset('css/hospedajes.css') }}">

<div class="container mt-4">
    <h1 class="text-center mb-4">Registrar Hotel</h1>

    <form action="" method="POST">
        @csrf

        <!-- Nombre del Hotel, Ubicación y Dirección -->
        <div class="row mb-3">
            <div class="col-md-6">
                <label for="nombre_hotel" class="form-label">Nombre del Hotel</label>
                <input type="text" class="form-control" id="nombre_hotel" name="nombre_hotel" required>
            </div>
            <div class="col-md-6">
                <label for="ubicacion" class="form-label">Ubicación</label>
                <input type="text" class="form-control" id="ubicacion" name="ubicacion" required>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-12">
                <label for="direccion" class="form-label">Dirección</label>
                <input type="text" class="form-control" id="direccion" name="direccion" required>
            </div>
        </div>

        <!-- Estrellas y Precio por Noche -->
        <div class="row mb-3">
            <div class="col-md-6">
                <label for="estrellas" class="form-label">Estrellas</label>
                <select class="form-select" id="estrellas" name="estrellas" required>
                    <option value="1">1 Estrella</option>
                    <option value="2">2 Estrellas</option>
                    <option value="3">3 Estrellas</option>
                    <option value="4">4 Estrellas</option>
                    <option value="5">5 Estrellas</option>
                </select>
            </div>
            <div class="col-md-6">
                <label for="precio_noche" class="form-label">Precio por Noche (MXN)</label>
                <input type="number" class="form-control" id="precio_noche" name="precio_noche" step="0.01" required>
            </div>
        </div>

        <!-- Número de Habitaciones -->
        <div class="row mb-3">
            <div class="col-md-6">
                <label for="numero_habitaciones" class="form-label">Número de Habitaciones</label>
                <input type="number" class="form-control" id="numero_habitaciones" name="numero_habitaciones" required>
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

        <div class="text-center">
            <button type="submit" class="btn btn-primary">Guardar Hotel</button>
        </div>
    </form>
</div>

@endsection

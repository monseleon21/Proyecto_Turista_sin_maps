@extends('layouts.navbar-admin')

@section('titulo', 'Vuelos')

@section('contenido')

<link rel="stylesheet" href="{{ asset('css/vuelos.css') }}">

<div class="container mt-4">
    <h1 class="text-center mb-4">Gestión de Vuelos</h1>

    <form action="" method="POST">
        @csrf
        
        <div class="row mb-3">
            <div class="col-md-6">
                <label for="numero_vuelo" class="form-label">Número de Vuelo</label>
                <input type="text" class="form-control" id="numero_vuelo" name="numero_vuelo" required>
            </div>
            <div class="col-md-6">
                <label for="aerolinea" class="form-label">Aerolínea</label>
                <input type="text" class="form-control" id="aerolinea" name="aerolinea" required>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-6">
                <label for="origen" class="form-label">Origen</label>
                <input type="text" class="form-control" id="origen" name="origen" required>
            </div>
            <div class="col-md-6">
                <label for="destino" class="form-label">Destino</label>
                <input type="text" class="form-control" id="destino" name="destino" required>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-6">
                <label for="hora_salida" class="form-label">Hora de Salida</label>
                <input type="time" class="form-control" id="hora_salida" name="hora_salida" required>
            </div>
            <div class="col-md-6">
                <label for="hora_llegada" class="form-label">Hora de Llegada</label>
                <input type="time" class="form-control" id="hora_llegada" name="hora_llegada" required>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-6">
                <label for="dia_salida" class="form-label">Día de Salida</label>
                <input type="date" class="form-control" id="dia_salida" name="dia_salida" required>
            </div>
            <div class="col-md-6">
                <label for="dia_llegada" class="form-label">Día de Llegada</label>
                <input type="date" class="form-control" id="dia_llegada" name="dia_llegada" required>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-6">
                <label for="escalas" class="form-label">Escalas</label>
                <select class="form-select" id="escalas" name="escalas" required>
                    <option value="1">Sí</option>
                    <option value="0">No</option>
                </select>
            </div>
            <div class="col-md-6">
                <label for="precio" class="form-label">Precio</label>
                <input type="number" step="0.01" class="form-control" id="precio" name="precio" required>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-6">
                <label for="disponibilidad" class="form-label">Disponibilidad de Asientos</label>
                <input type="number" class="form-control" id="disponibilidad" name="disponibilidad" required>
            </div>
        </div>

        <div class="text-center">
            <button type="submit" class="btn btn-primary">Guardar Vuelo</button>
        </div>
    </form>
</div>

@endsection

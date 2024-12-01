@extends('layouts.navbar-admin')

@section('titulo', 'Vuelos')

@section('contenido')

<link rel="stylesheet" href="{{ asset('css/vuelos.css') }}">

<div class="container mt-4">
    <h1 class="text-center mb-4">Registrar Vuelo</h1>

    <form action="" method="POST">
        @csrf
        
        <!-- Hora de Salida y Llegada -->
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

        <!-- Número de Escalas y Aerolínea -->
        <div class="row mb-3">
            <div class="col-md-6">
                <label for="numero_escalas" class="form-label">Número de Escalas</label>
                <input type="number" class="form-control" id="numero_escalas" name="numero_escalas" required>
            </div>
            <div class="col-md-6">
                <label for="aerolinea" class="form-label">Aerolínea</label>
                <input type="text" class="form-control" id="aerolinea" name="aerolinea" required>
            </div>
        </div>

        <!-- Precio y Número de Asientos -->
        <div class="row mb-3">
            <div class="col-md-6">
                <label for="precio" class="form-label">Precio (MXN)</label>
                <input type="number" class="form-control" id="precio" name="precio" step="0.01" required>
            </div>
            <div class="col-md-6">
                <label for="numero_asientos" class="form-label">Número de Asientos</label>
                <input type="number" class="form-control" id="numero_asientos" name="numero_asientos" required>
            </div>
        </div>

        <!-- Fecha de Salida -->
        <div class="row mb-3">
            <div class="col-md-12">
                <label for="fecha_salida" class="form-label">Fecha de Salida</label>
                <input type="date" class="form-control" id="fecha_salida" name="fecha_salida" required>
            </div>
        </div>

        <div class="text-center">
            <button type="submit" class="btn btn-primary">Guardar Vuelo</button>
        </div>
    </form>
</div>

@endsection

@extends('layouts.navbar-admin')

@section('titulo', 'Vuelos')

@section('contenido')

<link rel="stylesheet" href="{{ asset('css/vuelos.css') }}">

<div class="container mt-4">
    <h1 class="text-center mb-4">Registrar Vuelo</h1>
    
    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <form action="{{ route('rutaadminv') }}" method="POST">
        @csrf
        
        <!-- Número de Vuelo -->
        <div class="row mb-3">
            <div class="col-md-12">
                <label for="numero_vuelo" class="form-label">Número de Vuelo</label>
                <input type="text" class="form-control" id="numero_vuelo" name="numero_vuelo" >
            </div>
        </div>

        <!-- Origen y Destino -->
        <div class="row mb-3">
            <div class="col-md-6">
                <label for="origen" class="form-label">Origen</label>
                <input type="text" class="form-control" id="origen" name="origen" >
            </div>
            <div class="col-md-6">
                <label for="destino" class="form-label">Destino</label>
                <input type="text" class="form-control" id="destino" name="destino" >
            </div>
        </div>

        <!-- Hora de Salida y Llegada -->
        <div class="row mb-3">
            <div class="col-md-6">
                <label for="horario_salida" class="form-label">Hora de Salida</label>
                <input type="time" class="form-control" id="horario_salida" name="horario_salida" >
            </div>
            <div class="col-md-6">
                <label for="horario_llegada" class="form-label">Hora de Llegada</label>
                <input type="time" class="form-control" id="horario_llegada" name="horario_llegada" >
            </div>
        </div>

        <!-- Aerolínea -->
        <div class="row mb-3">
            <div class="col-md-12">
                <label for="aerolinea_id" class="form-label">Aerolínea</label>
                <select class="form-control" id="aerolinea_id" name="aerolinea_id" >
                    <option value="" disabled selected>Selecciona una aerolínea</option>
                    @foreach($aerolineas as $aerolinea)
                        <option value="{{ $aerolinea->id_aerolinea }}">{{ $aerolinea->nombre }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-check mb-3">
                <input class="form-check-input" type="checkbox" id="escalas" name="escalas">
                <label class="form-check-label" for="escalas">Tiene Escalas</label>
            </div>

        </div>

        <!-- Precio y Número de Asientos -->
        <div class="row mb-3">
            <div class="col-md-6">
                <label for="precio_por_pasajero" class="form-label">Precio (MXN)</label>
                <input type="number" class="form-control" id="precio_por_pasajero" name="precio_por_pasajero" step="0.01" >
            </div>
            <div class="col-md-6">
                <label for="disponibilidad_asientos" class="form-label">Número de Asientos</label>
                <input type="number" class="form-control" id="disponibilidad_asientos" name="disponibilidad_asientos" >
            </div>
        </div>

        <!-- Fecha de Salida y Llegada -->
        <div class="row mb-3">
            <div class="col-md-6">
                <label for="fecha_salida" class="form-label">Fecha de Salida</label>
                <input type="date" class="form-control" id="fecha_salida" name="fecha_salida" >
            </div>
            <div class="col-md-6">
                <label for="fecha_llegada" class="form-label">Fecha de Llegada</label>
                <input type="date" class="form-control" id="fecha_llegada" name="fecha_llegada" >
            </div>
        </div>

        <div class="text-center">
            <button type="submit" class="btn btn-primary">Guardar Vuelo</button>
        </div>
    </form>
</div>

@endsection

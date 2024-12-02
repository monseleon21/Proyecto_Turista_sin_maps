@extends('layouts.navbar-admin')

@section('titulo', 'Registrar Vuelo')

@section('contenido')

<div class="container mt-5">
    <h1 class="mb-4">Registrar Vuelo</h1>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('rutaGuardarVuelo') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="numero_vuelo" class="form-label">Número de Vuelo</label>
            <input type="text" class="form-control" id="numero_vuelo" name="numero_vuelo" required>
        </div>

        <div class="mb-3">
            <label for="aerolinea_id" class="form-label">Aerolínea</label>
            <select class="form-select" id="aerolinea_id" name="aerolinea_id" required>
                <option value="">Seleccione una Aerolínea</option>
                @foreach($aerolineas as $aerolinea)
                    <option value="{{ $aerolinea->id_aerolinea }}">{{ $aerolinea->nombre }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="origen" class="form-label">Origen</label>
            <input type="text" class="form-control" id="origen" name="origen" required>
        </div>

        <div class="mb-3">
            <label for="destino" class="form-label">Destino</label>
            <input type="text" class="form-control" id="destino" name="destino" required>
        </div>

        <div class="mb-3">
            <label for="fecha_salida" class="form-label">Fecha de Salida</label>
            <input type="date" class="form-control" id="fecha_salida" name="fecha_salida" required>
        </div>

        <div class="mb-3">
            <label for="fecha_llegada" class="form-label">Fecha de Llegada</label>
            <input type="date" class="form-control" id="fecha_llegada" name="fecha_llegada" required>
        </div>

        <div class="mb-3">
            <label for="horario_salida" class="form-label">Horario de Salida</label>
            <input type="time" class="form-control" id="horario_salida" name="horario_salida" required>
        </div>

        <div class="mb-3">
            <label for="horario_llegada" class="form-label">Horario de Llegada</label>
            <input type="time" class="form-control" id="horario_llegada" name="horario_llegada" required>
        </div>

        <div class="mb-3">
            <label for="escalas" class="form-label">Escalas</label>
            <select class="form-select" id="escalas" name="escalas" required>
                <option value="0">Sin Escalas</option>
                <option value="1">Con Escalas</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="precio_por_pasajero" class="form-label">Precio por Pasajero (MXN)</label>
            <input type="number" class="form-control" id="precio_por_pasajero" name="precio_por_pasajero" step="0.01" required>
        </div>

        <div class="mb-3">
            <label for="disponibilidad_asientos" class="form-label">Disponibilidad de Asientos</label>
            <input type="number" class="form-control" id="disponibilidad_asientos" name="disponibilidad_asientos" required>
        </div>

        <button type="submit" class="btn btn-primary">Registrar Vuelo</button>
    </form>
</div>

@endsection

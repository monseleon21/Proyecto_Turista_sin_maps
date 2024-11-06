@extends('layouts.navbaradmin')

@section('titulo', 'Vuelos')

@section('contenido')

@session('successfully-added-flight')
    <script>
        Swal.fire({
            title: "Respuesta del sistema",
            text: "{{$value}}",
            icon: "success"
        });
    </script>
@endsession

<div class="container mt-5">
    <h1 class="mb-4">Administrar Vuelos</h1>
    <form id="flightForm" class="mb-4" action="{{route('rutaprocesarvuelo')}}" method="POST">
        @csrf
        <input type="hidden" id="editingIndex" value="-1">

        <div class="mb-3">
            <label for="flightNumber" class="form-label">Número de Vuelo:</label>
            <input type="text" class="form-control" name="flightNumber">
            <small class="text-danger">{{$errors->first('flightNumber')}}</small>
        </div>

        <div class="mb-3">
            <label for="origin" class="form-label">Origen:</label>
            <input type="text" class="form-control" name="origin">
            <small class="text-danger">{{$errors->first('origin')}}</small>
        </div>

        <div class="mb-3">
            <label for="destination" class="form-label">Destino:</label>
            <input type="text" class="form-control" name="destination">
            <small class="text-danger">{{$errors->first('destination')}}</small>
        </div>

        <div class="mb-3">
            <label for="departure" class="form-label">Fecha de Salida:</label>
            <input type="date" class="form-control" name="departureDate">
            <small class="text-danger">{{$errors->first('departureDate')}}</small>
        </div>

        <div class="mb-3">
            <label for="departureTime" class="form-label">Hora de Salida:</label>
            <input type="time" class="form-control" name="departureTime">
            <small class="text-danger">{{$errors->first('departureTime')}}</small>
        </div>

        <div class="mb-3">
            <label for="arrival" class="form-label">Fecha de Llegada:</label>
            <input type="date" class="form-control" name="arrivalDate">
            <small class="text-danger">{{$errors->first('arrivalDate')}}</small>
        </div>

        <div class="mb-3">
            <label for="arrivalTime" class="form-label">Hora de Llegada:</label>
            <input type="time" class="form-control" name="arrivalTime">
            <small class="text-danger">{{$errors->first('arrivalTime')}}</small>
        </div>

        <div class="mb-3">
            <label for="class" class="form-label">Clase:</label>
            <select name="class" class="form-select">
                <option value="Económica">Económica</option>
                <option value="Ejecutiva">Ejecutiva</option>
                <option value="Primera Clase">Primera Clase</option>
            </select>
            <small class="text-danger">{{$errors->first('class')}}</small>
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">Precio:</label>
            <input type="number" class="form-control" name="price">
            <small class="text-danger">{{$errors->first('price')}}</small>
        </div>

        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
</div>


@endsection
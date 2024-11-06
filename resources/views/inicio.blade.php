@extends('layouts.navbar')

@section('titulo', 'Vuelos')

@section('contenido')

@session('successfully-registered')
    <script>
        Swal.fire({
            title: "Respuesta del sistema",
            text: "{{$value}}",
            icon: "success"
        });
    </script>
@endsession
<link rel="stylesheet" href="{{ asset('css/style-home.css') }}">

<div id="carouselExampleCaptions" class="carousel slide">
    <div class="container-carrusel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="{{ asset('img/Carru2.jpg') }}" class="d-block w-100" alt="Playa paradisíaca">
            <div class="carousel-caption d-none d-md-block">
                <h5>Encuentra Tu Paraíso</h5>
                <p>Relájate en los destinos de playa más espectaculares.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="{{ asset('img/Carru3.jpg') }}" class="d-block w-100" alt="Horizontes por explorar">
            <div class="carousel-caption d-none d-md-block">
                <h5>Explora Nuevos Horizontes</h5>
                <p>Descubre el mundo con nuestras ofertas de vuelos inigualables.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="{{ asset('img/Carru4.jpg') }}" class="d-block w-100" alt="Hospedaje confortable">
            <div class="carousel-caption d-none d-md-block">
                <h5>Confort y Comodidad</h5>
                <p>Hospedajes pensados para que disfrutes cada momento de tu viaje.</p>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
    </div>
</div>

<div class="selector">
    <div class="title">
        <h1>Nuestros Vuelos</h1>
    </div>

    <div class="container form-container p-4 rounded shadow">
        <form class="d-flex flex-wrap align-items-end">
            <div class="form-group">
                <label for="origin">Origen</label>
                <input type="text" class="form-control" id="origin" placeholder="Ciudad de origen">
            </div>
            <div class="form-group">
                <label for="destination">Destino</label>
                <input type="text" class="form-control" id="destination" placeholder="Ciudad de destino">
            </div>
            <div class="form-group">
                <label for="departure-date">Fecha de salida</label>
                <input type="date" class="form-control" id="departure-date">
            </div>
            <div class="form-group">
                <label for="return-date">Fecha de regreso</label>
                <input type="date" class="form-control" id="return-date">
            </div>
            <div class="form-group">
                <label for="passengers">Pasajeros</label>
                <select id="passengers" class="form-control">
                    <option selected>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                </select>
            </div>
            <div class="form-group">
                <label for="class">Clase</label>
                <select id="class" class="form-control">
                    <option selected>Económica</option>
                    <option>Ejecutiva</option>
                    <option>Primera</option>
                </select>
            </div>
            <div class="form-group btn-search">
                <button type="submit" class="btn btn-primary btn-block">Buscar</button>
            </div>
        </form>
    </div>
</div>

<div class="maletas">
    
    <div class="titulo">
        <h1>Prepara las maletas</h1>
    </div>

    <div class="card-container">
        <a href="" class="card-link">
            <x-card titulo="Cancún" encabezado="" imagen="{{ asset('img/Cancun.jpg') }}">Reserva ahora, paga despues</x-card>
        </a>
        <a href="" class="card-link">
            <x-card titulo="Puerto Vallarta" encabezado="" imagen="{{ asset('img/PuertoV.jpg') }}">Hasta 18 meses sin intereses</x-card>
        </a>
        <a href="" class="card-link">
            <x-card titulo="Jalisco" encabezado="" imagen="{{ asset('img/Jalisco.jpg') }}">Reserva ahora, paga despues</x-card>
        </a>
    </div>
</div>

@endsection
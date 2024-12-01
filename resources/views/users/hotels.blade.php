@extends('layouts.navbar')

@section('titulo', 'Hoteles')

@section('contenido')

<link rel="stylesheet" href="{{ asset('css/hotels.css') }}">

<div class="hoteles-container">
    <div class="filtros-panel">
        <div class="filtros-contenidos">
            <div class="filtro-seccion"> 
                <h1><b>Precios</b></h1> 
                <label class="precio-inputs">
                    <input class="input-precio" type="text" name="precio_min" placeholder="Desde $MXN" style="font-size: 16px;">
                    <input class="input-precio" type="text" name="precio_max" placeholder="Hasta $MXN" style="font-size: 16px;">
                </label>
                <button class="btn-aplicar" type="submit">Aplicar filtros</button>
            </div>
            <div class="filtro-seccion">
                <h1><b>Calificación</b></h1>
                <ul>
                    <li>
                        <label>
                            <input type="checkbox" name="calificacion[]" value="1"> 1 estrella
                        </label>
                    </li>
                    <li>
                        <label>
                            <input type="checkbox" name="calificacion[]" value="2"> 2 estrellas
                        </label>
                    </li>
                    <li>
                        <label>
                            <input type="checkbox" name="calificacion[]" value="3"> 3 estrellas
                        </label>
                    </li>
                    <li>
                        <label>
                            <input type="checkbox" name="calificacion[]" value="4"> 4 estrellas
                        </label>
                    </li>
                    <li>
                        <label>
                            <input type="checkbox" name="calificacion[]" value="5"> 5 estrellas
                        </label>
                    </li>
                </ul>
            </div>
            <div class="filtro-seccion">
                <h1><b>Servicios</b></h1>
                <ul>
                    <li>
                        <label>
                            <input type="checkbox" name="servicios[]" value="wifi"> Wifi incluido
                        </label>
                    </li>
                    <li>
                        <label>
                            <input type="checkbox" name="servicios[]" value="desayuno"> Desayuno y cena
                        </label>
                    </li>
                    <li>
                        <label>
                            <input type="checkbox" name="servicios[]" value="gimnasio"> Gimnasio
                        </label>
                    </li>
                    <li>
                        <label>
                            <input type="checkbox" name="servicios[]" value="alberca"> Alberca
                        </label>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="resultados-panel">
        <div class="resultados-contenidos">
            <form action="#">
                <div class="busqueda-panel">
                    <div class="campos-busqueda">
                        <input class="input-destino" type="text" name="destino" placeholder="Destino" style="font-size: 16px;">
                        <input class="input-fechas" type="text" name="fechas" placeholder="Fechas" style="font-size: 16px;">
                        <input class="input-huespedes" type="text" name="huespedes" placeholder="Número de huéspedes" style="font-size: 16px;">
                    </div>
                    <button class="btn-buscar" type="submit">
                        <i class="bi bi-search" style="font-size: 24px; color: white;"></i>
                    </button>
                </div>
            </form>
            <div class="tarjeta-hotel">
                <div class="img-hotel">
                    <img src="{{ asset('img/japan.png') }}" alt="">
                </div>
                <div class="info-hotel">
                    <div class="info-ubicacion">
                        <span>Ubicación</span>
                        <span style="font-size: 20px; font-weight: bold;">Nombre del hotel</span>
                        <span style="margin-top: 20px;">Dirección del hotel</span>    
                        <span style="margin-top: 20px;">Calificación del hotel</span>            
                    </div>
                </div>
                <div class="precio-hotel">
                    <div class="top" style="display:flex; flex-direction:column; margin-bottom:15px;">
                        <span style="font-size: 20px; font-weight: bold;">MXN PRECIO</span>
                        <span style="font-size:16px;">Últimos lugares</span>
                    </div>
                    <div class="btn-reservar">
                        <a href="#" style="text-decoration: none;">
                            <b style="font-size:16px;">Reservar</b>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

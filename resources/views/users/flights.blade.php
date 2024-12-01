@extends('layouts.navbar')

@section('titulo', 'Vuelos')

@section('contenido')

<link rel="stylesheet" href="{{ asset('css/vuelos.css') }}">

<div class="vuelos-cantainer">
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
                <h1><b>Escalas</b></h1>
                <ul>
                    <li>
                        <label>
                            <input type="checkbox" name="escalas[]" value="directo"> Directo
                        </label>
                    </li>
                    <li>
                        <label>
                            <input type="checkbox" name="escalas[]" value="con_escalas"> Escalas
                        </label>
                    </li>
                </ul>
            </div>
            <div class="filtro-seccion">
                <h1><b>Aerolíneas</b></h1>
                <ul>
                    <li>
                        <label>
                            <input type="checkbox" name="aerolineas[]" value="aerolinea_1"> Aerolínea 1
                        </label>
                    </li>
                    <li>
                        <label>
                            <input type="checkbox" name="aerolineas[]" value="aerolinea_2"> Aerolínea 2
                        </label>
                    </li>
                    <li>
                        <label>
                            <input type="checkbox" name="aerolineas[]" value="aerolinea_3"> Aerolínea 3
                        </label>
                    </li>
                </ul>
            </div>
            <div class="filtro-seccion">
                <h1><b>Horarios de salida</b></h1>
                <ul>
                    <li>
                        <label>
                            <input type="checkbox" name="horarios[]" value="mañana"> Mañana
                        </label>
                    </li>
                    <li>
                        <label>
                            <input type="checkbox" name="horarios[]" value="tarde"> Tarde
                        </label>
                    </li>
                    <li>
                        <label>
                            <input type="checkbox" name="horarios[]" value="noche"> Noche
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
                        <input class="input-pasajeros" type="text" name="pasajeros" placeholder="N° Pasajeros" style="font-size: 16px;">
                    </div>
                    <button class="btn-buscar" type="submit">
                        <i class="bi bi-search" style="font-size: 24px; color: white;"></i>
                    </button>
                </div>
            </form>
            <div class="tarjeta-vuelo">
                <div class="img-vuelo">
                    <img src="{{ asset('img/japan.png') }}" alt="">
                </div>
                <div class="info-vuelo">
                    <div class="info-origen">
                        <span style="font-size: 20px; font-weight: bold;">00:00 AM</span>
                        <span>Origen</span>
                    </div>
                    <div class="info-duracion">
                        <i class="bi bi-airplane" style="transform: rotate(90deg);"></i>
                        <span>Duracion del vuelo</span>
                    </div>
                    <div class="info-destino">
                        <span style="font-size: 20px; font-weight: bold;">00:00 PM</span>
                        <span>Destino</span>                        
                    </div>
                    <div class="info-escalas">
                        <span>Escalas</span>     
                        <span>X</span>                  
                    </div>
                </div>
                <div class="precio-vuelo">
                    <div class="top" style="display:flex; flex-direction:column;">
                        <span style="font-size: 20px; font-weight: bold;">MXN PRECIO</span>
                        <span style="font-size:16px;">Últimos</span>
                    </div>
                    <div class="btn-seguir">
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
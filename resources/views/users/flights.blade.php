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
            <x-flight-card 
                imagen="{{ asset('img/Volaris.png') }}" 
                horaOrigen="10:00 AM" 
                origen="Ciudad de México" 
                duracion="" 
                horaDestino="11:45 AM" 
                destino="Tokio" 
                escalas="1 Escala" 
                precio="12,000 MXN" 
                ultimos="5 boletos disponibles" 
                rutaReserva="{{ route('rutalogin') }}" 
                aerolinea="Volaris"
            />

            <script>
                document.addEventListener('DOMContentLoaded', function () {
                    const vuelos = document.querySelectorAll('.tarjeta-vuelo');

                    vuelos.forEach(function (vuelo) {
                        const horaOrigen = vuelo.querySelector('.info-origen span:nth-child(1)').innerText;
                        const horaDestino = vuelo.querySelector('.info-destino span:nth-child(1)').innerText;

                        const origen = convertirAHora(horaOrigen);
                        const destino = convertirAHora(horaDestino);

                        const duracion = calcularDuracion(origen, destino);

                        vuelo.querySelector('.info-duracion span').innerText = duracion;
                    });

                    function convertirAHora(horaTexto) {
                        const hora = new Date('1970-01-01 ' + horaTexto);
                        return hora;
                    }

                    function calcularDuracion(inicio, fin) {
                        const diferencia = fin - inicio;
                        const horas = Math.floor(diferencia / (1000 * 60 * 60));
                        const minutos = Math.floor((diferencia % (1000 * 60 * 60)) / (1000 * 60));

                        return `${horas}h ${minutos}m`;
                    }
                });
            </script>
        </div>
    </div>
</div>

@endsection
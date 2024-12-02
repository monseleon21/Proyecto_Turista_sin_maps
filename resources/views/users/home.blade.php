@extends('layouts.navbar')

@section('titulo', 'Home')

@section('contenido')

<link rel="stylesheet" href="{{ asset('css/home.css') }}">
<link rel="stylesheet" href="{{ asset('css/style-home.css') }}">

<div class="search-container" style="background-image: url('{{ asset('img/japan.png') }}');">

        <div class="options">
            <button id="option-vuelos" class="option-btn">Vuelos</button>
            <button id="option-hospedajes" class="option-btn">Hospedajes</button>
            <button id="option-paquetes" class="option-btn">Paquetes</button>
        </div>
        
        <form action="{{ route('rutavuelos') }}" method="GET">
            <div class="btn-container" id="vuelos">
                <div class="btn-l">
                    <div class="btn-top">
                        <label class="input-btn">
                            <input type="text" id="origin" style="font-size: 16px; border-radius: 8px 0 0 8px; width: 400px;" placeholder="Origen">
                            <input type="text" id="destination" style="font-size: 16px; border-radius: 0 8px 8px 0; width: 400px;" placeholder="Destino">
                        </label>
                    </div>
                    <div class="btn-btm">
                        <label class="input-btn">
                            <input type="text" id="departure-date" style="font-size: 16px; border-radius: 8px 0 0 8px; width: 250px;" placeholder="Fecha salida">
                            <input type="text" id="return-date" style="font-size: 16px; border-radius: 0 8px 8px 0; width: 250px;" placeholder="Fecha regreso">
                        </label>
                        
                        <label class="input-btn">
                            <input type="text" id="passengers" style="font-size: 16px; width: 275px;" placeholder="N° Pasajeros">
                        </label>
                    </div>
                </div>
                <div class="btn-r">
                    <button type="submit" class="create-btn">Buscar</button>
                </div>
            </div>
        </form>

        <form action="{{ route('rutahoteles') }}" method="GET">
            <div class="btn-container" id="hospedajes">
                <div class="btn-l">
                    <div class="btn-top">
                        <label class="input-btn">
                            <input type="text" id="destination" style="font-size: 16px; border-radius: 8px; width: 800px;" placeholder="Destino">
                        </label>
                    </div>
                    <div class="btn-btm">
                        <label class="input-btn">
                            <input type="text" name="departure_date" style="font-size: 16px; border-radius: 8px 0 0 8px; width: 207.5px;" placeholder="Fecha salida">
                            <input type="text" name="return_date" style="font-size: 16px; border-radius: 0 8px 8px 0; width: 207.5px;" placeholder="Fecha regreso">
                        </label>
                        
                        <label class="input-btn">
                            <input type="text" name="guests" style="font-size: 16px; border-radius: 8px 0 0 8px; width: 180px;" placeholder="N° Huespedes">
                            <input type="text" name="rooms" style="font-size: 16px; border-radius: 0 8px 8px 0; width: 180px;" placeholder="N° Habitaciones">
                        </label>
                    </div>
                </div>
                
                <div class="btn-r">
                    <button type="submit" class="create-btn">Buscar</button>
                </div>
            </div>
        </form>


        <div class="btn-container" id="paquetes">
            <div class="btn-l">
                <div class="btn-top">
                    <label class="input-btn">
                        <input type="text" style="font-size: 16px; border-radius: 8px 0 0 8px; width: 400px;" placeholder="Origen">
                        <input type="text" id="destination" style="font-size: 16px; border-radius: 0 8px 8px 0; width: 400px;" placeholder="Destino">
                    </label>

                </div>
                <div class="btn-btm">
                    <label class="input-btn">
                        <input type="text" style="font-size: 16px; border-radius: 8px 0 0 8px; width: 250px;" placeholder="Fecha salida">
                        <input type="text" style="font-size: 16px; border-radius: 0 8px 8px 0; width: 250px;" placeholder="Fecha regreso">
                    </label>
                    <label class="input-btn">
                        <input type="text" style="font-size: 16px; width: 275px;" placeholder="Fecha salida">
                    </label>
                </div>
            </div>
            <div class="btn-r">
                <button type="submit" class="create-btn ">Buscar</button>
            </div>
        </div>
    </div>
    
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if(session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const sections = {
                'option-vuelos': 'vuelos',
                'option-hospedajes': 'hospedajes',
                'option-paquetes': 'paquetes'
            };

            // Mostrar inicialmente la sección de "Vuelos"
            showSection('vuelos');

            Object.keys(sections).forEach(optionId => {
                document.getElementById(optionId).addEventListener('click', () => {
                    // Mostrar la sección correspondiente
                    showSection(sections[optionId]);
                });
            });

            function showSection(sectionId) {
                Object.values(sections).forEach(id => {
                    const element = document.getElementById(id);
                    if (id === sectionId) {
                        element.style.visibility = 'visible';
                        element.style.opacity = '1';
                        element.style.height = 'auto';
                    } else {
                        element.style.visibility = 'hidden';
                        element.style.opacity = '0';
                        element.style.height = '0';
                    }
                });
            }
        });
    </script>

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
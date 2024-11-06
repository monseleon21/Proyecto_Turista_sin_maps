@extends('layouts.navbar')

@section('titulo', 'Vuelos')

@section('contenido')

<link rel="stylesheet" href="{{ asset('css/style-home.css') }}">

<div class="selector">
    <div class="title">
        <h1>Nuestros Vuelos</h1>
    </div>

    <div class="container form-container p-4 rounded shadow">
        <form class="d-flex flex-wrap align-items-end justify-content-center">
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
                <button type="submit" class="btn btn-dark btn-block">Buscar</button>
            </div>
        </form>
    </div>
</div>

<div class="aereolineas">
    <div class="titulo">
        <h1>Busca Tu Aerolinea Favorita</h1>
    </div>
    <div id="carouselExample" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="card-container d-flex">
                    <a href="" class="card-link">
                        <x-cardlineas imagen="{{ asset('img/aeromexico.png') }}"></x-cardlineas>
                    </a>
                    <a href="" class="card-link">
                        <x-cardlineas imagen="{{ asset('img/Volaris.png') }}"></x-cardlineas>
                    </a>
                    <a href="" class="card-link">
                        <x-cardlineas imagen="{{ asset('img/inter.jpg') }}"></x-cardlineas>
                    </a>
                    <a href="" class="card-link">
                        <x-cardlineas imagen="{{ asset('img/viva.jpg') }}"></x-cardlineas>
                    </a>
                    <a href="" class="card-link">
                        <x-cardlineas imagen="{{ asset('img/jet.jpg') }}"></x-cardlineas>
                    </a>
                </div>
            </div>
            <div class="carousel-item">
                <div class="card-container d-flex">
                    <a href="" class="card-link">
                        <x-cardlineas imagen="{{ asset('img/Example.jpg') }}"></x-cardlineas>
                    </a>
                    <a href="" class="card-link">
                        <x-cardlineas imagen="{{ asset('img/Example.jpg') }}"></x-cardlineas>
                    </a>
                    <a href="" class="card-link">
                        <x-cardlineas imagen="{{ asset('img/Example.jpg') }}"></x-cardlineas>
                    </a>
                    <a href="" class="card-link">
                        <x-cardlineas imagen="{{ asset('img/Example.jpg') }}"></x-cardlineas>
                    </a>
                    <a href="" class="card-link">
                        <x-cardlineas imagen="{{ asset('img/Example.jpg') }}"></x-cardlineas>
                    </a>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExample" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExample" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>

<div class="horizontes">
    <h1>Vuelos Nacionales</h1>
    <div class="container d-flex justify-content-center align-items-center">
        <div class="d-flex flex-wrap justify-content-center"> 
            <a href="#">
            <div class="cardhost-container me-3 mb-4"> 
                <x-cardhospedajes
                    titulo="Vuelo Cancún - Ciudad de México" 
                    imagen="{{ asset('img/vuelo_cdmx.jpg') }}" 
                    precio="$1,500 por persona">
                    <x-slot name="slot1">
                        Salida desde el Aeropuerto Internacional de Cancún.
                    </x-slot>
                    <x-slot name="slot2">
                        Incluye equipaje de mano y selección de asientos.
                    </x-slot>
                </x-cardhospedajes>
            </div>
            </a>
            <a href="#">
            <div class="cardhost-container me-3 mb-4">
                <x-cardhospedajes
                    titulo="Vuelo Guadalajara - Monterrey" 
                    imagen="{{ asset('img/vuelo_mty.jpg') }}" 
                    precio="$1,200 por persona">
                    <x-slot name="slot1">
                        Conexiones rápidas y cómodas entre ambas ciudades.
                    </x-slot>
                    <x-slot name="slot2">
                        Servicio de bebidas a bordo incluido.
                    </x-slot>
                </x-cardhospedajes>
            </div>   
            </a>         
            <a href="#">
            <div class="cardhost-container me-3 mb-4">
                <x-cardhospedajes
                    titulo="Vuelo Ciudad de México - Tijuana" 
                    imagen="{{ asset('img/vuelo_tij.jpg') }}" 
                    precio="$1,800 por persona">
                    <x-slot name="slot1">
                        Oportunidades de viaje para negocios o placer.
                    </x-slot>
                    <x-slot name="slot2">
                        Incluye un artículo de equipaje adicional.
                    </x-slot>
                </x-cardhospedajes>
            </div>
            </a>
        </div>
    </div>
</div>

<div class="horizontes">
    <h1>Vuelos Internacionales</h1>
    <div class="container d-flex justify-content-center align-items-center">
        <div class="d-flex flex-wrap justify-content-center"> 
            <a href="#">
            <div class="cardhost-container me-3 mb-4"> 
                <x-cardhospedajes
                    titulo="Vuelo Cancún - Nueva York" 
                    imagen="{{ asset('img/new.jpeg') }}" 
                    precio="$5,000 por persona">
                    <x-slot name="slot1">
                        Salida desde el Aeropuerto Internacional de Cancún.
                    </x-slot>
                    <x-slot name="slot2">
                        Incluye equipaje de mano y selección de asientos.
                    </x-slot>
                </x-cardhospedajes>
            </div>
            </a>
            <a href="#">
            <div class="cardhost-container me-3 mb-4"> 
                <x-cardhospedajes
                    titulo="Vuelo Ciudad de México - Tokio" 
                    imagen="{{ asset('img/jap.jpg') }}" 
                    precio="$14,000 por persona">
                    <x-slot name="slot1">
                        Salida desde el Aeropuerto Internacional de la Ciudad de México.
                    </x-slot>
                    <x-slot name="slot2">
                        Incluye dos maletas facturadas y entretenimiento a bordo.
                    </x-slot>
                </x-cardhospedajes>
            </div>
            </a>
            <a href="#">
            <div class="cardhost-container me-3 mb-4">
                <x-cardhospedajes
                    titulo="Vuelo Guadalajara - Toronto" 
                    imagen="{{ asset('img/toro.jpg') }}" 
                    precio="$6,500 por persona">
                    <x-slot name="slot1">
                        Ideal para turismo o viajes de negocios.
                    </x-slot>
                    <x-slot name="slot2">
                        Incluye equipaje facturado y acceso a sala VIP.
                    </x-slot>
                </x-cardhospedajes>
            </div>
            </a>
        </div>
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

<div class="container" style="padding: 3rem;">
    <div class="row g-10">
        <div class="col-md-6">
            <h1 style="text-align: justify;">Reservar un Vuelo</h1>
            <p style="text-align: justify;">
                Planificar un viaje es una experiencia emocionante, pero uno de los pasos más cruciales es <strong>reservar el vuelo adecuado</strong>. La elección de tu vuelo puede influir en tu itinerario, presupuesto y comodidad. Aquí te proporcionamos una guía completa para que tu reserva de vuelo sea lo más sencilla y efectiva posible.
            </p>
            <h2 style="text-align: justify;">Consejos para Reservar</h2>
            <p style="text-align: justify;">
                Antes de hacer la reserva de tu vuelo, es importante tener en cuenta varios factores. Aquí hay algunos consejos útiles:
            </p>
            <ul style="text-align: justify;">
                <li><strong>Investiga tus opciones:</strong> Compara precios y horarios de diferentes aerolíneas. Utiliza sitios web de comparación de vuelos para encontrar las mejores ofertas.</li>
                <li><strong>Flexibilidad en las fechas:</strong> Si tienes flexibilidad en tus fechas de viaje, puedes ahorrar considerablemente. Los vuelos suelen ser más baratos entre semana.</li>
                <li><strong>Consulta las políticas de equipaje:</strong> Asegúrate de conocer las políticas de equipaje de la aerolínea, ya que pueden variar y afectar el costo total del viaje.</li>
                <li><strong>Suscríbete a alertas de precios:</strong> Muchos sitios de reservas ofrecen alertas que te informan cuando los precios de los vuelos bajan.</li>
                <li><strong>Revisa las opiniones de la aerolínea:</strong> Las experiencias de otros viajeros pueden ofrecerte información valiosa sobre la calidad del servicio y la puntualidad de la aerolínea.</li>
            </ul>
            <h2 style="text-align: justify;">¿Cómo Hacer la Reserva?</h2>
            <p style="text-align: justify;">
                Reservar un vuelo es un proceso relativamente sencillo si sigues algunos pasos clave. Aquí te explicamos cómo hacerlo:
            </p>
            <ol style="text-align: justify;">
                <li><strong>Selecciona tu destino y fechas:</strong> Decide a dónde quieres volar y cuándo. Considera las temporadas altas y bajas para evitar precios elevados.</li>
                <li><strong>Busca vuelos:</strong> Utiliza un motor de búsqueda de vuelos para encontrar las mejores opciones. Filtra los resultados según tus preferencias de horario, precio y duración.</li>
                <li><strong>Elige tu vuelo:</strong> Revisa las opciones disponibles y selecciona el vuelo que mejor se ajuste a tus necesidades. Ten en cuenta escalas, duración del vuelo y horarios.</li>
                <li><strong>Completa la reserva:</strong> Proporciona la información solicitada, incluyendo los datos de los pasajeros y la forma de pago. Asegúrate de revisar los detalles antes de confirmar la reserva.</li>
                <li><strong>Confirma tu vuelo:</strong> Después de hacer la reserva, recibirás un correo electrónico de confirmación. Verifica que toda la información sea correcta.</li>
            </ol>
        </div>
        <div class="col-md-6">
            <h2 style="text-align: justify;">Antes de tu Vuelo</h2>
            <p style="text-align: justify;">
                Una vez que hayas reservado tu vuelo, hay algunas cosas que debes considerar antes de volar:
            </p>
            <ul style="text-align: justify;">
                <li><strong>Realiza el check-in en línea:</strong> La mayoría de las aerolíneas ofrecen la opción de hacer check-in en línea 24 horas antes de tu vuelo, lo que te ahorrará tiempo en el aeropuerto.</li>
                <li><strong>Verifica los requisitos de viaje:</strong> Asegúrate de conocer los requisitos de documentación, como pasaporte y visas, según tu destino.</li>
                <li><strong>Planifica tu transporte al aeropuerto:</strong> Asegúrate de tener un plan para llegar al aeropuerto a tiempo, considerando el tráfico y posibles retrasos.</li>
            </ul>
            <h2 style="text-align: justify;">Durante el Vuelo</h2>
            <p style="text-align: justify;">
                Una vez en el aire, aquí hay algunos consejos para disfrutar de tu experiencia de vuelo:
            </p>
            <ul style="text-align: justify;">
                <li><strong>Escoge tu asiento:</strong> Si es posible, elige un asiento que te brinde la comodidad que necesitas, ya sea en el pasillo o junto a la ventana.</li>
                <li><strong>Hidrátate:</strong> Bebe suficiente agua durante el vuelo para mantenerte hidratado, especialmente en vuelos largos.</li>
                <li><strong>Disfruta del entretenimiento:</strong> Aprovecha las opciones de entretenimiento a bordo, como películas, música o juegos, para hacer el tiempo más ameno.</li>
            </ul>
            <p style="text-align: justify;">
                Siguiendo estos pasos y consejos, podrás disfrutar de una experiencia de reserva de vuelo sin complicaciones, lo que te permitirá centrarte en lo más importante: ¡disfrutar de tu viaje!
            </p>
        </div>
    </div>
</div>


@endsection
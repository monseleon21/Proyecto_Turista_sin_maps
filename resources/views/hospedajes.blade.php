
@extends('layouts.navbar')

@section('titulo', 'Hospedaje')

@section('contenido')

<link rel="stylesheet" href="{{ asset('css/style-home.css') }}">

<div class="selector">
    <div class="title">
        <h1>Nuestros Hospedajes</h1>
    </div>

    <div class="container form-container p-4 rounded shadow">
        <form class="d-flex flex-wrap align-items-end justify-content-center">
            <div class="form-group">
                <label for="location">Lugar</label>
                <input type="text" class="form-control" id="location" placeholder="Ciudad o destino">
            </div>
            <div class="form-group">
                <label for="checkin-date">Fecha de llegada</label>
                <input type="date" class="form-control" id="checkin-date">
            </div>
            <div class="form-group">
                <label for="checkout-date">Fecha de partida</label>
                <input type="date" class="form-control" id="checkout-date">
            </div>
            <div class="form-group">
                <label for="guests">Huéspedes</label>
                <select id="guests" class="form-control">
                    <option selected>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    <option>6</option>
                </select>
            </div>
            <div class="form-group">
                <label for="rooms">Habitaciones</label>
                <select id="rooms" class="form-control">
                    <option selected>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                </select>
            </div>
            <div class="form-group btn-search">
                <button type="submit" class="btn btn-dark btn-block">Buscar</button>
            </div>
        </form>
    </div>
</div>


<div class="horizontes">
    <h1>Llega a Nuevos Horizontes</h1>
    <div class="container d-flex justify-content-center align-items-center">
        <div class="d-flex flex-wrap justify-content-center"> 
            <a href="#">
                <div class="cardhost-container me-3 mb-4"> 
                    <x-cardhospedajes
                        titulo="Hotel Playa Dorada" 
                        imagen="{{ asset('img/Cancun.jpg') }}" 
                        precio="$1,800 por noche">
                        <x-slot name="slot1">
                            Disfruta de una vista espectacular al mar.
                        </x-slot>
                        <x-slot name="slot2">
                            Desayuno incluido y acceso a la playa privada.
                        </x-slot>
                    </x-cardhospedajes>
                </div>
            </a>
            <a href="#">
                <div class="cardhost-container me-3 mb-4">
                    <x-cardhospedajes
                        titulo="Hotel Ciudad de México" 
                        imagen="{{ asset('img/Cdmx.jpg') }}" 
                        precio="$1,200 por noche">
                        <x-slot name="slot1">
                            Ubicación céntrica cerca de la Zona Rosa.
                        </x-slot>
                        <x-slot name="slot2">
                            Wi-Fi gratis y estacionamiento disponible.
                        </x-slot>
                    </x-cardhospedajes>
                </div>
            </a>
            <a href="#">     
                <div class="cardhost-container me-3 mb-4">
                    <x-cardhospedajes
                        titulo="Resort Cancún" 
                        imagen="{{ asset('img/resort.jpg') }}" 
                        precio="$2,500 por noche">
                        <x-slot name="slot1">
                            Todo incluido: comida, bebidas y entretenimiento.
                        </x-slot>
                        <x-slot name="slot2">
                            Piscinas y actividades recreativas.
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

<div class="container" style="padding: 5rem;">
    <div class="row g-10">
        <div class="col-md-6">
            <h1>Reservar un Hotel</h1>
            <p>
                Al planear tus vacaciones, una de las decisiones más cruciales es <strong>elegir el hotel adecuado</strong>. La elección del lugar donde te alojarás no solo afecta tu comodidad, sino que también puede influir en la calidad de tu experiencia de viaje. Aquí te ofrecemos una guía completa para asegurarte de que tu reserva sea perfecta.
            </p>
            <h2>Consejos para Reservar</h2>
            <p>
                Antes de realizar una reserva, es fundamental hacer una investigación adecuada. Aquí hay algunos consejos útiles:
            </p>
            <ul>
                <li><strong>Investiga bien:</strong> Compara diferentes hoteles y sus precios. Usa sitios web de comparación y asegúrate de verificar varias fuentes.</li>
                <li><strong>Lee las reseñas:</strong> Las opiniones de otros huéspedes pueden darte una idea clara de lo que puedes esperar. Busca comentarios sobre la limpieza, el servicio y la calidad de las instalaciones.</li>
                <li><strong>Verifica la ubicación:</strong> Asegúrate de que el hotel esté cerca de las atracciones que deseas visitar. Considera la distancia a los medios de transporte, restaurantes y áreas de interés.</li>
                <li><strong>Consulta ofertas y descuentos:</strong> A menudo, puedes encontrar promociones especiales en los sitios de reserva. No dudes en registrarte para recibir notificaciones sobre ofertas.</li>
                <li><strong>Revisa las políticas de cancelación:</strong> Es esencial saber si puedes cancelar o modificar tu reserva sin penalizaciones, en caso de que cambien tus planes.</li>
            </ul>
            <h2>¿Cómo Hacer la Reserva?</h2>
            <p>
                Reservar un hotel es un proceso sencillo si sigues algunos pasos. Aquí te los describimos:
            </p>
            <ol>
                <li><strong>Selecciona las fechas:</strong> Decide cuándo viajarás y cuántas noches deseas quedarte. Utiliza un calendario para asegurarte de que tus fechas son flexibles, si es necesario.</li>
                <li><strong>Elige el hotel:</strong> Basándote en tu investigación, selecciona el hotel que mejor se adapte a tus necesidades y presupuesto. Tómate el tiempo necesario para evaluar las opciones disponibles.</li>
                <li><strong>Realiza la reserva:</strong> Puedes hacer esto a través de un sitio web de reservas o directamente en el sitio del hotel. Si optas por un sitio de terceros, asegúrate de que sea confiable.</li>
                <li><strong>Confirma tu reserva:</strong> Asegúrate de recibir un correo electrónico de confirmación que incluya todos los detalles de tu estancia, como fechas, tipo de habitación y políticas del hotel.</li>
            </ol>
        </div>
        <div class="col-md-6">
            <h2>¿Qué Hacer Antes de tu Llegada?</h2>
            <p>
                Una vez que hayas reservado, hay algunas cosas que debes tener en cuenta antes de tu llegada:
            </p>
            <ul>
                <li><strong>Comunica tus necesidades especiales:</strong> Si tienes requisitos específicos, como una habitación accesible o preferencias alimentarias, informa al hotel con anticipación.</li>
                <li><strong>Planifica tu transporte:</strong> Investiga las opciones de transporte desde y hacia el aeropuerto. Asegúrate de conocer la mejor manera de llegar al hotel.</li>
                <li><strong>Revisa la documentación:</strong> Ten a mano tu identificación, confirmaciones de reserva y cualquier otro documento necesario para el check-in.</li>
            </ul>
            <h2>Durante tu Estancia</h2>
            <p>
                Una vez que llegues al hotel, asegúrate de seguir algunos consejos para disfrutar al máximo tu estancia:
            </p>
            <ul>
                <li><strong>Realiza el check-in a tiempo:</strong> Llega al hotel durante el horario de check-in para evitar inconvenientes. Si llegas temprano, pregunta si puedes dejar tus maletas.</li>
                <li><strong>Explora las instalaciones:</strong> Familiarízate con las instalaciones del hotel, como la piscina, el gimnasio y los restaurantes. Pregunta sobre horarios y actividades disponibles.</li>
                <li><strong>Comunica cualquier problema:</strong> Si encuentras algún inconveniente en tu habitación o en las instalaciones, no dudes en informarlo al personal del hotel para que puedan solucionarlo.</li>
            </ul>
            <p>
                Siguiendo estos pasos y consejos, podrás disfrutar de una experiencia de reserva fluida y sin complicaciones, lo que te permitirá concentrarte en lo más importante: ¡disfrutar de tus vacaciones!
            </p>
        </div>
    </div>
</div>



@endsection
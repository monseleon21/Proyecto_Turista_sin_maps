
<link rel="stylesheet" href="{{ asset('css/card-vuelos.css') }}">

<div class="tarjeta-vuelo">
    <div class="img-vuelo">
        <img src="{{ $imagen }}" alt="Imagen del vuelo">
    </div>
    <div class="info-vuelo">
        <div class="info-origen">
            <span style="font-size: 20px; font-weight: bold;">{{ $horaOrigen }}</span>
            <span>{{ $origen }}</span>
        </div>
        <div class="info-duracion">
            <i class="bi bi-airplane" style="transform: rotate(90deg);"></i>
            <span>{{ $duracion }}</span>
        </div>
        <div class="info-destino">
            <span style="font-size: 20px; font-weight: bold;">{{ $horaDestino }}</span>
            <span>{{ $destino }}</span>
        </div>
        <div class="info-escalas">
            <span>Escalas</span>
            <span>{{ $escalas }}</span>
        </div>
    </div>
    <div class="precio-vuelo">
        <div class="top" style="display:flex; flex-direction:column;">
            <span style="font-size: 20px; font-weight: bold;">{{ $precio }}</span>
            <span style="font-size:12px;">{{ $ultimos }}</span>
            <small style="font-size:12px;" id="aerolinea">{{ $aerolinea }}</small>
        </div>
        <div class="btn-seguir">
            <a href="{{ $rutaReserva }}" style="text-decoration: none;">
                <b style="font-size:16px;">Reservar</b>
            </a>
        </div>
    </div>
</div>


<div class="tarjeta-hotel">
    <div class="img-hotel">
        <img src="{{ $imagen }}" alt="Imagen del hotel" >
    </div>
    <div class="info-hotel">
        <div class="info-ubicacion">
            <span>{{ $ubicacion }}</span>
            <span style="font-size: 20px; font-weight: bold;">{{ $nombreHotel }}</span>
            <span style="margin-top: 10px;">{{ $direccion }}</span>
            <span style="margin-top: 20px;">{{ $calificacion }}</span>
            <span style="margin-top: 10px;"><b>Servicios:</b> {{ $servicios }}</span>
        </div>
    </div>
    <div class="precio-hotel">
        <div class="top" style="display:flex; flex-direction:column; margin-bottom:15px;">
            <span style="font-size: 20px; font-weight: bold;">{{ $precio }}</span>
            <span style="font-size:16px;">{{ $ultimosLugares }}</span>
        </div>
        <div class="btn-reservar">
            <a href="{{ $rutaReserva }}" style="text-decoration: none;">
                <b style="font-size:16px;">Reservar</b>
            </a>
        </div>
    </div>
</div>

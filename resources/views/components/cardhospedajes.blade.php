
<div class="card" style="width: 350px; overflow: hidden;"> 
    @if ($imagen)
        <img src="{{ $imagen }}" alt="{{ $titulo }}" class="card-img-top" style="height: 150px; object-fit: cover;">
    @endif
    <div class="card-body" style="display: flex; flex-direction: column; height: 250px;">
        <h5 class="card-title" style="flex: 0 1 auto; margin-bottom: 0;">{{ $titulo }}</h5>
        <div class="slot1" style="flex: 1; overflow: hidden;">
            <br>
            {{ $slot1 }}
        </div>
        <div class="slot2" style="flex: 1; overflow: hidden;">
            {{ $slot2 }}
        </div>
        @if ($precio)
            <p class="card-text" style="margin-bottom: 0;"><strong>Precio: {{ $precio }}</strong></p>
        @endif
    </div>
</div>

<div class="container mt-4">
    <div class="card" style="width: 400px; height: 600px; background-image: url('{{ $imagen }}'); background-size: cover; background-position: center; border-bottom-right-radius: 80px;">
        <div class="card-body">
            <h5 class="card-title" style="color: white; font-weight: bold; font-size: 1.5rem;">{{ $titulo }}</h5>
            <p class="card-text" style="color: white; font-size: 1.2rem;">{{ $slot }}</p>
            <span style="color: white; font-weight: bold;">{{ $encabezado }}</span>
        </div>
    </div>
</div>

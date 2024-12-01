<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/js/app.js'])
    <link rel="stylesheet" href="{{ asset('css/nav.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">


    <title>@yield('titulo')</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('rutahome') }}" style="display:flex; gap:10px; justify-content: center; align-items: center;">
                <h1 style="color: #000148; font-size: 24px;">TuristaSinMaps</h1> 
                <i class="bi bi-map" style="color: #000148; font-size: 25px; margin-bottom:5px;"></i>
            </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item d-flex" style="gap: 50px;">
                        <a href="{{ route('rutalogin') }}">
                            <i class="bi bi-suitcase" style="font-size: 30px;"></i>
                        </a>
                        <a href="{{ route('rutalogin') }}">
                            <i class="bi bi-person" style="font-size: 30px;"></i>
                        </a>
                    </li>
                </ul>
            </div>  
        </div>
    </nav>
    @yield('contenido')
</body>
</html>
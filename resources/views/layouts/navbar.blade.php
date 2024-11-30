<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/js/app.js'])
    <link rel="stylesheet" href="{{ asset('css/nav.css') }}">
    <title>@yield('titulo')</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
          <a class="navbar-brand" href="{{ route('rutahome') }}">TuristaSinMaps <i class="bi bi-geo-alt fs-4"></i></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="{{ route('rutalogin') }}"><button type="button" class="btn btn-light">Iniciar sesión</button></a>
                    </li>
                </ul>
            </div>  
        </div>
    </nav>
    
    @yield('contenido')
</body>
</html>
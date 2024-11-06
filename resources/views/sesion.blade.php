<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <style>
        body, html {
            height: 100%;
            position: relative;
        }
        .logo {
            position: absolute;
            top: 15px;
            left: 5rem;
            font-size: 22px;
            text-decoration: none;
            color: inherit; 
        }
        .logo a {
            color: black; 
        }
        .d-flex {
            min-height: 100vh;
        }
    </style>
    <title>Inicio de Sesión</title>
</head>
<body>
    <div class="logo">
        <a href="{{ route('rutainicio') }}">TuristaSinMaps <i class="bi bi-geo-alt fs-4"></i></a>
    </div>

    <div class="container d-flex justify-content-center align-items-center">
        <div class="col-md-4">
            <h2 class="text-center">Inicio de Sesión</h2>


            <form action="/iniciarSesion" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="email" class="form-label">{{__('Correo Electrónico')}}</label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="{{__('Ingresa tu correo')}}" required>
                    <small class="fts-italic text-danger">{{ $errors->first('email') }}</small>
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">{{__('Contraseña')}}</label>
                    <input type="password" class="form-control" name="password" id="password" placeholder="{{__('Ingresa tu contraseña')}}" required>
                    <small class="fts-italic text-danger">{{ $errors->first('password') }}</small>
                </div>

                <div class="card-footer text-muted">
                    <div class="d-grid gap-2 mt-2 mb-1">
                        <button type="submit" class="btn btn-primary btn-sm">{{__('Iniciar Sesión')}}</button>
                    </div>
                </div>

                <div class="text-center mt-3">
                    <a href="#">{{__('¿Olvidaste tu contraseña?')}}</a>
                </div>
                <div class="text-center mt-2">
                    <p>{{__('No tienes una cuenta?')}} <a href="{{ route('rutaregistro') }}">{{__('Regístrate aquí')}}</a></p>
                </div>
            </form>



        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

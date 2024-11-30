<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/js/app.js'])
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
    <title>Registro</title>
</head>
<body>
    <div class="logo">
        <a href="{{ route('rutahome') }}">TuristaSinMaps <i class="bi bi-geo-alt fs-4"></i></a>
    </div>

    <div class="container d-flex justify-content-center align-items-center">
        <div class="col-md-4">
            <h2 class="text-center">Registro</h2>
            <form action="{{route('rutaprocesarregistro')}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name">Nombre Completo</label>
                    <input type="text" class="form-control" name="name" placeholder="Ingresa tu nombre completo">
                    <small class="text-danger">{{$errors->first('name')}}</small>
                </div>
                <div class="form-group">
                    <label for="email">Correo Electrónico</label>
                    <input type="email" class="form-control" name="email" placeholder="Ingresa tu correo">
                    <small class="text-danger">{{$errors->first('email')}}</small>
                </div>
                <div class="form-group">
                    <label for="password">Contraseña</label>
                    <input type="password" class="form-control" name="password" placeholder="Crea una contraseña">
                    <small class="text-danger">{{$errors->first('password')}}</small>
                </div>
                <div class="form-group">
                    <label for="confirm-password">Confirmar Contraseña</label>
                    <input type="password" class="form-control" name="confirm-password" placeholder="Confirma tu contraseña">
                    <small class="text-danger">{{$errors->first('confirm-password')}}</small>
                </div>
                <button type="submit" class="btn btn-success btn-block">Registrarse</button>
                <div class="text-center mt-3">
                    <p>¿Ya tienes una cuenta? <a href="{{ route('rutasesion') }}">Inicia sesión aquí</a></p>
                </div>
            </form>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
</body>
</html>

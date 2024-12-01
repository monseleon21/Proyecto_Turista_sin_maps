<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    @vite(['resources/js/app.js'])
    <title>Inicia Sesión</title>
</head>
<body>
    <div class="container-i">
        <div class="header">
            <h1 style="color: #000148; font-size: 24px; margin-bottom:10px;">TuristaSinMaps</h1>
            <i class="bi bi-map" style="color: #000148; font-size: 25px; margin-bottom:5px;"></i>
        </div>

        <h1 style="font-size: 20px;">Bienvenido</h1>
        <p style="font-size: 18px;">Inicia sesión para continuar</p> 

        <form class="contact-info">
            <div class="btns">
                <label class="input-btn">
                    <span style="font-size: 14px;">Correo</span>
                    <input type="text" style="font-size: 16px;" placeholder="Ingresa tu correo electronico">
                </label>
                <label class="input-btn">
                    <span style="font-size: 14px;">Contraseña</span>
                    <input type="password" style="font-size: 16px;" placeholder="Ingresa tu contraseña">
                </label>
            </div>
            <button class="create-btn" type="submit">Iniciar sesion</button>
        </form>
 
        <p style="font-size: 16px;">¿No tienes una cuenta?  <b><a href="{{ route('rutasignup') }}" style="text-decoration: none;">Crea una</a></b></p>
        <p style="font-size: 16px;"><b><a href="{{ route('rutasignup') }}" style="text-decoration: none;">¿Olvidaste tu contraseña? </a></b></p>
        <b><a href="{{ route('rutahome') }}" style="text-decoration: none; font-size: 18px;">Regresar</a></b>
    </div>
</body>
</html>

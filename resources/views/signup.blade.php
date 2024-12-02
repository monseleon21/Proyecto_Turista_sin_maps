<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/signup.css') }}">
    @vite(['resources/js/app.js'])
    <title>Crea tu cuenta</title>
</head>
<body>
    <div class="container-i">
        <div class="header">
            <h1 style="color: #000148; font-size: 24px;">TuristaSinMaps</h1>
            <i class="bi bi-map" style="color: #000148; font-size: 25px; margin-bottom:5px;"></i>
        </div>
        <h1 style="font-size: 20px;">Crear una cuenta</h1>
        <p style="font-size: 15px;">Regístrate, ingresa todos tus datos y descubre la mejor forma de viajar</p>

            <form action="{{route('rutaprocesarregistro')}}" method="POST">
                    @csrf
                <div class="contact-info">
                    <h1 style="font-size: 15px;">Información personal</h1>
                    <div class="btns">
                        <label class="input-btn">
                            <span style="font-size: 14px;">Nombre(s)</span>
                            <input type="text" style="font-size: 16px;" name="name" placeholder="Nombre Completo" value="{{ old('name') }}">
                            <small class="text-danger">{{$errors->first('name')}}</small>
                        </label>
                        <label class="input-btn">
                            <span style="font-size: 14px;">Apellido(s)</span>
                            <input type="text" style="font-size: 16px;" name="lastname" placeholder="Apellido Completo" value="{{ old('lastname') }}">
                            <small class="text-danger">{{$errors->first('lastname')}}</small>
                            
                        </label>
                    </div>
                </div>

                <div class="contact-info">
                    <h1 style="font-size: 15px;">Información de contacto</h1>
                    <div class="btns">
                        <label class="input-btn">
                            <span style="font-size: 14px;">Correo</span>
                            <input type="email" style="font-size: 16px;" name="email" placeholder="Correo Electrónico" value="{{ old('email') }}">
                            <small class="text-danger">{{$errors->first('email')}}</small>
                        </label>
                        <label class="input-btn">
                            <span style="font-size: 14px;">Teléfono</span>
                            <input type="number" style="font-size: 16px;" name="phone" placeholder="Número de Teléfono" value="{{ old('phone') }}">
                            <small class="text-danger">{{$errors->first('phone')}}</small>
                        </label>
                    </div>
                </div>

                <div class="contact-info">
                    <h1 style="font-size: 15px;">Contraseña</h1>
                    <div class="btns">
                        <label class="input-btn">
                            <input type="password" style="font-size: 16px;" name="password" placeholder="Ingresa una contraseña" value="{{ old('password') }}">
                            <small class="text-danger">{{$errors->first('password')}}</small>
                        </label>
                        <label class="input-btn">
                            <input type="password" style="font-size: 16px;" name="confirm-password" placeholder="Confirmar Contraseña" value="{{ old('confirm-password') }}">
                            <small class="text-danger">{{$errors->first('confirm-password')}}</small>
                        </label>
                    </div>
                </div>

                <button class="create-btn" type="submit">Crear cuenta</button>
            </form>
        <p style="font-size: 16px;">¿Ya tienes una cuenta? <b><a href="{{ route('rutalogin') }}" style="text-decoration: none;" class="linkeado">Iniciar sesión</a></b></p>
        <b><a href="{{ route('rutahome') }}" style="text-decoration: none; font-size: 18px;">Regresar</a></b>
    </div>
</body>
</html>

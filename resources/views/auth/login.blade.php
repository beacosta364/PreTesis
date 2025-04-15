<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>
<body>

    <div class="login-container">
        <!-- Logo -->
        <!-- <div class="logo">
            <img src="{{ asset('homeimg\LogoLaPapa.png') }}" alt="Logo">
        </div> -->
        <!-- Logo -->
        <div class="logo">
            <a href="{{ url('/') }}">
                <img src="{{ asset('homeimg/LogoLaPapa.png') }}" alt="Logo">
            </a>
        </div>


        <!-- Formulario de inicio de sesión -->
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Dirección de correo -->
            <label for="email">Correo</label>
            <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus autocomplete="username">
            @error('email')
                <div>{{ $message }}</div>
            @enderror

            <!-- Contraseña -->
            <label for="password">Contraseña</label>
            <input id="password" type="password" name="password" required autocomplete="current-password">
            @error('password')
                <div>{{ $message }}</div>
            @enderror

            <!-- Recordar contraseña -->
            <label for="remember_me">
                <input id="remember_me" type="checkbox" name="remember">
                Recordar Contraseña
            </label>

            <!-- Botones -->
            <div style="margin-top: 20px; text-align: right;">
                @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}" style="color: #ccc; font-size: 12px;">¿Olvidaste tu contraseña?</a>
                @endif
            </div>

            <button type="submit">Ingresar</button>
        </form>
    </div>

</body>
</html>

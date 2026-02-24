<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Login</title>

    @vite(['resources/css/app.css'])
</head>
<body>

<div class="login-container">

    <div class="login-box">

        <div class="avatar"></div>

        <h2>Bienvenido</h2>
        <p>Iniciar sesión</p>

        {{-- Mensaje de error --}}
        @if(session('error'))
            <p class="error">
                {{ session('error') }}
            </p>
        @endif

        <form method="POST" action="{{ route('login.auth') }}">

            @csrf

            <input 
                type="text" 
                name="user"
                placeholder="Usuario"
                required
            >

            <input 
                type="password" 
                name="password"
                placeholder="Contraseña"
                required
            >

            <button type="submit">
                Entrar
            </button>

        </form>

    </div>

</div>

</body>
</html>

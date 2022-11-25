<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Administrador</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <script src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
</head>
<body>
    <div class="hero2">
        <div class="login-box">
            <img class="avatar" src="img/logo-huaca.png" alt="Logo Huacas del Sol y la luna">
            <h1>Inicio Sesión Administrador</h1>
            <form action="{{ route('log') }}" method="post">
                @csrf
                <label for="usuario">Email</label>
                <input type="email" name="email" placeholder="email" id="usuario">

                <label for="contraseña">Contraseña</label>
                <input type="password" name="password" placeholder="Contraseña" id="contraseña">
            
                <input type="submit" value="Iniciar Sesión">
            </form>
        </div>
    </div>
</body>
</html>
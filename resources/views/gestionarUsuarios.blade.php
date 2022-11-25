<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <script src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <title>Reporte de Usuarios</title>
</head>
<body>
    <header>
        <img src="img/logo-huaca-sin-texto.png" alt="Logo Huacas del sol y la luna">
        <div class="flex-end">
            <nav>
                <a href="{{ route('reporte') }}"  class="activo">Reporte de Usuarios</a>
                <a href="{{ route('agregar') }}">Agregar Lugar</a>
                <a href="{{ route('gestionar') }}">Gestionar Lugares</a>
            </nav>
            <div class="m-l">
                <h6>Hola {{ $user->name }},</h6>
                <form action="{{ route('logout') }}" method="post">
                    @csrf
                    @method('put')
                    <button>Cerrar Sesión</button>
                </form>
            </div>    
        </div>
        
    </header>
    <div id="burger">
        <div class="barra superior"></div>
        <div class="barra media"></div>
        <div class="barra inferior"></div>
    </div>
    <div class="menu">
        <nav>
            <a href="{{ route('reporte') }}">Reporte de Usuarios</a>
            <hr>
            <a href="{{ route('agregar') }}">Agregar Lugar</a>
            <hr>
            <a href="{{ route('gestionar') }}">Gestionar Lugares</a>
        </nav>
        <p class="copyright">&copy; Huacas del Sol y la Luna Inc</p>
    </div>

    <div class="fila contacto">
        <h1 class="sub">Centro de </h1> <h1 class="m-l">Control de Usuarios</h1>
    </div>
    </div>
    <div class="fila">
        <div class="col-66">
            Bienvenido Administrador a la página de control de usuarios suscritos a recibir información de las Huacas de Moche, en esta sección tenemos una lista de los usuarios registrados.
        </div>
        <div class="col-33 flex-center">
            <img src="img/gente.png" alt="">
        </div>
    </div>
    <div class="tabla flex-center">
        <table>
            <tr>
                <th>Nombre</th>
                <th>Correo</th>
                <th>Fecha de Suscripcion</th>
            </tr>
            @foreach ($clients as $client )
            <tr>
                <td>{{ $client->full_name }}</td>
                <td>{{ $client->email }}</td>
                <td>{{ $client->created_at }}</td>
            </tr>
            @endforeach
        </table>

    </div>


</body>
</html>
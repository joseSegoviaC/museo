<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestionar Lugar</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <script src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
</head>
<body>
    <header>
        <img src="{{ asset('img/logo-huaca-sin-texto.png') }}" alt="Logo Huacas del sol y la luna">
        <div class="flex-end">
            <nav>
                <a href="{{ route('reporte') }}">Reporte de Usuarios</a>
                <a href="{{ route('agregar') }}">Agregar Lugar</a>
                <a href="{{ route('gestionar') }}" class="activo">Gestionar Lugares</a>
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
        <h1 class="sub">Gestión </h1><h1 class="m-l">de Información</h1>
    </div>
    <div class="fila">
        <div class="col-66">
            <p>Bienvenido a la sección para gestionar la información publicada en la sección "Lugares", permite editar o eliminar un lugar a ver conveniente, recuerda 
                realizar estas actividades con la aprobación del personal pertinente. <br>

                La información se presentará en la siguiente tabla, puedes ubicar todos los lugares por su nombre registrado en la base de datos. 

        </div>
        <div class="col-33">
            <img src="img/informacion.jpg" alt="">
        </div>
    </div>
    <div class="fila">
        <h3>Lugares Registrados</h3>
    </div>
        <div class="tabla flex-center">
            <table>
                <tr>
                    <th>ID</th>
                    <th>Nombre Lugar</th>
                    <th colspan="2">Acciones</th>
                </tr>
                @foreach ($places as $place)    
                <tr>
                    <td>{{ $place->id }}</td>
                    <td>{{ $place->name }}</td>
                    <td><a href="{{ route('actualizarLugar',['id' => $place->id]) }}">Actualizar</a></td>
                    <td><a href="{{ route('eliminarLugar',['id' => $place->id]) }}">Eliminar</a></td>
                </tr>
                @endforeach
            </table>
    
        </div>

</body>
</html>
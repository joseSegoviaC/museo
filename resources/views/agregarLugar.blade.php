<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Lugar</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <script src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
</head>
<body>
    <header>
        <img src="img/logo-huaca-sin-texto.png" alt="Logo Huacas del sol y la luna">
        <div class="flex-end">
            <nav>
                <a href="{{ route('reporte') }}">Reporte de Usuarios</a>
                <a href="{{ route('agregar') }}" class="activo">Agregar Lugar</a>
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
        <h1 class="sub">Agregar </h1> <h1 class="m-l">un nuevo lugar</h1>
    </div>
    <div class="fila">
        <div class="col-33">
            <img src="img/redactar.jpg" alt="">
        </div>
        <div class="col66">
            <p>Bienvenido a la sección para agregar un nuevo lugar a la ventana "Lugares", esta sección esta especialmente  creada para facilitar el proceso de añadir una tarjeta a la pestaña 
                Lugares, a su vez, se actualiza la información en la base de datos de la empresa. <br>
                Para poder agregar una nueva locación, complete el siguiente formulario, recuerde no dejar espacios en blanco <br>
                Recuerde contar con la aprobación del personal pertinente antes de realizar cualquier cambio. 
            </p>
        </div>
    </div>
    <div class="fila">
        <div class="col-100 flex-column-center">
            <p>Llena el siguiente formulario con la informacion solicitada:</p>
            <form class="contacto bordecito" action="{{ route('guardarLugar') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="fila">
                    <input type="text" name="name" placeholder="Nombre del Lugar">
                </div>
                <div class="fila">
                    <input type="text" name="sdescription" placeholder="Descripción corta">
                </div>
                <div class="fila">
                    <input type="text" name="type" placeholder="Tipo de Lugar">
                </div>
                <div class="fila">
                    <input type="text" name="location" placeholder="Ubicación del Lugar">
                </div>
                <div class="fila">
                    <textarea name="description1" id="" cols="30" rows="10" placeholder="Primera descripcion del lugar"></textarea>
                </div>
                <div class="fila">
                    <textarea name="description2" id="" cols="30" rows="10" placeholder="Segunda descripcion del lugar"></textarea>
                </div>
                <div>
                    <div>
                        <label for="imagen1">Sube Imagen 1</label>
                    </div>
                    <div>
                        <input type="file" name="fimage" id="" accept="image/*">
                    </div>
                </div>
                <div>
                    <div>
                        <label for="imagen1">Sube Imagen 2</label>
                    </div>
                    <div>
                        <input type="file" name="background" id="" accept="image/*">
                    </div>
                </div>
                <div>
                    <div>
                        <label for="imagen1">Sube Imagen 3</label>
                    </div>
                    <div>
                        <input type="file" name="image1" id="" accept="image/*">
                    </div>
                </div>
                <div>
                    <div>
                        <label for="imagen1">Sube Imagen 4</label>
                    </div>
                    <div>
                        <input type="file" name="image2" id="" accept="image/*">
                    </div>
                </div>
                <div>
                    <div>
                        <label for="imagen1">Sube Imagen 5</label>
                    </div>
                    <div>
                        <input type="file" name="carrusel1" id="" accept="image/*">
                    </div>
                </div>
                <div>
                    <div>
                        <label for="imagen1">Sube Imagen 6</label>
                    </div>
                    <div>
                        <input type="file" name="carrusel2" id="" accept="image/*">
                    </div>
                </div>
                <div>
                    <div>
                        <label for="imagen1">Sube Imagen 7</label>
                    </div>
                    <div>
                        <input type="file" name="carrusel3" id="" accept="image/*">
                    </div>
                </div>
                <div>
                    <div>
                        <label for="imagen1">Sube Imagen 8</label>
                    </div>
                    <div>
                        <input type="file" name="carrusel4" id="" accept="image/*">
                    </div>
                </div>
                <div>
                    <div>
                        <label for="imagen1">Sube Imagen 9</label>
                    </div>
                    <div>
                        <input type="file" name="carrusel5" id="" accept="image/*">
                    </div>
                </div>
                <div class="fila flex-center">
                    <button type="submit">Agregar</button>
                </div>
            </form>
        </div>
    </div>
    
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrador Vista Inicio</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <script src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
</head>
<body>
    <div class="container">

		<div class="threeholder">
			<div class="threeone">
				<div class="circlepic">
				</div>
				<div class="circleborder">
					<img src="img/grupo-de-chat.png" alt="">
					<a href="{{ route('reporte') }}"><h4>Gestionar Usuarios</h4></a>
					<p>Ver los usuarios suscritos a noticias.</p>
				</div>
			</div><div class="threetwo">
				<div class="circlepic">
				</div>
				<div class="circleborder">
                <img src="img/teclado.png" alt="">
					<a href="{{ route('agregar') }}"><h4>Agregar Lugar</h4></a>
					<p>Agregar un nuevo lugar a la sección "Lugares" de la vista normal.</p>
				</div>
			</div><div class="threethree">
			<div class="circlepic">
				</div>
				<div class="circleborder">
                    <img src="img/INFO.png" alt="">
					<a href="{{ route('gestionar') }}"><h4>Gestionar Lugar</h4></a>
					<p>Actualizar información o borrar información sobre "Lugares"</p>
				</div>
				

			</div>
		</div>    
</body>
</html>
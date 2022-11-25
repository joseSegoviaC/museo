@extends('layouts.template')
@section('content')
    <header class="transparente">
        <img src="{{ asset('img/logo-huaca-sin-texto.png') }}" alt="Logo Huacas del sol y la luna">
        <nav>
            <a href="#" class="activo">Inicio</a>
            <a href="{{ route('lugares') }}">Lugares</a>
            <a href="{{ route('contacto') }}">Contáctanos</a>
        </nav>
    </header>
    <div class="hero">
        <div></div>
        <div></div>
        <div></div>
        <div class="hero-logo">
            <img src="{{ asset('img/logo-huaca.png') }}" alt="Logo Huacas del Sol y la luna">
        </div>
        <a href="#" class="hero-down">
            <img src="{{ asset('img/down.svg') }}" alt="Flecha Abajo">
        </a>
    </div>
    <div class="menu">
        <nav>
            <a href="#">Inicio</a>
            <hr>
            <a href="{{ route('lugares') }}">Lugares</a>
            <hr>
            <a href="{{ route('contacto') }}">Contáctanos</a>
        </nav>
        <p class="copyright">&copy; Huacas del Sol y la Luna Inc</p>
    </div>
    <div id="burger">
        <div class="barra superior"></div>
        <div class="barra media"></div>
        <div class="barra inferior"></div>
    </div>
    <div class="fila primera">
        <span id="pr">&nbsp;</span>
        <div class="col-66">
            <p>Uno de los atractivos mas importantes del Perú, se compone de dos edificaciones gigantes una a la otra a unos 500 metros; estos transmiten
                la cultura de los Moche cuyo apogeo fue durante los siglos II y VII. La ubicación de tales monumentos es actualmente la región de la Libertad, al
                norte del Perú, a 30 minutos de la ciudad de Trujillo y son parte del complejo arqueológico más importante construido por la cultura Mochica.</p>
        </div>
        <div class="col-33">
            <img src="{{ asset('img/Huaca3.jpg') }}" alt="Imagen casa">
        </div>
    </div>
    <div class="fila">
        <div class="col-50">
            <img src="{{ asset('img/Huaca1.jpg') }}" alt="">
        </div>
        <div class="col-50">
            <p>El majestuoso legado de los Mochicas nos transporta a una época donde la política y la administración del día a día requería contar con tal arquitectura
                hecha de mas de 140 millones de piezas de adobe y cuya responsabilida recayó en nada menos que 250 mil hombres! Además, sacrificios humanos y rituales se
                exhibían entre la población Moche dejando huellas como el descubrimiento de 40 cadáveres entre jóvenes, adultos y guerreros de dentro del templo de la Luna.</p>
        </div>
    </div>
    <div class="fila parallax">
        <div class="col-100">
            <p><em>"Donde el sol y la luna transmiten su historia por el resto de la eternidad"</em></p>
        </div>
    </div>
    <div class="fila">
        <div class="col-50 caja-nav flex-column-center info precios">
            <img src="{{ asset('img/price.svg') }}" alt="">
            <button>PRECIOS</button>
            <table>
                <tr>
                    <th>Categoría</th>
                    <th>Precio</th>
                </tr>
                @foreach ($prices as $price)
                <tr>
                    <td>{{ $price->category }}</td>
                    <td>S/.{{ $price->amount }}</td>
                </tr>
                @endforeach
                <tr>
                    <td colspan="2">*El precio es referencial</td>
                </tr>
            </table>
        </div>
        <div class="col-50 caja-nav flex-column-center info horarios">
            <img src="{{ asset('img/schedule.svg') }}" alt="">
            <button>HORARIOS</button>
            <table>
                <tr>
                    <th>Dia</th>
                    <th>Hora Inicio</th>
                    <th>Hora Fin</th>
                </tr>
                <tr>
                    <td>Lunes - Domingo</td>
                    <td>9:00 hrs</td>
                    <td>16:00 hrs</td>
                </tr>
            </table>
        </div>
    </div>
    <h1 class="m-b m-l">¿Cómo llegar?</h1>
    <div class="fila">
        <div class="col-100 flex-center">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/0N4zQ3uDoCU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
    </div>
    <div class="fila">
        <div class="col-100 flex-column-center">
            <p>Para recibir correos con información y novedades del museo, registrarse en el siguiente formulario:</p>
            <form class="contacto" action="{{ route('registerClient') }}" method="post">
                @csrf
                <div class="fila">
                    <input class="usuario" type="text" name="name" placeholder="Nombre Completo" required>
                </div>
                <div class="fila">
                    <input type="email" class="email" name="email" placeholder="Correo electrónico" required>
                </div>
                <div class="fila flex-end">
                    <button type="submit">Enviar</button>
                </div>
                <div class="fila flex-center">
                    <input type="checkbox" name="check" id="condiciones" required>
                    <label for="condiciones">Acepto las condiciones legales.</label>
                </div>
            </form>
        </div>
    </div>
@endsection
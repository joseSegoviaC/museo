@extends('layouts.template')
@section('content')
    <header>
        <img src="img/logo-huaca-sin-texto.png" alt="Logo Huacas del sol y la luna">
        <nav>
            <a href="{{ route('app') }}">Inicio</a>
            <a href="{{ route('lugares') }}">Lugares</a>
            <a href="#" class="activo">Contáctanos</a>
        </nav>
    </header>
    <div id="burger">
        <div class="barra superior"></div>
        <div class="barra media"></div>
        <div class="barra inferior"></div>
    </div>
    <div class="menu">
        <nav>
            <a href="{{ route('app') }}">Inicio</a>
            <hr>
            <a href="{{ route('lugares') }}">Lugares</a>
            <hr>
            <a href="#">Contáctanos</a>
        </nav>
        <p class="copyright">&copy; Huacas del Sol y la Luna Inc</p>
    </div>
    <div class="fila contacto">
        <div class="col-66 flex-column-center formulario">
            <h3>Contáctanos</h3>
            <form class="contacto" action="{{ route('consultas') }}" method="POST">
                @csrf
                <div class="fila">
                    <input class="usuario" type="text" name="name" placeholder="Nombre Completo" required>
                </div>
                <div class="fila">
                    <input type="email" class="email" name="email" placeholder="Correo electrónico" required>
                </div>
                <div class="fila">
                    <textarea name="text" id="ayuda" cols="30" rows="4" placeholder="¿En qué podemos ayudarte?" required></textarea>
                </div>
                <div class="fila flex-end">
                    <button type="submit">Enviar</button>
                </div>
                <div class="fila flex-center">
                    <input type="checkbox" required id="condiciones">
                    <label for="condiciones">Acepto las condiciones legales.</label>
                </div>
            </form>
        </div>
        <div class="col-33 flex-column-center adicional">
            <h3>Encuentranos también en:</h3>
            <div>
                <p>DIRECCION</p>
                <p>Valle de Moche, Moche</p>
            </div>
            <div>
                <p>EMAIL</p>
                <p>sol-y-luna@huaca.com</p>
            </div>
            <div>
                <p>Síguenos en nuestras redes sociales:</p>
                <div class="flex-around">
                    <img class="rrss" src="{{ asset('img/facebook.svg') }}" alt="Icono de facebook">
                    <img class="rrss" src="{{ asset('img/twitter.svg') }}" alt="Icono de twitter">
                    <a href="https://api.whatsapp.com/send?phone=51946917770&text=Hola, Necesito me gustaría obtener información!" target="_blank">
                        <img class="rrss" src="{{ asset('img/whatsapp.svg') }}" alt="Icono de whatsapp">
                    </a>
                    <img class="rrss" src="{{ asset('img/instagram.svg') }}" alt="Icono de instagram">
                </div>
            </div>
        </div>
    </div>
    <!--<div class="fila">
        <div class="col-100">
            <span id="aviso">&nbsp;</span>
            <h1>Aviso Legal</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi eaque delectus earum tempore deserunt error soluta quae omnis vitae aliquam.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi eaque delectus earum tempore deserunt error soluta quae omnis vitae aliquam.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi eaque delectus earum tempore deserunt error soluta quae omnis vitae aliquam.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi eaque delectus earum tempore deserunt error soluta quae omnis vitae aliquam.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi eaque delectus earum tempore deserunt error soluta quae omnis vitae aliquam.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi eaque delectus earum tempore deserunt error soluta quae omnis vitae aliquam.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi eaque delectus earum tempore deserunt error soluta quae omnis vitae aliquam.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi eaque delectus earum tempore deserunt error soluta quae omnis vitae aliquam.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi eaque delectus earum tempore deserunt error soluta quae omnis vitae aliquam.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi eaque delectus earum tempore deserunt error soluta quae omnis vitae aliquam.</p>
        </div>
    </div>
    <div class="fila">
        <span id="cookies">&nbsp;</span>
        <div class="col-100">
            <h1>Politica de cookies</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi eaque delectus earum tempore deserunt error soluta quae omnis vitae aliquam.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi eaque delectus earum tempore deserunt error soluta quae omnis vitae aliquam.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi eaque delectus earum tempore deserunt error soluta quae omnis vitae aliquam.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi eaque delectus earum tempore deserunt error soluta quae omnis vitae aliquam.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi eaque delectus earum tempore deserunt error soluta quae omnis vitae aliquam.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi eaque delectus earum tempore deserunt error soluta quae omnis vitae aliquam.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi eaque delectus earum tempore deserunt error soluta quae omnis vitae aliquam.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi eaque delectus earum tempore deserunt error soluta quae omnis vitae aliquam.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi eaque delectus earum tempore deserunt error soluta quae omnis vitae aliquam.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi eaque delectus earum tempore deserunt error soluta quae omnis vitae aliquam.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi eaque delectus earum tempore deserunt error soluta quae omnis vitae aliquam.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi eaque delectus earum tempore deserunt error soluta quae omnis vitae aliquam.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi eaque delectus earum tempore deserunt error soluta quae omnis vitae aliquam.</p>
        </div>
    </div> -->
@endsection
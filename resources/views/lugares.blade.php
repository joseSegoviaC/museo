@extends('layouts.template')
@section('content')    
    <header>
        <img src="img/logo-huaca-sin-texto.png" alt="Logo Huacas del sol y la luna">
        <nav>
            <a href="{{ route('app') }}">Inicio</a>
            <a href="#" class="activo">Lugares</a>
            <a href="{{ route('contacto') }}">Contáctanos</a>
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
            <a href="#">Lugares</a>
            <hr>
            <a href="{{ route('contacto') }}">Contáctanos</a>
        </nav>
        <p class="copyright">&copy; Huacas del Sol y la Luna Inc</p>
    </div>
    <div class="fila grid">
        @foreach ($places as $place)
        <div class="card">
            <img src="{{ $place['fimage'] }}" alt="{{ $place['name'] }}">
            <div class="footer-card">
                <div>
                    <p>{{ $place["name"] }}</p>
                    <p>{{ $place["sdescription"] }}</p>
                </div>
                <a href="{{ route('descripcion', ['id' => $place->id]) }}">Más información</a>
            </div>
        </div>
        @endforeach
    </div>
@endsection
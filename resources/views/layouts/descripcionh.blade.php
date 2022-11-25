@extends('layouts.template')
@section('content')

<header>
    <img src="{{ asset('img/logo-huaca-sin-texto.png') }}" alt="Logo Huacas del sol y la luna">
    <nav>
        <a href="{{ route('app') }}">Inicio</a>
        <a href="{{ route('lugares') }}" class="activo">Lugares</a>
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
        <a href="{{ route('lugares') }}" class="activo">Lugares</a>
        <hr>
        <a href="{{ route('contacto') }}">Contáctanos</a>
    </nav>
    <p class="copyright">&copy; Huacas del Sol y la Luna Inc</p>
</div>
@yield('content1')

@endsection
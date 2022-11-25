@extends('layouts.descripcionh')
@section('content1')
<div class="fila propiedad recinto">
        <div class="col-50">
            <h1 class="m-b">{{ $place->name }}</h1>
            <p class="flex-start">
                <img class="m-r-small" src="{{ asset('img/lugar.png') }}" alt="Icono plano">
                Huaca de la Luna
            </p>
            <p class="flex-start">
                <img class="m-r-small" src="{{ asset('img/proposito.png') }}" alt="Icono plano">
                Lugar Ceremonial
            </p>
            <p class="flex-end">
                <button onclick="openModal()">Ver imagenes</button>
            </p>
        </div>
        <div class="col-50"></div>
    </div>
    <div class="fila">
        <div class="col-50">
            <p>{{ $place->description1 }}</p>
        </div>
        <div class="col-50">
            <img src="{{ asset($place->image1) }}" alt="Imagen de vivienda">
        </div>
    </div>
    <div class="fila">
        <div class="col-50">
            <img src="{{ asset($place->image2) }}" alt="Imagen de vivienda">
        </div>
        <div class="col-50">
            <p>{{ $place->description2 }}</p>
        </div>
    </div>
    <div class="overlay"></div>
    <div class="carrusel">
        <div class="slide">
            <img src="{{ asset($place->carrusel1) }}" alt="">
        </div>
        <div class="slide">
            <img src="{{ asset($place->carrusel2) }}" alt="">
        </div>
        <div class="slide">
            <img src="{{ asset($place->carrusel3) }}" alt="">
        </div>
        <div class="slide">
            <img src="{{ asset($place->carrusel4) }}" alt="">
        </div>
        <div class="slide">
            <img src="{{ asset($place->carrusel5) }}" alt="">
        </div>
        <div class="x-modal" onclick="closeModal()">
            <img src="{{ asset('img/x.svg') }}" alt="">
        </div>
        <div class="left-arrow" onclick="prevSlide()">
            <img src="{{ asset('img/left.svg') }}" alt="">
        </div>
        <div class="rigth-arrow" onclick="nextSlide()">
            <img src="{{ asset('img/right.svg') }}" alt="">
        </div>
    </div>
    <script src="{{ asset('js/carrusel.js') }}"></script>
@endsection
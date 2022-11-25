<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <script src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>

</head>
<body>
    @yield('content')

    <footer class="fila">
        <div class="col-33">
            <p>Huacas del Sol y la luna</p>
            <p class="
            flex-start">
                <img class="m-r-small" src="{{ asset('img/map.svg') }}" alt="Icono de mapa">
                Valle de Moche, Moche
            </p>
            <p>
                <img class="m-r-small" src="{{ asset('img/phone.svg') }}" alt="Icono de teléfono">
                (044) 221269
            </p>
            <p>
                <img class="m-r-small" src="{{ asset('img/mail.svg') }}" alt="Icono de email">
                sol-y-luna@huaca.com
            </p>
        </div>
        <div class="col-33">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3949.6919509632285!2d-78.99459738255615!3d-8.132810599999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91ad17fa26e41a8d%3A0xa60812d7e1a6f02d!2sHuaca%20Del%20Sol%20Y%20La%20Luna!5e0!3m2!1ses-419!2spe!4v1667509468528!5m2!1ses-419!2spe" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
        <div class="col-33 ">
            <div class="flex-around">
                <img class="rrss" src="{{ asset('img/facebook.svg') }}" alt="Icono de facebook">
                <img class="rrss" src="{{ asset('img/twitter.svg') }}" alt="Icono de twitter">
                <a href="https://api.whatsapp.com/send?phone=51946917770&text=Hola, Necesito me gustaría obtener información!" target="_blank">
                    <img class="rrss" src="{{ asset('img/whatsapp.svg') }}" alt="Icono de whatsapp">
                </a>
                <img class="rrss" src="{{ asset('img/instagram.svg') }}" alt="Icono de instagram">
            </div>
            <div class="flex-around m-t">
                <a href="#">Aviso Legal</a>
                <a href="#">Política de Cookies</a>
            </div>
            <p class="copyright m-t">&copy; Huacas del Sol y la luna All rights reserved</p>
        </div>
    </footer>
</body>
</html>
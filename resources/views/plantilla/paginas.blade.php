<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="keywords" content="Capacho, Capacho Independencia, Capacho Nuevo">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Ing Luis Urbina">
    @yield('meta')
    <link rel="shortcut icon" href="{{asset('img/fijas/Logo-puro.webp')}}" type="image/x-icon">
    <link href="{{asset('bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    @yield('css')
</head>

<body>
    <div class="contenedor-cargando">
        <div class="lds-ring">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>

    </div>
    <header>
        <div class=" d-flex align-items-center" style="background: #f6f8ff;">
            <img src="{{asset('img/fijas/Logo-puro.webp')}}" alt="Escudo" width="100px" height="99.14px" id="escudo" loading="lazy">
            <div class="titulo-encabezado lh-1 d-flex w-100">
                <h1 id="membrete" class="mx-auto"> ALCALDIA BOLIVARIANA DEL MUNICIPIO <br> <small class="h3">CAPACHO NUEVO DEL ESTADO TACHIRA</small> </h1>
            </div>
            <img src="{{asset('img/fijas/luis_mendoza.webp')}}" alt="LuisGomez" width="90px" height="109px" id="membreteLuisMendoza" class="d-none d-md-block" loading="lazy">
        </div>
        <nav class="menu-pegajoso-inicio">
            <!--   -----Menu Horizontal---- -->
            <div class="container navegador">
                <button class="navbar-toggler d-md-none d-block" type="button" data-bs-toggle="offcanvas" data-bs-target="#ejemplo" aria-controls="ejemplo"><i class="las la-bars fs-1"></i></button>
                <ul class="nav justify-content-center ">
                    <li class="nav-item"><a href="{{ route('inicio')}}" class="nav-link text-light"><i class="las la-house-damage"></i> Inicio</a></li>
                    <li class="nav-item"><a href="{{route('noticias')}}" class="nav-link">Noticias</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown-alcaldia" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Alcaldia
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown-alcaldia">
                            <li><a class="dropdown-item" href="{{route('alcaldia')}}">+ Nostros - Decretos</a></li>
                            <li><a class="dropdown-item" href="{{route('concejo.municipal')}}">+ Concejo Municipal - Ordenanzas</a></li>
                            <li><a class="dropdown-item" href="{{route('entes')}}">+ Entes de Gobierno</a></li>
                            <li><a class="dropdown-item" href="{{route('misiones')}}">+ Mision y Grandes Misiones</a></li>
                            <li><a class="dropdown-item" href="{{route('sala.situacional')}}">+ Sala Situacional</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a href="{{route('municipio')}}" class="nav-link">Municipio</a></li>
                    <li class="nav-item"><a href="{{route('turismo')}}" class="nav-link">Turismo</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Servicios
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="{{route('catastro')}}">+ Catastro</a></li>
                            <li><a class="dropdown-item" href="{{route('registro.civil')}}">+ Registro Civil</a></li>
                            <li><a class="dropdown-item" href="{{route('hacienda.municipal')}}">+ Hacienda Municipal</a></li>
                            <li><a class="dropdown-item" href="{{route('sindicatura')}}">+ Sindicatura Municipal</a></li>
                            <li><a class="dropdown-item" href="{{route('proteccion.civil')}}">+ Protección Civil</a></li>
                            <li><a class="dropdown-item" href="{{route('desarrollo.social')}}">+ Desarrollo Social</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Bono Patria
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="{{route('somosvzla')}}">+ Somos VZLA</a></li>
                            <li><a class="dropdown-item" href="{{route('registro.civil')}}">+ Mision Vivienda</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!--   -----Menu lateral---- -->
            <div class="offcanvas offcanvas-start bg-dark" tabindex="-1" id="ejemplo" aria-labelledby="offcanvasExampleLabel">
                <div class="offcanvas-header">
                    <h5 class="text-light">Menú</h5>
                    <a type="button" data-bs-dismiss="offcanvas" aria-label="close">
                        <i class="las la-bars"></i></a>
                </div>
                <div class="offcanvas-body">
                    <ul>
                        <li><a href="{{ route('inicio')}}">Inicio</a></li>
                        <li><a href="{{route('noticias')}}">Noticias</a></li>
                        <div>
                            <a class="collapsed  btn btn-danger" type="button" data-bs-toggle="collapse" data-bs-target="#uno" aria-expanded="false">Alcaldia</a>
                            <div id="uno" class="collapse">
                                <ul>
                                    <li><a class="dropdown-item" href="{{route('alcaldia')}}">+ Nostros - Decretos</a></li>
                                    <li><a class="dropdown-item" href="{{route('concejo.municipal')}}">+ Concejo Municipal - Ordenanzas</a></li>
                                    <li><a class="dropdown-item" href="{{route('entes')}}">+ Entes de Gobierno</a></li>
                                    <li><a class="dropdown-item" href="{{route('entes')}}">+ Mision y Grandes Misiones</a></li>
                                </ul>
                            </div>
                        </div>
                        <li><a href="{{route('municipio')}}">Municipio</a></li>
                        <div>
                            <a class="collapsed  btn btn-danger" type="button" data-bs-toggle="collapse" data-bs-target="#dos" aria-expanded="false">Bonos Patria</a>
                            <div id="dos" class="collapse">
                                <ul>
                                    <li><a class="dropdown-item" href="{{route('somosvzla')}}">+ Somos VZLA</a></li>
                                    <li><a class="dropdown-item" href="{{route('concejo.municipal')}}">+ Mision Vivienda</a></li>
                                </ul>
                            </div>
                        </div>
                        <li><a href="{{route('turismo')}}">Turismo</a></li>
                        <div>
                            <a class=" collapsed w-100 btn btn-danger" type="button" data-bs-toggle="collapse" data-bs-target="#tres" aria-expanded="false">Planillas de Solictud</a>
                            <div id="tres" class="collapse">
                                <ul>
                                    <li><a class="dropdown-item" href="{{route('catastro')}}">+ Catastro</a></li>
                                    <li><a class="dropdown-item" href="{{route('registro.civil')}}">+ Registro Civil</a></li>
                                    <li><a class="dropdown-item" href="{{route('hacienda.municipal')}}">+ Hacienda Municipal</a></li>
                                    <li><a class="dropdown-item" href="{{route('sindicatura')}}">+ Sindicatura</a></li>
                                    <li><a class="dropdown-item" href="{{route('proteccion.civil')}}">+ Protección Civil</a></li>
                                    <li><a class="dropdown-item" href="{{route('desarrollo.social')}}">+ Desarrollo Social</a></li>
                                </ul>
                            </div>
                        </div>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="d-flex">
            <marquee behavior="" direction="letf" class="py-1">Carrera 06 frente a la Plaza Bolivar de Independecia, Sede Alcaldia, Municipio Capacho Nuevo, Estado Táchira</marquee>
        </div>
        <ul class="lista-redes d-none d-md-block">
            <li><a class="instagram" href="https://www.instagram.com/alcaldia_capachonuevo/"><i class="lab la-instagram fs-2 text-light p-2"></i> Instagram</a></li>
            <li> <a class="facebook" href="https://www.facebook.com/AlcaldiaCapachoNuevo2022/?ref=py_c"><i class="lab la-facebook-f fs-2 text-light p-2"></i> Facebook</a></li>
            <li><a class="twitter" href="https://twitter.com/luismendozach?lang=es"><i class="lab la-twitter fs-2 text-light p-2"></i> twitter</a> </li>
        </ul>
    </header>

    @yield('contenido')

    <footer class="py-2">
        <div class="container ">
            <div class="row p-5 pb-4">
                <div class="col-md-8">
                    <h5 class="text-light">Lema</h5>
                    <h2 class="text-light lh-sm h3">En Capacho Nuevo... Renace la Esperanza!!!</h2>
                </div>
                <div class="col-md-4">
                    <h5 class="text-light">Horarios de atencion al ciudadano.</h5>
                    <p class="text-light lh-sm"> Lunes - Viernes. <br> <strong class="text-light"> 8:00 AM - 01:00
                            PM</strong></p>
                </div>
                <div class="col-12 text-center text-light">
                    Copyright 2022-2023
                </div>
            </div>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script src="{{asset('bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('js/cargando.js')}}"></script>
    <script>
        $(document).ready(function() {
            var menu = $('.menu-pegajoso-inicio').offset().top;
            $(window).on('scroll', function() {
                if ($(window).scrollTop() > menu) {
                    $('.menu-pegajoso-inicio').addClass('menu-fijo');
                } else {
                    $('.menu-pegajoso-inicio').removeClass('menu-fijo');
                }
            })
        });
    </script>
    @yield('js')
</body>
</html>
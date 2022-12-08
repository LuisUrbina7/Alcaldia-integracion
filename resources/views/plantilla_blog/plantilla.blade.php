<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link href="{{asset('bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
  <link rel="stylesheet" href="{{ asset('css/style_blog.css')}}">

  @yield('titulo')
</head>

<body>
  <div class="d-flex">
    <div id="sidebar" class=" w-25 d-md-block d-none">
      <div class="text-center titulo-menu mb-3">
        <a href="#" class="navbar-brand  text-light border-bottom">
          Blog
        </a>
      </div>
      <div class="opciones-menu">
        <ul class="px-2">
          <li class="opciones-item"> <a href="{{route('perfil')}}" class="text-decoration-none "><i class="las la-user"></i> Perfil <span class="text-muted">usuario:{{ Auth::user()->rol }} </span> </a> </li>
          <h4 class="h6  pt-1 text-center text-muted fw-bold">Publicaciones</h4>
          <li class="opciones-item"> <a href="{{route('publicaciones')}}" class="text-decoration-none "><i class="lab la-buffer"></i> Publicaciones</a> </li>
          <li class="opciones-item"> <a href="{{route('publicaciones.formulario')}}" class="text-decoration-none "><i class="las la-plus"></i> Nueva Publicacion</a> </li>
          <h4 class="h6  pt-1 text-center text-muted fw-bold">Categorias</h4>
          <li class="opciones-item"> <a href="{{route('categorias')}}" class="text-decoration-none "><i class="las la-sticky-note"></i> Categorias</a> </li>
          <h4 class="h6  pt-1 text-center text-muted fw-bold">Publicidad</h4>
          <li class="opciones-item"> <a href="{{route('publicidad')}}" class="text-decoration-none "><i class="las la-play"></i> Banners</a> </li>
          <li class="opciones-item"> <a href="{{route('publicidad.formulario')}}" class="text-decoration-none "><i class="las la-plus"></i> Nuevo Banner</a> </li>
          <h4 class="h6  pt-1 text-center text-muted fw-bold">Normativas</h4>
          <li class="opciones-item"> <a href="{{route('normativas')}}" class="text-decoration-none "><i class="las la-play"></i> Normas</a> </li>
          <h4 class="h6  pt-1 text-center text-muted fw-bold">Estadística</h4>
          <li class="opciones-item"> <a href="{{route('ciudadanos')}}" class="text-decoration-none "><i class="las la-play"></i> Ciudadanos Atendidos</a> </li>
        </ul>
      </div>
    </div>

    <!--  -------menu lateral---- -->
    <div class="offcanvas offcanvas-start bg-dark" tabindex="-1" id="ejemplo" aria-labelledby="offcanvasExampleLabel">
      <div class="offcanvas-header">
        <h5 class="text-light">Blog</h5>
        <a type="button" data-bs-dismiss="offcanvas" aria-label="close">
          <i class="las la-times text-light fs-1"></i></a>
      </div>
      <div class="offcanvas-body">
        <ul>
          <h4 class="h6  pt-2 text-center text-muted fw-bold">Usuario</h4>
          <li class="opciones-item"> <a href="{{route('perfil')}}" class="text-decoration-none "><i class="las la-user"></i> Perfil</a> </li>
          <h4 class="h6  pt-2 text-center text-muted fw-bold">Publicaciones</h4>
          <li class="opciones-item"> <a href="{{route('publicaciones')}}" class="text-decoration-none "><i class="lab la-buffer"></i> Publicaciones</a> </li>
          <li class="opciones-item"> <a href="{{route('publicaciones.formulario')}}" class="text-decoration-none "><i class="las la-plus"></i> Nueva Publicacion</a> </li>
          <h4 class="h6  pt-2 text-center text-muted fw-bold">Categorias</h4>
          <li class="opciones-item"> <a href="{{route('categorias')}}" class="text-decoration-none "><i class="las la-sticky-note"></i> Categorias</a> </li>
          <h4 class="h6  pt-2 text-center text-muted fw-bold">Publicidad</h4>
          <li class="opciones-item"> <a href="{{route('publicidad')}}" class="text-decoration-none "><i class="las la-play"></i> Banners</a> </li>
          <li class="opciones-item"> <a href="{{route('publicidad.formulario')}}" class="text-decoration-none "><i class="las la-plus"></i> Nuevo Banner</a> </li>
          <h4 class="h6  pt-2 text-center text-muted fw-bold">Normativas</h4>
          <li class="opciones-item"> <a href="{{route('normativas')}}" class="text-decoration-none "><i class="las la-play"></i> Normas</a> </li>
          <h4 class="h6  pt-2 text-center text-muted fw-bold">Estadística</h4>
          <li class="opciones-item"> <a href="{{route('ciudadanos')}}" class="text-decoration-none "><i class="las la-play"></i> Ciudadanos Atendidos</a> </li>

        </ul>
      </div>
    </div>
    <!--  ------contenedor de contenido-------- -->
    <div class="blog-contenedor w-100">
      <nav class="shadow barra-lateral">
        <div class="container d-flex d-md-block justify-content-between">
          <button class="navbar-toggler d-md-none d-block" type="button" data-bs-toggle="offcanvas" data-bs-target="#ejemplo" aria-controls="ejemplo"><i class="las la-ellipsis-v text-light"></i></button>
          <ul class="nav justify-content-end ">

            <li class="nav-item dropdown">
              <a id="navbarDropdown" class="nav-link dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->name }}
              </a>
              <ul class="dropdown-menu " aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="{{route('perfil')}}">Perfil
                  </a> </li>
                <hr>
                <li><a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                       document.getElementById('logout-form').submit();">
                    {{ __('Salir') }}
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                      @csrf
                    </form>
                  </a> </li>
              </ul>
            </li>
          </ul>
        </div>
      </nav>
      <div class="px-2  px-md-4 pt-4 mb-5">

        @yield('contenido')
      </div>
      <div class="w-100 final-panel px-md-4 pt-2">
        <p class="h-5">Panel de Administración. &copy; 2022 Alcaldia de Capacho Nuevo</p>
      </div>
    </div>
  </div>
  </div>
  <script src="{{asset('bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  @yield('js')
</body>

</html>
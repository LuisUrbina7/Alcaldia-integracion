@extends('Plantilla.paginas')
@section('css')
<title>Desarrollo Social</title>
@endsection
@section('contenido')
<section class="py-5">
  <div class="container">
    <div class="row px-md-5">
      <div class="col-md-9">
        <div class="d-flex vista-titulo-noticia px-4 align-items-center">
          <span class=" rounded bg-warning"></span>
          <div class="p-3">
            <h3 class="color-oscuro h3 mb-0"> Somos Venezuela. </h3>
            <p> <small class="text-muted "> Todos los procesos relacionados al servicios..</small> </p>
          </div>
        </div>
        <div class="px-md-5">
          <div class="text-center">
            <img src="{{asset('img/fijas/Somos-vzla.webp')}}" alt="Somos Venezuela" width="250px" height="auto">
          </div>
          <p>Somos Venezuela en un mecanismo social del Estado con el objetivo de verificar los datos de cada uno de los carnetizados con la herramienta de identidad nacional Carnet de la Patria.</p>
          <p>El Movimiento Somos Venezuela se ha abocado en brindar atención amorosa, entregada y comprometida al pueblo con sus brigadas desplegadas a lo largo y ancho del país a través de las Misiones y Grandes Misiones y los diferentes sistemas de protección social impulsados por el Gobierno Bolivariano.</p>
          <p><strong>Si desea formar parte ingresa al siguiente enlace : </strong> <a href="https://msomosvenezuela.org/registro/"> únete!</a></p>
          <div class="text-center">
            <a href="https://www.facebook.com/msomosvenezuela/" class="btn mx-1 facebook"> <i class="lab la-facebook-f fs-3"></i></a>
            <a href="https://twitter.com/msomosven" class="btn twitter"><i class="lab la-twitter fs-3"></i></a>
          </div>
        </div>
      </div>
      <aside class="col-md-3 ">
        <div class="contenedor-aside">

          <div class="ventana-twitter">
            <h3>twitter</h3>
            <div>
              <a class="twitter-timeline" data-lang="en" data-width="241" data-height="450" href="https://twitter.com/LuisMendozaCh?ref_src=twsrc%5Etfw" data-tweet-limit="5">Luis Mendoza</a>
              <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
            </div>
          </div>

        </div>
      </aside>
    </div>
  </div>
</section>
@endsection
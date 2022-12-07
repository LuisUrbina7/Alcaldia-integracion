@extends('Plantilla.paginas')
@section('css')
<title>Inicio</title>
@endsection
@section('contenido')
<section class="paginas-servicios py-5">
    <div class="container">
        <div class="row  px-md-5">
            <h2 class="sub-raya mb-3">Servicios</h2>
            <div class="carta-servicios col-md-4 text-center mb-3">
                <a href="{{route('catastro')}}" class="text-decoration-none">
                    <div class=" position-relative">
                        <img src="img/fijas/catastro_1.webp" alt="" width="100%" height="272px">
                        <div class="servicios-carta-cuerpo position-absolute">
                            <h3 class="h4 text-light">Dirección de Urbanismo y Catastro</h3>
                        </div>
                    </div>
                </a>
            </div>
            <div class="carta-servicios col-md-4 text-center mb-3">
                <a href="{{route('registro.civil')}}" class="text-decoration-none">
                    <div class=" position-relative">
                        <img src="img/fijas/registro_civil.webp" alt="" width="100%" height="272px">
                        <div class="servicios-carta-cuerpo position-absolute">
                            <h3 class="h4 text-light">Registro Civil</h3>
                        </div>
                    </div>
                </a>
            </div>
            <div class="carta-servicios col-md-4 text-center mb-3">
                <a href="{{route('hacienda.municipal')}}" class="text-decoration-none">
                    <div class=" position-relative">
                        <img src="img/fijas/hacienda-municipal.webp" alt="" width="100%" height="272px">
                        <div class="servicios-carta-cuerpo position-absolute">
                            <h3 class="h4 text-light">Dirección de Hacienda Municipal</h3>
                        </div>
                    </div>
                </a>
            </div>
            <div class="carta-servicios col-md-4 text-center mb-3">
                <a href="{{route('catastro')}}" class="text-decoration-none">
                    <div class=" position-relative">
                        <img src="img/fijas/proteccion-civil.webp" alt="" width="100%" height="272px">
                        <div class="servicios-carta-cuerpo position-absolute">
                            <h3 class="h4 text-light">Dirección de Protección Civil</h3>
                        </div>
                    </div>
                </a>
            </div>
            <div class="carta-servicios col-md-4 text-center mb-3">
                <a href="{{route('sindicatura')}}" class="text-decoration-none">
                    <div class=" position-relative">
                        <img src="img/fijas/sindicatura-municipal.webp" alt="" width="100%" height="272px">
                        <div class="servicios-carta-cuerpo position-absolute">
                            <h3 class="h4 text-light">Sindicatura Municipal</h3>
                        </div>
                    </div>
                </a>
            </div>
            <div class="carta-servicios col-md-4 text-center mb-3">
                <a href="#" class="text-decoration-none">
                    <div class=" position-relative">
                        <img src="img/fijas/desarrollo-social.webp" alt="" width="100%" height="272px">
                        <div class="servicios-carta-cuerpo position-absolute">
                            <h3 class="h4 text-light">Dirección de Desarrollo Social</h3>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>
@endsection
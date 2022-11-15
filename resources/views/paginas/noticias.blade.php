@extends('Plantilla.paginas')
@section('css')
<title>Noticias</title>
@endsection
@section('contenido')

<main>
    <section class="pagina-noticias">
        <div class="container">
            <div class="row p-md-5">
                <h2> <span>+</span> Noticias</h2>
                <div class="col-md-9">
           <!--      'titulo',  'sinopsis','detalles', 'img','fecha','categoria','idUsuario',
    ]; -->
                @foreach ($noticias as $noticia )
                <a href="{{route('noticias.articulo',$noticia->id)}}" class="text-decoration-none">
                        <div class="card mb-3">
                            <div class="row g-0">
                                <div class="col-md-4 d-flex justify-content-center align-items-center">
                                    <img src="{{$noticia->img}}" class="img-fluid rounded-start position-relative img-noticias-item" alt="Foto" width="100%" height="158px">
                                    <i class="las la-camera fs-1 position-absolute text-light rounded bg-secondary"></i>
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h3 class="card-title">{{$noticia->titulo}}</h5>
                                            <p class="card-text">{{$noticia->sinopsis}}</p>
                                            <p class="card-text"><small class="text-muted">Fecha de
                                                    publicación : {{$noticia->fecha}}</small></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                @endforeach
                <div class="d-flex justify-content-center">
                        {{ $noticias->links() }}
                    </div>
                  <!--   <a href="noticia-vista-01.php" class="text-decoration-none">
                        <div class="card mb-3">
                            <div class="row g-0">
                                <div class="col-md-4 d-flex justify-content-center align-items-center">
                                    <img src="img/fijas/prueba-03.jpg" class="img-fluid rounded-start position-relative img-noticias-item" alt="..." width="100%" height="158px">
                                    <i class="las la-camera fs-1 position-absolute text-light rounded bg-secondary"></i>
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h3 class="card-title">El Alcalde Luis Mendoza realiza dialogo con los comerciantes.</h5>
                                            <p class="card-text">Luis mendoza alcalde bolivariano del Municipio, estableciò...</p>
                                            <p class="card-text"><small class="text-muted">Fecha de
                                                    publicación</small></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="noticia-vista-02.php" class="text-decoration-none">
                        <div class="card mb-3">
                            <div class="row g-0">
                                <div class="col-md-4 d-flex justify-content-center align-items-center">
                                    <img src="img/fijas/prueba-06.jpg" class="img-fluid rounded-start position-relative img-noticias-item" alt="..." width="100%" height="158px">
                                    <i class="las la-camera fs-1 position-absolute text-light rounded bg-secondary"></i>
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h3 class="card-title">Programa Radial La Tertulia Comunera por Armonía Stereo 102.5 fm invitada especial Lcda. Clari Useche.</h5>
                                            <p class="card-text">La directora de desarrollo social y el alcalde luis mendoza...</p>
                                            <p class="card-text"><small class="text-muted">Fecha de
                                                    publicación</small></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="noticia-vista-03.php" class="text-decoration-none">
                        <div class="card mb-3">
                            <div class="row g-0">
                                <div class="col-md-4 d-flex justify-content-center align-items-center">
                                    <img src="img/fijas/prueba-07.jpg" class="img-fluid rounded-start position-relative img-noticias-item" alt="..." width="100%" height="158px">
                                    <i class="las la-camera fs-1 position-absolute text-light rounded bg-secondary"></i>
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h3 class="card-title">Sintoníza todos los miércoles el programa de radio.</h5>
                                            <p class="card-text">Por Radio Nacional de Venezuela (RNV) 105.7 fm desde las 07:00 a.m.</p>
                                            <p class="card-text"><small class="text-muted">Fecha de
                                                    publicación</small></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="noticia-vista-03.php" class="text-decoration-none">
                        <div class="card mb-3">
                            <div class="row g-0">
                                <div class="col-md-4 d-flex justify-content-center align-items-center">
                                    <img src="img/fijas/prueba-04.jpg" class="img-fluid rounded-start position-relative img-noticias-item" alt="..." width="100%" height="158px">
                                    <i class="las la-camera fs-1 position-absolute text-light rounded bg-secondary"></i>
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h3 class="card-title">Recaudaciòn de impuesto.</h5>
                                            <p class="card-text">Capacho nuevo se encuentra realizando jornada para la recaudaciòn de impuestos en su zonas aledañas.</p>
                                            <p class="card-text"><small class="text-muted">Fecha de
                                                    publicación</small></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>

                    <div aria-label="Page navigation example">
                        <ul class="pagination justify-content-center">
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                </a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                </a>
                            </li>
                        </ul>
                    </div> -->
                   
                </div>
                <aside class="col-md-3 ">
                    <div class="contenedor-aside">
                        <div class="noticias-recientes">
                            <h3>Recientes</h3>
                            <a href="" class="link d-block">El Alcalde Luis Mendoza realiza dialogo con los comerciantes.</a>
                            <a href="" class="link d-block">Programa Radial La Tertulia.</a>
                            <a href="" class="link d-block">Recaudaciòn de impuesto.</a>
                            <a href="" class="link d-block">Peribeca en total normalidad y en cumplimiento del Decreto</a>
                            <a href="" class="link d-block">Apoyo de la Dirección de Protección Civil del municipio Capacho Nuevo</a>
                        </div>
                        <div class="ventana-twitter">
                            <h3>twitter</h3>
                            <div>
                                <a class="twitter-timeline" href="https://twitter.com/luismendozach?lang=es">Tweets
                                    by TwitterDev</a>
                                <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                            </div>
                        </div>

                    </div>
                </aside>
            </div>
        </div>
    </section>
</main>
@endsection

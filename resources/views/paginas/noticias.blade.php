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
                   
                    @foreach ($noticias as $noticia )
                    <a href="{{route('noticias.articulo',$noticia->slug)}}" class="text-decoration-none">
                        <div class="card mb-3">
                            <div class="row g-0">
                                <div class="col-md-4 d-flex justify-content-center align-items-center">
                                    <img src="{{asset($noticia->img)}}" class="img-fluid rounded-start position-relative img-noticias-item" alt="Foto" width="100%" height="158px">
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
                </div>
                <aside class="col-md-3 d-md-block d-none">
                    <div class="contenedor-aside">
                        <div class="noticias-recientes">
                            <h3>Recientes</h3>
                            @foreach($recientes as $reciente )

                            <a href="{{route('noticias.articulo',$reciente->slug)}}" class="link d-block">{{$reciente->titulo}}</a>

                            @endforeach
                        </div>
                        <div class="ventana-twitter">
                            <h3>twitter</h3>
                            <div>
                                <a class="twitter-timeline" href="https://twitter.com/luismendozach?lang=es"></a>
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
@extends('Plantilla.paginas')
@section('meta')
<meta name="description" content="Últimas novedades y proyecto del la gestión de Luis Mendoza.">
@endsection
@section('css')
<title>Noticias</title>
@endsection
@section('contenido')

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
                                        <div class="d-flex justify-content-between">
                                            <p class="card-text mb-0"><small class="text-muted">Fecha de publicación : {{$noticia->fecha}}</small> </p>
                                            <span class="p-1 bg-primary text-white">{{$noticia->Categoria->nombre}}</span>
                                        </div>
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
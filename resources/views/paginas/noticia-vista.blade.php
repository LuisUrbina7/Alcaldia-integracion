@extends('Plantilla.paginas')
@section('meta')
<meta name="description" content="{{$articulo->sinopsis}}">
<meta property="og:image" content="{{asset($articulo->img)}}" />
@endsection
@section('css')
<title>{{$articulo->titulo}}</title>
@endsection
@section('contenido')
<section class="pagina-noticias">
    <div class="container">
        <div class="row  p-md-4">
            <div class="col-md-9">
                <div class="d-flex vista-titulo-noticia px-md-4 align-items-center">
                    <span class=" rounded "></span>
                    <div class="p-3">
                        <h3 class="color-oscuro h3 mb-0"> {{$articulo->titulo}} </h3>
                        <p> <small class="text-muted "> Autor: {{$articulo->Usuarios->name}} || Fecha: {{$articulo->fecha}}</small> </p>
                    </div>
                </div>
                <div class="vista-cuerpo-noticia">
                    <div class="w-100 text-center mb-3">
                        <img src="../{{$articulo->img}}" alt="foto" width="50%">
                    </div>
                    {!!$articulo->detalles!!}
                    <div class="noticias-enlaces text-center mb-3">
                        <a href="https://api.whatsapp.com/send?text=Aprendiendo a compartir desde {{route('noticias.articulo',$articulo->slug)}}" class="btn  whatsapp "><i class="lab la-whatsapp fs-3"></i></a>
                        <a href="https://www.facebook.com/sharer/sharer.php?u={{route('noticias.articulo',$articulo->slug)}}" class="btn mx-1 facebook"> <i class="lab la-facebook-f fs-3"></i></a>
                        <a href="https://twitter.com/intent/tweet?url={{route('noticias.articulo',$articulo->slug)}}&text={{$articulo->titulo}}" class="btn twitter"><i class="lab la-twitter fs-3"></i></a>
                    </div>
                </div>
            </div>
            <aside class="col-md-3 d-none d-md-block">
                <div class="contenedor-aside">
                    <div class="noticias-recientes">
                        <h3>Recientes</h3>
                        <div class="noticias-recientes-caja">
                            @foreach($recientes as $reciente )
                            <a href="{{route('noticias.articulo',$reciente->slug)}}" class="link d-block">{{$reciente->titulo}}</a>
                            @endforeach
                        </div>

                    </div>
                    <div class="ventana-categorias">
                        <h3>Categorias</h3>
                        <div>
                            <a href="" class="link fs-6 text-decoration-none px-1 rounded bg-warning text-light m-1">Categoria 1</a>
                            <a href="" class="link fs-6 text-decoration-none px-1 rounded bg-warning text-light m-1">Categoria 2</a>
                            <a href="" class="link fs-6 text-decoration-none px-1 rounded bg-warning text-light m-1">Categoria 3</a>
                        </div>
                    </div>

                </div>
            </aside>
        </div>

    </div>
</section>
<section>
    <div class="container">
        <div class="px-3 contenedor-ancho">

            @foreach ($comentarios as $comentario )
            <div class="comentarios p-3 d-flex align-items-center ">
                <img src="{{asset('img/fijas/Logo-puro.webp')}}" alt="" width="90px" class="d-none d-md-block">
                <div class="p-2">
                    <p class="text-muted comentario-titulo h5">{{$comentario->nombre}}</p>
                    <p class="comentario-cuerpo mb-1 lh-base">{{$comentario->mensaje}} </p>
                    <p class="text-muted comentario-titulo"><small>{{$comentario->correo}} | fecha : {{$comentario->fecha}} </small></p>

                </div>
            </div>
            @endforeach

        </div>
        <div class="py-4">
            <p> Escribe un Comentario...</p>
            <form action="{{route('comentario.insertar')}}" class="contenedor-ancho px-md-5" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" value="{{$articulo->id}}" name="idPublicacion">
                <div class="mb-1">
                    <label for="nombre">Nombre :</label>
                    <input type="text" class="form-control" name="nombre" required>
                    @error('nombre')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="mb-1">
                    <label for="correo">Correo :</label>
                    <input type="email" class="form-control" name="correo" required>
                    @error('correo')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="Nombre">Mensaje :</label>
                    <textarea name="mensaje" id="" cols="10" rows="3" class="form-control @error('mensaje') is-invalid @enderror">

                            </textarea>
                    @error('mensaje')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="mb-3 text-end ">
                    <input type="submit" value="Enviar" class="btn btn-warning text-light">
                </div>
            </form>
        </div>
    </div>
</section>
@endsection
@section('js')
<script>
    $(document).ready(function() {
        cargar_categorias();
    });

    function cargar_categorias() {
        $.ajax({
            type: 'GET',
            url: "{{route('cargar.categorias')}}",
            success: function(response) {
                $('#cargando-publicidad').toggleClass('spinner-border');
                let contenido_categorias = '';
                $(response).each(function(index, item) {
                    contenido_categorias += '<a href="../noticias/categorias/' + item['id'] + '" class="link fs-6 text-decoration-none px-1 rounded bg-warning text-light m-1">' + item['nombre'] + '</a>';
                });
                $('.ventana-categorias div').html(contenido_categorias);
                console.log(response);
            }
        });
    }
</script>
@endsection
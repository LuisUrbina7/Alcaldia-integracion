@extends('Plantilla.paginas')
@section('css')
<title>{{$articulo->titulo}}</title>
@endsection
@section('contenido')
<main>
    <section class="pagina-noticias">
        <div class="container">
            <div class="row  p-md-4">
                <div class="col-md-9">
                    <div class="d-flex vista-titulo-noticia px-4 align-items-center">
                        <span class=" rounded "></span>
                        <div class="p-3">
                            <h3 class="color-oscuro h3 mb-0"> {{$articulo->titulo}} </h3>
                            <p> <small class="text-muted "> Autor: {{$articulo->Usuarios->name}} || Fecha: {{$articulo->fecha}}</small> </p>
                        </div>
                    </div>
                    <div class="vista-cuerpo-noticia">
                        {!!$articulo->detalles!!}
                        <div class="noticias-enlaces text-center mb-3">
                            <a href="" class="btn rounded-circle whatsapp shadow"><span class="fs-3 "><i class="lab la-whatsapp "></i></span></a>
                            <a href="" class="btn rounded-circle mx-3 facebook shadow"><span class="fs-3 ">
                                    <i class="lab la-facebook-f "></i>
                                </span></a>
                            <a href="" class="btn rounded-circle twitter shadow"><span class="fs-3 ">
                                    <i class="lab la-twitter"></i>
                                </span></a>
                        </div>

                    </div>
                </div>
                <aside class="col-md-3 d-none d-md-block">
                    <div class="contenedor-aside">
                        <div class="noticias-recientes">
                            <h3>Recientes</h3>
                            <div class="d-flex justify-content-center">
                                <div class="spinner-border" role="status" id="cargando-noticias">
                                </div>
                            </div>
                            <div class="noticias-recientes-caja">
                                <a href="" class="link fs-5 d-block">Titulo 1</a>
                                <a href="" class="link fs-5 d-block">Titulo 2</a>
                                <a href="" class="link fs-5 d-block">Titulo 2</a>
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
            <div class="px-4 contenedor-ancho">


                @foreach ($comentarios as $comentario )

                <div class="comentarios p-3 d-flex align-items-center ">
                    <img src="{{asset('img/fijas/Logo-puro.png')}}" alt="" width="90px" class="d-none d-md-block">
                    <div class="p-2">
                        <p class="text-muted comentario-titulo h5">{{$comentario->nombre}}</p>
                        <p class="comentario-cuerpo mb-1 lh-base">{{$comentario->mensaje}} </p>
                        <p class="text-muted comentario-titulo"><small>{{$comentario->correo}} | fecha : {{$comentario->fecha}} </small></p>

                    </div>
                </div>
                @endforeach

            </div>
            <div class="p-4">
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
</main>
@endsection
@section('js')
<script>

    $(document).ready(function(){
        cargar_noticias_recientes();
    })
    function cargar_noticias_recientes() {
        $.ajax({
            type: 'GET',
            url: "{{route('noticias.recientes')}}",
            success: function(response) {
                $('#cargando-noticias').toggleClass('spinner-border');
                let contenido_lista = '';
                $(response).each(function(index, item) {
                    contenido_lista += '  <a href="{{route("noticias.articulo")}}/2" class="link fs-5 d-block">'+item['titulo']+'</a>';
                });
                $('.noticias-recientes-caja').html(contenido_lista);
                console.log(response);

            }
        });
    }
</script>
@endsection
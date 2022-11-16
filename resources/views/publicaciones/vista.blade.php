@extends('plantilla_blog.plantilla')
@section('titulo')

<title>Vista</title>
@endsection

@section('contenido')
<section>
    
    <div class="container">
        <h3>Todas las Publicaciones.. </h3>
        <p class="text-muted">Nota : Solo los usuarios con permisos de administrador puede agregar, modificar y borrar otros usuarios, ademàs sòlo ellos pueden borrar cualquier contenido subido al servidor. Aquellos con permisos de editor dispondràn de agregar contenido y poder editarlos pero no podràn borrar nada.</p>
        <div class="publicaciones-todos bg-light border">
            <h3 class="text-muted text-center pt-4 h5">Vista</h3>
            <div class="row py-md-4 g-2">
                <div class="col-md-3  p-md-1 border rounded">
                    <a href="{{route('publicaciones.formulario')}}">

                        <div class="blog-nuevo  d-flex justify-content-center align-items-center position-relative">
                                <i class="las la-redo-alt position-absolute bg-light fs-1 p-4 rounded-circle "></i>
                        </div>
                    </a>
                </div>

                @foreach ($publicaciones as $publicacion )
                <div class="col-md-3 p-md-1 border rounded">
                    <a href="{{ route('publicaciones.actualizar.vista',$publicacion->id)}}">
                        <div class="border d-flex justify-content-center align-items-center position-relative h-100">
                            <span class="position-absolute w-100 top-0 bg-dark p-2 text-center "> {{$publicacion->titulo}}</span>
                                <i class="lar la-times-circle position-absolute bg-light fs-1 p-4 rounded-circle"></i>
                            <img src="{{$publicacion->img}}" width="231px" height="200px" alt="Foro-{{$publicacion->id}}">
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
            <div class="d-flex justify-content-center">
                        {{ $publicaciones->links() }}
                    </div>
        </div>
    </div>
</section>
@endsection
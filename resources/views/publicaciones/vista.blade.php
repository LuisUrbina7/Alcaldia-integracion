@extends('plantilla_blog.plantilla')
@section('titulo')

<title>Vista</title>
@endsection

@section('contenido')

<div>
    <h3>Publicaciones.</h3>
    <hr>
</div>
<p class="text-muted">Nota : Solo los usuarios con permisos de administrador puede agregar, modificar y borrar otros usuarios, ademàs sòlo ellos pueden borrar cualquier contenido subido al servidor. Aquellos con permisos de editor dispondràn de agregar contenido y poder editarlos pero no podràn borrar nada.</p>
<div >
    <div class="row g-1 mb-3">
        <div class="col-12 col-md-4">
            <div class="contenedor-carta d-flex justify-content-center align-items-center shadow">
                <div class="cuerpo-icono text-center w-25">
                    <i class="las la-users fs-1"></i>
                </div>
                <div class="cuerpo-texto text-center w-75">
                    <h1 class="h5">Usuarios</h1>
                    <span>{{$contador['usuarios']}}</span>
                    <p class="text-light">Registro de usuarios.</p>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-4">
            <div class="contenedor-carta d-flex justify-content-center align-items-center shadow">
                <div class="cuerpo-icono text-center w-25">
                <i class="las la-blog fs-1"></i>
                </div>
                <div class="cuerpo-texto text-center w-75">
                    <h1 class="h5">Publicaciones</h1>
                    <span>{{$contador['publicaciones']}}</span>
                    <p class="text-light">Registro de direcciones.</p>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-4">
            <div class="contenedor-carta d-flex justify-content-center align-items-center shadow">
                <div class="cuerpo-icono text-center w-25">
                <i class="lab la-font-awesome-flag fs-1"></i>
                </div>
                <div class="cuerpo-texto text-center w-75">
                    <h1 class="h5">Categorias</h1>
                    <span>{{$contador['categorias']}}</span>
                    <p class="text-light">Registro de Coordinaciones.</p>
                </div>
            </div>
        </div>

    </div>
</div>
<div class="panel-carta">
    <h4 class="text-muted text-center mb-3 ">VISTA</h4>
    <div class="container">
        <div class="row ">
            <div class="col-md-3 p-1 border rounded">
                <a href="{{route('publicaciones.formulario')}}">
                    <div class="blog-nuevo  d-flex justify-content-center align-items-center position-relative">
                        <i class="las la-redo-alt position-absolute bg-light fs-1 p-4 rounded-circle "></i>
                    </div>
                </a>
            </div>

            @foreach ($publicaciones as $publicacion )
            <div class="col-md-3 p-1 border rounded">
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
    </div>
    <div class="d-flex justify-content-center">
        {{ $publicaciones->links() }}
    </div>
</div>
@endsection
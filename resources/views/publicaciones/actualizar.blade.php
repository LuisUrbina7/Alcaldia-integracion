@extends('plantilla_blog.plantilla')
@section('titulo')

<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="https://cdn.ckeditor.com/ckeditor5/35.2.1/classic/ckeditor.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<title>Publicacion</title>
@endsection
@section('contenido')
<div>
    <h3>Publicaciones / Actualizar.</h3>
    <hr>
</div>
@if ( session('success') )
<div class="alert alert-success" role="alert">
    <strong>Felicitaciones </strong>
    Actualizado correctamente..
</div>
@endif
@if ( session('danger') )
<div class="alert alert-danger" role="alert">
    <strong>Error</strong>
    Algo esta mal..
</div>
@endif
<div class="panel-carta">
    <h3 class="text-muted text-center mb-3">BORRAR <a href="#" class="btn btn-danger" id="btn-publicacion-borrar">-</a> </h3>
    <input value="{{ route('publicar.borrar',$busqueda->id)}}" type="hidden" id="input-publicacion-borrar">
    <form action="{{route('publicaciones.actualizar.insertar',$busqueda->id)}}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="hidden" value=" {{ Auth::user()->id }}" name="idUsuario">
        <div class="row mb-3">
            <div class="col-12">
                <label for="titulo" class="form-label">Ingresa el titulo.</label>
                <input type="text" name="titulo" class="form-control" value="{{$busqueda->titulo}}">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md-6">
                <label for="categoria" class="form-label">Categoria:</label>
                <select id="categoria" class="form-select" name="categoria" aria-selected="{{$busqueda->categoria}}">
                    <option value="{{$busqueda->categoria}}">---seleccione---.</option>
                    @foreach ($categorias as $categoria)
                    <option value="{{$categoria->id}}">{{$categoria->nombre}}</option>
                    @endforeach
                </select>
                <input type="file" name="foto" id="foto" class="form-control mt-3">
            </div>
            <div class="col-md-6">
                <label for="sinopsis" class="form-label">Sinopsis:</label>
                <textarea name="sinopsis" id="" cols="30" rows="3" class="form-control">{{$busqueda->sinopsis}}</textarea>
            </div>
        </div>
        <div class="row m-12">
            <div class="col-md-12 text-center">
                <img src="{{asset($busqueda->img)}}" alt="Foto" width="231px" height="200px">
            </div>
        </div>
        <div class="row m-3">
            <div class="col-md-12">
                <label for="detalles" class="form-label">Descripcion:</label>
                <textarea name="detalles" id="editor" cols="30" rows="10" class="form-control">{{$busqueda->detalles}}</textarea>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md-12 text-center">
                <input type="submit" value="Actualizar" class="btn btn-warning">
            </div>
        </div>
    </form>
</div>



@endsection

@section('js')

<script>
    ClassicEditor
        .create(document.querySelector('#editor'), {
            ckfinder: {
                uploadUrl: "{{route('ckeditor.imagen').'?_token='.csrf_token()}}",
            }
        })
        .catch(error => {
            console.error(error);
        });
</script>

<script>
    $(document).ready(function() {
        function boton() {
            /*     alert('hola'); */
            location.href('../perfil');
        }
        $('#btn-publicacion-borrar').on('click', function() {
            let borrar_id = $('#input-publicacion-borrar').val();
            Swal.fire({
                title: '??Segur@?',
                text: "Se borrar?? todo!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'S??, borrar!',
                cancelButtonText: 'Cancelar',
            }).then((result) => {
                if (result.isConfirmed) {

                    $.ajax({
                        type: 'GET',
                        url: borrar_id,
                        dataType: 'json',
                        success: function(response) {
                            console.log(response);
                            if (response.msg == 'bien') {
                                Swal.fire(
                                    'Excelente',
                                    'Actualizado Correctamente',
                                    'success'
                                )
                                window.location.replace('/publicidad')
                                /* location.reload('/publicacion'); */
                            } else {
                                Swal.fire(
                                    'Algo ocurri??',
                                    'Int??ntalo m??s tarde..',
                                    'danger'
                                )
                            }
                        }
                    });
                }
            })
        });
    });
</script>
@endsection
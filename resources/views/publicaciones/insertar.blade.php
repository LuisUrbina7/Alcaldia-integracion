@extends('plantilla_blog.plantilla')
@section('titulo')

<script src="https://cdn.ckeditor.com/ckeditor5/35.2.1/classic/ckeditor.js"></script>

<title>Publicacion</title>
@endsection
@section('contenido')

<div>
    <h3>Publicaciones / Agregar.</h3>
    <hr>
</div>
@if ( session('success') )
<div class="alert alert-success" role="alert">
    <strong>Felicitaciones </strong>
    Agregado correctamente..
</div>
@endif
@if ( session('danger') )
<div class="alert alert-danger" role="alert">
    <strong>mal </strong>
    mall
</div>
@endif


            <div class="panel-carta">
                <form action="{{route('publicaciones.insertar')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" value=" {{ Auth::user()->id }}" name="idUsuario">
                    <div class="row mb-3">
                        <div class="col-12">
                            <label for="titulo" class="form-label">Ingresa el titulo.</label>
                            <input type="text" name="titulo" class="form-control" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="categoria" class="form-label">Categoria:</label>
                            <select id="categoria" class="form-select" name="categoria" required>
                                <option selected>---seleccione---.</option>
                                @foreach ($categorias as $categoria)
                                <option value="{{$categoria->id}}">{{$categoria->nombre}}</option>
                                @endforeach
                            </select>
                            <input type="file" name="foto" id="foto" class="form-control mt-3" required>
                        </div>
                        <div class="col-md-6">
                            <label for="sinopsis" class="form-label">Sinopsis:</label>
                            <textarea name="sinopsis" id="" cols="30" rows="3" class="form-control" required></textarea>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-12">
                            <label for="detalles" class="form-label">Descripcion:</label>
                            <textarea name="detalles" id="editor" class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-12 text-center">
                            <input type="submit" value="Enviar" class="btn btn-primary">
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

@endsection
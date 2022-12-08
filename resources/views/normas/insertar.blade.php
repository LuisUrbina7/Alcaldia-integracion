@extends('plantilla_blog.plantilla')
@section('titulo')

<script src="https://cdn.ckeditor.com/ckeditor5/35.2.1/classic/ckeditor.js"></script>

<title>Formulario</title>
@endsection
@section('contenido')
<div>
    <h3 class="justify-content-between d-flex">Normas / Agregar </h3>
    <hr>
</div>

@if ( session('success') )
<div class="alert alert-success" role="alert">
    <strong>Felicitaciones </strong>
    {{session('success')}}
</div>
@endif
@if ( session('danger') )
<div class="alert alert-danger" role="alert">
    <strong>mal </strong>
    {{session('danger')}}
</div>
@endif
<div class="panel-carta">
    <form action="{{route('normas.insertar')}}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="hidden" value=" {{ Auth::user()->id }}" name="idUsuario">
        <div class="row mb-3">
            <div class="col-md-6">
                <label for="titulo" class="form-label">Titulo:</label>
                <input type="text" name="titulo" class="form-control" required>
                @error('titulo')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="col-md-6">
                <label for="tipo" class="form-label">Tipo:</label>
                <select id="tipo" class="form-select" name="tipo" required>
                    <option selected>---seleccione---.</option>
                    <option value="Decreto">Decreto</option>
                    <option value="Ordenanza">Ordenanza</option>
                </select>
                @error('tipo')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md-6">
                <label for="fecha" class="form-label">fecha:</label>
                <input type="date" name="fecha" id="fecha" class="form-control" required>
                @error('fecha')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="col-md-6">
                <label for="archivo" class="form-label">Archivo:</label>
                <input type="file" name="archivo" class="form-control">
                @error('archivo')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
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
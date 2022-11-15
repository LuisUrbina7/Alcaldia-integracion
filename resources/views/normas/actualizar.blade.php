@extends('plantilla_blog.plantilla')
@section('titulo')
<title>Formulario</title>
@endsection
@section('contenido')

<section class="p-3">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Normas / actualizar</h1>
               
                <div class="border rounded">
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
                    <h3 class="text-muted text-center pt-4 ">Ingreso los datos</h3>
                    <form action="{{route('normas.actualizar.insertar',$norma->id )}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" value=" {{ Auth::user()->id }}" name="idUsuario">
                        <div class="row m-3">
                            <div class="col-md-6">
                                <label for="titulo" class="form-label">Titulo:</label>
                                <input type="text" name="titulo" class="form-control" value="{{ $norma->titulo }}">
                                @error('titulo')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="tipo" class="form-label">Tipo:</label>
                                <select id="tipo" class="form-select" name="tipo" required>
                                    <option value="{{ $norma->tipo }}"> {{ $norma->tipo }}</option>
                                    <option value="Decreto">Decreto</option>
                                    <option value="Norma">Norma</option>
                                </select>
                                @error('tipo')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row m-3">
                            <div class="col-md-6">
                                <label for="fecha" class="form-label">fecha:</label>
                                <input type="date" name="fecha" id="fecha" class="form-control"  value="{{ $norma->fecha }}">
                                @error('fecha')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="archivo" class="form-label">Archivo:</label>
                                <input type="file" name="archivo" class="form-control" >
                                @error('archivo')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row m-3 justify-content-center" >
                            <div class="col-md-6">
                              <iframe src="http://localhost/Alcaldia-integracion/public/{{ $norma->enlace }}" frameborder="0" width="500px" height="500px"></iframe>
                            </div>
                        </div>
                        
                        <div class="row mb-3">
                            <div class="col-md-12 text-center">
                                <input type="submit" value="Enviar" class="btn btn-primary">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>




@endsection

@section('js')

<script>
   
</script>

@endsection
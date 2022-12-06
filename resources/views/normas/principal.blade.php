@extends('plantilla_blog.plantilla')
@section('titulo')
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<title>Normas</title>
@endsection
@section('contenido')
<div>
    <h3 class="justify-content-between d-flex">Normas. <a href="{{route('normas.formulario')}}" class="btn btn-warning"> + </a></h3>
    <hr>
</div>
@if ( session('success') )
<div class="alert alert-success" role="alert">
    <strong>Felicitaciones </strong>
    Banner modificado..
</div>
@endif
@if ( session('danger') )
<div class="alert alert-danger" role="alert">
    <strong>Lo siento!</strong> {{ session('claveIncorrecta') }}
</div>
@endif

<div class="panel-carta">

    <div class="table-responsive">
        <table class="table table-striped  table-hover">
            <thead class="bg-dark text-white">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Titulo</th>
                    <th scope="col">Dirección</th>
                    <th scope="col">Fecha</th>
                    <th scope="col">Tipo</th>
                    <th scope="col">Editar</th>
                    <th scope="col">Borrar</th>
                </tr>
            </thead>
            <tbody>
                @foreach($normas as $norma)
                <tr>
                    <th scope="row">1</th>
                    <td>{{$norma->titulo}}</td>
                    <td><a href="{{$norma->enlace}}" target="_blank" rel="noopener noreferrer">{{$norma->enlace}}</a></td>
                    <td>{{$norma->fecha}}</td>
                    <td>{{$norma->tipo}}</td>
                    <td><a href="{{route('normas.actualizar.formulario',$norma->id)}}" class="btn btn-primary"><i class="las la-eye"></i></a></td>
                    <td><a href="{{route('normas.borrar',$norma->id)}}" onclick="borrar(this)" class="btn btn-danger"><i class="las la-trash-alt"></i></a></td>
                </tr>
                @endforeach

            </tbody>
        </table>
        <div class="d-flex justify-content-center">
            {{$normas->links()}}
        </div>
    </div>
</div>




@endsection
@section('js')
<script>
    function borrar($url) {
        event.preventDefault();
        Swal.fire({
            title: '¿Segur@?',
            text: "Se borrará todo!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Sí, borrar!',
            cancelButtonText: 'Cancelar',
        }).then((result) => {
            if (result.isConfirmed) {

                $.ajax({
                    type: 'GET',
                    url: $url,
                    success: function(response) {
                        console.log(response);
                        if (response.msg == 'bien') {
                            Swal.fire(
                                'Excelente',
                                'Actualizado Correctamente',
                                'success'
                            )
                            location.reload();
                        } else {
                            Swal.fire(
                                'Algo ocurrió',
                                'Inténtalo más tarde..',
                                'danger'
                            )
                        }
                    }
                });
            }
        })
    }
</script>

@endsection
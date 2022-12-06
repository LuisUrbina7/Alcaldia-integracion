@extends('plantilla_blog.plantilla')
@section('titulo')

<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<meta name="csrf-token" content="{{ csrf_token() }}">
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<title>Categoria</title>
@endsection

@section('contenido')


<div>
    <h3>Categorias </h3>
    <hr>
</div>
@if (session('msg'))
<div class="alert alert-primary" role="alert" id="alerta">
    {{session('msg')}}
</div>
@endif

<div class="panel-carta">

    <h4 class="text-muted text-center"> Categorias <a  class="btn btn-info" data-bs-toggle="modal" data-bs-target="#exampleModal"> + Agregar</a></h4>
    <p class="text-danger"> Ojo : La primera categoria registrada debe ser llamada "Proyectos" para que éstas noticias se muestren en el apartado proyecto de la pagina principal.</p>
    <table class="table">
        <thead class="bg-dark text-white">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nombre</th>
                <th scope="col">Editar</th>
                <th scope="col">Borrar</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($categorias as $categoria )
            <tr>
                <th scope="row">{{$categoria->id}}</th>
                <td>{{$categoria->nombre}}</td>
                <td><button value="{{route('categoria.actualizar.formulario',$categoria->id)}}" class="btn btn-primary bottom"><i class="lar la-eye"></i></button></td>
                <td><a href="{{route('categoria.borrar',$categoria->id)}}" class="btn btn btn-danger" onclick="borrar(this)"><i class="las la-trash-alt"></i></a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="d-flex justify-content-center">
        {{ $categorias->links() }}
    </div>


    <div class="d-flex justify-content-center">
        <div class="w-25">
            <div class="row border mb-3">
                <div class="col-md-12 mb-3">
                    <label for="referencia-nombre" class="form-label">Actualizar</label>
                    <input type="hidden" id="id" name="id">
                    <input type="text" name="referencia-nombre" class="form-control" id="nombre">
                </div>
                <div class="col-md-12 mb-3 text-end">
                    <a class="btn btn-warning" id="btn-actualizar">Actualzar</a>
                </div>
            </div>
        </div>
    </div>
</div>




<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Agregar</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{route('categoria.insertar')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <label for="" class="form-label">Categoria</label>
                            <input type="text" name="nombre" class="form-control">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
@endsection

@section('js')
<script>
    $(document).on('click', '.bottom', function() {
        var ruta = $(this).val();
        $('#id').val('');
        $('#nombre').val('');
        $.ajax({
            type: 'GET',
            url: ruta,
            dataType: 'json',
            success: function(response) {

                $('#id').val(response['id']);
                $('#nombre').val(response['nombre']);

            },
            error: function(response) {
                console.log('errorr ago mal');
            }
        });
    });

    $('#btn-actualizar').click(function(e) {
        e.preventDefault();
        let rutaActualizar = '{{route("categoria.actualizar.insertar","id")}}';
        let datos = {
            nombre: $('#nombre').val()
        };
        let id = $('#id').val();
        rutaActualizar = rutaActualizar.replace('id', id);
        /*  console.log(id);
         console.log(rutaActualizar); */

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            type: 'POST',
            url: rutaActualizar,
            data: datos,
            dataType: 'json',
            success: function(response) {
                console.log(response.msg);
                if (response.msg == 'excelente') {
                    Swal.fire(
                        'Excelente',
                        'Actualizado Correctamente',
                        'success'
                    )
                    location.reload();
                } else {

                }
            }
        });
    });

    function borrar($url) {
        event.preventDefault();
        Swal.fire({
            title: '¿Segur@?',
            text: "Advertencia, se borrarán todas las publicaciones dentro de ésta categoria. Sólo los administradores tienen permitido esta acción.",
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
                        if (response.msg == 'excelente') {
                            Swal.fire(
                                'Excelente',
                                'Borrado Correctamente',
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
                    },
                    error: function(response) {
                        console.log(response);
                    }
                });
            }
        })
    }
</script>

@endsection
@extends('plantilla_blog.plantilla')
@section('titulo')

<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<meta name="csrf-token" content="{{ csrf_token() }}">
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<title>Ciudadanos Atendidos</title>
@endsection

@section('contenido')

<div>
    <h3>Ciudadanos Atendidos / Anual </h3>
    <hr>
</div>
@if (session('excelente'))
<div class="alert alert-success" role="alert" id="alerta">
    <strong>Excelente</strong> {{session('excelente')}}
</div>
@endif
@if (session('error'))
<div class="alert alert-danger" role="alert" id="alerta">
    <strong>Error</strong> {{session('error')}}
</div>
@endif
<div class="panel-carta">
    <div class="d-flex flex-column justify-content-center">
        <h4 class="text-muted text-center"> Ciudadanos Atendidos por Mes <a href="" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#exampleModal"> + Agregar</a></h4>
        <div class="w-50 mb-3">
            <canvas id="myChart"></canvas>
        </div>
        <div class="table-responsive mb-3">

            <table class="table bg-dark text-white">
                <thead class="bg-dark text-light">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Mes</th>
                        <th scope="col">Atendidos</th>
                        <th scope="col">Editar</th>
                        <th scope="col">Borrar</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                    $contador=0;

                    @endphp
                    @foreach ($atendidos as $atendido )
                    @php

                    $contador+=1;
                    @endphp
                    <tr>
                        <td class="id">{{$atendido->id}}</th>
                        <td class="mes">{{$atendido->mes}}</td>
                        <td class="atendidos">{{$atendido->atendidos}}</td>
                        <td><a href="{{route('ciudadanos.actualizar.insertar',$atendido->id)}}" class="btn btn-primary bottom"><i class="lar la-eye"></i></a></td>
                        <td><a href="{{route('ciudadanos.borrar',$atendido->id)}}" class="btn btn btn-danger" onclick="borrar(this)"><i class="las la-trash-alt"></i></a></td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
            <div class="d-flex justify-content-center">
                {{ $atendidos->links() }}
            </div>
        </div>

    </div>
    <div class="d-flex justify-content-center">
        <div class="w-50">
            <form action="" method="post" id="formulario-actualizar-atendidos">
                @csrf
                <input type="hidden" id="id">
                <div class="row border mb-3">
                    <div class="col-md-6 mb-3">
                        <label for="mes" class="form-label">Mes : </label>
                        <select class="form-select" name="mes" id="mes" required>
                            <option disabled selected>----selecciones---</option>
                            <option value="Enero">Enero</option>
                            <option value="Febrero">Febrero</option>
                            <option value="Marzo">Marzo</option>
                            <option value="Abril">Abril</option>
                            <option value="Mayo">Mayo</option>
                            <option value="Junio">Junio</option>
                            <option value="Julio">Julio</option>
                            <option value="Agosto">Agosto</option>
                            <option value="Septiembre">Septiembre</option>
                            <option value="Octubre">Octubre</option>
                            <option value="Noviembre">Noviembre</option>
                            <option value="Diciembre">Diciembre</option>
                        </select>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="atendidos" class="form-label">Atendidos : </label>
                        <input type="number" name="atendidos" class="form-control" id="atendidos" required>
                    </div>
                    <div class="col-md-12 mb-3 text-end">
                        <a class="btn btn-warning" id="btn-actualizar">Actualzar</a>
                    </div>
                </div>
            </form>
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
                <form action="{{route('ciudadanos.insertar')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="text" value="{{Auth::user()->name}}" name="idUsuario">
                    <div class="row">
                        <div class="col-md-6">
                            <label for="mes" class="form-label">Mes : </label>
                            <select class="form-select" name="mes" required>
                                <option disabled selected>----selecciones---</option>
                                <option value="Enero">Enero</option>
                                <option value="Febrero">Febrero</option>
                                <option value="Marzo">Marzo</option>
                                <option value="Abril">Abril</option>
                                <option value="Mayo">Mayo</option>
                                <option value="Junio">Junio</option>
                                <option value="Julio">Julio</option>
                                <option value="Agosto">Agosto</option>
                                <option value="Septiembre">Septiembre</option>
                                <option value="Octubre">Octubre</option>
                                <option value="Noviembre">Noviembre</option>
                                <option value="Diciembre">Diciembre</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="atendidos" class="form-label">Cantidad atendida :</label>
                            <input type="number" name="atendidos" class="form-control" required>
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
@php $grafico_atendidos @endphp
@endsection

@section('js')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    const ctx = document.getElementById('myChart');
    var mes = JSON.parse('<?php echo $nuevo_mes; ?>');
    var atendidos = JSON.parse('<?php echo $nuevo_atendidos; ?>');
    new Chart(ctx, {
        type: 'bar',
        data: {
            labels: mes,
            datasets: [{
                label: 'Relación atendidos por mes.',
                data: atendidos,
                borderWidth: 1,
                backgroundColor: '#9BD0F5',
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>

<script>
    $(document).on('click', '.bottom', function(e) {
        e.preventDefault();
        var ruta = $(this).attr('href');
        var id = $(this).closest('tr').find('.id').text();
        var mes = $(this).closest('tr').find('.mes').text();
        var atendidos = $(this).closest('tr').find('.atendidos').text();

        $('#id').val(id);
        $('#mes').val(mes);
        $('#atendidos').val(atendidos);

        $('#formulario-actualizar-atendidos').attr('action', ruta);

    });

    $('#btn-actualizar').click(function(e) {
        e.preventDefault();
        $('#formulario-actualizar-atendidos').submit();
    });

    function borrar($url) {
        event.preventDefault();
        Swal.fire({
            title: '¿Segur@?',
            text: "Borrar registro",
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
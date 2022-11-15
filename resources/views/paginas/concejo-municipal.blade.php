@extends('Plantilla.paginas')
@section('css')
<title>Alcaldia</title>
@endsection
@section('contenido')
<main>
 
    <section class="normas">

        <div class="container">
            <div class="row py-4">
            <h2>Ordenanzas</h2>
                <div class="d-flex justify-content-center">
                    <div class="spinner-border" role="status" id="cargando-pdf">
                    </div>
                </div>
                <div class="col-md-4">
                    <h3 class="text-dark">Ultimos Ordenanzas...</h3>

                    <ul class="list-group">

                    </ul>



                </div>
                <div class="col-md-8">
                    <iframe src="" frameborder="0" width="100%" height="450px" id="visor-pdf"></iframe>
                </div>
            </div>
        </div>
    </section>
   
</main>
@endsection
@section('js')

<script>
    $(document).ready(function() {
        cargar_normas();
    });

    function cargar_normas() {
        $.ajax({
            type: 'GET',
            url: "{{route('cargar.normas')}}",
            success: function(response) {
                $('#cargando-pdf').toggleClass('spinner-border');
                let contenido_lista = '';
                $(response).each(function(index, item) {
                    contenido_lista += ' <li class="list-group-item"><a href="' + item['enlace'] + '" onclick="seleccionar(this)">' + item['titulo'] + '</a> </li>';
                });
                $('.normas .list-group').html(contenido_lista);
                $('#visor-pdf').attr('src', response[0]['enlace']);

                console.log(response);

            }
        });
    }

    function seleccionar(ref) {
        event.preventDefault();
        var enlace = ref;
        var visor = $('#visor-pdf').attr('src', enlace);
    }
</script>
@endsection
@extends('Plantilla.paginas')
@section('css')
<title>Desarrollo Social</title>
@endsection
@section('contenido')
<section class="py-5">
  <div class="container">
    <div class="row px-md-5">
      <div class="col-md-9">
        <div class="d-flex vista-titulo-noticia px-4 align-items-center">
          <span class=" rounded bg-warning"></span>
          <div class="p-3">
            <h3 class="color-oscuro h3 mb-0"> Dirección de Desarrollo Social. </h3>
            <p> <small class="text-muted "> Todos los procesos relacionados al servicios..</small> </p>
          </div>
        </div>
        <div class="px-md-5">
          <div class="accordion" id="accordionPanelsStayOpenExample">
            <div class="accordion-item">
              <h4 class="accordion-header" id="panelsStayOpen-headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                  Trámites de Cirugias
                </button>
              </h4>
              <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                <div class="accordion-body">
                  <strong class="text-uppercase text-dark">Requisitos:</strong>
                  <ul>
                    <li>Informe médico.</li>
                    <li>Copia de Cédula.</li>
                    <li>Exposición de Motivos.</li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h4 class="accordion-header" id="panelsStayOpen-headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                  Donaciones de Material de Construcción
                </button>
              </h4>
              <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
                <div class="accordion-body">
                  <strong>Requisitos.</strong>
                  <ul>
                    <li>Foto de Inspección técnica.</li>
                    <li>Copia de Cédula. </li>
                    <li>Exposición de Motivos. </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h4 class="accordion-header" id="panelsStayOpen-headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                  Ayudas Técnicas
                </button>
              </h4>
              <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
                <div class="accordion-body">
                  <strong>Requisitos.</strong>
                  <ul>
                    <li>Informe Médico. </li>
                    <li>Copia de Cédula. </li>
                    <li>Exposición de Motivos.</li>
                  </ul>
                </div>
              </div>
            </div>


          </div>
        </div>
      </div>
      <aside class="col-md-3 ">
        <div class="contenedor-aside">

          <div class="ventana-twitter">
            <h3>twitter</h3>
            <div>
              <a class="twitter-timeline" data-lang="en" data-width="241" data-height="450" href="https://twitter.com/LuisMendozaCh?ref_src=twsrc%5Etfw" data-tweet-limit="5">Luis Mendoza</a>
              <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
            </div>
          </div>

        </div>
      </aside>
    </div>
  </div>
</section>
@endsection
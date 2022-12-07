@extends('Plantilla.paginas')
@section('css')
<title>Vivienda</title>
@endsection
@section('contenido')
<section class="py-5">
  <div class="container">
    <div class="row px-md-5">
      <div class="col-md-9">
        <div class="d-flex vista-titulo-noticia px-4 align-items-center">
          <span class=" rounded bg-warning"></span>
          <div class="p-3">
            <h3 class="color-oscuro h3 mb-0"> Vivienda Venezuela. </h3>
            <p> <small class="text-muted "> Todos los procesos relacionados al servicios..</small> </p>
          </div>
        </div>
        <div class="px-md-5">
          <div class="text-center">
            <img src="{{asset('img/fijas/mision-vivienda.webp')}}" alt="Somos Venezuela" width="190px" height="auto">
          </div>
          <p> Programa de las misiones bolivarianas del gobierno venezolano para proporcionar vivienda a personas que viven en condiciones precarias. El programa fue lanzado por la administración de Hugo Chávez en 2011 y tenía previsto construir 350.000 viviendas para fines de 2012</p>
          <h4>Obejtivo</h4>
          <p>Cumplir el hito histórico de construir 5 millones de hogares en revolución, los cuales se traducen en justicia social, compromiso, lealtad, esfuerzo, amor y esperanza, es una de las tantas muestras de que la lucha por la independencia de Venezuela</p>
          <div class="accordion" id="accordionPanelsStayOpenExample">
            <div class="accordion-item">
              <h4 class="accordion-header" id="panelsStayOpen-headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                  Expediente de Protocolización.
                </button>
              </h4>
              <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                <div class="accordion-body">
                  <strong class="text-uppercase text-dark">Descargar :</strong>
                  <a href="{{asset('planillas/protocolizacion.xlsx')}}" class="btn btn-danger">Requisitos.</a>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h4 class="accordion-header" id="panelsStayOpen-headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                  Balance General para Solicitante y Cosolicitante.
                </button>
              </h4>
              <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
                <div class="accordion-body">
                  <strong class="text-uppercase text-dark">Descargar :</strong>
                  <a href="{{asset('planillas/balance-general.xlsx')}}" class="btn btn-danger">Requisitos.</a>
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
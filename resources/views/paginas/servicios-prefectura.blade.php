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
              <h3 class="color-oscuro h3 mb-0"> Prefectura. </h3>
              <p> <small class="text-muted "> Todos los procesos relacionados al servicios..</small> </p>
            </div>
          </div>
          <div class="px-md-5">
            <h4>Banco Bicentenario</h4>
            <p><strong>Nro . de Cuenta : </strong>0175 - 0001 - 5100 - 0012 - 4383</p>
            <p><strong>A nombre de  : </strong> Gobernación del Estado Táchira</p>
            <div class="accordion" id="accordionPanelsStayOpenExample">
              <div class="accordion-item">
                <h4 class="accordion-header" id="panelsStayOpen-headingOne">
                  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                   Asiento Permanente
                  </button>
                </h4>
                <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                  <div class="accordion-body">
                    <strong class="text-uppercase text-dark">Requisitos:</strong>
                    <ul>
                      <li>Copia de Cédula de identidad del Fallecido.</li>
                      <li>Copia de Cédula Catastral del Fallecido.</li>
                      <li>Copia del Acta de Defunción.</li>
                      <li>Constancia de residencia por el concejo comunal a nombre del fallecido.</li>
                      <li>Copia de Cédula del solicitante.</li>
                      <li>2 testigos sin lazos familiares mayores de edad con copia de cédula y recibo público cada uno (DEBEN ASISTIR LOS TESTIGOS).</li>
                      <li>Depósitos de 0.20 bolivares.</li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h4 class="accordion-header" id="panelsStayOpen-headingTwo">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                    Constancia de Buena Conducta.
                  </button>
                </h4>
                <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
                  <div class="accordion-body">
                    <strong>Requisitos.</strong>
                    <ul>
                      <li>Copia de cédula del solicitante (verificado por CIPOL) o antecedentes penales si los posee.</li>
                      <li>Constancia de buena conducta emitida por el consejo comunal.</li>
                      <li>Recibo público o RIF del solicitante.</li>
                      <li>2 testigos sin lazos familiares mayores de edad con copia de cédula y recibo público cada uno (DEBEN ASISTIR LOS TESTIGOS).</li>
                      <li>4 depósitos de 0.20 bolivares.</li>
                     
                    </ul>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h4 class="accordion-header" id="panelsStayOpen-headingThree">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                   Permiso de Mudanza
                  </button>
                </h4>
                <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
                  <div class="accordion-body">
                    <strong>Requisitos.</strong>
                    <ul>
                      <li>Copia de cédula de identidad del solicitante. </li>
                      <li>Recibo público o RIF del solicitante. </li>
                      <li>Copia de cédula del conductor. </li>
                      <li>Copia del certificado médico del conductor. </li>
                      <li>Copia del registro del vehículo. </li>
                      <li>Lista de enseres. </li>
                      <li>4 depósitos de 0.20 bolivares. </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h4 class="accordion-header" id="panelsStayOpen-headingFour">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseFour" aria-expanded="false" aria-controls="panelsStayOpen-collapseFour">
                   Fe de Vida
                  </button>
                </h4>
                <div id="panelsStayOpen-collapseFour" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingFour">
                  <div class="accordion-body">
                    <strong>Requisitos.</strong>
                    <ul>
                      <li>Copia de cédula de identidad del Solicitante.</li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h4 class="accordion-header" id="panelsStayOpen-heaFive">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseFive" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                   Constancia de Pobreza
                  </button>
                </h4>
                <div id="panelsStayOpen-collapseFive" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingFive">
                  <div class="accordion-body">
                    <strong>Requisitos.</strong>
                    <ul>
                      <li>Copia de cédula de identidad del Solicitante.</li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h4 class="accordion-header" id="panelsStayOpen-heaSix">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseSix" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                   Constancia de Dependencia Económica.
                  </button>
                </h4>
                <div id="panelsStayOpen-collapseSix" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingSix">
                  <div class="accordion-body">
                    <strong>Requisitos.</strong>
                    <ul>
                      <li>Copia de cédula de identidad del Solicitante.</li>
                      <li>Copia de cédula de identidad del Alumno.</li>
                      <li>2 testigos sin lazos familiares mayores de edad con copia de cédula y recibo público cada uno (DEBEN ASISTIR LOS TESTIGOS).</li>
                      <li>Constancia de trabajo del representante.</li>
                      <li>Constancia de residencia por el cosejo comunal.</li>
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
              <a class="twitter-timeline" data-lang="en" data-width="241" data-height="450" href="https://twitter.com/LuisMendozaCh?ref_src=twsrc%5Etfw"  data-tweet-limit="5">Luis Mendoza</a>
                <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
              </div>
            </div>

          </div>
        </aside>
      </div>
    </div>
  </section>
@endsection
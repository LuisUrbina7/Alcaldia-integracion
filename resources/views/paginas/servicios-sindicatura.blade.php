@extends('Plantilla.paginas')
@section('css')
<title>Sindicatura</title>
@endsection
@section('contenido')
<main>
  <section>
    <div class="container">
      <div class="row py-5 px-md-5">
        <div class="col-md-9">
          <div class="d-flex vista-titulo-noticia px-4 align-items-center">
            <span class=" rounded bg-warning"></span>
            <div class="p-3">
              <h3 class="color-oscuro h3 mb-0">Sindicatura Municipal. </h3>
              <p> <small class="text-muted "> Todos los procesos relacionados al servicios..</small> </p>
            </div>
          </div>
          <div class="px-md-5">
            <h4>Mision</h4>
            <p>Asesorar juridicamente al alcalde y al Concejo Municipal, en todo lo concerniente al Ordenamiento Juridico con la finalidad de que la gestión este enmarcada en la vigencia y legalidad de la Constitución y demás leyes de la República Bolivariana de Venezuela e igualmente prestar apoyo legal al Poder Popular y comunidad organizada en general, en lo concerniente a las situaciones donde se vean afectados los intereses propios y especificamente los del Municipio.</p>
            <h4>Vision</h4>
            <p>Lograr, en coordinación y previa aprobación del Consejo Municipal, adaptar el ordenamiento Juridico vigente a la realidad actual de nuestro Municipio, en lo que respecta a la CREACIÓN, REVISIÓN y ACTUALIZACIÓN, de las Ordenanzas Municipales, para que de esta manera exista un correcto cumplimiento de la normativa y así crear reglas de convivencia ciudadana que vayan en pro del progreso y desarrollo social de todos los habitantes del Municipio Capacho Nuevo.</p>
            <h4>Objetivo.</h4>
            <p>Dar respuesta oportuna los diferentes trámites que se realizan ante la Oficina como Contratos de Arrendamiento, solicites de Contratos de Arrendamiento, Renovaciones en sus diferentes modalidades, autorizaciones, de conformidad a lo establecido en la Ordenanza sobre Terrenos Ejidos, Baldios y Propios del Municipio Capacho Nuevo del Estado Táchira, así como atender las diferentes problemáticas presentadas por los habitantes del Municipio en lo referentes a terrenos ejidos, baldíos, a fin de que los administrados obtengan soluciones viables y de esta manera dar verdadera justicia social, todo enmarcado dentro de la Constitución de la REPUBLICA Bolivariana de Venezuela leyes y ordenanzas Municipales.</p>

            <span class="text-muted p-3 mb-3">Nota: Para cualquier tramite traer el ùltimo contrato de arrendamiento.</span>
            <div class="accordion" id="accordionPanelsStayOpenExample">
              <div class="accordion-item">
                <h4 class="accordion-header" id="panelsStayOpen-headingOne">
                  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                    Contrato de Arrendamiento Primera Vez.
                  </button>
                </h4>
                <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                  <div class="accordion-body">
                    <strong class="text-uppercase text-dark">Requisitos:</strong>
                    <ul>
                      <li>Copia de la cédula de identidad y RIF del solicitante.</li>
                      <li>Justificativo de testigo y/o Registro de mejoras.</li>
                      <li> Copia del último recibo de Aseo Urbano.</li>
                      <li>Solvencia administrativa (Expedida Por Hacienda) Levantamiento Topográfico.</li>
                      <li>Una (1) carpeta marrón Oficio con gancho.</li>
                      <li>Cinco (5) hojas blancas tipo oficio.</li>
                      <li>Fotografía del terreno y/o vivienda.</li>
                      <li>Deposito Bancario Timbre Fiscal. </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h4 class="accordion-header" id="panelsStayOpen-headingTwo">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                    Renovaciòn de Contrato de Arrendamiento.
                  </button>
                </h4>
                <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
                  <div class="accordion-body">
                    <strong>Requisitos.</strong>
                    <ul>
                      <li> Copia de la cédula de Identidad y RIF del solicitante.</li>
                      <li>Copia del contrato de arrendamiento.</li>
                      <li>Copla del Registro de mejoras (si posee).</li>
                      <li>Copia del último recibo del canon de arrendamiento</li>
                      <li> Copia del último recibo de aseo urbano.</li>
                      <li>Solvencia administrativa(Expedida Por Hacienda) .</li>
                      <li>Levantamiento topográfico.</li>
                      <li>Cinco (5) hojas blancas tipo oficio.</li>
                      <li> Una (1) carpeta marrón Oficio con gancho.</li>
                      <li>Fotografía del terreno y/o vivienda.</li>
                      <li>Deposito Bancario Timbre Fiscal.</li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h4 class="accordion-header" id="panelsStayOpen-headingThree">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                    Permiso de Transpaso de Terreno de Arrendamiento.
                  </button>
                </h4>
                <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
                  <div class="accordion-body">
                    <strong>Requisitos.</strong>
                    <ul>
                      <li>Copia de la cédula de identidad del solicitante y Rif.</li>
                      <li>Copia del contrato de arrendamiento.</li>
                      <li>Copia de documento de Venta de mejoras Debidamente registrado. </li>
                      <li>Copia del último recibo del canon de arrendamiento. </li>
                      <li>Copia del último recibo de aseo urbano </li>
                      <li>Solvencia administrativa(Expedida Por Hacienda) </li>
                      <li>Levantamiento topográfico a Escala tamaño doble carta </li>
                      <li>Cinco (5) hojas blancas tipo oficio </li>
                      <li>Fotografía del terreno y/o vivienda </li>
                      <li>Planilla Sucesoral Según Sea El Caso </li>
                      <li> Deposito Bancario Timbre Fiscal </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h4 class="accordion-header" id="panelsStayOpen-headingThree">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panel7" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                    Rectificaciòn de Contrato de Arrendamiento.
                  </button>
                </h4>
                <div id="panel7" class="accordion-collapse collapse" aria-labelledby="panel7">
                  <div class="accordion-body">
                    <strong>Requisitos.</strong>
                    <ul>
                      <li>Copia de Cèdula de Identidad y RIF del solicitante.</li>
                      <li>Copia del Contrato de Arrendamiento.</li>
                      <li>Copia del Registro de Mejorar (si posee).</li>
                      <li>Copia del ùltimo recibo del canon de arrendamiento.</li>
                      <li>Copia del ùltimo recibo de Aseo Urbano.</li>
                      <li>Solvencia Administrativa (Expedida por Hacienda).</li>
                      <li>Levantamiento Topogràfico.</li>
                      <li>Cinco (5) hojas Blancas tipo Oficio.</li>
                      <li>Fotografia del terreno o Vivienda.</li>
                      <li>Deposito Bancario Timbre Fiscal.</li>
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
</main>
@endsection
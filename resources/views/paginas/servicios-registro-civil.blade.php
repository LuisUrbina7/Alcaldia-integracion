@extends('Plantilla.paginas')
@section('css')
<title>Registro Civil</title>
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
              <h3 class="color-oscuro h3 mb-0"> Registro Civil. </h3>
              <p> <small class="text-muted "> Todos los procesos relacionados al servicios..</small> </p>
            </div>
          </div>
          <div class="px-md-5">

            <div class="accordion" id="accordionPanelsStayOpenExample">
              <div class="accordion-item">
                <h4 class="accordion-header" id="panelsStayOpen-headingOne">
                  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                    Acta de Nacimiento.
                  </button>
                </h4>
                <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                  <div class="accordion-body">
                    <strong class="text-uppercase text-dark">Requisitos:</strong>

                    <ul>
                      <li>Carta Dirigida al Alcalde solicitando la Licencia </li>
                      <li> Registro Mercantil y actas con últimas modificaciones</li>
                      <li> Cedula de Identidad del Representante Legal. </li>
                      <li> Registro de Información Fiscal del Contribuyente y Socios. </li>
                      <li> Solvencia Municipal Administrativa. </li>
                      <li>Informe de Protección Civil. </li>
                      <li> Renovación Permiso Sanitario.</li>
                      <li>Conformación de Uso y Habitabilidad por Urbanismo y Catastro. </li>
                      <li> Copia del Documento de Propiedad o Contrato del local.</li>
                      <li> Aval emitido por el consejo comunal. </li>
                      <li> 5 fotos del establecimiento 3 Interior, 2 Fachada; caso de Restaurant - cafes - fuentes de Soda, 3 fotos de la cocina.</li>
                      <li> Copia y Original de la Licencia de Actividades Económicas de expendio y comercialización de bebidas económicas.</li>
                      <li>Cedula Catastral, Plano o croquis de ubicación del local </li>
                      <li>Datos: indicando nombre de los socios , cedula , nacionalidad, dirección de habitación y teléfono. Distancia exacta que se encuentra el establecimiento con respecto a: Cuarteles - CDI - Ambulatorios -Clínicas - Iglesias - Institutos educativos Parques. </li>
                      <li>Carta Aval de Permiso de Funcionamiento Consejo Comunal.</li>
                      <li>Restaurant - Café - 3 Petros ) -Posadas, Hoteles( 5 Petros) - Demas - (4 Petros) </li>
                      <li>Original y copia del Deposito</li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h4 class="accordion-header" id="panelsStayOpen-headingTwo">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                    Acta de Defunciòn.
                  </button>
                </h4>
                <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
                  <div class="accordion-body">
                    <strong>Requisitos.</strong>
                    <ul>
                      <li>Planilla de Solicitud de Registro y Autorización </li>
                      <li>Registro Mercantil y actas con últimas modificaciones </li>
                      <li>Cedula de Identidad del Representante Legal. </li>
                      <li>Registro de Información Fiscal del Contribuyente. </li>
                      <li>Registro de Información Fiscal de los socios. </li>
                      <li>Solvencia Municipal Administrativa. </li>
                      <li> Informe de Protección Civil</li>
                      <li>Renovación Permiso Sanitario</li>
                      <li> Conformación de Uso y Habitabilidad por la oficina Municipal de Urbanismo y Catastro.</li>
                      <li>Copia del Documento de Propiedad o Contrato. </li>
                      <li>5 fotos del establecimiento3 Interior 2 Fachada en caso de Restaurant, cafés, fuentes de Soda 3 fotos de la cocina</li>
                      <li>Copia y Original de la Licencia de Actividades Económicas</li>
                      <li>Carta Aval Permiso de Funcionamiento Consejo Comunal.</li>
                      <li>hoteles - Posada ( 5 Petros) - Demas (4 Petros)</li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h4 class="accordion-header" id="panelsStayOpen-headingThree">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                    UEH.
                  </button>
                </h4>
                <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
                  <div class="accordion-body">
                    <strong>Requisitos.</strong>
                    <ul>
                      <li>Carta dirigida Hacienda Municipal</li>
                      <li>Pago de Trimestre.</li>
                      <li>Copia de Cèdula y rif.</li>
                      <li>Documento del Vehiculo.</li>
                      <li>Revisado ante el I.N.T.T</li>
                      <li>Boletos para ser Sellados.</li>
                      <li>Cancelar aseo.</li>
                      <li>Cancelar Solvencia.</li>
                      <li>Valor de permiso 0.50 petros.</li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h4 class="accordion-header" id="panelsStayOpen-headingThree">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panel2" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                    Actas de Matrimonio.
                  </button>
                </h4>
                <div id="panel2" class="accordion-collapse collapse" aria-labelledby="panel2">
                  <div class="accordion-body">
                    <strong>Requisitos.</strong>
                    <ul>
                      <li>Informe de aprobaciòn de ubicaciòn, emitido por la Direcciòn de Urbanismo y Catastro -3 meses.</li>
                      <li>Carta de Solicitud Dirigida a Hacienda Municipal.</li>
                      <li>1 Fotografìa.</li>
                      <li>Copia de cèdula y rif Vigente.</li>
                      <li>Copia del recibo de aseo Urbano.</li>
                      <li>Pago de Solvencia Municipal.</li>
                      <li>Carta Aval por el consejo Comunal.</li>
                      <li>En caso e Manipulacion de Alimentos (Certificado de Salud).</li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h4 class="accordion-header" id="panelsStayOpen-headingThree">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panel4" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                    Actas certificadas.
                  </button>
                </h4>
                <div id="panel4" class="accordion-collapse collapse" aria-labelledby="panel4">
                  <div class="accordion-body">
                    <strong>Requisitos.</strong>
                    <ul>
                      <li>Actas de Nacimiento.</li>
                      <li>Actas de Defunciòn.</li>
                      <li>Actas de Matrimonio.</li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h4 class="accordion-header" id="panelsStayOpen-headingThree">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panel5" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                    Manifestaciòn de Voluntad.
                  </button>
                </h4>
                <div id="panel5" class="accordion-collapse collapse" aria-labelledby="panel5">
                  <div class="accordion-body">
                    <strong>Obras Mayor.</strong>
                    <ul>
                      <li>Carta de Solicitud de Permiso Dirigida a la Direcciòn de Hacienda.</li>
                      <li>Carta Aval consejo Comunal.</li>
                      <li>Copia de la Cèdula de identidad del representante Legible.</li>
                      <li>Copia del Informe Mèdico.</li>
                      <li>Copia del recibo del aseo Actual.</li>
                      <li>Con todos los Recaudos Cancelar.</li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h4 class="accordion-header" id="panelsStayOpen-headingThree">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panel6" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                    Celebraciòn de Matrimonios.
                  </button>
                </h4>
                <div id="panel6" class="accordion-collapse collapse" aria-labelledby="panel6">
                  <div class="accordion-body">
                    <strong>Requisitos</strong>
                    <ul>
                      <li>Declaración del I.S.L.R o Declaración de Iva</li>
                      <li>1 Fotografía</li>
                      <li>Fotocopia De Rif Actualizado </li>
                      <li>Fotocopia De Cedula</li>
                      <li>1 Cartulina Blanca</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
        <aside class="col-md-3 ">
          <div class="contenedor-aside">
            <div class="noticias-recientes">
              <h3>Recientes</h3>
              <a href="" class="link d-block">El Alcalde Luis Mendoza realiza dialogo con los comerciantes.</a>
              <a href="" class="link d-block">Programa Radial La Tertulia.</a>
              <a href="" class="link d-block">Recaudaciòn de impuesto.</a>

            </div>
            <div class="ventana-twitter">
              <h3>twitter</h3>
              <div>
                <a class="twitter-timeline" href="https://twitter.com/luismendozach?lang=es">Tweets
                  by TwitterDev</a>
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
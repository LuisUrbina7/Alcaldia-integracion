@extends('Plantilla.paginas')
@section('css')
<title>Hacienda Municipal</title>
@endsection
@section('contenido')
  <section class="py-5">
    <div class="container">
      <div class="row px-md-5">
        <div class="col-md-9">
          <div class="d-flex vista-titulo-noticia px-4 align-items-center">
            <span class=" rounded bg-warning"></span>
            <div class="p-3">
              <h3 class="color-oscuro h3 mb-0"> Direcciòn de Hacienda Municipal. </h3>
              <p> <small class="text-muted "> Todos los procesos relacionados al servicios..</small> </p>
            </div>
          </div>
          <div class="px-md-5">
            <h4>MISION </h4>
            <p>Emprender las Acciones para el Desarrollo, programación y Control de las funciones tributarias siempre con apego a los principios de Celeridad, Legalidad, Eficiencia, Solvencia, Transparencia, Rendición de Cuentas, Responsabilidad y Equilibrio Fiscal" coordinando las acciones con la Hacienda Publica Nacional y Estadal .</p>
            <h4>VISION</h4>
            <p>Ser un modelo de Administración Tributaria Municipal sistematizada, comprometida con el mejoramiento del servicio Oportuno y adecuado para los contribuyentes del Municipi Capacho Nuevo asegurando el cabal cumplimiento de las normas tributarias. </p>
            <h4>OBJETIVO GENERAL </h4>
            <p>La Administración Tributaria Municipal tiene como objetivo velar por la aplicación de las diferentes Ordenanzas Tributarias Municipales vigentes en el Municipio, así comio la determinación de Fiscalización y Auditoria de los diferentes Tributos Municipales y $us Wsesoros.</p>

            <div class="accordion" id="accordionPanelsStayOpenExample">
              <div class="accordion-item">
                <h4 class="accordion-header" id="panelsStayOpen-headingOne">
                  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                    Licencia de Licores Primera Vez.
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
                    Renovaciòn de Licencia de Licores
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
                    Permiso para Rifas.
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
                    Permisos de Funcionamiento.
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
                    Patente por Primera vez.
                  </button>
                </h4>
                <div id="panel4" class="accordion-collapse collapse" aria-labelledby="panel4">
                  <div class="accordion-body">
                    <strong>Requisitos.</strong>
                    <ul>
                      <li>Registro Mercantil Copia y Original.</li>
                      <li>Registro de Informaciòn Fiscal.</li>
                      <li>Cèdula de Identidad Representante Legal.</li>
                      <li>Solvencia Municipal Administrativa.</li>
                      <li>Cèdula Catastral.</li>
                      <li>Levantamiento Topográfico</li>
                      <li>Conformación de Uso y Habitabilidad</li>
                      <li>Informe de Protección Civil</li>
                      <li>Carta Aval de Permiso de Funcionamiento del Consejo Comunal.</li>
                      <li>Copia de Documento de Propiedad o Cotrato.</li>
                      <li>5 Fotos del establecimiento - 3 interior - 2 Fachada ; en caso Restaurant - Cafè - Fuentes de Soda 3 Fotos de la Cocina.</li>
                      <li>Carta de Inicio de Actividades Firmadas y selladas.</li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h4 class="accordion-header" id="panelsStayOpen-headingThree">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panel5" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                    Permiso para vendimias.
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
                    Renovacion de Patente.
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
              <div class="accordion-item">
                <h4 class="accordion-header" id="panelsStayOpen-headingThree">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panel7" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                    Solvencia Administrativa.
                  </button>
                </h4>
                <div id="panel7" class="accordion-collapse collapse" aria-labelledby="panel7">
                  <div class="accordion-body">
                    <strong>Requisitos.</strong>
                    <ul>
                      <li>Copia de Cedula de Identidad.</li>
                      <li>Copia del R.I.F</li>
                      <li>Copia del recibo de aseo urbano</li>
                      <li>Con todos los recaudos cancelar Pago de Solvencia Municipal.</li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h4 class="accordion-header" id="panelsStayOpen-headingThree">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panel8" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                    Solvencia de Registro.
                  </button>
                </h4>
                <div id="panel8" class="accordion-collapse collapse" aria-labelledby="panel7">
                  <div class="accordion-body">
                    <strong>Requisitos.</strong>
                    <ul>
                      <li> Copla de Cedula de identidad del Vendedor y Comprador.</li>
                      <li>Copia del R.IP del Vendedor y Comprador.</li>
                      <li>Copia y Original del Documento de la Venta.</li>
                      <li>Cedula Catastral vigente.</li>
                      <li>Levantamiento Topográfico.</li>
                      <li>Estar solvente en aseo urbano.</li>
                      <li>Con todos los recaudos cancelar el Pago.</li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h4 class="accordion-header" id="panelsStayOpen-headingThree">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panel9" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                    Puesto de Mercado.
                  </button>
                </h4>
                <div id="panel9" class="accordion-collapse collapse" aria-labelledby="panel9">
                  <div class="accordion-body">
                    <strong>Requisitos.</strong>
                    <ul>
                      <li>Carta de Solicitud dirigida a Hacienda.</li>
                      <li>copia Cedula de identidad, Rif Vigentes.</li>
                      <li>1 Fotografía de Frente.</li>
                      <li>Carta de Residencia por Consejo comunal.</li>
                      <li> Certificado de Salud autoridad Sanitaria.</li>
                      <li>Certificado de Manipulación de Alimentos.</li>
                      <li>Copia Recibo de Pago del Aseo Municipal.</li>
                      <li>Solvencia Municipal.</li>
                      <li>En Caso de que el Solicitante Sea menor de edad Traer Permiso por el CEPNA.</li>
                      <li>Traer Requisitos en carpeta Marrón con gancho.</li>
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
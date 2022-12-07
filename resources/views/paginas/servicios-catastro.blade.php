@extends('Plantilla.paginas')
@section('css')
<title>Catastro</title>
@endsection
@section('contenido')
<section class="py-5">
  <div class="container">
    <div class="row px-md-5">
      <div class="col-md-9">
        <div class="d-flex vista-titulo-noticia px-4 align-items-center">
          <span class=" rounded bg-warning"></span>
          <div class="p-3">
            <h3 class="color-oscuro h3 mb-0"> Catastro </h3>
            <p> <small class="text-muted "> Todos los procesos relacionados al servicios..</small> </p>
          </div>
        </div>
        <div class="px-md-5">

          <div class="accordion" id="accordionPanelsStayOpenExample">
            <div class="accordion-item">
              <h4 class="accordion-header" id="panelsStayOpen-headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                  Permiso Para Movimiento de Tierra
                </button>
              </h4>
              <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                <div class="accordion-body">
                  <strong class="text-uppercase text-dark">Requisitos:</strong>
                  <ul>
                    <li>Copia de la Cedula de Catastral Vigente. </li>
                    <li> Copia de la Cedula de Identidad legible.</li>
                    <li> Copia del RIF actualizado y legible. </li>
                    <li> Levantamiento Topográfico original y modificado </li>
                    <li> firmado y sellado por el profesional. </li>
                    <li>Memoria descriptiva, cálculos secciones </li>
                    <li> transversales y longitudinales.</li>
                    <li>Inspección emitida por protección civil (original). </li>
                    <li> Estudio de impacto ambiental acreditado por el ministerio de eco socialismo. (en caso de ser " requerido).</li>
                    <li> Aval emitido por el consejo comunal. </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h4 class="accordion-header" id="panelsStayOpen-headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                  Solvencia para Registro
                </button>
              </h4>
              <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
                <div class="accordion-body">
                  <strong>Requisitos.</strong>
                  <ul>
                    <li>Sello de Solvencia Municipal emitido por la oficina de hacienda</li>
                    <li>Copia de la cedula de identidad legible del comprador y vendedor. </li>
                    <li>Copia del documento de propiedad registrado. </li>
                    <li>Original y copia del documento a registrar. </li>
                    <li>Levantamiento topográfico original que indique el área a vender y/o restante Coordenadas UTM, referencias al sistema REGVEN, cuadro de coordenadas, mesuras, acotaciones, colindantes, nortes, distancias de servicios y vialidad, área total, área de Construcción para cada plano o niveles existentes, escala digitalizado en AUTOCAD, firma y sello húmedo del topógrafo colegiado. </li>
                    <li>Copia de la cedula catastral vigente. </li>
                    <li>En caso de la venta forma parte de mayor extensión presentar variables urbanas.</li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h4 class="accordion-header" id="panelsStayOpen-headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                  Cédula Catastral por primera vez.
                </button>
              </h4>
              <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
                <div class="accordion-body">
                  <strong>Requisitos.</strong>
                  <ul>
                    <li>Copia de la Cedula de Identidad Legible </li>
                    <li>Copia del RIF Legible y actualizado </li>
                    <li>Copia del documento de propiedad o contrato de arrendamiento vigente en caso de terreno Ejido.
                    </li>
                    <li>Levantamiento topográfico que indique la Coordenadas UTM, referencias al sistema REGVEN, cuadro de coordenadas, mesuras, acotaciones, colindantes, nortes, distancias de servicios y vialidad, área total, área de Construcción para cada plano O. niveles existentes, escala digitalizado en AUTOCAD, firma y sello húmedo del topógrato colegiado. </li>
                    <li> Inspección Realizada por el fiscal de Control Urbano.</li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h4 class="accordion-header" id="panelsStayOpen-headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panel2" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                  Renovación de Cédula Catastral
                </button>
              </h4>
              <div id="panel2" class="accordion-collapse collapse" aria-labelledby="panel2">
                <div class="accordion-body">
                  <strong>Requisitos.</strong>
                  <ul>
                    <li>Copia de la Cedula de Identidad Legible </li>
                    <li>Copia del RIF Legible y actualizado </li>
                    <li>Copia del documento de propiedad o contrato de arrendamiento vigente en caso de terreno Ejido.
                    </li>
                    <li>Levantamiento topográfico que indique la Coordenadas UTM, referencias al sistema REGVEN, cuadro de coordenadas, mesuras, acotaciones, colindantes, nortes, distancias de servicios y vialidad, área total, área de Construcción para cada plano O. niveles existentes, escala digitalizado en AUTOCAD, firma y sello húmedo del topógrato colegiado. (Opcional)</li>
                    <li> Inspección Realizada por el fiscal de Control Urbano.</li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h4 class="accordion-header" id="panelsStayOpen-headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panel4" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                  Permiso de Funcionamiento Linea de Transporte.
                </button>
              </h4>
              <div id="panel4" class="accordion-collapse collapse" aria-labelledby="panel4">
                <div class="accordion-body">
                  <strong>Requisitos.</strong>
                  <ul>
                    <li>Croquis de la ruta (por puesto) </li>
                    <li>DT9 --------------- MTC </li>
                    <li>Seguro de responsabilidad civil vigente.
                    </li>
                    <li>Copia del documento Constitutivo </li>
                    <li> Lista de Directivos Vigente (junta directiva) </li>
                    <li>Aval emitido del Consejo Comunal.
                    </li>
                    <li>Pago de Trimestres Municipales. </li>
                    <li>Licencia de conducir </li>
                    <li>Certificado Medico. </li>
                    <li>Copia de la Cedula de Identidad </li>
                    <li>Autorización de Conducir Vehículo si no es propietario </li>
                    <li>Copia del Revisado de Vehículo.</li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h4 class="accordion-header" id="panelsStayOpen-headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panel5" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                  Permiso de Construcción
                </button>
              </h4>
              <div id="panel5" class="accordion-collapse collapse" aria-labelledby="panel5">
                <div class="accordion-body">
                  <strong>Obras Mayor.</strong>
                  <ul>
                    <li>Copia de la cedula de identidad legible. </li>
                    <li>Copia del RIF actualizado y legible. </li>
                    <li>Factibilidad de Servicio emitido por: Corpoelec e Hidrosuroeste.
                    </li>
                    <li>Variables Urbanas.
                    </li>
                    <li>Solvencia de la Alcaldía Municipal. </li>
                    <li>Memoria descriptiva del Proyecto a Ejecutar, firmada por el Ingeniero responsable de la obra. </li>
                    <li>Planos de Arquitectura, Instalaciones Sanitarias, Electricidad y Estructura firmado por el Ingeniero o Arquitecto responsable de la obra. </li>
                    <li>Estudio de suelo o estudio de Impacto Ambiental. (en caso de ser requerido) </li>
                    <li>Copia del Documento de Propiedad. </li>
                    <li> Levantamiento Topográfico Actualizado. </li>
                    <li>Aval emitido por el Consejo Comunal.</li>
                  </ul>
                  <strong>Obras Menor.</strong>
                  <ul>
                    <li>Copia de la cedula de identidad legible.
                    </li>
                    <li> Copia del RIF actualizado y legible.
                    </li>
                    <li> Copia del Documento de Propiedad. </li>
                    <li>Aval emitido por el Consejo Comunal.
                    </li>
                    <li>Memoria descriptiva del tipo de construcción a ejecutar. </li>
                    <li>Planos del Proyecto firmado por el Ingeniero o Arquitecto. (en caso de ser requerido).</li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h4 class="accordion-header" id="panelsStayOpen-headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panel6" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                  Permiso Provicional de Adjudicación de Ventas en la Vía Pública. 90 - dias
                </button>
              </h4>
              <div id="panel6" class="accordion-collapse collapse" aria-labelledby="panel6">
                <div class="accordion-body">
                  <strong>Requisitos</strong>
                  <ul>
                    <li>Copia de la Cedula de Identidad Legible. </li>
                    <li>Copia del RIF Actualizado y Legible. </li>
                    <li>Copia del Documento de Propiedad. </li>
                    <li>Aval emitido por el Consejo Comunal. </li>
                    <li>Certificado de Manipulación de Alimentos (si es
                      necesario)</li>
                    <li>Pago del Impuesto</li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h4 class="accordion-header" id="panelsStayOpen-headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panel7" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                  Cnstancia de Conformación de Uso
                </button>
              </h4>
              <div id="panel7" class="accordion-collapse collapse" aria-labelledby="panel7">
                <div class="accordion-body">
                  <strong>Requisitos.</strong>
                  <ul>
                    <li>Copia de la Cedula de Catastral Vigente </li>
                    <li>Copia del RIF actualizado y legible
                    </li>
                    <li>Copia del RIF comercial.
                    </li>
                    <li>Copia del documento de propiedad o contrato de
                      arrendamiento (en caso de ser terreno Ejido)</li>
                    <li>Copia del Documento Registro de Comercio.</li>
                    <li> Permiso emitido por el Cuerpo de Bomberos o “Protección Civil. </li>
                    <li>Aval emitido por el Consejo Comunal. </li>
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
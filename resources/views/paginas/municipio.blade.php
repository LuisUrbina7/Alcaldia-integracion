@extends('plantilla.paginas')
@section('css')
<title>Municipio</title>
@endsection
@section('contenido')
<section class="municipio-simbolos">
    <div class="container">
        <div class="row pt-5">
            <div class="col-md-6 text-center ">
                <img src="img/fijas/LOGO VERTICAL NUEVO.webp" alt="escudo" width="237px">
                <p> <small class="text-muted">Escudo</small></p>
            </div>
            <div class="col-md-6 text-center ">
                <img src="img/fijas/bandera.webp" alt="bandera" width="350px">
                <p> <small class="text-muted">Bandera</small></p>
            </div>
        </div>
    </div>
</section>
<section class="municipio-historia ">
    <div class="container">
        <div class="row px-md-5 py-5">
            <h2 class="sub-raya mb-3">Historia</h2>
            <div class="col-12 ">
                <p>Su fundación data desde el año 1875, proviniendo el nombre de su capital, de los indios
                    Capuchos quienes habitaban la región. Es bueno acotar que a raíz de un terremoto ocurrido el
                    18 de mayo de 1875, se generó el emplazamiento actual de la capital del municipio, conocida
                    anteriormente como Colinas de Blanquizal.
                </p>
                <p>
                    Es conveniente mencionar que en este municipio no nació el General Cipriano Castro el cual
                    nació el 12 de octubre del año 1858 en el Municipio Libertad dedicando su vida a la
                    actividad militar. Lideró un movimiento denominado como la "Revolución Liberal
                    Restauradora". A pesar de todo, sus restos mortales reposan en un Mausoleo ubicado en la
                    carrera 8, vía el cementerio, en la ciudad de Capacho Nuevo, Municipio Independencia.
                </p>
                <p>
                    El 21 de agosto de 2015 el presidente de Venezuela, Nicolás Maduro declara parcialmente un
                    Estado de excepción por 60 días en el estado fronterizo del Táchira, por la crisis diplomática
                    con Colombia, siendo esta entidad municipal uno de los cinco municipios afectados por la medida
                    presidencial</p>
            </div>
        </div>
    </div>
</section>
<section class="municipio-limites">
    <div class="container">
        <div class="row px-md-5 py-5 align-items-center">
            <div class="col-md-6 ">
                <h2 class="h3 text-light">Limites Geográficos</h2>
                <p class="text-light"> Limita al Norte con el municipio Lobatera, al Sur y Oeste con el municipio Libertad, y al Este con los municipios San Cristóbal, Cárdenas; y Guásimos</p>
                <h3 class="text-light">Superficie</h3>
                <ul>
                    <li class="text-light">Total 64 km²</li>
                </ul>
                <h3 class="text-light">Altitud</h3>
                <ul>
                    <li class="text-light"> Media 1.270 m s. n. m.</li>
                </ul>
            </div>
            <div class="col-md-6 text-center">

                <img src="img/fijas/Mapa.webp" alt="Mapa" width="210px">
            </div>

        </div>
    </div>

</section>
<section class="municipio-himno">
    <div class="container">
        <div class="row p-5">
            <div class="col-12 px-md-5">
                <h2>Himno Municipal</h2>
                <figure>
                    <blockquote class="blockquote">
                        <p>Coro II
                            <br>
                            Este es san Pedro de Es capacho sendero de gloria Independencia. Pueblo insigne de la resplandor de paisajes de amor lealtad sus leyendas mensajes de En su historia podemos sentirnos asombro su capacha desvelo patrimonio de la libertad fervor III I Estandarte grandioso en Sus caminos montañas baluartes valores que son orgullo de que circundan su gran esplendor con nuestra nación marcharemos sus frutos podemos brindarle la con fe y esperanza. pasión como pueblo de honor Entusiasmo bordado de sol
                            <br>
                            V IV Que valiosos fue el padre En fecha del 20 de mayo recordamos Mantilla el pionero de esta su gran fundación cuando un grupo decisión procediendo en de varones valioso demostraron su histórica acta Blanquizal con empuje y valor
                            su idilio nació.
                        </p>
                    </blockquote>
                    <figcaption class="blockquote-footer">
                        Ernesto Rodríguez Duran con música de José del Carmen Avendaño
                    </figcaption>
                </figure>
            </div>
        </div>
    </div>
</section>
@endsection
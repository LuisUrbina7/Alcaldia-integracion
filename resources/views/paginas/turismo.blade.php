@extends('plantilla.paginas')
@section('css')
<title>Municipio</title>
@endsection
@section('contenido')

<section class="turismo-informacion py-5">
    <div class="container">
        <div class="row text-center g-2">
            <h2>Guía del Turista</h2>
            <div class="col-md-3 col-6">
                <a href="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d31621.78798237714!2d-72.30630101739727!3d7.819064167097333!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sposadas%20capacho%20nuevo!5e0!3m2!1ses-419!2sve!4v1668458122152!5m2!1ses-419!2sve" onclick="seleccionar(this)">

                    <p class="h5">Posadas</p>
                    <i class="las la-hotel"></i>
                </a>
            </div>
            <div class="col-md-3 col-6">

                <a href="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d31621.828532459025!2d-72.30629869545122!3d7.818529106778097!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1srestauranes%20capacho%20nuevo!5e0!3m2!1ses-419!2sve!4v1668457982394!5m2!1ses-419!2sve" onclick="seleccionar(this)">

                    <p class="h5">Restauranes</p>
                    <i class="las la-utensils"></i>
                </a>
            </div>
            <div class="col-md-3 col-6">

                <a href="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d31621.333941732853!2d-72.33870460708009!3d7.825052772889697!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sgasolineras%20capacho%20nuevo!5e0!3m2!1ses-419!2sve!4v1668457839284!5m2!1ses-419!2sve" onclick="seleccionar(this)">

                    <p class="h5">Estaciones de Servicios</p>
                    <i class="las la-gas-pump"></i>
                </a>
            </div>
            <div class="col-md-3 col-6">

                <a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1976.3406818951132!2d-72.3158110394363!3d7.8235104418519645!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e666a110ef6c27f%3A0xef55d8307e89ce03!2sParque%20zool%C3%B3gico%20La%20Laguna!5e0!3m2!1ses-419!2sve!4v1668461129288!5m2!1ses-419!2sve" onclick="seleccionar(this)">

                    <p class="h5">Zoologico</p>
                    <i class="las la-paw"></i>
                </a>
            </div>

            <div class="col-12 mt-3 col-6">
                <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d31621.33812043979!2d-72.25016320888365!3d7.824997678262976!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sgasolineras%20capacho%20nuevo!5e0!3m2!1ses-419!2sve!4v1668456877959!5m2!1ses-419!2sve" width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" id="visor-map"></iframe>
            </div>
        </div>
    </div>
</section>

<section class="turismo">
    <div class="container">
        <h2>Sitios Turísticos..</h2>
        <div class="row align-items-center py-5 pt-4">
            <div class="col-md-6 text-center mb-3">
                <img src="img/fijas/mercado.webp" alt="mercado" width="350px">
            </div>
            <div class="col-md-6">
                <h3>Mercado Municipal</h3>
                <p>Declarado en el año 1997 como Monumento Arquitéctonico Cultural de la Nación. Fue donado por Cipriano Castro en 1907, realizado como réplica de una de las Estaciones de Tren en Europa, destacan los Leones de Bronce traídos desde Francia, ubicado en la carrera 6 con calle 7 y 8, Capacho Nuevo. </p>
            </div>
            <div class="col-md-6 text-center mb-3">
                <img src="img/fijas/alcaldia.webp" alt="mercado" width="350px">
            </div>
            <div class="col-md-6">
                <h3>Alcaldia</h3>
                <p>Institución que corresponde al organismo de la alcaldia del municipio, ubicado en la carrera 6, frente a la Plaza Bolívar de Capacho Nuevo. </p>
            </div>
            <div class="col-md-6 text-end">
                <h3>Museo de Cipriano Castro</h3>
                <p>Lugar donde se puede admirar reliquias en cuanto a escrituras y utensilios pertenecientes al General, Carrera 6, Capacho Nuevo </p>
            </div>
            <div class="col-md-6  text-center mb-3">
                <img src="img/fijas/Museo.webp" alt="mercado" width="350px">
            </div>
            <div class="col-md-6 text-end">
                <h3>Iglesia San Pedro Apóstol</h3>
                <p> Es una edificación de tipo religioso que data de la fundación de Capacho Independencia. La primera piedra de este templo parroquial fue bendecida e impuesta el 31 de enero de 1875. </p>
            </div>
            <div class="col-md-6  text-center mb-3">
                <img src="img/fijas/iglesia.webp" alt="mercado" width="350px">
            </div>
        </div>
        <div class="row text-center">
            <h2 class="h3">Peribeca</h2>
            <p>Es un pueblo pequeño, pero muy bonito. Lo que lo hace interesante es el estilo colonial de sus casas, las calles empedradas, su arquitectura y su hermosa iglesia. Las casas pintadas impecablemente con llamativos colores y nos ofrecen sus balcones con lindas flores.</p>
            <div class="turismo-galeria py-4">
                <div class="caja-galeria">
                    <img src="img/fijas/peribeca-01.webp" alt="peribeca">
                </div>
                <div class="caja-galeria">
                    <img src="img/fijas/peribeca-02.webp" alt="peribeca">
                </div>
                <div class="caja-galeria">
                    <img src="img/fijas/peribeca-03.webp" alt="peribeca">
                </div>
                <div class="caja-galeria">
                    <img src="img/fijas/peribeca-08.webp" alt="peribeca">
                </div>
                <div class="caja-galeria">
                    <img src="img/fijas/peribeca-05.webp" alt="peribeca">
                </div>
                <div class="caja-galeria">
                    <img src="img/fijas/peribeca-06.webp" alt="peribeca">
                </div>
                <div class="caja-galeria">
                    <img src="img/fijas/peribeca-07.webp" alt="peribeca">
                </div>
            </div>
        </div>
</section>
@endsection
@section('js')
<script>
    function seleccionar(ref) {
        event.preventDefault();
        var enlace = ref;
        var visor = $('#visor-map').attr('src', enlace);
    }
</script>
@endsection
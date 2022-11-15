@extends('Plantilla.paginas')
@section('css')
<title>Inicio</title>
@endsection
@section('contenido')
    <main>
        <!--  -----obras publicas, proteccion civil, desarrollo social, Novedades, cultura y turismo, Deporte y recreación,servicios generales---- -->

        <section class="deslizador">

            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner carrusel-foto">
                    <div class="carousel-item active">
                        <img src="img/fijas/prueba-03.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-md-block">
                            <h3 class="fs-1">El Alcalde Luis Mendoza realiza dialogo con los comerciantes.</h3>
                            <p class="text-light fs-5">Luis mendoza alcalde bolivariano del Municipio, estableciò...</p>
                            <a href="Paginas/noticia-vista-01.php"> Visualizar</a>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/fijas/prueba-06.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption  d-md-block">
                            <h3 class="fs-1">Programa Radial La Tertulia Comunera por Armonía Stereo 102.5 fm invitada especial Lcda. Clari Useche.</h3>
                            <p class="text-light fs-5">La directora de desarrollo social y el alcalde luis mendoza...</p>
                            <a href="Paginas/noticia-vista-02.php"> Visualizar</a>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/fijas/prueba-07.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-md-block">
                            <h3 class="fs-1">Sintoníza todos los miércoles el programa de radio.</h3>
                            <p class="text-light fs-5">Por Radio Nacional de Venezuela (RNV) 105.7 fm desde las 07:00 a.m.</p>
                            <a href="Paginas/noticia-vista-03.php"> Visualizar</a>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev d-none" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next d-none" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </section>
        <section>
            <div class="espacio-publicitario text-center justify-content-center d-flex">
                <div  class="img-publicidad" style="object-fit: cover;"> </div>
               <!--  <img src="publicidad/giftres.gif" alt="gid" width="14.3%" height="120px">
                <img src="publicidad/gifcuatro.gif" alt="gid" width="14.3%" height="120px">
                <img src="publicidad/download.png" alt="gid" width="14.3%" height="120px">
                <img src="publicidad/cocacola.jpg" alt="gid" width="14.3%" height="120px">
                <img src="publicidad/cocacola.jpg" alt="gid" width="14.3%" height="120px">
                <img src="publicidad/download.png" alt="gid" width="14.3%" height="120px"> -->
            </div>
        </section>
        <section class="alcalde">
            <span></span>
            <figure id="al-figura-1"></figure>
            <div class="container al-contenedor py-5">
                <div class="row">
                    <div class="col-12 ">
                        <h3 class="h6">ALTO MANDO</h3>
                        <h2 class="sub-raya"> Alcalde</h2>
                    </div>
                    <div class="col-md-7 cuadro p-0">
                        <div class="al-figura-2 d-flex justify-content-center align-items-center">
                            <div class="px-5">
                                <h3 class="h4">Luis Mendoza</h3>
                                <p class="textos ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi dolorum, nemo saepe id ut asperiores. </p>
                                <a href="Paginas/Alcaldia.php" class="btn btn-danger">Leer mas</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5  p-0 position-relative">
                        <img src="img/fijas/alcalde02.png" alt="foto" class="d-none d-md-block position-absolute" width="450px" height="450px">
                    </div>
                </div>
            </div>
            <span></span>
        </section>

        <section class="servicios">
            <div class="container py-4">
                <div class="row py-4 text-center">
                    <h2 class="text-light">Servicios</h2>
                </div>
                <div class="row px-md-5 text-center ">
                    <div class="col-md-4 px-md-4 mb-2">
                        <div class="carta p-4 ">
                            <p class="d-flex justify-content-center align-items-center"><span class="servicios-figura"><i class="las la-universal-access"></i></span></p>
                            <h3 class="h5">Catastro</h3>
                            <p class="textos text-light">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsu
                            </p>
                            <a href="Paginas/Servicios-vista.php" class="btn btn-danger">ver</a>
                        </div>
                    </div>
                    <div class="col-md-4 px-md-4 mb-2">
                        <div class="carta p-4 ">
                            <p class="d-flex justify-content-center align-items-center"><span class="servicios-figura"><i class="las la-sign-language"></i></span></p>
                            <h3 class="h5">Registro Civil</h3>
                            <p class="textos text-light">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsu</p>
                            <a href="Paginas/Servicios-vista.php" class="btn btn-danger">ver</a>
                        </div>
                    </div>
                    <div class="col-md-4 px-md-4 mb-2">
                        <div class="carta p-4 ">
                            <p class="d-flex justify-content-center align-items-center"><span class="servicios-figura"><i class="las la-city"></i></span></p>
                            <h3 class="h5">Hacienda</h3>
                            <p class="textos text-light">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsu</p>
                            <a href="Paginas/servicios-hacienda.php" class="btn btn-danger">ver</a>
                        </div>
                    </div>
                    <div>
                        <a href="{{route('servicios')}}" class="p-4 saber-mas position-relative h-4 text-light d-block">Mas</a>
                    </div>
                </div>
            </div>
        </section>
        <section class="entes">
            <div class="container py-5">
                <div class="row py-4">
                    <div class="col-12 text-center">
                        <h3 class="h6">ORGANSMOS</h3>
                        <h2 class="sub-raya">Entes</h2>
                    </div>
                </div>
                <div class="row py-4">
                    <div id="carousel-entes" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active ">
                                <div class="carta-carrusel d-flex justify-content-center mb-3">
                                    <div class="row w-75  p-md-3 mb-dm-3 shadow-sm servicios-entes-figura">
                                        <div class="col-md-7 text-center">
                                            <img src="img/fijas/FUNDAINDEPENDENCIA.png" alt="foto" width="270px" height="244px">
                                        </div>

                                        <div class="col-md-5 d-flex align-items-center">
                                            <div>
                                                <h3 class="text-dark">Fundaindependencia</h3>
                                                <p>Teléfono: 0424-7462137 <br> Correo electrónico:
                                                    <small>Fundaindependenciacapachonuevo@gmail.com</small>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="carta-carrusel d-flex justify-content-center  mb-3">
                                    <div class="row w-75 p-md-3 mb-dm-3 shadow-sm servicios-entes-figura">
                                        <div class="col-md-7 text-end">
                                            <img src="img/fijas/Logo-planificacion-publica.png" alt="foto" width="100%" height="244px">

                                        </div>
                                        <div class="col-md-5 d-flex align-items-center">
                                            <div>
                                                <h3 class="text-dark">Consejo Local de Planificacion Pública</h3>
                                                <p>Teléfono: 0276-7881617 / 0424:7210804. Correo electrónico: c.l.p.p.capachon@gmail.com</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="carta-carrusel d-flex justify-content-center  mb-3">
                                    <div class="row w-75 p-md-3 mb-dm-3 shadow-sm servicios-entes-figura">
                                        <div class="col-md-7 text-end">
                                            <img src="img/fijas/logo-nuevo-deporte.png" alt="" width="100%" height="244px">
                                        </div>
                                        <div class="col-md-5 d-flex align-items-center">
                                            <div>
                                                <h3 class="text-dark">Instituto de Deporte Recreacion y juventud</h3>
                                                <p>Teléfono: 0424-7243816 <br> Correo electrónico:
                                                    <small>nrichardomar@gmail.com</small>
                                                </p>
                                                <a href="https://www.instagram.com/direcciondeportecapachonuevo/" target="_blank"><i class="lab la-instagram fs-1 text-light"></i> direcciondeportecapachonuevo</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carousel-entes" data-bs-slide="prev">
                            <i class="las la-angle-double-left fs-1 color-oscuro"></i>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carousel-entes" data-bs-slide="next">
                            <i class="las la-angle-double-right fs-1 color-oscuro"></i>
                        </button>
                    </div>
                </div>
            </div>
        </section>
        <section class="datos">
            <div class="container p-md-5">
                <div class="row text-center py-4">
                    <div class="col-md-3 px-5 mb-2">
                        <h3 class="h1 text-light ">
                            50k+
                        </h3>
                        <hr>
                        <h3 class="text-light">Poblacion
                        </h3>
                    </div>
                    <div class="col-md-3 px-5 mb-2">
                        <h3 class="h1 text-light ">2
                            <ul class="d-none">
                                <li><a href="https://www.google.com/maps/search/hospitales+de+capacho+nuevo/@7.8237536,-72.3336357,14z" class="text-decoration-none text-light" target="_blank">Ambulatorio Capacho Nuevo</a> </li>
                                <li><a href="https://www.google.com/maps/place/Ambulatorio+tipo+1/@7.8231889,-72.3218516,16z/data=!4m9!1m2!2m1!1shospitales+de+capacho+nuevo!3m5!1s0x8e666b44883c1e4f:0x3962cba1fac313c6!8m2!3d7.8231889!4d-72.3136119!15sChtob3NwaXRhbGVzIGRlIGNhcGFjaG8gbnVldm-SARNnb3Zlcm5tZW50X2hvc3BpdGFs4AEA" class="text-decoration-none text-light" target="_blank">Ambulatorio tipo 1</a> </li>
                            </ul>
                        </h3>
                        <hr>
                        <h3 class="text-light">Hospitales</h3>
                    </div>
                    <div class="col-md-3 px-5 mb-2">
                        <h3 class="h1 text-light ">3
                            <ul class="d-none">
                            <li><a href="https://www.google.com/maps/place/Escuela+Basica+Estado+Miranda/@7.8232101,-72.3218516,16z/data=!4m9!1m2!2m1!1sescuela+de+capacho+nuevo!3m5!1s0x8e666a172a3b0fbd:0x96d6da1dc0eaf7f6!8m2!3d7.8248087!4d-72.3130413!15sChhlc2N1ZWxhIGRlIGNhcGFjaG8gbnVldm-SAQZzY2hvb2zgAQA" class="text-decoration-none text-light" target="_blank">Escuela Basica Estado Miranda</a> </li>
                            <li><a href="https://www.google.com/maps/place/U.E+Colegio+Santa+Mariana+de+Jes%C3%BAs/@7.8232101,-72.3218516,16z/data=!4m9!1m2!2m1!1sescuela+de+capacho+nuevo!3m5!1s0x8e666a11a603e541:0x9a5726efdc2cbb42!8m2!3d7.8240747!4d-72.3170196!15sChhlc2N1ZWxhIGRlIGNhcGFjaG8gbnVldm-SAQtoaWdoX3NjaG9vbOABAA" class="text-decoration-none text-light" target="_blank">U.E Colegio Santa Mariana de Jesús</a> </li>
                            <li><a href="https://www.google.com/maps/place/Liceo+Nacional+Rm%C3%A1n+c%C3%A1rdenas/@7.8232101,-72.3218516,16z/data=!4m9!1m2!2m1!1sescuela+de+capacho+nuevo!3m5!1s0x8e666a16c9645253:0xf3073df5cf23c58b!8m2!3d7.8234128!4d-72.3129029!15sChhlc2N1ZWxhIGRlIGNhcGFjaG8gbnVldm-SAQZzY2hvb2zgAQA" class="text-decoration-none text-light" target="_blank">Liceo Nacional Rmán cárdenas</a> </li>
                            <li><a href="https://www.google.com/maps/place/Escuela+Parroquial+Padre+Contreras/@7.8239874,-72.3154986,16z/data=!4m9!1m2!2m1!1sescuela+de+capacho+nuevo!3m5!1s0x8e666a3d86e23c33:0x809b50e5f0a77d27!8m2!3d7.8239872!4d-72.3072593!15sChhlc2N1ZWxhIGRlIGNhcGFjaG8gbnVldm-SAQ1wdWJsaWNfc2Nob29s4AEA" class="text-decoration-none text-light" target="_blank">Escuela Parroquial Padre Contreras</a> </li>
                            </ul>
                        </h3>
                        <hr>
                        <h3 class="text-light">Escuelas</h3>
                    </div>
                    <div class="col-md-3 px-5 mb-2">
                        <h3 class="h1 text-light ">2
                            <ul class="d-none">
                            <li><a href="https://www.google.com/maps/place/Iglesia+de+San+Pedro+de+Independencia/@7.8238967,-72.3148397,16z/data=!4m9!1m2!2m1!1siglesia+de+capacho+nuevo!3m5!1s0x8e666a3d9b68cd83:0x8c8689d0c87abb0c!8m2!3d7.8238967!4d-72.3066!15sChhpZ2xlc2lhIGRlIGNhcGFjaG8gbnVldm-SAQZjaHVyY2jgAQA" class="text-decoration-none text-light" target="_blank">Iglesia de San Pedro de Independencia</a> </li>
                            <li><a href="https://www.google.com/maps/place/Casa+De+Oracion+Jesucristo+Es+El+Rey/@7.8238967,-72.3148397,16z/data=!4m9!1m2!2m1!1siglesia+de+capacho+nuevo!3m5!1s0x8e666a3d6a407c29:0x39d2fc2846d9c3e!8m2!3d7.8255096!4d-72.3061828!15sChhpZ2xlc2lhIGRlIGNhcGFjaG8gbnVldm-SARBhcG9zdG9saWNfY2h1cmNo4AEA" class="text-decoration-none text-light" target="_blank">Casa De Oracion Jesucristo Es El Rey</a> </li>
                            </ul>
                        </h3>
                        <hr>
                        <h3 class="text-light">Iglesias</h3>
                    </div>
                </div>
            </div>
        </section>
        <section class="noticias">
            <div class="container py-5 px-md-5">
                <div class="row p-4">
                    <div class="col-12 text-star">
                        <h3 class="h6">NOVEDADES</h3>
                        <h2 class="sub-raya justify-content-start"> <span class="mx-3">+</span> Ultimos Proyectos</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 mb-2">
                        <a href="#">
                            <div class="carta-noticia text-center shadow">
                                <span class="noticia-figura-1 pt-2">Embellecimiento de las instalaciones</span>
                                <img src="img/fijas/proyecto-01.jpg" alt="proyecto" width="100%" height="237px">
                                <span class="noticia-figura-2 pt-2">#Proyectos.</span>

                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 mb-2">
                        <a href="#">
                            <div class="carta-noticia text-center shadow">
                                <span class="noticia-figura-1 pt-2">Registro de Chamba Juvenil</span>
                                <img src="img/fijas/proyecto-02.jpg" alt="" width="100%" height="237px">
                                <span class="noticia-figura-2 pt-2">#Proyectos.</span>

                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 mb-2">
                        <a href="#">
                            <div class="carta-noticia text-center shadow">
                                <span class="noticia-figura-1 pt-2">Trabajo de mantenimiento de los diferentes espacios públicos.</span>
                                <img src="img/fijas/proyecto-03.jpg" alt="" width="100%" height="237px">
                                <span class="noticia-figura-2 pt-2">#Proyectos.</span>

                            </div>
                        </a>
                    </div>

                </div>
        </section>
        <section class="mapa">
            <div class="lh-1">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63242.64468534074!2d-72.37228766875002!3d7.825205700000016!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e666a3d6ebccb91%3A0x6ffe72e7abf9b009!2sAlcald%C3%ADa%20Municipio%20Independencia!5e0!3m2!1ses-419!2sve!4v1666016303907!5m2!1ses-419!2sve" width="100%" height="254px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </section>
    </main>
  
   @endsection
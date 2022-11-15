<?php include('../Plantilla/Encabezado.php') ?>
<main>
    <section class="pagina-noticias">
        <div class="container">
            <div class="row  p-md-4">
                <div class="col-md-9">
                    <div class="d-flex vista-titulo-noticia px-4 align-items-center">
                        <span class=" rounded "></span>
                        <div class="p-3">
                            <h3 class="color-oscuro h3 mb-0"> Programa Radial La Tertulia Comunera por Armonía Stereo 102.5 fm invitada especial Lcda. Clari Useche. </h3>
                            <p> <small class="text-muted "> Autor: Luis Urbina </small> </p>
                        </div>
                    </div>
                    <div class="vista-cuerpo-noticia">
                        <p>Programa Radial La Tertulia Comunera por Armonía Stereo 102.5 fm invitada especial Lcda. Clari Useche Directora de Desarrollo Social en la Alcaldía Bolivariana del municipio Capacho Nuevo  </p>
                            <ul>
                                <li> @FreddyBernal</li>
                                <li>@PSUVTachira</li>
                                <li>@tachira_gmas</li>
                                <li>@BermudezJoseA</li>
                                <li>@karemdebernal</li>
                                <li>@LuisMendozaCh</li>

                            </ul>
                        
                        <img src="../img/fijas/prueba-06.jpg" alt="foto" srcset="" width="100%">
                        <div class="noticias-enlaces text-center my-3">
                            <a href="" class="btn rounded-circle whatsapp shadow"><span class="fs-3 "><i class="lab la-whatsapp "></i></span></a>
                            <a href="" class="btn rounded-circle mx-3 facebook shadow"><span class="fs-3 ">
                                    <i class="lab la-facebook-f "></i>
                                </span></a>
                            <a href="" class="btn rounded-circle twitter shadow"><span class="fs-3 ">
                                    <i class="lab la-twitter"></i>
                                </span></a>
                        </div>

                    </div>
                </div>
                <aside class="col-md-3 d-none d-md-block">
                    <div class="contenedor-aside">
                        <div class="noticias-recientes">
                            <h3>Recientes</h3>
                            <a href="" class="link d-block">El Alcalde Luis Mendoza realiza dialogo con los comerciantes.</a>
                            <a href="" class="link d-block">Programa Radial La Tertulia.</a>
                            <a href="" class="link d-block">Recaudaciòn de impuesto.</a>

                        </div>
                        <div class="ventana-categorias">
                            <h3>Categorias</h3>
                            <div>
                                <a href="" class="link fs-6 text-decoration-none px-1 rounded bg-warning text-light m-1">Categoria 1</a>
                                <a href="" class="link fs-6 text-decoration-none px-1 rounded bg-warning text-light m-1">Categoria 2</a>
                                <a href="" class="link fs-6 text-decoration-none px-1 rounded bg-warning text-light m-1">Categoria 3</a>

                            </div>
                        </div>

                    </div>
                </aside>
            </div>

        </div>
    </section>
    <section>
        <div class="container">
            <div class="px-4 contenedor-ancho">

                <div class="comentarios p-3 d-flex align-items-center ">
                    <img src="../img/escudo.png" alt="" width="90px" class="d-none d-md-block">
                    <div class="p-2">
                        <p class="text-muted comentario-titulo h5">Nombre de Usuario</p>
                        <p class="comentario-cuerpo mb-1 lh-base">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo aliquam molestiae, voluptates, incidunt officia autem illo assumenda </p>
                        <p class="text-muted comentario-titulo"><small>Correo de Usuario | fecha : 20/10/2022</small></p>

                    </div>
                </div>

                <div class="comentarios p-3 d-flex align-items-center ">
                    <img src="../img/escudo.png" alt="" width="90px" class="d-none d-md-block">
                    <div class="p-2">
                        <p class="text-muted comentario-titulo h5">Nombre de Usuario</p>
                        <p class="comentario-cuerpo mb-1 lh-base">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo aliquam molestiae, voluptates, incidunt officia autem illo assumenda </p>
                        <p class="text-muted comentario-titulo"><small>Correo de Usuario | 20/10/2022</small></p>

                    </div>
                </div>
            </div>
            <div class="p-4">
                <p> Escribe un Comentario...</p>
                <form action="" class="contenedor-ancho px-md-5">
                    <div class="mb-1">
                        <label for="Nombre">Nombre :</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="mb-1">
                        <label for="Correo">Correo :</label>
                        <input type="email" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="Nombre">Mensaje :</label>
                        <textarea name="comentario" id="" cols="10" rows="3" class="form-control">
                            </textarea>
                    </div>
                    <div class="mb-3 text-end ">
                        <input type="submit" value="Enviar" class="btn btn-warning text-light">
                    </div>
                </form>
            </div>
        </div>
    </section>
</main>
<?php include('../Plantilla/Pie.php') ?>
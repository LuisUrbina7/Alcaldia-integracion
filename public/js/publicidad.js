$(document).ready(function(){
    cargar_publicidad();
    if (document.cookie.indexOf("ModalShown=true")<0) {
    $('#exampleModal').modal('show');
    document.cookie = "ModalShown=true; expires=Fri, 31 Dec 9999 23:59:59 GMT; path=/";
}

});


function cargar_publicidad() {
    $.ajax({
        type: 'GET',
        url: "./cargar-publicidad",
        success: function(response) {
            $('#cargando-publicidad').toggleClass('spinner-border');
            let contenido_publicidad = '';
            $(response).each(function(index, item) {
                contenido_publicidad += '<div class="col-md-2 col-6"><a href="'+item['enlace']+'"><img src="'+item['banner']+'" alt="gid" width="100%" height="120px" loading="lazy"></a></div>';
            });
            $('.espacio-publicitario').html(contenido_publicidad);
            console.log(response);
        }
    });
}
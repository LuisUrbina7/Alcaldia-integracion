$(document).ready(function(){
cargar_publicidad();
if (document.cookie.indexOf("ModalShown=true")<0) {
    
    $('#exampleModal').modal('show');
    //Modal has been shown, now set a cookie so it never comes back

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
                contenido_publicidad += '  <img src="'+ item['banner'] + '" alt="gid" width="14.3%" height="120px">';
            });
            $('.espacio-publicitario').html(contenido_publicidad);
            console.log(response);
        }
    });
}
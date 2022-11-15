$(document).ready(function(){
cargar_publicidad();
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
var controlador = 'seguridad/pagina/';
jQuery(document).ready( function() {
    nuevo();
    estado();
});

function estado(){
    $('.icono').click(function(){
        var id = $(this).attr('id_pagina');
        var icon = $(this).attr('icono');
        $.ajax({
            type: "POST",
            cache: false,
            dataType: "json",
            data:{id:id, icon:icon},
            url: base_url+controlador+'changeEstado.html',
            success: function(json){
                if (json.respuesta === 1){
                    $('#icon_'+id).removeClass(icon);
                    $('#lIcono_'+id).attr('icono',json.icon);
                    $('#icon_'+id).addClass(json.icon);
                }
            }
        });
    });
}

function eliminar(id){
    var url = base_url + controlador +"eliminar/"+id+'.html';
    location.href = url;
}

function nuevo(){
    $('#nuevo').click(function(){
        var modulo = $(this).attr('modulo');
        var url = base_url + controlador +'nuevo/'+modulo+'.html';
        location.href = url;
    });
}

var controlador = 'seccion/novedad/';
jQuery(document).ready( function() {
    nuevo();
    estado();
    destacado();
    editor_texto();
    $('#guardar').click(function(){
        $('#txt_nov_contenido').val($('#editable_txt_nov_contenido').html());
        $('#txt_nov_listado').val($('#editable_txt_nov_listado').html());
        $('#txt_nov_contactenos').val($('#editable_txt_nov_contactenos').html());
    });
    
    $('#cancelar').click(function(){
        var url = base_url+controlador+"index.html";
        location.href = url;
    });
    
    $('.image-popup-no-margins').magnificPopup({
        type: 'image',
        closeOnContentClick: true,
        closeBtnInside: false,
        fixedContentPos: true,
        mainClass: 'mfp-no-margins mfp-with-zoom', // class to remove default margin from left and right side
        image: {
            verticalFit: true
        },
        zoom: {
            enabled: true,
            duration: 300 // don't foget to change the duration also in CSS
        }
    });
});

function eliminar(id){
    var url = base_url + controlador +"eliminar/"+id+'.html';
    location.href = url;
}

function nuevo(){
    $('#nuevo').click(function(){
        var url = base_url + controlador +'nuevo.html';
        location.href = url;
    });
}

function destacado(){
    $('.destacado').click(function(){
        var icon = $(this).attr('icono');
        var id = $(this).attr('id_novedad');
        $.ajax({
            type: "POST",
            cache: false,
            dataType: "json",
            data:{id:id, icon:icon},
            url: base_url+controlador+'changeDestacado.html',
            success: function(json){
                if (json.respuesta === 1){
                    $('#icond_'+id).removeClass(icon);
                    $('#icond_'+id).addClass(json.icon);
                    $('#iDes_'+id).attr('icono',json.icon)
                }
            }
        });
    });
}
function estado(){
    $('.icono').click(function(){
        var icon = $(this).attr('icono');
        var id = $(this).attr('id_novedad');
        $.ajax({
            type: "POST",
            cache: false,
            dataType: "json",
            data:{id:id, icon:icon},
            url: base_url+controlador+'changeEstado.html',
            success: function(json){
                if (json.respuesta === 1){
                    $('#icon_'+id).removeClass(icon);
                    $('#icon_'+id).addClass(json.icon);
                    $('#lIcono_'+id).attr('icono',json.icon)
                }
            }
        });
    });
}

function editor_texto(){
    $('#summernote1').summernote({
        airMode: true,
        id_textarea:"txt_nov_contenido", 
        height: 180, 
        codemirror: { 
            theme: "ambiance" 
        }
    });
}
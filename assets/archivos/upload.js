var controlador = 'archivos/upload/';
jQuery(document).ready( function() {
    
});

function procesar_archivo(id, tipo){
    switch(tipo){
        case 'cie10':
        case 'pac':
        case 'esp':
            var url = base_url+controlador+'procesar/'+id+'/'+tipo+'.html';
            location.href = url;
            break;
        case 'ce':
            if($('#txt_sede').val()){
                var url = base_url+controlador+'procesar/'+id+'/'+tipo+'/'+$('#txt_sede').val()+'.html';
                location.href = url;
            }
            break;
    }
}
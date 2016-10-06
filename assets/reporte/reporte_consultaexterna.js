var controlador = 'reporte/reporte/';
jQuery(document).ready( function() {
    ajaxMes();
    $('#btnReporte').click(function (){
        reporteGrafico();
    });
});

function ajaxMes(){
    $('#txt_anio').change(function (){
        if($(this).val() === ''){
            $('#txt_mes').attr('disabled', true);
            $('#btnReporte').attr('disabled', true);
            $('#txt_mes').html('<option value="">Seleccionar<option>');
        }else{
            $('#txt_mes').attr('disabled', false);
            $('#btnReporte').attr('disabled', false);
            $.ajax({
                type: "POST",
                cache: false,
                dataType: "json",
                data:{anio:$(this).val()},
                url: base_url+controlador+'ajaxMes.html',
                success: function(json){
                    if (json.respuesta === 1){
                        $('#txt_mes').html(json.options);
                    }
                }
            });
        }
    });
}

function reporteGrafico(){
    $.ajax({
        type: "POST",
        cache: false,
        dataType: "json",
        data:{
            anio:$('#txt_anio').val(),
            mes:$('#txt_mes').val()
        },
        url: base_url+controlador+'getDataAjax.html',
        success: function(json){
            if (json.respuesta === 1){
                var datos = json.datos;
                var pre_sede = datos[0]['sede'];
                var sede = new Array();
                for(var i=0; i<pre_sede.length; i++){
                    sede[i] = pre_sede[i].sed_nombre;
                }
                
                var sedeData = new Array();
                
                for(var k=0; k<sede.length; k++){
                    var sede_datos = new Array();
                    sede_datos['name'] = sede[k];
                    sede_datos['data'] = new Array();
                    
                    sedeData[k] = sede_datos;
                    
                    for(var l=0; l<datos.length; l++){
                        for(var m=0; m<datos[l]['sede'].length; m++){
                            if(sedeData[k]['name'] === datos[l]['sede'][m].sed_nombre){
                                sedeData[k]['data'][sedeData[k]['data'].length] = datos[l]['sede'][m].cantidad;
                            }
                        }
                    }
                }
                
                var mes = new Array();
                for(var j=0; j<datos.length; j++){
                    mes[j] = datos[j]['name'];
                }
                
                console.log(json.serie);
                $('#container').highcharts({
                    chart: {
            type: 'column'
                    },
                    title: {
            text: 'Monthly Average Rainfall'
                    },
                    subtitle: {
                        text: 'Source: WorldClimate.com'
                    },
                    xAxis: {
            categories: json.mes,
                        crosshair: true
                    },
                    yAxis: {
                        min: 0,
                        title: {
                text: 'Rainfall (cm)'
                        }
                    },
                    tooltip: {
                        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
                        pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                '<td style="padding:0"><b>{point.y:.1f} cm</b></td></tr>',
                        footerFormat: '</table>',
                        shared: true,
                        useHTML: true
                    },
                    plotOptions: {
                        column: {
                            pointPadding: 0.2,
                            borderWidth: 0
                        }
                    },
                    series: json.serie
                });
            }
        }
    });
    
}
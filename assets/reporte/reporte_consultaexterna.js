var controlador = 'reporte/reporte/';
jQuery(document).ready( function() {
    ajaxMes();
    $('#btnReporte').click(function (){
        reporteGrafico();
    });
    
    if(!Math.round10){
        Math.round10 = function(value, exp){
            return decimalAdjust('round', value, exp);
        };
    }
    
});

function ajaxMes(){
    $('#txt_anio').change(function (){
        if($(this).val() === ''){
            $('#txt_mes').attr('disabled', true);
            $('#btnReporte').attr('disabled', true);
            $('#txt_mes').html('<option value="">Seleccionar<option>');
            $('#txt_sede').html('<option value="">Seleccionar<option>');
            $('#txt_esp').html('<option value="">Seleccionar<option>');
        }else{
            $('#txt_mes').attr('disabled', false);
            $('#txt_sede').attr('disabled', false);
            $('#txt_esp').attr('disabled', false);
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
            mes:$('#txt_mes').val(),
            sede: $('#txt_sede').val(),
            esp: $('#txt_esp').val()
        },
        url: base_url+controlador+'getDataAjax.html',
        success: function(json){
            if (json.respuesta === 1){
                var especialidades = json.especialidad;
                if(especialidades.length > 0){
                    $("#bodyEspecialidad").html('');
                    $.each(especialidades,function(i,fila){
                        var porc = 0;
                        if(json.total > 0){
                            porc = Math.round10((fila.cantidad/json.total)*100, -1);
                        }
                        $("#bodyEspecialidad").append('<tr class="active">');
                        $("#bodyEspecialidad").append("<td>"+fila.ce_especialidad+"</td>");
                        $("#bodyEspecialidad").append("<td>"+fila.cantidad+"</td>");
                        $("#bodyEspecialidad").append("<td>"+porc+"%</td>");
                        $("#bodyEspecialidad").append("</tr>");
                    });
                }else{
                    $("#bodyEspecialidad").html('<tr class="active"><td colspan="3">No se encontraron registros</td></tr>');
                }
                
                                
                $('#container').highcharts({
                    chart: {
                        type: 'column'
                    },
                    title: {
                        text: 'Reporte de consultas por especialidades'
                    },
                    subtitle: {
                        text: ''
                    },
                    xAxis: {
                        categories: json.mes,
                        crosshair: true
                    },
                    yAxis: {
                        min: 0,
                        title: {
                            text: 'Consultas'
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

function decimalAdjust(type, value, exp){
    if(typeof exp === 'undefined' || +exp === 0){
        return Math[type](value);
    }
    value = +value;
    exp = +exp;

    if(isNaN(value) || !(typeof exp === 'number' && exp % 1 === 0)){
        return NaN;
    }

    value = value.toString().split('e');
    value = Math[type](+(value[0]+'e'+(value[1] ? (+value[1] - exp): -exp)));

    value = value.toString().split('e');
    return +(value[0] + 'e' + (value[1] ? (+value[1] + exp) : exp));
}

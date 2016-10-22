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
//            $.ajax({
//                type: "POST",
//                cache: false,
//                dataType: "json",
//                data:{
//                    anio:$(this).val(),
//                    type: 2
//                },
//                url: base_url+controlador+'ajaxMes.html',
//                success: function(json){
//                    if (json.respuesta === 1){
//                        $('#txt_mes').html(json.options);
//                    }
//                }
//            });
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
        url: base_url+controlador+'getDataAjaxCie10.html',
        success: function(json){
            if (json.respuesta === 1){
                
                                
                $('#container').highcharts({
                    chart: {
                        type: 'bar'
                    },
                    title: {
                        text: 'Gráfico de los: 10 Primeros Diagnósticos'
                    },
                    subtitle: {
                        text: ''
                    },
                    xAxis: {
                        categories: json.diagnostico,
                        title: {
                            text: null
                        }
                    },
                    yAxis: {
                        min: 0,
                        title: {
                            text: 'Cantidad En Diagnósticos',
                            align: 'high'
                        },
                        labels: {
                            overflow: 'justify'
                        }
                    },
                    tooltip: {
                        valueSuffix: ' '
                    },
                    plotOptions: {
                        bar: {
                            dataLabels: {
                                enabled: true
                            }
                        }
                    },
                    legend: {
                        layout: 'vertical',
                        align: 'right',
                        verticalAlign: 'top',
                        x: -40,
                        y: 80,
                        floating: true,
                        borderWidth: 1,
                        backgroundColor: ((Highcharts.theme && Highcharts.theme.legendBackgroundColor) || '#FFFFFF'),
                        shadow: true
                    },
                    credits: {
                        enabled: false
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

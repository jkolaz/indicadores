jQuery(document).ready( function() {
    var pieData=[];
    pieData['labels'][0] = 'Muy Malo';
    pieData['labels'][1] = 'Malo';
    pieData['labels'][2] = 'Regular';
    pieData['labels'][3] = 'Bueno';
    pieData['labels'][4] = 'Muy Bueno';
    
    pieData['datasets']['data'][0] = '20';
    pieData['datasets']['data'][1] = '20';
    pieData['datasets']['data'][2] = '20';
    pieData['datasets']['data'][3] = '20';
    pieData['datasets']['data'][4] = '20';
    
    pieData['datasets']['backgroundColor'][0] = '#808080';
    pieData['datasets']['backgroundColor'][1] = '#FF0000';
    pieData['datasets']['backgroundColor'][2] = '#FFFF00';
    pieData['datasets']['backgroundColor'][3] = '#008000';
    pieData['datasets']['backgroundColor'][4] = '#0000FF';
    
    pieData['datasets']['hoverBackgroundColor'][0] = '#808080';
    pieData['datasets']['hoverBackgroundColor'][1] = '#FF0000';
    pieData['datasets']['hoverBackgroundColor'][2] = '#FFFF00';
    pieData['datasets']['hoverBackgroundColor'][3] = '#008000';
    pieData['datasets']['hoverBackgroundColor'][4] = '#0000FF';
    
    pieData['cant'][0] = 2;
    pieData['cant'][1] = 2;
    pieData['cant'][2] = 2;
    pieData['cant'][3] = 2;
    pieData['cant'][4] = 2;
    var optionsPie = {
                                responsive:false,
                                legend:{
                                    display:true
                                }
                               /*tooltipEvents: [],
                               showTooltips: true,
                               onAnimationComplete: function() {
                                   this.showTooltip(this.segments, true);
                               },
                               tooltipTemplate: "<%= value %>%"*/
                           };
    var ctx = document.getElementById("pieChart").getContext("2d");
                           //var myChart = new Chart(ctx).Pie(pieData,optionsPie);
                           var mychart = new Chart(ctx,{
                               type:"pie",
                               data:pieData,
                               options:optionsPie
                           });
});

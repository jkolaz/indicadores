<?php /* Smarty version 3.1.27, created on 2016-09-08 18:21:01
         compiled from "application\views\templates\prueba\prueba_chart.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1750157d1f25d6c7432_02197538%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f38e51f2ef6d228260e5e2dd8f399b53cf4c2fdd' => 
    array (
      0 => 'application\\views\\templates\\prueba\\prueba_chart.tpl',
      1 => 1473376859,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1750157d1f25d6c7432_02197538',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_57d1f25d71bb69_51555476',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_57d1f25d71bb69_51555476')) {
function content_57d1f25d71bb69_51555476 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1750157d1f25d6c7432_02197538';
?>
<div id="Grafica">
                            <h3>Calificación VMC</h3>
                            <div style="display:inline-block; vertical-align:middle;"> 
                                <canvas id="pieChart" width="300" height="300"/></canvas>
                            </div>
                            
                            <div id="pieLegend"  style="display:inline-block; vertical-align:middle; margin-left: 40px;"></div>
                            <div style="display:inline-block; vertical-align:middle; margin-left: 40px;">
                                <h2 class="margin-top:0;"><u>Resumen</u></h2>
                                <p><b>Cantidad Participante :</b> <span id='numpart'></span></p>
                                <p><b>Nivel de Satisfación real :</b> <span id='sasreal'></span></p>
                                <p><b>Cant. no gracias :</b> <span id='nogracias'></span></p>
                            </div>
                        </div><?php }
}
?>
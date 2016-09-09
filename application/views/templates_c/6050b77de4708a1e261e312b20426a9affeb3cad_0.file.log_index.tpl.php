<?php /* Smarty version 3.1.27, created on 2016-09-08 15:25:45
         compiled from "application\views\templates\seguridad\log_index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2471857d1c9495262a3_51607709%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6050b77de4708a1e261e312b20426a9affeb3cad' => 
    array (
      0 => 'application\\views\\templates\\seguridad\\log_index.tpl',
      1 => 1473289804,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2471857d1c9495262a3_51607709',
  'variables' => 
  array (
    'SERVER_ADMIN' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_57d1c9495753a4_29107793',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_57d1c9495753a4_29107793')) {
function content_57d1c9495753a4_29107793 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2471857d1c9495262a3_51607709';
?>
<div class="row">
    <div class="col-md-12">
        <form id="form" action="<?php echo $_smarty_tpl->tpl_vars['SERVER_ADMIN']->value;?>
seguridad/log/index" method="post" class="form-horizontal" enctype="multipart/form-data">
            <input name="txt_action" id="txt_action" type="hidden" value="buscar">
            <section class="panel">
                <header class="panel-heading">

                    <h2 class="panel-title">Registro de novedad</h2>
                </header>
                <div class="panel-body">
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Fecha</label>
                        <div class="col-sm-2">
                            <input type="text" name="txt_fecha" id="txt_fecha" class="form-control"  required="" readonly="" value="" data-plugin-datepicker="" />
                        </div>
                    </div>
                </div>
                <footer class="panel-footer">
                    <div class="row">
                        <div class="col-sm-2 col-sm-offset-3">
                            <button class="btn btn-primary" id="guardar">Buscar</button>
                            <!--<button type="reset" class="btn btn-default">Reset</button>-->
                        </div>
                    </div>
                </footer>
            </section>
        </form>
    </div>
</div><?php }
}
?>
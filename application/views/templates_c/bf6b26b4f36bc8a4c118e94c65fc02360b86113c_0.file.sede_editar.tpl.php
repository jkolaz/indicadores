<?php /* Smarty version 3.1.27, created on 2016-09-07 18:36:12
         compiled from "application\views\templates\configuracion\sede_editar.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2043657d0a46cc4ad62_77382004%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bf6b26b4f36bc8a4c118e94c65fc02360b86113c' => 
    array (
      0 => 'application\\views\\templates\\configuracion\\sede_editar.tpl',
      1 => 1473291164,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2043657d0a46cc4ad62_77382004',
  'variables' => 
  array (
    'SERVER_ADMIN' => 0,
    'ID' => 0,
    'message' => 0,
    'stdSede' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_57d0a46cc8f8d6_50346010',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_57d0a46cc8f8d6_50346010')) {
function content_57d0a46cc8f8d6_50346010 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2043657d0a46cc4ad62_77382004';
?>
<div class="row">
    <div class="col-md-12">
        <form id="form" action="<?php echo $_smarty_tpl->tpl_vars['SERVER_ADMIN']->value;?>
configuracion/sede/editar/<?php echo $_smarty_tpl->tpl_vars['ID']->value;?>
" method="post" class="form-horizontal">
            <input name="txt_action" id="txt_action" type="hidden" value="editar">
            <section class="panel">
                <?php echo $_smarty_tpl->tpl_vars['message']->value;?>

                <header class="panel-heading">
                    <h2 class="panel-title">Editar sede</h2>
                </header>
                <div class="panel-body">
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Nombre <span class="required">*</span></label>
                        <div class="col-sm-9">
                            <input type="text" name="txt_sed_nombre" id="txt_sed_nombre" class="form-control" placeholder="ej.: Lima" required value="<?php echo $_smarty_tpl->tpl_vars['stdSede']->value->sed_nombre;?>
"/>
                        </div>
                    </div>
                </div>
                <footer class="panel-footer">
                    <div class="row">
                        <div class="col-sm-9 col-sm-offset-3">
                            <button class="btn btn-primary">Guardar</button>
                            <button type="button" class="btn btn-default" id="cancelar">Cancelar</button>
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
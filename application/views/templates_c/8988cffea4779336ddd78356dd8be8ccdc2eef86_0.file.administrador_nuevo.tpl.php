<?php /* Smarty version 3.1.27, created on 2016-09-07 18:19:47
         compiled from "application\views\templates\seguridad\administrador_nuevo.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2766157d0a093e62035_94323149%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8988cffea4779336ddd78356dd8be8ccdc2eef86' => 
    array (
      0 => 'application\\views\\templates\\seguridad\\administrador_nuevo.tpl',
      1 => 1473289804,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2766157d0a093e62035_94323149',
  'variables' => 
  array (
    'SERVER_ADMIN' => 0,
    'ta' => 0,
    'message' => 0,
    'ta_nombre' => 0,
    'objSede' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_57d0a093eb7920_06830563',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_57d0a093eb7920_06830563')) {
function content_57d0a093eb7920_06830563 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2766157d0a093e62035_94323149';
?>
<div class="row">
    <div class="col-md-12">
        <form id="form" action="<?php echo $_smarty_tpl->tpl_vars['SERVER_ADMIN']->value;?>
seguridad/administrador/nuevo/<?php echo $_smarty_tpl->tpl_vars['ta']->value;?>
.html" method="post" class="form-horizontal">
            <input name="txt_action" id="txt_action" type="hidden" value="nuevo">
            <input name="txt_adm_ta_id" id="txt_adm_ta_id" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['ta']->value;?>
">
            <section class="panel">
                <?php echo $_smarty_tpl->tpl_vars['message']->value;?>

                <header class="panel-heading">
                    <h2 class="panel-title">Nuevo Administrador <b>(<?php echo $_smarty_tpl->tpl_vars['ta_nombre']->value;?>
)</b></h2>
                </header>
                <div class="panel-body">
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Nombre <span class="required">*</span></label>
                        <div class="col-sm-9">
                            <input type="text" name="txt_adm_nombre" id="txt_adm_nombre" class="form-control" required value="" placeholder="Ej.:: Elvin Anderson"/>
                        </div>
                    </div>
                </div>
                <div class="panel-body">
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Apellidos <span class="required">*</span></label>
                        <div class="col-sm-9">
                            <input type="text" name="txt_adm_apellidos" id="txt_adm_apellidos" class="form-control" required autocomplete="off" value="" placeholder="Ej.:: Mejía Paucar"/>
                        </div>
                    </div>
                </div>
                <div class="panel-body">
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Correo <span class="required">*</span></label>
                        <div class="col-sm-9">
                            <input type="text" name="txt_adm_correo" id="txt_adm_correo" class="form-control email" required autocomplete="off" value="" placeholder="Ej.:: elvin.mejia@sanjuandedios.pe"/>
                        </div>
                    </div>
                </div>
                <div class="panel-body">
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Usuario <span class="required">*</span></label>
                        <div class="col-sm-9">
                            <input type="text" name="txt_adm_nick" id="txt_adm_nick" class="form-control email" required autocomplete="off" value="" placeholder="elvinmejia"/>
                        </div>
                    </div>
                </div>
                <div class="panel-body">
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Contraseña <span class="required">*</span></label>
                        <div class="col-sm-9">
                            <input type="password" name="txt_adm_password" id="txt_adm_password" class="form-control email" required autocomplete="off" value=""/>
                        </div>
                    </div>
                </div>
                <div class="panel-body">
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Sede</label>
                        <div class="col-sm-9">
                            <select data-plugin-selectTwo id="txt_adm_sed_id" name="txt_adm_sed_id" class="form-control populate">
                                <option value="">Seleccionar sede</option>
                                <optgroup label="Sede">
                                    <?php if (count($_smarty_tpl->tpl_vars['objSede']->value) > 0) {?>
                                        <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['id'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['id']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['name'] = 'id';
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['objSede']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['id']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['id']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['id']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['id']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['id']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['id']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['total']);
?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['objSede']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']]->sed_id;?>
"><?php echo $_smarty_tpl->tpl_vars['objSede']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']]->sed_nombre;?>
</option>
                                        <?php endfor; endif; ?>
                                    <?php }?>
                                </optgroup>
                            </select>
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
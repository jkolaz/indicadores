<?php /* Smarty version 3.1.27, created on 2016-10-02 20:44:13
         compiled from "application\views\templates\seguridad\permiso_index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:3270157f1b7ed7bae45_11405902%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4f89d73d90e72533f3ba7c45551fe02f105ed618' => 
    array (
      0 => 'application\\views\\templates\\seguridad\\permiso_index.tpl',
      1 => 1474820695,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3270157f1b7ed7bae45_11405902',
  'variables' => 
  array (
    'nombre' => 0,
    'id' => 0,
    'obPM' => 0,
    'SERVER_ADMIN' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_57f1b7ed9be8c7_16283945',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_57f1b7ed9be8c7_16283945')) {
function content_57f1b7ed9be8c7_16283945 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '3270157f1b7ed7bae45_11405902';
?>
<section class="panel">
    <header class="panel-heading">

        <h2 class="panel-title">Permisos de administradores <b>(<?php echo $_smarty_tpl->tpl_vars['nombre']->value;?>
)</b></h2>
    </header>
    <div class="panel-body">
        <div class="table-responsive">
            <input type="hidden" name="txt_ta_id" id="txt_ta_id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" />
            <table class="table mb-none">
                <thead>
                    <tr>
                        <th>Módulo</th>
                        <th>Página</th>
                        <th>URL</th>
                        <th>Permiso</th>
                    </tr>
                </thead>
                <tbody>
                <?php if (count($_smarty_tpl->tpl_vars['obPM']->value) > 0) {?>
                    <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['tipo'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['tipo']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['tipo']['name'] = 'tipo';
$_smarty_tpl->tpl_vars['smarty']->value['section']['tipo']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['obPM']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['tipo']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['tipo']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['tipo']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['tipo']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['tipo']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['tipo']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['tipo']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['tipo']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['tipo']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['tipo']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['tipo']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['tipo']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['tipo']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['tipo']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['tipo']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['tipo']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['tipo']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['tipo']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['tipo']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['tipo']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['tipo']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['tipo']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['tipo']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['tipo']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['tipo']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['tipo']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['tipo']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['tipo']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['tipo']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['tipo']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['tipo']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['tipo']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['tipo']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['tipo']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['tipo']['total']);
?>
                    <tr class="active">
                        <td>
                            <i class="fa <?php echo $_smarty_tpl->tpl_vars['obPM']->value[$_smarty_tpl->getVariable('smarty')->value['section']['tipo']['index']]->mod_icon;?>
"></i>
                            <?php echo $_smarty_tpl->tpl_vars['obPM']->value[$_smarty_tpl->getVariable('smarty')->value['section']['tipo']['index']]->mod_nombre;?>

                        </td>
                        <td>
                            <i class="fa <?php echo $_smarty_tpl->tpl_vars['obPM']->value[$_smarty_tpl->getVariable('smarty')->value['section']['tipo']['index']]->pag_icon;?>
"></i>
                            <?php echo $_smarty_tpl->tpl_vars['obPM']->value[$_smarty_tpl->getVariable('smarty')->value['section']['tipo']['index']]->pag_nombre;?>

                        </td>
                        <td>
                            <?php echo $_smarty_tpl->tpl_vars['SERVER_ADMIN']->value;
echo $_smarty_tpl->tpl_vars['obPM']->value[$_smarty_tpl->getVariable('smarty')->value['section']['tipo']['index']]->mod_url;?>
/<?php echo $_smarty_tpl->tpl_vars['obPM']->value[$_smarty_tpl->getVariable('smarty')->value['section']['tipo']['index']]->pag_url;?>
.html
                        </td>
                        <td class="actions">
                            <div class="switch switch-sm switch-primary permiso" id_pagina="<?php echo $_smarty_tpl->tpl_vars['obPM']->value[$_smarty_tpl->getVariable('smarty')->value['section']['tipo']['index']]->pag_id;?>
">
                                <input type="checkbox" name="txt_pag_id[]" id="txt_pag_id_<?php echo $_smarty_tpl->tpl_vars['obPM']->value[$_smarty_tpl->getVariable('smarty')->value['section']['tipo']['index']]->pag_id;?>
" data-plugin-ios-switch value="<?php echo $_smarty_tpl->tpl_vars['obPM']->value[$_smarty_tpl->getVariable('smarty')->value['section']['tipo']['index']]->pag_id;?>
" <?php echo $_smarty_tpl->tpl_vars['obPM']->value[$_smarty_tpl->getVariable('smarty')->value['section']['tipo']['index']]->checked;?>
/>
                            </div>
                        </td>
                    </tr>
                    <?php endfor; endif; ?>
                <?php } else { ?>
                    <tr>
                        <td colspan="7" class="text-center"><b>No se encontraron registros</b></td>
                    </tr>
                <?php }?>
                </tbody>
            </table>
        </div>
    </div>
</section>
<!-- end: page --><?php }
}
?>
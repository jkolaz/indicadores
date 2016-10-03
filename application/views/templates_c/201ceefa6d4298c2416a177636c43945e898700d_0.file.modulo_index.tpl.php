<?php /* Smarty version 3.1.27, created on 2016-10-02 20:42:01
         compiled from "application\views\templates\seguridad\modulo_index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:3163857f1b769ee4c91_63764539%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '201ceefa6d4298c2416a177636c43945e898700d' => 
    array (
      0 => 'application\\views\\templates\\seguridad\\modulo_index.tpl',
      1 => 1474820695,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3163857f1b769ee4c91_63764539',
  'variables' => 
  array (
    'modulo' => 0,
    'SERVER_ADMIN' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_57f1b76a42eaa0_95511098',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_57f1b76a42eaa0_95511098')) {
function content_57f1b76a42eaa0_95511098 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '3163857f1b769ee4c91_63764539';
?>
<!-- start: page -->
<!--<div class="alert alert-info">
    Resize the browser to see the responsiveness in action.
</div>-->
<section class="panel">
    <header class="panel-heading">

        <h2 class="panel-title">Módulos del sistema</h2>
    </header>
    <div class="panel-body">
            <div class="table-responsive">
                    <table class="table mb-none">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Páginas</th>
                                <th>Estado</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php if (count($_smarty_tpl->tpl_vars['modulo']->value) > 0) {?>
                            <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['tipo'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['tipo']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['tipo']['name'] = 'tipo';
$_smarty_tpl->tpl_vars['smarty']->value['section']['tipo']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['modulo']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
                                <td><?php echo $_smarty_tpl->tpl_vars['modulo']->value[$_smarty_tpl->getVariable('smarty')->value['section']['tipo']['index']]->mod_nombre;?>
</td>
                                <td class="actions">
                                    <a class="text-primary" href="<?php echo $_smarty_tpl->tpl_vars['SERVER_ADMIN']->value;?>
seguridad/pagina/index/<?php echo $_smarty_tpl->tpl_vars['modulo']->value[$_smarty_tpl->getVariable('smarty')->value['section']['tipo']['index']]->mod_id;?>
.html" >
                                        <i class="fa fa-file-o"></i>
                                        Páginas
                                    </a>
                                </td>
                                <td class="actions">
                                    <a href="javascript:;" class="icono" id="lIcono_<?php echo $_smarty_tpl->tpl_vars['modulo']->value[$_smarty_tpl->getVariable('smarty')->value['section']['tipo']['index']]->mod_id;?>
" icono="<?php echo $_smarty_tpl->tpl_vars['modulo']->value[$_smarty_tpl->getVariable('smarty')->value['section']['tipo']['index']]->icon_estado;?>
" id_modulo="<?php echo $_smarty_tpl->tpl_vars['modulo']->value[$_smarty_tpl->getVariable('smarty')->value['section']['tipo']['index']]->mod_id;?>
">
                                        <i class="fa <?php echo $_smarty_tpl->tpl_vars['modulo']->value[$_smarty_tpl->getVariable('smarty')->value['section']['tipo']['index']]->icon_estado;?>
" id="icon_<?php echo $_smarty_tpl->tpl_vars['modulo']->value[$_smarty_tpl->getVariable('smarty')->value['section']['tipo']['index']]->mod_id;?>
"></i>
                                    </a>
                                </td>
                                <td class="actions">
                                    <a class="text-success" href="<?php echo $_smarty_tpl->tpl_vars['SERVER_ADMIN']->value;?>
seguridad/modulo/editar/<?php echo $_smarty_tpl->tpl_vars['modulo']->value[$_smarty_tpl->getVariable('smarty')->value['section']['tipo']['index']]->mod_id;?>
.html" title="Editar <?php echo $_smarty_tpl->tpl_vars['modulo']->value[$_smarty_tpl->getVariable('smarty')->value['section']['tipo']['index']]->mod_nombre;?>
"><!-- class="text-success" -->
                                        <i class="fa fa-pencil"></i>
                                    </a>
                                    <!--&nbsp;&nbsp;&nbsp;
                                    <a class="delete-row text-danger" href="javascript:;" onclick="eliminar(<?php echo $_smarty_tpl->tpl_vars['modulo']->value[$_smarty_tpl->getVariable('smarty')->value['section']['tipo']['index']]->mod_id;?>
)" title="Eliminar <?php echo $_smarty_tpl->tpl_vars['modulo']->value[$_smarty_tpl->getVariable('smarty')->value['section']['tipo']['index']]->mod_nombre;?>
">
                                        <i class="fa fa-trash-o" ></i>
                                    </a>-->
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
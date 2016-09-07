<?php /* Smarty version 3.1.27, created on 2016-09-07 18:20:20
         compiled from "application\views\templates\seguridad\tipoAdmin_index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:871457d0a0b472d2d2_20228046%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0f952463bb3d96f2a2868add89fe06b1f4571b97' => 
    array (
      0 => 'application\\views\\templates\\seguridad\\tipoAdmin_index.tpl',
      1 => 1473289804,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '871457d0a0b472d2d2_20228046',
  'variables' => 
  array (
    'objTA' => 0,
    'SERVER_ADMIN' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_57d0a0b478c980_02812054',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_57d0a0b478c980_02812054')) {
function content_57d0a0b478c980_02812054 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '871457d0a0b472d2d2_20228046';
?>
<!-- start: page -->
<!--<div class="alert alert-info">
    Resize the browser to see the responsiveness in action.
</div>-->
<section class="panel">
    <header class="panel-heading">

        <h2 class="panel-title">Tipo de Administradores</h2>
    </header>
    <div class="panel-body">
        <div class="row">
            <div class="col-sm-6">
                <div class="mb-md" id="nuevo">
                    <button id="addToTable" class="btn btn-primary">
                        Registrar tipo de administrador
                        <i class="fa fa-plus"></i>
                    </button>
                </div>
            </div>
        </div>
            <div class="table-responsive">
                    <table class="table mb-none">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Permisos</th>
                                <th>Estado</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php if (count($_smarty_tpl->tpl_vars['objTA']->value) > 0) {?>
                            <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['tipo'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['tipo']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['tipo']['name'] = 'tipo';
$_smarty_tpl->tpl_vars['smarty']->value['section']['tipo']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['objTA']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
                                <td><?php echo $_smarty_tpl->tpl_vars['objTA']->value[$_smarty_tpl->getVariable('smarty')->value['section']['tipo']['index']]->ta_nombre;?>
</td>
                                <td class="actions">
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['SERVER_ADMIN']->value;?>
seguridad/permiso/index/<?php echo $_smarty_tpl->tpl_vars['objTA']->value[$_smarty_tpl->getVariable('smarty')->value['section']['tipo']['index']]->ta_id;?>
.html" class="text-primary">
                                        <i class="fa fa-key"></i> <span>Permisos</span>
                                    </a>
                                </td>
                                <td class="actions">
                                    <a href="javascript:;" class="icono" id="lIcono_<?php echo $_smarty_tpl->tpl_vars['objTA']->value[$_smarty_tpl->getVariable('smarty')->value['section']['tipo']['index']]->ta_id;?>
" icono="<?php echo $_smarty_tpl->tpl_vars['objTA']->value[$_smarty_tpl->getVariable('smarty')->value['section']['tipo']['index']]->icon_estado;?>
" id_ta="<?php echo $_smarty_tpl->tpl_vars['objTA']->value[$_smarty_tpl->getVariable('smarty')->value['section']['tipo']['index']]->ta_id;?>
">
                                        <i class="fa <?php echo $_smarty_tpl->tpl_vars['objTA']->value[$_smarty_tpl->getVariable('smarty')->value['section']['tipo']['index']]->icon_estado;?>
" id="icon_<?php echo $_smarty_tpl->tpl_vars['objTA']->value[$_smarty_tpl->getVariable('smarty')->value['section']['tipo']['index']]->ta_id;?>
"></i>
                                    </a>
                                </td>
                                <td class="actions">
                                    <a class="text-success" href="<?php echo $_smarty_tpl->tpl_vars['SERVER_ADMIN']->value;?>
seguridad/tipoAdmin/editar/<?php echo $_smarty_tpl->tpl_vars['objTA']->value[$_smarty_tpl->getVariable('smarty')->value['section']['tipo']['index']]->ta_id;?>
.html" title="Editar <?php echo $_smarty_tpl->tpl_vars['objTA']->value[$_smarty_tpl->getVariable('smarty')->value['section']['tipo']['index']]->ta_nombre;?>
">
                                        <i class="fa fa-pencil"></i>
                                    </a>&nbsp;&nbsp;&nbsp;&nbsp;
                                    <a class="delete-row text-danger" class="delete-row" href="javascript:;" onclick="eliminar(<?php echo $_smarty_tpl->tpl_vars['objTA']->value[$_smarty_tpl->getVariable('smarty')->value['section']['tipo']['index']]->ta_id;?>
)" title="Eliminar <?php echo $_smarty_tpl->tpl_vars['objTA']->value[$_smarty_tpl->getVariable('smarty')->value['section']['tipo']['index']]->ta_nombre;?>
">
                                        <i class="fa fa-trash-o"></i>
                                    </a>
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
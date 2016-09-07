<?php /* Smarty version 3.1.27, created on 2016-09-07 18:24:49
         compiled from "application\views\templates\seguridad\pagina_index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:115557d0a1c1d9b8d8_92258157%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '340c954a8b979c1ca675b096b7b99a5927417b5f' => 
    array (
      0 => 'application\\views\\templates\\seguridad\\pagina_index.tpl',
      1 => 1473289804,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '115557d0a1c1d9b8d8_92258157',
  'variables' => 
  array (
    'modulo' => 0,
    'modulo_id' => 0,
    'pagina' => 0,
    'SERVER_ADMIN' => 0,
    'folder' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_57d0a1c1e05a01_15114116',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_57d0a1c1e05a01_15114116')) {
function content_57d0a1c1e05a01_15114116 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '115557d0a1c1d9b8d8_92258157';
?>
<!-- start: page -->
<!--<div class="alert alert-info">
    Resize the browser to see the responsiveness in action.
</div>-->
<section class="panel">
    <header class="panel-heading">

        <h2 class="panel-title">Página - <?php echo $_smarty_tpl->tpl_vars['modulo']->value;?>
</h2>
    </header>
    <div class="panel-body">
        <div class="row">
            <div class="col-sm-6">
                <div class="mb-md" id="nuevo" modulo="<?php echo $_smarty_tpl->tpl_vars['modulo_id']->value;?>
">
                    <button id="addToTable" class="btn btn-primary">
                        Registrar nueva página
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
                        <th>URL</th>
                        <th>Icono</th>
                        <th>Estado</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                <?php if (count($_smarty_tpl->tpl_vars['pagina']->value) > 0) {?>
                    <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['tipo'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['tipo']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['tipo']['name'] = 'tipo';
$_smarty_tpl->tpl_vars['smarty']->value['section']['tipo']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['pagina']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
                        <td><?php echo $_smarty_tpl->tpl_vars['pagina']->value[$_smarty_tpl->getVariable('smarty')->value['section']['tipo']['index']]->pag_nombre;?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['SERVER_ADMIN']->value;
echo $_smarty_tpl->tpl_vars['folder']->value;
echo $_smarty_tpl->tpl_vars['pagina']->value[$_smarty_tpl->getVariable('smarty')->value['section']['tipo']['index']]->pag_url;?>
.html</td>
                        <td class="actions">
                            <a href="javascript:;" class="icono" id="lIcono_<?php echo $_smarty_tpl->tpl_vars['pagina']->value[$_smarty_tpl->getVariable('smarty')->value['section']['tipo']['index']]->pag_id;?>
" icono="<?php echo $_smarty_tpl->tpl_vars['pagina']->value[$_smarty_tpl->getVariable('smarty')->value['section']['tipo']['index']]->icon_estado;?>
" id_pagina="<?php echo $_smarty_tpl->tpl_vars['pagina']->value[$_smarty_tpl->getVariable('smarty')->value['section']['tipo']['index']]->pag_id;?>
">
                                <i class="fa <?php echo $_smarty_tpl->tpl_vars['pagina']->value[$_smarty_tpl->getVariable('smarty')->value['section']['tipo']['index']]->icon_estado;?>
" id="icon_<?php echo $_smarty_tpl->tpl_vars['pagina']->value[$_smarty_tpl->getVariable('smarty')->value['section']['tipo']['index']]->pag_id;?>
"></i>
                            </a>
                        </td>
                        <td><?php echo $_smarty_tpl->tpl_vars['pagina']->value[$_smarty_tpl->getVariable('smarty')->value['section']['tipo']['index']]->pag_icon;?>
</td>
                        <td class="actions">
                            <a class="text-success" href="<?php echo $_smarty_tpl->tpl_vars['SERVER_ADMIN']->value;?>
seguridad/pagina/editar/<?php echo $_smarty_tpl->tpl_vars['pagina']->value[$_smarty_tpl->getVariable('smarty')->value['section']['tipo']['index']]->pag_id;?>
.html" title="Editar <?php echo $_smarty_tpl->tpl_vars['pagina']->value[$_smarty_tpl->getVariable('smarty')->value['section']['tipo']['index']]->pag_nombre;?>
">
                                <i class="fa fa-pencil"></i>
                            </a>&nbsp;&nbsp;&nbsp;
                            <a class="delete-row text-danger" href="javascript:;" onclick="eliminar(<?php echo $_smarty_tpl->tpl_vars['pagina']->value[$_smarty_tpl->getVariable('smarty')->value['section']['tipo']['index']]->pag_id;?>
)" title="Eliminar <?php echo $_smarty_tpl->tpl_vars['pagina']->value[$_smarty_tpl->getVariable('smarty')->value['section']['tipo']['index']]->pag_nombre;?>
">
                                <i class="fa fa-trash-o" ></i>
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
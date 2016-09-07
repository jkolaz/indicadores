<?php /* Smarty version 3.1.27, created on 2016-09-07 18:19:45
         compiled from "application\views\templates\seguridad\administrador_index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1398857d0a0918a4d47_82440396%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd6645fb171d7bc69e7df156000fd83da29372dec' => 
    array (
      0 => 'application\\views\\templates\\seguridad\\administrador_index.tpl',
      1 => 1473289804,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1398857d0a0918a4d47_82440396',
  'variables' => 
  array (
    'objTipoAdmin' => 0,
    'message' => 0,
    'rol' => 0,
    'SERVER_ADMIN' => 0,
    'usuario_login' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_57d0a09193a296_47433519',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_57d0a09193a296_47433519')) {
function content_57d0a09193a296_47433519 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1398857d0a0918a4d47_82440396';
?>
<!-- start: page -->
<?php if (count($_smarty_tpl->tpl_vars['objTipoAdmin']->value) > 1) {?>
    <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['tipo'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['tipo']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['tipo']['name'] = 'tipo';
$_smarty_tpl->tpl_vars['smarty']->value['section']['tipo']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['objTipoAdmin']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
<section class="panel">
    <?php echo $_smarty_tpl->tpl_vars['message']->value;?>

    <header class="panel-heading">
        <div class="panel-actions">
            <a href="#" class="fa fa-caret-down"></a>
        </div>

        <h2 class="panel-title"><?php echo $_smarty_tpl->tpl_vars['objTipoAdmin']->value[$_smarty_tpl->getVariable('smarty')->value['section']['tipo']['index']]->ta_nombre;?>
</h2>
    </header>
    <div class="panel-body">
        <div class="row">
            <div class="col-sm-6">
                <div class="mb-md nuevo_adm" id="nuevo" id_ta="<?php echo $_smarty_tpl->tpl_vars['objTipoAdmin']->value[$_smarty_tpl->getVariable('smarty')->value['section']['tipo']['index']]->ta_id;?>
">
                    <button id="addToTable" class="btn btn-primary">
                        Registrar <?php echo $_smarty_tpl->tpl_vars['objTipoAdmin']->value[$_smarty_tpl->getVariable('smarty')->value['section']['tipo']['index']]->ta_nombre;?>

                        <i class="fa fa-plus"></i>
                    </button>
                </div>
            </div>
        </div>
            <div class="table-responsive">
                    <table class="table table-bordered table-striped table-condensed mb-none">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Apellidos</th>
                                <th>Correo</th>
                                <th>Nick</th>
                                <th>Sede</th>
                                <th>Estado</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php if (count($_smarty_tpl->tpl_vars['objTipoAdmin']->value[$_smarty_tpl->getVariable('smarty')->value['section']['tipo']['index']]->Administradores) > 0) {?>
                            <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['adm'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['adm']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['adm']['name'] = 'adm';
$_smarty_tpl->tpl_vars['smarty']->value['section']['adm']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['objTipoAdmin']->value[$_smarty_tpl->getVariable('smarty')->value['section']['tipo']['index']]->Administradores) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['adm']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['adm']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['adm']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['adm']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['adm']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['adm']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['adm']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['adm']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['adm']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['adm']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['adm']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['adm']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['adm']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['adm']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['adm']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['adm']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['adm']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['adm']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['adm']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['adm']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['adm']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['adm']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['adm']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['adm']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['adm']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['adm']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['adm']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['adm']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['adm']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['adm']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['adm']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['adm']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['adm']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['adm']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['adm']['total']);
?>
                            <tr>
                                <td><?php echo $_smarty_tpl->tpl_vars['objTipoAdmin']->value[$_smarty_tpl->getVariable('smarty')->value['section']['tipo']['index']]->Administradores[$_smarty_tpl->getVariable('smarty')->value['section']['adm']['index']]->adm_nombre;?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['objTipoAdmin']->value[$_smarty_tpl->getVariable('smarty')->value['section']['tipo']['index']]->Administradores[$_smarty_tpl->getVariable('smarty')->value['section']['adm']['index']]->adm_apellidos;?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['objTipoAdmin']->value[$_smarty_tpl->getVariable('smarty')->value['section']['tipo']['index']]->Administradores[$_smarty_tpl->getVariable('smarty')->value['section']['adm']['index']]->adm_correo;?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['objTipoAdmin']->value[$_smarty_tpl->getVariable('smarty')->value['section']['tipo']['index']]->Administradores[$_smarty_tpl->getVariable('smarty')->value['section']['adm']['index']]->adm_nick;?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['objTipoAdmin']->value[$_smarty_tpl->getVariable('smarty')->value['section']['tipo']['index']]->Administradores[$_smarty_tpl->getVariable('smarty')->value['section']['adm']['index']]->sed_nombre;?>
</td>
                                <td class="actions">
                                    <a href="javascript:;" class="icono" id="lIcono_<?php echo $_smarty_tpl->tpl_vars['objTipoAdmin']->value[$_smarty_tpl->getVariable('smarty')->value['section']['tipo']['index']]->Administradores[$_smarty_tpl->getVariable('smarty')->value['section']['adm']['index']]->adm_id;?>
" icono="<?php echo $_smarty_tpl->tpl_vars['objTipoAdmin']->value[$_smarty_tpl->getVariable('smarty')->value['section']['tipo']['index']]->Administradores[$_smarty_tpl->getVariable('smarty')->value['section']['adm']['index']]->icon_estado;?>
" id_adm="<?php echo $_smarty_tpl->tpl_vars['objTipoAdmin']->value[$_smarty_tpl->getVariable('smarty')->value['section']['tipo']['index']]->Administradores[$_smarty_tpl->getVariable('smarty')->value['section']['adm']['index']]->adm_id;?>
">
                                        <i class="fa <?php echo $_smarty_tpl->tpl_vars['objTipoAdmin']->value[$_smarty_tpl->getVariable('smarty')->value['section']['tipo']['index']]->Administradores[$_smarty_tpl->getVariable('smarty')->value['section']['adm']['index']]->icon_estado;?>
" id="icon_<?php echo $_smarty_tpl->tpl_vars['objTipoAdmin']->value[$_smarty_tpl->getVariable('smarty')->value['section']['tipo']['index']]->Administradores[$_smarty_tpl->getVariable('smarty')->value['section']['adm']['index']]->adm_id;?>
"></i>
                                    </a>
                                </td>
                                <td class="actions">
                                    <?php if ($_smarty_tpl->tpl_vars['rol']->value == 1) {?>
                                    <a class="text-success" href="<?php echo $_smarty_tpl->tpl_vars['SERVER_ADMIN']->value;?>
seguridad/administrador/editar/<?php echo $_smarty_tpl->tpl_vars['objTipoAdmin']->value[$_smarty_tpl->getVariable('smarty')->value['section']['tipo']['index']]->Administradores[$_smarty_tpl->getVariable('smarty')->value['section']['adm']['index']]->adm_id;?>
.html">
                                        <i class="fa fa-pencil"></i> Editar
                                    </a>
                                        <?php if ($_smarty_tpl->tpl_vars['usuario_login']->value != $_smarty_tpl->tpl_vars['objTipoAdmin']->value[$_smarty_tpl->getVariable('smarty')->value['section']['tipo']['index']]->Administradores[$_smarty_tpl->getVariable('smarty')->value['section']['adm']['index']]->adm_id) {?>
                                    <a style="margin-left: 10px;" class="text-danger mb-xs mt-xs mr-xs modal-adm alert-danger" id="modalVerProfesor" href="#Modaladm" adm="<?php echo $_smarty_tpl->tpl_vars['objTipoAdmin']->value[$_smarty_tpl->getVariable('smarty')->value['section']['tipo']['index']]->Administradores[$_smarty_tpl->getVariable('smarty')->value['section']['adm']['index']]->adm_id;?>
">
                                        <i class="fa fa-trash-o"></i> Eliminar
                                    </a>
                                        <?php }?>
                                    <?php }?>
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
    <?php endfor; endif; ?>
<?php }?>
<div id="Modaladm" class="modal-block modal-header-color modal-block-danger mfp-hide">
    <section class="panel" id="sectionModaladm">
        
    </section>
</div>
<!-- end: page --><?php }
}
?>
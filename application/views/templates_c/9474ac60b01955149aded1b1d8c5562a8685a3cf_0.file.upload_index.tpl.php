<?php /* Smarty version 3.1.27, created on 2016-10-02 22:44:50
         compiled from "application\views\templates\archivos\upload_index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1236757f1d432234735_88713628%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9474ac60b01955149aded1b1d8c5562a8685a3cf' => 
    array (
      0 => 'application\\views\\templates\\archivos\\upload_index.tpl',
      1 => 1475466155,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1236757f1d432234735_88713628',
  'variables' => 
  array (
    'message' => 0,
    'listado' => 0,
    'objArchivo' => 0,
    'SERVER_ADMIN' => 0,
    'controlador' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_57f1d4323df048_02468609',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_57f1d4323df048_02468609')) {
function content_57f1d4323df048_02468609 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1236757f1d432234735_88713628';
?>
<section class="panel">
    <?php echo $_smarty_tpl->tpl_vars['message']->value;?>

    <header class="panel-heading">
        <h2 class="panel-title"><?php echo $_smarty_tpl->tpl_vars['listado']->value;?>
</h2>
    </header>
    <div class="panel-body">
        <div class="row">
            <div class="col-sm-6">
                <div class="mb-md" id="nuevo">
                    <button id="addToTable" class="btn btn-primary">
                        Registro nuevo
                        <i class="fa fa-plus"></i>
                    </button>
                </div>
            </div>
        </div>
        <table class="table table-striped mb-none datatable-sinButtons" data-swf-path="assets/vendor/jquery-datatables/extras/TableTools/swf/copy_csv_xls_pdf.swf">
            <thead>
                <tr>
                    <th>Archivo</th>
                    <th>Tipo</th>
                    <th>N° lineas leidas</th>
                    <th>Estado</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php if (count($_smarty_tpl->tpl_vars['objArchivo']->value) > 0) {?>
                    <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['tipo'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['tipo']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['tipo']['name'] = 'tipo';
$_smarty_tpl->tpl_vars['smarty']->value['section']['tipo']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['objArchivo']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
                <tr class="gradeX">
                        <td><?php echo $_smarty_tpl->tpl_vars['objArchivo']->value[$_smarty_tpl->getVariable('smarty')->value['section']['tipo']['index']]->arc_nombre;?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['objArchivo']->value[$_smarty_tpl->getVariable('smarty')->value['section']['tipo']['index']]->arc_type;?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['objArchivo']->value[$_smarty_tpl->getVariable('smarty')->value['section']['tipo']['index']]->arc_num_lines_read;?>
</td>
                        <td class="actions">
                            <a href="javascript:;" class="icono" id="lIcono_<?php echo $_smarty_tpl->tpl_vars['objArchivo']->value[$_smarty_tpl->getVariable('smarty')->value['section']['tipo']['index']]->arc_id;?>
" icono="<?php echo $_smarty_tpl->tpl_vars['objArchivo']->value[$_smarty_tpl->getVariable('smarty')->value['section']['tipo']['index']]->icon_estado;?>
" pk="<?php echo $_smarty_tpl->tpl_vars['objArchivo']->value[$_smarty_tpl->getVariable('smarty')->value['section']['tipo']['index']]->arc_id;?>
">
                                <i class="fa <?php echo $_smarty_tpl->tpl_vars['objArchivo']->value[$_smarty_tpl->getVariable('smarty')->value['section']['tipo']['index']]->icon_estado;?>
" id="icon_<?php echo $_smarty_tpl->tpl_vars['objArchivo']->value[$_smarty_tpl->getVariable('smarty')->value['section']['tipo']['index']]->arc_id;?>
"></i>
                            </a>
                        </td>
                        <td class="actions">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['SERVER_ADMIN']->value;
echo $_smarty_tpl->tpl_vars['controlador']->value;?>
/procesar/<?php echo $_smarty_tpl->tpl_vars['objArchivo']->value[$_smarty_tpl->getVariable('smarty')->value['section']['tipo']['index']]->arc_id;?>
.html" title="Editar <?php echo $_smarty_tpl->tpl_vars['objArchivo']->value[$_smarty_tpl->getVariable('smarty')->value['section']['tipo']['index']]->arc_nombre;?>
">
                                <i class="fa fa-share"></i> Procesar
                            </a>
                        </td>
                </tr>
                    <?php endfor; endif; ?>
                <?php }?>
            </tbody>
        </table>
    </div>
</section><?php }
}
?>
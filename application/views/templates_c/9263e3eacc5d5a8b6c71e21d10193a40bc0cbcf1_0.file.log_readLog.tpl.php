<?php /* Smarty version 3.1.27, created on 2016-09-09 17:23:52
         compiled from "application\views\templates\seguridad\log_readLog.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:46457d33678bacd50_33966081%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9263e3eacc5d5a8b6c71e21d10193a40bc0cbcf1' => 
    array (
      0 => 'application\\views\\templates\\seguridad\\log_readLog.tpl',
      1 => 1473289804,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '46457d33678bacd50_33966081',
  'variables' => 
  array (
    'log' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_57d33678c5ae27_28309367',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_57d33678c5ae27_28309367')) {
function content_57d33678c5ae27_28309367 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '46457d33678bacd50_33966081';
?>
<!-- start: page -->
<section class="panel">
    <header class="panel-heading">
        <div class="panel-actions">
            <a href="#" class="fa fa-caret-down"></a>
        </div>

        <h2 class="panel-title">Registro de actividades</h2>
    </header>
    <div class="panel-body">
            <div class="table-responsive">
                    <table class="table table-bordered table-striped table-condensed mb-none">
                        <thead>
                            <tr>
                                <th>Fecha</th>
                                <th>Administrador</th>
                                <th>Mensaje</th>
                                <th>Ver</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php if (count($_smarty_tpl->tpl_vars['log']->value) > 0) {?>
                            <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['adm'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['adm']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['adm']['name'] = 'adm';
$_smarty_tpl->tpl_vars['smarty']->value['section']['adm']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['log']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
                                <td><?php echo $_smarty_tpl->tpl_vars['log']->value[$_smarty_tpl->getVariable('smarty')->value['section']['adm']['index']]->fecha;?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['log']->value[$_smarty_tpl->getVariable('smarty')->value['section']['adm']['index']]->admin;?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['log']->value[$_smarty_tpl->getVariable('smarty')->value['section']['adm']['index']]->mensaje;?>
</td>
                                <td>--</td>
                            </tr>
                            <?php endfor; endif; ?>
                        <?php } else { ?>
                            <tr>
                                <td colspan="4" class="text-center"><b>No se encontraron registros</b></td>
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
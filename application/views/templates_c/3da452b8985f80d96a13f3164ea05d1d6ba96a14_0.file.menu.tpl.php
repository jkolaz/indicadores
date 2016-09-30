<?php /* Smarty version 3.1.27, created on 2016-09-30 11:24:28
         compiled from "application\views\templates\inc\menu.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:331457ee91bcb91634_11266113%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3da452b8985f80d96a13f3164ea05d1d6ba96a14' => 
    array (
      0 => 'application\\views\\templates\\inc\\menu.tpl',
      1 => 1473365302,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '331457ee91bcb91634_11266113',
  'variables' => 
  array (
    'SERVER_ADMIN' => 0,
    'menu' => 0,
    'aUbi' => 0,
    'menu_sede' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_57ee91bcbefb82_21637908',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_57ee91bcbefb82_21637908')) {
function content_57ee91bcbefb82_21637908 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '331457ee91bcb91634_11266113';
?>
<!-- start: sidebar -->
<aside id="sidebar-left" class="sidebar-left">
				
    <div class="sidebar-header">
        <div class="sidebar-title">
                Navigation
        </div>
        <div class="sidebar-toggle hidden-xs" data-toggle-class="sidebar-left-collapsed" data-target="html" data-fire-event="sidebar-left-toggle">
                <i class="fa fa-bars" aria-label="Toggle sidebar"></i>
        </div>
    </div>
				
    <div class="nano">
        <div class="nano-content">
            <nav id="menu" class="nav-main" role="navigation">
                <ul class="nav nav-main">
                    <li>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['SERVER_ADMIN']->value;?>
seguridad/principal/index.html">
                            <i class="fa fa-home" aria-hidden="true"></i>
                            <span>Panel</span>
                        </a>
                    </li>
                    <?php if (count($_smarty_tpl->tpl_vars['menu']->value) > 0) {?>
                        <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['id'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['id']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['name'] = 'id';
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['menu']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
                    <li class="nav-parent<?php if ($_smarty_tpl->tpl_vars['aUbi']->value['modulo'] == $_smarty_tpl->tpl_vars['menu']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']]->mod_id) {?> nav-expanded nav-active<?php }?>">
                        <a>
                            <i class="fa <?php echo $_smarty_tpl->tpl_vars['menu']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']]->mod_icon;?>
" aria-hidden="true"></i>
                            <span><?php echo $_smarty_tpl->tpl_vars['menu']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']]->mod_nombre;?>
</span>
                        </a>
                        <?php if (count($_smarty_tpl->tpl_vars['menu']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']]->mod_paginas) > 0) {?>
                        <ul class="nav nav-children">
                            <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['sub_menu'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['sub_menu']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['sub_menu']['name'] = 'sub_menu';
$_smarty_tpl->tpl_vars['smarty']->value['section']['sub_menu']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['menu']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']]->mod_paginas) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['sub_menu']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['sub_menu']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sub_menu']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['sub_menu']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['sub_menu']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sub_menu']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['sub_menu']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['sub_menu']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['sub_menu']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sub_menu']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['sub_menu']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['sub_menu']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['sub_menu']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['sub_menu']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['sub_menu']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sub_menu']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['sub_menu']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['sub_menu']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['sub_menu']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['sub_menu']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['sub_menu']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['sub_menu']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['sub_menu']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sub_menu']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['sub_menu']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sub_menu']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['sub_menu']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['sub_menu']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sub_menu']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['sub_menu']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['sub_menu']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['sub_menu']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['sub_menu']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['sub_menu']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['sub_menu']['total']);
?>
                            <li <?php if ($_smarty_tpl->tpl_vars['aUbi']->value['pagina'] == $_smarty_tpl->tpl_vars['menu']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']]->mod_paginas[$_smarty_tpl->getVariable('smarty')->value['section']['sub_menu']['index']]->pag_id) {?>class="nav-active"<?php }?>>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['SERVER_ADMIN']->value;
echo $_smarty_tpl->tpl_vars['menu']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']]->mod_paginas[$_smarty_tpl->getVariable('smarty')->value['section']['sub_menu']['index']]->url;?>
.html">
                                    <i class="fa <?php echo $_smarty_tpl->tpl_vars['menu']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']]->mod_paginas[$_smarty_tpl->getVariable('smarty')->value['section']['sub_menu']['index']]->pag_icon;?>
" aria-hidden="true"></i>
                                    <span><?php echo $_smarty_tpl->tpl_vars['menu']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']]->mod_paginas[$_smarty_tpl->getVariable('smarty')->value['section']['sub_menu']['index']]->pag_nombre;?>
</span>
                                </a>
                            </li>
                            <?php endfor; endif; ?>
                        </ul>
                        <?php }?>
                    </li>        
                        <?php endfor; endif; ?>
                    <?php }?>
                    <?php if (count($_smarty_tpl->tpl_vars['menu_sede']->value) > 0) {?>
                        <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['id_sede'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['id_sede']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['id_sede']['name'] = 'id_sede';
$_smarty_tpl->tpl_vars['smarty']->value['section']['id_sede']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['menu_sede']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['id_sede']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['id_sede']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['id_sede']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['id_sede']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['id_sede']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['id_sede']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['id_sede']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['id_sede']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['id_sede']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['id_sede']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['id_sede']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['id_sede']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['id_sede']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['id_sede']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['id_sede']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['id_sede']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['id_sede']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['id_sede']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['id_sede']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['id_sede']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['id_sede']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['id_sede']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['id_sede']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['id_sede']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['id_sede']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['id_sede']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['id_sede']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['id_sede']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['id_sede']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['id_sede']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['id_sede']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['id_sede']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['id_sede']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['id_sede']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['id_sede']['total']);
?>
                    <li class="nav-parent">
                        <a>
                            <i class="fa <?php echo $_smarty_tpl->tpl_vars['menu_sede']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id_sede']['index']]->mod_icon;?>
" aria-hidden="true"></i>
                            <span><?php echo $_smarty_tpl->tpl_vars['menu_sede']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id_sede']['index']]->mod_nombre;?>
</span>
                        </a>
                        <?php if (count($_smarty_tpl->tpl_vars['menu_sede']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id_sede']['index']]->mod_paginas) > 0) {?>
                        <ul class="nav nav-children">
                            <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['sub_menu'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['sub_menu']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['sub_menu']['name'] = 'sub_menu';
$_smarty_tpl->tpl_vars['smarty']->value['section']['sub_menu']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['menu_sede']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id_sede']['index']]->mod_paginas) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['sub_menu']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['sub_menu']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sub_menu']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['sub_menu']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['sub_menu']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sub_menu']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['sub_menu']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['sub_menu']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['sub_menu']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sub_menu']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['sub_menu']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['sub_menu']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['sub_menu']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['sub_menu']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['sub_menu']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sub_menu']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['sub_menu']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['sub_menu']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['sub_menu']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['sub_menu']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['sub_menu']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['sub_menu']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['sub_menu']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sub_menu']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['sub_menu']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sub_menu']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['sub_menu']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['sub_menu']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sub_menu']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['sub_menu']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['sub_menu']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['sub_menu']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['sub_menu']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['sub_menu']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['sub_menu']['total']);
?>
                            <li>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['SERVER_ADMIN']->value;
echo $_smarty_tpl->tpl_vars['menu_sede']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id_sede']['index']]->mod_url;?>
/<?php echo $_smarty_tpl->tpl_vars['menu_sede']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id_sede']['index']]->mod_paginas[$_smarty_tpl->getVariable('smarty')->value['section']['sub_menu']['index']]->pag_url;?>
.html">
                                    <i class="fa <?php echo $_smarty_tpl->tpl_vars['menu_sede']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id_sede']['index']]->mod_paginas[$_smarty_tpl->getVariable('smarty')->value['section']['sub_menu']['index']]->pag_icon;?>
" aria-hidden="true"></i>
                                    <span><?php echo $_smarty_tpl->tpl_vars['menu_sede']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id_sede']['index']]->mod_paginas[$_smarty_tpl->getVariable('smarty')->value['section']['sub_menu']['index']]->pag_nombre;?>
</span>
                                </a>
                            </li>
                            <?php endfor; endif; ?>
                        </ul>
                        <?php }?>
                    </li>        
                        <?php endfor; endif; ?>
                    <?php }?>
                </ul>
            </nav>
				
            <hr class="separator" />
        </div>
				
    </div>
				
</aside>
<!-- end: sidebar --><?php }
}
?>
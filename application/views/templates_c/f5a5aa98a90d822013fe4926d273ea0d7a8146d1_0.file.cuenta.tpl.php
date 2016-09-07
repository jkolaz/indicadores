<?php /* Smarty version 3.1.27, created on 2016-09-07 18:16:59
         compiled from "application\views\templates\inc\cuenta.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1338957d09feb0639f7_19868712%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f5a5aa98a90d822013fe4926d273ea0d7a8146d1' => 
    array (
      0 => 'application\\views\\templates\\inc\\cuenta.tpl',
      1 => 1473289800,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1338957d09feb0639f7_19868712',
  'variables' => 
  array (
    'DIR_PRINCIPAL' => 0,
    'usuario' => 0,
    'tipo_adm' => 0,
    'sede' => 0,
    'SERVER_ADMIN' => 0,
    'sufix' => 0,
    'logout' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_57d09feb075929_80336690',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_57d09feb075929_80336690')) {
function content_57d09feb075929_80336690 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1338957d09feb0639f7_19868712';
?>
<!-- start: search & user box -->
<div class="header-right">
			
			
    <span class="separator"></span>
			
        <div id="userbox" class="userbox">
            <a href="#" data-toggle="dropdown">
                <figure class="profile-picture">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['DIR_PRINCIPAL']->value;?>
assets/images/!logged-user.jpg" alt="<?php echo $_smarty_tpl->tpl_vars['usuario']->value['usuario'];?>
" class="img-circle" data-lock-picture="<?php echo $_smarty_tpl->tpl_vars['DIR_PRINCIPAL']->value;?>
assets/images/!logged-user.jpg" />
                </figure>
                <div class="profile-info" data-lock-name="<?php echo $_smarty_tpl->tpl_vars['usuario']->value['usuario'];?>
" data-lock-email="<?php echo $_smarty_tpl->tpl_vars['usuario']->value['correo'];?>
">
                    <span class="name"><?php echo $_smarty_tpl->tpl_vars['usuario']->value['usuario'];?>
</span>
                    <span class="role"><?php echo $_smarty_tpl->tpl_vars['tipo_adm']->value;
echo $_smarty_tpl->tpl_vars['sede']->value;?>
</span>
                </div>

                <i class="fa custom-caret"></i>
            </a>

            <div class="dropdown-menu">
                <ul class="list-unstyled">
                    <li class="divider"></li>
                    <li>
                        <a role="menuitem" tabindex="-1" href="<?php echo $_smarty_tpl->tpl_vars['SERVER_ADMIN']->value;?>
seguridad/administrador/perfil<?php echo $_smarty_tpl->tpl_vars['sufix']->value;?>
"><i class="fa fa-user"></i> Mi Perfil</a>
                    </li>
                    <li>
                        <a role="menuitem" tabindex="-1" href="<?php echo $_smarty_tpl->tpl_vars['SERVER_ADMIN']->value;?>
seguridad/administrador/changepassword<?php echo $_smarty_tpl->tpl_vars['sufix']->value;?>
"><i class="fa fa-lock"></i> Cambiar Contraseña</a>
                    </li>
                    <li>
                        <a role="menuitem" tabindex="-1" href="<?php echo $_smarty_tpl->tpl_vars['SERVER_ADMIN']->value;
echo $_smarty_tpl->tpl_vars['logout']->value;
echo $_smarty_tpl->tpl_vars['sufix']->value;?>
"><i class="fa fa-power-off"></i> Salir</a>
                    </li>
                </ul>
            </div>
        </div>
</div>
<!-- end: search & user box --><?php }
}
?>
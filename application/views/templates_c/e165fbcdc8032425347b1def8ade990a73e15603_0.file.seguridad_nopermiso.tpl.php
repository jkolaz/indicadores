<?php /* Smarty version 3.1.27, created on 2016-09-08 16:03:20
         compiled from "application\views\templates\seguridad\seguridad_nopermiso.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:427157d1d218aa2829_60509710%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e165fbcdc8032425347b1def8ade990a73e15603' => 
    array (
      0 => 'application\\views\\templates\\seguridad\\seguridad_nopermiso.tpl',
      1 => 1473289804,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '427157d1d218aa2829_60509710',
  'variables' => 
  array (
    'SERVER_ADMIN' => 0,
    'URL_PANEL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_57d1d218b55bc4_57584632',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_57d1d218b55bc4_57584632')) {
function content_57d1d218b55bc4_57584632 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '427157d1d218aa2829_60509710';
?>
<!-- start: page -->
<section class="body-error error-inside">
    <div class="center-error">

        <div class="row">
            <div class="col-md-10">
                <div class="main-error mb-xlg">
                    <h2 class="error-code text-dark text-center text-semibold m-none">403 <i class="fa fa-ban"></i></h2>
                    <p class="error-explanation text-center">Lo sentimos, no tienes permiso para ingresar, consulte con su administrador.</p>
                </div>
            </div>
            <!--<div class="col-md-4">
                <h4 class="text">Aquí están algunos enlaces útiles</h4>
                <ul class="nav nav-list primary">
                    <li>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['SERVER_ADMIN']->value;
echo $_smarty_tpl->tpl_vars['URL_PANEL']->value;?>
"><i class="fa fa-caret-right text-dark"></i> Panel</a>
                    </li>
                    <li>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['SERVER_ADMIN']->value;?>
seguridad/usuario.html"><i class="fa fa-caret-right text-dark"></i> Perfil del usuario</a>
                    </li>
                </ul>
            </div>-->
        </div>
    </div>
</section>
<!-- end: page --><?php }
}
?>
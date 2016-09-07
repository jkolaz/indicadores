<?php /* Smarty version 3.1.27, created on 2016-09-07 18:16:59
         compiled from "application\views\templates\seguridad\principal_index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2357157d09feb1d9127_25569317%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'edb83c3f6e2a2bff0030b702e50525c4ed55aa64' => 
    array (
      0 => 'application\\views\\templates\\seguridad\\principal_index.tpl',
      1 => 1473289804,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2357157d09feb1d9127_25569317',
  'variables' => 
  array (
    'SERVER_ADMIN' => 0,
    'URL_PANEL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_57d09feb1de350_74682113',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_57d09feb1de350_74682113')) {
function content_57d09feb1de350_74682113 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2357157d09feb1d9127_25569317';
?>
<!-- start: page -->
<section class="body-error error-inside">
    <div class="center-error">
        <div class="row">
            <div class="col-md-8">
                <div class="main-error mb-md">
                    <h2 class="error-code text-dark text-center text-semibold m-none">San Juan de Dios</h2>
                    <p class="error-explanation text-center">Bienvenido al gestor de aplicaciones.</p>
                </div>
            </div>
            <div class="col-md-4">
                <h4 class="text">Aquí están algunos enlaces útiles</h4>
                <ul class="nav nav-list primary">
                    <li>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['SERVER_ADMIN']->value;
echo $_smarty_tpl->tpl_vars['URL_PANEL']->value;?>
"><i class="fa fa-caret-right text-dark"></i> Panel</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- end: page --><?php }
}
?>
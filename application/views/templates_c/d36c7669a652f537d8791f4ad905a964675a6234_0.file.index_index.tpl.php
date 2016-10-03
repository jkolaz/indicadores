<?php /* Smarty version 3.1.27, created on 2016-10-02 08:06:32
         compiled from "application\views\templates\index_index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2934957f1065879f524_40137622%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd36c7669a652f537d8791f4ad905a964675a6234' => 
    array (
      0 => 'application\\views\\templates\\index_index.tpl',
      1 => 1474820695,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2934957f1065879f524_40137622',
  'variables' => 
  array (
    'pg_title' => 0,
    'DIR_PRINCIPAL' => 0,
    'SERVER_ADMIN' => 0,
    'error' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_57f10658d92c35_52725160',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_57f10658d92c35_52725160')) {
function content_57f10658d92c35_52725160 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2934957f1065879f524_40137622';
?>
<!doctype html>
<html class="fixed"> 
    <head>
        <!-- Basic -->
        <meta charset="UTF-8">
        <title><?php echo $_smarty_tpl->tpl_vars['pg_title']->value;?>
</title>
        <meta name="keywords" content="Theme Orden HOspitalaria" />
        <meta name="description" content="Gestor de la Orden Hospitalaria">
        <meta name="author" content="www.sanjuandedios.pe">
		
		<link rel="icon" type="image/png" href="<?php echo $_smarty_tpl->tpl_vars['DIR_PRINCIPAL']->value;?>
assets/images/favicon.png" />
		

        <!-- Mobile Metas -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

        <!-- Web Fonts  -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

        <!-- Vendor CSS -->
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['DIR_PRINCIPAL']->value;?>
assets/vendor/bootstrap/css/bootstrap.css" />
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['DIR_PRINCIPAL']->value;?>
assets/vendor/font-awesome/css/font-awesome.css" />
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['DIR_PRINCIPAL']->value;?>
assets/vendor/magnific-popup/magnific-popup.css" />
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['DIR_PRINCIPAL']->value;?>
assets/vendor/bootstrap-datepicker/css/datepicker3.css" />
				
		
        <!-- Theme CSS -->
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['DIR_PRINCIPAL']->value;?>
assets/stylesheets/theme.css" />

        <!-- Skin CSS -->
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['DIR_PRINCIPAL']->value;?>
assets/stylesheets/skins/default.css" />

        <!-- Theme Custom CSS -->
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['DIR_PRINCIPAL']->value;?>
assets/stylesheets/theme-custom.css">

        <!-- Head Libs -->
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['DIR_PRINCIPAL']->value;?>
assets/vendor/modernizr/modernizr.js"><?php echo '</script'; ?>
>

    </head>
    <body>
        <!-- start: page -->
        <section class="body-sign">
            <div class="center-sign">
                <a href="/" class="logo pull-left">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['DIR_PRINCIPAL']->value;?>
assets/images/logo.png" height="54" alt="<?php echo $_smarty_tpl->tpl_vars['pg_title']->value;?>
" />
                </a>

                <div class="panel panel-sign">
                    <div class="panel-title-sign mt-xl text-right">
                        <h2 class="title text-uppercase text-bold m-none"><i class="fa fa-user mr-xs"></i> Iniciar Sesión</h2>
                    </div>
                    <div class="panel-body">
                        <form action="<?php echo $_smarty_tpl->tpl_vars['SERVER_ADMIN']->value;?>
seguridad/seguridad/ingresar_sistema.html" method="post">
                            <?php if ($_smarty_tpl->tpl_vars['error']->value == 1) {?>
                            <div class="alert alert-danger">
                                <button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
                                Algo va mal. 
                                <strong>Usuario y/o contraseña</strong> incorrecto, intente nuevamente.
                            </div>
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['error']->value == 2) {?>
                            <div class="alert alert-warning">
                                <button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
                                Ingrese su <strong>Usuario y/o contraseña</strong> para poder acceder al sistema.
                            </div>
                            <?php }?>
                            <div class="form-group mb-lg">
                                <label>Usuario</label>
                                <div class="input-group input-group-icon">
                                    <input name="username" id="username" type="text" class="form-control input-lg" autocomplete="off" />
                                    <span class="input-group-addon">
                                        <span class="icon icon-lg">
                                            <i class="fa fa-user"></i>
                                        </span>
                                    </span>
                                </div>
                            </div>

                            <div class="form-group mb-lg">
                                <div class="clearfix">
                                    <label class="pull-left">Contraseña</label>
                                    <!--<a href="<?php echo $_smarty_tpl->tpl_vars['SERVER_ADMIN']->value;?>
seguridad/administrador/recordarClave" class="pull-right">¿Olvidaste tu contraseña?</a>-->
                                </div>
                                <div class="input-group input-group-icon">
                                    <input name="pwd" id="pwd" type="password" class="form-control input-lg" />
                                    <span class="input-group-addon">
                                        <span class="icon icon-lg">
                                            <i class="fa fa-lock"></i>
                                        </span>
                                    </span>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-8">
                                    <!--<div class="checkbox-custom checkbox-default">
                                        <input id="RememberMe" name="rememberme" type="checkbox"/>
                                        <label for="RememberMe">Recuérdame</label>
                                    </div>-->
                                </div>
                                <div class="col-sm-4 text-right">
                                    <button type="submit" class="btn btn-primary hidden-xs">Ingresar</button>
                                    <button type="submit" class="btn btn-primary btn-block btn-lg visible-xs mt-lg">Ingresar</button>
                                </div>
                            </div>

                            <!--
                            <span class="mt-lg mb-lg line-thru text-center text-uppercase">
                                <span>or</span>
                            </span>

                            <div class="mb-xs text-center">
                                <a class="btn btn-facebook mb-md ml-xs mr-xs">Connect with <i class="fa fa-facebook"></i></a>
                                <a class="btn btn-twitter mb-md ml-xs mr-xs">Connect with <i class="fa fa-twitter"></i></a>
                            </div>
                            -->
                            
                            <!--<p class="text-center">¿No tienes una cuenta todavía? <a href="pages-signup.html">¡Regístrate!</a></p>-->

                        </form>
                    </div>
                </div>

                <p class="text-center text-muted mt-md mb-md">&copy; Copyright 2016. Todo los derechos reservados - Proyecto Granada</p>
            </div>
        </section>
        <!-- end: page -->

        <!-- Vendor -->
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['DIR_PRINCIPAL']->value;?>
assets/vendor/jquery/jquery.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['DIR_PRINCIPAL']->value;?>
assets/vendor/jquery-browser-mobile/jquery.browser.mobile.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['DIR_PRINCIPAL']->value;?>
assets/vendor/bootstrap/js/bootstrap.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['DIR_PRINCIPAL']->value;?>
assets/vendor/nanoscroller/nanoscroller.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['DIR_PRINCIPAL']->value;?>
assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['DIR_PRINCIPAL']->value;?>
assets/vendor/magnific-popup/magnific-popup.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['DIR_PRINCIPAL']->value;?>
assets/vendor/jquery-placeholder/jquery.placeholder.js"><?php echo '</script'; ?>
>

        <!-- Theme Base, Components and Settings -->
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['DIR_PRINCIPAL']->value;?>
assets/javascripts/theme.js"><?php echo '</script'; ?>
>

        <!-- Theme Custom -->
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['DIR_PRINCIPAL']->value;?>
assets/javascripts/theme.custom.js"><?php echo '</script'; ?>
>

        <!-- Theme Initialization Files -->
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['DIR_PRINCIPAL']->value;?>
assets/javascripts/theme.init.js"><?php echo '</script'; ?>
>

    </body>
    
</html><?php }
}
?>
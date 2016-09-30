<?php /* Smarty version 3.1.27, created on 2016-09-30 11:24:28
         compiled from "application\views\templates\inc\header.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2058257ee91bca30cf9_85862057%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c19d0346624d8a96c7cce0563cb796c6a652b39d' => 
    array (
      0 => 'application\\views\\templates\\inc\\header.tpl',
      1 => 1473289800,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2058257ee91bca30cf9_85862057',
  'variables' => 
  array (
    'pg_title' => 0,
    'DIR_PRINCIPAL' => 0,
    'datatable' => 0,
    'wizard' => 0,
    'fileupload' => 0,
    'formulario' => 0,
    'form' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_57ee91bca928c2_02110843',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_57ee91bca928c2_02110843')) {
function content_57ee91bca928c2_02110843 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2058257ee91bca30cf9_85862057';
?>
<head>

        <!-- Basic -->
        <meta charset="UTF-8">

        <title><?php echo $_smarty_tpl->tpl_vars['pg_title']->value;?>
</title>
        <meta name="keywords" content="Theme Orden HOspitalaria" />
        <meta name="description" content="Gestor de la Orden Hospitalaria">
        <meta name="author" content="www.sanjuandedios.pe">

        <!-- Mobile Metas -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

		<link rel="icon" type="image/png" href="<?php echo $_smarty_tpl->tpl_vars['DIR_PRINCIPAL']->value;?>
assets/images/favicon.png" />	
			
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
        
        <?php if ($_smarty_tpl->tpl_vars['datatable']->value > 0) {?>
        <!-- Specific Page Vendor CSS -->
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['DIR_PRINCIPAL']->value;?>
assets/vendor/select2/select2.css" />
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['DIR_PRINCIPAL']->value;?>
assets/vendor/jquery-datatables-bs3/assets/css/datatables.css" />
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['wizard']->value > 0) {?>
        <!-- Specific Page Vendor CSS -->
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['DIR_PRINCIPAL']->value;?>
assets/vendor/pnotify/pnotify.custom.css" />
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['fileupload']->value > 0) {?>
        <!-- Specific Page Vendor CSS -->
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['DIR_PRINCIPAL']->value;?>
assets/vendor/bootstrap-fileupload/bootstrap-fileupload.min.css" />
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['formulario']->value > 0) {?>
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['DIR_PRINCIPAL']->value;?>
assets/vendor/dropzone/css/basic.css" />
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['DIR_PRINCIPAL']->value;?>
assets/vendor/dropzone/css/dropzone.css" />
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['DIR_PRINCIPAL']->value;?>
assets/vendor/bootstrap-timepicker/css/bootstrap-timepicker.css" />    
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['form']->value > 0) {?>
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['DIR_PRINCIPAL']->value;?>
assets/vendor/jquery-ui/css/ui-lightness/jquery-ui-1.10.4.custom.css" />
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['DIR_PRINCIPAL']->value;?>
assets/vendor/select2/select2.css" />
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['DIR_PRINCIPAL']->value;?>
assets/vendor/summernote/summernote.css" />
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['DIR_PRINCIPAL']->value;?>
assets/vendor/summernote/summernote-bs3.css" />
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['DIR_PRINCIPAL']->value;?>
assets/vendor/bootstrap-fileupload/bootstrap-fileupload.min.css" />
        <?php }?>

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

</head><?php }
}
?>
<?php /* Smarty version 3.1.27, created on 2016-10-02 08:06:45
         compiled from "application\views\templates\main.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2082957f10665bed528_94669809%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4c23fb415a8cfbe4c899ae7175c8a7e4726f33fe' => 
    array (
      0 => 'application\\views\\templates\\main.tpl',
      1 => 1474820695,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2082957f10665bed528_94669809',
  'variables' => 
  array (
    'head' => 0,
    'DIR_PRINCIPAL' => 0,
    'panel_cuenta' => 0,
    'menu' => 0,
    'listado' => 0,
    'SERVER_ADMIN' => 0,
    'details' => 0,
    'url_back' => 0,
    'details1' => 0,
    'content_main' => 0,
    'footer' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_57f10665d1e027_77939310',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_57f10665d1e027_77939310')) {
function content_57f10665d1e027_77939310 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2082957f10665bed528_94669809';
?>
<!doctype html>
<html class="fixed">
    <?php echo $_smarty_tpl->tpl_vars['head']->value;?>

    <body>
        <section class="body">

            <!-- start: header -->
            <header class="header">
                <div class="logo-container">
                    <a href="../" class="logo">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['DIR_PRINCIPAL']->value;?>
assets/images/logo.png" height="35" alt="Gestor Orden Hospitalaria" />
                    </a>
                    <div class="visible-xs toggle-sidebar-left" data-toggle-class="sidebar-left-opened" data-target="html" data-fire-event="sidebar-left-opened">
                        <i class="fa fa-bars" aria-label="Toggle sidebar"></i>
                    </div>
                </div>

                <?php echo $_smarty_tpl->tpl_vars['panel_cuenta']->value;?>

            </header>
            <!-- end: header -->

            <div class="inner-wrapper">
                <?php echo $_smarty_tpl->tpl_vars['menu']->value;?>


                <section role="main" class="content-body">
                    <header class="page-header">
                        <h2><?php echo $_smarty_tpl->tpl_vars['listado']->value;?>
</h2>
                        <div class="right-wrapper pull-right">
                            <ol class="breadcrumbs">
                                <li>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['SERVER_ADMIN']->value;?>
seguridad/principal/index.html">
                                        <i class="fa fa-home"></i>
                                    </a>
                                </li>
                                <?php if ($_smarty_tpl->tpl_vars['details']->value != '') {?>
                                <li>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['SERVER_ADMIN']->value;
echo $_smarty_tpl->tpl_vars['url_back']->value;?>
.html">
                                        <span><?php echo $_smarty_tpl->tpl_vars['details']->value;?>
</span>
                                    </a>
                                </li>
                                <?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['details1']->value != '') {?>
                                <li><span><?php echo $_smarty_tpl->tpl_vars['details1']->value;?>
</span></li>
                                <?php }?>
                            </ol>

                            <!--<a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>-->
                        </div>
                    </header>

                    <?php echo $_smarty_tpl->tpl_vars['content_main']->value;?>

                </section>
            </div>

            <aside id="sidebar-right" class="sidebar-right">
                <div class="nano">
                    <div class="nano-content">
                        <a href="#" class="mobile-close visible-xs">
                            Collapse <i class="fa fa-chevron-right"></i>
                        </a>

                        <div class="sidebar-right-wrapper">

                            <div class="sidebar-widget widget-calendar">
                                <h6>Upcoming Tasks</h6>
                                <div data-plugin-datepicker data-plugin-skin="dark" ></div>

                            </div>

                        </div>
                    </div>
                </div>
            </aside>
        </section>

        <?php echo $_smarty_tpl->tpl_vars['footer']->value;?>


    </body>
</html><?php }
}
?>
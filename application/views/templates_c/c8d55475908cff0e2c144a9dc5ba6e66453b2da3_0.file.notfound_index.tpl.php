<?php /* Smarty version 3.1.27, created on 2016-10-02 20:39:07
         compiled from "application\views\templates\notfound_index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:490157f1b6bbba4e59_49277770%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c8d55475908cff0e2c144a9dc5ba6e66453b2da3' => 
    array (
      0 => 'application\\views\\templates\\notfound_index.tpl',
      1 => 1474820695,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '490157f1b6bbba4e59_49277770',
  'variables' => 
  array (
    'SERVER_ADMIN' => 0,
    'URL_PANEL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_57f1b6bbe44cf3_81982180',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_57f1b6bbe44cf3_81982180')) {
function content_57f1b6bbe44cf3_81982180 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '490157f1b6bbba4e59_49277770';
?>
<!-- start: page -->
<section class="body-error error-inside">
    <div class="center-error">

        <div class="row">
            <div class="col-md-8">
                <div class="main-error mb-xlg">
                    <h2 class="error-code text-dark text-center text-semibold m-none">404 <i class="fa fa-file"></i></h2>
                    <p class="error-explanation text-center">Lo sentimos, pero la página que estás buscando no existe.</p>
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
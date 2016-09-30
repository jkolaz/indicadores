<?php /* Smarty version 3.1.27, created on 2016-09-30 11:24:28
         compiled from "application\views\templates\inc\message.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2773257ee91bcb09133_13028397%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '665dd190c42d70c5e18f476346a9690ede227e31' => 
    array (
      0 => 'application\\views\\templates\\inc\\message.tpl',
      1 => 1473289800,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2773257ee91bcb09133_13028397',
  'variables' => 
  array (
    'permitido_message' => 0,
    'message' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_57ee91bcb16d29_14753597',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_57ee91bcb16d29_14753597')) {
function content_57ee91bcb16d29_14753597 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2773257ee91bcb09133_13028397';
if ($_smarty_tpl->tpl_vars['permitido_message']->value == 1) {?>
<div class="alert alert-success">
    <button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
    <?php echo $_smarty_tpl->tpl_vars['message']->value;?>

</div>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['permitido_message']->value == 2) {?>
<div class="alert alert-danger">
    <button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
    <?php echo $_smarty_tpl->tpl_vars['message']->value;?>

</div>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['permitido_message']->value == 3) {?>
<div class="alert alert-warning">
    <button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
    <?php echo $_smarty_tpl->tpl_vars['message']->value;?>

</div>
<?php }
}
}
?>
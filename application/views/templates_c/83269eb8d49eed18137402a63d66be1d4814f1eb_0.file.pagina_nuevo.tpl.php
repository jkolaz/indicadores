<?php /* Smarty version 3.1.27, created on 2016-10-02 20:42:12
         compiled from "application\views\templates\seguridad\pagina_nuevo.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:77257f1b774bc2837_15545617%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '83269eb8d49eed18137402a63d66be1d4814f1eb' => 
    array (
      0 => 'application\\views\\templates\\seguridad\\pagina_nuevo.tpl',
      1 => 1474820695,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '77257f1b774bc2837_15545617',
  'variables' => 
  array (
    'SERVER_ADMIN' => 0,
    'modulo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_57f1b774d87a94_28415409',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_57f1b774d87a94_28415409')) {
function content_57f1b774d87a94_28415409 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '77257f1b774bc2837_15545617';
?>
<div class="row">
    <div class="col-md-12">
        <form id="form" action="<?php echo $_smarty_tpl->tpl_vars['SERVER_ADMIN']->value;?>
seguridad/pagina/nuevo/<?php echo $_smarty_tpl->tpl_vars['modulo']->value;?>
.html" method="post" class="form-horizontal">
            <input name="txt_action" id="txt_action" type="hidden" value="nuevo">
            <input name="txt_pag_mod_id" id="txt_pag_mod_id" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['modulo']->value;?>
">
            <section class="panel">
                <header class="panel-heading">

                    <h2 class="panel-title">Nueva página</h2>
                </header>
                <div class="panel-body">
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Nombre <span class="required">*</span></label>
                        <div class="col-sm-9">
                            <input type="text" name="txt_pag_nombre" id="txt_sed_nombre" class="form-control" placeholder="ej.: Administradores" required value=""/>
                        </div>
                    </div>
                </div>
                <div class="panel-body">
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Url <span class="required">*</span></label>
                        <div class="col-sm-9">
                            <input type="text" name="txt_pag_url" id="txt_pag_url" class="form-control" placeholder="ej.: log/index" required autocomplete="off" value=""/>
                        </div>
                    </div>
                </div>
                <div class="panel-body">
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Icono <span class="required">*</span></label>
                        <div class="col-sm-2">
                            <input type="text" name="txt_pag_icon" id="txt_pag_icon" class="form-control" placeholder="ej.: fa-user" required autocomplete="off" value=""/>
                        </div>
                    </div>
                </div>
                <footer class="panel-footer">
                    <div class="row">
                        <div class="col-sm-9 col-sm-offset-3">
                            <button class="btn btn-primary">Guardar</button>
                            <button type="button" class="btn btn-default">Cancelar</button>
                            <!--<button type="reset" class="btn btn-default">Reset</button>-->
                        </div>
                    </div>
                </footer>
            </section>
        </form>
    </div>
</div><?php }
}
?>
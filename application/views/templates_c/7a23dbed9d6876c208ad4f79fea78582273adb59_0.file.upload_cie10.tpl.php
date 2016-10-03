<?php /* Smarty version 3.1.27, created on 2016-10-02 21:05:39
         compiled from "application\views\templates\archivos\upload_cie10.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2381657f1bcf3880627_08967073%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7a23dbed9d6876c208ad4f79fea78582273adb59' => 
    array (
      0 => 'application\\views\\templates\\archivos\\upload_cie10.tpl',
      1 => 1475460332,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2381657f1bcf3880627_08967073',
  'variables' => 
  array (
    'SERVER_ADMIN' => 0,
    'listado' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_57f1bcf3b3ba57_21261660',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_57f1bcf3b3ba57_21261660')) {
function content_57f1bcf3b3ba57_21261660 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2381657f1bcf3880627_08967073';
?>
<div class="row">
    <div class="col-md-12">
        <form id="form" action="<?php echo $_smarty_tpl->tpl_vars['SERVER_ADMIN']->value;?>
archivos/upload/cie10.html" method="post" class="form-horizontal" enctype="multipart/form-data">
            <input name="txt_action" id="txt_action" type="hidden" value="nuevo">
            <section class="panel">
                <header class="panel-heading">

                    <h2 class="panel-title"><?php echo $_smarty_tpl->tpl_vars['listado']->value;?>
</h2>
                </header>
                <div class="panel-body">
                    
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Imagen <span class="required">*</span></label>
                        <div class="col-sm-9">
                            <div class="fileupload fileupload-new" data-provides="fileupload">
                                <div class="input-append">
                                    <div class="uneditable-input">
                                        <i class="fa fa-file fileupload-exists"></i>
                                        <span class="fileupload-preview"></span>
                                    </div>
                                    <span class="btn btn-default btn-file">
                                        <span class="fileupload-exists">Cambiar</span>
                                        <span class="fileupload-new">Seleccionar Archivo</span>
                                        <input type="file" name="txt_archivo" id="txt_archivo" required accept="application/vnd.ms-excel"/>
                                    </span>
                                    <a href="#" class="btn btn-default fileupload-exists" data-dismiss="fileupload">Eliminar</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <footer class="panel-footer">
                    <div class="row">
                        <div class="col-sm-9 col-sm-offset-3">
                            <button class="btn btn-primary" id="guardar">Guardar</button>
                            <button type="button" class="btn btn-default" id="cancelar">Cancelar</button>
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
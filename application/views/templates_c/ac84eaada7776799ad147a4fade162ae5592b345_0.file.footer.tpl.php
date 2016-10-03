<?php /* Smarty version 3.1.27, created on 2016-10-02 08:06:44
         compiled from "application\views\templates\inc\footer.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2522457f10664d9e214_54369848%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ac84eaada7776799ad147a4fade162ae5592b345' => 
    array (
      0 => 'application\\views\\templates\\inc\\footer.tpl',
      1 => 1475413137,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2522457f10664d9e214_54369848',
  'variables' => 
  array (
    'SERVER_ADMIN' => 0,
    'DIR_PRINCIPAL' => 0,
    'datatable' => 0,
    'form' => 0,
    'fileupload' => 0,
    'wizard' => 0,
    'formulario' => 0,
    'chart' => 0,
    'js_script' => 0,
    'hc' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_57f10665006713_46084962',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_57f10665006713_46084962')) {
function content_57f10665006713_46084962 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2522457f10664d9e214_54369848';
?>
<!-- MODAL INICIO INFO-->
	<div id="modalInfo" class="modal-block modal-block-info mfp-hide">
			<section class="panel">
				<header class="panel-heading">
					<h2 class="panel-title">Informaciónn</h2>
				</header>
				<div class="panel-body">
					<div class="modal-wrapper">
						<div class="modal-icon">
							<i class="fa fa-info-circle"></i>
						</div>
						<div class="modal-text">
							<h4>Formato Imagen</h4>
							<p>Formato JPG<br>tamaño:<br>Horizontal: 768px * 400px<br>Vertical: 768px * 893px a -<br>Peso Máx. 45 kb</p>
							<p>Obs: En cada editor de texto, sólo puede poner una imagen.</p>
						</div>
					</div>
				</div>
				<footer class="panel-footer">
					<div class="row">
						<div class="col-md-12 text-right">
							<button class="btn btn-info modal-dismiss">OK</button>
						</div>
					</div>
				</footer>
			</section>
		</div>
<!-- MODAL FIN INFO-->
<div id="dialog" class="modal-block mfp-hide">
    <section class="panel">
        <header class="panel-heading">
            <h2 class="panel-title">¿Estás seguro?</h2>
        </header>
        <div class="panel-body">
            <div class="modal-wrapper">
                <div class="modal-text">
                    <p>¿Seguro que quieres eliminar esta fila?</p>
                </div>
            </div>
        </div>
        <footer class="panel-footer">
            <div class="row">
                <div class="col-md-12 text-right">
                    <button id="dialogConfirm" class="btn btn-primary">Confirm</button>
                    <button id="dialogCancel" class="btn btn-default">Cancel</button>
                </div>
            </div>
        </footer>
    </section>
</div>
<?php echo '<script'; ?>
 type="text/javascript">
    var base_url = '<?php echo $_smarty_tpl->tpl_vars['SERVER_ADMIN']->value;?>
';
<?php echo '</script'; ?>
>
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

<!-- Specific Page Vendor -->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['DIR_PRINCIPAL']->value;?>
assets/vendor/pnotify/pnotify.custom.js"><?php echo '</script'; ?>
>

<?php if ($_smarty_tpl->tpl_vars['datatable']->value > 0) {?>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['DIR_PRINCIPAL']->value;?>
assets/vendor/select2/select2.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['DIR_PRINCIPAL']->value;?>
assets/vendor/jquery-datatables/media/js/jquery.dataTables.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['DIR_PRINCIPAL']->value;?>
assets/vendor/jquery-datatables/extras/TableTools/js/dataTables.tableTools.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['DIR_PRINCIPAL']->value;?>
assets/vendor/jquery-datatables-bs3/assets/js/datatables.js"><?php echo '</script'; ?>
>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['form']->value > 0) {?>

<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['DIR_PRINCIPAL']->value;?>
assets/vendor/jquery-ui/js/jquery-ui-1.10.4.custom.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['DIR_PRINCIPAL']->value;?>
assets/vendor/jquery-ui-touch-punch/jquery.ui.touch-punch.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['DIR_PRINCIPAL']->value;?>
assets/vendor/select2/select2.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['DIR_PRINCIPAL']->value;?>
assets/vendor/summernote/summernote.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['DIR_PRINCIPAL']->value;?>
assets/vendor/bootstrap-maxlength/bootstrap-maxlength.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['DIR_PRINCIPAL']->value;?>
assets/vendor/ios7-switch/ios7-switch.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['DIR_PRINCIPAL']->value;?>
assets/vendor/bootstrap-fileupload/bootstrap-fileupload.min.js"><?php echo '</script'; ?>
>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['fileupload']->value > 0) {?>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['DIR_PRINCIPAL']->value;?>
assets/vendor/jquery-autosize/jquery.autosize.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['DIR_PRINCIPAL']->value;?>
assets/vendor/bootstrap-fileupload/bootstrap-fileupload.min.js"><?php echo '</script'; ?>
>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['wizard']->value > 0) {?>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['DIR_PRINCIPAL']->value;?>
assets/vendor/jquery-validation/jquery.validate.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['DIR_PRINCIPAL']->value;?>
assets/vendor/bootstrap-wizard/jquery.bootstrap.wizard.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['DIR_PRINCIPAL']->value;?>
assets/vendor/pnotify/pnotify.custom.js"><?php echo '</script'; ?>
>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['formulario']->value > 0) {?>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['DIR_PRINCIPAL']->value;?>
assets/vendor/dropzone/dropzone.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['DIR_PRINCIPAL']->value;?>
assets/vendor/jquery-maskedinput/jquery.maskedinput.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['DIR_PRINCIPAL']->value;?>
assets/vendor/bootstrap-timepicker/js/bootstrap-timepicker.js"><?php echo '</script'; ?>
>
<?php }?>
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

<?php if ($_smarty_tpl->tpl_vars['datatable']->value > 0) {?>
<!-- Examples -->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['DIR_PRINCIPAL']->value;?>
assets/javascripts/tables/examples.datatables.editable.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['DIR_PRINCIPAL']->value;?>
assets/javascripts/tables/examples.datatables.default.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['DIR_PRINCIPAL']->value;?>
assets/javascripts/tables/examples.datatables.row.with.details.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['DIR_PRINCIPAL']->value;?>
assets/javascripts/tables/examples.datatables.tabletools.js"><?php echo '</script'; ?>
>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['wizard']->value > 0) {?>
<!-- Examples -->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['DIR_PRINCIPAL']->value;?>
assets/javascripts/forms/examples.wizard.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">
    /*new PNotify({
            title: 'Felicitaciones',
            text: 'Has completado con exito el formulario',
            type: 'custom',
            addclass: 'notification-success',
            icon: 'fa fa-check'
    });*/
<?php echo '</script'; ?>
>
<?php }?>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['DIR_PRINCIPAL']->value;?>
assets/javascripts/ui-elements/examples.modals.js"><?php echo '</script'; ?>
>
<?php if ($_smarty_tpl->tpl_vars['form']->value > 0) {?>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['DIR_PRINCIPAL']->value;?>
assets/javascripts/forms/examples.advanced.form.js" /><?php echo '</script'; ?>
>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['chart']->value > 0) {?>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['DIR_PRINCIPAL']->value;?>
assets/chart/Chart.js"><?php echo '</script'; ?>
>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['js_script']->value != '') {?>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['DIR_PRINCIPAL']->value;?>
assets/<?php echo $_smarty_tpl->tpl_vars['js_script']->value;?>
"><?php echo '</script'; ?>
>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['hc']->value > 0) {?>
<?php echo '<script'; ?>
 src="https://code.highcharts.com/highcharts.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="https://code.highcharts.com/modules/exporting.js"><?php echo '</script'; ?>
>
<?php }
}
}
?>
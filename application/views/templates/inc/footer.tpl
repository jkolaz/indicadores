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
<script type="text/javascript">
    var base_url = '{$SERVER_ADMIN}';
</script>
<!-- Vendor -->
<script src="{$DIR_PRINCIPAL}assets/vendor/jquery/jquery.js"></script>
<script src="{$DIR_PRINCIPAL}assets/vendor/jquery-browser-mobile/jquery.browser.mobile.js"></script>
<script src="{$DIR_PRINCIPAL}assets/vendor/bootstrap/js/bootstrap.js"></script>
<script src="{$DIR_PRINCIPAL}assets/vendor/nanoscroller/nanoscroller.js"></script>
<script src="{$DIR_PRINCIPAL}assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
<script src="{$DIR_PRINCIPAL}assets/vendor/magnific-popup/magnific-popup.js"></script>
<script src="{$DIR_PRINCIPAL}assets/vendor/jquery-placeholder/jquery.placeholder.js"></script>

<!-- Specific Page Vendor -->
<script src="{$DIR_PRINCIPAL}assets/vendor/pnotify/pnotify.custom.js"></script>

{if $datatable gt 0}
<script src="{$DIR_PRINCIPAL}assets/vendor/select2/select2.js"></script>
<script src="{$DIR_PRINCIPAL}assets/vendor/jquery-datatables/media/js/jquery.dataTables.js"></script>
<script src="{$DIR_PRINCIPAL}assets/vendor/jquery-datatables/extras/TableTools/js/dataTables.tableTools.min.js"></script>
<script src="{$DIR_PRINCIPAL}assets/vendor/jquery-datatables-bs3/assets/js/datatables.js"></script>
{/if}
{if $form gt 0}

<script src="{$DIR_PRINCIPAL}assets/vendor/jquery-ui/js/jquery-ui-1.10.4.custom.js"></script>
<script src="{$DIR_PRINCIPAL}assets/vendor/jquery-ui-touch-punch/jquery.ui.touch-punch.js"></script>
<script src="{$DIR_PRINCIPAL}assets/vendor/select2/select2.js"></script>
<script src="{$DIR_PRINCIPAL}assets/vendor/summernote/summernote.js"></script>
<script src="{$DIR_PRINCIPAL}assets/vendor/bootstrap-maxlength/bootstrap-maxlength.js"></script>
<script src="{$DIR_PRINCIPAL}assets/vendor/ios7-switch/ios7-switch.js"></script>
<script src="{$DIR_PRINCIPAL}assets/vendor/bootstrap-fileupload/bootstrap-fileupload.min.js"></script>
{/if}
{if $fileupload gt 0}
<script src="{$DIR_PRINCIPAL}assets/vendor/jquery-autosize/jquery.autosize.js"></script>
<script src="{$DIR_PRINCIPAL}assets/vendor/bootstrap-fileupload/bootstrap-fileupload.min.js"></script>
{/if}
{if $wizard gt 0}
<script src="{$DIR_PRINCIPAL}assets/vendor/jquery-validation/jquery.validate.js"></script>
<script src="{$DIR_PRINCIPAL}assets/vendor/bootstrap-wizard/jquery.bootstrap.wizard.js"></script>
<script src="{$DIR_PRINCIPAL}assets/vendor/pnotify/pnotify.custom.js"></script>
{/if}
{if $formulario gt 0}
<script src="{$DIR_PRINCIPAL}assets/vendor/dropzone/dropzone.js"></script>
<script src="{$DIR_PRINCIPAL}assets/vendor/jquery-maskedinput/jquery.maskedinput.js"></script>
<script src="{$DIR_PRINCIPAL}assets/vendor/bootstrap-timepicker/js/bootstrap-timepicker.js"></script>
{/if}
<!-- Theme Base, Components and Settings -->
<script src="{$DIR_PRINCIPAL}assets/javascripts/theme.js"></script>

<!-- Theme Custom -->
<script src="{$DIR_PRINCIPAL}assets/javascripts/theme.custom.js"></script>

<!-- Theme Initialization Files -->
<script src="{$DIR_PRINCIPAL}assets/javascripts/theme.init.js"></script>

{if $datatable gt 0}
<!-- Examples -->
<script src="{$DIR_PRINCIPAL}assets/javascripts/tables/examples.datatables.editable.js"></script>
<script src="{$DIR_PRINCIPAL}assets/javascripts/tables/examples.datatables.default.js"></script>
<script src="{$DIR_PRINCIPAL}assets/javascripts/tables/examples.datatables.row.with.details.js"></script>
<script src="{$DIR_PRINCIPAL}assets/javascripts/tables/examples.datatables.tabletools.js"></script>
{/if}
{if $wizard gt 0}
<!-- Examples -->
<script src="{$DIR_PRINCIPAL}assets/javascripts/forms/examples.wizard.js"></script>
<script type="text/javascript">
    /*new PNotify({
            title: 'Felicitaciones',
            text: 'Has completado con exito el formulario',
            type: 'custom',
            addclass: 'notification-success',
            icon: 'fa fa-check'
    });*/
</script>
{/if}
<script src="{$DIR_PRINCIPAL}assets/javascripts/ui-elements/examples.modals.js"></script>
{if $form gt 0}
<script src="{$DIR_PRINCIPAL}assets/javascripts/forms/examples.advanced.form.js" /></script>
{/if}
{if $chart gt 0}
<script type="text/javascript" src="{$DIR_PRINCIPAL}assets/chart/Chart.js"></script>
{/if}
{if $js_script neq ""}
<script src="{$DIR_PRINCIPAL}assets/{$js_script}"></script>
{/if}
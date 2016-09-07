<div class="row">
    <div class="col-md-12">
        <form id="form" action="{$SERVER_ADMIN}seguridad/pagina/nuevo/{$modulo}.html" method="post" class="form-horizontal">
            <input name="txt_action" id="txt_action" type="hidden" value="nuevo">
            <input name="txt_pag_mod_id" id="txt_pag_mod_id" type="hidden" value="{$modulo}">
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
</div>
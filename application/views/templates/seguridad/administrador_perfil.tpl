<!-- start: page -->

<div class="row">
    <div class="col-md-4 col-lg-5">
        <section class="panel">
            <div class="panel-body">
                <div class="thumb-info mb-md">
                    <img src="{$DIR_PRINCIPAL}assets/images/!logged-user.jpg" class="rounded img-responsive" alt="{$stdAdm->adm_nombre} {$stdAdm->adm_apellidos}">
                    <div class="thumb-info-title">
                        <span class="thumb-info-inner">{$stdAdm->adm_nombre} {$stdAdm->adm_apellidos}</span>
                        <span class="thumb-info-type">{$stdTA->ta_nombre}</span>
                    </div>
                </div>

                <div class="widget-toggle-expand mb-md">
                    <div class="widget-header">
                            <h6>Información Completada</h6>
                    </div>
                    <div class="widget-content-collapsed">
                        <div class="progress progress-xs light">
                            <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">100%</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div class="col-md-8 col-lg-6">
        <div class="tabs">
            <ul class="nav nav-tabs tabs-primary">
                <li class="active">
                    <a href="#overview" data-toggle="tab">Información</a>
                </li>
                <!--<li>
                    <a href="#edit" data-toggle="tab">Edit</a>
                </li>-->
            </ul>
            <div class="tab-content">
                <div id="overview" class="tab-pane active">

                    <!--<h4 class="mb-xlg">Datos Generales</h4>-->

                    <div class="timeline timeline-simple mt-xlg mb-md">
                        <div class="tm-body">
                            <div class="tm-title">
                                <h3 class="h5 text-uppercase">Datos Generales</h3>
                            </div>
                            <ol class="tm-items">
                                <li>
                                    <div class="tm-box">
                                        <p class="text-muted mb-none"><span class="text-primary">Nombre(s)</span></p>
                                        <p>{$stdAdm->adm_nombre}</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="tm-box">
                                        <p class="text-muted mb-none"><span class="text-primary">Apellidos</span></p>
                                        <p>{$stdAdm->adm_apellidos}</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="tm-box">
                                        <p class="text-muted mb-none"><span class="text-primary">Tipo de administrador</span></p>
                                        <p>{$stdTA->ta_nombre}</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="tm-box">
                                        <p class="text-muted mb-none"><span class="text-primary">Usuario</span></p>
                                        <p>{$stdAdm->adm_nick}</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="tm-box">
                                        <p class="text-muted mb-none"><span class="text-primary">Correo</span></p>
                                        <p>{$stdAdm->adm_correo}</p>
                                    </div>
                                </li>
                                {if $stdAdm->adm_sed_id gt 0}
                                <li>
                                    <div class="tm-box">
                                        <p class="text-muted mb-none"><span class="text-primary">Sede asociada</span></p>
                                        <p>{$sede_nombre}</p>
                                    </div>
                                </li>
                                {/if}
                            </ol>
                        </div>
                    </div>
                </div>
                <!--<div id="edit" class="tab-pane">
                    <form class="form-horizontal" method="get">
                        <h4 class="mb-xlg">Personal Information</h4>
                        <fieldset>
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="profileFirstName">First Name</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" id="profileFirstName">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="profileLastName">Last Name</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" id="profileLastName">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="profileAddress">Address</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" id="profileAddress">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="profileCompany">Company</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" id="profileCompany">
                                </div>
                            </div>
                        </fieldset>
                        <hr class="dotted tall">
                        <h4 class="mb-xlg">About Yourself</h4>
                        <fieldset>
                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="profileBio">Biographical Info</label>
                                    <div class="col-md-8">
                                        <textarea class="form-control" rows="3" id="profileBio"></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-xs-3 control-label mt-xs pt-none">Public</label>
                                    <div class="col-md-8">
                                        <div class="checkbox-custom checkbox-default checkbox-inline mt-xs">
                                            <input type="checkbox" checked="" id="profilePublic">
                                            <label for="profilePublic"></label>
                                        </div>
                                    </div>
                                </div>
                        </fieldset>
                        <hr class="dotted tall">
                        <h4 class="mb-xlg">Change Password</h4>
                        <fieldset class="mb-xl">
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="profileNewPassword">New Password</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" id="profileNewPassword">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="profileNewPasswordRepeat">Repeat New Password</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" id="profileNewPasswordRepeat">
                                </div>
                            </div>
                        </fieldset>
                        <div class="panel-footer">
                            <div class="row">
                                <div class="col-md-9 col-md-offset-3">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                    <button type="reset" class="btn btn-default">Reset</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>-->
            </div>
        </div>
    </div>

</div>
<!-- end: page -->
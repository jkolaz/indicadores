<?php /* Smarty version 3.1.27, created on 2016-09-07 18:17:11
         compiled from "application\views\templates\seguridad\administrador_perfil.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1669557d09ff73f9f34_81324679%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ab335e1959681a6650e24064b35b7beab1a07d9e' => 
    array (
      0 => 'application\\views\\templates\\seguridad\\administrador_perfil.tpl',
      1 => 1473289804,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1669557d09ff73f9f34_81324679',
  'variables' => 
  array (
    'DIR_PRINCIPAL' => 0,
    'stdAdm' => 0,
    'stdTA' => 0,
    'sede_nombre' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_57d09ff74581e8_64329290',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_57d09ff74581e8_64329290')) {
function content_57d09ff74581e8_64329290 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1669557d09ff73f9f34_81324679';
?>
<!-- start: page -->

<div class="row">
    <div class="col-md-4 col-lg-5">
        <section class="panel">
            <div class="panel-body">
                <div class="thumb-info mb-md">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['DIR_PRINCIPAL']->value;?>
assets/images/!logged-user.jpg" class="rounded img-responsive" alt="<?php echo $_smarty_tpl->tpl_vars['stdAdm']->value->adm_nombre;?>
 <?php echo $_smarty_tpl->tpl_vars['stdAdm']->value->adm_apellidos;?>
">
                    <div class="thumb-info-title">
                        <span class="thumb-info-inner"><?php echo $_smarty_tpl->tpl_vars['stdAdm']->value->adm_nombre;?>
 <?php echo $_smarty_tpl->tpl_vars['stdAdm']->value->adm_apellidos;?>
</span>
                        <span class="thumb-info-type"><?php echo $_smarty_tpl->tpl_vars['stdTA']->value->ta_nombre;?>
</span>
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
                                        <p><?php echo $_smarty_tpl->tpl_vars['stdAdm']->value->adm_nombre;?>
</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="tm-box">
                                        <p class="text-muted mb-none"><span class="text-primary">Apellidos</span></p>
                                        <p><?php echo $_smarty_tpl->tpl_vars['stdAdm']->value->adm_apellidos;?>
</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="tm-box">
                                        <p class="text-muted mb-none"><span class="text-primary">Tipo de administrador</span></p>
                                        <p><?php echo $_smarty_tpl->tpl_vars['stdTA']->value->ta_nombre;?>
</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="tm-box">
                                        <p class="text-muted mb-none"><span class="text-primary">Usuario</span></p>
                                        <p><?php echo $_smarty_tpl->tpl_vars['stdAdm']->value->adm_nick;?>
</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="tm-box">
                                        <p class="text-muted mb-none"><span class="text-primary">Correo</span></p>
                                        <p><?php echo $_smarty_tpl->tpl_vars['stdAdm']->value->adm_correo;?>
</p>
                                    </div>
                                </li>
                                <?php if ($_smarty_tpl->tpl_vars['stdAdm']->value->adm_sed_id > 0) {?>
                                <li>
                                    <div class="tm-box">
                                        <p class="text-muted mb-none"><span class="text-primary">Sede asociada</span></p>
                                        <p><?php echo $_smarty_tpl->tpl_vars['sede_nombre']->value;?>
</p>
                                    </div>
                                </li>
                                <?php }?>
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
<!-- end: page --><?php }
}
?>
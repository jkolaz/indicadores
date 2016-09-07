<!doctype html>
<html class="fixed">
    <head>

        <!-- Basic -->
        <meta charset="UTF-8">
        <title>Cambiar contraseña | {$pg_title}</title>
        <meta name="keywords" content="{$pg_title}" />
        <meta name="description" content="{$pg_title}">
        <meta name="author" content="okler.net">

        <!-- Mobile Metas -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

        <!-- Web Fonts  -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

        <!-- Vendor CSS -->
        <link rel="stylesheet" href="{$DIR_PRINCIPAL}assets/vendor/bootstrap/css/bootstrap.css" />
        <link rel="stylesheet" href="{$DIR_PRINCIPAL}assets/vendor/font-awesome/css/font-awesome.css" />
        <link rel="stylesheet" href="{$DIR_PRINCIPAL}assets/vendor/magnific-popup/magnific-popup.css" />
        <link rel="stylesheet" href="{$DIR_PRINCIPAL}assets/vendor/bootstrap-datepicker/css/datepicker3.css" />

        <!-- Theme CSS -->
        <link rel="stylesheet" href="{$DIR_PRINCIPAL}assets/stylesheets/theme.css" />

        <!-- Skin CSS -->
        <link rel="stylesheet" href="{$DIR_PRINCIPAL}assets/stylesheets/skins/default.css" />

        <!-- Theme Custom CSS -->
        <link rel="stylesheet" href="{$DIR_PRINCIPAL}assets/stylesheets/theme-custom.css">

        <!-- Head Libs -->
        <script src="{$DIR_PRINCIPAL}assets/vendor/modernizr/modernizr.js"></script>

    </head>
    <body>
        <!-- start: page -->
        <section class="body-sign body-locked">
            <div class="center-sign">
                <div class="panel panel-sign">
                    <div class="panel-body">
                        <form id="formCP" id="formCP" method="POST" action="{$SERVER_ADMIN}seguridad/administrador/changepassword{$sufix}">
                            <div class="current-user text-center">
                                <img src="{$DIR_PRINCIPAL}assets/images/!logged-user.jpg" alt="John Doe" class="img-circle user-image" />
                                <h2 class="user-name text-dark m-none">{$stdAdm->adm_nombre} {$stdAdm->adm_apellidos}</h2>
                                <p class="user-email m-none">{$stdAdm->adm_correo}</p>
                            </div>
                            <div class="form-group mb-lg">
                                <div class="input-group input-group-icon">
                                    <input id="txt_action" name="txt_action" type="hidden" value="editar"/>
                                    <input id="pwd" name="pwd" type="password" class="form-control input-lg" required placeholder="Password" />
                                    <span class="input-group-addon">
                                        <span class="icon icon-lg">
                                            <i class="fa fa-lock"></i>
                                        </span>
                                    </span>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-xs-6">
                                    <p class="mt-xs mb-none">
                                        <a class="btn btn-danger" href="{$SERVER_ADMIN}{$cancelar}{$sufix}">Cancelar</a>
                                    </p>
                                    <p class="mt-xs mb-none">
                                        <a href="{$SERVER_ADMIN}{$logout}{$sufix}">¿no eres {$stdAdm->adm_nombre}?</a>
                                    </p>
                                </div>
                                <div class="col-xs-6 text-right">
                                    <button type="submit" class="btn btn-primary">Cambiar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- end: page -->

        <!-- Vendor -->
        <script src="{$DIR_PRINCIPAL}assets/vendor/jquery/jquery.js"></script>
        <script src="{$DIR_PRINCIPAL}assets/vendor/jquery-browser-mobile/jquery.browser.mobile.js"></script>
        <script src="{$DIR_PRINCIPAL}assets/vendor/bootstrap/js/bootstrap.js"></script>
        <script src="{$DIR_PRINCIPAL}assets/vendor/nanoscroller/nanoscroller.js"></script>
        <script src="{$DIR_PRINCIPAL}assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
        <script src="{$DIR_PRINCIPAL}assets/vendor/magnific-popup/magnific-popup.js"></script>
        <script src="{$DIR_PRINCIPAL}assets/vendor/jquery-placeholder/jquery.placeholder.js"></script>
        <script src="{$DIR_PRINCIPAL}assets/vendor/jquery-validation/jquery.validate.js"></script>

        <!-- Theme Base, Components and Settings -->
        <script src="{$DIR_PRINCIPAL}assets/javascripts/theme.js"></script>

        <!-- Theme Custom -->
        <script src="{$DIR_PRINCIPAL}assets/javascripts/theme.custom.js"></script>

        <!-- Theme Initialization Files -->
        <script src="{$DIR_PRINCIPAL}assets/javascripts/theme.init.js"></script>

    </body>
</html>
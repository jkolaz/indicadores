<!doctype html>
<html class="fixed">
    {$head}
    <body>
        <section class="body">

            <!-- start: header -->
            <header class="header">
                <div class="logo-container">
                    <a href="../" class="logo">
                        <img src="{$DIR_PRINCIPAL}assets/images/logo.png" height="35" alt="Gestor Orden Hospitalaria" />
                    </a>
                    <div class="visible-xs toggle-sidebar-left" data-toggle-class="sidebar-left-opened" data-target="html" data-fire-event="sidebar-left-opened">
                        <i class="fa fa-bars" aria-label="Toggle sidebar"></i>
                    </div>
                </div>

                {$panel_cuenta}
            </header>
            <!-- end: header -->

            <div class="inner-wrapper">
                {$menu}

                <section role="main" class="content-body">
                    <header class="page-header">
                        <h2>{$listado}</h2>
                        <div class="right-wrapper pull-right">
                            <ol class="breadcrumbs">
                                <li>
                                    <a href="{$SERVER_ADMIN}seguridad/principal/index.html">
                                        <i class="fa fa-home"></i>
                                    </a>
                                </li>
                                {if $details neq ""}
                                <li>
                                    <a href="{$SERVER_ADMIN}{$url_back}.html">
                                        <span>{$details}</span>
                                    </a>
                                </li>
                                {/if}
                                {if $details1 neq ""}
                                <li><span>{$details1}</span></li>
                                {/if}
                            </ol>

                            <!--<a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>-->
                        </div>
                    </header>

                    {$content_main}
                </section>
            </div>

            <aside id="sidebar-right" class="sidebar-right">
                <div class="nano">
                    <div class="nano-content">
                        <a href="#" class="mobile-close visible-xs">
                            Collapse <i class="fa fa-chevron-right"></i>
                        </a>

                        <div class="sidebar-right-wrapper">

                            <div class="sidebar-widget widget-calendar">
                                <h6>Upcoming Tasks</h6>
                                <div data-plugin-datepicker data-plugin-skin="dark" ></div>

                            </div>

                        </div>
                    </div>
                </div>
            </aside>
        </section>

        {$footer}

    </body>
</html>
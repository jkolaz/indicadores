<section class="panel">
    {$message}
    <header class="panel-heading">
        <h2 class="panel-title">{$listado}</h2>
    </header>
    <div class="panel-body">
        <div class="row">
            <div class="col-md-2">
                <div class="form-group">
                    <label class="col-sm-3 control-label"><b>Año</b></label>
                    <div class="col-sm-12">
                        <select data-plugin-selectTwo id="txt_anio" name="txt_anio" class="form-control populate" multiple="">
                            <option value="all">TODOS</option>
                            {if $objAnio|@count gt 0}
                                {section name=i loop=$objAnio}
                            <option value="{$objAnio[i]->anio}">{$objAnio[i]->anio}</option>
                                {/section}
                            {/if}
                        </select>
                    </div>
                </div>
            </div>
            <!--<div class="col-md-2">
                <div class="form-group">
                    <label class="col-sm-3 control-label"><b>Mes</b></label>
                    <div class="col-sm-9">
                        <select data-plugin-selectTwo id="txt_mes" name="txt_mes" class="form-control populate" disabled="" >
                            <option value="">Seleccionar</option>
                        </select>
                    </div>
                </div>
            </div>-->
            <div class="col-md-2">
                <div class="form-group">
                    <label class="col-sm-3 control-label"><b>Sede</b></label>
                    <div class="col-sm-9">
                        <select data-plugin-selectTwo id="txt_sede" name="txt_sede" class="form-control populate" disabled="" >
                            <option value="">Seleccionar</option>
                            {if $objSedeCBO|@count gt 0}
                                {section name=i loop=$objSedeCBO}
                            <option value="{$objSedeCBO[i]->sed_id}" {$objSedeCBO[i]->selected}>{$objSedeCBO[i]->sed_nombre}</option>
                                {/section}
                            {/if}
                        </select>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label class="col-sm-3 control-label"><b>Especialidades</b></label>
                    <div class="col-sm-12">
                        <select data-plugin-selectTwo id="txt_esp" name="txt_esp" multiple="" class="form-control populate" disabled="" >
                            <option value="">TODOS</option>
                            <optgroup label="Tipos de especialidades">
                                {if $objEsp|@count gt 0}
                                    {section name=h loop=$objEsp}
                                <option value="{$objEsp[h]->esp_id}">{$objEsp[h]->esp_descripcion}</option>
                                    {/section}
                                {/if}
                            </optgroup>
                            {if $objEsp|@count gt 0}
                                {section name=j loop=$objEsp}
                            <optgroup label="{$objEsp[j]->esp_descripcion}">
                                    {if $objEsp[j]->especialidad|@count gt 0}
                                        {section name=k loop=$objEsp[j]->especialidad}
                                <option value="{$objEsp[j]->especialidad[k]->esp_descripcion}">{$objEsp[j]->especialidad[k]->esp_descripcion}</option>
                                        {/section}
                                    {/if}
                            </optgroup>
                                {/section}
                            {/if}
                        </select>
                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <div class="mb-md">
                    <button id="btnReporte" class="btn btn-primary" disabled="">
                        Generar reporte&nbsp;<i class="fa fa-share"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="panel-body">
        <div id="container" style="min-width: 310px; max-width: 800px; height: 400px; margin: 0 auto"></div>
    </div>
    <div class="panel-body">
        <div class="table-responsive">
            <table class="table mb-none">
                <thead>
                    <tr>
                        <th>Especialidad</th>
                        <th>N° de atenciones</th>
                        <th>(%)</th>
                    </tr>
                </thead>
                <tbody id="bodyEspecialidad">

                </tbody>
            </table>
        </div>
    </div>
</section>
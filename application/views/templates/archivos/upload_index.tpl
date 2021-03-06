<section class="panel">
    {$message}
    <header class="panel-heading">
        <h2 class="panel-title">{$listado}</h2>
    </header>
    <div class="panel-body">
        <div class="row">
            <!--<div class="col-sm-6">
                <div class="mb-md" id="nuevo">
                    <button id="addToTable" class="btn btn-primary">
                        Registro nuevo
                        <i class="fa fa-plus"></i>
                    </button>
                </div>
            </div>-->
            <div class="form-group">
                <label class="col-sm-1 control-label"><b>Sede</b></label>
                <div class="col-sm-3">
                    <select data-plugin-selectTwo id="txt_sede" name="txt_sede" required class="form-control populate">
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
        <table class="table table-striped mb-none datatable-sinButtons" data-swf-path="assets/vendor/jquery-datatables/extras/TableTools/swf/copy_csv_xls_pdf.swf">
            <thead>
                <tr>
                    <th>Archivo</th>
                    <th>Tipo</th>
                    <th>N° lineas leidas</th>
                    <th>Estado</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                {if $objArchivo|@count gt 0}
                    {section name=tipo loop=$objArchivo}
                <tr class="gradeX">
                        <td>{$objArchivo[tipo]->arc_nombre}</td>
                        <td>{$objArchivo[tipo]->arc_type}</td>
                        <td>{$objArchivo[tipo]->arc_num_lines_read}</td>
                        <td class="actions">
                            <a href="javascript:;" class="icono" id="lIcono_{$objArchivo[tipo]->arc_id}" icono="{$objArchivo[tipo]->icon_estado}" pk="{$objArchivo[tipo]->arc_id}">
                                <i class="fa {$objArchivo[tipo]->icon_estado}" id="icon_{$objArchivo[tipo]->arc_id}"></i>
                            </a>
                        </td>
                        <td class="actions">
                            <a href="javascript:;" onclick="procesar_archivo({$objArchivo[tipo]->arc_id},'{$objArchivo[tipo]->arc_type}')" title="Procesar {$objArchivo[tipo]->arc_nombre}">
                                <i class="fa fa-share"></i> Procesar
                            </a>
                        </td>
                </tr>
                    {/section}
                {/if}
            </tbody>
        </table>
    </div>
</section>
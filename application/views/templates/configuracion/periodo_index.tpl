<section class="panel">
    {$message}
    <header class="panel-heading">
        <h2 class="panel-title">Sede</h2>
    </header>
    <div class="panel-body">
        <div class="row">
            <div class="col-sm-6">
                <div class="mb-md" id="nuevo">
                    <button id="addToTable" class="btn btn-primary">
                        Registrar nuevo periodo
                        <i class="fa fa-plus"></i>
                    </button>
                </div>
            </div>
        </div>
            <div class="table-responsive">
                    <table class="table mb-none">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Estado</th>
                            </tr>
                        </thead>
                        <tbody>
                        {if $objPeriodo|@count gt 0}
                            {section name=tipo loop=$objPeriodo}
                            <tr class="active">
                                <td>{$objPeriodo[tipo]->peri_fecha}</td>
                                <td class="actions">
                                    <a href="javascript:;" class="icono" id="lIcono_{$objPeriodo[tipo]->peri_id}" icono="{$objPeriodo[tipo]->icon_estado}" id_sede="{$objPeriodo[tipo]->peri_id}">
                                        <i class="fa {$objPeriodo[tipo]->icon_estado}" id="icon_{$objPeriodo[tipo]->peri_id}"></i>
                                    </a>
                                </td>
                            </tr>
                            {/section}
                        {else}
                            <tr>
                                <td colspan="7" class="text-center"><b>No se encontraron registros</b></td>
                            </tr>
                        {/if}
                        </tbody>
                    </table>
            </div>
    </div>
</section>
<!-- end: page -->
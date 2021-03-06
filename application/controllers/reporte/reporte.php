<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of reporte
 *
 * @author VMC-D02
 */
class Reporte extends CI_Controller{
    //put your code here
    public function __construct() {
        parent::__construct();
    }
    
    public function consultaexterna(){
        $ta = $this->session->userdata('idRol');
        $sede = $this->session->userdata('sede');
        $this->load->model('configuracion/sede_model', 'sede');
        $this->load->model('configuracion/especialidad_model', 'especialidad');
        $objEspecialidad = $this->especialidad->getCBO();
        
        $objSede = NULL;
        switch ($ta){
            case 1:
                $whereSede['sed_estado'] = 1;
                $objSede = $this->sede->getSedeCBO($whereSede, $sede);
                break;
            default:
               if($sede > 0){
                    $whereSede['sede'] = $sede;
                    $objSede = $this->sede->getSedeCBO($whereSede, $sede);
                } 
        }
        $this->load->model('registro/consultaexterna_model', 'ce');
        $this->load->model('reporte/periodo_model', 'periodo');
        $this->smartyci->assign('js_script', $this->_carpeta.'/'.$this->_class.'_'.$this->_method.'.js');
        $where['peri_estado'] = 1;
        $objeto = $this->periodo->getDatebyGrupo($where, 'anio');
        $this->smartyci->assign('objAnio', $objeto);
        $this->smartyci->assign('objSedeCBO', $objSede);
        $this->smartyci->assign('objEsp', $objEspecialidad);
        $this->smartyci->assign('hc', 1);
        $this->smartyci->assign('listado', 'Reporte de consulta externa por especialidades');
        $this->smartyci->show_page();
    }
    
    public function cie10(){
        $ta = $this->session->userdata('idRol');
        $sede = $this->session->userdata('sede');
        $this->load->model('configuracion/sede_model', 'sede');
        $this->load->model('configuracion/especialidad_model', 'especialidad');
        $objEspecialidad = $this->especialidad->getCBO();
        
        $objSede = NULL;
        switch ($ta){
            case 1:
                $whereSede['sed_estado'] = 1;
                $objSede = $this->sede->getSedeCBO($whereSede, $sede);
                break;
            default:
               if($sede > 0){
                    $whereSede['sede'] = $sede;
                    $objSede = $this->sede->getSedeCBO($whereSede, $sede);
                } 
        }
        $this->load->model('registro/consultaexterna_model', 'ce');
        $this->load->model('reporte/periodo_model', 'periodo');
        $this->smartyci->assign('js_script', $this->_carpeta.'/'.$this->_class.'_'.$this->_method.'.js');
        $where['peri_estado != '] = 2;
        $objeto = $this->periodo->getDatebyGrupo($where, 'anio');
        $this->smartyci->assign('objAnio', $objeto);
        $this->smartyci->assign('objSedeCBO', $objSede);
        $this->smartyci->assign('objEsp', $objEspecialidad);
        $this->smartyci->assign('hc', 1);
        $this->smartyci->assign('listado', 'Reporte de consulta externa por diagnosticos');
        $this->smartyci->show_page();
    }
    
    public function ajaxMes(){
        $this->load->model('reporte/periodo_model', 'periodo');
        $anio = $this->input->post('anio');
        $type = $this->input->post('type');
        $where = array();
        if($type == 1){
            $objeto = $this->periodo->getDatebyGrupo($where, 'mes', $anio);
        }else{
            $objeto = $this->periodo->getDatebyGrupo1($where, 'mes', $anio);
        }
        $options = '<option value="">TODOS</option>';
        if($objeto){
            foreach($objeto as $valor){
                $options .= '<option value="'.$valor->mes.'">'.$valor->mes_text.'-'.$valor->anio.'</option>';
            }
        }
        echo json_encode(array(
            'respuesta'=>1,
            'options'=>$options
        ));
    }
    
    public function getDataAjax(){
        $this->load->model('reporte/periodo_model', 'periodo');
        $this->load->model('configuracion/especialidad_model', 'especialidad');
        $anio = $this->input->post('anio');
        $mes = $this->input->post('mes');
        $esp = $this->input->post('esp');
        $sede = $this->input->post('sede');
        //$anio = 2016;
        
        $aEsp = array();
        $TipoEsp = array(1, 2);
        if(is_array($esp)){
            foreach($esp as $value){
                if(in_array($value, $TipoEsp)){
                    $whereEsp['esp_estado'] = 1;
                    $whereEsp['esp_root'] = $value;
                    $objEsp = $this->especialidad->getAll($whereEsp, 'esp_descripcion');
                    if($objEsp){
                        foreach($objEsp as $descripcion){
                            if(!in_array($descripcion->esp_descripcion, $esp)){
                                $aEsp[] = $descripcion->esp_descripcion;
                            }
                        }
                    }
                }else{
                    if($value != ""){
                        $aEsp[] = $value;
                    }
                }
            }
        }
        
        $where = array();
        $objeto = $this->periodo->getDatebyGrupo($where, '', $anio, $mes);
        
        $data = array();
        foreach ($objeto as $value){
            $registro['name'] = $value->mes_text.' '.$value->anio;
            $registro['sede'] = $this->periodo->getDataReporte($anio, $value->mes, $sede, $aEsp);
            
            $data[] = $registro;
        }
        $arregloSede = array();
        foreach ($data[0]['sede'] as $aSede){
            $arregloSede[] = array($aSede->sed_nombre);
        }
        $sedeData = array();
        foreach ($arregloSede as $val){
            $arregloCant = array();
            foreach($data as $valor){
                foreach($valor['sede'] as $sedCant){
                    if($sedCant->sed_nombre == $val[0]){
                        $arregloCant[] = $sedCant->cantidad;
                    }
                }
            }
            $cant_tex = implode(',', $arregloCant);
            eval("\$cant_tex = array($cant_tex);");
            $sedeData[] = array(
                                'name'=>$val,
                                'data'=> $cant_tex
                            );
        }
        $arregloMes = array(); 
        foreach($data as $aMes){
            $arregloMes[] = array($aMes['name']);
        }
        
        $objEspecialidad = $this->periodo->getDataReporteEspecialidad($anio, $mes, $sede, $aEsp);
        $sumTotal = 0;
        foreach($objEspecialidad as $row){
            $sumTotal += $row->cantidad;
        }
        
        echo json_encode(array(
            'respuesta'=>1,
            'datos'=>$data,
            'sede' => $arregloSede,
            'mes'=>$arregloMes,
            'serie'=>$sedeData,
            'especialidad'=>$objEspecialidad,
            'total' => $sumTotal
        ));
    }
    
    public function getDataAjaxCie10(){
        $this->load->model('reporte/periodo_model', 'periodo');
        $this->load->model('configuracion/especialidad_model', 'especialidad');
        $anio = $this->input->post('anio');
        //$mes = $this->input->post('mes');
        $esp = $this->input->post('esp');
        $sede = $this->input->post('sede');
        
        $aEsp = array();
        $TipoEsp = array(1, 2);
        if(is_array($esp)){
            foreach($esp as $value){
                if(in_array($value, $TipoEsp)){
                    $whereEsp['esp_estado'] = 1;
                    $whereEsp['esp_root'] = $value;
                    $objEsp = $this->especialidad->getAll($whereEsp, 'esp_descripcion');
                    if($objEsp){
                        foreach($objEsp as $descripcion){
                            if(!in_array($descripcion->esp_descripcion, $esp)){
                                $aEsp[] = $descripcion->esp_descripcion;
                            }
                        }
                    }
                }else{
                    if($value != ""){
                        $aEsp[] = $value;
                    }
                }
            }
        }
        
        $objAnio = $this->periodo->getAnio($anio);
        
        $aCie10 = array();
        $aCie10Id = array();
        $objCie10 = $this->periodo->getCie10($anio, $sede, $aEsp);
        if($objCie10){
            foreach ($objCie10 as $vCie10){
                $aCie10[] = array($vCie10->cie_detalle);
                $aCie10Id[] = $vCie10->ce_cie_10_principal;
            }
        }
        
        $serie = array();
        if(count($objAnio) > 0){
            foreach($objAnio as $rAnio){
                $objCie10Anio = $this->periodo->getCie10ByAnio($rAnio, $aCie10Id, $sede, $aEsp);
                $permit = false;
                if($objCie10Anio){
                    $permit = true;
                }
                $arregloData = array();
                foreach ($aCie10Id as $rCie10){
                    if($permit){
                        $vCantidad = 0;
                        foreach($objCie10Anio as $rCA){
                            if($rCie10 == $rCA->ce_cie_10_principal){
                                $vCantidad = $rCA->cantidad;
                                break;
                            }
                        }
                        $arregloData[] = $vCantidad;
                    }else{
                        $arregloData[] = 0;
                    }
                }
                $cant_tex = implode(',', $arregloData);
                eval("\$cant_tex = array($cant_tex);");
                
                $serie[] = array(
                                'name' => 'Año '.$rAnio,
                                'data'=> $cant_tex
                            );
            }
        }
        
        echo json_encode(array(
            'respuesta'=>1,
            'serie' => $serie,
            'diagnostico'=>$aCie10,
            'diagnosticoTotal'=>$objCie10,
        ));
    }
    
    public function especialidadByDiagnostico(){
        $this->load->model('reporte/periodo_model', 'periodo');
        $this->load->model('configuracion/especialidad_model', 'especialidad');
        
        $diagnostico = $this->input->post('diagnostico');
        $anio = $this->input->post('anio');
        $sede = $this->input->post('sede');
        $esp = $this->input->post('esp');
        
        $aEsp = array();
        $TipoEsp = array(1, 2);
        if(is_array($esp)){
            foreach($esp as $value){
                if(in_array($value, $TipoEsp)){
                    $whereEsp['esp_estado'] = 1;
                    $whereEsp['esp_root'] = $value;
                    $objEsp = $this->especialidad->getAll($whereEsp, 'esp_descripcion');
                    if($objEsp){
                        foreach($objEsp as $descripcion){
                            if(!in_array($descripcion->esp_descripcion, $esp)){
                                $aEsp[] = $descripcion->esp_descripcion;
                            }
                        }
                    }
                }else{
                    if($value != ""){
                        $aEsp[] = $value;
                    }
                }
            }
        }
        
        $objeto = $this->periodo->especialidadByDiagnostico($diagnostico, $anio, $sede, $aEsp);
        
        echo json_encode(
                    array(
                        'result' => 1,
                        'especialidad'=> $objeto
                    )
                );
    }
}

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
        $where['peri_estado'] = 1;
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
        $where = array();
        $objeto = $this->periodo->getDatebyGrupo($where, 'mes', $anio);
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
}

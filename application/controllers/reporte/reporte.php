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
        $this->load->model('registro/consultaexterna_model', 'ce');
        $this->load->model('reporte/periodo_model', 'periodo');
        $this->smartyci->assign('js_script', $this->_carpeta.'/'.$this->_class.'_'.$this->_method.'.js');
        $where['peri_estado'] = 1;
        $objeto = $this->periodo->getDatebyGrupo($where, 'anio');
        $this->smartyci->assign('objAnio', $objeto);
        $this->smartyci->assign('hc', 1);
        $this->smartyci->show_page();
    }
    
    public function ajaxMes(){
        $this->load->model('reporte/periodo_model', 'periodo');
        $anio = $this->input->post('anio');
        $where["peri_estado"] = 1;
        $objeto = $this->periodo->getDatebyGrupo($where, 'mes', $anio);
        $options = '<option value="all">TODOS</option>';
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
        $anio = $this->input->post('anio');
        $mes = $this->input->post('mes');
        $esp = $this->input->post('esp');
        //$anio = 2016;
        
        $where['peri_estado'] = 1;
        $objeto = $this->periodo->getDatebyGrupo($where, '', $anio);
        
        $data = array();
        foreach ($objeto as $value){
            $registro['name'] = $value->mes_text.' '.$value->anio;
            $registro['sede'] = $this->periodo->getDataReporte($anio, $value->mes);
            
            $data[] = $registro;
        }
        $arregloSede = array();
        foreach ($data[0]['sede'] as $sede){
            $arregloSede[] = array($sede->sed_nombre);
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
        foreach($data as $mes){
            $arregloMes[] = array($mes['name']);
        }
        
        $objEspecialidad = $this->periodo->getDataReporteEspecialidad($anio);
        
        echo json_encode(array(
            'respuesta'=>1,
            'datos'=>$data,
            'sede' => $arregloSede,
            'mes'=>$arregloMes,
            'serie'=>$sedeData,
            'especialidad'=>$objEspecialidad
        ));
    }
}

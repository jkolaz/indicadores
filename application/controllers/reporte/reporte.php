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
                $options .= '<option value="'.$valor->anio.'-'.$valor->mes.'">'.$valor->mes_text.'-'.$valor->anio.'</option>';
            }
        }
        echo json_encode(array(
            'respuesta'=>1,
            'options'=>$options
        ));
    }
    
    public function getDataAjax(){
        $this->load->model('configuracion/sede_model', 'sede');
        $this->load->model('reporte/periodo_model', 'periodo');
        //$anio = $this->input->post('anio');
        $anio = 2016;
        
        $where['sed_estado'] = 1;
        $objSede = $this->sede->getAllSede($where);
        imprimir($objSede);
        
        $objeto = $this->periodo->getDataReporte($anio);
        imprimir($objeto);
        
        $data = array();
        if($objSede){
            foreach($objSede as $valor){
                $sede['sede'] = $valor->sed_nombre;
                $data[] = $sede;
            }
        }
        imprimir($data);
    }
}

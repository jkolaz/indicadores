<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of periodo
 *
 * @author julio
 */
class Periodo extends CI_Controller{
    //put your code here
    public function __construct() {
        parent::__construct();
        $this->load->model('reporte/periodo_model', 'periodo');
        $this->smartyci->assign('js_script', $this->_carpeta.'/'.$this->_class.'.js');
    }
    
    public function index(){
        $where['peri_estado <'] = 2;
        $objeto = $this->periodo->getAll($where, 'peri_fecha desc');
        if($objeto){
            foreach($objeto as $id=>$value){
                $icon_estado = 'fa-ban';
                if($value->peri_estado == 1){
                    $icon_estado = 'fa-check';
                }
                $objeto[$id]->icon_estado = $icon_estado;
            }
        }
        $this->smartyci->assign('objPeriodo', $objeto);
        $this->smartyci->show_page();
    }
    
    public function changeEstado(){
        $result = 0;
        $id = $this->input->post('id');
        $icon = $this->input->post('icon');
        if($id>0){
            $this->periodo->getRow($id);
            if($this->periodo->peri_id > 0){
                if($this->periodo->peri_estado == 1){
                    $this->periodo->peri_estado = 0;
                    $icon = 'fa-ban';
                    $result = 1;
                }else{
                    $where['peri_estado'] = 1;
                    $update['peri_estado'] = 0;
                    $this->periodo->updateAll($update, $where);
                    $this->periodo->peri_estado = 1;
                    $icon = 'fa-check';
                    $result = 2;
                }
                $this->periodo->update();
                
            }
        }
        echo json_encode(array('respuesta'=>$result, 'icon'=>$icon));
    }
    
    public function nuevo(){
        $max = $this->periodo->max('peri_fecha');
        if($max){
            $where['peri_estado'] = 1;
            $update['peri_estado'] = 0;
            $this->periodo->updateAll($update, $where);
            $nextMonth = date('Y-m-d', strtotime($max. '+1 month'));
        }else{
            $nextMonth = date('Y-m-d', strtotime('-1 month'));
        }        
        $this->periodo->peri_fecha = $nextMonth;
        if($this->periodo->insert()){
            $this->writeLog("Registró periodo {$nextMonth}(id::{$this->periodo->peri_id})");
            $this->session->set_userdata('message_id', 1);
            $this->session->set_userdata('message', 'MSG1');
        }else{
            $this->session->set_userdata('message_id', 2);
            $this->session->set_userdata('message', 'ERR1');
        }
        redirect('configuracion/periodo/index');
    }
}

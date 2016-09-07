<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of modulo
 *
 * @author elvin
 */
class Modulo extends CI_Controller{
    //put your code here
    public function __construct() {
        parent::__construct();
        $this->smartyci->assign('listado', 'Módulos del sistema');
        $this->load->model('seguridad/modulo_model', 'modulo');
        $this->smartyci->assign('js_script', $this->_carpeta.'/'.$this->_class.'.js');
    }
    
    public function index(){
        $objModulo = $this->modulo->getAll();
        if($objModulo){
            foreach ($objModulo as $id=>$value){
                $icon_estado = 'fa-ban';
                if($value->mod_estado == 1){
                    $icon_estado = 'fa-check';
                }
                $objModulo[$id]->icon_estado = $icon_estado;
            }
        }
        $this->smartyci->assign('modulo', $objModulo);
        $this->smartyci->show_page(NULL, uniqid());
    }
    
    public function changeEstado(){
        $result = 0;
        $id = $this->input->post('id');
        $icon = $this->input->post('icon');
        if($id>0){
            $this->modulo->getRow($id);
            if($this->modulo->mod_id > 0){
                if($this->modulo->mod_estado == 1){
                    $this->modulo->mod_estado = 0;
                    $icon = 'fa-ban';
                }else{
                    $this->modulo->mod_estado = 1;
                    $icon = 'fa-check';
                }
                $this->modulo->update();
                $result = 1;
            }
        }
        echo json_encode(array('respuesta'=>$result, 'icon'=>$icon));
    }
    
    public function editar($id){
        $this->modulo->getRow($id);
        if($this->modulo->mod_id > 0){
            $action = $this->input->post('txt_action');
            if(isset($action) && $action == 'editar'){
                $this->modulo->getValsForm($this->input->post());
                
                if($this->modulo->update()){
                    $this->session->set_userdata('message_id', 1);
                    $this->session->set_userdata('message', 'MSG1');
                    $this->writeLog("Editó módulo {$this->modulo->mod_nombre} (id::{$this->modulo->mod_id})");
                    redirect('seguridad/modulo/index');
                }else{
                    $this->session->set_userdata('message_id', 2);
                    $this->session->set_userdata('message', 'ERR1');
                    redirect('seguridad/modulo/editar/'.$id);
                }
            }else{
                $this->smartyci->assign('form', 1);
                $this->smartyci->assign('id', $id);
                $this->smartyci->assign('stdModulo', $this->modulo);
                $this->smartyci->show_page(NULL, uniqid());
            }
        }  else {
            $this->session->set_userdata('message_id', 2);
            $this->session->set_userdata('message', 'ERR2');
            redirect('seguridad/modulo/index');
        }
    }
}

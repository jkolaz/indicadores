<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of sede
 *
 * @author elvin
 */
class Sede extends CI_Controller{
    //put your code here
    
    public function __construct() {
        parent::__construct();
        $this->load->model('configuracion/sede_model', 'sede');  
        $this->smartyci->assign('listado', 'Sedes');
        $this->smartyci->assign('details', 'Sedes'); 
        $this->smartyci->assign('url_back', $this->_carpeta.'/'.$this->_class.'/index');
        $this->smartyci->assign('js_script', $this->_carpeta.'/'.$this->_class.'.js');
    }
    
    public function index(){
        if($this->_rol != 1){
            redirect(URL_NO_PERMISO);
        }
        $objSede = $this->sede->getAllSede();
        if($objSede){
            foreach ($objSede as $id=>$value){
                $icon_estado = 'fa-ban';
                if($value->sed_estado == 1){
                    $icon_estado = 'fa-check';
                }
                $objSede[$id]->icon_estado = $icon_estado;
            }
        }
        $this->smartyci->assign('objSede', $objSede);
        $this->smartyci->show_page(NULL,  uniqid());
    }
    
    public function editar($id){
        $this->sede->getSedeById($id);
        if($this->sede->sed_id > 0){
            if(isset($_POST['txt_action']) && $_POST['txt_action'] == 'editar'){
                $this->sede->getValsForm($_POST);
                if($this->sede->update()){
                    $this->session->set_userdata('message_id', 1);
                    $this->session->set_userdata('message', 'MSG1');
                    $this->writeLog("Editó la sede {$this->sede->sed_nombre}(id::{$this->sede->sed_id})");
                    redirect('configuracion/sede/index');
                }else{
                    $this->session->set_userdata('message_id', 2);
                    $this->session->set_userdata('message', 'ERR1');
                    redirect('configuracion/sede/editar/'.$id);
                }
            }else{
                $this->smartyci->assign('stdSede', $this->sede);
                $this->smartyci->assign('ID', $id);
                $this->smartyci->assign('form', 1);
                $this->smartyci->show_page(NULL,  uniqid());
            }
        }else{
            redirect('configuracion/sede/index');
        }
    }
    public function eliminar($id){
        $this->sede->getSedeById($id);
        $this->sede->sed_estado = 2;
        $this->sede->update();
        $this->writeLog("Eliminó la sede {$this->sede->sed_nombre}(id::{$this->sede->sed_id})");
        redirect('configuracion/sede/index');
    }
    
    
    public function nuevo(){
        $action = $this->input->post('txt_action');
        if(isset($action) && $action == 'nuevo'){
            $this->sede->getValsForm($this->input->post());
            $where['sed_nombre'] = $this->sede->sed_nombre;
            if($this->sede->getCountAll($where) > 0){
                $this->session->set_userdata('message_id', 3);
                $this->session->set_userdata('message', 'WRM1');
                redirect('configuracion/sede/nuevo');
            }
            if($this->sede->insert()){
                $this->sede_telefono->getValsForm($this->input->post());
                $this->sede_telefono->st_sed_id = $this->sede->sed_id;
                $this->sede_telefono->insert();
                $this->writeLog("Registro la sede {$this->sede->sed_nombre}(id::{$this->sede->sed_id})");
                $this->session->set_userdata('message_id', 1);
                $this->session->set_userdata('message', 'MSG1');
                redirect('configuracion/sede/index');
            }else{
                $this->session->set_userdata('message_id', 2);
                $this->session->set_userdata('message', 'ERR1');
                redirect('configuracion/sede/index');
            }
            
        }else{
            $this->smartyci->assign('sede', $this->sede);
            $this->smartyci->assign('form', 1);
            $this->smartyci->show_page(NULL,  uniqid());
        }
    }
    
    public function changeEstado(){
        $result = 0;
        $id = $this->input->post('id');
        $icon = $this->input->post('icon');
        if($id>0){
            $this->sede->getSedeById($id);
            if($this->sede->sed_id > 0){
                if($this->sede->sed_estado == 1){
                    $this->sede->sed_estado = 0;
                    $icon = 'fa-ban';
                }else{
                    $this->sede->sed_estado = 1;
                    $icon = 'fa-check';
                }
                $this->sede->update();
                $result = 1;
            }
        }
        echo json_encode(array('respuesta'=>$result, 'icon'=>$icon));
    }
}

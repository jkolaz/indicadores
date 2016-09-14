<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of log
 *
 * @author elvin
 */
class Log extends CI_Controller{
    //put your code here
    
    public function __construct() {
        parent::__construct();
        $this->load->model('seguridad/administrador_model', 'adm');
    }
    
    public function index(){
        $this->permiso_model->_access = 4;
        $action = $this->input->post('txt_action');
        if(isset($action) && $action == 'buscar'){
            $fecha = $this->input->post('txt_fecha');
            if(isset($fecha) && $fecha != ""){
                $fecha = str_replace('-', '', $fecha);
                redirect('seguridad/log/readLog/'.$fecha);
            }else{
                redirect('seguridad/log/index');
            }
        }else{
            $this->smartyci->assign('listado', 'Log de actividades');
            $this->smartyci->assign('form', 1);
            $this->smartyci->show_page(NULL);
        }
    }
    
    public function readLog($fecha){
        $this->permiso_model->_access = 4;
        $p_file = PATH_ADMIN . "application/logs/web/".$fecha.".log";
        $linea = array();
        if (file_exists($p_file)) {
            $linea = file($p_file);
            $linea = array_reverse($linea);
        }
        $log = array();
        if(count($linea) > 0){
            foreach ($linea as $val){
                $aLinea = explode("|", $val);

                $objAdmin = $this->adm->getAdminById($aLinea[2]);

                $stdLinea = new stdClass();
                $stdLinea->fecha = $aLinea[0];
                $stdLinea->mensaje = $aLinea[1];
                if($objAdmin){
                    $stdLinea->admin = $objAdmin->adm_nombre.' '.$objAdmin->adm_apellidos;
                }else{
                    $stdLinea->admin = '<span style="color: red;">Usuario no registrado en la base de datos.</span>';
                }
                $log[] = $stdLinea;
            }
        }
        $this->smartyci->assign('log', $log);
        $this->smartyci->assign('details', 'Log de actividades');
        $this->smartyci->assign('url_back', 'seguridad/log/index');
        $this->smartyci->show_page(NULL,  uniqid());
    }
}

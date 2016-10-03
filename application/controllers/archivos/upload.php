<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of upload
 *
 * @author julio
 */
class Upload extends CI_Controller{
    //put your code here
    public function __construct() {
        parent::__construct();
        $this->load->model('archivos/archivo_model', 'archivo');
        $this->smartyci->assign('js_script', $this->_carpeta.'/'.$this->_class.'.js');
        $this->smartyci->assign('controlador', $this->_carpeta.'/'.$this->_class);
    }
    
    public function index(){
        $where['arc_estado < '] = 2;
        $objeto = $this->archivo->getAll($where, 'arc_fecha_reg desc');
        if($objeto){
            foreach ($objeto as $id=>$value){
                $icon_estado = 'fa-ban';
                if($value->arc_estado == 1){
                    $icon_estado = 'fa-check';
                }
                $objeto[$id]->icon_estado = $icon_estado;
            }
        }
        $this->smartyci->assign('objArchivo', $objeto);
        $this->smartyci->show_page();
    }
    
    public function registro(){
        $action = $this->input->post('txt_action');
        if(isset($action) && $action == 'nuevo'){
            $this->archivo->getValsForm($this->input->post());
            if(isset($_FILES["txt_archivo"]["name"]) && $_FILES["txt_archivo"]["name"] != ""){
                if ($_FILES["txt_archivo"]["type"] == "application/vnd.openxmlformats-officedocument.spreadsheetml.sheet") {
                        if(!is_array($_FILES["txt_archivo"]["name"])){
                            $extension = pathinfo($_FILES["txt_archivo"]["name"]);
                            $destination = uniqid($this->archivo->arc_type.'_'.date('YmdHis').'_').'.'.$extension['extension'];
                            if(move_uploaded_file($_FILES['txt_archivo']['tmp_name'], PATH_GALLERY.$destination)){
                                $this->archivo->arc_nombre = $destination;
                            }
                        }
                    }
            }
            if($this->archivo->arc_nombre != ''){
                if($this->archivo->insert()){
                    $this->writeLog("Subio archivo {$this->archivo->arc_nombre}(id::{$this->archivo->arc_id})");
                    $this->session->set_userdata('message_id', 1);
                    $this->session->set_userdata('message', 'MSG1');
                    redirect('archivos/upload/index');
                }else{
                    $this->session->set_userdata('message_id', 2);
                    $this->session->set_userdata('message', 'ERR1');
                    redirect('archivos/upload/cie10');
                }
            }else{
                $this->session->set_userdata('message_id', 2);
                $this->session->set_userdata('message', 'ERR1');
                redirect('archivos/upload/cie10');
            }
        }else{
            $this->smartyci->assign('form', 1);
            $this->smartyci->assign('listado', 'Subir Archivos');
            $this->smartyci->show_page();
        }
    }
    
    public function procesar($id, $type){
        switch ($type){
            case 'cie10':
                $this->procesar_cie10($id);
                break;
            case 'ce':
                $this->procesar_ce($id);
                break;
            default :
                redirect('archivos/upload/index');
        }
    }
    
    public function procesar_ce($id){
        $this->archivo->getRow($id);
        if($this->archivo->arc_id > 0){
            $archivo = PATH_GALLERY.$this->archivo->arc_nombre;
            $row = $this->archivo->arc_num_lines_read+2;
            $limit = $row+150;
            if(file_exists($archivo)){
                $this->load->library('PHPExcel/Classes/PHPExcel.php');
                $objPHPExcel = PHPExcel_IOFactory::load($archivo);
                $allDataInSheet = $objPHPExcel->getActiveSheet()->toArray(NULL, NULL, TRUE, TRUE);
                $permit = TRUE;
                while($row < $limit && $permit == TRUE){
                    $aRow = $allDataInSheet[$row];
                    if(trim($aRow['A']) != ''){
                        $row++;
                    }else{
                        $permit = FALSE;
                        $this->archivo->arc_estado = 2;
                    }
                }
            }
            redirect('archivos/upload/index');
        }else{
            redirect('archivos/upload/index');
        }
    }
    
    public function procesar_cie10($id){
        $this->archivo->getRow($id);
        if($this->archivo->arc_id > 0){
            $archivo = PATH_GALLERY.$this->archivo->arc_nombre;
            $row = $this->archivo->arc_num_lines_read+2;
            $limit = $row+300;
            if(file_exists($archivo)){
                $this->load->library('PHPExcel/Classes/PHPExcel.php');
                $objPHPExcel = PHPExcel_IOFactory::load($archivo);
                $allDataInSheet = $objPHPExcel->getActiveSheet()->toArray(NULL, NULL, TRUE, TRUE);
                $this->load->model('registro/cie10_model', 'cie10');
                $permit = TRUE;
                while($row < $limit && $permit == TRUE){
                    $aRow = $allDataInSheet[$row];
                    if(trim($aRow['A']) != ''){
                        $this->cie10->cie_codigo = $aRow['A'];
                        $this->cie10->cie_detalle = $aRow['B'];
                        $this->cie10->insert();
                        $row++;
                    }else{
                        $permit = FALSE;
                        $this->archivo->arc_estado = 2;
                    }
                }
                $this->archivo->arc_num_lines_read = $row-2;
                if($this->archivo->update()){
                    $this->session->set_userdata('message_id', 1);
                    $this->session->set_userdata('message', 'MSG1');
                    $this->writeLog("insertó  ".($row-2)." registro(s) a CIE10");
                }else{
                    $this->session->set_userdata('message_id', 2);
                    $this->session->set_userdata('message', 'ERR1');
                }
            }
            redirect('archivos/upload/index');
        }else{
            redirect('archivos/upload/index');
        }
    }
}

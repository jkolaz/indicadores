<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of trabajo_model
 *
 * @author elvin
 */
class Trabajo_model extends CI_Model{
    //put your code here
    private static $_table;
    private static $_PK;
    public $tra_id;
    public $tra_convocatoria;
    public $tra_cargo;
    public $tra_fecha;
    public $tra_pdf;
    public $tra_estado;
    public $tra_sed_id;
    
    public function __construct() {
        parent::__construct();
        $this->load->database();
        self::$_table = 'gc_trabajo';
        self::$_PK = 'tra_id';
    }
    
    public function getAll($where = array()){
        $where['tra_estado <='] = 1;
        
        $query = $this->db->where($where)->order_by('tra_id')->get(self::$_table);
        
        if($query->num_rows > 0){
            return $query->result();
        }
        return NULL;
    }
    
    public function getValsForm($post){
        if(isset($post['txt_tra_convocatoria'])){
            $this->tra_convocatoria = $post['txt_tra_convocatoria'];
        }
        if(isset($post['txt_tra_cargo'])){
            $this->tra_cargo = $post['txt_tra_cargo'];
        }
        if(isset($post['txt_tra_fecha'])){
            $this->tra_fecha = $post['txt_tra_fecha'];
        }
        if(isset($post['txt_tra_pdf'])){
            $this->tra_pdf = $post['txt_tra_pdf'];
        }
        if(isset($post['txt_tra_estado'])){
            $this->tra_estado = $post['txt_tra_estado'];
        }
        if(isset($post['txt_tra_sed_id'])){
            $this->tra_sed_id = $post['txt_tra_sed_id'];
        }
    }
    public function insert(){
        $insert = array();
        if($this->tra_convocatoria != ""){
            $insert['tra_convocatoria'] = $this->tra_convocatoria;
        }
        if($this->tra_cargo != ""){
            $insert['tra_cargo'] = $this->tra_cargo;
        }
        if($this->tra_fecha != ""){
            $insert['tra_fecha'] = $this->tra_fecha;
        }
        if($this->tra_pdf != ""){
            $insert['tra_pdf'] = $this->tra_pdf;
        }        
        if($this->tra_estado >= 0){
            $insert['tra_estado'] = $this->tra_estado;
        }
        if($this->tra_sed_id >= 0){
            $insert['tra_sed_id'] = $this->tra_sed_id;
        }
        if(count($insert)>0){
            $this->db->insert(self::$_table, $insert);
            $this->tra_id = $this->db->insert_id();
            return TRUE;
        }
        return FALSE;
    }
    
    public function getRow($id){
        $where['tra_id'] = $id;
        $where['tra_estado <='] = 1;
        $query = $this->db->where($where)->get(self::$_table);
        if($query->num_rows > 0){
            $arreglo = $query->result();
            $this->tra_id = $arreglo[0]->tra_id;
            $this->tra_convocatoria = $arreglo[0]->tra_convocatoria;
            $this->tra_cargo = $arreglo[0]->tra_cargo;
            $this->tra_fecha = $arreglo[0]->tra_fecha;
            $this->tra_pdf = $arreglo[0]->tra_pdf;            
            $this->tra_estado = $arreglo[0]->tra_estado;
            $this->tra_sed_id = $arreglo[0]->tra_sed_id;
        }
    }
    public function update(){
        $update = array();
        if($this->tra_convocatoria != ""){
            $update['tra_convocatoria'] = $this->tra_convocatoria;
        }
        if($this->tra_cargo != ""){
            $update['tra_cargo'] = $this->tra_cargo;
        }
        if($this->tra_pdf != ""){
            $update['tra_pdf'] = $this->tra_pdf;
        }        
        if($this->tra_estado >= 0){
            $update['tra_estado'] = $this->tra_estado;
        }
        if($this->tra_sed_id >= 0){
            $update['tra_sed_id'] = $this->tra_sed_id;
        }
        
        if($this->tra_id > 0){
            if(count($update)>0){
                $this->db->where(self::$_PK,  $this->tra_id)->update(self::$_table, $update);
                return TRUE;
            }
            return NULL;
        }
        return NULL;
    }
}

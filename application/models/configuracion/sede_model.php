<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of sede_model
 *
 * @author elvin
 */
class Sede_model extends CI_Model{
    //put your code here
    private static $_table = 'gc_sede';
    private static $_PK = 'sed_id';
    public $sed_id;
    public $sed_nombre;
    public $sed_estado;
    public $sed_reg_id;
    public $sed_url;
    public $sed_consulta_lv;
    public $sed_consulta_s;
    public $sed_farmacia_lv;
    public $sed_farmacia_s;
    public $sed_visita;
    public $sed_direccion;
    public $sed_correo;
    public $sed_keywords;
    public $sed_descripcion;
    public $sed_logo;
    public $sed_fb;
    public $sed_tw;
    public $sed_youtube;
    public $sed_picassa;
    public $sed_issuu;
    public $sed_linkedin;
    public function __construct() {
        parent::__construct(); 
        $this->load->database();
    }
    
    public function getAllSede($where = array()){
        $where['sed_estado <='] = 1;
        
        $query = $this->db->where($where)->order_by('sed_nombre')->get(self::$_table);
        
        if($query->num_rows > 0){
            return $query->result();
        }
        return NULL;
    }
    public function getSedeCBO($where = array(), $selected = 0){
        $data = NULL;
        $query = $this->db->where($where)->order_by('sed_nombre')->get(self::$_table);
        
        if($query->num_rows > 0){
            $data = $query->result();
            foreach ($data as $id=>$valor){
                $data[$id]->selected = '';
                if($selected == $valor->sed_id){
                    $data[$id]->selected = 'selected';
                }
            }
        }
        return $data;
    }
    
    public function getSedeById($id){
        $where['sed_id'] = $id;
        $query = $this->db->where($where)->get(self::$_table);
        if($query->num_rows > 0){
            $arreglo = $query->result();
            $this->sed_id = $arreglo[0]->sed_id;
            $this->sed_nombre = $arreglo[0]->sed_nombre;
            $this->sed_estado = $arreglo[0]->sed_estado;
            $this->sed_url = $arreglo[0]->sed_url;
        }
    }
    
    public function getValsForm($post){
        if(isset($post['txt_sed_nombre'])){
            $this->sed_nombre = $post['txt_sed_nombre'];
        }
    }
    public function insert(){
        $insert = array();
        $insert['sed_nombre'] = $this->sed_nombre;
        $insert['sed_url'] = quitarAcentos($this->sed_nombre);
        if(count($insert)>0){
            $this->db->insert(self::$_table, $insert);
            $this->sed_id = $this->db->insert_id();
            return TRUE;
        }
        return NULL;
    }
    public function update(){
        $update = array();
        $update['sed_nombre'] = $this->sed_nombre;
        $update['sed_url'] = quitarAcentos($this->sed_nombre);
        $update['sed_estado'] = $this->sed_estado;
        if($this->sed_id > 0){
            if(count($update)>0){
                $this->db->where(self::$_PK,  $this->sed_id)->update(self::$_table, $update);
                return TRUE;
            }
            return NULL;
        }
        return NULL;
    }
    
    public function getCountAll($where = array()){
        if(count($where) > 0){
            $this->db->where($where);
        }
        
        $query = $this->db->from(self::$_table)->count_all_results();
        return $query;
    }
}

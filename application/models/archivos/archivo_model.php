<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of archivo_model
 *
 * @author julio
 */
class Archivo_model extends CI_Model{
    //put your code here
    private static $_table, $_PK;
    public $arc_id;
    public $arc_nombre;
    public $arc_type;
    public $arc_num_lines_read;
    public $arc_estado;
    public function __construct() {
        parent::__construct();
        self::$_table = 'ind_archivo';
        self::$_PK = 'arc_id';
        $this->arc_id = 0;
        $this->arc_nombre = '';
        $this->arc_type = '';
        $this->arc_num_lines_read = 0;
        $this->arc_estado = 1;
    }
    
    public function getAll($where = array(), $order_by = ''){
        if($order_by == ''){
            $order_by = 'ac_id asc';
        }
        $query = $this->db->where($where)->order_by($order_by)
                    ->get(self::$_table);
        if($query->num_rows > 0){
            return $query->result();
        }
        return NULL;
    }
    
    public function getValsForm($post){
        if(isset($post['txt_archivo'])){
            $this->arc_nombre = $post['txt_archivo'];
        }
        if(isset($post['txt_arc_type'])){
            $this->arc_type = $post['txt_arc_type'];
        }
    }
    
    public function insert(){
        $insert = array();
        $insert['arc_nombre'] = $this->arc_nombre;
        $insert['arc_type'] = $this->arc_type;
        
        if(count($insert)>0){
            $this->db->insert(self::$_table, $insert);
            $this->arc_id = $this->db->insert_id();
            return $this->arc_id;
        }
        return NULL;
    }
    
    public function getRow($id){
        $where[self::$_PK] = $id;
        $query = $this->db->where($where)->get(self::$_table);
        if($query->num_rows > 0){
            $arreglo = $query->row();
            $this->arc_id = $arreglo->arc_id;
            $this->arc_nombre = $arreglo->arc_nombre;
            $this->arc_type = $arreglo->arc_type;
            $this->arc_num_lines_read = $arreglo->arc_num_lines_read;
            $this->arc_estado = $arreglo->arc_estado;
        }
    }
    
    public function update(){
        $update = array();
        $update['arc_nombre'] = $this->arc_nombre;
        $update['arc_type'] = $this->arc_type;
        $update['arc_num_lines_read'] = $this->arc_num_lines_read;
        $update['arc_estado'] = $this->arc_estado;
        
        if($this->arc_id > 0){
            if(count($update)>0){
                $this->db->where(self::$_PK,  $this->arc_id)->update(self::$_table, $update);
                return TRUE;
            }
            return NULL;
        }
        return NULL;
    }
}

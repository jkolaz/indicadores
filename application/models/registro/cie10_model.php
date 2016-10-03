<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of cie10_model
 *
 * @author julio
 */
class Cie10_model extends CI_Model{
    //put your code here
    private static $_table, $_PK;
    public $cie_id;
    public $cie_codigo;
    public $cie_detalle;
    public $cie_estado;
    public function __construct() {
        parent::__construct();
        self::$_table = 'ind_cie10';
        self::$_PK = 'cie_id';
        $this->cie_id = 0;
        $this->cie_codigo = '';
        $this->cie_detalle = '';
        $this->cie_estado = 0;
    }
    
    public function getAll($where = array(), $order_by = ''){
        if($order_by == ''){
            $order_by = 'cie_id asc';
        }
        $query = $this->db->where($where)->order_by($order_by)
                    ->get(self::$_table);
        if($query->num_rows > 0){
            return $query->result();
        }
        return NULL;
    }
    
    public function getValsForm($post){
        if(isset($post['txt_cie_codigo'])){
            $this->cie_codigo = $post['txt_cie_codigo'];
        }
    }
    
    public function insert(){
        $insert = array();
        $insert['cie_codigo'] = $this->cie_codigo;
        $insert['cie_detalle'] = $this->cie_detalle;
        
        if(count($insert)>0){
            $this->db->insert(self::$_table, $insert);
            $this->cie_id = $this->db->insert_id();
            return $this->cie_id;
        }
        return NULL;
    }
    
    public function getRow($id){
        $where[self::$_PK] = $id;
        $query = $this->db->where($where)->get(self::$_table);
        if($query->num_rows > 0){
            $arreglo = $query->row();
            $this->cie_id = $arreglo->cie_id;
            $this->cie_codigo = $arreglo->cie_codigo;
            $this->cie_detalle = $arreglo->cie_detalle;
            $this->cie_estado = $arreglo->cie_estado;
        }
    }
    
    public function update(){
        $update = array();
        $update['cie_codigo'] = $this->cie_codigo;
        $update['cie_detalle'] = $this->cie_detalle;
        $update['cie_estado'] = $this->cie_estado;
        
        if($this->cie_id > 0){
            if(count($update)>0){
                $this->db->where(self::$_PK,  $this->cie_id)->update(self::$_table, $update);
                return TRUE;
            }
            return NULL;
        }
        return NULL;
    }
}

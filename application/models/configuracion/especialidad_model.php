<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of especialidad_model
 *
 * @author julio
 */
class Especialidad_model extends CI_Model{
    //put your code here
    private static $_table, $_PK;
    public $esp_id;
    public $esp_root;
    public $esp_descripcion;
    public $esp_estado;
    public function __construct() {
        parent::__construct();
        self::$_table = 'ind_especialidad';
        self::$_PK = 'esp_id';
    }
    
    public function getAll($where = array(), $order_by = ''){
        if($order_by == ''){
            $order_by = 'esp_id asc';
        }
        $query = $this->db->where($where)->order_by($order_by)
                    ->get(self::$_table);
        if($query->num_rows > 0){
            return $query->result();
        }
        return NULL;
    }
    
    public function getCBO(){
        $arreglo = array();
        $where['esp_estado'] = 1;
        $where['esp_root'] = 0;
        
        $select[] = 'esp_id';
        $select[] = 'esp_descripcion';
        
        $query = $this->db->where($where)
                    ->select(implode(', ', $select))
                    ->order_by('esp_id')
                    ->get(self::$_table);
        if($query->num_rows > 0){
            $result = $query->result();
            foreach($result as $id=>$value){
                $result[$id]->especialidad = array();
                $where1['esp_estado'] = 1;
                $where1['esp_root'] = $value->esp_id;
                $select1[] = 'esp_id';
                $select1[] = 'esp_descripcion';
                
                $query1 = $this->db->where($where1)
                            ->select(implode(', ', $select1))
                            ->order_by('esp_descripcion')
                            ->get(self::$_table);
                if($query1->num_rows > 0){
                    $result[$id]->especialidad = $query1->result();
                }
            }
            $arreglo = $result;
        }
        return $arreglo;
    }
    
    public function insert_batch($insert){
        $this->db->insert_batch(self::$_table, $insert); 
        return true;
    }
}

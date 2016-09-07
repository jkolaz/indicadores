<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of modulo_model
 *
 * @author elvin
 */
class Modulo_model extends CI_Model{
    //put your code here
    private static $_table = 'gc_modulo';
    private static $_PK = 'mod_id';
    public $mod_id;
    public $mod_nombre;
    public $mod_url;
    public $mod_icon;
    public $mod_estado;
    
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
    public function getAll(){
        $where = array();
        $query = $this->db->where($where)->order_by('mod_nombre')
                            ->get(self::$_table);
        if($query->num_rows > 0){
            return $query->result();
        }
        return NULL;
    }
    
    public function getRow($id){
        $where['mod_id'] = $id;
        $query = $this->db->where($where)->get(self::$_table);
        if($query->num_rows > 0){
            $arreglo = $query->result();
            $this->mod_id = $arreglo[0]->mod_id;
            $this->mod_nombre = $arreglo[0]->mod_nombre;
            $this->mod_url = $arreglo[0]->mod_url;
            $this->mod_icon = $arreglo[0]->mod_icon;
            $this->mod_estado = $arreglo[0]->mod_estado;
        }
    }
    
    public function update(){
        $update = array();
        if($this->mod_nombre != ""){
            $update['mod_nombre'] = $this->mod_nombre;
        }
        if($this->mod_url != ""){
            $update['mod_url'] = $this->mod_url;
        }
        if($this->mod_icon != ""){
            $update['mod_icon'] = $this->mod_icon;
        }
        if($this->mod_estado >= 0){
            $update['mod_estado'] = $this->mod_estado;
        }
        if($this->mod_id > 0){
            if(count($update)>0){
                $this->db->where(self::$_PK,  $this->mod_id)->update(self::$_table, $update);
                return TRUE;
            }
            return NULL;
        }
        return NULL;
    }
    
    public function getValsForm($post){
        if(isset($post['txt_mod_nombre'])){
            $this->mod_nombre = $post['txt_mod_nombre'];
        }
        if(isset($post['txt_mod_url'])){
            $this->mod_url = $post['txt_mod_url'];
        }
        if(isset($post['txt_mod_icon'])){
            $this->mod_icon = $post['txt_mod_icon'];
        }
        if(isset($post['txt_mod_estado'])){
            $this->mod_estado = $post['txt_mod_icon'];
        }
    }
}

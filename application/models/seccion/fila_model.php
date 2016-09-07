<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of fila_model
 *
 * @author elvin
 */
class Fila_model extends CI_Model{
    //put your code here
    private static $_table;
    private static $_PK;
    public $fil_id;
    public $fil_titulo;
    public $fil_contenido;
    public $fil_url;
    public $fil_fecha;
    public $fil_imagen;
    public $fil_estado;
    public $fil_sed_id;
    
    public function __construct() {
        parent::__construct();
        $this->load->database();
        self::$_table = 'gc_fila';
        self::$_PK = 'fil_id';
    }
    
    public function getAll($where = array()){
        $where['fil_estado <='] = 1;
        
        $query = $this->db->where($where)->order_by('fil_titulo')->get(self::$_table);
        
        if($query->num_rows > 0){
            return $query->result();
        }
        return NULL;
    }
    
    public function getValsForm($post){
        if(isset($post['txt_fil_titulo'])){
            $this->fil_titulo = $post['txt_fil_titulo'];
        }
        if(isset($post['txt_fil_contenido'])){
            $this->fil_contenido = $post['txt_fil_contenido'];
        }
        if(isset($post['txt_fil_url'])){
            $this->fil_url = $post['txt_fil_url'];
        }
        if(isset($post['txt_fil_fecha'])){
            $this->fil_fecha = $post['txt_fil_fecha'];
        }
        if(isset($post['txt_fil_imagen'])){
            $this->fil_imagen = $post['txt_fil_imagen'];
        }
        if(isset($post['txt_fil_estado'])){
            $this->fil_estado = $post['txt_fil_estado'];
        }
        if(isset($post['txt_fil_sed_id'])){
            $this->fil_sed_id = $post['txt_fil_sed_id'];
        }
    }
    public function insert(){
        $insert = array();
        if($this->fil_titulo != ""){
            $insert['fil_titulo'] = $this->fil_titulo;
        }
        if($this->fil_contenido != ""){
            $insert['fil_contenido'] = $this->fil_contenido;
        }
        if($this->fil_url != ""){
            $insert['fil_url'] = $this->fil_url;
        }
        if($this->fil_fecha != ""){
            $insert['fil_fecha'] = $this->fil_fecha;
        }
        if($this->fil_imagen != ""){
            $insert['fil_imagen'] = $this->fil_imagen;
        }        
        if($this->fil_estado >= 0){
            $insert['fil_estado'] = $this->fil_estado;
        }
        if($this->fil_sed_id >= 0){
            $insert['fil_sed_id'] = $this->fil_sed_id;
        }
        
        if(count($insert)>0){
            $this->db->insert(self::$_table, $insert);
            $this->fil_id = $this->db->insert_id();
            return TRUE;
        }
        return FALSE;
    }
    
    public function getRow($id){
        $where['fil_id'] = $id;
        $where['fil_estado <='] = 1;
        $query = $this->db->where($where)->get(self::$_table);
        if($query->num_rows > 0){
            $arreglo = $query->result();
            $this->fil_id = $arreglo[0]->fil_id;
            $this->fil_titulo = $arreglo[0]->fil_titulo;
            $this->fil_contenido = $arreglo[0]->fil_contenido;
            $this->fil_url = $arreglo[0]->fil_url;
            $this->fil_fecha = $arreglo[0]->fil_fecha;
            $this->fil_imagen = $arreglo[0]->fil_imagen;            
            $this->fil_estado = $arreglo[0]->fil_estado;
            $this->fil_sed_id = $arreglo[0]->fil_sed_id;
        }
    }
    public function update(){
        $update = array();
        if($this->fil_titulo != ""){
            $update['fil_titulo'] = $this->fil_titulo;
        }
        if($this->fil_contenido != ""){
            $update['fil_contenido'] = $this->fil_contenido;
        }
        if($this->fil_url != ""){
            $update['fil_url'] = $this->fil_url;
        }
        if($this->fil_fecha != ""){
            $update['fil_fecha'] = $this->fil_fecha;
        }
        if($this->fil_imagen != ""){
            $update['fil_imagen'] = $this->fil_imagen;
        }        
        if($this->fil_estado >= 0){
            $update['fil_estado'] = $this->fil_estado;
        }
        if($this->fil_sed_id >= 0){
            $update['fil_sed_id'] = $this->fil_sed_id;
        }
        
        if($this->fil_id > 0){
            if(count($update)>0){
                $this->db->where(self::$_PK,  $this->fil_id)->update(self::$_table, $update);
                return TRUE;
            }
            return NULL;
        }
        return NULL;
    }
}

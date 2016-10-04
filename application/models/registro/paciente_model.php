<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of paciente_model
 *
 * @author julio
 */
class Paciente_model extends CI_Model{
    //put your code here
    private static $_table, $_PK;
    public $pac_id;
    public $pac_num_historia_clinica;
    public $pac_tipo_doc;
    public $pac_num_doc;
    public $pac_sexo;
    public $pac_fecha_nac;
    public $pac_nac_anio;
    public $pac_nac_mes;
    public $pac_nac_dia;
    public $pac_tipo_aseguradora;
    public $pac_pais;
    public $pac_departamento;
    public $pac_provincia;
    public $pac_distrito;
    public $pac_estado;
    public function __construct() {
        parent::__construct();
        self::$_table = 'ind_paciente';
        self::$_PK = 'pac_id';
        $this->pac_id = 0;
        $this->pac_num_historia_clinica = '';
        $this->pac_tipo_doc = 1;
        $this->pac_num_doc = '';
        $this->pac_sexo = 1;
        $this->pac_fecha_nac = '';
        $this->pac_nac_anio = '';
        $this->pac_nac_mes = '';
        $this->pac_nac_dia = '';
        $this->pac_tipo_aseguradora = '';
        $this->pac_pais = '';
        $this->pac_departamento = '';
        $this->pac_provincia = '';
        $this->pac_distrito = '';
        $this->pac_estado = 1;
    }
    
    public function getAll($where = array(), $order_by = ''){
        if($order_by == ''){
            $order_by = 'pac_id asc';
        }
        $query = $this->db->where($where)->order_by($order_by)
                    ->get(self::$_table);
        if($query->num_rows > 0){
            return $query->result();
        }
        return NULL;
    }
    
    public function getValsForm($post){
        if(isset($post['txt_pac_num_historia_clinica'])){
            $this->pac_num_historia_clinica = $post['txt_pac_num_historia_clinica'];
        }
        if(isset($post['txt_pac_tipo_doc'])){
            $this->pac_tipo_doc = $post['txt_pac_tipo_doc'];
        }
        if(isset($post['txt_pac_num_doc'])){
            $this->pac_num_doc = $post['txt_pac_num_doc'];
        }
        if(isset($post['txt_pac_sexo'])){
            $this->pac_sexo = $post['txt_pac_sexo'];
        }
        if(isset($post['txt_pac_fecha_nac'])){
            $this->pac_fecha_nac = $post['txt_pac_fecha_nac'];
        }
        if(isset($post['txt_pac_tipo_aseguradora'])){
            $this->pac_tipo_aseguradora = $post['txt_pac_tipo_aseguradora'];
        }
        if(isset($post['txt_pac_pais'])){
            $this->pac_pais = $post['txt_pac_pais'];
        }
        if(isset($post['txt_pac_departamento'])){
            $this->pac_departamento = $post['txt_pac_departamento'];
        }
        if(isset($post['txt_pac_provincia'])){
            $this->pac_provincia = $post['txt_pac_provincia'];
        }
        if(isset($post['txt_pac_distrito'])){
            $this->pac_distrito = $post['txt_pac_distrito'];
        }
    }
    
    public function insert(){
        $insert = array();
        $insert['pac_num_historia_clinica'] = $this->pac_num_historia_clinica;
        $insert['pac_tipo_doc'] = $this->pac_tipo_doc;
        $insert['pac_num_doc'] = $this->pac_num_doc;
        $insert['pac_sexo'] = $this->pac_sexo;
        $insert['pac_fecha_nac'] = $this->pac_fecha_nac;
        $insert['pac_nac_anio'] = $this->pac_nac_anio;
        $insert['pac_nac_mes'] = $this->pac_nac_mes;
        $insert['pac_nac_dia'] = $this->pac_nac_dia;
        $insert['pac_tipo_aseguradora'] = $this->pac_tipo_aseguradora;
        $insert['pac_pais'] = $this->pac_pais;
        $insert['pac_departamento'] = $this->pac_departamento;
        $insert['pac_provincia'] = $this->pac_provincia;
        $insert['pac_distrito'] = $this->pac_distrito;
        $insert['pac_estado'] = $this->pac_estado;
        
        if(count($insert)>0){
            $this->db->insert(self::$_table, $insert);
            $this->pac_id = $this->db->insert_id();
            return $this->pac_id;
        }
        return NULL;
    }
    
    public function insert_batch($insert){
        $this->db->insert_batch(self::$_table, $insert); 
        return true;
    }
    
    public function getRow($id){
        $where[self::$_PK] = $id;
        $query = $this->db->where($where)->get(self::$_table);
        if($query->num_rows > 0){
            $arreglo = $query->row();
            $this->pac_id = $arreglo->pac_id;
            $this->pac_num_historia_clinica = $arreglo->pac_num_historia_clinica;
            $this->pac_tipo_doc = $arreglo->pac_tipo_doc;
            $this->pac_num_doc = $arreglo->pac_num_doc;
            $this->pac_sexo = $arreglo->pac_sexo;
            $this->pac_fecha_nac = $arreglo->pac_fecha_nac;
            $this->pac_nac_anio = $arreglo->pac_nac_anio;
            $this->pac_nac_mes = $arreglo->pac_nac_mes;
            $this->pac_nac_dia = $arreglo->pac_nac_dia;
            $this->pac_tipo_aseguradora = $arreglo->pac_tipo_aseguradora;
            $this->pac_pais = $arreglo->pac_pais;
            $this->pac_departamento = $arreglo->pac_departamento;
            $this->pac_provincia = $arreglo->pac_provincia;
            $this->pac_distrito = $arreglo->pac_distrito;
            $this->pac_estado = $arreglo->pac_estado;
        }
    }
    
    public function update(){
        $update = array();
        $update['pac_num_historia_clinica'] = $this->pac_num_historia_clinica;
        $update['pac_tipo_doc'] = $this->pac_tipo_doc;
        $update['pac_num_doc'] = $this->pac_num_doc;
        $update['pac_sexo'] = $this->pac_sexo;
        $update['pac_fecha_nac'] = $this->pac_fecha_nac;
        $update['pac_nac_anio'] = $this->pac_nac_anio;
        $update['pac_nac_mes'] = $this->pac_nac_mes;
        $update['pac_nac_dia'] = $this->pac_nac_dia;
        $update['pac_tipo_aseguradora'] = $this->pac_tipo_aseguradora;
        $update['pac_pais'] = $this->pac_pais;
        $update['pac_departamento'] = $this->pac_departamento;
        $update['pac_provincia'] = $this->pac_provincia;
        $update['pac_distrito'] = $this->pac_distrito;
        $update['pac_estado'] = $this->pac_estado;
        
        if($this->pac_id > 0){
            if(count($update)>0){
                $this->db->where(self::$_PK,  $this->pac_id)->update(self::$_table, $update);
                return TRUE;
            }
            return NULL;
        }
        return NULL;
    }
    
}

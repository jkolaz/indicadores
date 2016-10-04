<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of consultaexterna_model
 *
 * @author VMC-D02
 */
class Consultaexterna_model extends ci_model{
    //put your code here
    private static $_table, $_PK;
    public $ce_id;
    public $ce_dni_paciente;
    public $ce_edad_paciente;
    public $ce_dni_profesional;
    public $ce_especialidad;
    public $ce_fecha_atencion;
    public $ce_cie_10_principal;
    public $ce_aseguradora;
    public $ce_estado;
    public $ce_pac_id;
    public $ce_pro_id;
    public $ce_cie_id;
    public $ce_sed_id;
    
    public function __construct() {
        parent::__construct();
        self::$_table = 'ind_consulta_externa';
        self::$_PK = 'ce_id';
        $this->ce_id = 0;
        $this->ce_dni_paciente = '';
        $this->ce_edad_paciente = 0;
        $this->ce_dni_profesional = '';
        $this->ce_especialidad = '';
        $this->ce_fecha_atencion = '';
        $this->ce_cie_10_principal = '';
        $this->ce_aseguradora = '';
        $this->ce_estado = 1;
        $this->ce_pac_id = 0;
        $this->ce_pro_id = 0;
        $this->ce_cie_id = 0;
        $this->ce_sed_id = 0;
    }
    
    public function getAll($where = array(), $order_by = ''){
        if($order_by == ''){
            $order_by = 'ce_id asc';
        }
        $query = $this->db->where($where)->order_by($order_by)
                    ->get(self::$_table);
        if($query->num_rows > 0){
            return $query->result();
        }
        return NULL;
    }
    
    public function getValsForm($post){
        if(isset($post['txt_ce_dni_paciente'])){
            $this->ce_dni_paciente = $post['txt_ce_dni_paciente'];
        }
        if(isset($post['txt_ce_edad_paciente'])){
            $this->ce_edad_paciente = $post['txt_ce_edad_paciente'];
        }
        if(isset($post['txt_ce_dni_profesional'])){
            $this->ce_dni_profesional = $post['txt_ce_dni_profesional'];
        }
        if(isset($post['txt_ce_especialidad'])){
            $this->ce_especialidad = $post['txt_ce_especialidad'];
        }
        if(isset($post['txt_ce_fecha_atencion'])){
            $this->ce_fecha_atencion = $post['txt_ce_fecha_atencion'];
        }
        if(isset($post['txt_ce_cie_10_principal'])){
            $this->ce_cie_10_principal = $post['txt_ce_cie_10_principal'];
        }
        if(isset($post['txt_ce_aseguradora'])){
            $this->ce_aseguradora = $post['txt_ce_aseguradora'];
        }
    }
    
    public function insert(){
        $insert = array();
        $insert['ce_dni_paciente'] = $this->ce_dni_paciente;
        $insert['ce_edad_paciente'] = $this->ce_edad_paciente;
        $insert['ce_dni_profesional'] = $this->ce_dni_profesional;
        $insert['ce_especialidad'] = $this->ce_especialidad;
        $insert['ce_fecha_atencion'] = $this->ce_fecha_atencion;
        $insert['ce_cie_10_principal'] = $this->ce_cie_10_principal;
        $insert['ce_aseguradora'] = $this->ce_aseguradora;
        $insert['ce_estado'] = $this->ce_estado;
        $insert['ce_pac_id'] = $this->ce_pac_id;
        $insert['ce_pro_id'] = $this->ce_pro_id;
        $insert['ce_cie_id'] = $this->ce_cie_id;
        $insert['ce_sed_id'] = $this->ce_sed_id;
        
        if(count($insert)>0){
            $this->db->insert(self::$_table, $insert);
            $this->ce_id = $this->db->insert_id();
            return $this->ce_id;
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
            $this->ce_id = $arreglo->ce_id;
            $this->ce_dni_paciente = $arreglo->ce_dni_paciente;
            $this->ce_edad_paciente = $arreglo->ce_edad_paciente;
            $this->ce_dni_profesional = $arreglo->ce_dni_profesional;
            $this->ce_especialidad = $arreglo->ce_especialidad;
            $this->ce_fecha_atencion = $arreglo->ce_fecha_atencion;
            $this->ce_cie_10_principal = $arreglo->ce_cie_10_principal;
            $this->ce_aseguradora = $arreglo->ce_aseguradora;
            $this->ce_estado = $arreglo->ce_estado;
            $this->ce_pac_id = $arreglo->ce_pac_id;
            $this->ce_pro_id = $arreglo->ce_pro_id;
            $this->ce_cie_id = $arreglo->ce_cie_id;
            $this->ce_sed_id = $arreglo->ce_sed_id;
        }
    }
    
    public function update(){
        $update = array();
        $update['ce_dni_paciente'] = $this->ce_dni_paciente;
        $update['ce_edad_paciente'] = $this->ce_edad_paciente;
        $update['ce_dni_profesional'] = $this->ce_dni_profesional;
        $update['ce_especialidad'] = $this->ce_especialidad;
        $update['ce_fecha_atencion'] = $this->ce_fecha_atencion;
        $update['ce_cie_10_principal'] = $this->ce_cie_10_principal;
        $update['ce_aseguradora'] = $this->ce_aseguradora;
        $update['ce_estado'] = $this->ce_estado;
        $update['ce_pac_id'] = $this->ce_pac_id;
        $update['ce_pro_id'] = $this->ce_pro_id;
        $update['ce_cie_id'] = $this->ce_cie_id;
        $update['ce_sed_id'] = $this->ce_sed_id;
        
        if($this->ce_id > 0){
            if(count($update)>0){
                $this->db->where(self::$_PK,  $this->ce_id)->update(self::$_table, $update);
                return TRUE;
            }
            return NULL;
        }
        return NULL;
    }
    
}

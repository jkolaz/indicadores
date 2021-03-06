<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of periodo
 *
 * @author VMC-D02
 */
class Periodo_model extends CI_Model{
    //put your code here
    private static $_table, $_PK;
    public $peri_id;
    public $peri_fecha;
    public $peri_estado;
    public function __construct() {
        parent::__construct();
        self::$_table = 'ind_periodo';
        self::$_PK = 'peri_id';
        $this->peri_id = 0;
        $this->peri_fecha = '';
        $this->peri_estado = 1;
    }
    
     public function getAll($where = array(), $order_by = ''){
        if($order_by == ''){
            $order_by = 'peri_id asc';
        }
        $query = $this->db->where($where)->order_by($order_by)
                    ->get(self::$_table);
        if($query->num_rows > 0){
            return $query->result();
        }
        return NULL;
    }
    
    public function getValsForm($post){
        if(isset($post['txt_peri_fecha'])){
            $this->peri_fecha = $post['txt_peri_fecha'];
        }
    }
    
    public function insert(){
        $insert = array();
        $insert['peri_fecha'] = $this->peri_fecha;
        $insert['peri_estado'] = $this->peri_estado;
        
        if(count($insert)>0){
            $this->db->insert(self::$_table, $insert);
            $this->peri_id = $this->db->insert_id();
            return $this->peri_id;
        }
        return NULL;
    }
    
    public function insert_batch($insert){
        $this->db->insert_batch(self::$_table, $insert); 
        return true;
    }
    
    public function getRow($id){
        $where[self::$_PK] = $id;
        $this->getRowBYCols($where);
    }
    
    public function getRowBYCols($where = array()){
        $query = $this->db->where($where)->get(self::$_table);
        if($query->num_rows > 0){
            $arreglo = $query->row();
            $this->peri_id = $arreglo->peri_id;
            $this->peri_fecha = $arreglo->peri_fecha;
            $this->peri_estado = $arreglo->peri_estado;
        }
    }
    
    public function update(){
        $update = array();
        $update['peri_fecha'] = $this->peri_fecha;
        $update['peri_estado'] = $this->peri_estado;
        
        if($this->peri_id > 0){
            if(count($update)>0){
                $this->db->where(self::$_PK,  $this->peri_id)->update(self::$_table, $update);
                return TRUE;
            }
            return NULL;
        }
        return NULL;
    }
    
    public function getDatebyGrupo($where = array(), $group_by = "mes", $anio = '', $mes = ''){
        $order_by = 'peri_id';
        if($anio != ''){
            $this->db->where("date_format(ind_periodo.peri_fecha, '%Y') = '$anio'");
        }
        if($mes != ''){
            $this->db->where("date_format(ind_periodo.peri_fecha, '%m') = '$mes'");
        }
        $query = $this->db->where($where)->order_by($order_by)
                    ->group_by($group_by, FALSE)
                    ->select("date_format(ind_periodo.peri_fecha, '%m') as 'mes'", FALSE)
                    ->select("date_format(ind_periodo.peri_fecha, '%b') as 'mes_text'", FALSE)
                    ->select("date_format(ind_periodo.peri_fecha, '%Y') as 'anio'", FALSE)
                    ->get(self::$_table);
        if($query->num_rows > 0){
            return $query->result();
        }
        return NULL;
    }
    public function getDatebyGrupo1($where = array(), $group_by = "mes", $anio = array(), $mes = ''){
        $order_by = 'peri_id';
        if(count($anio) > 0){
            if(!in_array("all", $anio)){
                $this->db->where_in("date_format(ind_periodo.peri_fecha, '%Y')",$anio);
            }
        }
        if($mes != ''){
            $this->db->where("date_format(ind_periodo.peri_fecha, '%m') = '$mes'");
        }
        $query = $this->db->where($where)->order_by($order_by)
                    ->group_by($group_by, FALSE)
                    ->select("date_format(ind_periodo.peri_fecha, '%m') as 'mes'", FALSE)
                    ->select("date_format(ind_periodo.peri_fecha, '%b') as 'mes_text'", FALSE)
                    ->select("date_format(ind_periodo.peri_fecha, '%Y') as 'anio'", FALSE)
                    ->get(self::$_table);
        if($query->num_rows > 0){
            return $query->result();
        }
        return NULL;
    }
    
    public function getAnio($anio = array()){
        $order_by = "anio";
        $arreglo = array();
        if(count($anio) > 0){
            if(!in_array("all", $anio)){
                $this->db->where_in("date_format(ind_periodo.peri_fecha, '%Y')",$anio);
            }
        }
        $query = $this->db->order_by($order_by)
                    ->group_by('anio', FALSE)
                    ->select("date_format(ind_periodo.peri_fecha, '%Y') as 'anio'", FALSE)
                    ->get(self::$_table);
        if($query->num_rows > 0){
            $result = $query->result();
            foreach($result as $valor){
                $arreglo[] = $valor->anio;
            }
        }
        return $arreglo;
    }
    
    public function getDataReporte($anio, $mes, $sede = 0, $esp = array()){
        $where = '';
        if($sede > 0){
            $where .= " and gc_sede.sed_id = '{$sede}'";
        }
        $where_sub = '';
        if(count($esp) > 0){
            $where_sub .= " and ind_consulta_externa.ce_especialidad in ('";
            $where_sub .= implode("','", $esp)."')";
        }
        $sql = "select
                    gc_sede.sed_id,
                    gc_sede.sed_nombre,
                    (
                        select 
                            count(ind_consulta_externa.ce_id)
                        from 
                            ind_consulta_externa
                                inner join 
                            ind_periodo on ind_periodo.peri_id=ind_consulta_externa.ce_peri_id
                        where
                            ind_consulta_externa.ce_sed_id = gc_sede.sed_id
                                and ind_consulta_externa.ce_estado
                                and date_format(ind_periodo.peri_fecha, '%Y') = '{$anio}'
                                and date_format(ind_periodo.peri_fecha, '%m') = '{$mes}'
                                {$where_sub}
                    ) as cantidad
                from
                    gc_sede 
                where
                    gc_sede.sed_estado = 1
                    {$where}
                order by gc_sede.sed_nombre";
        
        $query = $this->db->query($sql);
        if($query->num_rows > 0){
            return $query->result();
        }
        return NULL;
    }
    public function getCie10($anio, $sede = 0, $esp = array()){
        $where = "";
        if(count($anio) > 0){
            if(!in_array("all", $anio)){
                $where .= "and date_format(ind_periodo.peri_fecha, '%Y') in ('".  implode("', '",$anio). "')";
            }
        }
        if($sede > 0){
            $where .= " and ind_consulta_externa.ce_sed_id = '{$sede}'";
        }
        if(count($esp) > 0){
            $where .= " and ind_consulta_externa.ce_especialidad in ('";
            $where .= implode("','", $esp)."')";
        }
        $sql = "select 
                    ind_consulta_externa.ce_cie_10_principal,
                    ind_cie10.cie_detalle,
                    count(ind_consulta_externa.ce_id) as cantidad
                from ind_consulta_externa 
                    inner join
                ind_periodo ON ind_periodo.peri_id = ind_consulta_externa.ce_peri_id
                    inner join
                ind_cie10 ON ind_cie10.cie_codigo = ind_consulta_externa.ce_cie_10_principal
                where 
                    ind_consulta_externa.ce_estado = 1 
                    {$where}
                group by ind_consulta_externa.ce_cie_10_principal 
                order by cantidad desc limit 10 ";
        $query = $this->db->query($sql);
        if($query->num_rows > 0){
            return $query->result();
        }
        return array();
    }
    
    public function getCie10ByAnio ($anio, $acie10, $sede = 0, $esp = array()){
        $where = "and date_format(ind_periodo.peri_fecha, '%Y') = '". $anio. "'";
        if($sede > 0){
            $where .= " and ind_consulta_externa.ce_sed_id = '{$sede}'";
        }
        if(count($acie10) > 0){
            $where .= " and ind_consulta_externa.ce_cie_10_principal IN ('".  implode("', '", $acie10)."')";
        }
        if(count($esp) > 0){
            $where .= " and ind_consulta_externa.ce_especialidad in ('";
            $where .= implode("','", $esp)."')";
        }
        $sql = "select 
                    ind_consulta_externa.ce_cie_10_principal,
                    ind_cie10.cie_detalle,
                    count(ind_consulta_externa.ce_id) as cantidad
                from ind_consulta_externa 
                    inner join
                ind_periodo ON ind_periodo.peri_id = ind_consulta_externa.ce_peri_id
                    inner join
                ind_cie10 ON ind_cie10.cie_codigo = ind_consulta_externa.ce_cie_10_principal
                where 
                    ind_consulta_externa.ce_estado = 1 
                    {$where}
                group by ind_consulta_externa.ce_cie_10_principal 
                order by cantidad desc limit 10 ";
        $query = $this->db->query($sql);
        if($query->num_rows > 0){
            return $query->result();
        }
        return array();
    }
    
    public function updateAll($update, $where = array()){
        $this->db->where($where)->update(self::$_table, $update);
    }
    
    public function max($col = "", $where = array()){
        if($col == ""){
            $col = self::$_PK;
        }
        $query = $this->db->where($where)
                    ->select_max($col, 'max')
                    ->get(self::$_table);

        if($query->num_rows > 0){
            $row = $query->row();
            return $row->max;
        }
        return NULL;
        
    }
    
    
    public function getDataReporteCie10($anio, $sede = 0, $esp = array()){
        $where = '';
        $where_sub = '';
        
        if(count($anio) > 0){
            if(!in_array("all", $anio)){
                $where_sub .= " and date_format(ind_periodo.peri_fecha, '%Y') in ('";
                $where_sub .= implode("', '", $anio)." ')";
            }
        }
        if($sede > 0){
            $where .= " and gc_sede.sed_id = '{$sede}'";
        }
        
        if(count($esp) > 0){
            $where_sub .= " and ind_consulta_externa.ce_especialidad in ('";
            $where_sub .= implode("','", $esp)."')";
        }
        
        $sql = "select
                    gc_sede.sed_id,
                    gc_sede.sed_nombre,
                    (
                        select 
                            count(ind_consulta_externa.ce_id)
                        from 
                            ind_consulta_externa
                                inner join 
                            ind_periodo on ind_periodo.peri_id=ind_consulta_externa.ce_peri_id
                        where
                            ind_consulta_externa.ce_sed_id = gc_sede.sed_id
                                and ind_consulta_externa.ce_estado
                                {$where_sub}
                    ) as cantidad
                from
                    gc_sede 
                where
                    gc_sede.sed_estado = 1
                    {$where}
                order by gc_sede.sed_nombre";
        
        $query = $this->db->query($sql);
        if($query->num_rows > 0){
            return $query->result();
        }
        return NULL;
    }
    
    public function getDataReporteEspecialidad($anio, $mes = "", $sede = 0, $esp = array()){
        $where = "";
        
        if($mes != ""){
            $where .= "and date_format(ind_periodo.peri_fecha, '%m') = '{$mes}'";
        }
        if($sede > 0){
            $where .= " and ind_consulta_externa.ce_sed_id = '{$sede}'";
        }
        if(count($esp) > 0){
            $where .= " and ind_consulta_externa.ce_especialidad in ('";
            $where .= implode("','", $esp)."')";
        }
        $sql = "select 
                    ind_consulta_externa.ce_especialidad,
                    count(ind_consulta_externa.ce_id) as cantidad,
                    count(distinct ind_consulta_externa.ce_dni_paciente) as pacientes
                from
                    ind_consulta_externa
                        inner join
                    ind_periodo ON ind_periodo.peri_id = ind_consulta_externa.ce_peri_id
                where
                    ind_consulta_externa.ce_estado = 1
                        and date_format(ind_periodo.peri_fecha, '%Y') = '{$anio}'
                        {$where}
                group by ind_consulta_externa.ce_especialidad 
                order by cantidad desc";
//        imprimir($sql);
        $query = $this->db->query($sql);
        if($query->num_rows > 0){
            return $query->result();
        }
        return array();
    }
    
    public function especialidadByDiagnostico($diagnostico, $anio, $sede = 0, $esp = array()){
        $where = " and ind_consulta_externa.ce_cie_10_principal = '{$diagnostico}'";
        
        if(count($anio) > 0){
            if(!in_array("all", $anio)){
                $where .= " and date_format(ind_periodo.peri_fecha, '%Y') in ('";
                $where .= implode("', '", $anio)." ')";
            }
        }
        if($sede > 0){
            $where .= " and ind_consulta_externa.ce_sed_id = '{$sede}'";
        }
        
        if(count($esp) > 0){
            $where .= " and ind_consulta_externa.ce_especialidad in ('";
            $where .= implode("','", $esp)."')";
        }
        
        $sql = "select 
                    ind_consulta_externa.ce_especialidad,
                    count(ind_consulta_externa.ce_id) as cantidad
                from
                    ind_consulta_externa
                        inner join
                    ind_periodo ON ind_periodo.peri_id = ind_consulta_externa.ce_peri_id
                where
                    ind_consulta_externa.ce_estado = 1
                        {$where}
                group by ind_consulta_externa.ce_especialidad 
                order by cantidad desc";
        $query = $this->db->query($sql);
        if($query->num_rows > 0){
            return $query->result();
        }
        return NULL;
    }
}

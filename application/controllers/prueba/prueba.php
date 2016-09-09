<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of prueba
 *
 * @author VMC-D02
 */
class Prueba extends CI_Controller {
    //put your code here
    public function __construct() {
        parent::__construct();
    }
    
    public function index(){
        
    }
    
    public function chart(){
        $this->smartyci->assign('chart', 1);
        $this->smartyci->assign('js_script', 'prueba/reporte_prueba.js');
        $this->smartyci->show_page();
    }
}

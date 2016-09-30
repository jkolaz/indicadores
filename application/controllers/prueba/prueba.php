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
    
    public function hc(){
        $this->smartyci->assign('js_script', $this->_class.'/'.$this->_method.'.js');
        $this->smartyci->assign('hc', 1);
        //$this->smartyci->maintpl = 'mainClear';
        $this->smartyci->show_page();
    }
            
}

<?php

require_once  'view/PacienteView.php';


class PacienteController{

    private $model;
    private $view;
    
    public function  __construct() {

        $this->view = new PacienteView();
    }

    function nuevoTurnoPacientePaso1(){
        $this->view->nuevoTurnoPac();
    }

}
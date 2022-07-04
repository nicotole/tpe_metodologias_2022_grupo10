<?php

require_once  'model/TurnosModel.php';
require_once  'view/PacienteView.php';


class PacienteController{

    private $model;
    private $view;
    
    public function  __construct() {
        $this->model = new TurnosModel();
        $this->view = new PacienteView();
    }

    function nuevoTurnoPacientePaso1(){
        $especialidades = self::getEspecialides();
        $obras = self::getObrasSociales();
        $medicos = $this->model->getMedicos();
        $this->view->nuevoTurnoPac($especialidades, $obras, $medicos);
    }

    function getEspecialides(){
        $especialidades= $this->model->getEspecialidades();
        return $especialidades;
    }

    function getObrasSociales(){
        $obras= $this->model->getObrasSociales();
        return $obras;
    }
}
<?php

require_once  'model/TurnosModel.php';
require_once  'view/TurnosView.php';


class TurnosController{

    private $model;
    private $view;
    
    public function  __construct() {
        $this->model = new TurnosModel();
        $this->view = new TurnosView();
    }

    function VerTurnos(){
        $turnos = $this->model->GetTurnos();
        $this->view->verTurnos($turnos);
    }


}
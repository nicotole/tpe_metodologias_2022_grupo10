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
    
    function nuevoTurno(){
        $medicos = $this->model->getMedicos();
        $pacientes = $this->model->getPacientes();
        $this->view->nuevoTurno($medicos, $pacientes);
    }
    
    function AgregarTurno(){
        if (isset($_POST['select_medico']) && 
            isset($_POST['select_paciente']) &&
            isset($_POST['input_nroAfiliado']) &&
            isset($_POST['select_turno']) && ($_POST['input_horario'] != "") 
            && ($_POST['input_fecha'] != "") && 
            isset($_POST['input_dni'])) {
            
            $id_medico = $_POST['select_medico'];  
            $dni = $_POST['input_dni'];
            $nro_afiliado = $_POST['input_nroAfiliado'];
            $tipo_de_turno = $_POST['select_turno'];
            $horario = $_POST['input_horario'];
            $fecha = $_POST['input_fecha'];
           
            $this->model->AgregarTurno($id_medico, $dni, $nro_afiliado, $tipo_de_turno, $horario, $fecha);
            $this->view->ShowHomeLocation();
        
        }else{
            echo '<script language="javascript">alert("Datos incompletos, por favor completar todos los campos");</script>';
            
        }
        self::nuevoTurno();
    }

}
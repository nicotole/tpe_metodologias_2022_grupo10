<?php

require_once  'model/TurnosModel.php';
require_once  'view/PacienteView.php';
require_once  'model/PacienteModel.php';


class PacienteController{

    private $modelPaciente;

    private $model;
    private $view;
    
    public function  __construct() {
        $this->model = new TurnosModel();
        $this->modelPaciente = new pacienteModel();

        $this->view = new PacienteView();
    }

    // function nuevoTurnoPaciente(){
    //     $this->view->nuevoTurnoPaciente();
    // }

    function confirmarDatos(){ 
        if (isset($_POST['select_medico']) &&$_POST['select_medico'] != "" ){
            $p = $_POST['select_medico'];
            $medico =  $this->model->getMedico($p);
            $this->view->confirmarDatos($medico);
       }else{
        header('Location: nuevoTurnoPacPaso1');
       }
    }
    
 
    function imprimirDatos(){

        if (isset($_POST['input_nombre']) && 
        isset($_POST['input_apellido']) &&
        isset($_POST['input_dni']) && 
        isset($_POST['input_telefono']) &&
        isset($_POST['input_email']) &&
        isset($_POST['input_direccion']) &&
        isset($_POST['input_obraSocial']) &&
        isset($_POST['input_NAfiliado'])
        
        ) {
        $id_medico = $_POST['id_medico'] ;
        $medico= $_POST['medico'];

        $nombre = $_POST['input_nombre'];  
        $apellido = $_POST['input_apellido'];
        $dni = $_POST['input_dni'];
        $telefono = $_POST['input_telefono'];
        $email = $_POST['input_email'];
        $direccion = $_POST['input_direccion'];
        $obra_social = $_POST['input_obraSocial'];
        $nro_afiliado = $_POST['input_NAfiliado'];
        $especialidad = $_POST['especialidad'];

        $fecha=  "2022-07-20";
        $horario= "17:00";
        $t = "t";

        $turnos = $this->model->GetTurnos();
        $yaExiste = false;  

        foreach ($turnos as $turno) {
            if (($turno->id_medico == $id_medico) && ($turno->fecha == $fecha) && ($horario == substr($turno->horario, 0, 5))) {         
                echo '<script language="javascript">alert("Ya existe un turno en ese horario");</script>';
                $yaExiste = true;
                break;
            }
        }
            
        if(!$yaExiste){ 
                $this->model->AgregarTurno($id_medico, $dni, $nro_afiliado, $t, $horario, $fecha);
                $this->view->imprimirTurno($nombre, $apellido, $dni, $telefono,  $email, $direccion, $obra_social, $nro_afiliado, $medico, $especialidad, $horario, $fecha, $t);
        }else{
            self::nuevoTurnoPacientePaso1();
        }
    }
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

<?php

require_once  'model/PacienteModel.php';
require_once  'view/PacienteView.php';


class PacienteController{

    private $model;
    private $view;
    
    public function  __construct() {
        $this->model = new PacienteModel();
        $this->view = new PacienteView();
    }

    function nuevoTurnoPaciente(){
        $this->view->nuevoTurnoPaciente();
    }


    function agregarPaciente(){

        if (isset($_POST['input_nombre']) && 
        isset($_POST['input_apellido']) &&
        isset($_POST['input_dni']) && 
        isset($_POST['input_telefono']) &&
        isset($_POST['input_email']) &&
        isset($_POST['input_direccion']) &&
        isset($_POST['input_obraSocial']) &&
        isset($_POST['input_NAfiliado'])
        
        ) {
        
        $nombre = $_POST['input_nombre'];  
        $apellido = $_POST['input_apellido'];
        $dni = $_POST['input_dni'];
        $telefono = $_POST['input_telefono'];
        $email = $_POST['input_email'];
        $direccion = $_POST['input_direccion'];
        $obra_social = $_POST['input_obraSocial'];
        $nro_afiliado = $_POST['input_NAfiliado'];
       
        
        
        $this->model->AgregarPaciente($dni,$nro_afiliado,$nombre, $apellido, $telefono, $email, $direccion, $obra_social);
        $this->view->confirmacionTurno();
        }else{
            echo '<script language="javascript">alert("Datos incompletos, por favor completar todos los campos");</script>';
           
        }
    }
}

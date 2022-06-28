<?php
//incluir cotnrollers
require_once 'controller/TurnosController.php';
require_once 'controller/PacienteController.php';

$action = $_GET["action"];
define("BASE_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');


$TurnosController = new TurnosController();
$PacienteController = new PacienteController();

if($action == ''){
    $TurnosController->VerTurnos();
}else{ 
    if (isset($action)){   
        $partesURL = explode("/", $action);
        if($partesURL[0] == "inicio"){
            $TurnosController->VerTurnos();

        }elseif($partesURL[0] == "agregarTurno") {
            $TurnosController->AgregarTurno();
        }elseif($partesURL[0] == "elimarTurno") {
            $TurnosController->EliminarTurno($partesURL[1]);
        }elseif($partesURL[0] == "nuevoTurno") {
            $TurnosController->nuevoTurno();
        }
        elseif($partesURL[0] == "nuevoTurnoPac") {
            $PacienteController->nuevoTurnoPaciente();
        }elseif($partesURL[0] == "agregarPaciente") {
            $PacienteController->agregarPaciente();
        }
        elseif($partesURL[0] == "confirmacion") {
            $PacienteController->confirmacionTurno();
        }       
    }
}

<?php
require_once "./libs/smarty/Smarty.class.php";

class PacienteView{

    private $smarty;
    
    function __construct(){
        $this->smarty = new Smarty();
        $this->smarty->assign('BASE_URL',BASE_URL);
    }


    function nuevoTurnoPaciente(){
        $this->smarty->assign('titulo', " Nuevo turno");
        $this->smarty->assign('subtitulo', "Confirmar datos personales");
        $this->smarty->display('templates/formTurnoPaciente.tpl');
    }

    function confirmacionTurno(){
        $this->smarty->assign('titulo', " Nuevo turno");
        $this->smarty->assign('subtitulo', "Turno confirmado con éxito!");
        $this->smarty->display('templates/turnoConfirmadoPaciente.tpl');
    }

}
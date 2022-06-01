<?php
require_once "./libs/smarty/Smarty.class.php";

class TurnosView{

    private $smarty;
    
    function __construct(){
        $this->smarty = new Smarty();
        $this->smarty->assign('BASE_URL',BASE_URL);
    }

function verTurnos($turnos){
        $this->smarty->assign('titulo', " Proximo turno");
        $this->smarty->assign('turno', $turnos);
        $this->smarty->display('templates/proximoTurno.tpl');
    }

    function ShowHomeLocation(){
        header("Location: " . BASE_URL . "inicio");
    }
}
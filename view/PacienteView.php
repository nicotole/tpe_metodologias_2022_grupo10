<?php
require_once "./libs/smarty/Smarty.class.php";

class PacienteView{

    private $smarty;
    
    function __construct(){
        $this->smarty = new Smarty();
        $this->smarty->assign('BASE_URL',BASE_URL);
    }

    function nuevoTurnoPac($especialidades, $obras, $medicos){
        $this->smarty->assign('titulo', " Nuevo turno");
        $this->smarty->assign('subtitulo', "Cobertura y médico");
        $this->smarty->assign('medicos', $medicos);
        $this->smarty->assign('obras', $obras);
        $this->smarty->assign('especialidades', $especialidades);
        $this->smarty->display('templates/nuevoTurnoPAC.tpl');
    }
}
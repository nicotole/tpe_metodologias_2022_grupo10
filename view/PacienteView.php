<?php
require_once "./libs/smarty/Smarty.class.php";

class PacienteView{

    private $smarty;
    
    function __construct(){
        $this->smarty = new Smarty();
        $this->smarty->assign('BASE_URL',BASE_URL);
    }

    function confirmarDatos($medico){
        $this->smarty->assign('titulo', " Nuevo turno");
        $this->smarty->assign('medico', $medico);
        $this->smarty->assign('subtitulo', "Turno confirmado con éxito!");
        $this->smarty->display('templates/formTurnoPaciente.tpl');
    }
    
    function nuevoTurnoPac($especialidades, $obras, $medicos){
        $this->smarty->assign('titulo', " Nuevo turno");
        $this->smarty->assign('subtitulo', "Cobertura y médico");
        $this->smarty->assign('medicos', $medicos);
        $this->smarty->assign('obras', $obras);
        $this->smarty->assign('especialidades', $especialidades);
        $this->smarty->display('templates/nuevoTurnoPAC.tpl');
    }

    function imprimirTurno($nombre, $apellido, $dni, $telefono,  $email, $direccion, $obra_social, $nro_afiliado, $medico, $especialidad, $horario, $fecha, $t){
        $this->smarty->assign('titulo', " Nuevo turno");
        $this->smarty->assign('subtitulo', "Turno confirmado con exito!");
        $this->smarty->assign('medico', $medico);
        $this->smarty->assign('nombre', $nombre);
        $this->smarty->assign('apellido', $apellido);
        $this->smarty->assign('dni', $dni);
        $this->smarty->assign('telefono', $telefono);
        $this->smarty->assign('email', $email);
        $this->smarty->assign('direccion', $direccion);
        $this->smarty->assign('t', $t);

        $this->smarty->assign('obra_social', $obra_social);
        $this->smarty->assign('nro_afiliado', $nro_afiliado);

        $this->smarty->assign('especialidad', $especialidad);
        $this->smarty->assign('fecha', $fecha);

        $this->smarty->assign('horario', $horario);

        $this->smarty->display('templates/turnoConfirmadoPaciente.tpl');
    }
}
<?php

class TurnosModel{

    private $db;

    function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=sistema_medico_db;charset=utf8', 'root', '');
    }


    public function GetTurnos(){

        $sentencia = $this->db->prepare("SELECT m.id_medico, m.nombre as nombre_medico, m.apellido as apellido_medico, m.especialidad, p.nombre as nombre_paciente, p.apellido as apellido_paciente, t.tipo_de_turno, t.horario, t.id_turno as id_turno, t.fecha
                                            FROM turno t
                                            JOIN medico m ON (t.id_medico = m.id_medico)
                                            JOIN paciente p ON (t.dni = p.dni) AND (t.nro_afiliado = p.nro_afiliado)
                                            WHERE t.fecha >= now()
                                            ORDER BY m.nombre, t.horario ASC");
        $sentencia->execute();
        $turnos = $sentencia->fetchAll(PDO::FETCH_OBJ);      
        return $turnos;
    }

    public function getPacientes(){
        $sentencia = $this->db->prepare("SELECT nombre, apellido, dni, nro_afiliado as afiliado 
                                            FROM paciente" );
        $sentencia->execute();
        $pacientes = $sentencia->fetchAll(PDO::FETCH_OBJ);       
        return $pacientes;
    }

   
    public function getMedicos(){
        $sentencia = $this->db->prepare("SELECT *, id_medico as id
                                            FROM medico" );
        $sentencia->execute();
        $medicos = $sentencia->fetchAll(PDO::FETCH_OBJ);       
        return $medicos;
    }

    // Crear un turno nuevo, tambien ponerlo con paciente y medico?
    public function AgregarTurno($id_medico, $dni, $nro_afiliado, $tipo_de_turno, $horario, $fecha) {
        $sentencia = $this->db->prepare('INSERT INTO turno(id_medico, dni, nro_afiliado, tipo_de_turno, horario, fecha) 
                                            VALUES(?,?,?,?,?,?)');
        $sentencia->execute([$id_medico, $dni, $nro_afiliado, $tipo_de_turno, $horario, $fecha]); 
        return $this->db->lastInsertId();
    }


    public function BorrarTurno($id_turno) {
        $sentencia = $this->db->prepare('DELETE FROM turno 
                                            WHERE id_turno = ?');
        $sentencia->execute(array($id_turno));
        return $sentencia->fetch(PDO::FETCH_OBJ);
    }

    public function getMedicosPorEspecialidad($especialidad){
        /*Retorna el nombre, apellido y id de los medicos segun la especialidad requerida
        */
        $sentencia = $this->db->prepare("SELECT nombre, apellido, id_medico 
                                            FROM medico 
                                            WHERE especialidad = ?");
        $sentencia->execute(array($especialidad));
        return $sentencia->fetchAll(PDO::FETCH_OBJ);
    }

    public function getMedicosPorObraSocial($obraSocial){
        /*Retorna el nombre, apellido y id de los medicos segun la obra social requerida
        */
        $sentencia = $this->db->prepare("SELECT nombre, apellido, id_medico 
                                            FROM medico 
                                            WHERE obra_social = ?");
        $sentencia->execute(array($obraSocial));
        return $sentencia->fetchAll(PDO::FETCH_OBJ);
    }

    public function getEspecialidades(){
        $sentencia = $this->db->prepare("SELECT DISTINCT especialidad 
                                            FROM medico" );
        $sentencia->execute();
        $especialidades = $sentencia->fetchAll(PDO::FETCH_OBJ);       
        return $especialidades;
    }

    public function getMedico($id){
        /*Retorna el nombre, apellido y id de los medicos segun la obra social requerida
        */
        $sentencia = $this->db->prepare("SELECT * 
                                            FROM medico 
                                            WHERE id_medico = ?");
        $sentencia->execute(array($id));
        return $sentencia->fetch(PDO::FETCH_OBJ);
    }
    
   
    public function getObrasSociales(){
        $sentencia = $this->db->prepare("SELECT DISTINCT obra_social 
                                            FROM medico" );
        $sentencia->execute();
        $obras = $sentencia->fetchAll(PDO::FETCH_OBJ);       
        return $obras;
    }

}

<?php

class TurnosModel{

    private $db;

    function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=sistema_medico_db;charset=utf8', 'root', '');
    }


    public function GetTurnos(){

        $sentencia = $this->db->prepare("SELECT m.id_medico, m.nombre as nombre_medico, m.apellido as apellido_medico, m.especialidad, p.nombre as nombre_paciente, t.tipo_de_turno, t.horario, t.id_turno as id_turno, t.fecha
                                            FROM turno t
                                            JOIN medico m ON (t.id_medico = m.id_medico)
                                            JOIN paciente p ON (t.dni = p.dni) AND (t.nro_afiliado = p.nro_afiliado)
                                            WHERE t.fecha >= now()
                                            ORDER BY m.nombre, t.horario ASC");
        $sentencia->execute();
        $turnos = $sentencia->fetchAll(PDO::FETCH_OBJ);      
        return $turnos;
    }


}

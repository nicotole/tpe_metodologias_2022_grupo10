<?php

class PacienteModel{

    private $db;

    function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=sistema_medico_db;charset=utf8', 'root', '');
    }

    public function getPaciente(){
        $sentencia = $this->db->prepare("SELECT * FROM paciente" );
        $sentencia->execute();
        $pacientes = $sentencia->fetchAll(PDO::FETCH_OBJ);       
        return $pacientes;
    }

    public function AgregarPaciente($dni,$nro_afiliado,$nombre, $apellido, $telefono, $email, $direccion, $obra_social) {
        $sentencia = $this->db->prepare('INSERT INTO paciente(dni,nro_afiliado, nombre, apellido, telefono,email,direccion,obra_social) 
                                            VALUES(?,?,?,?,?,?,?,?)');
        $sentencia->execute([  $dni,$nro_afiliado,$nombre, $apellido, $telefono, $email, $direccion, $obra_social]); 
        return $this->db->lastInsertId();
    }

}

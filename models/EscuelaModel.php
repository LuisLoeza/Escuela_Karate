<?php

class Escuela_model{

    private $db;
    private $alumnos;

    public function __construct() {//metodo constructor
        $this->db = Conectar::conexion();
        $this->alumnos = array();
}

public function get_alumnos()
{
    $sql ="SELECT * FROM alumnos";
    $resultado = $this->db->query($sql);
    while($row = $resultado->fetch_assoc())
    {
        $this->alumnos[] = $row;
    }
    return $this->alumnos;
}

public function insertar($nombre, $apellido, $email, $clase, $sexo, $discapacidad){
    $resultado = $this->db->query("INSERT INTO alumnos (nombre, apellido, email, clase, sexo, discapacidad) VALUES ('$nombre', '$apellido', '$email', '$clase', '$sexo', '$discapacidad')");
}

public function eliminar($id){
    $resultado = $this->db->query("DELETE FROM alumnos WHERE id = '$id'");
}

public function get_alumno($id)
{
    $sql = "SELECT * FROM alumnos WHERE id='$id' LIMIT 1";
    $resultado = $this->db->query($sql);
    $row = $resultado->fetch_assoc();
    
    return $row;
}

}
?>
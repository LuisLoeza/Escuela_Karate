<?php

class Clases_model{

    private $db;
    private $clases;

    public function __construct() {//metodo constructor
        $this->db = Conectar::conexion();
        $this->clases = array();
}

public function get_clases()
{
  $sql ="SELECT * FROM clases";
    $resultado = $this->db->query($sql);
    while($row = $resultado->fetch_assoc())
    {
        $this->clases[] = $row;
    }
    return $this->clases;
}

public function insertar($profe, $estilo,$edad, $dia, $hora){
    $resultado = $this->db->query("INSERT INTO clases (profeclase,estiloclase,edadclase,diaclase,horaclase) VALUES ('$profe','$estilo','$edad','$dia','$hora')");
}

public function eliminar($id){
    $resultado = $this->db->query("DELETE FROM clases WHERE clase = '$id'");
}
}
?>
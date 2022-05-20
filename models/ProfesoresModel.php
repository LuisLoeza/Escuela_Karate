<?php

class Profesores_model{

    private $db;
    private $profesores;

    public function __construct() {//metodo constructor
        $this->db = Conectar::conexion();
        $this->profesores = array();
}

public function get_profesores()
{
  $sql ="SELECT * FROM profesores";
    $resultado = $this->db->query($sql);
    while($row = $resultado->fetch_assoc())
    {
        $this->profesores[] = $row;
    }
    return $this->profesores;
}


public function insertar($nombre, $apellido, $estilo, $cinturon, $telprofe, $emailprof, $imgprofe){
        $resultado = $this->db->query("INSERT INTO profesores (nomprofe, apellidoprofe, estilo, cinturon, telprofe, emailprofe, imgprofe) VALUES ('$nombre', '$apellido', '$estilo', '$cinturon', '$telprofe','$emailprof','$imgprofe')");
    
}

public function eliminar($id){
    $resultado = $this->db->query("DELETE FROM profesores WHERE id = '$id'");
}


}
?>
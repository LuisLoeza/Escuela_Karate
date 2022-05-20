<?php

class Eventos_model{

    private $db;
    private $eventos;

    public function __construct() {//metodo constructor
        $this->db = Conectar::conexion();
        $this->eventos = array();
}

public function get_eventos()
{
    $sql ="SELECT * FROM eventos";
    $resultado = $this->db->query($sql);
    while($row = $resultado->fetch_assoc())
    {
        $this->eventos[] = $row;
    }
    return $this->eventos;
}

public function insertar($nomevento, $descripevento, $fechaevento, $imgevento){
  $resultado = $this->db->query("INSERT INTO eventos (nomevento, descripevento, fechaevento, imgevento) VALUES ('$nomevento', '$descripevento', '$fechaevento', '$imgevento')");
}


public function eliminar($id){
    $resultado = $this->db->query("DELETE FROM eventos WHERE id = '$id'");
}


}
?>
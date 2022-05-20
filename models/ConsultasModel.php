<?php

class Consultas_model{

    private $db;
    private $consultas;

    public function __construct() {//metodo constructor
        $this->db = Conectar::conexion();
        $this->consultas = array();
}

public function get_eventos()
{
  $sql ="SELECT * FROM eventos";
    $resultado = $this->db->query($sql);
    while($row = $resultado->fetch_assoc())
    {
        $this->consultas[] = $row;
    }
    return $this->consultas;
}

}
?>
<?php

class Admin_model{

    private $db;
    private $datos;

    public function __construct() {//metodo constructor
        $this->db = Conectar::conexion();
        $this->datos = array();
}

public function get_User($usuario, $contrasenia)
{
    $sql = "SELECT * FROM administradores WHERE usuario = '$usuario' AND contra = '$contrasenia'";
    $resultado = $this->db->query($sql);
    while($row = $resultado->fetch_assoc())
    {
        $this->datos[] = $row;
    }
    return $this->datos; 
}




}
?>
<?php

include_once 'db.php';

class Alumno extends DB{
    
    function obtenerAlumnos(){
        #$query = $this->connect()->query('SELECT * FROM alumnos');
        $query = $this->connect()->query('SELECT * FROM alumnos WHERE clase=3');
        return $query;
    }

}

?>
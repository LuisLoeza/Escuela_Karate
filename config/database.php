<?php
     class Conectar {
         public static function conexion(){
             $conexion = new mysqli("localhost","root","","proyectofinal");
             return $conexion;
             
         }
     }
?>

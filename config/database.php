<?php
     class Conectar {
         public static function conexion(){
             $conexion = new mysqli("localhost","ourpageitm","0urp4g3itm","ourpagei_proyectofinal");
             return $conexion;
             
         }
     }
?>
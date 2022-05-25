<?php
  include_once 'alumno.php';

class ApiAlumnos{
    function getAll(){
      $alumno = new Alumno();
      $alumnos = array();
      $alumnos["items"] = array();

      $res =  $alumno->obtenerAlumnos();

      if($res-> rowCount()){
        while($row = $res->fetch(PDO::FETCH_ASSOC)){
          $item=array(
            "id" => $row['id'],
            "nombre" => $row['nombre'],
            "apellido" => $row['apellido'],
            #"email" => $row['email'],
            "clase" => $row['clase'],
            #"sexo" => $row['sexo'],
            # "discapacidad" => $row['discapacidad']
        );
        array_push($alumnos["items"],$item);
        }
        echo json_encode($alumnos);
      }else{
        echo json_encode(array('mensaje'=>'No hay elemento'));
      }
    }
}
?>
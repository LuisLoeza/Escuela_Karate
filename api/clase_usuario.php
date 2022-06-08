<?php
      include_once("../models/EscuelaModel.php");
      include_once("../config/database.php");
  class Usuario{

    private $nombre;
    private $apellido;
    private $email;
    private $clase;
    private $sexo;
    private $discapacidad;
      
    public function __construct($nombre,$apellido,$email,$clase,$sexo,$discapacidad){
      $this->nombre = $nombre;
      $this->apellido = $apellido;
      $this->email = $email;
      $this->clase = $clase;
      $this->sexo = $sexo;
      $this->discapacidad = $discapacidad;

    }


    //CRUD

    public function guardarUsuario(){
      $alumnos = new Escuela_model();
      $data = $alumnos->insertar($this->nombre, $this->apellido, $this->email, $this->clase, $this->sexo, $this->discapacidad);
    }

    public static function obtenerUsuarios(){
      
      $alumnos = new Escuela_model();
      $data = $alumnos->get_alumnos();
      $resultado = json_encode($data);
      echo $resultado;
    }
    public static function obtenerUsuario($id){
      $alumnos = new Escuela_model();
      $data = $alumnos->get_alumno($id);
      $resultado = json_encode($data);
      echo $resultado;
    }

    public function actualizarUsuario($id){
      $alumnos = new Escuela_model();
      $data = $alumnos->actualizar($id,$this->nombre,$this->apellido,$this->email,$this->clase,$this->sexo,$this->discapacidad);
    }

    public static function eliminarUsuario($id){

      $alumnos = new Escuela_model();
      $data = $alumnos->eliminar($id);
      $resultado = json_encode($data);
      echo $resultado;
    }

  }
?>
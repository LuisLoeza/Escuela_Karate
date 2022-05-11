<?php

class EscuelaController {
    public function __construct(){
        require_once "models/EscuelaModel.php";
    }
    public function index(){
        $alumnos = new Escuela_model();
        $data["titulo"] ="Lista Alumnos";
        $data["alumnos"] = $alumnos->get_alumnos();
        require_once "views/escuela/alumnos.php";
    }

    

    public function nuevo(){
        $data["titulo"] = "Nuevo Alumno";
        require_once "views/escuela/alumno_nuevo.php";
    }

    public function mostraralumnos(){
        $data["titulo"] = "Nuevo Alumno";
        require_once "views/escuela/alumnos.php";
    }

    public function guarda(){
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $email = $_POST['email'];
        $clase = $_POST['clase'];
        $sexo = $_POST['sexo'];
        $discapacidad = $_POST['discapacidad'];

        $alumnos = new Escuela_model();
        $alumnos->insertar($nombre, $apellido, $email, $clase, $sexo, $discapacidad);

        $data["titulo"] = "Alumnosa";
        $this->index();
    } 

    public function eliminar($id){
        $alumno = new Escuela_Model();
        $alumno->eliminar($id);
        $this->index();
    }

}

?>

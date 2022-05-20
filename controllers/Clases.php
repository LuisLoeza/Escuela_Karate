<?php

class ClasesController {
    public function __construct(){
        require_once "models/ClasesModel.php";
        require_once "models/ProfesoresModel.php";
    }
    public function index(){
        $clases = new Clases_model();
        
        $data["titulo"] = "clases";
        $data["clases"] = $clases->get_clases();
        
        require_once "views/escuela/clase.php";
    }

    public function clases(){
        $clases = new Clases_model();
        $data["titulo"] = "clases";
        $profes = new Profesores_model();
        $data["clases"] = $clases->get_clases();
        $dat["profes"] = $profes->get_profesores();
        require_once "views/escuela/clase.php";
    }
    
    public function inscripcion(){
        $clases = new Clases_model();
        $data["titulo"] = "clases";
        $profes = new Profesores_model();
        $data["clases"] = $clases->get_clases();
        $dat["profes"] = $profes->get_profesores();
        require_once "views/escuela/inscripcion.php";
    }

    public function guardarclase(){
    
        $profe = $_POST['profeclase'];
        $estilo = $_POST['estiloclase'];
        $edad = $_POST['edadclase'];
        $dia = $_POST['diaclase'];
        $hora = $_POST['horaclase'];
        
        

        $clases = new Clases_model();
        $clases->insertar($profe, $estilo, $edad, $dia, $hora);
        
        if($profe){
            echo '
                <script>
                    alert("SE GUARDARON LOS DATOS CORRECTAMENTE")
                    location.href="index.php?c=Clases"
                </script> 
            ';
        }else{
            echo '
                <script>
                    alert("NO SE PUDIERON GUARDAR LOS DATOS")
                    location.href="index.php?c=Clases"
                </script> 
            ';
        }
        
    }

    public function eliminar($id){
        $clases = new Clases_Model();
        $clases->eliminar($id);
        $this->index();
    }
    
}

?>

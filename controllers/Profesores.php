<?php

class ProfesoresController {
    public function __construct(){
        require_once "models/ProfesoresModel.php";
    }
    public function index(){
        $profes = new Profesores_model();
        $data["titulo"] = "profes";
        $data["profesores"] = $profes->get_profesores();
        require_once "views/escuela/dojo.php";
    }

    public function profes(){
        $profes = new Profesores_model();
        $data["titulo"] = "profes";
        $data["profesores"] = $profes->get_profesores();
        require_once "views/escuela/profesor.php";
    }
    
    public function guardarprofe(){
        $rutatemporal = $_FILES['imgprofe']['tmp_name'];
        $rutaservidor = 'imgprofes';
        $nombrefoto = $_FILES['imgprofe']['name'];
        $rutadestino = $rutaservidor."/".$nombrefoto;
        move_uploaded_file ($rutatemporal,$rutadestino);
        
        $nombre = $_POST['nomprofe'];
        $ape = $_POST['apellidoprofe'];
        $est = $_POST['estilo'];
        $cint = $_POST['cinturon'];
        $tel = $_POST['telprofe'];
        $email= $_POST['emailprofe'];
        #$img = $_POST['imgprofe'];
        

        $profe = new Profesores_model();
        $profe->insertar($nombre, $ape, $est, $cint, $tel, $email,$rutadestino);
        
        if($profe){
            echo '
                <script>
                    alert("SE GUARDARON LOS DATOS CORRECTAMENTE")
                    location.href="index.php?c=Profesores&a=profes"
                </script> 
            ';
        }else{
            echo '
                <script>
                    alert("NO SE PUDIERON GUARDAR LOS DATOS")
                    location.href="index.php?c=Profesores&a=profes"
                </script> 
            ';
        }
        
    }

    public function eliminar($id){
        $alumno = new Profesores_Model();
        $alumno->eliminar($id);
        $this->profes();
    }
    
}

?>

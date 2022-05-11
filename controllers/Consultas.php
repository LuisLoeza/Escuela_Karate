<?php

class ConsultasController {
    public function __construct(){
        require_once "models/ConsultasModel.php";
    }
    public function index(){
        $consultas = new Consultas_model();
        $data["titulo"] ="Lista Eventos";
        $data["eventos"] = $consultas->get_eventos();
        require_once "views/escuela/principal.php";

    }

    public function dojo(){
        $data["titulo"] = "dojo"; 
        
        require_once "views/escuela/dojo.php";
    }
    public function karate(){
        $data["titulo"] = "karate";
        require_once "views/escuela/karate.php";
    }
    public function inscripcion(){
        $data["titulo"] = "inscripcion";
        require_once "views/escuela/inscripcion.php";
    }
    public function contactanos(){
        $data["titulo"] = "inscripcion";
        require_once "views/escuela/contactanos.php";
    }
    public function enviar(){
        $data["titulo"] = "enviar";
        require_once "views/escuela/raw_enviar_mailer.php";
    }
    
    
    

}

?>

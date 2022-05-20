<?php
   
class AdminController {

    public function __construct(){

        require_once "models/AdminModel.php";
    }
    public function index(){
      $datos = new Admin_model();
      #$data["usuario"] = $datos->get_User();
      require_once "views/escuela/admin.php";
    }

    public function panel(){
      require_once "views/escuela/panel.php";
    }

    public function salir(){
      require_once "views/escuela/salir.php";
    }

    public function autentificacion(){
      $usuario = $_POST['usuario'];
      $contrasenia = $_POST['contra'];

       $autent = new Admin_model();
      

       if($autent->get_User($usuario, $contrasenia)){
        	session_start();
        	$_SESSION['username'] = $usuario;
        	$_SESSION["autentificado"] = "SI";
        	header("Location: index.php?c=Admin&a=panel");
        }else{
        	echo '
                <script>
                    alert("ERROR EN LA AUTENTIFICACION");
                    location.href="index.php?c=Admin";
                </script>
            ';
        }
      

      
  }

  }


?>
<?php
header("Content-Type: application/json");
include_once("../api/clase_usuario.php");
switch($_SERVER['REQUEST_METHOD']){
  case 'POST':
    $_POST = json_decode(file_get_contents('php://input'),true);
    $Usuario = new Usuario($_POST['nombre'],$_POST['apellido'],$_POST['email'],$_POST['clase'],$_POST['sexo'],$_POST['discapacidad']);
    $Usuario->guardarUsuario();
    $resultado["mensaje"] = "guardar:".json_encode($_POST);
    echo json_encode($resultado);
  break;
  
  case 'GET':
    if(isset($_GET['id'])){
      Usuario::obtenerUsuario($_GET['id']);
    }else{
      Usuario::obtenerUsuarios();
    }
  break;

  case 'PUT':
    $_PUT = json_decode(file_get_contents('php://input'),true);
    $Usuario = new Usuario($_PUT['nombre'],$_PUT['apellido'],$_PUT['email'],$_PUT['clase'],$_PUT['sexo'],$_PUT['discapacidad']);
    $Usuario->actualizarUsuario($_GET['id']);
    $resultado["mensaje"]="put id: ".$_GET['id'].
    ", actualizar: ".json_encode($_PUT);

    echo json_encode($resultado);
  break;

  case 'DELETE':
    Usuario::eliminarUsuario($_GET['id']);
    $resultado["mensaje"]="eliminar id: ".$_GET['id'];
    echo json_encode($resultado);
  break;
}
?>
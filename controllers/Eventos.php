<?php
class EventosController {
  public function __construct(){
      require_once "models/EventosModel.php";
  }
  public function index(){
      $eventos = new Eventos_model();
      $data["eventos"] = $eventos->get_eventos();
      require_once "views/escuela/evento.php";
  }


  public function guarda(){

    $rutatemporal = $_FILES['imgevento']['tmp_name'];
    $rutaservidor = 'imgeventos';
    $nombrefoto = $_FILES['imgevento']['name'];
    $rutadestino = $rutaservidor."/".$nombrefoto;
    move_uploaded_file ($rutatemporal,$rutadestino);

    $nomevento = $_POST['nomevento'];
    $descripevento = $_POST['descripevento'];
    $fechaevento = $_POST['fechaevento'];
    
    

    $eventos = new Eventos_model();
    $eventos->insertar($nomevento, $descripevento, $fechaevento, $rutadestino);

    $this->index();
} 

  public function eliminar($id){
      $evento = new Eventos_Model();
      $evento->eliminar($id);
      $this->index();
  }

}
?>
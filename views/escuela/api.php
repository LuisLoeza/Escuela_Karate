<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>API</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
  <h1>API DE ALUMNOS:</h1>
  <?php
    include_once 'apialumnos.php';

    $api = new ApiAlumnos();

    $api->getAll();
    
?>
</body>
</html>
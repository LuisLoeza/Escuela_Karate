<!DOCTYPE html>
<html lang="en">
<?php
	require "seguridad.php";
    $usuario = $_SESSION['username'];
?>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Alumnos inscritos</title>
  <link rel="stylesheet" href="estilos.css">
  <link rel="shortcut icon" href="imagenes/logo.png">
</head>

<body>
  <div class="fondopanel">
    <?php
            include "heaterpanel.php";
        ?>
    <div id="tablamostrar">
      <table>
        <tr>
          <th>#</th>
          <th>Alumno</th>
          <th>Correo</th>
          <th>Clase</th>
          <th>Genero</th>
          <th>Discapacidad</th>
          <th>Eliminar</th>
        </tr>
      
        <?php foreach($data["alumnos"] as $dato) {
                echo "<tr>";
                echo "<td>".$dato["id"]."</td>";
                echo "<td>".$dato["nombre"]."&nbsp;".$dato["apellido"]."</td>";
                echo "<td>".$dato["email"]."</td>";
                echo "<td>".$dato["clase"]."</td>";
                echo "<td>".$dato["sexo"]."</td>";
                echo "<td>".$dato["discapacidad"]."</td>";
                echo "<td><a href='index.php?c=Escuela&a=eliminar&id=".$dato["id"]."'>X</a></td>";
                echo "</tr>";
            }
            ?>
      </table>

    </div>
  </div>
</body>

</html>



<!-- <?php
     
?>
<!DOCTYPE html>
<head>
          <title><?php echo $data["titulo"]; ?></title>
</head>

<body>
    <h2><?php echo $data["titulo"]; ?></h2>
    <br/>
    <br/>
    <a href="index.php?c=Escuela&a=nuevo">Agregar</a>
    <link rel="stylesheet" href="estilos.css">
    <link rel="shortcut icon" href="imagenes/logo.png">
    <br/>
    <br/>
    <table border="1" width="80%">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Email</th>
                <th>Clase</th>
                <th>Sexo</th>
                <th>Discapacidad</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($data["alumnos"] as $dato) {
                echo "<tr>";
                echo "<td>".$dato["id"]."</td>";
                echo "<td>".$dato["nombre"]."</td>";
                echo "<td>".$dato["apellido"]."</td>";
                echo "<td>".$dato["email"]."</td>";
                echo "<td>".$dato["clase"]."</td>";
                echo "<td>".$dato["sexo"]."</td>";
                echo "<td>".$dato["discapacidad"]."</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>
 -->
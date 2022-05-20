<?php
     
?>
<!DOCTYPE html>
<html>
    <head>
          <title><?php echo $data["titulo"]; ?></title>
    </head>

    <body>
        <h2><?php echo $data["titulo"]; ?></h2>
        <form id="nuevo" name="nuevo" method="POST" action="index.php?c=Escuela&a=guarda" autocomplete="off">
        Nombre: <input type="text" id="nombre" name="nombre"><br>
        Apellido: <input type="text" id="apellido" name="apellido"><br>
        Email: <input type="text" id="email" name="email"><br>
        Clase: <input type="text" id="clase" name="clase"><br>
        Sexo: <input type="text" id="sexo" name="sexo"><br>
        Discapacidad: <input type="text" id="discapacidad" name="discapacidad"><br>

        <button id="guardar" name="guardar" type="submit">Guardar</button>
        </form>
    </body>
</html>


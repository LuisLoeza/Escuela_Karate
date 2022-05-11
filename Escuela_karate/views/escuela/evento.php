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
    <title>Registrar evento</title>
    <link rel="stylesheet" href="estilos.css">
    <link rel="shortcut icon" href="imagenes/logo.png">
</head>
<body>
    <div class="fondopanel">
        <?php
            include "heaterpanel.php";
        ?>
        <div id="formformato">
            <form action="index.php?c=Eventos&a=guarda" method="post" enctype="multipart/form-data">
                <label for="">Nombre del evento:</label><br>
                <input type="text" name="nomevento" required>
                <br><br>
                <label for="">Descripcion:</label><br>
                <input type="text" name="descripevento" required>
                <br><br>
                <label for="">Fecha del evento:</label><br>
                <input type="text" name="fechaevento"  required>
                <br><br>
                <label for="">Imagen promocional del evento:</label>
                <input type="file" name="imgevento" required>
                <br><br>
                <input type="submit" value="Registrar nuevo evento">
            </form>
        </div>
        <div id="tablamostrar">
            <table>
                <tr>
                    <th>#</th>
                    <th>Evento</th>
                    <th>Eliminar</th>
                </tr>
                <?php
    
                    foreach ($data["eventos"] as $dato){
                        echo "<tr>";
                        echo "<td>".$dato["id"]."</td>";
                        echo "<td>".$dato["nomevento"]."</td>";
                        echo "<td><a href='index.php?c=Eventos&a=eliminar&id=".$dato["id"]."'>X</a></td>";
                        echo "</tr>";  
                    }
                ?>
            </table>
            <script>
                function validar(url){
                var eliminar = confirm("¿Realmente deseas eliminar?");
                if(eliminar == true){
                    window.location=url;
                }
                }  
            </script>
        </div>
    </div>
</body>
</html>
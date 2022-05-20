<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" con   tent="width=device-width, initial-scale=1.0">
    <title>Registrar profesor</title>
    <link rel="stylesheet" href="estilos.css">
    <link rel="shortcut icon" href="imagenes/logo.png">
</head>
<body>
    <div class="fondopanel">
        <?php
            include "heaterpanel.php";
        ?>
        <div id="formformato">
            <form action="index.php?c=Profesores&a=guardarprofe" method="post" enctype="multipart/form-data">
                <label for="">Nombre del profesor:</label><br>
                <input type="text" name="nomprofe" required>
                <br><br>
                <label for="">Apellido:</label><br>
                <input type="text" name="apellidoprofe" required>
                <br><br>
                <label for="">Estilo que enseña:</label>
                <select name="estilo" id="" required>
                    <option value="">seleccion</option>
                    <option value="Shorin Ryu">Shorin Ryu</option>
                    <option value="Gōjū Ryū">Gōjū Ryū</option>
                    <option value="Uechi Ryū">Uechi Ryū</option>
                    <option value="Shohei-ryu">Shohei-ryu</option>
                    <option value="Shito-ryu">Shito-ryu</option>
                    <option value="Shotokan">Shotokan</option>
                    <option value="Wadō-ryū">Wadō-ryū</option>
                    <option value="Seitokaikan">Seitokaikan</option>
                </select>
                <br><br>
                <label for="">Cinturon alcanzado:</label>
                <select name="cinturon" id="" required>
                    <option value="">seleccion</option>
                    <option value="Blanco">Blanco</option>
                    <option value="Celeste">Celeste</option>
                    <option value="Amarillo">Amarillo</option>
                    <option value="Naranja">Naranja</option>
                    <option value="Verde">Verde</option>
                    <option value="Marron">Marron</option>
                    <option value="Negro">Negro</option>
                    <option value="Rojo-blanco">Rojo-blanco</option>
                    <option value="Rojo">Rojo</option>
                </select>
                <br><br>
                <label for="">Telefono:</label><br>
                <input type="text" name="telprofe" required>
                <br><br>
                <label for="">Correo:</label><br>
                <input type="text" name="emailprofe" required>
                <br><br>
                <label for="">Foto de identificacion:</label>
                <input type="file" name="imgprofe" required>
                <br><br>
                <input type="submit" value="Registrar nuevo profesor">
            </form>
        </div>
        <div id="tablamostrar">
            <table>
                <tr>
                    <th>#</th>
                    <th>Profesor</th>
                    <th>Eliminar</th>
                </tr>
                <?php
    
                    foreach ($data["profesores"] as $dato){
                        echo "<tr>";
                        echo "<td>".$dato["id"]."</td>";
                        echo "<td>".$dato["nomprofe"]."&nbsp;".$dato["apellidoprofe"]."</td>";
                        echo "<td><a href='index.php?c=Profesores&a=eliminar&id=".$dato["id"]."'>X</a></td>";
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
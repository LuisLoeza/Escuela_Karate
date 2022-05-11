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
    <title>Registrar clase</title>
    <link rel="stylesheet" href="estilos.css">
    <link rel="shortcut icon" href="imagenes/logo.png">
</head>
<body>
    <div class="fondopanel">
        <?php
            include "heaterpanel.php";
        ?>
        <div id="formformato">
            <form action="index.php?c=Clases&a=guardarclase" method="post">
                <label for="">Profesor que impartira:</label>
                <select name="profeclase" id="" required>
                    <option value="">seleccion</option>
                    <?php
                        foreach($dat["profes"] as $dato){
                    ?>
                    <option value="<?php echo $dato["nomprofe"]; ?>">
                    <?php echo $dato["nomprofe"]; ?></option>
                    <?php 
                        }
                        
                    ?>
                </select>
                <br><br>
                <label for="">Estilo:</label>
                <select name="estiloclase" id="" required>
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
                <label for="">Edad para la clase:</label>
                <select name="edadclase" id="" required>
                    <option value="">seleccion</option>
                    <option value="Niños">Niños</option>
                    <option value="Adolescentes">Adolescentes</option>
                    <option value="Adultos">Adultos</option>
                    <option value="Adultos mayores">Adultos mayores</option>
                </select>
                <br><br>
                <label for="">Que dias seran las clases:</label>
                <select name="diaclase" id="" required>
                    <option value="">seleccion</option>
                    <option value="Sabado y Domingo">Sabado y Domingo</option>
                    <option value="Lunes, Miercoles y Viernes">Lunes, Miercoles y Viernes</option>
                    <option value="Martes y Jueves">Martes y Jueves</option>
                    <option value="Lunes, Martes y Viernes">Lunes, Martes y Viernes</option>
                </select>
                <br><br>
                <label for="">Que horario tendra la clase:</label>
                <select name="horaclase" id="" required>
                    <option value="">seleccion</option>
                    <option value="12:00 pm - 2:00 pm">12:00 pm - 2:00 pm</option>
                    <option value="2:00 pm - 4:00 pm">2:00 pm - 4:00 pm</option>
                    <option value="4.00 pm - 6:00 pm">4.00 pm - 6:00 pm</option>
                    <option value="6:00 pm - 9:00 pm">6:00 pm - 9:00 pm</option>
                </select>
                <br><br>
                <input type="submit" value="Registrar nueva clase">
            </form>
        </div>
        <div id="tablamostrar">
            <table>
                <tr>
                    <th>Clase</th>
                    <th>Eliminar</th>
                </tr>
                <?php
                    
                    foreach($data["clases"] as $dato){
                        echo "<tr>";
                        echo "<td>".$dato["clase"]."</td>";
                        echo "<td><a href='index.php?c=Clases&a=eliminar&id=".$dato["clase"]."'>X</a></td>";
                        echo "</tr>";  
                    }
                   
                ?>
            </table>
        </div>
    </div>
</body>
</html>
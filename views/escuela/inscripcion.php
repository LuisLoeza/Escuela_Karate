<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vuelvete karateka</title>
    <link rel="stylesheet" href="estilos.css">
    <link rel="shortcut icon" href="imagenes/logo.png">
</head>
<body>
    <?php
        include "heater.php";
    ?>
    <div id="contenidoinscripcion1">
        <div id="estiloskarate">
            <h1>Estilos de karate.</h1>
            <hr>
            <a href="https://es.wikipedia.org/wiki/Shorin_Ryu" target="blank">
                <div class="emblemas">
                    <img src="imagenes/estilo1.png" alt="">
                    <p>Shorin-Ryu</p>
                </div>
            </a>
            <a href="https://es.wikipedia.org/wiki/G%C5%8Dj%C5%AB_Ry%C5%AB" target="blank">
                <div class="emblemas">
                    <img src="imagenes/estilo2.png" alt="">
                    <p>Gōjū Ryū</p>
                </div>
            </a>
            <a href="https://es.wikipedia.org/wiki/Uechi_Ry%C5%AB" target="blank">
                <div class="emblemas">
                    <img src="imagenes/estilo3.png" alt="">
                    <p>Uechi Ryū</p>
                </div>
            </a>
            <a href="https://es.wikipedia.org/wiki/Karate#Estilos" target="blank">
                <div class="emblemas">
                    <img src="imagenes/estilo4.png" alt="">
                    <p>Shohei-ryu</p>
                </div>
            </a>
            <a href="https://es.wikipedia.org/wiki/Shit%C5%8D-ry%C5%AB" target="blank">
                <div class="emblemas">
                    <img src="imagenes/estilo5.png" alt="">
                    <p>Shito-ryu</p>
                </div>
            </a>
            <a href="https://es.wikipedia.org/wiki/Shotokan" target="blank">
                <div class="emblemas">
                    <img src="imagenes/estilo6.jpg" alt="">
                    <p>Shotokan</p>
                </div>
            </a>
            <a href="https://es.wikipedia.org/wiki/Wad%C5%8D-ry%C5%AB" target="blank">
                <div class="emblemas">
                    <img src="imagenes/estilo7.png" alt="">
                    <p>Wadō-ryū</p>
                </div>
            </a>
            <a href="https://es.wikipedia.org/wiki/Karate#Estilos" target="blank">
                <div class="emblemas">
                    <img src="imagenes/estilo8.png" alt="">
                    <p>Seitokaikan</p>
                </div>
            </a>
        </div>
    </div>
    <div id="contenidoinscripcion2">
        <div id="tablaform">
            <h1>Clases y precios.</h1>
            <hr>
            <br>
            <table>
                <tr>
                    <th>Clase</th>
                    <th>Profesor</th>
                    <th>Estilo</th>
                    <th>Edad</th>
                    <th>Dias</th>
                    <th>Horario</th>
                </tr>
                <?php
                    foreach($data["clases"] as $row) {
                ?>
                <tr>
                    <td><?php echo $row["clase"]; ?></td>
                    <td><?php echo $row["profeclase"]; ?></td>
                    <td><?php echo $row["estiloclase"]; ?></td>
                    <td><?php echo $row["edadclase"]; ?></td>
                    <td><?php echo $row["diaclase"]; ?></td>
                    <td><?php echo $row["horaclase"]; ?></td>
                </tr>
                <?php 
                    }
                    
                ?>
            </table>
            <br>
            <table>
                <tr>
                    <th>Edad</th>
                    <th>Precio (x Clase)</th>
                </tr>
                <tr>
                    <td>Niño</td>
                    <td>$200</td>
                </tr>
                <tr>
                    <td>Adolescentes</td>
                    <td>$350</td>
                </tr>
                <tr>
                    <td>Adultos</td>
                    <td>$400</td>
                </tr>
                <tr>
                    <td>Adultos Mayores</td>
                    <td>$300</td>
                </tr>
            </table>
            <br>
            <h1>Inscribete con nosotros.</h1>
            <hr>
            <br>
            <p>NOTA: Todos los campos deberan ser llenados *</p>
            <br>
            <form action="guardaralumno.php" method="post">
                <label for="">Nombre:</label><br>
                <input type="text" name="nombre" required>
                <br><br>
                <label for="">Apellido:</label><br>
                <input type="text" name="apellido" required>
                <br><br>
                <label for="">Correo:</label><br>
                <input type="text" name="email"  required>
                <br><br>
                <label for="">Selecciona la clase a la que deseas inscribirte:</label>
                <select name="clase" id="" required>
                    <option value=""># CLASE</option>
                    <?php
                        include "conexion.php";
                        $todos= "SELECT * FROM clases";
                        $resultado = mysqli_query($conectar, $todos);
                        while ($row = mysqli_fetch_assoc($resultado)){
                    ?>
                    <option value="<?php echo $row["clase"]; ?>"><?php echo $row["clase"]; ?></option>
                    <?php 
                        }
                        mysqli_free_result($resultado);
                    ?>
                </select>
                <br><br>
                <label for="">Sexo:</label>
                <br>
                <label for="">Hombre</label>
                <input type="radio" name="sexo" value="Hombre" required>
                <label for="">Mujer</label>
                <input type="radio" name="sexo" value="Mujer" required>
                <label for="">Otro</label>
                <input type="radio" name="sexo" value="Otro" required>
                <br><br>
                <label for="">¿Tiene alguna enfermedad o discapacidad?:</label><br>
                <input type="text" name="discapacidad" required>
                <br><br>
                <input type="submit" value="INSCRIBIRSE">
            </form>
        </div>
    </div>
    <?php
        include "footer.php";
    ?>
</body>
</html>
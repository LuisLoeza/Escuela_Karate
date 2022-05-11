<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuestro Dojo</title>
    <link rel="stylesheet" href="estilos.css">
    <link rel="shortcut icon" href="imagenes/logo.png">
</head>
<body>
    <?php
        include "heater.php";
    ?>
    <div id="contenidodojo1">
        <div id="textodojo1">
            <h1>Nuestra historia.</h1>
            <hr>
            <br>
            <p>Somos una agrupación regional de maestros y practicantes de Karate do Shotokan en el Sureste de México. </p>
            <p>Fundada en 1972 por el Shihan José Fernández y dirigida actualmente por los Senseis Pedro Torre, 6º dan, Director Técnico y un comité técnico encabezado por Fernando Quijano 6º dan, Manuel Carrillo 6º dan y Salvador Farías 6º dan, todos con más de 35 años de práctica continua.</p>
            <p>Contamos con un Dojo central en el Fracc. Montecristo en la ciudad de Mérida, Yucatán, México y más de 10 Dojos afiliados en el Sureste de México. Somos los representantes regionales de la ISKF (International Shotokan Karate Federation) desde 1995, cuyo instructor en Jefe es el Shihan Hiroyoshi Okazaki, 9º dan.</p>
            <h1>Nuestra filosofia.</h1>
            <hr>
            <br>
            <p>Nuestra filosofía institucional se basa en desarrollar el crecimiento físico y mental de cada uno de nosotros y de nuestros alumnos por medio de la práctica del Karate Do Shotokan, apegados a los valores establecidos por nuestro fundador el Master Gichin Funakoshi en sus Dojo Kun y Niju Kun.</p>
        </div>
    </div>
    <div id="contenidodojo2">
    <div id="profes">
            <h1>Nuestros profesores.</h1>
            <hr>
            <br>
            <?php
            foreach($data["profesores"] as $dato) {
            ?>
            <table>
                <tr>
                    <td rowspan="5"><img src="<?php echo $dato['imgprofe']; ?>" alt=""></td>
                    <td class="derecha">Nombre:</td>
                    <td><?php echo $dato["nomprofe"]."&nbsp;".$dato["apellidoprofe"]; ?></td>
                </tr>
                <tr>
                    <td class="derecha">Estilo:</td>
                    <td><?php echo $dato["estilo"]; ?></td>
                </tr>
                <tr>
                    <td class="derecha">Cinturon:</td>
                    <td><?php echo $dato["cinturon"]; ?></td>
                </tr>
                <tr>
                    <td class="derecha">Telefono:</td>
                    <td><?php echo $dato["telprofe"]; ?></td>
                </tr>
                <tr>
                    <td class="derecha">Correo:</td>
                    <td><?php echo $dato["emailprofe"]; ?></td>
                </tr>
            </table>
            <?php 
                }
            ?>
        </div>
    </div>
    <?php
        include "ubicacion.php";
    ?>
    <?php
        include "footer.php";
    ?>
</body>
</html>
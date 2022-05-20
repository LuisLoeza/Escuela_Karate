<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ryukyu</title>
    <link rel="stylesheet" href="estilos.css">
    <link rel="shortcut icon" href="imagenes/logo.png">
</head>
<body>
    <?php
        include "heater.php";
    ?>
    <div id="contenidoindex">
        <h1>Por que es imporante practicar este arte marcial:</h1>
        <p>El estilo de karate Shotokán, no es sólo la transmisión de un método de combate, incluye una formación moral y filosófica, una guía de comportamiento y moral para los practicantes. <br><br>
        Este estilo, se considera una de las primeras escuelas de karate organizadas a nivel internacional además del estilo de karate-dō más practicado del mundo. <br><br>
        Fundado en 1936 por Gichin Funakoshi, quien creía firmemente que un verdadero maestro podía ganar y salir adelante en la vida sin pelear, con dignidad, con su propio esfuerzo, y que su verdadero enemigo estaba en sus propias faltas.</p>
    </div>
    <div id="contenidoindex2">
        <img src="imagenes/bandera.png" alt="">
        <div id="textoindex">
            <h1>Desde 1959...</h1>
            <hr>
            <br>
            <p>El inicio del karate-do en México comenzó en 1959, cuando la <br> Asociación México-Japonesa organizó un evento para la inauguración <br> del Club Japonés. La embajada Japonesa en México solicita a <br> Nobuyoshi Murata realizar una exhibición de sus habilidades en <br> Karate-do estilo Shito Ryu, ya que contaba con el grado de cinta negra <br> 2do Dan. Nobuyoshi, un joven trabajador de 27 años que llegó a <br> México en el año de 1958 a la farmacéutica Takeda. El día de la <br> presentación, el 31 de enero de 1959 los asistentes al evento quedan <br> asombrados por lo realizado por el joven japones.</p>
            <br>
            <p>Después de la presentación un grupo de entusiastas le piden a <br> Nobuyoshi Murata que les enseñe este arte marcial, a lo que el se niega, <br> pero al insistirle tanto lo convencen. Y todo comienza con un pequeño <br> grupo de alumnos en un pequeño espacio en el departamento del <br> Sensei y claro con nulo equipo de entrenamiento.</p>
        </div>
    </div>
    <div id="contenidoindex3">
        <h1>Eventos Proximos.</h1>
        <hr>
        <div id="cuadros">
           <hr>
           
            <?php 
            foreach($data["eventos"] as $dato) {
            ?> 
            <div class="eventos">
                <img src="<?php echo $dato['imgevento']; ?>" alt="">
                <p><?php echo $dato["nomevento"]; ?></p>
                <p><?php echo $dato["descripevento"]; ?></p>
                <p><?php echo $dato["fechaevento"]; ?></p>
                <br>
            <a href="#">LEER MAS</a>
            </div>
            <?php 
                }
            ?>            
            
        </div>
        <marquee behavior="alternate">
            <img src="imagenes/karate1.jpg" alt="">
            <img src="imagenes/karate2.jpg" alt="">
            <img src="imagenes/karate3.jpg" alt="">
            <img src="imagenes/karate4.jpg" alt="">
        </marquee>
    </div>
    <?php
        include "footer.php";
    ?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contactanos</title>
    <link rel="stylesheet" href="estilos.css">
    <link rel="shortcut icon" href="imagenes/logo.png">
    <!-- <link rel="stylesheet" type="text/css" href="./style.css" /> -->
</head>
<body>
    <?php
        include "heater.php";
    ?>
    <div id="contenidocontacto1">
        <div id="formulariocontacto">
            <p><span class="rojo">¿Deseas enviarnos alguna sugerencia o resolver una duda?</span></p>
            <p><span class="rojo">¿Quieres formar parte del staff de nuestro dojo?</span></p>
            <p><span id="asul">Envianos un mensaje llenando los siguientes campos</span></p>
            <form action="index.php?c=Consultas&a=enviar" method="post">
                <label for="">Nombre:</label>
                <input type="text" name="nombre" required> <br><br>
                <label for="">Apellido:</label>
                <input type="text" name="apellido"> <br><br>
                <label for="">Email:</label>
                <input type="text" name="email" required> <br><br>
                <label for="">Telefono:</label>
                <input type="tel" name="telefono"> <br><br>
                <label for="">Motivo del mensaje:</label>
                <input type="text" name="motivo" required><br><br>
                <label for=""><span id="dif">Dejanos tu comentario:</span></label><br>
                <textarea name="comentario" id="" cols="60" rows="10" required></textarea> <br><br>
                <input type="submit" value="Envia tus datos">
            </form>
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
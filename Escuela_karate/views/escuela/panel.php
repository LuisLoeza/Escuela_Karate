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
    <title>Panel administrativo</title>
    <link rel="stylesheet" href="estilos.css">
    <link rel="shortcut icon" href="imagenes/logo.png">
</head>
<body>
    <div id="cabecerapanel">
        <img src="imagenes/logo.png" alt="">
        <div id="textopanel1">
            <h1>PANEL ADMINISTRATIVO</h1>
            <h3>¡Bienvenido de nuevo <?php echo $usuario ?>!</h3>
        </div>
        <div id="btnsalir">
            <a href="index.php?c=Admin&a=salir">CERRAR SESION</a>
        </div>
    </div>
    <div id="contenidopanel">
        <a href="index.php?c=Escuela">
            <div class="opciones">
                <p>VER ALUMNOS INSCRITOS</p>
            </div>
        </a>
        <a href="index.php?c=Profesores&a=profes">
            <div class="opciones">
                <p>REGISTRAR UN PROFESOR</p>
            </div>
        </a>
        <a href="index.php?c=Eventos">
            <div class="opciones">
                <p>REGISTRAR UN EVENTO</p>
            </div>
        </a>
        <a href="index.php?c=Clases">
            <div class="opciones">
                <p>REGISTRAR UNA CLASE</p>
            </div>
        </a>
    </div>
</body>
</html>
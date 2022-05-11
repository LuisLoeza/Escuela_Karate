<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrador</title>
    <link rel="stylesheet" href="estilos.css">
    <link rel="shortcut icon" href="imagenes/logo.png">
</head>
<body>
    <div id="fondoadmin">
        <h1>¡ATENCION!</h1>
        <br>
        <h2>Necesitas tener un usuario y contraseña de administrador para acceder...</h2>
        <form action="index.php?c=Admin&a=autentificacion" method="post">
            <input type="text" name="usuario" placeholder="USUARIO">
            <br>
            <input type="password" name="contra" placeholder="CONTRASEÑA">
            <br>
            <input type="submit" value="Iniciar Sesion">
            <?php
	            $errorusuario = isset($_GET["errorusuario"]);	
	            if($errorusuario == "SI"){
 		            echo '<h3 class="aviso" align="center">**Datos incorrectos**</h3>';
	            }
            ?>
        </form>
        <br>
        <h2>Te recomendamos seguir navegando en la pagina principal si no eres el administrador...</h2>
        <div id="logoadmin">
            <img src="imagenes/logo.png" alt="">
            <p id="textoadmin1">DOJO <br>RYUKYU</p>
        </div>
        <a href="index.php">VOLVER A LA PAGINA</a>
    </div>
</body>
</html>
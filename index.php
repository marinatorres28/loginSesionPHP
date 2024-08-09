<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Validar usuario y contraseña</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div>
    <h1 class="centrar">Validar Acceso</h1>
    <div class="container">
    <form action="inicioSesion.php" method="post">

        <p>
            <label for="usuario">Usuario:</label>
            <input type="text" name="usuario" id="usuario">
        </p>

        <p>
            <label for="password">Contraseña:</label>
            <input type="text" name="password" id="password">
        </p>

        <p><input type="submit" value="Enviar" class="boton"></p>
        <p>
    <?php
        // si mensaje no esta vacio, sacamos el mensaje que corresponda
        if(!empty($_GET["mensaje"])){
            echo $_GET["mensaje"];
        }
    ?>
    </p>

    </form>
    </div>
</div>
</body>
</html>
<?php
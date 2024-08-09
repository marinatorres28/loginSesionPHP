<?php
session_start();
if(isset($_SESSION['user'])){
?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
    <h2 class="centrar">
        Hola <span class="rojo"><?=$_SESSION['user']?></span>
    </h2>

    <h1 class="centrar">Bienvenido a nuestra aplicación</h1>
</body>
</html>
<?php
}else{
    header("Location: index.php?mensaje=No tienes permiso para acceder a esta pagina");
}
?>
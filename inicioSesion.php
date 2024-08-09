<?php
session_start();
$mensaje="";
if (empty($_POST["usuario"]) || empty($_POST["password"])) {
    $mensaje="Hay que introducir un usuario y una contraseña";
    enviarMensajeError($mensaje);
} else {
    if (validarUsuario($_POST["usuario"],$_POST["password"])){
        // crear la variable de sesion y enviar a la pagina salida.php
        // declara el valor que trae usuario y lo guarda en un inicio de sesion
        $_SESSION["user"]=$_POST["usuario"];
        header("Location:salida.php");
    }else {
        enviarMensajeError("Inicio de sesion incorrecto<br>");
    }
}
// creamos una funcion que envie el mensaje al index
function enviarMensajeError($mensaje) {
    header('Location: index.php?mensaje='.$mensaje);
}
function validarUsuario($usuario, $password) {
    // creamos un array asociativo donde almacenamos los usuarios
    $listaUsuarios = ["Dani"=>"Ceat1234@","Marina"=>"Ceat1234@","Ana"=>"Ceat1234@"];
    // si el usuario existe en el array listaUsuarios
    if (array_key_exists($usuario, $listaUsuarios)) {
        // y si el usuario y la contraseña coinciden
        if ($listaUsuarios[$usuario] === $password) {
            return true;
        }else {
            return false;
        }
    }
}

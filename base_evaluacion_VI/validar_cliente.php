<?php
session_start(); //habilita el uso de sesiones

$email = $_POST['email'];

$pass = $_POST['password'];

if($email=="cliente@gmail.com" && $pass == "phpintermedio"){
    
    $_SESSION['clientes'] = $email; //crea la sesion
    header("Location: clientes.php?ok"); // funcion que redirige a una parte del sitio
}
    else{
        header("Location: clientes.php?error");
    }

?>
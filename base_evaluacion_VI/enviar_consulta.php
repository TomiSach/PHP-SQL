<?php

$nombreCLiente = $_POST['nombre'];
$apellidoCLiente = $_POST['apellido'];
$emailCLiente = $_POST['email'];
$consultaCLiente = $_POST['consulta'];

$conexion = mysqli_connect('localhost','root','','phpintermedio') or exit ("No se pudo conectar a la base de datos");

//$consultar_cliente = mysqli_query($conexion,"SELECT email FROM consultas WHERE email = $emailCLiente");

//if(mysqli_num_rows($consultar_cliente) == 1){
//    header('Location : contacto.php?ya_registrado');
//} else {

mysqli_query($conexion, "INSERT INTO consultas VALUES (DEFAULT,'$nombreCLiente','$apellidoCLiente',
'$emailCLiente','$consultaCLiente')");

header("Location: contacto.php?envio_ok");

?>
<?php session_start(); ?>
<!DOCTYPE html >
<html>
<head>
<meta charset="utf-8" />
<title>Programador web con PHP y MySQL</title>
<link href="estilos.css" rel="stylesheet"/>
</head>

<body>
    
<section id="contenedor">
	<header>
    	<nav id="botonera_principal">
        	<ul>
            	<li><a href="index.php">Home</a></li><li><a href="catalogo.php">Catálogo</a></li><li><a href="noticias.php">Noticias</a></li><li><a href="clientes.php">Clientes</a></li><li><a href="contacto.php">Contáctenos</a></li>
            </ul>
        </nav>
        <div id="marca">
        	<h1>Programador web con PHP y MySQL</h1>
        </div>
    </header>
    <section id="contenido">
    <h2>Clientes - Unidad VII</h2>

    <section id="funciones">

<h2>Contacto</h2>
<form method="POST" action="validar_cliente.php">
    <input type="text" name="email" placeholder="Ingrese su email" maxlength="100" required>
    <input type="text" name="password" placeholder="Ingrese su contraseña" required>
    <input type="submit" value="ingresar"> 
</form>
</section>

<?php
if(isset($_GET['error'])){
    echo "<p>La contraseña y el email no coinciden</p>";
} else {
 if(isset($_SESSION['clientes'])){ 
 include("contenido_clientes.php");
 }
}
?>

 <p><a href="salir.php">Salir</a></p> 





    </section>

<footer>
Desarrollado por <a href="http://www.elerning-total.com" target="_new">Programador web con PHP y MySQL</a></footer>
</section>
</body>
</html>
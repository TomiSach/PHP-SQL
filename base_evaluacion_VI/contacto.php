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
    <h2>Contáctenos - Unidad VIII</h2>
    <form action="enviar_consulta.php" method="POST">
        <input type="text"  placeholder="Ingrese su nombre" name='nombre' maxlength="100" required>
        <input type="text" name='apellido' placeholder="Ingrese su apellido" maxlength="100" required>
        <input type="email" name='email' placeholder="Ingrese su email" maxlength="100" required>
        <input type="text" name='consulta' placeholder="Ingrese su consulta" maxlength="200" required>
        <input type="submit" value="Enviar">

    </form>
<?php
    if(isset($_GET['envio_ok'])){
        echo '<p>Consulta enviada exitosamente</p>';
    }    

?>    
    </section>

<footer>
Desarrollado por <a href="http://www.elerning-total.com" target="_new">Programador web con PHP y MySQL</a></footer>
</section>
</body>
</html>
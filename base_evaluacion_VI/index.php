<!DOCTYPE html >
<html>
<head>
<meta charset="utf-8" />
<title>Programador web con PHP y MySQL</title>
<link href="estilos.css" rel="stylesheet"/>
</head>

<body>
    <?php 
	$nombre = 'Lorena'; //comilla simple o comilla doble a igual, ; al final de cada sentencia sino no compila//
	$curso = 'Programador web inicial -Nivel 1 ' ;
	$precio = 2000;
	$finalizado = false;
?>
<section id="contenedor">
	<header>
    	<nav id="botonera_principal">
        	<ul>
            	<li><a href="index.php">Home</a></li><li><a href="catalogo.php">Catálogo</a></li><li><a href="noticias.php">Noticias</a></li><li><a href="clientes.php">Clientes</a></li><li><a href="contacto.php">Contáctenos</a></li>
            </ul>
        </nav>
        <div id="marca">
        	<h1>Programador Web con PHP y MySQL<br/>Nivel Intermedio</h1>
        </div>
    </header>
    <section id="contenido">
    <h2>Unidad IV - Introducción a PHP</h2>
    
<div id="uni4_1">
     
     <?php

    echo 'Si he logrado ver mas lejos, ha sido porque he subido a hombros de gigantes.<br>' ;
    echo '<h4>Toda accion tiene una reaccion igual y opuesta</h4> <br>' ;
    echo 'Las leyes naturales son el vinculo entre los efectos y las causas';

    ?>
     

</div> 

<div id="uni4_2">


    <?php

    $ingrediente1='EVALUACION';
    $ingrediente2='INTEGRADORA';
    $ingrediente3='PHP Y MySQL';
     
    echo $ingrediente1. "<br>";
    echo $ingrediente2 . "<br>";
    echo $ingrediente3; ?> 

</div>
    

<div id="uni4_3">

    <?php

    $var1= 2001;
    $var2= 'Tomas';
    $var3= false;
     ?>

<?php
    echo $var1 . "<br>";
    echo $var2 . "<br>";
    echo $var3 ? 'true' : 'false'; 
    ?>




    </div>
    <div id="uni4_4">

    <?php

    $var4=4;
    $var5=256;
    $var6=1080;
 
    echo $var4 . "<br>";
    echo $var5 . "<br>";
    echo $var6 . "<br>";
     echo 'La suma de ', $var5, ' y ' ,$var6, ' es: ' , $var5 + $var6;
   
 
 
 
 ?>
    
    </div>
    </section>

<footer>
<p>Desarrollado por <a href="http://www.elearning-total.com" target="_new">Programador web con PHP y MySQL</a></p></footer>
</section>
</body>
</html>
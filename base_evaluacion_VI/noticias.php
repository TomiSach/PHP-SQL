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
    <h2>Noticias - Unidad VI</h2>

    <h1 style="text-align: center; background-color: #f0f0f0; text-shadow: 2px 2px 2px rgba(0, 0, 0, 0.5);">NOTICIAS</h1>


    <?php 

     $noticias = array (
        array('imagen'=>'imagenes\IA_DR.jpg','titulo' => 'Avances en Inteligencia Artificial Transforman la Industria de la Salud','cuerpo'=>'La IA está revolucionando el cuidado de la salud con diagnósticos más precisos, monitoreo remoto y análisis de grandes volúmenes de datos médicos para mejorar tratamientos y predicciones de enfermedades.'),
        array('imagen'=>'imagenes\ciberseguridad.jpg','titulo' => 'Empresas Luchan contra Amenazas de Ciberseguridad en el Auge del Trabajo Remoto','cuerpo'=>' Con el incremento del trabajo desde casa, las empresas intensifican sus esfuerzos en fortalecer sus defensas cibernéticas ante crecientes ataques de ransomware, phishing y otras amenazas.'),
        array('imagen'=>'imagenes\pc_cuantica.jpg','titulo' => 'Nuevas Tendencias en Computación Cuántica Prometen Avances Revolucionarios','cuerpo'=>'La computación cuántica está en auge con avances en la creación y manipulación de qubits, lo que podría conducir a mejoras significativas en la resolución de problemas complejos y el desarrollo de nuevos materiales y fármacos.'),
        array('imagen'=> 'imagenes\5antena.jpg','titulo' => '5G Impulsa la Era de la Conectividad Ultra Rápida y la Internet de las Cosas (IoT)','cuerpo'=>'La llegada del 5G está abriendo nuevas posibilidades en la interconexión de dispositivos, desde vehículos autónomos hasta ciudades inteligentes, ofreciendo velocidades de conexión sin precedentes y menor latencia.'),
        


     );

     
for($i=0;$i<count($noticias);$i++){
    ?>
   
    <div class="noticias">
    <img src= <?php echo $noticias[$i]['imagen']; ?> alt='No carga'>
    <div style="background-color: pink;">
    <h3 id="titulo_noticia"><?php echo $noticias[$i]['titulo']; ?></h3>
    <p id="cuerpo_noticia"><?php echo $noticias[$i]['cuerpo'];?></p>
    </div>    
</div>
<?php
}
?>

        </section>

<footer>
<p>Desarrollado por <a href="http://www.elerning-total.com" target="_new">Programador web con PHP y MySQL</a></p></footer>
</section>
</body>
</html>
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
    <h2>Catálogo - Unidad V</h2>
    
    </section>

    <section id='control'>

    <ul type='none' class="wrapper-btn">
        <li><a class="btn" href="catalogo.php?id=Sillon">Sillon Capri</a></li>
        <li><a class="btn" href="catalogo.php?id=Mesa">Mesa Ipanema</a></li>
        <li><a class="btn" href="catalogo.php?id=Banco">Banco Venecia</a></li>
    </ul>


    <article id='datos'>
<?php
if(isset($_GET['id'])){
        switch($_GET['id']){
            case'Sillon':
                $nombre = 'Sillón Capri';
                $Precio = '$ 345.00 ';
                $caracteristica =' Concebida para ser utilizada tanto bajo techo como a la intemperie. La madera de origen brasilera está acabada con un recubrimiento de Resina Polisten que la embellece.';
                $imagen = 'imagenes\sillon1.jpg';
                break;

            case'Mesa':
                $nombre = ' Mesa Ipanema ';
                $Precio = '$ 500.00 ';
                $caracteristica ='  Se trata de una colección de muebles de madera de eucaliptos, certificada con el sello FSC y concebida para ser utilizada tanto bajo techo como a la intemperie. La madera es de origen brasilera. Las medidas son: 120 cms';
                $imagen = 'imagenes\ipanema.jpg';
                break;

            
                case'Banco':
                    $nombre = ' Banco Venecia ';
                    $Precio = '$ 450.00 ';
                    $caracteristica ='  Se trata de una colección de muebles de madera de eucaliptos, certificada con el sello FSC (SWCOC-091) y concebida para ser utilizada tanto bajo techado como a la intemperie. La madera es de origen brasilera. Las medidas son: 120 cms.';
                    $imagen = 'imagenes\venecia.jpg';
                    break;

                    default:
                    
                    break;
        }

       
        
        ?>        
       

<section>
        <h2>Producto: <?php echo $nombre; ?></h2> 
        <h4>Precio: <?php echo $Precio; ?></h4> 
        <h4>Descripcion:  <?php echo $caracteristica; ?></h4>
        <h4 style="text-align: center;" > <img src="<?php echo $imagen; ?>" alt="Foto producto" ></h4>
</section>
<?php  } ?>
    
    </article>








    </section>


<footer>
<p>Desarrollado por <a href="http://www.elearning-total.com" target="_new">Programador web con PHP y MySQL</a></p></footer>
</section>
</body>
</html>
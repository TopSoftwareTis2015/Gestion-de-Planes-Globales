<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Materias</title>
	<!--importando librerias utiles para trabajar con estilos CSS de bootstrap-->
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="<?php echo BASE_URL; ?>public/css/bootstrap.min.css">
  <!--hoja de estilo personalizado-->
  <link rel="stylesheet" href="<?php echo BASE_URL; ?>public/style/estilo.css">
  
  <!--importantando las librerias para trabajar con jquery y javascript de bootstrap-->  
  <script src="<?php echo BASE_URL; ?>public/js/jquery-1.12.0.js"></script>
  <script src="<?php echo BASE_URL; ?>public/js/bootstrap.min.js"></script>
  <script src="<?php echo BASE_URL; ?>views/materias/js/materias.js"></script>
</head>

<body>
<div class="container" id="cuadro">
	<header><!-- seccion de la cabecera de la pagina web-->
		<div class="container">
		   <div class="row">
		   	  <div class="col-xs-3 col-md-3"> <!--seccion para el logo del sistema web-->
		   	  	<img src="<?php echo BASE_URL; ?>public/imagen/logoUmss.png" class="img-responsive"	alt="">
		   	  </div>
		   	  <div class="col-xs-9 col-md-9"> <!--titulo del sistema web-->
		   	    <h1>Sistema de Gestion De Planes Globales</h1>	
		   	  </div>
		   </div>
			
		</div>
	</header><!--fin de la cabecera--> 

	<section class="main row">
	<br>
	 <!--seccion del menu de navegacion vertical--> 
	 <nav id="menu" class="col-xs-12 col-sm-4 col-md-3">
	  <div class="container-fluid">
		 <div class="row"><!--menu con las opciones mas relevantes por el momento.. -->
		   	  	<ul class="nav nav-pills nav-stacked">
		   	  		<li role="presentation"><a href="<?php echo BASE_URL; ?>index.php">Inicio</a></li>
		   	  		<li role="presentation"><a href="#">Facultades</a></li>
		   	  		<li role="presentation"><a href="#">Carreras</a></li>
		   	  		<li role="presentation"><a href="<?php echo BASE_URL; ?>planDeEstudio">Planes de Estudio</a></li>
           		   	<li role="presentation"> <a href="<?php echo BASE_URL; ?>materias">Materias</a></li>
             		<li role="presentation" class="active"><a href="<?php echo BASE_URL; ?>planGlobal/registrar">Planes Globales</a></li>
		   	  	</ul>
		 </div>
	  </div>
	 </nav>

     <article class="col-xs-12 col-sm-8 col-md-9">
	    <div class="container-fluid" id="cabecera"> <!-- titulo de la nueva ventana-->
          <!--<div class="col-xs-12 col-sm-8 col-md-9">--> 
            <h2><center>Informacion de una plan global.</center></h2>  
          <!--</div>-->
	    </div> <!-- fin del titulo-->

      <div>
        <?php
        echo '<h3>';
        echo '<pre>';
        print_r($this->planGlobal); 
        echo '<br>';
        print_r($this->materia); 
        echo '<br>';
        print_r($this->grupos);
        echo '<br>';
        print_r($this->carga_horaria);
        echo '<br>';
        print_r($this->materias_relacionadas);
        echo '<br>';
        print_r($this->docentes);
        echo '<br>';
        print_r($this->objetivosGenerales);
        echo '<br>';
        print_r($this->objetivosEspecificos);
        echo '<br>';
        print_r($this->unidades);
        echo '<br>';
        print_r($this->bibliografias);
        echo '<br>';
        print_r($this->seccionesAdicionales);
        echo '</pre>';
        echo '</h3>';
        ?>
      </div>
      
   
  </article>

  </section>

  <div class="row clearfix">
	  <footer>
		<!--Codigo para incluir el pie de pagina-->
		<?php 
		    include ROOT . DS . 'views' . DS . 'include' . DS . 'pie_de_pagina.php';
		?>
	  </footer>
  </div>
   
 </div>

 
</body>

</html>
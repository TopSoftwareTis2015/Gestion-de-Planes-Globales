<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Materias</title>
	<!--importando librerias utiles para trabajar con estilos CSS de bootstrap-->
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="<?php echo BASE_URL; ?>public/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo BASE_URL; ?>public/style/estilo.css"><!--hoja de estilo personalizado-->
</head>
<body>
	<header><!-- seccion de la cabecera de la pagina web-->
		<div class="container">
		   <div class="row">
		   	  <div class="col-xs-3 col-md-3"> <!--seccion para el logo del sistema web-->
		   	  	<img src="<?php echo BASE_URL; ?>public/imagen/logoUmss.png" class="img-responsive"	alt="">
		   	  </div>
		   	  <div class="col-xs-9 col-md-9"> <!--titulo del sistema web-->
		   	    <h1>Sistema de Gestion de De Planes Globales</h1>	
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
              <li role="presentation" class="active"><a href="<?php echo BASE_URL; ?>materias">Materias</a></li>
              <li role="presentation"><a href="<?php echo BASE_URL; ?>planGlobal/registrar">Planes Globales</a></li>
		   	  	</ul>
		 </div>
	  </div>
	 </nav>

     <article class="col-xs-12 col-sm-8 col-md-9">
	    <div class="container-fluid"> <!-- titulo de la nueva ventana-->
          <div class="col-xs-12 col-sm-8 col-md-9"> 
            <h2><center>Registrar Materia</center></h2>  
          </div>
	    </div> <!-- fin del titulo-->
    	
   <div id="nuevo" > <!--formulario para editar datos de una materia-->
    <form name="form1" method="post" action="<?php echo BASE_URL;?>materias/nuevo">
    	<input type="hidden" name='guardar' value="1">
        <div class="container-fluid">
            <div class="row col-xs-12 col-sm-8 col-md-12">
                <strong>Codigo Materia</strong><br>
                <!--caja de texto para el ingreso de solo numero y con un tamaño de 6 digitos -->
                <input title="Ingresar solo numeros" type="text" class="form-control"  pattern="[0-9]{7}" name="codigo_materia" required
                value="<?php if(isset($this->materiaAnterior['codigo_materia'])) echo $this->materiaAnterior['codigo_materia']; ?>"><br>
                <span id="errorCodigoMateria" class="label label-danger"><?php if(isset($this->_errorCodigoMateria)) echo $this->_errorCodigoMateria; ?></span><br>

                <strong>Nombre materia</strong><br>
                <input type="text" class="form-control"name="nombre_materia" required
                value="<?php if(isset($this->materiaAnterior['nombre_materia'])) echo $this->materiaAnterior['nombre_materia']; ?>"><br>
								<span id="errorNombreMateria" class="label label-danger"><?php if(isset($this->_errorNombreMateria)) echo $this->_errorNombreMateria; ?></span><br>

                <strong>Sigla de la Materia</strong><br>
                <input type="text" class="form-control"name="sigla_materia"
                value="<?php if(isset($this->materiaAnterior['sigla_materia'])) echo $this->materiaAnterior['sigla_materia'];?>"><br>
                <span id="errorSiglaMateria" class="label label-danger"><?php if(isset($this->_errorSiglaMateria)) echo $this->_errorSiglaMateria; ?></span><br>
                
                <button class="submit btn-primary" type="submit">Registrar</button>
            </div>
        </div>
     </form>
    </div> <!--fin del formulario para materia-->
  </article>

  </section>


	 
	<!--importantando las librerias para trabajar con jquery y javascript de bootstrap-->  
	<script src="<?php echo BASE_URL; ?>public/js/jquery.js"></script>
	<script src="<?php echo BASE_URL; ?>public/js/bootstrap.min.js"></script>
</body>

<!--Codigo para incluir el pie de pagina-->
<?php 
    include ROOT . DS . 'views' . DS . 'include' . DS . 'pie_de_pagina.php';
?>

</html>
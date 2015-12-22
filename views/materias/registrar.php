<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Materias</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="<?php echo BASE_URL; ?>public/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo BASE_URL; ?>public/style/estilo.css">
</head>
<body>
	<header>
		<div class="container">
		   <div class="row">
		   	  <div class="col-xs-3 col-md-3">
		   	  	<img src="<?php echo BASE_URL; ?>public/imagen/logoUmss.png" class="img-responsive"	alt="">
		   	  </div>
		   	  <div class="col-xs-9 col-md-9">
		   	    <h1>Sistema de Gestion de De Planes Globales</h1>	
		   	  </div>
		   </div>
			
		</div>
	</header>
	<section class="main row">
	<br>
	 <nav id="menu" class="col-xs-12 col-sm-4 col-md-3">
	  <div class="container-fluid">
		 <div class="row">
		   	  	<ul class="nav nav-pills nav-stacked">
		   	  		<li role="presentation"class="active"><a href="index.html">Inicio</a></li>
		   	  		<li role="presentation"><a href="#">Facultades</a></li>
		   	  		<li role="presentation"><a href="#">Carreras</a></li>
		   	  		<li role="presentation"><a href="#">Planes de Estudio</a></li>
		   	  		<li role="presentation"><a href="Materia.html">Materias</a></li>
		   	  		<li role="presentation"><a href="#">Planes Globales</a></li>
		   	  	</ul>
		 </div>
	  </div>
	 </nav>

     <article class="col-xs-12 col-sm-8 col-md-9">
	    <div class="container-fluid">
          <div class="col-xs-12 col-sm-8 col-md-9">
            <h2><center>Registrar Materia</center></h2>  
          </div>
	    </div>
    	
   <div id="nuevo" class="">
    <form name="form1" method="post" action="#">
        <div class="container-fluid">
            <div class="row col-xs-12 col-sm-8 col-md-12">
                <strong>Codigo Materia</strong><br>
                <input title="Ingresar solo numeros" type="text" class="form-control"  pattern="[0-9]{6}" name="codigo" required><br>
                <strong>Nombre materia</strong><br>
                <input type="text" class="form-control"name="nombre" required><br>
                <strong>Sigla de la Materia</strong><br>
                <input type="text" class="form-control"name="sigla" required><br>
                
                <button class="submit btn btn-primary" type="submit">Registrar Materia</button>

                <a href="<?php echo BASE_URL; ?>materias" role="button" class="btn btn-primary">
                <strong>Volver</strong>
            </a>
            </div>
        </div>
     </form>
    </div>
  </article>

  </section>
	  
	<script src="<?php echo BASE_URL; ?>public/js/jquery.js"></script>
	<script src="j<?php echo BASE_URL; ?>public/s/bootstrap.min.js"></script>
</body>
</html>
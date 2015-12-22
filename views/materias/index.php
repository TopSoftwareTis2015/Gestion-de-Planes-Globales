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
		   	  		<li role="presentation"><a href="#">Materias</a></li>
		   	  		<li role="presentation"><a href="registrarPG.html">Planes Globales</a></li>
		   	  	</ul>
		 </div>
	  </div>
	 </nav>

     <article class="col-xs-12 col-sm-8 col-md-9">
	    <div class="container-fluid">
          <div class="col-xs-12 col-sm-8 col-md-9">
            <h2><center>Lista de Materias</center></h2>  
          </div>
	    </div>
    	<div class="table-responsive">
    		<table class="table table-hover table-bordered" >
    			<tr>
	    			<th>CODIGO</th>
                    <th>NOMBRE MATERIA</th>
                    <th>SIGLA</th>
    			</tr>
    			<tr>
    				<td>2345434</td>
                    <td>Ingles I</td>
    				<td></td>
    			</tr>
    			<tr>
    				<td>4567654</td>
                    <td>Fisica General</td>
    				<td></td>
    			</tr>
    			<tr>
    				<td>5665453</td>
                    <td>Algebra I</td>
    				<td></td>
    			</tr>
    			<tr>
    				<td>1453534</td>
    				<td>Calculo I</td>
    				<td></td>
    			</tr>
    		</table>
    	</div>
    	
    	<div class="container-fluid">
            <div class="col-xs-12 col-sm-8 col-md-9">
                
        	<a href="<?php echo BASE_URL; ?>materias/registrar" role="button" class="btn btn-primary" data-toggle="modal">
                <strong>Agregar Materia</strong>
            </a>
            
            <a href="<?php echo BASE_URL; ?>materias/editar" role="button" class="btn btn-primary" data-toglr="modal">
             	  <strong>Editar Materia</strong>
             </a>
             <a href="#eliminar" role="button" class="btn btn-primary" data-toglr="modal">
             	  <strong>Eliminar Materia</strong>
             </a>

             </div>
    	</div>


     </article>

	</section>
	

<div id="nuevo" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <form name="form2" method="post" enctype="multipart/form-data" action="">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="myModalLabel">Ingresar Nuevo Alumno</h3>
    </div>
    <div class="modal-body">
        <div class="row-fluid">
            <div class="span6">
                <strong>Codigo Materia</strong><br>
                <input type="text" name="codigo" autocomplete="off" required><br>
                <strong>Nombre materia</strong><br>
              <input type="text" name="nombre" autocomplete="off" required><br>
                <strong>Sigla de la Materia</strong><br>
                <input type="text" name="sigla" autocomplete="off" required><br>
                <strong>Area</strong><br>
                <select name="curso">
                    
                </select>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <button class="btn" data-dismiss="modal" aria-hidden="true"><strong><i class="icon-remove"></i> Cerrar</strong></button>
    </div>
    </form>
             </div>

	<script src="<?php echo BASE_URL; ?>public/js/jquery.js"></script>
	<script src="<?php echo BASE_URL; ?>public/js/bootstrap.min.js"></script>
</body>
</html>
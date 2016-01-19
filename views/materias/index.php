<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Materias</title>
  
  <!--importando librerias utiles para trabajar con estilos CSS de bootstrap-->
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="<?php echo BASE_URL; ?>public/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo BASE_URL; ?>public/style/estilo.css"> 
  <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> -->
  
</head>
<body>
	<header> <!--Cabecera del sistema web -->
		<div class="container">
		   <div class="row">
		   	  <div class="col-xs-3 col-md-3"> <!--imagen para para el sistema web -->
		   	  	<img src="<?php echo BASE_URL; ?>public/imagen/logoUmss.png" class="img-responsive"	alt="">
		   	  </div>
		   	  <div class="col-xs-9 col-md-9"> <!--titulo con el nombre del sistema web -->
		   	    <h1>Sistema de Gestion de De Planes Globales</h1>	
		   	  </div>
		   </div>
			
		</div>
	</header><!--Fin de la cabecera -->
  
  <!--Menu de navegacion Horizontal-->
  <nav class="navbar navbar-default"><!--"nabar-default" es el estandar del nav el cual ocupa todo el ancho de la pagina-->
    
    <!--contenedor para el menu en dispositivos moviles-->
    <div class="container-fluid"> 
       <!--div para realizar un menu desplegable que funcione en dispositivos moviles--> 
       <div class="navbar-header">
         <!--boton que funciona como disparador para desplegar el menu en dispositivos moviles-->
         <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu_horizontal">
           <span class="sr-only">toggle-navigation</span>
           <span class="icon-bar"></span>
           <span class="icon-bar"></span>
           <span class="icon-bar"></span>
         </button>
         <a href="#" class="navbar-brand">Menu</a>
       </div><!--fin del div del menu desplegable--> 

        <!--div para el contenido de los elementos y enlaces que tendra el menu horizontal los cuales seran visualidados en los desktop-->
        <div class="collapse navbar-collapse" id="menu_horizontal">
          <ul class="nav navbar-nav">
            <li class="active"><a href="<?php echo BASE_URL; ?>index.php">Inicio</a></li>
            <li><a href="ejemplo.php">Contactos</a></li>
            
            <li class="dropdown"><!--Opcion dropdown-->
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li> <a href="#">Materias</a> </li>
                <li> <a href="#">Planes de Estudio</a> </li>
                <li> <a href="<?php echo BASE_URL; ?>planGlobal/registrar">Planes Globales</a> </li>
              </ul>
            </li>
          </ul>
        </div>
    </div> 

  </nav><!--fin del menu horizontal-->
	
  <section class="main row"> <!--seccion donde esta el contenido del sistema web -->
	<br>

  <!-- Menu de navegacion vertical del sistema web-->
	 <nav id="menu" class="col-xs-12 col-sm-4 col-md-3">
	  <div class="container-fluid">
		 <div class="row">
		   	  	<ul class="nav nav-pills nav-stacked">
		   	  		<li role="presentation"><a href="<?php echo BASE_URL; ?>index.php">Inicio</a></li>
		   	  		<li role="presentation"><a href="#">Facultades</a></li>
		   	  		<li role="presentation"><a href="#">Carreras</a></li>
		   	  		<li role="presentation"><a href="#">Planes de Estudio</a></li>
		   	  		<li role="presentation" class="active"><a href="#">Materias</a></li>
		   	  		<li role="presentation"><a href="<?php echo BASE_URL; ?>planGlobal/registrar">Planes Globales</a></li>
		   	  	</ul>
		 </div>
	  </div>
	 </nav> <!--fin del menu vertical -->

     <article class="col-xs-12 col-sm-8 col-md-9"> <!--campo para visualizar el contenido del sistema web -->
	    <div class="container-fluid">
          <div class="col-xs-12 col-sm-8 col-md-9"> <!-- titulo del contenido que se visualiza-->
            <h2><center>Lista de Materias</center></h2>  
          </div>
	    </div>

    	<div class="table-responsive"><!-- tabla donde se muestra todas las materias que estan registradas en el sistema-->
    		<table class="table table-hover table-bordered" id="datos" >
    			<!--Cabecera de la tabla de materias-->
          <thead>
          <tr>
                <!--nombres de las columnas de la tabla de materias-->
                <th></th>
	    			    <th>CODIGO</th>
                <th>NOMBRE MATERIA</th>
                <th>SIGLA</th>
    			</tr>
        </thead>

        <tbody>
          
          <?php 
            if(isset($this->materias) && count($this->materias)){
              for ($i=0; $i < count($this->materias); $i++) { ?>

          <tr>
            <td><input type="checkbox" value="<?php echo $this->materias[$i]['codigo_materia']; ?>"></td>
            <td><?php echo $this->materias[$i]['codigo_materia']; ?></td>
            <td><?php echo $this->materias[$i]['nombre_materia']; ?></td>
            <td><?php echo $this->materias[$i]['sigla_materia']; ?></td>
          </tr>

          <?php
              }
            }

           ?>

        </tbody>
       
     <?php //require_once(ROOT . "views" . DS ."include" . DS . "verificarconexion.php");//Conexion ala base de datos ?> 
     <?php
          /*$query = "select * from materia";     // Esta linea hace la consulta 
          $result = mysql_query($query);  

        while ($registro = mysql_fetch_array($result)){  
         echo "
        <tbody>  
         <tr>  
         <td>".$registro[0]."</td>  
         <td>".$registro[1]."</td>  
         <td>".$registro[2]."</td>    

         </tr>
        </tbody>";
         }
      ?>
      <?php
          mysql_close($conexion);*/
      ?>
      </table>  
      </div>  
    	
    	
    	<div class="container-fluid"> <!-- DIV para los botones para las acciones correspondientes-->
            <div class="row">
             
              <!--Boton para registrar una materia -->   
        	  <div class="col-xs-4">   
                 <a href="#registro_materia" role="button" class="btn btn-primary" data-toggle="modal">
                   <strong>Agregar Materia</strong>
                 </a>
                  
                 <div class="modal fade" id="registro_materia"> <!--div contenedor de la ventana emergente de registro de materia-->
                   <div class="modal-dialog"> <!--div de la ventana emergente-->
                     <div class="modal-content"> <!--div para el contenido de la ventana emergente-->
                       
                       <!--Cabecera de la ventana-->
                       <div class="modal-header"> 
                         <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button><!--Boton para cerrar la ventana emergente-->
                         <h3 class="modal-title"> Registro de Materia</h3> <!--Titulo del formulario de registro de materia-->
                       </div>
                       
                       <!--Contenido de la ventana-->
                       <div class="modal-body">
                         
                         <div id="nuevo"> <!--formulario para regitrar los datos de una materia-->
                          <form name="form1" method="post" action="<?php echo BASE_URL; ?>materias/nuevo">
                              <div class="container-fluid">
                                  <div class="row col-xs-12 col-sm-8 col-md-12">
                                      <strong>Codigo Materia</strong><br>
                                      <!--caja de texto para el ingreso de solo numero y con un tamaño de 7 digitos -->
                                      <input title="Ingresar solo numeros" type="text" class="form-control"  pattern="[0-9]{7}" name="codigo_materia" required><br>
                                      <strong>Nombre materia</strong><br>
                                      <input type="text" class="form-control"name="nombre_materia" required><br>
                                      <strong>Sigla de la Materia</strong><br>
                                      <input type="text" class="form-control"name="sigla_materia" required><br>
                                      <button class="submit btn btn-primary" type="submit">Registrar Materia</button>                
                                  </div>
                              </div>
                           </form>
                          </div> <!--fin del formulario para materia-->

                       </div> 

                       <!--footer de la ventana-->
                       <div class="modal-footer">
                         
                       </div>
                     </div>
                   </div>
                 </div>
            </div>
             
              <!--Boton para editar una materia -->
              <div class="col-xs-4">
                <a role="button" class="btn btn-primary" id="btnEditar">
                  <strong>Editar Materia</strong> 
                </a>

              </div>

              <!--Boton para eliminar una materia -->
              <div class="col-xs-4"> 
                <a role="button" class="btn btn-primary" id="btnEliminar">
                   <strong>Eliminar Materia</strong>
                </a>

                <div class="modal fade" id="eliminar_materia"> <!--div contenedor de la ventana emergente de registro de materia-->
                   <div class="modal-dialog modal-sm"> <!--div de la ventana emergente-->
                     <div class="modal-content"> <!--div para el contenido de la ventana emergente-->
                       
                       <!--Cabecera de la ventana-->
                       <div class="modal-header"> 
                         <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button><!--Boton para cerrar la ventana emergente-->
                         <h5 class="modal-title"> Esta seguro de eliminar esa materia?</h3> <!--Titulo del formulario de registro de materia-->
                       </div>
                       
                       <!--Contenido de la ventana-->
                       <div class="modal-body">
                         
                         <div id="nuevo"> <!--formulario para regitrar los datos de una materia-->
                          <form name="form1" method="post" action="<?php echo BASE_URL; ?>materias/eliminar">
                              <div class="container-fluid">
                                  <div class="row col-xs-12 col-sm-8 col-md-12">
                                      <button class="btn btn-primary" type="button" data-dismiss="modal" aria-hidden="true">Cancelar</button>                
                                      <button class="btn btn-primary" type="button" id="confirmarEliminar" data-baseurl="<?php echo BASE_URL; ?>materias/eliminar/">Eliminar</button>                
                                  </div>
                              </div>
                           </form>
                          </div> <!--fin del formulario para materia-->

                       </div> 

                       <!--footer de la ventana-->
                       <div class="modal-footer">
                         
                       </div>
                     </div>
                   </div>
                 </div>
              </div> 
            </div>
    	</div><!-- fin del DIV de los botones-->
     </article>  

	</section> <!--fin de la seccion donde esta el contenido -->
	
  <!--importantando las librerias para trabajar con jquery y javascript de bootstrap-->
	<script type="text/javascript" src="<?php echo BASE_URL; ?>public/js/jquery-1.12.0.js"></script>
  <script type="text/javascript" src="<?php echo BASE_URL; ?>public/js/bootstrap.js"></script>
  <script type="text/javascript" src="<?php echo BASE_URL; ?>views/materias/js/materias.js"></script>
  
</body>

<footer>
  <!--Codigo para incluir el pie de pagina-->
  <?php 
    include ROOT .'views'.DS.'include'.DS.'pie_de_pagina.php'
  ?>  
</footer>


</html>
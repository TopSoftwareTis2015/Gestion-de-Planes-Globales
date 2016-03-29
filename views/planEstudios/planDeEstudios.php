<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Plan de Estudios</title>
  
  <!--importando librerias utiles para trabajar con estilos CSS de bootstrap-->
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="<?php echo BASE_URL; ?>public/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo BASE_URL; ?>public/css/bootstrap.css"> 
  <link rel="stylesheet" href="<?php echo BASE_URL; ?>public/css/bootstrap-theme.min.css">
  <link rel="stylesheet" href="<?php echo BASE_URL; ?>public/style/estilo.css">
  <link rel="stylesheet" href="<?php echo BASE_URL; ?>public/style/newStyle.css">

  
</head>
<body>
<div id="cuadro">  
 <div class="container">

  <!--Cabecera del sistema web -->
	<header> 
		<div class="container">
		   <div class="row">
		   	  <div class="col-xs-3 col-md-3"> <!--imagen para para el sistema web -->
		   	  	<img src="<?php echo BASE_URL; ?>public/imagen/logoUmss.png" class="img-responsive"	alt="">
		   	  </div>
		   	  <div class="col-xs-9 col-md-9"> <!--titulo con el nombre del sistema web -->
		   	    <h1>Sistema de Gestion De Planes Globales</h1>	
		   	  </div>
		   </div>
		</div>
	</header>
  <!--Fin de la cabecera -->
  
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
       </div>
       <!--fin del div del menu desplegable--> 

        <!--div para el contenido de los elementos y enlaces que tendra el menu horizontal los cuales seran visualidados en los desktop-->
        <div class="collapse navbar-collapse" id="menu_horizontal">
          <ul class="nav navbar-nav">
            <li class="active"><a href="<?php echo BASE_URL; ?>index.php">Inicio</a></li>
            <li><a href="ejemplo.php">Contactos</a></li>
            
            <li class="dropdown"><!--Opcion dropdown-->
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Facultad<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li> <a href="<?php echo BASE_URL; ?>facultad/carreras">Carreras</a> </li>
                
              </ul>
            </li>
          </ul>
        </div>
    </div> 

  </nav>
  <!--fin del menu horizontal-->
 
  <div class="container-fluid"> 
     <div class="row fondo">
       <div class="col-md-2">
          <img class="img-responsive img-circle" height="" width="150" src="<?php echo BASE_URL; ?>views/facultad/img/planEstudios.jpg"  alt="">  
       </div>
       <div class="col-md-8 col-md-offset2">
         <h2 class ="text-center">Plan de Estudios Ingenieria Inform&aacute;tica</h2> 
       </div>
     </div>
  </div>

  <section class="main row"> <!--seccion donde esta el contenido del sistema web -->
  <br>

  <!-- Menu de navegacion vertical del sistema web-->
   <nav id="menu" class="col-xs-12 col-sm-4 col-md-3">
    <div class="container-fluid">
     <div class="row">  

        <div id="MainMenu">
           <div class="list-group panel">
            
            <a href="<?php echo BASE_URL; ?>facultad" class="list-group-item list-group-item-success">Inicio</a>
            <a href="<?php echo BASE_URL . 'planEstudios'?>" class="list-group-item list-group-item-success">Informatica</a>
            <a href="#demo3" class="active list-group-item list-group-item-success" data-toggle="collapse" data-parent="#MainMenu">Plan de Estudios</a>
            
            <!-- <div class="collapse" id="demo3">
              <a href="#SubMenu1" class="list-group-item" data-toggle="collapse" data-parent="#SubMenu1">Carreras <i class="fa fa-caret-down"></i></a>
              <div class="collapse list-group-submenu" id="SubMenu1">
                <a href="#SubSubMenu1" class="list-group-item" data-toggle="collapse" data-parent="#SubSubMenu1">Plan de Estudios <i class="fa fa-caret-down"></i></a>
                <div class="collapse list-group-submenu list-group-submenu-1" id="SubSubMenu1">
                  <a href="<?php echo BASE_URL . 'facultad'?>" class="list-group-item" data-parent="#SubSubMenu1">Materias</a>
                  <a href="#" class="list-group-item" data-parent="#SubSubMenu1">Plan global</a>
                </div>
              </div>
            </div> -->

           </div>
         </div>

         <picture>
          <img class="img-responsive" width="150" src="<?php echo BASE_URL; ?>views/facultad/img/logoInformatica.png"  alt="">  
         </picture>

     </div>
    </div>
   </nav>

          
  <div class="container-fluid">
   <div class="row "> 
     <!-- <div class="col-sm-4 col-sm-offset-2"> -->

    <!--campo para visualizar el contenido del sistema web-->
    <div class="col-xs-12 col-sm-8 col-md-9"> 
     
     <!--Buscador-->
     <div class="row">        
       <div class="col-xs-12 col-sm-4 ">
         <h2><center></center></h2>  
       </div>
       
       <!-- <div class="col-xs-12 col-sm-4 col-sm-offset-2" > -->
       <div class="col-xs-12 col-sm-6" >
          <div class="derecha" id="buscar">Buscar <input type="search" class="light-table-filter" data-table="order-table" placeholder="Ingrese nombre o descripcion de materia">    
          </div>
       </div>
       
     </div>
     
	  
    	<div class="table-responsive"><!-- tabla donde se muestra todas las materias que estan registradas en el sistema-->
    	<div class="datagrid">
        <table class="table table-hover table-bordered order-table" id="datos">
          <!--Cabecera de la tabla de materias-->
          
        <thead>
          <tr class="titulo">
            <!--nombres de las columnas de la tabla de materias-->  
	          <th>CODIGO</th>
            <th>NOMBRE MATERIA</th>
            <th>SIGLA</th>
            <!-- <th>ACCIONES</th> -->
            <th><h4>REGISTRAR PLAN GLOBAL</h4></th>
            <th>PLAN GLOBAL</th>
    			</tr>
       </thead>

        <tbody>
          
          <?php 
            if(isset($this->materias) && count($this->materias)){
              for ($i=0; $i < count($this->materias); $i++) { 
                ?>
          <tr>
            <td><?php echo $this->materias[$i]['codigo_materia']; ?></td>
            <td><?php echo $this->materias[$i]['nombre_materia']; ?></td>
            <td><?php echo $this->materias[$i]['sigla_materia']; ?></td>
             <!-- Boton para editar una materia --> 
            <td>
              <a class="btn btn-primary" role="button"
                  href = "<?php echo BASE_URL . 'materias/editar/' . $this->materias[$i]['codigo_materia']; ?>">
                <span class="glyphicon glyphicon-edit"></span></a>
              <!--Boton para eliminar una materia -->  
              <a class="btn btn-primary" role="button"
                  data-baseurl="<?php echo BASE_URL; ?>materias/verificar_eliminar"
                  data-valor="<?php echo $this->materias[$i]['codigo_materia']; ?>"
                  data-habilitada="<?php echo $this->materias[$i]['habilitada_materia'] ?>"
                  onclick = "confirmarEliminacion(this);">
                <span class="glyphicon glyphicon-remove-circle"></span></a>
                <span id="auxiliarNoBorrar" data-codigo="a" class="a"></span>
            </td>
            <!-- <td>
                <a class="btn btn-primary" role="button" href = "<?php echo BASE_URL . 'planGlobal/registrar/'. $this->materias[$i]['codigo_materia'];?>">
                  <span class="glyphicon glyphicon-list-alt"></span>
                </a>
            </td> -->
            <td>
              <?php
                $codigoAnterior = $this->materias[$i]['codigo_materia'];

                for ($j=$i; $j < count($this->materias) ; $j++) { 
                  if($this->materias[$j]['codigo_materia'] == $codigoAnterior){
                    if($this->materias[$j]['numero_plan_global']){
              ?>
              <a href="<?php echo BASE_URL . 'planGlobal/mostrarPlanGlobal/' . $this->materias[$j]['id_pg'];?>">
                PG<?php echo $this->materias[$j]['numero_plan_global']; ?> 
              </a>
              <?php
                    }
                    $codigoAnterior = $this->materias[$j]['codigo_materia'];
                    if($i < $j)
                      $i++;
                  }
                }
               ?>
            </td>
          </tr>

          <?php
              }
            }

           ?>

        </tbody>
       
      </table>  
      </div>  
      </div>
      </div>
      
    	
    	
    	<div class="container-fluid"> <!-- DIV para los botones para las acciones correspondientes-->
          <div class="row">
             <div class="col-xs-4"> 
             </div>
              <!--Boton para registrar una materia -->   
          	  <div class="col-xs-4">   
                   <a href="<?php echo BASE_URL; ?>materias/nuevo" role="button" class="btn btn-primary">
                     <strong>Agregar Materia</strong>
                   </a>
              </div>
              

             
                <div class="modal fade" id="eliminar_materia" > <!--div contenedor de la ventana emergente de registro de materia-->
                   <div class="modal-dialog modal-sm"> <!--div de la ventana emergente-->
                     <div class="modal-content"> <!--div para el contenido de la ventana emergente-->
                       
                       <!--Cabecera de la ventana-->
                       <div class="modal-heder">
                         <!--Boton para cerrar la ventana emergente-->
                         <button type="button" class="close" data-dismiss="modal" aria-hiden="true">&times;</button>
                         <!--Titulo del formulario de registro de materia-->
                         <h5 class="modal-title"> Esta seguro de eliminar esa materia</h5>
                       </div>

                         <!--Contenido de la ventana-->
                         <div class="modal-body">
                           <div id="nuevo"> <!--formulario para regitrar los datos de una materia-->
                            <form name="form1" method="post" action="<?php echo BASE_URL; ?>materias/eliminar">
                                <div class="container-fluid">
                                    <div class="row col-xs-12 col-sm-8 col-md-12">
                                        <button class="btn btn-primary" type="button" data-dismiss="modal" aria-hidden="true">Cancelar</button>                
                                        <button class="btn btn-primary" type="button" id="confirmarEliminar" 
                                        data-baseurl="<?php echo BASE_URL; ?>materias/eliminar/"
                                        >Eliminar</button>                
                                    </div>
                                </div>
                             </form>
                            </div> 
                         </div> 

                          <!--footer de la ventana-->
                          <div class="modal-footer">  </div>
                        
                       </div>                      
                     </div>
                   </div>
                    <!--Fin del mensaje para eliminar-->

                  <div class="modal fade" id="modalNoSePuedeEliminar"> <!--div contenedor de la ventana emergente de eliminacion de materia-->
                   <div class="modal-dialog modal-sm"> <!--div de la ventana emergente-->
                     <div class="modal-content"> <!--div para el contenido de la ventana emergente-->
                       
                       <!--Cabecera de la ventana-->
                       <div class="modal-heder">
                         <!--Boton para cerrar la ventana emergente-->
                         <button type="button" class="close" data-dismiss="modal" aria-hiden="true">&times;</button>
                         <!--Titulo del formulario de registro de materia-->
                         <h5 class="modal-title"> No se puede eliminar esta materia, esta asignada a un Plan de Estudios vigente.</h5>
                       </div>

                         <!--Contenido de la ventana-->
                         <div class="modal-body">
                           <div id="nuevo">
                                    <div class="row col-xs-12 col-sm-8 col-md-12">
                                        <button class="btn btn-primary" type="button" data-dismiss="modal" aria-hidden="true">Aceptar</button>                                
                                    </div>
                            </div> 
                         </div> 

                          <!--footer de la ventana-->
                          <div class="modal-footer">  </div>
                        
                       </div>                      
                     </div>
                   </div>
                    <!--Fin del mensaje para eliminar-->
                 </div>
                 </div>
                 <!--Fin de la funcion de eliminar-->

             </div> 
          </div>
          <!-- fin del DIV de los botones-->
    

      </div><br>
      <!--Fin del div para el contenido--> 
 
  </section> <!--fin de la seccion donde esta el contenido -->
  </div>
</br> 
 
    <footer>
      <!--Codigo para incluir el pie de pagina-->
      <?php
        include ROOT .'views'.DS.'include'.DS.'pie_de_pagina.php'
      ?>  
    </footer>
    <div class="container">
    <div class="modal fade" id="modalYaEstaBaja"> <!--div contenedor de la ventana emergente de eliminacion de materia-->
                   <div class="modal-dialog modal-sm"> <!--div de la ventana emergente-->
                     <div class="modal-content"> <!--div para el contenido de la ventana emergente-->
                       
                       <!--Cabecera de la ventana-->
                       <div class="modal-heder">
                         <!--Boton para cerrar la ventana emergente-->
                         <button type="button" class="close" data-dismiss="modal" aria-hiden="true">&times;</button>
                         <!--Titulo del formulario de registro de materia-->
                         <h5 class="modal-title"> Esta Materia ya esta dada de baja.</h5>
                       </div>

                         <!--Contenido de la ventana-->
                         <div class="modal-body">
                           <div id="nuevo">
                                    <div class="row col-xs-12 col-sm-8 col-md-12">
                                        <button class="btn btn-primary" type="button" data-dismiss="modal" aria-hidden="true">Aceptar</button>                                
                                    </div>
                            </div> 
                         </div> 

                          <!--footer de la ventana-->
                          <div class="modal-footer">  </div>
                        
                       </div>                      
                     </div>
                   </div>

</div>  

  <!--importantando las librerias para trabajar con jquery y javascript de bootstrap-->
  <script type="text/javascript" src="<?php echo BASE_URL; ?>public/js/jquery-1.12.0.js"></script>
  <script type="text/javascript" src="<?php echo BASE_URL; ?>public/js/bootstrap.js"></script>
  <script type="text/javascript" src="<?php echo BASE_URL; ?>views/materias/js/materias.js"></script>
  <script type="text/javascript" src="<?php echo BASE_URL; ?>views/materias/js/buscar.js"></script>

 </body>

</html>
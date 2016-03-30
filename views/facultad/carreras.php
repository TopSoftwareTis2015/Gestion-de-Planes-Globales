<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Facultad</title>
  
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
            <img src="<?php echo BASE_URL; ?>public/imagen/logoUmss.png" class="img-responsive" alt="">
          </div>
          <div class="col-xs-9 col-md-9"> <!--titulo con el nombre del sistema web -->
            <h1>Sistema de Gestion De Planes Globales</h1>  
          </div>

     </div>
   </div>
  </header>
  <!--Fin de la cabecera -->
  
  <!--Menu de navegacion Horizontal-->
  <nav class="navbar navbar-default">

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
      <div class="collapse navbar-collapse" id="menu_horizontal">
          <ul class="nav navbar-nav">
            <li class="active"><a href="<?php echo BASE_URL; ?>index.php">Inicio</a></li>
            <li><a href="ejemplo.php">Contactos</a></li>
            
            <li class="dropdown"><!--Opcion dropdown-->
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Facultad<span class="caret"></span></a>
              <ul class="dropdown-menu" >
                <li> 
                    <a href="<?php echo BASE_URL; ?>materias">Materias Habilitadas</a>
                </li>
              </ul>
            </li>
          </ul>
      </div>
    </div> 
  </nav>
  <!--fin del menu horizontal-->
	
<div class="container-fluid">
    
  <div class="container-fluid"> 
    <div class="row fondo">
      <div class="col-md-2">
          <img class="img-responsive img-circle" height="" width="150" src="<?php echo BASE_URL; ?>views/facultad/img/carreras.jpg"  alt="">  
      </div>
      <div class="col-md-8 col-md-offset2">
         <h2 class ="text-center">Carreras Facultad Ciencias y Tecnologia</h2> 
      </div>
    </div><br>
  </div>

 <div class="container-fluid">
  <div class="row">

     <div class="col-md-4">
        
        <div id="MainMenu">
          <div class="list-group panel">

            <a href="<?php echo BASE_URL; ?>facultad" class="list-group-item list-group-item-success">Inicio</a>
             <a href="<?php echo BASE_URL; ?>facultad" class="list-group-item list-group-item-success">Facultad</a>
            <a href="#demo3" class="active list-group-item list-group-item-success" data-toggle="collapse" data-parent="#MainMenu">Carreras</a>
            
          </div>
        </div>


       <img src="<?php echo BASE_URL; ?>views/materias/img/fcyt2.jpg" height="200" class="img-responsive" alt=""><br>
     </div>

     <div class="col-md-5">
   
      <h2 id="list-carrera"><strong><ins>Lista de Carreras</ins></strong></h2>
      <table class="table table-hover table-bordered" id="datos">
      <!-- <table class="table"> -->
        <thead>
          <tr class="success">
            <th>Nombre</th>
            <th>Año</th>
          </tr>
        </thead>
        <tbody>
          <?php 
            if(isset($this->facultad) && count($this->facultad)){
              for ($i=0; $i < count($this->facultad); $i++) { 
          ?>
          <tr>
            <td> 
            <!-- <a href="<?php echo BASE_URL . 'planEstudios/'. $this->facultad[$i]['nombre'];?>"><storng><?php echo $this->facultad[$i]['nombre']; ?></storng>
            </a> -->

            <a href="<?php echo BASE_URL . 'planEstudios/'?>"><storng><?php echo $this->facultad[$i]['nombre']; ?></storng>
            </a>

            </td>
            <td><?php echo $this->facultad[$i]['anio_carrera']; ?></td>
            
          </tr>
          <?php
              }
            }

           ?>
        </tbody>
        
      </table>

     </div>
     <div class="col-md-3">
      <ul class="nav navbar nav" id="sitiosUmss">
         <li>
           <h3>Sitios Importantes</h3>
         </li>
         <li>
           <a href="http://www.umss.edu.bo/" target="_blank">UMSS</a>
         </li>
         <li>
           <a href="http://websis.umss.edu.bo/" target="_blank">WEBSISS</a>
         </li>
         <li>
           <a href="http://www.fcyt.umss.edu.bo/" target="_blank">FCYT</a>
         </li>
       </ul>
     </div>
 </div>
</div> 
</div>
         
</div>
      
</div></br> 
 
    <footer>
      <!--Codigo para incluir el pie de pagina-->
      <?php
        include ROOT .'views'.DS.'include'.DS.'pie_de_pagina.php'
      ?>  
    </footer>  

  <!--importantando las librerias para trabajar con jquery y javascript de bootstrap-->
  <script type="text/javascript" src="<?php echo BASE_URL; ?>public/js/jquery-1.12.0.js"></script>
  <script type="text/javascript" src="<?php echo BASE_URL; ?>public/js/bootstrap.js"></script>
  <script type="text/javascript" src="<?php echo BASE_URL; ?>views/materias/js/materias.js"></script>
  <script type="text/javascript" src="<?php echo BASE_URL; ?>views/materias/js/buscar.js"></script>

 </body>

</html>
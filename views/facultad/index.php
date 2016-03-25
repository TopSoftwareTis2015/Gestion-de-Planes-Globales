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
                    <a href="#">Carreras</a>
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
       <h2 class ="text-center">Facultad Ciencias y Tecnologia</h2>
     </div><br>
    </div> 
<div class="container-fluid">
  <div class="row">

     <div class="col-md-5">
       <!-- <ul class="nav nav-pills nav-stacked">
          <li role="presentation"><a href="<?php echo BASE_URL; ?>index.php">Inicio</a></li>
          <li role="presentation" class="active"><a href="<?php echo BASE_URL . 'facultad'?>">Facultad</a></li>
          <li role="presentation"><a href="#">Carreras</a></li>
          <li role="presentation"><a href="#">Planes de Estudio</a></li>
        </ul><br>-->

       
        <div id="MainMenu">
           <div class="list-group panel">
            <a href="#demo3" class="active list-group-item list-group-item-success" data-toggle="collapse" data-parent="#MainMenu">Facultad</a>
            <div class="collapse" id="demo3">
              <a href="#SubMenu1" class="list-group-item" data-toggle="collapse" data-parent="#SubMenu1">Carreras <i class="fa fa-caret-down"></i></a>
              <div class="collapse list-group-submenu" id="SubMenu1">
                <a href="#SubSubMenu1" class="list-group-item" data-toggle="collapse" data-parent="#SubSubMenu1">Plan de Estudios <i class="fa fa-caret-down"></i></a>
                <div class="collapse list-group-submenu list-group-submenu-1" id="SubSubMenu1">
                  <a href="<?php echo BASE_URL . 'facultad'?>" class="list-group-item" data-parent="#SubSubMenu1">Materias</a>
                  <a href="#" class="list-group-item" data-parent="#SubSubMenu1">Plan global</a>
                </div>
                <!-- <a href="#" class="list-group-item" data-parent="#SubMenu1">Subitem 4 d</a> -->
              </div>
              <!-- <a href="javascript:;" class="list-group-item">Subitem 2</a> -->
            </div>
            <a href="#demo4" class="list-group-item list-group-item-success" data-toggle="collapse" data-parent="#MainMenu">Principal</a>
              <div class="collapse" id="demo4">
                <a href="<?php echo BASE_URL; ?>index.php" class="list-group-item"><i>Inicio</i></a>
              </div>
           </div>
         </div>

       <img src="<?php echo BASE_URL; ?>views/materias/img/fcyt2.jpg" height="200" class="img-responsive" alt=""><br>
     </div>

     <div class="col-md-4">
       <div>
         <h2 id="list-carrera"><strong><ins>Carreras</ins></strong></h2>
         <ul>
           <li  type="square">
             <a href="#"><storng>Sistemas</storng></a>
           </li> <br>
           <li  type="square">
              <a href="<?php echo BASE_URL . 'planEstudios'?>"><storng>Informatica</storng></a>
           </li><br>
           <li  type="square">
            <a href=""><storng>Industrial</storng></a>
           </li>
         </ul>
       </div>
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
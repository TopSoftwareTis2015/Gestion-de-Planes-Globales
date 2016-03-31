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

  <script type="text/javascript" src="<?php echo BASE_URL; ?>public/js/jquery-1.12.0.js"></script>
  <script type="text/javascript" src="<?php echo BASE_URL; ?>views/planEstudios/js/prueba.js"></script>
  <script type="text/javascript" src="<?php echo BASE_URL; ?>public/js/bootstrap.js"></script>
  

  
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
       </div><!--fin del div del menu desplegable--> 

        <!--div para el contenido de los elementos y enlaces que tendra el menu horizontal los cuales seran visualidados en los desktop-->
        <div class="collapse navbar-collapse" id="menu_horizontal">
          <ul class="nav navbar-nav">
            <li class="active"><a href="<?php echo BASE_URL; ?>index.php">Inicio</a></li>
            <li><a href="ejemplo.php">Contactos</a></li>
            
            <li class="dropdown"><!--Opcion dropdown-->
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Administracion<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li> <a href="<?php echo BASE_URL; ?>materias">Registro Materias</a> </li>
                <li> <a href="">Formatos Plan Global</a> </li>
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
          <img class="img-responsive img-circle" height="" width="150" src="<?php echo BASE_URL; ?>views/facultad/img/ingenieria.jpg"  alt="">  
       </div>
       <div class="col-md-8 col-md-offset2">
         <h2 class ="text-center">Carrera Ingenieria Inform&aacute;tica</h2> 
       </div>
     </div>
  </div>

  <section class="main row"> <!--seccion donde esta el contenido del sistema web -->
  <br>

  <!-- Menu de navegacion vertical del sistema web-->
   <nav id="menu" class="col-xs-12 col-sm-4 col-md-3">
    <div class="container-fluid">
     <div class="row">

      <!-- <div id="MainMenu">
           <div class="list-group panel">
            
            <a href="<?php echo BASE_URL; ?>index" class="list-group-item list-group-item-success">Inicio</a> 
            <a href="<?php echo BASE_URL; ?>facultad/carreras" class="list-group-item list-group-item-success">Carreras</a> 
            
            <a href="#SubMenu2" class="active list-group-item list-group-item-success" data-toggle="collapse" data-parent="#MainMenu">Informatica</a>
            <div class="collapse list-group-submenu" id="SubMenu2">  
              <a href="<?php echo BASE_URL; ?>planEstudios/planDeEstudios" class="list-group-item">Plan de Estudios <i></i></a>
            </div>

           </div>
      </div> -->
      
     <!-- arbol de navegacion-->
     
    <h3><ins>Navegacion</ins></h3>
    <div class="tree muro">
      <ul>
        <li>  
           <a href="<?php echo BASE_URL; ?>index">Inicio</a>
            <ul>
                <li>  
                  <a href="<?php echo BASE_URL; ?>facultad">Facultad</a>
                  <ul>
                    <li>
                     <a href="<?php echo BASE_URL; ?>facultad/carreras">Carreras</a>
                    </li>
                    <li class="active">  
                      <a href=""><strong>Inform&aacute;tica</strong></a>
                      <ul>
                        <li >  
                          <a href="<?php echo BASE_URL; ?>planEstudios/planDeEstudios">Plan de Estudios</a>
                        </li>
                      </ul>
                    </li>
                    <!-- <li>
                      <a href="#">Nivel 1</a>
                    </li> -->
                  </ul>
                </li>
            </ul>
        </li>
      </ul>
    </div> <br>

      <!-- <div class="tree well">
        <ul>
            <li>
               <span><i class="icon-folder-open"></i> Parent</span> <a href="">Goes somewhere</a>
              <span title="Collapse this branch" class="glyphicon glyphicon-triangle-bottom"><i class="icon-folder-open"></i></span> <a href="">Goes somewhere</a>
              <ul>
                <li>
                  <span><i class="icon-minus-sign"></i> Child</span> <a href="">Goes somewhere</a>
                    <ul>
                      <li>
                        <span><i class="icon-leaf"></i> Grand Child</span> <a href="">Goes somewhere</a>
                      </li>
                    </ul>
                </li>
                <li>
                  <span><i class="icon-minus-sign"></i> Child</span> <a href="">Goes somewhere</a>
                    <ul>
                      <li>
                        <span><i class="icon-leaf"></i> Grand Child</span> <a href="">Goes somewhere</a>
                      </li>
                      <li>
                        <span><i class="icon-minus-sign"></i> Grand Child</span> <a href="">Goes somewhere</a>
                        <ul>
                          <li>
                            <span><i class="icon-minus-sign"></i> Great Grand Child</span> <a href="">Goes somewhere</a>
                            <ul>
                              <li>
                                <span><i class="icon-leaf"></i> Great great Grand Child</span> <a href="">Goes somewhere</a>
                              </li>
                              <li>
                                <span><i class="icon-leaf"></i> Great great Grand Child</span> <a href="">Goes somewhere</a>
                              </li>
                            </ul>
                          </li>
                          <li>
                            <span><i class="icon-leaf"></i> Great Grand Child</span> <a href="">Mesa</a>
                          </li>
                          <li>
                            <span><i class="icon-leaf"></i> Great Grand Child</span> <a href="">Silla</a>
                          </li>
                        </ul>
                      </li>
                      <li>
                        <span><i class="icon-leaf"></i> Grand Child</span> <a href="">Goes somewhere</a>
                      </li>
                    </ul>
                </li>
              </ul>
            </li>
            <li>
             <span><i class="icon-folder-open"></i> Parent2</span> <a href="">Goes somewhere</a>
             <ul>
               <li>
                <span><i class="icon-leaf"></i> Child</span> <a href="">Goes somewhere</a>
               </li>
             </ul>
            </li>
        </ul>
      </div> -->

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
             
      <h2 id="subtitulo">Antecedentes</h2>  
      <figure class="pull-right" id="img_fcyt">
        <img src="" alt="">
        <img class="img-responsive" width="500" src="<?php echo BASE_URL; ?>views/facultad/img/laboratorio.jpg"  alt="">  

      </figure>
      <p class="text-justify">
        La carrera de Informática se encuentra dedicada la formación de profesionales en el área de Informática o Ciencias de la Computación desde 1978, a partir de esa fecha hasta la actualidad ha sufrido grandes transformaciones en lo que hace a la formación de profesionales informáticos, transformaciones que permiten a nuestros profesionales contar con un prestigio tanto a nivel local, nacional e internacional. Dichas transformaciones son producto del avance tecnológico y un propósito firme de parte de la carrera de formar profesionales acorde a las exigencias de ese avance tecnológico y las necesidades del medio.
      </p>

      <p class="text-justify">
        A partir de la primera promoción halla por los años 1985, nuestra labor es continua, proporcionando al medio profesionales de alta calidad académica y moral, contando en la actualidad con un promedio de 25 titulados por año.
      </p>
     
	  
    </div>
    </div>
  </div>  
  </section> <!--fin de la seccion donde esta el contenido -->
  </div>
</br> 
 
    <footer>
      <!--Codigo para incluir el pie de pagina-->
      <?php
        include ROOT .'views'.DS.'include'.DS.'pie_de_pagina.php'
      ?>  
    </footer>  



 </body>

</html>
  <!--importantando las librerias para trabajar con jquery y javascript de bootstrap-->
  
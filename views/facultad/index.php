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
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Administracion<span class="caret"></span></a>
              <ul class="dropdown-menu" >
                <li> <a href="<?php echo BASE_URL; ?>materias">Registro Materias</a> </li>
                <li> <a href="<?php echo BASE_URL; ?>gestorFormularios/nuevoFormato">Formatos Plan Global</a> </li>
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
          <img class="img-responsive img-circle" height="" width="150" src="<?php echo BASE_URL; ?>views/facultad/img/ciencia_y_tec.jpg"  alt="">  
       </div>
       <div class="col-md-8 col-md-offset2">
         <h2 class ="text-center">Facultad Ciencias y Tecnologia</h2> 
       </div>
     </div><br>
    </div> 
<div class="container-fluid">
  <div class="row">

     <div class="col-md-4">
    
        <!-- <div id="MainMenu">
          <div class="list-group panel">

            <a href="#menu1" class="list-group-item list-group-item-success" data-toggle="collapse" data-parent="#MainMenu">Inicio</a>

            <a href="#menu2" class="active list-group-item list-group-item-success" data-toggle="collapse" data-parent="#MainMenu">Facultad</a>
            <div class="collapse list-group-submenu" id="menu2">
              <a href="<?php echo BASE_URL; ?>facultad/carreras" class="list-group-item"><i>Carreras</i></a>
            </div>
          </div>
        </div> -->

        <h3><ins>Navegacion</ins></h3>
        <div class="tree muro">
          <ul>
            <li>  
               <a href="<?php echo BASE_URL; ?>index">Inicio</a>
                <ul>
                    <li>  
                      <a href="<?php echo BASE_URL; ?>facultad"><strong>Facultad</strong></a>
                      <ul>
                        <li>
                         <a href="<?php echo BASE_URL; ?>facultad/carreras">Carreras</a>
                        </li>
                        <!-- <li class="active">  
                          <a href=""><strong>Inform&aacute;tica</strong></a>
                          <ul>
                            <li >  
                              <a href="<?php echo BASE_URL; ?>planEstudios/planDeEstudios">Plan de Estudios</a>
                            </li>
                          </ul>
                        </li> -->
                        <!-- <li>
                          <a href="#">Nivel 1</a>
                        </li> -->
                      </ul>
                    </li>
                </ul>
            </li>
          </ul>
        </div> <br>

        <figure>
        <img width="200" class="img-responsive" alt="" src="<?php echo BASE_URL; ?>views/facultad/img/logo_fcyt.jpg" ><br>
        </figure>
        
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

     <div class="col-md-8">

       <section>
        <h2 id="subtitulo">Antecedentes</h2>
        <figure class="pull-right" id="img_fcyt">
          <img class="img-responsive" width="450" src="<?php echo BASE_URL; ?>views/facultad/img/fcyt.jpg"  alt="">  
          <img src="" alt="">
        </figure>
        <p class="text-justify">
           La Facultad de Ciencias y Tecnología de la Universidad Mayor de San Simón nace con la concepción de un Instituto de Ciencias Básicas, en la década del 60 bajo la gestión rectoral del Dr. Arturo Urquidi. En 1972, se crea la Facultad de Ciencias Puras y Naturales como unidad de servicios para todas las carreras de la U.M.S.S., en el campo de las Matemáticas, Física, Química, y Biología, lográndose posteriormente la creación de sus primeras carreras: Licenciatura y Técnico Superior en Química y Biología entre 1975 y 1976. En los años 1976 a 1979, se comisiona la realización de un estudio de factibilidad para la viabilización de las carreras de ingeniería de la U.M.S.S., en base al cual, mediante Resolución del Consejo Universitario No. 07/79, se crean las carreras de ingeniería Eléctrica, Industrial y Mecánica de un Facultad de Tecnología y un Instituto politécnico, conectándolas a las carreras de ciencias con funcionamiento de la Facultad de Ciencias Puras y Naturales. El 21 de septiembre de 1979, mediante Resolución Rectoral No. 471/79 se dispone la conjunción de la carreras de Ciencias y las de Tecnología en una facultad con denominación de FACULTAD DE CIENCIAS Y TECNOLOGÍA.
        </p>
        
       </section>

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
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Materias</title>
    <!--importando librerias utiles para trabajar con estilos CSS de bootstrap-->
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <link rel="stylesheet" href="<?php echo BASE_URL; ?>public/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo BASE_URL; ?>public/style/estilo.css">

    
</head>
<body>
<div class="container">
    <header><!-- seccion de la cabecera de la pagina web-->
        <div class="container">
           <div class="row">
              <div class="col-xs-3 col-md-3"> <!--seccion para el logo del sistema web-->
                <img src="<?php echo BASE_URL; ?>public/imagen/logoUmss.png" class="img-responsive" alt="">
              </div>
              <div class="col-xs-9 col-md-9"> <!--titulo del sistema web-->
                <h1>Sistema de Gesti&oacute;n De Planes Globales</h1>   
              </div>
           </div>
            
        </div>
    </header>
   
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
            <li><a href="#">Contactos</a></li>
            
            <li class="dropdown"><!--Opcion dropdown-->
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li> <a href="<?php echo BASE_URL; ?>materias">Materias</a> </li>
                <li> <a href="<?php echo BASE_URL; ?>planDeEstudio">Planes de Estudio</a> </li>
                <li> <a href="<?php echo BASE_URL; ?>planGlobal/registrar">Planes Globales</a> </li>
              </ul>
            </li>
          </ul>
        </div>
    </div> 

  </nav><!--fin del menu horizontal--> 

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
                    <li role="presentation"><a href="<?php echo BASE_URL; ?>materias">Materias</a></li>
                    <li role="presentation"class="active"><a href="<?php echo BASE_URL; ?>planGlobal/registrar">Planes Globales</a></li>
                </ul>
         </div>
      </div>
     </nav>

     <article class="col-xs-12 col-sm-8 col-md-9">
      <div id="parte6" class="container-fluid">
        
        <!-- registro de plan global-->
           <div class="panel panel-default">
             <div class="panel-body">
            <h1><strong><center>Registrar Plan global</center></strong></h1>
              <legend id="separador"><h2>BIBLIOGRAFIA BASE</h2></legend>
                  <fieldset id="bibliografia"><!--seccion para ingresar bibliografia de apoyo para la materia-->
                    <div class="container-fluid">
                      <form  name="formPg7" method="post" action="#">
                        <legend>Objetivo 1</legend>
                        <div class="form-group"><!--titulo de la bibliografia-->
                             <label for="nombre">Titulo Libro</label>
                             <input class="form-control" type="text" id="tituloCap" required>
                         </div>
                         <div class="form-group"> <!--campo para ingresar el nombre del autor del libro-->
                              <label for="codigo">Autor</label>
                              <input class="form-control" type="text" id="descripcion" required>
                         </div>
                         <button class="submit btn btn-primary" type="submit" required>Añadir objetivo</button>
                        </form>
                      </div> 
                  </fieldset>
                  <br>
                  
                  <legend id="separador"><h2>BIBLIOGRAFIA COMPLEMENTARIA</h2></legend>
                  <fieldset id="bibliografia">
                    <div class="container-fluid">
                      <form  name="formPg6" method="post" action="#">
                        
                        <div class="form-group"><!--titulo del libro complementaria-->
                             <label for="nombre">Titulo Libro</label>
                             <input class="form-control" type="text" id="tituloCap2" required>
                         </div>
                         <div class="form-group"><!--campo para ingresar el nombre del autor del libro-->
                              <label for="codigo">Autor</label>
                              <input class="form-control" type="text" id="descripcion2" required>
                         </div>
                         <button class="submit btn btn-primary" type="submit" required>Añadir objetivo</button>
                       </form>
                     </div>
                  </fieldset>             
                </div>              
            </div>
        
            <div class="container-fluid">
          <nav>
          <ul class="pager"><!--campo para los paginadores para pasar a la continuacion del formulario-->
            <li class="previous disable"><a href="<?php echo BASE_URL; ?>planGlobal/registrar/5">&larr;anterior</a></li>
            <li class="next"><a href="<?php echo BASE_URL; ?>planGlobal/registrar/7">siguiente &rarr;</a></li>
          </ul>
          </nav>
          </div>
          <!--script para cambiar el contenido de un div dentro de la pagina principal-->
                <script>
                    function cargar(div, desde)
                    {
                         $(div).load(desde);
                    }
                </script>
      </div>
     </article>

  </section>

  <!--script para cambiar el contenido de un div dentro de la pagina principal-->  
      <script>
          function cargar(div, desde)
          {
               $(div).load(desde);
          }
       </script>

  <footer> 

    <!--Codigo para incluir el pie de pagina-->
    <?php 
       include ROOT.'views'.DS.'include'.DS.'pie_de_pagina.php"'
    ?> <!--fin del codigo de pie de pagina-->  
  </footer>

  <!--importantando las librerias para trabajar con jquery y javascript de bootstrap-->
  <script type="text/javascript" src="<?php echo BASE_URL; ?>public/js/jquery-1.12.0.js"></script>
  <script type="text/javascript" src="<?php echo BASE_URL; ?>public/js/bootstrap.js"></script>

</div>
</body>

</html>
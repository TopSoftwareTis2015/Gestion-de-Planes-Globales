<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Plan Global</title>
    <!--importando librerias utiles para trabajar con estilos CSS de bootstrap-->
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <link rel="stylesheet" href="<?php echo BASE_URL; ?>/public/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo BASE_URL; ?>public/style/estilo.css">
  <link rel="stylesheet" href="<?php echo BASE_URL; ?>public/style/newStyle.css">
  <link rel="stylesheet" href="<?php echo BASE_URL; ?>views/gestorFormularios/css/gestorFormulariosStyle.css">

  <!--importantando las librerias para trabajar con jquery y javascript de bootstrap-->
  <script type="text/javascript" src="<?php echo BASE_URL; ?>public/js/jquery-1.12.0.js"></script>
  <script type="text/javascript" src="<?php echo BASE_URL; ?>views/gestorFormularios/js/Objetos.js"></script>
  <script type="text/javascript" src="<?php echo BASE_URL; ?>views/planGlobal/js/crear_input.js"></script>
  <script type="text/javascript" src="<?php echo BASE_URL; ?>views/planGlobal/js/checkbox.js"></script>
  <script type="text/javascript" src="<?php echo BASE_URL; ?>views/planGlobal/js/validarDatosBackEnd.js"></script>
  <script type="text/javascript" src="<?php echo BASE_URL; ?>views/planGlobal/js/validarDatosFrontEnd.js"></script>
  <script type="text/javascript" src="<?php echo BASE_URL; ?>views/planGlobal/js/seleccionarItem.js"></script>
  <script type="text/javascript" src="<?php echo BASE_URL; ?>public/js/bootstrap.js"></script>

                      
</head>
    
<body>
                  
<div class="container" id="cuadro">
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
  <nav class="navbar navbar-default navbar-fixed-top"><!--"nabar-default" es el estandar del nav el cual ocupa todo el ancho de la pagina-->
    
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
            <li><a href="<?php echo BASE_URL; ?>index.php">Inicio</a></li>
            <li><a href="#">Contactos</a></li>
            
            <li class="dropdown"><!--Opcion dropdown-->
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Administracion<span class="caret"></span></a>
              <ul class="dropdown-menu" >
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
     <br>
     <div class="row fondo">
       <div class="col-md-2">
          <img class="img-responsive img-circle" height="" width="150" src="<?php echo BASE_URL; ?>views/facultad/img/ingenieria.jpg"  alt="">  
       </div>
       <div class="col-md-8 col-md-offset2">
         <h2 class ="text-center">Gestor de Formatos Plan Global</h2> 
       </div>
     </div>
  </div>
  
  <section class="main row">
  <br>
  <ol class="breadcrumb"> 
    <li><a href="<?php echo BASE_URL; ?>facultad">Inicio</a></li>
    <li><a href="<?php echo BASE_URL; ?>materias">Administracion</a></li>        
    <li class="active">Formatos Plan global</li>
  </ol>
     <!--seccion del menu de navegacion vertical--> 
     <nav id="menu" class="col-xs-12 col-sm-4 col-md-3">
      <div class="container-fluid">
         <div class="row">

          <!--  <div id="MainMenu">
             <div class="list-group panel">
                          
               <a href="<?php echo BASE_URL; ?>index" class="list-group-item list-group-item-success">Inicio</a> 
                          
               <a href="#menu2" class="list-group-item list-group-item-success" data-toggle="collapse" data-parent="#MainMenu">Facultad</a>
               <div class="collapse list-group-submenu" id="menu2">
                 <a href="<?php echo BASE_URL; ?>facultad/carreras" class="list-group-item"><i>Carreras</i></a>
               </div>
               <a href="<?php echo BASE_URL; ?>materias" class="list-group-item list-group-item-success">Materias Registradas</a>
               <a href="#SubMenu3" class="active list-group-item list-group-item-success" data-toggle="collapse" data-parent="#MainMenu">Plan Global</a>
             </div>
           </div> -->
          
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
                        </ul>
                    </li>
                    <li>  
                        <a href="<?php echo BASE_URL; ?>materias">Administracion</a>
                        <ul>
                          <li>
                            <a href=""><strong>Formatos Plan Global</strong></a>
                          </li>
                        </ul>
                    </li>
                </ul>
              </li>
            </ul>
          </div>

         </div>
      </div>
     </nav>

    <article class="col-xs-12 col-sm-8 col-md-9">
    	<div id="parte" class="container-fluid">
    		<div>

				  <!-- Nav tabs -->
				  <ul class="nav nav-tabs" role="tablist">
				    <li role="presentation" class="active"><a href="#datosI" aria-controls="datosI" role="tab" data-toggle="tab">Datos de Indentificacion</a></li>
				    <li role="presentation"><a href="#justificacion" aria-controls="justificacion" role="tab" data-toggle="tab">Justificacion</a></li>
				    <li role="presentation"><a href="#objetivos" aria-controls="objetivos" role="tab" data-toggle="tab">Objetivos</a></li>
            <li role="presentation"><a href="#unidades" aria-controls="unidades" role="tab" data-toggle="tab">Seleccion y Organizacion de contenidos</a></li>
            <li role="presentation"><a href="#metodologias" aria-controls="metodologias" role="tab" data-toggle="tab">Metodologias</a></li>
            <li role="presentation"><a href="#cronograma" aria-controls="cronograma" role="tab" data-toggle="tab">Cronogramas</a></li>
            <li role="presentation"><a href="#criteriosEval" aria-controls="criteriosEval" role="tab" data-toggle="tab">Criterios de Evaluacion</a></li>
            <li role="presentation"><a href="#bibliografias" aria-controls="bibliografias" role="tab" data-toggle="tab">Bibliografia</a></li>
            <li role="presentation"><a href="#reglamentos" aria-controls="reglamentos" role="tab" data-toggle="tab">Reglamento Interno</a></li>
            <li role="presentation"><a href="#prerequisitos" aria-controls="prerequisitos" role="tab" data-toggle="tab">Pre-requisitos para una clase</a></li>
          </ul>

				  <!-- Tab panes -->
				  <div class="tab-content">
				    <div role="tabpanel" class="tab-pane fade in active" id="datosI"></div>
				    <div role="tabpanel" class="tab-pane fade" id="justificacion">hola</div>
				    <div role="tabpanel" class="tab-pane fade" id="objetivos">como estas</div>
            <div role="tabpanel" class="tab-pane fade" id="unidades"></div>
            <div role="tabpanel" class="tab-pane fade" id="metodologias"></div>
            <div role="tabpanel" class="tab-pane fade" id="cronograma"></div>
            <div role="tabpanel" class="tab-pane fade" id="criteriosEval"></div>
            <div role="tabpanel" class="tab-pane fade" id="bibliografias"></div>
            <div role="tabpanel" class="tab-pane fade" id="reglamentos"></div>
				    <div role="tabpanel" class="tab-pane fade" id="prerequisitos"></div>
				  </div>

				</div>
      </div>
    </article>

  </section>


</div>
  <footer> 
    <!--Codigo para incluir el pie de pagina-->
    <?php 
       include ROOT.'views'.DS.'include'.DS.'pie_de_pagina.php"'
    ?> <!--fin del codigo de pie de pagina-->  
  </footer>

  <div class="modal fade" id="modalProcesoExitoso" data-keyboard="false" data-backdrop="static"> <!--div contenedor de la ventana emergente de registro de materia-->
           <div class="modal-dialog modal-sm"> <!--div de la ventana emergente-->
               <div class="modal-content">
                       <!--Cabecera de la ventana-->
                       <!-- <div class="modal-header"> -->
                       <!--Contenido de la ventana-->
                       <div class="modal-body"> 
                         <div id="nuevo"> <!--formulario para regitrar los datos de una materia-->
                           <h5 class="modal-title">Plan Global registrada exitosamente!!</h5> <!--Titulo del formulario de registro de materia-->
                         </div>
                       </div> 

                       <!--footer de la ventana-->
                       <div class="modal-footer">
                          <!-- <button type="button" class="btn btn-default" data-dismiss="modal">Aceptar</button> -->
                          <a data-url="<?php echo BASE_URL; ?>planGlobal/mostrarPlanGlobal/" 
                            data-url-buscar="<?php echo BASE_URL; ?>planGlobal/getPlanGlobalInsertado"
                            onclick="irANuevoPlanGlobal(this);" class="btn btn-default">Aceptar</a>
                       </div>
                </div>
            </div>
        </div>

  <script>
    confirmar = <?php echo isset($this->confirmarGuardar)?$this->confirmarGuardar:"2";?>;
    if(confirmar == "1")
      $("#modalProcesoExitoso").modal('show');

    
  </script>
  
</body>

</html>
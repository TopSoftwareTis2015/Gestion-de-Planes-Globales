<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Materias</title>
	<!--importando librerias utiles para trabajar con estilos CSS de bootstrap-->
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="<?php echo BASE_URL; ?>public/css/bootstrap.min.css">
  <!--hoja de estilo personalizado-->
  <link rel="stylesheet" href="<?php echo BASE_URL; ?>public/style/estilo.css">
  <link rel="stylesheet" href="<?php echo BASE_URL; ?>public/style/newStyle.css">

  
  <!--importantando las librerias para trabajar con jquery y javascript de bootstrap-->  
  <script src="<?php echo BASE_URL; ?>public/js/jquery-1.12.0.js"></script>
  <script src="<?php echo BASE_URL; ?>public/js/bootstrap.min.js"></script>
  <script src="<?php echo BASE_URL; ?>views/materias/js/materias.js"></script>
</head>

<body>
<div class="container" id="cuadro">
	<header><!-- seccion de la cabecera de la pagina web-->
		<div class="container">
		   <div class="row">
		   	  <div class="col-xs-3 col-md-3"> <!--seccion para el logo del sistema web-->
		   	  	<img src="<?php echo BASE_URL; ?>public/imagen/logoUmss.png" class="img-responsive"	alt="">
		   	  </div>
		   	  <div class="col-xs-9 col-md-9"> <!--titulo del sistema web-->
		   	    <h1>Sistema de Gestion De Planes Globales</h1>	
		   	  </div>
		   </div>
			
		</div>
	</header> <br>
  <!--fin de la cabecera--> 
   
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
        <img class="img-responsive img-circle" height="" width="150" src="<?php echo BASE_URL; ?>views/facultad/img/ciencia_y_tec.jpg"  alt="">  
      </div>
      <div class="col-md-8 col-md-offset2">
        <h2 class ="text-center">Edicion de Materias</h2> 
      </div>
    </div><br>
  </div>

	<section class="main row">
	<br>
	 <!--seccion del menu de navegacion vertical--> 
	 <nav id="menu" class="col-xs-12 col-sm-4 col-md-3">
	  <div class="container-fluid">
		<div class="row">
     
        <!-- <div id="MainMenu">
          <div class="list-group panel">
            <a href="<?php echo BASE_URL; ?>index" class="list-group-item list-group-item-success">Inicio</a> 
            
            <a href="#menu2" class="list-group-item list-group-item-success" data-toggle="collapse" data-parent="#MainMenu">Facultad</a>
            <div class="collapse list-group-submenu" id="menu2">
              <a href="<?php echo BASE_URL; ?>facultad/carreras" class="list-group-item"><i>Carreras</i></a>
            </div>
            <a href="<?php echo BASE_URL; ?>materias" class="list-group-item list-group-item-success">Materias Registradas</a>
            <a href="#SubMenu3" class="active list-group-item list-group-item-success" data-toggle="collapse" data-parent="#MainMenu">Editar Materias</a>
          </div>
        </div>-->
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
                      <a href="<?php echo BASE_URL; ?>planEstudios">Inform&aacute;tica</a>
                      <ul>
                        <li>  
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
        </div>

		</div>
	  </div>
	 </nav>

     <article class="col-xs-12 col-sm-8 col-md-9">
	    <div class="container-fluid" id="cabecera"> <!-- titulo de la nueva ventana-->
          <!--<div class="col-xs-12 col-sm-8 col-md-9">--> 
            <h3><center><strong>FORMULARIO EDICION</strong></center></h3>  
          <!--</div>-->
	    </div> <!-- fin del titulo-->
    	
   <div id="nuevo" > <!--formulario para editar datos de una materia-->
    <form name="form1" method="post" action="<?php echo BASE_URL . 'materias/editar/' . $this->materiaAnterior['codigo_materia']; ?>">
    	<input type="hidden" name='guardar' value="1">
        <div class="container-fluid">
            <div class="row col-xs-12 col-sm-8 col-md-12">
                <strong>Codigo Materia</strong><br>
                <input title="Ingresar minimo 7 caracteres" type="text" class="form-control"  pattern="{7}" name="codigo_materia" required
                value="<?php if(isset($this->materiaAnterior['codigo_materia'])) echo $this->materiaAnterior['codigo_materia']; ?>"><br>
                <span id="errorCodigoMateria" class="label label-danger"><?php if(isset($this->_errorCodigoMateria)) echo $this->_errorCodigoMateria; ?></span><br>

                <strong>Nombre materia</strong><br>
                <input type="text" class="form-control"name="nombre_materia" required
                value="<?php if(isset($this->materiaAnterior['nombre_materia'])) echo $this->materiaAnterior['nombre_materia']; ?>"><br>
								<span id="errorNombreMateria" class="label label-danger"><?php if(isset($this->_errorNombreMateria)) echo $this->_errorNombreMateria; ?></span><br>

                <strong>Sigla de la Materia</strong><br>
                <input type="text" class="form-control"name="sigla_materia" required
                value="<?php if(isset($this->materiaAnterior['sigla_materia'])) echo $this->materiaAnterior['sigla_materia'];?>"><br>
                <span id="errorSiglaMateria" class="label label-danger"><?php if(isset($this->_errorSiglaMateria)) echo $this->_errorSiglaMateria; ?></span><br>
                
								<input type="checkbox" <?php if(isset($this->materiaAnterior['habilitada_materia'])) echo $this->materiaAnterior['habilitada_materia']?"checked":"";?> 
									id="habilitada" name="habilitada" data-baseurl="<?php echo BASE_URL; ?>materias/verificar_eliminar"
									data-baseurl-eliminar="<?php echo BASE_URL; ?>materias/eliminar"
									data-baseurl-dar-de-alta="<?php echo BASE_URL; ?>materias/dar_de_alta"
									data-codigo-materia="<?php if(isset($this->materiaAnterior['codigo_materia'])) echo $this->materiaAnterior['codigo_materia']; ?>"> &nbsp; 
								<strong><label for="habilitada">habilitada</label></strong><br><br>

                <div class="row clearfix">
                    <div class="col-xs-6">
                       <button class="btn btn-primary" type="submit">Guardar</button>                                                                            
                    </div>  
                    <div class="col-xs-6">
                        <!--  <a role="button" class="btn btn-primary" id="btn_volver" href="<?php echo BASE_URL; ?>materias">
                             Volver
                         </a> -->

                         <a role="button" class="btn btn-primary" id="btn_volver" href="<?php echo BASE_URL; ?>materias">
                             Volver
                         </a>


                    </div>
                </div> <br>
            </div>


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
     </form>
    </div> <!--fin del formulario para materia-->
  </article>

  </section>

  <div class="row clearfix">
	  <footer>
		<!--Codigo para incluir el pie de pagina-->
		<?php 
		    include ROOT . DS . 'views' . DS . 'include' . DS . 'pie_de_pagina.php';
		?>
	  </footer>
  </div>
   
 </div>

 <div class="modal fade" id="modalProcesoExitoso" data-keyboard="false" data-backdrop="static"> <!--div contenedor de la ventana emergente de registro de materia-->
           <div class="modal-dialog modal-sm"> <!--div de la ventana emergente-->
               <div class="modal-content">
                       <!--Cabecera de la ventana-->
                       <!-- <div class="modal-header"> -->
                         <!-- <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button><!--Boton para cerrar la ventana emergente--> -->
                       <!-- </div> -->
                       
                       <!--Contenido de la ventana-->
                       <div class="modal-body"> 
                         <div id="nuevo"> <!--formulario para regitrar los datos de una materia-->
                           <h5 class="modal-title">Materia editada exitosamente!!</h5> <!--Titulo del formulario de registro de materia-->
                         </div>
                       </div> 

                       <!--footer de la ventana-->
                       <div class="modal-footer">
                          <!-- <button type="button" class="btn btn-default" data-dismiss="modal">Aceptar</button> -->
                          <a href="<?php echo BASE_URL; ?>materias" class="btn btn-default">Aceptar</a>
                       </div>
                </div>
            </div>
        </div>	

  <script>
  if("<?php if(isset($this->procesoTerminado)) echo $this->procesoTerminado; else echo false; ?>"){
    $("#modalProcesoExitoso").modal('show');
  }
  </script> 
 
</body>

</html>
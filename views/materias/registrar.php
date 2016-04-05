<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Materias</title>

	<!--importando librerias utiles para trabajar con estilos CSS de bootstrap-->
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="<?php echo BASE_URL; ?>public/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo BASE_URL; ?>public/style/estilo.css"> 
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>public/style/newStyle.css">


	  <!--importantando las librerias para trabajar con jquery y javascript de bootstrap-->
      <script type="text/javascript" src="<?php echo BASE_URL; ?>public/js/jquery-1.12.0.js"></script>
	  <script type="text/javascript" src="<?php echo BASE_URL; ?>public/js/bootstrap.js"></script>
	  <script type="text/javascript" src="<?php echo BASE_URL; ?>views/materias/js/materias.js"></script>
  
</head>

<body>

<!--Contenido del Body-->
<div id="cuadro">
<div class="container">
	  <header>
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
	  </header>

	  <!--Menu de navegacion Horizontal-->
      <nav class="navbar navbar-default"><!--"nabar-default" es el estandar del nav el cual ocupa todo el ancho de la pagina-->
  
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
            <li><a href="<?php echo BASE_URL; ?>materia/nuevo">Contactos</a></li>
            <!--Opcion dropdown-->
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Administracion<span class="caret"></span></a>
              <ul class="dropdown-menu" >
                <li> <a href="<?php echo BASE_URL; ?>materias">Registro Materias</a> </li>
                <li> <a href="<?php echo BASE_URL; ?>gestorFormularios/nuevoFormato">Formatos Plan Global</a> </li>
              </ul>
            </li>
            <!--Fin opciones dropdown-->
          </ul>
        </div> 
	  </nav>
	  <!--fin del menu horizontal-->
	  
	<div class="container-fluid"> 
	    <div class="row fondo">
	    	<div class="col-md-2">
	        	<img class="img-responsive img-circle" height="" width="150" src="<?php echo BASE_URL; ?>views/facultad/img/ciencia_y_tec.jpg"  alt="">  
	    	</div>
	    	<div class="col-md-8 col-md-offset2">
	        	<h2 class ="text-center">Agregar &nbsp; Nueva &nbsp; Materia</h2> 
	    	</div>
	    </div><br>
	</div>


	  <!--Contenido central--> 
	<div class="row clearfix">

	  <ol class="breadcrumb"> 
	    <li><a href="<?php echo BASE_URL; ?>facultad">Inicio</a></li>
	    <li><a href="<?php echo BASE_URL; ?>materias">Administracion</a></li>
	    <li><a href="<?php echo BASE_URL; ?>materias">Registro Materias</a></li>        
	    <li class="active">Agregar Materia</li>
	  </ol>
	  	
	  	<!--Columna del menu vertical-->
	  	<div class="col-xs-12 col-sm-4 col-md-3">
	  		
	  		<nav id="menu">
				<div class="container-fluid">
					<div class="row">
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
					                     			<a href="<?php echo BASE_URL; ?>materias">Registro Materias</a>
					                    		    <ul>
							                  			<li>
							                     			<a href=""><strong>Agregar Materia</strong></a>
							                    		</li>
							                  		</ul>
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
	  	</div>
	  	<!--Fin cloumna para el menu vertical--> 

        <!--Columna para el formulario de registro de materia-->
	  	<div class="col-xs-12 col-sm-8 col-md-9">
		  		
		  		<div class="container-fluid" id="cabecera"> <!-- titulo de la nueva ventana-->
		            <h2><center>REGISTRAR MATERIA</center></h2>  
			    </div> <!-- fin del titulo-->
	     		
     		<!--formulario de registro de los datos de una materia-->
		  	<div class="container-fluid" id="nuevo">
			  	<!--<div id="nuevo" >--> 
				    <form name="form1" method="post" action="<?php echo BASE_URL;?>materias/nuevo">
				    	<input type="hidden" name='guardar' value="1">
				        <div class="container-fluid">
				            <div class="row col-xs-12 col-sm-8 col-md-12">
				                <strong>Codigo Materia</strong><br>
				                
				                <input title="Ingresar minimo 7 caracteres" id="codigoM" type="text" class="form-control"  pattern="{7}" name="codigo_materia" required
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
				                 
									<div class="row">
										<div class="col-xs-6">
								                <button class="btn btn-primary center-block" type="submit">Registrar</button>						            						          					                  	
							            </div>  
										<div class="col-xs-6">
									          <a role="button" class="btn btn-primary" id="btn_volver" href="<?php echo BASE_URL; ?>materias">
								                  	Volver
								              </a>	
								        </div>
						           </div>
						           <br>
				            </div>
				        </div>
				     </form>
				<!--</div>--> 
   			</div>
   			<!--fin del formulario para materia-->

	  	</div>
	  	<!--Fin columna del formulario de registro-->
	  
	  </div>
	  <!--fin contenido central--> 
	  
	  <!--<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#registro_exitoso">Mostrar</button>-->

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
                           <h5 class="modal-title">Materia registrada exitosamente!!</h5> <!--Titulo del formulario de registro de materia-->
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


	  <!--Contenido opcional--> 
	  <div class="row clearfix">
	  </div>
	
      <br>
	   
    </div>
 <!--Fin contenido del Body-->
 </div> 
	
	<!--Contenido del footer--> 
	  <div class="row clearfix">
	  	<footer>  		 		
			<?php 
			    include ROOT . DS . 'views' . DS . 'include' . DS . 'pie_de_pagina.php';
			?>
	  	</footer>
	  </div>
	  <!--Fin del contenido del footer-->

	<script>
	if("<?php if(isset($this->procesoTerminado)) echo $this->procesoTerminado; else echo false; ?>"){
		$("#modalProcesoExitoso").modal('show');
	}
	</script>

	<script>
		function minimoCaracter(){
			var input = document.getElementById('codigoM');
			if(input.value.length < 7) {
				alert('El codigo debe tener como minimo 7 carácteres.');
			}
		}
	</script>
 </body>
</html>
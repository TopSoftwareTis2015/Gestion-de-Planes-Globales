
<?php
//Conexion Base de datos
$user = "postgres";
$password = "postgres";
$dbname = "planGlobal";
$port = "5432";
$host = "localhost";

$cadenaConexion = "host=$host port=$port dbname=$dbname user=$user password=$password";

$conexion = pg_connect($cadenaConexion) or die("Error en la Conexión: ".pg_last_error());

$query = 'SELECT id_usuario, grupo FROM grupos';
$resultado = pg_query( $query) or die("Error en la Consulta SQL");
$numReg = pg_num_rows($resultado);

pg_close($conexion);

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Materias</title>
    <!--importando librerias utiles para trabajar con estilos CSS de bootstrap-->
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="<?php echo BASE_URL; ?>/public/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo BASE_URL; ?>public/style/estilo.css">
  <script>
      function getComboA(sel) {
          var value = sel.value;
          var id = 'gMateria' + value;
          var valor = document.getElementById(id);
          var dato = valor.innerHTML;
          //alert(dato);
          window.location.href = "listaDocControlador.php?dato=" + dato;
      }
  </script>                      
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
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Facultad<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li> <a href="<?php echo BASE_URL; ?>materias">Materias</a> </li>
                <li> <a href="<?php echo BASE_URL; ?>planDeEstudio">Planes de Estudio</a> </li>
                <li> <a href="<?php echo BASE_URL; ?>planGlobal/registrar">Planes Globales</a> </li>
              </ul>
            </li>
          </ul>
        </div>
    </div> 
  </nav>
  <!--fin del menu horizontal--> 

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
     <div id="parte" class="container-fluid">
  
        <?php 
        //include 'prueba.php';
        if(1==1)
        {
        ?>
     		<!-- registro de plan global-->  
        <div class="panel panel-default">
     	      <div class="panel-body">
              <!--Titulo del formulario-->
     			    <h1><strong><center>Registrar Plan global</center></strong></h1>
             		 	 
         		  <form name="formPg1" method="post" action="<?php echo BASE_URL; ?>planGlobal/registrar">

                <input type="hidden" name='guardar' value="1">

                <div class="row container-fluid">
                  <!--<div class="col-xs-12 col-md-9">--> 

                    <div class="form-inline">
                      <label for="gestion">Gestion:</label>
                      <!--<input class="form-control" type="" id="nomMateria">-->
                      <select class="form-control" name="gestion" style="width:25%" id="gesrion" size="1">
                           <option value="I">I</option>
                           <option value="II">II</option>
                           <option value="III">III</option>
                           <option value="IV">IV</option>
                      </select>
                      <input type="text" class="form-control" pattern="[/^([0-9])*$/]{4}" name="anio_gestion"
                              id="anio_gestion" placeholder="Año 4 digitos" onchange="validarSiNumero(this.value);" required>
                      &nbsp;&nbsp;&nbsp; 
                      <label for="codigo_plan_global">Codigo:</label>
                      <input type="text" name="codigo_plan_global" id="codigo_plan_global" 
                              class="form-control" maxlength="30" placeholder="Código del plan global"><br>
                    </div><br>

                    <div class="form-group">
                      <div class="input-group">
                           <span class="input-group-addon">Titulo</span>
                           <input type="text" class="form-control"name="titulo" id="titulo" required maxlength="300"><br>
                      </div>
                    </div> 

                  <!--</div>-->  
                </div>

                <!--<div class="row">-->
                  <!--<div class="col-xs-12">-->     
                    <fieldset>
                       <legend id="separador">Datos de Identificacion</legend>
					  	
                        <div class="row container-fluid">
                          <!--<div class="col-xs-9 col-md-12">-->
                            <div class="form-group">
                              <label for="nombre_materia">Nombre de la Materia:</label>
                              <input class="form-control" type="text" id="nombre_materia" readonly>
                              <!-- <select class="form-control" name="nom_materia" style="width:100%" id="nomMateria" size="1">
                                 <option value="1">Introduccion a la programacion</option>
                                 <option value="2">Taller de programacion en bajo nivel</option>                                              
                              </select> -->
                            </div>    
                          <!--</div>-->
                        </div>

<<<<<<< HEAD
                        <div class="row container-fluid"> 
                          <!--<div class="col-xs-12">-->
=======
                        <div class="row"> 
                          <div class="col-xs-12">
>>>>>>> origin/master
                           <div class="form-group">
                             <label for="codigo_materia">Codigo Materia:</label>
                             <input readonly class="form-control" type="text" id="codigo_materia"
                                    name="codigo_materia">
                           </div>
                          </div>
                        </div>
            
                        <div class="row">
                          
                            <legend id="separador">Ingrese los grupos que participaran en este plan </legend>
                           
                        </div> 

                         <div class="table-responsive"> <!--tabla con los grupo existentes de una materia-->
                         <table class="table">
                          	<tr class="info">
                         		  <th>Grupos totales en las materia</th>
                         		  <th></th>
                         		<th>Grupos en el plan Global</th>
                         	</tr>
                         	<tr>
                         	   <td>
                               <!--lista con los grupos existentes de una materia-->
                               <select name="gruposMateria" id="sel1" style="width:250px" size="6">
                                <?php
                                        if($numReg>0){
                                            while ($fila=pg_fetch_array($resultado)) {
                                                echo "<option value='1'>Grupo ".$fila['grupo']."</option>";
                                            }
                                        }else{
                                            echo "<option>No hay Registros</option>";
                                        }
                                    ?>
                               </select>
                         	   </td>
                             <td>
                               <!--botones para activar el script y pasar los datos de los grupos que participaran en el plan global-->
                              <input type="button" name="pasarValor1" onclick="pasar('sel1','sel2')" value="-->>">
                              <br><br>
                             
                         	   	<input type="button" name="pasarValor2" onclick="pasar('sel2','sel1')" value="<<--">
                         	   </td>

                         	   <td>
                         	   <span class="navArriba">
                                 <select name="grupos_plan_global" id="sel2" style="width:220px" size="6" name="carrera[]" multiple="multiple">
                                    <option value="-">-</option>
                                 </select>
                               </span>
                         	   </td>
                         		
                         	</tr>
                          </table>                
                        </div> <!--fin de la tabla de grupos de una materia-->
                        
                         <div class="row">
                          <div class="col-xs-12">
                            <legend id="separador">Ingrese los docentes que participaran en este plan</legend>   
                          </div> 
                         </div> 
                         
                        <div class="table-responsive"> <!--tabla de docente perteneciente a una materia en comun-->
                        <table class="table">
                         	<tr class="info">
                         		<th>Docentes totales en las materia</th>
                         		<th></th>
                         		<th>Docentes en el plan Global</th>
                         	</tr>
                         	<tr>
                         	   <td>
                              <!--lista con todos los docentes designados a una materia-->
                         	   	<select name="gruposMateria" id="sel3" style="width:250px" size="6" onchange='getComboA(this)'>
                         	   		<option value="1">Lic. Leticia Blanco</option>
                         	   		<option value="2">Lic. Rosmary Torrico</option>
                              </select>  
                             </td>

                               
                         	   <td>
                                <!--botones para activar el script y pasar los datos de los docente que participaran en el plan global-->
                         	    	<input class="center-block" type="button" name="pasarValor1" onclick="pasar('sel3','sel4')" value="-->>">
                         	   	  <br><br>
                         	   	  <input class="center-block" type="button" name="pasarValor2" onclick="pasar('sel4','sel3')" value="<<--">
                         	   </td>

                         	   <td>
                         	   <span class="navArriba">
                                 <select name="docentes_plan_global" id="sel4" style="width:220px" size="6" name="carrera[]" multiple="multiple">
                          
                                 <option value="-">-</option></select>
                               </span>
                         	   </td>
                         		
                         	</tr>
                         </table>
                        </div> <!--fin de la tabla de los docente pertenecientes a una materia en comun-->
                         
                        <div class="row"> <!-- campo para añadir telefono-->
                          <div class="col-xs-12">
                           <div class="form-group ">
                    	     <label for="telefono">Telefonos:</label>
                    	     <textarea readonly class="form-control"name="" id="telefono" cols="60" rows="3"></textarea>
                           </div>
                          </div>
                        </div>

                        <div class="row"> <!-- campo para añadir correo-->
                          <div class="col-xs-12">
                           <div class="form-group ">
                              <label for="correo">Correos:</label>
                              <textarea readonly class="form-control"name="" id="email" cols="60" rows="3"></textarea>
                           </div>
                          </div>
                        </div>

                     <?php 

}

 ?>  
    <?php 
      //Parte 2
      include ROOT.'views'.DS.'planGlobal'.DS.'registrarPG2.php"';
      
      //Parte 3
      include ROOT.'views'.DS.'planGlobal'.DS.'registrarPG3.php"';                            
    ?>
    
    <?php
      // Parte 4
      include ROOT.'views'.DS.'planGlobal'.DS.'registrarPG4.php"';                             
      
      //Parte 5
      include ROOT.'views'.DS.'planGlobal'.DS.'registrarPG5.php"';                            
     
      //Parte 6
      include ROOT.'views'.DS.'planGlobal'.DS.'registrarPG6.php"';                            

    ?>
                                
               <strong><h2>SECCIONES ADICIONALES</h2></strong>
               <div class="container-fluid" id="new_seccion"> 
               <fieldset>
                  <legend>Seccion personalizada 1</legend>
                  <div class="form-group">
                           <label for="nombre">Titulo de la seccion</label>
                           <input class="form-control" type="text" id="tituloSeccion" required>
                  </div>
                  <div class="form-group">
                           <label for="nombre">Objetivo</label>
                           <input class="form-control" type="text" id="objetivoNuevaSeccion" required>
                  </div>
                  <div class="container-fluid" id="new_contenido">
                  <fieldset>
                      <legend>CONTENIDO</legend>
                       <fieldset>
                         <div class="container-fluid" id="new_subtitulo">
                          <form name="formPg6" method="post" action="#">
                            <legend>Contenido 1</legend>
                            <div class="form-group">
                                 <label for="nombre">Titulo del contenido</label>
                                 <input class="form-control" type="text" id="tituloContenido" required>
                             </div>
                             <div class="form-group">
                                  <label for="codigo">Descripcion del contenido</label>
                                  <textarea class="form-control" id="descripcionContenido" cols="100" rows="3" required></textarea>
                             </div>
                             <div class="form-group col-md-6 col-md-offset-3">
                                  <label for="codigo">Subtitulo 1</label>
                                  <input class="form-control" type="text" id="subtitulo1" required>
                                  <br>
                                  <button class="submit btn btn-primary" type="submit" required>Añadir subtitulo</button>
                             </div>
                          
                           </form>
                          </div> 
                       </fieldset>
                       <br>
                       <button class="submit btn btn-primary" type="submit" required>Añadir contenido</button>
                  </fieldset>
                  </div>
                  <br>
                  <button class="submit btn btn-primary" type="submit" required>Añadir Contenido</button>
               </fieldset>
                 <br>
                 <div class="container-fluid col-md-6 col-md-offset-3">
                    <button class="submit btn btn-default" type="submit" required>Registrar Plan Global</button>                      
                    <br><br>
                 </div>
               </div>
               <!--Fin parte 7-->


					   </fieldset>
           <!--</div>-->
        <!--</div>-->
			 </form>      
     	
      </div> 	     		   
     </div>
  		  
     	</div>
     </article>
     
     <div class="container-fluid" id="paginador">
            <nav>
            <ul class="pager"> <!--campo para los paginadores para pasar a la continuacion del formulario-->
              <!--<li class="next"><a href="<?php echo BASE_URL; ?>planGlobal/registrar/2">siguiente &rarr;</a></li>-->
              <li class="next"><a href="#">siguiente &rarr;</a></li>
            </ul>
            </nav>
      </div>

	</section>


</div>
  <footer> 
    <!--Codigo para incluir el pie de pagina-->
    <?php 
       include ROOT.'views'.DS.'include'.DS.'pie_de_pagina.php"'
    ?> <!--fin del codigo de pie de pagina-->  
  </footer>
  <!--importantando las librerias para trabajar con jquery y javascript de bootstrap-->
  <script type="text/javascript" src="<?php echo BASE_URL; ?>public/js/jquery-1.12.0.js"></script>
  <script type="text/javascript" src="<?php echo BASE_URL; ?>views/planGlobal/js/crear_input.js"></script>
  <script type="text/javascript" src="<?php echo BASE_URL; ?>views/planGlobal/js/checkbox.js"></script>
  <script type="text/javascript" src="<?php echo BASE_URL; ?>views/planGlobal/js/validarSoloNumero.js"></script>
  <script type="text/javascript" src="<?php echo BASE_URL; ?>views/planGlobal/js/seleccionarItem.js"></script>
  <script type="text/javascript" src="<?php echo BASE_URL; ?>public/js/bootstrap.js"></script>

</body>

</html>
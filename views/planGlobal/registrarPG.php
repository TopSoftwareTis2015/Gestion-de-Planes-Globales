<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Materias</title>
    <!--importando librerias utiles para trabajar con estilos CSS de bootstrap-->
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="<?php echo BASE_URL; ?>/public/css/bootstrap.min.css">
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
     	<div id="parte" class="container-fluid">
     		
     		 <!-- registro de plan global-->
     		  <div class="panel panel-default">
     	       <div class="panel-body">
     			      <h1><strong><center>Registrar Plan global</center></strong></h1><!--Titulo del formulario-->
             		 
             		 
         		 <form name="formPg1" method="post" action="#">
                
                <div class=row>
                   <div class="col-xs-12 col-md-9"> 

                   <div class="form-inline">
                      <label for="nombre">Gestion:</label>
                      <!--<input class="form-control" type="" id="nomMateria">-->
                      <select class="form-control" name="gestion" style="width:25%" id="nomMateria" size="1">
                           <option value="1">I</option>
                           <option value="2">II</option>
                      </select>
                      <input type="text" class="form-control" pattern="[/^([0-9])*$/]{4}" name="anio" placeholder="Año 4 digitos" onchange="validarSiNumero(this.value);" required><br>
                    </div>
                    <br>

                    <div class="form-group">
                      <div class="input-group">
                           <span class="input-group-addon">Titulo</span>
                           <input type="text" class="form-control"name="titulo" required><br>
                      </div>
                    </div>                       
                  </div>  
                 </div>

                   <div class=row>
                    <div class="col-xs-12">     
                     <fieldset>
            <legend id="separador">Datos de Identificacion</legend>
					  	
                        <div class=row>
                          <div class="col-xs-12">
                            <div class="form-group">
                              <label for="nombre">Nombre de la Materia:</label>
                              <!--<input class="form-control" type="" id="nomMateria">-->
                              <select class="form-control" name="nom_materia" style="width:100%" id="nomMateria" size="1">
                                 <option value="1">Introduccion a la programacion</option>
                                 <option value="2">Taller de programacion en bajo nivel</option>                                              
                              </select>
                            </div>    
                          </div>
                        </div>

                        <div class=row> 
                          <div class="col-xs-12">
                           <div class="form-group">
                             <label for="codigo">Codigo:</label>
                             <input readonly class="form-control" type="text" id="nomMateria">
                           </div>
                          </div>
                        </div>
            
                        <div class="row">
                          <div class="col-xs-12">
                            <legend id="separador">Ingrese los grupos que participaran en este plan </legend>
                          </div> 
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
                         	   		<option value="1">Grupo1</option>
                         	   		<option value="2">Grupo2</option>
                         	   		<option value="3">Grupo3</option>
                         	   		<option value="4">Grupo4</option>
                         	   	</select>

                              <!-- script para seleccionar los grupos participantes en el plan global de una materia-->
                         	   <script language="javascript">
							    function pasar(de,a) {
								obj=document.getElementById(de);
								obj2=document.getElementById(a);
		
						       for (i=0; opt=obj.options[i]; i++)
    							if (opt.selected) {
							    	valor=opt.value; // almacenar value
							    	txt=obj.options[i].text; // almacenar el texto
    	
										if (obj.options.length==1){
											obj.options[i].text="-";	
											obj.options[i].value="-";	
										}else{
											obj.focus();
											obj.options[i]=null;			
										}	 
	  		
      							if (obj2.options[0].value=='-') // si solo está la opción inicial borrarla
							        obj2.options[0]=null;
								
								if(valor!='-'){
						    		opc = new Option(txt,valor);
					    			eval(obj2.options[obj2.options.length]=opc);
								}
							
					         }
							 
							 if (obj.options.length<=0){
								opc = new Option("-","");
								eval(obj.options[0]=opc);
								 return;
							} 
				           }
						  

						  </script>
                         	   </td>
                         	   
                         	   <td>
                               <!--botones para activar el script y pasar los datos de los grupos que participaran en el plan global-->
                         	   	<input type="button" name="pasarValor1" onclick="pasar('sel1','sel2')" value="-->>">
                         	   	<br><br>
                         	   	<input type="button" name="pasarValor2" onclick="pasar('sel2','sel1')" value="<<--">
                         	   </td>

                         	   <td>
                         	   <span class="navArriba">
                                 <select id="sel2" style="width:220px" size="6" name="carrera[]" multiple="multiple">
                          
                                 <option value="-">-</option></select>
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
                         	   	<select name="gruposMateria" id="sel3" style="width:250px" size="6">
                         	   		<option value="1">Lic. Leticia Blanco</option>
                         	   		<option value="2">Lic. Rosmary Torrico</option>
                         	   	</select>
                                
                                <!-- script para seleccionar los docente que participaran en el plan global de una materia-->
                                <script language="javascript">
							    function pasar(de,a) {
								obj=document.getElementById(de);
								obj2=document.getElementById(a);
		
						       for (i=0; opt=obj.options[i]; i++)
    							if (opt.selected) {
							    	valor=opt.value; // almacenar value
							    	txt=obj.options[i].text; // almacenar el texto
    	
										if (obj.options.length==1){
											obj.options[i].text="-";	
											obj.options[i].value="-";	
										}else{
											obj.focus();
											obj.options[i]=null;			
										}	 
	  		
      							if (obj2.options[0].value=='-') // si solo está la opción inicial borrarla
							        obj2.options[0]=null;
								
								if(valor!='-'){
						    		opc = new Option(txt,valor);
					    			eval(obj2.options[obj2.options.length]=opc);
								}
							
					         }
							 
							 if (obj.options.length<=0){
								opc = new Option("-","");
								eval(obj.options[0]=opc);
								 return;
			    				} 
		     		           }
	     					  </script><!-- Fin del script-->

                              </td>
                         	   
                         	   <td>
                                <!--botones para activar el script y pasar los datos de los docente que participaran en el plan global-->
                         	   	<input type="button" name="pasarValor1" onclick="pasar('sel3','sel4')" value="-->>">
                         	   	<br><br>
                         	   	<input type="button" name="pasarValor2" onclick="pasar('sel4','sel3')" value="<<--">
                         	   </td>

                         	   <td>
                         	   <span class="navArriba">
                                 <select id="sel4" style="width:220px" size="6" name="carrera[]" multiple="multiple">
                          
                                 <option value="-">-</option></select>
                               </span>
                         	   </td>
                         		
                         	</tr>
                         </table>
                        </div> <!--fin de la tabla de los docente pertenecientes a una materia en comun-->
                         
                        <div class=row> <!-- campo para añadir telefono-->
                          <div class="col-xs-12">
                           <div class="form-group ">
                    	     <label for="telefono">Telefono:</label>
                    	     <textarea readonly class="form-control"name="" id="telefono" cols="60" rows="3"></textarea>
                           </div>
                          </div>
                        </div>

                        <div class=row> <!-- campo para añadir correo-->
                          <div class="col-xs-12">
                           <div class="form-group ">
                              <label for="correo">Correo:</label>
                              <textarea readonly class="form-control"name="" id="email" cols="60" rows="3"></textarea>
                           </div>
                          </div>
                        </div>

                       

                        <!--Parte 2-->
                        <legend id="separador">Datos de Identificacion</legend> <!--titulo del fieldset-->
                         
                         <div class="form-group"><!--titulo de la seccion del formulario-->
                           <center> <label for="codigo"><h2>Carga Horaria</h2></label></center>
                         </div>
                            <legend id="separador">Seleccione los items que entraran en su descripcion</legend> 
                          <div class="panel panel-default"> <!--campo para seleccionar la duracion de una materia en horas semestre-->
                            <div class="panel-body">
                                <label for="titulo">Horas semestre</label>
                                
                                <div class="row">                               
                                    <div class="col-xs-6">
                                        <input type="checkbox" id="checkboxEnLinea1" onchange="deshabilitarCampoTexto(this.checked, 'hSemestre');">
                                        <input id="horaSemestre" type="number" value="0" name="hora_semestre" min="0" max="360" disabled>
                                    </div>                                  
                                </div>

                            </div>
                          </div>    

                          <div class="panel panel-default"><!--campo para seleccionar la duracion de una materia en horas teoricas y practica por semana-->
                            <div class="panel-body">
                                <label for="titulo">Horas teoricas por semana</label>

                                  <div class="row">                             
                                    <div class="col-xs-6">
                                        <input type="checkbox" id="checkboxEnLinea1" onchange="deshabilitarCampoTexto(this.checked, 'hTeorica');">
                                        <input id="horaTeorica" type="number" value="0" name="horas_teorica_semana" min="0" max="360" disabled>
                                    </div>                                  
                                  </div>                            
                                <br>

                                <label for="titulo">Horas practicas por semana</label>
                     
                                    <div class="row">                               
                                        <div class="col-xs-6">
                                            <input type="checkbox" id="checkboxEnLinea1" onchange="deshabilitarCampoTexto(this.checked, 'hPractica');">
                                            <input id="horaPractica" type="number" value="0" name="horas_practica_semana" min="0" max="360" disabled>
                                        </div>                                  
                                    </div>                  
                    

                            </div>
                          </div>    

                          <div class="panel panel-default"> <!--campo para seleccionar la duracion de una materia en periodos por semana-->
                            <div class="panel-body">
                                <label for="titulo">Periodos por semana</label>
                                <div class="row">                               
                                    <div class="col-xs-6">
                                        <input type="checkbox" id="checkboxEnLinea1" onchange="deshabilitarCampoTexto(this.checked, 'pSemana');">
                                        <input id="periodoSemana" type="number" value="0" name="periodo_semana" min="0" max="360" disabled>
                                    </div>                                  
                                  </div>
                            </div>
                          </div>    

                          <div class="panel panel-default"> <!--campo para seleccionar la duracion de una materia en periodos teoricas y practicas por semana-->
                            <div class="panel-body">
                                <label for="titulo">Periodos teoricos por semana</label>
                                <div class="row">                               
                                    <div class="col-xs-6">
                                        <input type="checkbox" id="checkboxEnLinea1" onchange="deshabilitarCampoTexto(this.checked, 'pTeorico');">
                                        <input id="periodoTeorico" type="number" value="0" name="periodo_teorico_semana" min="0" max="360" disabled>
                                    </div>                                  
                                  </div>
                                <br>

                                <label for="titulo">Periodos practicos por semana</label>
                                <div class="row">                               
                                    <div class="col-xs-6">
                                        <input type="checkbox" id="checkboxEnLinea1" onchange="deshabilitarCampoTexto(this.checked, 'pPractico');">
                                        <input id="periodoPractico" type="number" value="0" name="periodo_practico_semana" min="0" max="360" disabled>
                                    </div>                                  
                                  </div>
                            </div>
                          </div> 
                        <!--Fin Parte 2-->


                <!--Parte 3-->
                <h1><strong><center>Registrar Plan global</center></strong></h1>
                 <legend id="separador"><h3>JUSTIFICACION</h3></legend><!--seccion para ingresar la informacion de justificacion del plan global dentro de un textarea-->
                 <textarea class="form-control"name="" id="justificacion" cols="100" rows="10"></textarea>
                 <br>
                 <legend id="separador"><h3>OBJETIVOS GENERALES</h3></legend> <!--campos para ingresar los objetivos generales -->
                 <form name="formPg3" method="POST" action="">
                     <div class="container-fluid" id="objetivoG">
                       <fieldset>
                          <!--titulo del objetivo general-->
                          <legend>Objetivo 1</legend>
                           <div class="form-group">
                            <label for="titulo">Titulo:</label>
                            <input class="form-control" type="text" id="titulo">
                           </div>
                           <!--campo para la descripcion del objetivo general-->
                           <div class="form-group">
                             <label for="descripcion">Descripcion:</label>
                             <textarea class="form-control"name="" id="descripcion" cols="100" rows="5"></textarea>
                           </div>
                           <!--div para añadir nuevos objetivos generales-->                           
                           <div id="obj_general">   </div>
                       </fieldset>
                     </div>
                    <input class="btn btn-primary" type="button" value="añadir nuevo Objetivo" onClick="addInput('obj_general');">

                </form>
                    
                <br>
                <legend id="separador"><h3>OBJETIVOS ESPECIFICOS</h3></legend> <!--campos para ingresar los objetivos especificos-->
                <form name="formPg4" method="post" action="#">
                     <div class="container-fluid" id="objetivoE">
                       <fieldset>
                          <!--titulo del objetivo especifico -->
                          <legend>Objetivo 1</legend>
                           <div class="form-group">
                            <label for="nombre">Titulo:</label>
                            <input class="form-control" type="text" id="titulo">
                           </div>
                           <!--descripcion del objetivo especifico-->
                           <div class="form-group">
                             <label for="codigo">Descripcion:</label>
                             <textarea class="form-control" name="descripcion" cols="100" rows="5"></textarea>
                           </div>
                       </fieldset>
                        <!--div para añadir nuevos objetivos especificos-->
                        <div id="obj_especifico"> </div>
                     </div>
                     
                   <input class="btn btn-primary" type="button" value="añadir nuevo Objetivo" onClick="addInput('obj_especifico');">

                </form>
                <!--Fin Parte 3-->
                  

                <strong><h2>SELECCION Y ORGANIZACION DE CONTENIDOS</h2></strong>
                 <br>
                 <div class="container-fluid" id="unidad">
                 <form name="formPg5" method="post" action="#">
                     <fieldset>
                        <legend>Unidad 1</legend>  
                         <div class="form-group">
                            <label for="nombre">Titulo de la unidad:</label> <!--Titulo de la unidad que tendra el temario para la materia-->
                            <input class="form-control" type="text" id="titulo" required>
                         </div>
                         <div class="form-group">
                           <label for="codigo">Objetivo:</label><!--campo para describir la unidad de avance de una materia-->
                           <textarea class="form-control"name="" id="Objetivo" cols="100" rows="3"></textarea>
                         </div>
                        <div class="container-fluid" id="contenido">
                         <form name="formPg6" method="post" action="#">
                             <fieldset>
                                <legend>CONTENIDO</legend>
                                <div class="container-fluid" id="capitulo">
                                   <form name="formPg7" method="post" action="#">
                                     <fieldset id="capi">
                                        <legend>Capitulo 1</legend>
                                         <div class="form-group">
                                          <label for="nombre">Titulo del capitulo:</label><!--titulo de los capitulos de una unidad-->
                                          <input class="form-control" type="text" id="tituloCapitulo" required>
                                         </div>

                                         <div class="form-group col-md-6 col-md-offset-3" id="aSubtitulo1">
                                           <label for="codigo">Subtitulo:</label> <!--subtemas que tendra una unidad-->
                                           <input class="form-control" type="text" id="subtitulo" required>
                                           <br>
                                           
                                           <!--boton para añadir nuevos subtitulos a un capitulo del temario-->
                                           <input class="btn btn-primary col-md-6 col-sm-6 col-xs-6 col-md-offset-3" type="button" value="Añadir Subtitulo" onClick="addInput2('new_subtitulo',1);">
                                            <br>
                                         </div>

                                     </fieldset>
                                  </form>
                                </div>
                             </fieldset>
                             <br>
                             <div id="new_contenido"> </div>
                             <!--boton para añadir mas capitulo a un unidad-->
                             <input class="btn btn-primary" type="button" value="Añadir Capitulo" onClick="addInput3('new_capitulo');">
                            <br><br>      
                        </form>
                        </div>
                     </fieldset>
                </form> 
                  <br>
                  <!--boton para añadir una nueva unidad de una materia-->
                  <button class="submit btn btn-primary" type="submit">Añadir Unidad</button>
                  <br><br>
                </div>
                <!--Fin parte 4-->


                 <legend id="separador"><h2>METODOLOGIAS</h2></legend>
                 <!--campo para ingresara las metologias que se usaran para dictar una materia-->
                 <textarea class="form-control"name="" id="metodologias" cols="100" rows="10"></textarea>
                 <br>
                  
                 <legend id="separador"><h2>Cronograma o Duracion en periodos academicos por Unidad</h2></legend>
                 <div class="panel panel-default">
                 <div class="table-responsive">
                    <table class="table table-striped table-hover table-bordered" >
                        <tr><!--nombre de las columnas de la tabla para el cronograma-->
                            <th>UNIDAD</th>
                            <th>DURACION HRS. ACADEMICAS</th>
                            <th>DURACION SEMANAS</th>
                        </tr>
                        <tr>
                            <td>Programacion Orientada a Objetos</td>
                            <td>22</td>
                            <td>3</td>
                        </tr>
                        <tr>
                            <td>Elementos de Progamacion</td>
                            <td>22</td>
                            <td>3</td>
                        </tr>
                        <tr>
                            <td>Unidad ..3</td>
                            <td>22</td>
                            <td>3</td>
                        </tr>
                        <tr>
                            <td>Unidad ..4</td>
                            <td>22</td>
                            <td>3</td>
                        </tr>
                    </table>
                </div> 
                </div>
            
                 <legend id="separador"><h2>CRITERIOS DE EVALUACION</h2></legend>
                 <!--textarea para ingresar la informacion de criterio de evaluacion de una materia-->
                 <textarea class="form-control"name="" id="criterios" cols="100" rows="10"></textarea>
                 <br>
                 <!--Fin parte 5-->


                  
                <legend id="separador"><h2>BIBLIOGRAFIA</h2></legend>
                  
                  <fieldset id="bibliografia"><!--seccion para ingresar bibliografia de apoyo para la materia-->
                    <div class="container-fluid" id="add_biblio">
                      <!--<form  name="formPg7" method="post" action="#">-->
                         <div class="form-group"><!--titulo de la bibliografia-->
                             <label for="nombre">Titulo Libro</label>
                             <input class="form-control" type="text" id="tituloCap" required>
                         </div>
                         <div class="form-group"> <!--campo para ingresar el nombre del autor del libro-->
                              <label for="codigo">Autor</label>
                              <input class="form-control" type="text" id="descripcion" required>
                         </div>
                         <input class="btn btn-primary" type="button" value="añadir nueva bibliografia" onClick="newBiblio('add_bibliografia');">
                        <!--</form>-->
                      </div>
                      <!--div para añadir nueva bibliografia--> 
                      <div class="biblio_base"></div>
                  </fieldset>
                  <br>  
                  <!--Fin parte 6-->



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
                 </div>
                </div>
           

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

  <!--script para cambiar el contenido de un div dentro de la pagina principal-->  
      <script>
          function cargar(div, desde)
          {
               $(div).load(desde);
          }
       </script>
  

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
  <script type="text/javascript" src="<?php echo BASE_URL; ?>views/planGlobal/js/add_bibliografia.js"></script>
  <script type="text/javascript" src="<?php echo BASE_URL; ?>views/planGlobal/js/checkbox.js"></script>
  <script type="text/javascript" src="<?php echo BASE_URL; ?>views/planGlobal/js/validarSoloNumero.js"></script>
  <script type="text/javascript" src="<?php echo BASE_URL; ?>public/js/bootstrap.js"></script>

</body>

</html>
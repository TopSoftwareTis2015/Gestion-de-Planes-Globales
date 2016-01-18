<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Materias</title>
    <!--importando librerias utiles para trabajar con estilos CSS de bootstrap-->
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="../../public/css/bootstrap.min.css">
	<link rel="stylesheet" href="../../public/style/estilo.css">

    
</head>
<body>
    <header><!-- seccion de la cabecera de la pagina web-->
        <div class="container">
           <div class="row">
              <div class="col-xs-3 col-md-3"> <!--seccion para el logo del sistema web-->
                <img src="../../public/imagen/logoUmss.png" class="img-responsive" alt="">
              </div>
              <div class="col-xs-9 col-md-9"> <!--titulo del sistema web-->
                <h1>Sistema de Gestion de De Planes Globales</h1>   
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
            <li class="active"><a href="../../index.php">Inicio</a></li>
            <li><a href="#">Contactos</a></li>
            
            <li class="dropdown"><!--Opcion dropdown-->
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li> <a href="../materias/index.php">Materias</a> </li>
                <li> <a href="#">Planes de Estudio</a> </li>
                <li> <a href="#">Planes Globales</a> </li>
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
                    <li role="presentation"><a href="../../index.php">Inicio</a></li>
                    <li role="presentation"><a href="#">Facultades</a></li>
                    <li role="presentation"><a href="#">Carreras</a></li>
                    <li role="presentation"><a href="#">Planes de Estudio</a></li>
                    <li role="presentation"><a href="../materias/index.php">Materias</a></li>
                    <li role="presentation"class="active"><a href="#">Planes Globales</a></li>
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
         		 <div class=row>
         		   <div class="col-xs-12 col-md-9">	
         		 		<div class="form-group">
         					<div class="input-group">
         				    	 <span class="input-group-addon">Titulo</span>
                	        	 <input type="text" class="form-control"name="titulo" required><br>
         					</div>
         				</div>     			     	    	 
         		  </div>	
         		 </div>
         		 
         		 <form name="formPg1" method="post" action="#">
                    
                   <div class=row>
                    <div class="col-xs-12">     
                     <fieldset>
					 	<legend>Datos de Identificacion</legend>
					  	
                        <div class=row> 
                          <div class="col-xs-12">
                            <div class="form-group">
                              <label for="nombre">Nombre de la Materia:</label>
                              <input class="form-control" type="text" id="nomMateria">
                            </div>    
                          </div>
                        </div>

                        <div class=row> 
                          <div class="col-xs-12">
                           <div class="form-group">
                             <label for="codigo">Codigo:</label>
                             <input class="form-control" type="text" id="nomMateria">
                           </div>
                          </div>
                        </div>
            
                        <div class="row">
                          <div class="col-xs-12">
                            <strong><h3>Ingrese los grupos que participaran en este plan</h3></strong>   
                          </div> 
                        </div> 

                         <div class="table-responsive"> <!--tabla con los grupo existentes de una materia-->
                         <table class="table">
                         	<tr>
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
                            <strong><h3>Ingrese los docentes que participaran en este plan</h3></strong>   
                          </div> 
                         </div> 
                         
                        <div class="table-responsive"> <!--tabla de docente perteneciente a una materia en comun-->
                        <table class="table">
                         	<tr>
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
                    	     <input class="form-control" type="text" id="telefono" >
                           </div>
                          </div>
                        </div>

                        <div class=row> <!-- campo para añadir correo-->
                          <div class="col-xs-12">
                           <div class="form-group ">
                              <label for="correo">Correo:</label>
                              <input class="form-control" type="text" id="email">
                           </div>
                          </div>
                        </div>

					 </fieldset>
                 </div>
                </div>

				</form>
     	       </div> 	     		   
     		</div>
     		<div class="container-fluid">
     		  <nav>
     			<ul class="pager"> <!--campo para los paginadores para pasar a la continuacion del formulario-->
     				<li class="previous disable"><a href="">&larr;anterior</a></li>
            <li class="next"><a href="#" onclick="cargar('#parte','registrarPG2.php')">siguiente &rarr;</a></li>
     			</ul>
     		  </nav>
     	    </div>
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



<!--importantando las librerias para trabajar con jquery y javascript de bootstrap-->
  <script type="text/javascript" src="../../public/js/jquery-1.12.0.js"></script>
  <script type="text/javascript" src="../../public/js/bootstrap.js"></script>
</body>

<footer> 

  <!--Codigo para incluir el pie de pagina-->
  <?php 
     include '../include/pie_de_pagina.php"'
  ?> <!--fin del codigo de pie de pagina-->  
</footer>

</html>
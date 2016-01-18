<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Materias</title>
	<!--importando librerias utiles para trabajar con estilos CSS de bootstrap-->
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="../../public/css/bootstrap.min.css">
	<link rel="stylesheet" href="../../public/style/estilo.css">

    <!--script para cambiar el contenido de un div dentro de la pagina principal-->
        
</head>
<body>
     	<div id="parte2" class="container-fluid">
     		
     		 <!-- registro de plan global-->
     		<div class="panel panel-default">
     	      <div class="panel-body">
     			 <h1><strong><center>Registrar Plan global</center></strong></h1>
         		 
         		 <form name="formPg2" method="post" action="#">
					 <fieldset> 
					 	<legend>Datos de Identificacion</legend> <!--titulo del fieldset-->
                         
                         <div class="form-group"><!--titulo de la seccion del formulario-->
                    	   <center> <label for="codigo"><h2>Carga Horaria</h2></label></center>
                         </div>
                         
                         <strong><h3>Seleccione los items que entraran en su descripcion</h3></strong>
                          
                          <div class="panel panel-default"> <!--campo para seleccionar la duracion de una materia en horas semestre-->
     	                    <div class="panel-body">
     	                        <label for="titulo">Horas semestre</label>
     	                        
     	                        <div class="row">   							
								    <div class="col-xs-6">
									    <input type="checkbox" id="checkboxEnLinea1" onclick="window.document.formPg2.hora_semestre.disabled='false' ">
										<input type="number" value="0" name="hora_semestre" min="0" max="360" disabled="disabled">
								    </div> 	                            	
								</div>

     	                    </div>
     	                  </div>	

     	                  <div class="panel panel-default"><!--campo para seleccionar la duracion de una materia en horas teoricas y practica por semana-->
     	                    <div class="panel-body">
     	                        <label for="titulo">Horas teoricas por semana</label>

     	                          <div class="row">   							
								    <div class="col-xs-6">
									    <input type="checkbox" id="checkboxEnLinea1">
										<input type="number" value="0" name="horas_teorica_semana" min="0" max="360">
								    </div> 	                            	
								  </div>							
								<br>

								<label for="titulo">Horas practicas por semana</label>
                     
									<div class="row">   							
									    <div class="col-xs-6">
										    <input type="checkbox" id="checkboxEnLinea1">
											<input type="number" value="0" name="horas_practica_semana" min="0" max="360">
									    </div> 	                            	
									</div>					
					

     	                    </div>
     	                  </div>	

     	                  <div class="panel panel-default"> <!--campo para seleccionar la duracion de una materia en periodos por semana-->
     	                    <div class="panel-body">
     	                        <label for="titulo">Periodos por semana</label>
     	                        <div class="row">   							
								    <div class="col-xs-6">
									    <input type="checkbox" id="checkboxEnLinea1">
										<input type="number" value="0" name="periodo_semana" min="0" max="360">
								    </div> 	                            	
								  </div>
     	                    </div>
     	                  </div>	

     	                  <div class="panel panel-default"> <!--campo para seleccionar la duracion de una materia en periodos teoricas y practicas por semana-->
     	                    <div class="panel-body">
     	                        <label for="titulo">Periodos teoricos por semana</label>
     	                        <div class="row">   							
								    <div class="col-xs-6">
									    <input type="checkbox" id="checkboxEnLinea1">
										<input type="number" value="0" name="periodo_teorico_semana" min="0" max="360">
								    </div> 	                            	
								  </div>
								<br>

								<label for="titulo">Periodos practicos por semana</label>
								<div class="row">   							
								    <div class="col-xs-6">
									    <input type="checkbox" id="checkboxEnLinea1">
										<input type="number" value="0" name="periodo_practico_semana" min="0" max="360">
								    </div> 	                            	
								  </div>
     	                    </div>
     	                  </div>	

					 </fieldset>
				 </form>
     	       </div> 	     		   
     		</div>
     		<div class="container-fluid">
     		 <nav>
     			<ul class="pager"> <!--campo para los paginadores para pasar a la continuacion del formulario-->
     			    <li class="previous"><a href="registrarPG.php">&larr;anterior</a></li>
     				<li class="next"><a href="#" onclick="cargar('#parte2', 'registrarPG3.php')">siguiente &rarr;</a></li>
     			</ul>
     		 </nav>

     		 <!--script para cambiar el contenido de un div dentro de la pagina principal-->  
     		    <script>
                 function cargar(div, desde)
		            {
		                 $(div).load(desde);
		            }
        		</script>
     	   </div>

     	</div>
      	
</body>
</html>
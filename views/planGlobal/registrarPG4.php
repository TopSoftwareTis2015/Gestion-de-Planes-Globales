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
	
	<div id="parte4" class="contaniner-fluid">
     		
     		<!-- registro de plan global-->
           <div class="panel panel-default">
     	       <div class="panel-body">
     			 <h1><strong><center>Registrar Plan global</center></strong></h1>
                 <!-- titulo de la seccion del formulario del plan global--> 
         		 <strong><h2>SELECCION Y ORGANIZACION DE CONTENIDOS</h2></strong>
                 <br>
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

                         <form name="formPg6" method="post" action="#">
                             <fieldset>
                                <legend>CONTENIDO</legend>
                                 <form name="formPg7" method="post" action="#">
                                     <fieldset>
                                        <legend>Capitulo 1</legend>
                                         <div class="form-group">
                                          <label for="nombre">Titulo del capitulo:</label><!--titulo de los capitulos de una unidad-->
                                          <input class="form-control" type="text" id="tituloCapitulo" required>
                                         </div>
                                         <div class="form-group">
                                           <label for="codigo">Subtitulo:</label> <!--subtemas que tendra una unidad-->
                                           <input class="form-control" type="text" id="subtitulo" required>
                                         </div>
                                         <!--boton para añadir nuevos subtitulos a un capitulo del temario-->
                                         <button class="submit btn btn-primary" type="submit">Añadir Subtitulo</button>

                                     </fieldset>
                                </form>
                             </fieldset>
                             <br>
                             <!--boton para añadir mas capitulo a un unidad-->
                             <button class="submit btn btn-primary" type="submit">Añadir Capitulo</button>
                        </form>
                     </fieldset>
                </form> 
                <br>
                <!--boton para añadir una nueva unidad de una materia-->
                <button class="submit btn btn-primary" type="submit">Añadir Unidad</button>
           </div> 	     		   
        </div>
     		<div class="container-fluid">
     		  <nav>
     			<ul class="pager"><!--campo para los paginadores para pasar a la continuacion del formulario-->
                <li class="previous disable"><a href="#" onclick="cargar('#parte4', 'registrarPG3.php')">&larr;anterior</a></li>
                    <li class="next"><a href="#" onclick="cargar('#parte4', 'registrarPG5.php')">siguiente &rarr;</a></li>
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

    <!--importantando las librerias para trabajar con jquery y javascript de bootstrap-->
	<script src="../../public/js/jquery.js"></script>
    <script src="../../public/js/jquery.min.js"></script>
	<script src="../../public/js/bootstrap.min.js"></script>
</body>
</html>
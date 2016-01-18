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
     	<div id="parte3" class="container-fluid">
     		
     		 <!-- registro de plan global-->
     		 <div class="panel panel-default">
     	      <div class="panel-body">
     			 <h1><strong><center>Registrar Plan global</center></strong></h1>
         		 <strong><h2>JUSTIFICACION</h2></strong><!--seccion para ingresar la informacion de justificacion del plan global dentro de un textarea-->
                 <textarea class="form-control"name="" id="justificacion" cols="100" rows="10"></textarea>
                 <br>
                 <strong><h2>OBJETIVOS GENERALES</h2></strong> <!--campos para ingresar los objetivos generales -->
                 <form name="formPg3" method="post" action="#">
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
                     </fieldset>
                </form>
                <button class="submit btn btn-primary" type="submit">Añadir un objetivo</button>
                <br>
                <strong><h2>OBJETIVOS EXPECIFICOS</h2></strong> <!--campos para ingresar los objetivos especificos-->
                <form name="formPg4" method="post" action="#">
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
                           <textarea class="form-control"name="" id="descripcion" cols="100" rows="5"></textarea>
                         </div>
                     </fieldset>
                </form>
                <button class="submit btn btn-primary" type="submit">Añadir un objetivo</button>

             </div> 	     		   
     	  </div>
     		<div class="container-fluid">
     		  <nav>
     			<ul class="pager"><!--campo para los paginadores para pasar a la continuacion del formulario-->
     				<li class="previous disable"><a href="#" onclick="cargar('#parte3', 'registrarPG2.php')">&larr;anterior</a></li>
                    <li class="next"><a href="#" onclick="cargar('#parte3', 'registrarPG4.php')">siguiente &rarr;</a></li>
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
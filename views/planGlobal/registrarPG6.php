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
	 	<div id="parte6" class="container-fluid">
     		
     		<!-- registro de plan global-->
           <div class="panel panel-default">
     	       <div class="panel-body">
     			  <h1><strong><center>Registrar Plan global</center></strong></h1>
         		  <strong><h2>BIBLIOGRAFIA BASE</h2></strong>
                  <fieldset><!--seccion para ingresar bibliografia de apoyo para la materia-->
                    <form name="formPg7" method="post" action="#">
                      <legend>Objetivo 1</legend>
                      <div class="form-group"><!--titulo de la bibliografia-->
                           <label for="nombre">Titulo de objetivo</label>
                           <input class="form-control" type="text" id="tituloCap" required>
                       </div>
                       <div class="form-group"> <!--descripcion del contenido de la bibliografia-->
                            <label for="codigo">Descripcion</label>
                            <input class="form-control" type="text" id="descripcion" required>
                       </div>
                       <button class="submit btn btn-primary" type="submit" required>Añadir objetivo</button>
                      </form> 
                  </fieldset>
                  <br>
                  
                  <strong><h2>BIBLIOGRAFIA COMPLEMENTARIA</h2></strong>
                  <fieldset>
                    <form name="formPg6" method="post" action="#">
                      <legend>Objetivo</legend>
                      <div class="form-group"><!--titulo de la bibliografia complementaria-->
                           <label for="nombre">Titulo de objetivo</label>
                           <input class="form-control" type="text" id="tituloCap2" required>
                       </div>
                       <div class="form-group"><!--campo para ingresar una pequeña descripcion de la bibliografia-->
                            <label for="codigo">Descripcion</label>
                            <input class="form-control" type="text" id="descripcion2" required>
                       </div>
                       <button class="submit btn btn-primary" type="submit" required>Añadir objetivo</button>
                     </form>
                  </fieldset>
               </div> 	     		   
            </div>
     		
            <div class="container-fluid">
     		  <nav>
     			<ul class="pager"><!--campo para los paginadores para pasar a la continuacion del formulario-->
     				<li class="previous disable"><a href="#" onclick="cargar('#parte6', 'registrarPG5.php')">&larr;anterior</a></li>
            <li class="next"><a href="#" onclick="cargar('#parte6', 'registrarPG7.php')">siguiente &rarr;</a></li>
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
	<!--importantando las librerias para trabajar con jquery y javascript de bootstrap-->
	<script src="../../public/js/jquery.js"></script>
  <script src="../../public/js/jquery.min.js"></script>
	<script src="../../public/js/bootstrap.min.js"></script>
</body>
</html>
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
	
	 	<div id="parte5" class="container-fluid">
     		
     		<!-- registro de plan global-->
           <div class="panel panel-default">
     	        <div class="panel-body">
     			 <h1><strong><center>Registrar Plan global</center></strong></h1>
         		 <strong><h2>METODOLOGIAS</h2></strong>
                 <!--campo para ingresara las metologias que se usaran para dictar una materia-->
                 <textarea class="form-control"name="" id="metodologias" cols="100" rows="10"></textarea>
                 <br>
                  
                 <strong><h2>Cronograma o Duracion en periodos academicos por Unidad</h2></strong>
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
            
                 <strong><h2>CRITERIOS DE EVALUACION</h2></strong>
                 <!--textarea para ingresar la informacion de criterio de evaluacion de una materia-->
                 <textarea class="form-control"name="" id="criterios" cols="100" rows="10"></textarea>
                 <br>
                 
            </div> 	     		   
        </div>
     		<div class="container-fluid">
     		  <nav>
     			<ul class="pager"><!--campo para los paginadores para pasar a la continuacion del formulario-->
                <li class="previous disable"><a href="#" onclick="cargar('#parte5', 'registrarPG4.php')">&larr;anterior</a></li>
                    <li class="next"><a href="#" onclick="cargar('#parte5', 'registrarPG6.php')">siguiente &rarr;</a></li>
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
	 
     	<div id="parte7" class="container-fluid">
     		
     		<!-- registro de plan global-->
           <div class="panel panel-default">
     	       <div class="panel-body">
     			  <h1><strong><center>Registrar Plan global</center></strong></h1>
         		  <strong><h2>SECCIONES ADICIONALES</h2></strong>
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
                  <fieldset>
                      <legend>CONTENIDO</legend>
                       <fieldset>
                          <form name="formPg6" method="post" action="#">
                            <legend>Contenido 1</legend>
                            <div class="form-group">
                                 <label for="nombre">Titulo del contenido</label>
                                 <input class="form-control" type="text" id="tituloContenido" required>
                             </div>
                             <div class="form-group">
                                  <label for="codigo">Descripcion del contenido</label>
                                  <input class="form-control" type="text" id="descripcionContenido" required>
                             </div>
                             <div class="form-group">
                                  <label for="codigo">Subtitulo 1</label>
                                  <input class="form-control" type="text" id="subtitulo1" required>
                             </div>
                             <button class="submit btn btn-primary" type="submit" required>Añadir objetivo</button>
                           </form>
                       </fieldset>
                       <br>
                       <button class="submit btn btn-primary" type="submit" required>Añadir contenido</button>
                  </fieldset>

               </fieldset>
                  <br>
                                 
               </div> 
                <button class="submit btn btn-primary" type="submit" required>Añadir Contenido</button>
                <br>
                <button class="submit btn btn-primary" type="submit" required>Registrar Plan Global</button>     		   
            </div>


     		
            <div class="container-fluid">
     		  <nav>
     			<ul class="pager"><!--campo para los paginadores para pasar a la continuacion del formulario-->
     				<li class="previous"><a href="#" onclick="cargar('#parte7', 'registrarPG6.php')">&larr;anterior</a></li>
            <li class="next disable"><a href="#">siguiente &rarr;</a></li>
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

<!-- parte 4 -->
<strong><h2>SELECCION Y ORGANIZACION DE CONTENIDOS</h2></strong>
<br>
<div>
<!-- <form name="formPg5" method="post" action="#"> -->
  <div class="container-fluid" id="unidad">
    <fieldset id="container_unidad1" data-numero-unidad="1">
      <legend>Unidad 1</legend>  
      <div class="form-group">
        <label for="titulo_unidad1">Titulo de la unidad:</label> 
        <!--Titulo de la unidad que tendra el temario para la materia-->
        <input class="form-control" type="text" name="titulo_unidad1" id="titulo_unidad1" required
                onkeyup="actualizarUnidadCronograma('container_unidad1');">
      </div>
      <div class="form-group">
        <label for="objetivo_unidad1">Objetivo:</label><!--campo para describir la unidad de avance de una materia-->
        <textarea class="form-control"name="objetivo_unidad1" id="objetivo_unidad1" cols="100" rows="3"></textarea>
      </div>

      <div>      
        <div class="container-fluid recuadro">
              <legend>CONTENIDO</legend>
          <div id="contenido_unidad1"></div>
        </div>
        <br>
      </div>
    <input class="btn btn-primary pull-right" type="button" value="Añadir Capitulo" onClick="addCapitulo('contenido_unidad1');">
    <br> <br>     
    </fieldset>
  </div>
</div>
<br>

<!--boton para añadir una nueva unidad de una materia-->
<button class="btn btn-primary" type="button" onClick="addUnidad('unidad');" >Añadir Unidad</button>
<!--Fin parte 4-->


            <!-- <fieldset id="container_contenido1_unidad1" data-numero-contenido="1">
                
                <div class="clearfix">
                  <legend>Capitulo 1</legend>

                  <div class="form-group">
                    <label for="titulo_contenido1_unidad1">Titulo del capitulo:</label>
                    <input class="form-control" type="text" name="titulo_contenido1_unidad1" id="titulo_contenido1_unidad1" required>
                  </div>
                  
                  <div id="subtitulo_contenido1_unidad1">
                    <div class="form-group col-md-6 col-md-offset-3" id="container_subtitulo1_contenido1_unidad1" data-numero-subtitulo="1">
                      <label for="subtitulo1_contenido1_unidad1">Subtitulo:</label>
                      <input class="form-control" type="text" name="subtitulo1_contenido1_unidad1" id="subtitulo1_contenido1_unidad1" required>
                    </div>
                  </div>

                  <input class="btn btn-primary col-md-6 col-sm-6 col-xs-6 col-md-offset-3" type="button" value="Añadir Subtitulo" onclick="addSubtitulo('subtitulo_contenido1_unidad1');">
                  
                </div>
            </fieldset> -->
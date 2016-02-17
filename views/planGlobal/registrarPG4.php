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
      <!--<form name="formPg7" method="post" action="#">-->

      <div class="clearfix">
        <legend>Capitulo 1</legend>

        <div class="form-group">
          <label for="nombre">Titulo del capitulo:</label>
          <input class="form-control" type="text" id="tituloCapitulo" required>
        </div>

        <div class="form-group col-md-6 col-md-offset-3" id="aSubtitulo1">
          <label for="codigo">Subtitulo:</label>
          <input class="form-control" type="text" id="subtitulo" required>
        </div>

        <input class="btn btn-primary col-md-6 col-sm-6 col-xs-6 col-md-offset-3" type="button" value="Añadir Subtitulo" onclick="addInput2('new_subtitulo',1);">

      </div>


      <!--</form>-->
      </div>
  </fieldset>
  <br>
  <!--boton para añadir mas capitulo a un unidad-->
  <input class="btn btn-primary pull-right" type="button" value="Añadir Capitulo" onClick="addInput3('new_capitulo');">
  <br>     
  </form>
 </div>
</fieldset>
</form> 
<br>
</div>
<!--boton para añadir una nueva unidad de una materia-->
<button class="btn btn-primary" type="button" onClick="addUnidad('new_unidad');" >Añadir Unidad</button>
<!--Fin parte 4-->
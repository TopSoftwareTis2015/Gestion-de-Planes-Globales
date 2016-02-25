<!--Parte 3-->  
<legend id="separador"><h3>JUSTIFICACION</h3></legend><!--seccion para ingresar la informacion de justificacion del plan global dentro de un textarea-->
  <textarea class="form-control"name="justificacion" id="justificacion" cols="100" rows="10"></textarea>
  <br>
<legend id="separador"><h3>OBJETIVOS GENERALES</h3></legend> <!--campos para ingresar los objetivos generales -->
  <!--<form name="formPg3" method="POST" action="">-->
    <div class="container-fluid" id="objetivo_general">
        <fieldset data-numero-objetivo="1" id="container_objetivo_general1">
          
          <!--titulo del objetivo general-->
          <legend>Objetivo 1</legend>
          <div class="form-group">
            <label for="titulo_objetivo_general1">Titulo:</label>
            <input class="form-control" type="text" name="titulo_objetivo_general1" id="titulo_objetivo_general1" required>
          </div>
          
          <!--campo para la descripcion del objetivo general-->
          <div class="form-group">
            <label for="descripcion_objetivo_general1">Descripcion:</label>
            <textarea class="form-control" name="descripcion_objetivo_general1" id="descripcion_objetivo_general1" cols="100" rows="5"></textarea>
          </div>

        </fieldset>
    </div>
    <input class="btn btn-primary" type="button" value="añadir nuevo Objetivo" onClick="addObjetivo('objetivo_general');" >                                            
  <!--</form>-->                
  <br>

<legend id="separador"><h3>OBJETIVOS ESPECIFICOS</h3></legend> <!--campos para ingresar los objetivos especificos-->
  <!--<form name="formPg4" method="post" action="#">-->
    <div class="container-fluid" id="objetivo_especifico">
      <fieldset data-numero-objetivo="1" id="container_objetivo_especifico1">
        <!--titulo del objetivo especifico -->
        <legend>Objetivo 1</legend>
        <div class="form-group">
          <label for="titulo_objetivo_especifico1">Titulo:</label>
          <input class="form-control" name="titulo_objetivo_especifico1" type="text" id="titulo_objetivo_especifico1" required>
        </div>
        <!--descripcion del objetivo especifico-->
        <div class="form-group">
          <label for="descripcion_objetivo_especifico1">Descripcion:</label>
           <textarea class="form-control" name="descripcion_objetivo_especifico1" id="descripcion_objetivo_especifico1"cols="100" rows="5"></textarea>
        </div>
      </fieldset>    
    </div>
    
                         
    <input class="btn btn-primary" type="button" value="añadir nuevo Objetivo" onClick="addObjetivo('objetivo_especifico');">
  <!--</form>-->
<!--Fin Parte 3-->
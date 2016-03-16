<!--Parte 3-->  
<legend id="separador"><h3>JUSTIFICACION</h3></legend><!--seccion para ingresar la informacion de justificacion del plan global dentro de un textarea-->
  <textarea class="form-control"name="justificacion" id="justificacion" cols="100" rows="10"></textarea>
  <br>
<legend id="separador"><h3>OBJETIVOS GENERALES</h3></legend> <!--campos para ingresar los objetivos generales -->
  <!--<form name="formPg3" method="POST" action="">-->
    <div class="container-fluid" id="objetivo_general">
        <fieldset data-numero-objetivo="1" id="container_objetivo1_general">
          
          <!--titulo del objetivo general-->
          <legend>Objetivo 1</legend>
          <div class="form-group">
            <label for="titulo_objetivo1_general">Titulo:</label>
            <input class="form-control" type="text" name="titulo_objetivo1_general" id="titulo_objetivo1_general" required>
          </div>
          
          <!--campo para la descripcion del objetivo general-->
          <div class="form-group">
            <label for="descripcion_objetivo1_general">Descripcion:</label>
            <textarea class="form-control" name="descripcion_objetivo1_general" id="descripcion_objetivo1_general" cols="100" rows="5"></textarea>
          </div>

        </fieldset>
        
    </div>
    <input class="btn btn-primary" type="button" value="añadir nuevo Objetivo" onClick="addObjetivo('objetivo_general');" >                                            
  <!--</form>-->                
  <br>

<legend id="separador"><h3>OBJETIVOS ESPECIFICOS</h3></legend> <!--campos para ingresar los objetivos especificos-->
  <!--<form name="formPg4" method="post" action="#">-->
    <div class="container-fluid" id="objetivo_especifico"></div>
    
                         
    <input class="btn btn-primary" type="button" value="añadir nuevo Objetivo" onClick="addObjetivo('objetivo_especifico');">
  <!--</form>-->
<!--Fin Parte 3-->

      <!-- <fieldset data-numero-objetivo="1" id="container_objetivo1_especifico">
        <legend>Objetivo 1</legend>
        <div class="form-group">
          <label for="titulo_objetivo1_especifico">Titulo:</label>
          <input class="form-control" name="titulo_objetivo1_especifico" type="text" id="titulo_objetivo1_especifico" required>
        </div>
        <div class="form-group">
          <label for="descripcion_objetivo1_especifico">Descripcion:</label>
           <textarea class="form-control" name="descripcion_objetivo1_especifico" id="descripcion_objetivo1_especifico"cols="100" rows="5"></textarea>
        </div>
      </fieldset>  -->   
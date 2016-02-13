<!--Parte 3-->
<legend id="separador"><h3>JUSTIFICACION</h3></legend><!--seccion para ingresar la informacion de justificacion del plan global dentro de un textarea-->
  <textarea class="form-control"name="" id="justificacion" cols="100" rows="10"></textarea>
  <br>
<legend id="separador"><h3>OBJETIVOS GENERALES</h3></legend> <!--campos para ingresar los objetivos generales -->
  <form name="formPg3" method="POST" action="">
    <div class="container-fluid" id="objetivoG">
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
    </div>
    <input class="btn btn-primary" type="button" value="añadir nuevo Objetivo" onClick="addInput('obj_general');" >                                            
  </form>                
  <br>

<legend id="separador"><h3>OBJETIVOS ESPECIFICOS</h3></legend> <!--campos para ingresar los objetivos especificos-->
  <form name="formPg4" method="post" action="#">
    <div class="container-fluid" id="objetivoE">
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
          <textarea class="form-control" name="descripcion" cols="100" rows="5"></textarea>
        </div>
      </fieldset>    
    </div>
                         
    <input class="btn btn-primary" type="button" value="añadir nuevo Objetivo" onClick="addInput('obj_especifico');">                                    
  </form>
<!--Fin Parte 3-->               
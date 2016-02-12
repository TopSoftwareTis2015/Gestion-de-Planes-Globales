<div class="container-fluid">
  
<!--Parte 2-->
<legend id="separador">Carga Horaria</legend> <!--titulo del fieldset-->
  
  <!--titulo de la seccion del formulario-->                         
  <div class="form-group">
    <label for="codigo"><h3>Seleccione los items que entraran en su descripcion</h3></label>
  </div>
                         
  <div class="col-xs-6">  
    <div class="panel panel-default"> <!--campo para seleccionar la duracion de una materia en horas semestre-->
      <div class="panel-body">
        <label for="titulo">Horas semestre</label>
                                        
        <div class="row">                              
          <input type="checkbox" id="checkboxEnLinea1" onchange="deshabilitarCampoTexto(this.checked, 'hSemestre');">
          <input id="horaSemestre" type="number" value="0" name="hora_semestre" min="0" max="360" disabled>                                                                    
        </div>

      </div>
    </div>    

    <div class="panel panel-default"><!--campo para seleccionar la duracion de una materia en horas teoricas y practica por semana-->
      <div class="panel-body">

        <label for="titulo">Horas teoricas por semana</label>
        <div class="row">                                               
          <input type="checkbox" id="checkboxEnLinea1" onchange="deshabilitarCampoTexto(this.checked, 'hTeorica');">
          <input id="horaTeorica" type="number" value="0" name="horas_teorica_semana" min="0" max="360" disabled>                                                                    
        </div>                            
        <br>

        <label for="titulo">Horas practicas por semana</label>
        <div class="row">                                                                 
          <input type="checkbox" id="checkboxEnLinea1" onchange="deshabilitarCampoTexto(this.checked, 'hPractica');">
          <input id="horaPractica" type="number" value="0" name="horas_practica_semana" min="0" max="360" disabled>                                                                         
        </div>

      </div>
    </div>   

 </div> 
 <!--Fin de la primera columna de la carga horaria-->

  <div class="col-xs-6">  
    <div class="panel panel-default"> <!--campo para seleccionar la duracion de una materia en periodos por semana-->
      <div class="panel-body">
        <label for="titulo">Periodos por semana</label>
        <div class="row">                               
          <input type="checkbox" id="checkboxEnLinea1" onchange="deshabilitarCampoTexto(this.checked, 'pSemana');">
          <input id="periodoSemana" type="number" value="0" name="periodo_semana" min="0" max="360" disabled>                                      
        </div>
      </div>
    </div>    
                            
    <div class="panel panel-default"> <!--campo para seleccionar la duracion de una materia en periodos teoricas y practicas por semana-->
      <div class="panel-body">

        <label for="titulo">Periodos teoricos por semana</label>
        <div class="row">                                                                   
          <input type="checkbox" id="checkboxEnLinea1" onchange="deshabilitarCampoTexto(this.checked, 'pTeorico');">
          <input id="periodoTeorico" type="number" value="0" name="periodo_teorico_semana" min="0" max="360" disabled>                                  
        </div>
        <br>

        <label for="titulo">Periodos practicos por semana</label>
        <div class="row">                                                                     
          <input type="checkbox" id="checkboxEnLinea1" onchange="deshabilitarCampoTexto(this.checked, 'pPractico');">
          <input id="periodoPractico" type="number" value="0" name="periodo_practico_semana" min="0" max="360" disabled>                                                                     
        </div>
      
      </div>                            
    </div>

  </div>    
  <!--Fin Parte 2-->

</div>
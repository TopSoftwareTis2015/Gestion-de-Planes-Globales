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
          <input type="checkbox" id="checkboxEnLinea1" onchange="cambiarEstado(this.checked, 'horaSemestre');">
          <input id="horaSemestre" type="number" name="horas_semestre" min="0" max="360" disabled>                                                                    
        </div>

      </div>
    </div>    

    <div class="panel panel-default">

     <div class="panel-body">

        <label for="titulo">Horas teoricas por semana</label>
        <div class="row">                                               
          <input type="checkbox" id="checkboxEnLinea2" onchange="cambiarEstadoPorPar(this.checked, 'horaTeorica', 'horaPractica', 'checkboxEnLinea3');">
          <input id="horaTeorica" type="number" name="horas_teoricas_semana" min="0" max="360" disabled>                                                                    
        </div>                            
        <br>

        <label for="titulo">Horas practicas por semana</label>
        <div class="row">                                                                 
          <input type="checkbox" id="checkboxEnLinea3" onchange="cambiarEstadoPorPar(this.checked, 'horaPractica', 'horaTeorica', 'checkboxEnLinea2');">
          <input id="horaPractica" type="number" name="horas_practicas_semana" min="0" max="360" disabled>                                                                         
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
          <input type="checkbox" id="checkboxEnLinea4" onchange="cambiarEstado(this.checked, 'periodoSemana');">
          <input id="periodoSemana" type="number" name="periodos_semana" min="0" max="10" disabled>                                      
        </div>
      </div>
    </div>    
                            
    <div class="panel panel-default"> 
    
      <div class="panel-body">

        <label for="titulo">Periodos teoricos por semana</label>
        <div class="row">                                                                   
          <input type="checkbox" id="checkboxEnLinea5" onchange="cambiarEstadoPorPar(this.checked, 'periodoTeorico', 'periodoPractico', 'checkboxEnLinea6');">
          <input id="periodoTeorico" type="number" name="periodos_teoricos_semana" min="0" max="360" disabled>                                  
        </div>
        <br>

        <label for="titulo">Periodos practicos por semana</label>
        <div class="row">                                                                     
          <input type="checkbox" id="checkboxEnLinea6" onchange="cambiarEstadoPorPar(this.checked, 'periodoPractico', 'periodoTeorico', 'checkboxEnLinea5');">
          <input id="periodoPractico" type="number" name="periodos_practicos_semana" min="0" max="360" disabled>                                                                     
        </div>
      
      </div>                            
    </div>

  </div>    
  <!--Fin Parte 2-->

</div>
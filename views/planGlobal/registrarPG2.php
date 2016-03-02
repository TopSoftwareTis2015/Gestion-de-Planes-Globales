<div class="container-fluid">
  
<!--Parte 2-->
<legend id="separador">Carga Horaria</legend> <!--titulo del fieldset-->
  
  <!--titulo de la seccion del formulario-->                         
  <div class="form-group">
    <label for="codigo"><h3>Seleccione los items que entraran en su descripcion</h3></label>
  </div>
                         
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
                      
  </div>

  <div class="col-xs-6">  
    <div class="panel panel-default"> <!--campo para seleccionar la duracion de una materia en horas semestre-->
      <div class="panel-body">
        <label for="titulo">Periodos totales por semestre</label>
        <div class="row">
          <input id="horaSemestre" type="text" name="horas_semestre" value="120" size="5" readonly required>
        </div>
      </div>
    </div>    

 </div>
  
 <div class="container-fluid">
    <div class="col-xs-6">
      <label for="titulo">Periodos teoricos por semana</label>
      <div class="row">                                                                   
        <input type="checkbox" id="checkboxEnLinea5" onchange="cambiarEstadoPorPar(this.checked, 'periodoTeorico', 'periodoPractico', 'checkboxEnLinea6');">
        <input id="periodoTeorico" type="number" name="periodos_teoricos_semana" min="0" max="360" onblur="verificar();" disabled>                               
      </div>

    </div>

    <div class="col-xs-6">
      <label for="titulo">Periodos practicos por semana</label>
      <div class="row">                                                                     
        <input type="checkbox" id="checkboxEnLinea6" onchange="cambiarEstadoPorPar(this.checked, 'periodoPractico', 'periodoTeorico', 'checkboxEnLinea5');">
        <input id="periodoPractico" type="number" name="periodos_practicos_semana" min="0" max="360" disabled>                                                                     
      </div>
    </div>     
 </div> <br>
 <span id="alerta_cargahoraria" style='display:none;' class="label label-danger">No debe pasarse la duracion de periodo por semana que se establecio</span>

 <script>
   function verificar(){
     // var dur_semana = parseInt(document.getElementById('periodoSemana').value);
     // var dur_teorica_semana = parseInt(document.getElementById('periodoTeorico').value);
     // var dur_practica_semana = parseInt(document.getElementById('periodoPractico').value);

     // if (dur_semana < (dur_practica_semana + dur_teorica_semana) ){
     //   document.getElementById('alerta_cargahoraria').style.display = 'block';
     // }else{
     //   document.getElementById('alerta_cargahoraria').style.display = 'none'; 
     // }
   }
 </script>
 <!--Fin de la primera columna de la carga horaria-->

  <!--Fin Parte 2-->

</div>
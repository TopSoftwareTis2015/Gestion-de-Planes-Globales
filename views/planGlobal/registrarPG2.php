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
          <input id="periodoSemana" type="number" name="periodos_semana" min="4" max="10" disabled>                                      
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
        <input id="periodoTeorico" type="number" name="periodos_teoricos_semana" min="0" max="360" onkeyup="verificar();" disabled>                               
      </div>

    </div>

    <div class="col-xs-6">
      <label for="titulo">Periodos practicos por semana</label>
      <div class="row">                                                                     
        <input type="checkbox" id="checkboxEnLinea6" onchange="cambiarEstadoPorPar(this.checked, 'periodoPractico', 'periodoTeorico', 'checkboxEnLinea5');">
        <input id="periodoPractico" type="number" name="periodos_practicos_semana" min="0" max="360" onkeyup="verificar();" disabled>                                                                     
      </div>
    </div>     
 </div> <br>
 <span id="error_carga_horaria" class="label label-danger"></span>
 <!-- <span id="alerta_cargahoraria" style='display:none;' class="label label-danger">No debe pasarse la duracion de periodo por semana que se establecio</span> -->

 <script>
   function verificar(){
     var dur_semana = parseInt(document.getElementById('periodoSemana').value);
     var dur_teorica_semana = document.getElementById('periodoTeorico').value;
     var dur_practica_semana = document.getElementById('periodoPractico').value;

     if (dur_practica_semana=='') {
       dur_practica_semana=0;
     }
     if (dur_teorica_semana=='') {
      dur_teorica_semana=0;
     }
     var sem = parseInt(dur_semana);
     var p = parseInt(dur_practica_semana);
     var t = parseInt(dur_teorica_semana);


     if (sem < p){
       //document.getElementById('alerta_cargahoraria').style.display = 'block';
       actualizarError("error_carga_horaria", "No debe pasar la duracion de periodos por semanas establecidos.");
       
     }else{
       if (sem < t) {
         //document.getElementById('alerta_cargahoraria').style.display = 'block'; 
       }else{
         if (sem < (t + p)) {
           //document.getElementById('alerta_cargahoraria').style.display = 'block'; 
          actualizarError("error_carga_horaria", "No debe pasar la duracion de periodos por semanas establecidos.");
         }else{
           //document.getElementById('alerta_cargahoraria').style.display = 'none'; 
          actualizarError("error_carga_horaria", "");
         }
       }
     }
   }
 </script>
 <!--Fin de la primera columna de la carga horaria-->

  <!--Fin Parte 2-->

</div>
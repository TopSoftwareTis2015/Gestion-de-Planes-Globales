<!--Parte 2-->
<div class="container-fluid">
  
<legend id="separador">Carga Horaria</legend>
  
  <!--titulo de la seccion del formulario-->                         
  <div class="form-group">
    <label for="codigo"><h3>Seleccione los items que entraran en su descripcion</h3></label>
  </div>
                         
    <div class="col-xs-6">  
    <div class="panel panel-default"> <!--campo para seleccionar la duracion de una materia en periodos por semana-->
      <div class="panel-body">
        <label for="titulo">Periodos por semana</label>
        <div class="row">
        <?php
          if($this->carga_horaria['periodos_semana'])
            $checkedS = " checked";            
          else
            $disabledS = " disabled";
         ?>                               
          <input type="checkbox" id="checkboxEnLinea4" onchange="cambiarEstado(this.checked, 'periodoSemana');"
            <?php if(isset($checkedS))echo $checkedS; ?>>
          <input id="periodoSemana" type="number" name="periodos_semana" min="4" max="10"
            <?php if(isset($disabledS))echo $disabledS; else echo " value=\"". $this->carga_horaria['periodos_semana'] . "\"";?>>
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
  <?php
  if($this->carga_horaria['periodos_teoricos_semana'])
    $checked = " checked";
  else
    $disabled = " disabled";
  ?> 
 <div class="container-fluid">
    <div class="col-xs-6">
      <label for="titulo">Periodos teoricos por semana</label>
      <div class="row">                                                                   
        <input type="checkbox" id="checkboxEnLinea5" onchange="cambiarEstadoPorPar(this.checked, 'periodoTeorico', 'periodoPractico', 'checkboxEnLinea6');"
          <?php if(isset($checked))echo $checked; ?>>
        <input id="periodoTeorico" type="number" name="periodos_teoricos_semana" min="0" max="360" onkeyup="verificar();"
          <?php if(isset($disabled))echo $disabled; else echo " value=\"". $this->carga_horaria['periodos_teoricos_semana'] . "\"";?>>                               
      </div>

    </div>

    <div class="col-xs-6">
      <label for="titulo">Periodos practicos por semana</label>
      <div class="row">                                                                     
        <input type="checkbox" id="checkboxEnLinea6" onchange="cambiarEstadoPorPar(this.checked, 'periodoPractico', 'periodoTeorico', 'checkboxEnLinea5');"
          <?php if(isset($checked))echo $checked; ?>>
        <input id="periodoPractico" type="number" name="periodos_practicos_semana" min="0" max="360" onkeyup="verificar();"
          <?php if(isset($disabled))echo $disabled; else echo " value=\"". $this->carga_horaria['periodos_practicos_semana'] . "\"";?>>
      </div>
    </div>     
 </div> <br>
 <span id="error_carga_horaria" class="label label-danger"></span>
 <!-- <span id="alerta_cargahoraria" style='display:none;' class="label label-danger">No debe pasarse la duracion de periodo por semana que se establecio</span> -->

 <script>
   function verificar(){
    var dur_semana = document.getElementById('periodoSemana').value;    
    var dur_teorica_semana = document.getElementById('periodoTeorico').value;
    var dur_practica_semana = document.getElementById('periodoPractico').value;
    
    if (dur_practica_semana=='') {
      dur_practica_semana=0;
    }
    if (dur_teorica_semana=='') {
      dur_teorica_semana=0;
    }
    if (dur_semana=='') {
      dur_semana=0;
    }
       
    var sem = parseInt(dur_semana);
    var p = parseInt(dur_practica_semana);
    var t = parseInt(dur_teorica_semana);

    if (sem < (t + p)) {
      actualizarError("error_carga_horaria", "No debe pasar la duracion de periodos por semanas establecidos.");
    }else{ 
      actualizarError("error_carga_horaria", "");
    }

     // if (sem < p){
     //   actualizarError("error_carga_horaria", "No debe pasar la duracion de periodos por semanas establecidos.");
         //document.getElementById('alerta_cargahoraria').style.display = 'block';
     // }

   }
 </script>

</div>
<!--Fin Parte 2-->
 <!-- Metodologia y criterios parte 5 -->
<legend id="separador"><h2>METODOLOGIAS</h2></legend>
    <!--campo para ingresara las metologias que se usaran para dictar una materia-->
    <textarea class="form-control" name="metodologias" id="metodologias" cols="100" rows="10"><?php echo $this->planGlobal['metodologias']; ?></textarea>
    <br>
                  
<legend id="separador"><h2>Cronograma o Duracion en periodos academicos por Unidad</h2></legend>
<div class="panel panel-default">
    <div class="table-responsive">
        <table class="table table-striped table-hover table-bordered" id="tab_cronograma">
            <thead>      
               <tr>
                   <th>UNIDAD</th>
                   <th>DURACION HRS. ACADEMICAS</th>
                   <th>DURACION SEMANAS</th>
               </tr>
            </thead>
            <tbody>
                <tr id="container_unidad1_fila">
                    <td id="container_unidad1_titulo"></td>
                    <td><input id="container_unidad1_horas" name="container_unidad1_horas" type="number" min="1" required onkeyup="sumar(this.value,this.id)"></td>
                    <td><input id="container_unidad1_semanas" name="container_unidad1_semanas" type="text" required readonly></td>
                </tr>
            </tbody>
        </table>
    </div> 
    
</div>
    <span id="error_cronograma" class="label label-danger"></span>

<script>
 function sumar(num,id){
   var tabla = document.getElementById("tab_cronograma"); 
   var total=0;
   var duracion_semana = 0; 
   if(document.getElementById("periodoSemana").value==''){
     actualizarError("error_cronograma", "Indique la duracion de periodos por semana en la seccion de carga horaria");        
   }else{

     duracion_semana=num / parseInt(document.getElementById("periodoSemana").value);
     var indice =id.substring(16,17);
     for(var j = 1;tabla.rows[j]; j++) {
     }

     for (var i = 1; i <parseInt(j); i++) {
      var dato=document.getElementById('container_unidad'+i+'_horas').value;
       if (dato=='') {
         dato=0;
       }
       total+=parseInt(dato);       
     } 
     // window.alert(total); 
     document.getElementById('container_unidad'+indice+'_semanas').value=duracion_semana;
     
     if (total>120) {
       // document.getElementById('alerta_cronograma').style.display = 'block';
       actualizarError("error_cronograma", "sobrepasa la duracion de horas academicas establecidas");
     }else{
       //document.getElementById('alerta_cronograma').style.display = 'none'; 
       actualizarError("error_cronograma", "");
     }
   }
 } 
</script>
<legend id="separador"><h2>CRITERIOS DE EVALUACION</h2></legend>
    <!--textarea para ingresar la informacion de criterio de evaluacion de una materia-->
    <textarea class="form-control" name="criterios_evaluacion" id="criterios" cols="100" rows="10"><?php echo $this->planGlobal['criterios_evaluacion']; ?></textarea>
    <br>
<!--Fin parte 5
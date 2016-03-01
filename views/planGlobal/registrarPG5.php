<!-- Metodologia y criterios parte 5 -->
<legend id="separador"><h2>METODOLOGIAS</h2></legend>
    <!--campo para ingresara las metologias que se usaran para dictar una materia-->
    <textarea class="form-control" name="metodologias" id="metodologias" cols="100" rows="10"></textarea>
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
                    <td><input id="container_unidad1_horas" name="container_unidad1_horas" type="number" min="1" required onblur="sumar(this.value,this.id)"></td>
                    <td><input id="container_unidad1_semanas" name="container_unidad1_semanas" type="text" required readonly></td>
                </tr>
            </tbody>
        </table>
    </div> 
    <span id="alerta_cronograma" style='display:none;' class="label label-danger">Sobrepasa los periodos academicos establecidos</span>
    
</div>

<script>
 function sumar(num,id){
   var tabla = document.getElementById("tab_cronograma");   
   var total=0;
   var duracion_semana = 0;
   duracion_semana=num / 6;
   var indice =id.substring(16,17);
   // parseInt(document.getElementById("input").rows[i].cells[2].innerText);
   
   document.getElementById('container_unidad'+indice+'_semanas').value=duracion_semana;
   total+=num;

   if (total>120) {
     document.getElementById('alerta_cronograma').style.display = 'block';
   }else{
     document.getElementById('alerta_cronograma').style.display = 'none'; 
   }
 
 
    // parseInt(document.getElementById(nombre).rows[i].cells[2].innerText);
    // if (periodo_semana=="") {
    //     window.alert('Ingrese el numero de periodos por semana asignada a la materia');
    // }else{

    
    //   for(var i = 1;tabla.rows[i]; i++) {
    //     var semana=Number(tabla.rows[i].cells[1].innerHTML) 
    //     total += semana;
    //     tabla.rows[i].cells[1].innerHTML= semana * parseInt(periodo_semana);
    //     if (total>20) {
    //       document.getElementById('alerta_cronograma').style.display = 'block';
    //     }else{
    //       document.getElementById('alerta_cronograma').style.display = 'none'; 
    //     }
    //   }
    // }
      
 } 
</script>

<legend id="separador"><h2>CRITERIOS DE EVALUACION</h2></legend>
    <!--textarea para ingresar la informacion de criterio de evaluacion de una materia-->
    <textarea class="form-control" name="criterios_evaluacion" id="criterios" cols="100" rows="10"></textarea>
    <br>
<!--Fin parte 5-->
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
                    <td><input id="container_unidad1_horas" name="container_unidad1_horas" type="number" min="1" required></td>
                    <td><input id="container_unidad1_semanas" name="container_unidad1_semanas" type="text" required></td>
                </tr>
            </tbody>
        </table>
    </div> 
    <span id="alerta_cronograma" style='display:none;' class="label label-danger">Sobrepasa los periodos academicos establecidos</span>
    
</div>

<script>
 function sumar(){
   var tabla = document.getElementById("tab_cronograma");   
   var total = 0;

 //   total = Number(tabla.rows[0].cells[2]);
 //   tabla.rows[0].cells[1] = total;
 //   // for(var i = 0;tabla.rows[i]; i++) {
 //   // total += Number(tabla.rows[i].cells[2]);
 //   // }
   
    var periodo_semana=document.getElementById("periodoSemana").value;
    if (periodo_semana=="") {
        window.alert('Ingrese el numero de periodos por semana asignada a la materia');
    }else{

     var x=tabla.getElementsByTagName("td");

      for(var i = 1;tabla.rows[i]; i++) {
        var semana=Number(tabla.rows[i].cells[2].innerHTML) 
        total += semana;
        tabla.rows[i].cells[1].innerHTML= semana * parseInt(periodo_semana);
        if (total>20) {
          document.getElementById('alerta_cronograma').style.display = 'block';
        }else{
        document.getElementById('alerta_cronograma').style.display = 'none'; 
        }
      }
    }
      
    // x[14].innerHTML=parseInt(dato1) * 1.5;
 } 
</script>

<legend id="separador"><h2>CRITERIOS DE EVALUACION</h2></legend>
    <!--textarea para ingresar la informacion de criterio de evaluacion de una materia-->
    <textarea class="form-control" name="criterios_evaluacion" id="criterios" cols="100" rows="10"></textarea>
    <br>
<!--Fin parte 5-->
            <!-- <tr>
                <td>Elementos de Progamacion</td>
                <td></td>
                <td contenteditable="true" onblur="sumar();"></td>
            </tr>
            <tr>
                <td>Unidad ..3</td>
                <td></td>
                <td contenteditable="true" onblur="sumar();"></td>
            </tr>
            <tr>
                <td>Unidad ..4</td>
                <td></td>
                <td contenteditable="true" onblur="sumar();"></td>
            </tr>
            <tr>
                <td>Unidad ..5</td>
                <td></td>
                <td contenteditable="true" onblur="sumar();"></td>
            </tr> -->
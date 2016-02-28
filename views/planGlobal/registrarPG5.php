<!-- Metodologia y criterios parte 5 -->
<legend id="separador"><h2>METODOLOGIAS</h2></legend>
    <!--campo para ingresara las metologias que se usaran para dictar una materia-->
    <textarea class="form-control" name="metodologias" id="metodologias" cols="100" rows="10"></textarea>
    <br>
                  
<legend id="separador"><h2>Cronograma o Duracion en periodos academicos por Unidad</h2></legend>
<div class="panel panel-default">
    <div class="table-responsive">
        <table class="table table-striped table-hover table-bordered" id="tab_cronograma">
            <tr><!--nombre de las columnas de la tabla para el cronograma-->
                <th>UNIDAD</th>
                <th>DURACION HRS. ACADEMICAS</th>
                <th>DURACION SEMANAS</th>
            </tr>
            <tr>
                <td>Programacion Orientada a Objetos</td>
                <td contenteditable="true"></td>
                <td contenteditable="true" onblur="sumar()"></td>
            </tr>
            <tr>
                <td>Elementos de Progamacion</td>
                <td contenteditable="true"></td>
                <td contenteditable="true" onblur="sumar()"></td>
            </tr>
            <tr>
                <td>Unidad ..3</td>
                <td contenteditable="true"></td>
                <td contenteditable="true" onblur="sumar()"></td>
            </tr>
            <tr>
                <td>Unidad ..4</td>
                <td></td>
                <td contenteditable="true" onblur="sumar()"></td>
            </tr>
            <tr>
                <td></td>
                <td>60</td>
                <td></td>
            </tr>
        </table>
    </div> 
    <!-- <p id="mensaje" class="label label-danger text-right"> horas academicas sobrepasan</p> -->
    
</div>

<script>
 function sumar(){
 //   var tabla = document.getElementById("tab_cronograma");   
 //   var total = 0;
 //   total = Number(tabla.rows[0].cells[2]);
 //   tabla.rows[0].cells[1] = total;
 //   // for(var i = 0;tabla.rows[i]; i++) {
 //   // total += Number(tabla.rows[i].cells[2]);
 //   // }
 //   window.alert(total);
 } 
</script>

<legend id="separador"><h2>CRITERIOS DE EVALUACION</h2></legend>
    <!--textarea para ingresar la informacion de criterio de evaluacion de una materia-->
    <textarea class="form-control" name="criterios_evaluacion" id="criterios" cols="100" rows="10"></textarea>
    <br>
<!--Fin parte 5-->
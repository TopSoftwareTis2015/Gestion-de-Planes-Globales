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
              <?php
                $unidadAnterior = ""; 
                echo count($this->unidades);
                for ($i=0; $i < count($this->unidades); $i++) {
                  echo $i; 
                  if($this->unidades[$i][1] != $unidadAnterior){
                    $unidadActual = $this->unidades[$i]['numero_unidad'];
              ?>
                <tr id="container_unidad<?php echo $unidadActual; ?>_fila">
                    <td id="container_unidad<?php echo $unidadActual; ?>_titulo">
                      <?php echo $this->unidades[$i]['titulo_unidad']; ?>
                    </td>
                    <td>
                      <input id="container_unidad<?php echo $unidadActual; ?>_horas" 
                            name="container_unidad<?php echo $unidadActual; ?>_horas" 
                            type="number" min="1" required onkeyup="sumar(this.value,this.id)"
                            value="<?php echo $this->unidades[$i]['duracion_horas_academicas']; ?>">
                    </td>
                    <td>
                      <input id="container_unidad<?php echo $unidadActual; ?>_semanas" 
                            name="container_unidad<?php echo $unidadActual; ?>_semanas" 
                            type="text" required readonly
                            value="<?php echo $this->unidades[$i]['duracion_semanas']; ?>">
                    </td>
                </tr>
              <?php
                    $unidadAnterior = $this->unidades[$i][1];
                  }
                }
               ?>
            </tbody>
        </table>
    </div> 
</div>
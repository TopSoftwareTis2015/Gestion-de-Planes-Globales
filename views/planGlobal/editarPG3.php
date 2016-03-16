<!--Parte 3-->  
<legend id="separador"><h3>JUSTIFICACION</h3></legend><!--seccion para ingresar la informacion de justificacion del plan global dentro de un textarea-->
  <textarea class="form-control"name="justificacion" id="justificacion" cols="100" rows="10"><?php echo $this->planGlobal['justificacion']; ?></textarea>
  <br>
<legend id="separador"><h3>OBJETIVOS GENERALES</h3></legend> <!--campos para ingresar los objetivos generales -->
  <!--<form name="formPg3" method="POST" action="">-->
    <div class="container-fluid" id="objetivo_general">
      <?php 
        if(isset($this->objetivosGenerales)){
          for ($i=0; $i < count($this->objetivosGenerales); $i++) {
            $numeroObjetivoActual = $this->objetivosGenerales[$i]['numero_objetivo_general']; 
      ?>
        <fieldset data-numero-objetivo="<?php echo $numeroObjetivoActual; ?>" 
          id="container_objetivo<?php echo $numeroObjetivoActual; ?>_general">
          
          <!--titulo del objetivo general-->
          <legend>Objetivo <?php echo $numeroObjetivoActual; ?></legend>
          <div class="form-group">
            <label for="titulo_objetivo<?php echo $numeroObjetivoActual ?>_general">Titulo:</label>
            <input class="form-control" type="text" name="titulo_objetivo<?php echo $numeroObjetivoActual ?>_general" 
              id="titulo_objetivo<?php echo $numeroObjetivoActual ?>_general" required
              value="<?php echo $this->objetivosGenerales[$i]['titulo_objetivo_general']; ?>">
          </div>
          
          <!--campo para la descripcion del objetivo general-->
          <div class="form-group">
            <label for="descripcion_objetivo<?php echo $numeroObjetivoActual ?>_general">Descripcion:</label>
            <textarea class="form-control" name="descripcion_objetivo<?php echo $numeroObjetivoActual ?>_general" 
                id="descripcion_objetivo<?php echo $numeroObjetivoActual ?>_general" cols="100" rows="5"><?php echo $this->objetivosGenerales[$i]['descripcion_objetivo_general']; ?></textarea>
          </div>
          <?php if($i>0){
            ?>
          <input class="btn pull-right btn-primary btn-warning" type="button" value="eliminar X" onClick="eliminarObjetivo('container_objetivo<?php echo $numeroObjetivoActual; ?>_especifico');" ><br><br><br>
          <?php
          } ?>

        </fieldset>
      <?php
          }
        }
       ?>
    </div>
    <input class="btn btn-primary" type="button" value="añadir nuevo Objetivo" onClick="addObjetivo('objetivo_general');" >                                            
  <!--</form>-->                
  <br>

<legend id="separador"><h3>OBJETIVOS ESPECIFICOS</h3></legend> <!--campos para ingresar los objetivos especificos-->
  <!--<form name="formPg4" method="post" action="#">-->
    <div class="container-fluid" id="objetivo_especifico">
      <?php 
        if(isset($this->objetivosEspecificos) && count($this->objetivosEspecificos)){
          for ($i=0; $i < count($this->objetivosEspecificos); $i++) {
            $numeroObjetivoActual = $this->objetivosEspecificos[$i]['numero_objetivo_especifico']; 
      ?>
        <fieldset data-numero-objetivo="<?php echo $numeroObjetivoActual; ?>" 
          id="container_objetivo<?php echo $numeroObjetivoActual; ?>_especifico">
          
          <!--titulo del objetivo general-->
          <legend>Objetivo <?php echo $numeroObjetivoActual; ?></legend>
          <div class="form-group">
            <label for="titulo_objetivo<?php echo $numeroObjetivoActual ?>_especifico">Titulo:</label>
            <input class="form-control" type="text" name="titulo_objetivo<?php echo $numeroObjetivoActual ?>_especifico" 
              id="titulo_objetivo<?php echo $numeroObjetivoActual ?>_especifico" required
              value="<?php echo $this->objetivosEspecificos[$i]['titulo_objetivo_especifico']; ?>">
          </div>
          
          <!--campo para la descripcion del objetivo general-->
          <div class="form-group">
            <label for="descripcion_objetivo<?php echo $numeroObjetivoActual ?>_especifico">Descripcion:</label>
            <textarea class="form-control" name="descripcion_objetivo<?php echo $numeroObjetivoActual ?>_especifico" 
                id="descripcion_objetivo<?php echo $numeroObjetivoActual ?>_especifico" cols="100" rows="5"><?php echo $this->objetivosEspecificos[$i]['descripcion_objetivo_especifico']; ?></textarea>
          </div>
          <input class="btn pull-right btn-primary btn-warning" type="button" value="eliminar X" onClick="eliminarObjetivo('container_objetivo<?php echo $numeroObjetivoActual; ?>_especifico');" ><br><br><br>

        </fieldset>
      <?php
          }
        }
       ?>
    </div>
    
                         
    <input class="btn btn-primary" type="button" value="añadir nuevo Objetivo" onClick="addObjetivo('objetivo_especifico');">
  <!--</form>-->
<!--Fin Parte 3-->

      <!-- <fieldset data-numero-objetivo="1" id="container_objetivo1_especifico">
        <legend>Objetivo 1</legend>
        <div class="form-group">
          <label for="titulo_objetivo1_especifico">Titulo:</label>
          <input class="form-control" name="titulo_objetivo1_especifico" type="text" id="titulo_objetivo1_especifico" required>
        </div>
        <div class="form-group">
          <label for="descripcion_objetivo1_especifico">Descripcion:</label>
           <textarea class="form-control" name="descripcion_objetivo1_especifico" id="descripcion_objetivo1_especifico"cols="100" rows="5"></textarea>
        </div>
      </fieldset>  -->   
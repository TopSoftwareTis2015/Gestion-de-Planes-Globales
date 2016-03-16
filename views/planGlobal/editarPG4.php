<!-- parte 4 -->
<strong><h2>SELECCION Y ORGANIZACION DE CONTENIDOS</h2></strong>
<br>
<div>
<!-- <form name="formPg5" method="post" action="#"> -->
  <div class="container-fluid" id="unidad">
    <?php 
      if(isset($this->unidades)){
        for ($i=0; $i < count($this->unidades); $i++) { 
          $numeroUnidadActual = $this->unidades[$i]['numero_unidad'];
    ?>
    <fieldset id="container_unidad<?php echo $numeroUnidadActual; ?>" data-numero-unidad="<?php echo $numeroUnidadActual; ?>">
    <?php
          if($i>0){
    ?>
      <button type="button" class="close" aria-hidden="true" onclick="eliminarUnidad('container_unidad<?php echo $numeroUnidadActual; ?>');" title="Eliminar esta unidad!">&times; eliminar unidad</button><br>
    <?php
          }
    ?>      
      <legend>Unidad <?php echo $numeroUnidadActual; ?></legend>  
      <div class="form-group">
        <label for="titulo_unidad<?php echo $numeroUnidadActual; ?>">Titulo de la unidad:</label> <!--Titulo de la unidad que tendra el temario para la materia-->
        <input class="form-control" type="text" name="titulo_unidad<?php echo $numeroUnidadActual; ?>" 
                id="titulo_unidad<?php echo $numeroUnidadActual; ?>" required
                onkeyup="actualizarUnidadCronograma('container_unidad<?php echo $numeroUnidadActual; ?>');"
                value="<?php echo $this->unidades[$i]['titulo_unidad']; ?>">
      </div>
      <div class="form-group">
        <label for="objetivo_unidad<?php echo $numeroUnidadActual; ?>">Objetivo:</label><!--campo para describir la unidad de avance de una materia-->
        <textarea class="form-control"name="objetivo_unidad<?php echo $numeroUnidadActual; ?>" 
          id="objetivo_unidad<?php echo $numeroUnidadActual; ?>" 
          cols="100" rows="3"><?php echo $this->unidades[$i]['objetivo_unidad']; ?></textarea>
      </div>

      <div>
      <!-- <form name="formPg6" method="post" action="#"> -->
        <div class="container-fluid recuadro">
              <legend>CONTENIDO</legend>
          <div id="contenido_unidad<?php echo $numeroUnidadActual; ?>">
    <?php 
          if($this->unidades[$i][9]){
            $unidadAnterior = $this->unidades[$i][1];
            for ($j=$i; $j < count($this->unidades); $j++) {
              if($unidadAnterior == $this->unidades[$j][1]){
                $numeroCapituloActual = $this->unidades[$j]['numero_capitulo'];
    ?>
            <fieldset id="container_contenido<?php echo $numeroCapituloActual.'_unidad'.$numeroUnidadActual; ?>" 
                data-numero-contenido="<?php echo $numeroCapituloActual; ?>">
                <br><br><button type="button" class="close" aria-hidden="true" onclick="eliminarContenido('container_contenido<?php echo $numeroCapituloActual.'_unidad'.$numeroUnidadActual; ?>')" title="Eliminar este Contenido!">&times; eliminar contenido</button><br>
                <div class="clearfix">
                  <legend>Capitulo <?php echo $numeroCapituloActual; ?></legend>

                  <div class="form-group">
                    <label for="titulo_contenido<?php echo $numeroCapituloActual.'_unidad'.$numeroUnidadActual; ?>">Titulo del capitulo:</label>
                    <input class="form-control" type="text" name="titulo_contenido<?php echo $numeroCapituloActual.'_unidad'.$numeroUnidadActual; ?>" 
                      id="titulo_contenido<?php echo $numeroCapituloActual.'_unidad'.$numeroUnidadActual; ?>" required
                      value="<?php echo $this->unidades[$i]['titulo_capitulo']; ?>">
                  </div>
                  
                  <div id="subtitulo_contenido<?php echo $numeroCapituloActual.'_unidad'.$numeroUnidadActual; ?>">
    <?php 
                if($this->unidades[$j][16]){
                  $capituloAnterior = $this->unidades[$j][9];

                  for ($k=$j; $k < count($this->unidades); $k++) { 
                    if($unidadAnterior == $this->unidades[$k][1] && $capituloAnterior == $this->unidades[$k][9]){
                      $numeroSubtituloActual = $this->unidades[$k]['numero_subtitulo'];
    ?>
                    <div class="form-group col-md-6 col-md-offset-3" id="container_subtitulo<?php echo $numeroSubtituloActual.'_contenido'.$numeroCapituloActual.'_unidad'.$numeroUnidadActual; ?>"                       
                        data-numero-subtitulo="<?php echo $numeroSubtituloActual; ?>">
                      <button type="button" class="close" aria-hidden="true" 
                        onclick="eliminarSubtitulo('container_subtitulo<?php echo $numeroSubtituloActual.'_contenido'.$numeroCapituloActual.'_unidad'.$numeroUnidadActual; ?>')" 
                        title="Eliminar este Subtitulo!">&times;</button><br>
                      <label for="subtitulo<?php echo $numeroSubtituloActual.'_contenido'.$numeroCapituloActual.'_unidad'.$numeroUnidadActual; ?>">Subtitulo:</label>
                      <input class="form-control" type="text" name="subtitulo<?php echo $numeroSubtituloActual.'_contenido'.$numeroCapituloActual.'_unidad'.$numeroUnidadActual; ?>" 
                        id="subtitulo<?php echo $numeroSubtituloActual.'_contenido'.$numeroCapituloActual.'_unidad'.$numeroUnidadActual; ?>" required
                        value="<?php echo $this->unidades[$k][16] ?>">
                    </div>
    <?php
                      if($j<$k){
                        $j++; $i++;
                      }
                      $capituloAnterior = $this->unidades[$k][9];
                    }
                    else{
                      break;
                    }
                  }
                }
     ?>
                  </div>

                  <input class="btn btn-primary col-md-6 col-sm-6 col-xs-6 col-md-offset-3" type="button" value="Añadir Subtitulo" onclick="addSubtitulo('subtitulo_contenido1_unidad1');">
                  
                </div>
            </fieldset>
    <?php
                if($i<$j){
                  $i++;
                }
                $unidadAnterior = $this->unidades[$j][1];
              }
              else{
                break;
              }
            }
          }
     ?>
          </div>
        </div>
        <br>
      </div>
    <input class="btn btn-primary pull-right" type="button" value="Añadir Capitulo" onClick="addCapitulo('contenido_unidad<?php echo $numeroUnidadActual; ?>');">
    <br> <br>     
    </fieldset>
    <?php
        }
      }
     ?>
  </div>
<!-- </form>  -->
</div>
<br>

<!--boton para añadir una nueva unidad de una materia-->
<button class="btn btn-primary" type="button" onClick="addUnidad('unidad');" >Añadir Unidad</button>
<!--Fin parte 4-->


            <!-- <fieldset id="container_contenido1_unidad1" data-numero-contenido="1">
                
                <div class="clearfix">
                  <legend>Capitulo 1</legend>

                  <div class="form-group">
                    <label for="titulo_contenido1_unidad1">Titulo del capitulo:</label>
                    <input class="form-control" type="text" name="titulo_contenido1_unidad1" id="titulo_contenido1_unidad1" required>
                  </div>
                  
                  <div id="subtitulo_contenido1_unidad1">
                    <div class="form-group col-md-6 col-md-offset-3" id="container_subtitulo1_contenido1_unidad1" data-numero-subtitulo="1">
                      <label for="subtitulo1_contenido1_unidad1">Subtitulo:</label>
                      <input class="form-control" type="text" name="subtitulo1_contenido1_unidad1" id="subtitulo1_contenido1_unidad1" required>
                    </div>
                  </div>

                  <input class="btn btn-primary col-md-6 col-sm-6 col-xs-6 col-md-offset-3" type="button" value="Añadir Subtitulo" onclick="addSubtitulo('subtitulo_contenido1_unidad1');">
                  
                </div>
            </fieldset> -->
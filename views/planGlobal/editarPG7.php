               <strong><h2>SECCIONES ADICIONALES</h2></strong>
               <div class="container-fluid" id="new_seccion"> 
              <div id="seccion">
                <?php 
                  if(isset($this->seccionesAdicionales) && count($this->seccionesAdicionales)){
                    for ($i=0; $i < count($this->seccionesAdicionales); $i++) { 
                      $numeroSeccionActual = $this->seccionesAdicionales[$i]['numero_seccion'];
                ?>
                  <fieldset id="container_seccion<?php echo $numeroSeccionActual; ?>" 
                    data-numero-seccion="<?php echo $numeroSeccionActual; ?>">
                    <button type="button" class="close" aria-hidden="true" 
                      onclick="eliminarSeccion('container_seccion<?php echo $numeroSeccionActual; ?>');" 
                      title="Eliminar esta Seccion!">&times; eliminar Seccion</button><br>
                    <legend>Seccion personalizada <?php echo $numeroSeccionActual; ?></legend>
                    <div class="form-group">
                             <label for="titulo_seccion<?php echo $numeroSeccionActual; ?>">Titulo de la seccion</label>
                             <input class="form-control" 
                              type="text" id="titulo_seccion<?php echo $numeroSeccionActual; ?>" 
                              name="titulo_seccion<?php echo $numeroSeccionActual; ?>" required
                              value="<?php echo $this->seccionesAdicionales[$i]['titulo_seccion']; ?>">
                    </div>
                    <div class="form-group">
                             <label for="objetivo_seccion1">Descripcion</label>
                             <textarea class="form-control" name="objetivo_seccion<?php echo $numeroSeccionActual; ?>" 
                                id="objetivo_seccion<?php echo $numeroSeccionActual; ?>" 
                                cols="100" rows="3" required
                                ><?php echo $this->seccionesAdicionales[$i]['objetivo_seccion']; ?></textarea>
                    </div>
                    <div class="container-fluid recuadro">
                    
                        <legend>CONTENIDO</legend>
                         <fieldset id="contenido_seccion<?php echo $numeroSeccionActual; ?>">
                <?php 
                      if($this->seccionesAdicionales[$i][7]){
                        $seccionAnterior = $this->seccionesAdicionales[$i][1];
                        for ($j=$i; $j < count($this->seccionesAdicionales); $j++) {
                          if($seccionAnterior == $this->seccionesAdicionales[$j][1]){
                            $numeroContenidoActual = $this->seccionesAdicionales[$j]['numero_contenido'];
                            
                ?>
                           <div class="container-fluid recuadro" id="container_contenido<?php echo $numeroContenidoActual.'_seccion'.$numeroSeccionActual; ?>" 
                              data-numero-contenido="<?php echo $numeroContenidoActual; ?>">
                              <br><br><button type="button" class="close" aria-hidden="true" 
                                onclick="eliminarContenidoSeccion('container_contenido<?php echo $numeroContenidoActual.'_seccion'.$numeroSeccionActual; ?>')" title="Eliminar este Contenido!">&times; eliminar contenido</button><br>
                              <legend>Contenido <?php echo $numeroContenidoActual; ?></legend>
                              <div class="form-group">
                                   <label for="titulo_contenido<?php echo $numeroContenidoActual.'_seccion'.$numeroSeccionActual; ?>">Titulo del contenido</label>
                                   <input class="form-control" type="text" id="titulo_contenido<?php echo $numeroContenidoActual.'_seccion'.$numeroSeccionActual; ?>" 
                                      name="titulo_contenido<?php echo $numeroContenidoActual.'_seccion'.$numeroSeccionActual; ?>" 
                                      value="<?php echo $this->seccionesAdicionales[$j]['titulo_contenido']; ?>" required>
                               </div>
                               <div class="form-group">
                                    <label for="descripcion_contenido<?php echo $numeroContenidoActual.'_seccion'.$numeroSeccionActual; ?>">Descripcion del contenido</label>
                                    <textarea class="form-control" id="descripcion_contenido<?php echo $numeroContenidoActual.'_seccion'.$numeroSeccionActual; ?>" 
                                      name="descripcion_contenido<?php echo $numeroContenidoActual.'_seccion'.$numeroSeccionActual; ?>" 
                                      cols="100" rows="3" required
                                      ><?php echo $this->seccionesAdicionales[$j]['descripcion_contenido']; ?></textarea>
                               </div>

                               <div class="form-group col-md-6 col-md-offset-3" 
                                  id="subtitulo_contenido<?php echo $numeroContenidoActual.'_seccion'.$numeroSeccionActual; ?>">
                <?php
                            if($this->seccionesAdicionales[$j]['id_subtitulo_seccion']){
                              $contenidoAnterior = $this->seccionesAdicionales[$j][7];

                              for ($k=$j; $k < count($this->seccionesAdicionales); $k++) { 
                                if($seccionAnterior == $this->seccionesAdicionales[$k][1] &&
                                    $contenidoAnterior == $this->seccionesAdicionales[$k][7]){
                                  $numeroSubtituloActual = $this->seccionesAdicionales[$k]['numero_subtitulo_seccion'];
                ?>
                                 <div id="container_subtitulo<?php echo $numeroSubtituloActual.'_contenido'.$numeroContenidoActual.'_seccion'.$numeroSeccionActual; ?>" 
                                    data-numero-subtitulo="<?php echo $this->numeroSubtituloActual; ?>">
                                      <button type="button" class="close" aria-hidden="true" onclick="eliminarSubtitulo('container_subtitulo<?php echo $numeroSubtituloActual.'_contenido'.$numeroContenidoActual.'_seccion'.$numeroSeccionActual; ?>')" title="Eliminar este Subtitulo!">&times;</button><br>
                                      <label for="subtitulo<?php echo $numeroSubtituloActual.'_contenido'.$numeroContenidoActual.'_seccion'.$numeroSeccionActual; ?>">Subtitulo 1</label>
                                      <input class="form-control" type="text" id="subtitulo<?php echo $numeroSubtituloActual.'_contenido'.$numeroContenidoActual.'_seccion'.$numeroSeccionActual; ?>" 
                                        name="subtitulo<?php echo $numeroSubtituloActual.'_contenido'.$numeroContenidoActual.'_seccion'.$numeroSeccionActual; ?>" 
                                        value="<?php echo $this->seccionesAdicionales[$k]['subtitulo_seccion']; ?>" required>
                                 </div>
                <?php
                                  if($j<$k){
                                    $j++; $i++;
                                  }
                                  $contenidoAnterior = $this->seccionesAdicionales[$k][7];
                                }
                                else{
                                  break;
                                }
                              }
                            } 
                 ?>                
                               </div>
                                 <button class="btn btn-primary col-md-6 col-sm-6 col-xs-6 col-md-offset-3" type="button" onclick="addSubtituloContenidoSeccion('subtitulo_contenido<?php echo $numeroContenidoActual.'_seccion'.$numeroSeccionActual; ?>');" required>Añadir subtitulo</button>
                            </div> 
                <?php
                            if($i<$j){
                              $i++;
                            }
                            $seccionAnterior = $this->seccionesAdicionales[$j][1];
                          } 
                          else{
                            break;
                          }
                        }
                      }
                 ?>          
                         </fieldset>
                         <br>
                         <button class="btn btn-primary" type="button" onclick="addContenidoSeccion('contenido_seccion<?php echo $numeroSeccionActual; ?>');" required>Añadir contenido</button> <br> <br>
                    </div> <br><br>
                 </fieldset>
                <?php
                    }
                  }
                 ?>
              </div>
              <br>
               </div>
               <br>
              <button class="btn btn-primary" type="button" onclick="addSeccion('seccion');">Añadir Seccion</button>
                 



                 <!-- <fieldset id="container_seccion1" data-numero-seccion="1">
                    <legend>Seccion personalizada 1</legend>
                    <div class="form-group">
                             <label for="titulo_seccion1">Titulo de la seccion</label>
                             <input class="form-control" type="text" id="titulo_seccion1" name="titulo_seccion1" required>
                    </div>
                    <div class="form-group">
                             <label for="objetivo_seccion1">Objetivo</label>
                             <textarea class="form-control" name="objetivo_seccion1" id="objetivo_seccion1" cols="100" rows="3"></textarea>
                    </div>
                    <div class="container-fluid recuadro">
                    
                        <legend>CONTENIDO</legend>
                         <fieldset id="contenido_seccion1">
                           <div class="container-fluid recuadro" id="container_contenido1_seccion1" data-numero-contenido="1">
                              <legend>Contenido 1</legend>
                              <div class="form-group">
                                   <label for="titulo_contenido1_seccion1">Titulo del contenido</label>
                                   <input class="form-control" type="text" id="titulo_contenido1_seccion1" name="titulo_contenido1_seccion1" required>
                               </div>
                               <div class="form-group">
                                    <label for="descripcion_contenido1_seccion1">Descripcion del contenido</label>
                                    <textarea class="form-control" id="descripcion_contenido1_seccion1" name="descripcion_contenido1_seccion1" cols="100" rows="3" required></textarea>
                               </div>
                               <div class="form-group col-md-6 col-md-offset-3" id="subtitulo_contenido1_seccion1">
                                 <div id="container_subtitulo1_contenido1_seccion1" data-numero-subtitulo="1">
                                      <label for="subtitulo1_contenido1_seccion1">Subtitulo 1</label>
                                      <input class="form-control" type="text" id="subtitulo1_contenido1_seccion1" name="subtitulo1_contenido1_seccion1" required>
                                 </div>
                               </div>
                                 <button class="btn btn-primary col-md-6 col-sm-6 col-xs-6 col-md-offset-3" type="button" onclick="addSubtituloContenidoSeccion('subtitulo_contenido1_seccion1');" required>Añadir subtitulo</button>
                            </div> 
                         </fieldset>
                         <br>
                         <button class="btn btn-primary" type="button" onclick="addContenidoSeccion('contenido_seccion1');" required>Añadir contenido</button> <br> <br>
                    </div> <br><br>
                 </fieldset> -->
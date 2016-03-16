<!--Bibliografia Parte 6-->
<legend id="separador"><h2>BIBLIOGRAFIA BASE</h2></legend>
               
<div class="row" id="biblio">      
  <fieldset id="bibliografia_base" class="recuadro">
    <?php 
      if(isset($this->bibliografiasBase)){
        for ($i=0; $i < count($this->bibliografiasBase); $i++) {
          $numeroBibliografiaActual = $this->bibliografiasBase[$i]['numero_bibliografia'];
    ?>
    
    <?php
    ?>
      <div class="container-fluid" id="container_bibliografia<?php echo $numeroBibliografiaActual; ?>_base" data-numero-bibliografia="1">
        <span></span>
        <div class="form-group">
          <label for="titulo_bibliografia<?php echo $numeroBibliografiaActual; ?>_base">Titulos Libro</label>
          <input class="form-control" type="text" name="titulo_bibliografia<?php echo $numeroBibliografiaActual; ?>_base" 
            id="titulo_bibliografia<?php echo $numeroBibliografiaActual; ?>_base" required
            value="<?php echo $this->bibliografiasBase[$i]['nombre_libro']; ?>">
        </div>
        
        <div class="form-group">
          <label for="autor_bibliografia<?php echo $numeroBibliografiaActual; ?>_base">Autor</label>
          <input class="form-control" type="text" name="autor_bibliografia<?php echo $numeroBibliografiaActual; ?>_base" 
            id="autor_bibliografia<?php echo $numeroBibliografiaActual; ?>_base" required
            value="<?php echo $this->bibliografiasBase[$i]['autor_libro']; ?>">
        </div>
        <?php if($i>0){
        ?>
        <input class="btn pull-right btn-primary btn-warning" type="button" value="eliminar X" onclick="eliminarBibliografia('container_bibliografia<?php echo $numeroBibliografiaActual; ?>_base');" ><br><br><br>
        <?php
        }
        if($i<count($this->bibliografiasBase)-1){
            echo '<legend id="separador"> </legend>';
          } 
        ?>

      </div>
    <?php
        }
      }
     ?>
  </fieldset>

<input class="btn btn-primary" type="button" value="añadir bibliografia" onClick="addBibliografia('bibliografia_base');">
</div> 
<br>  

<legend id="separador"><h2>BIBLIOGRAFIA COMPLEMENTARIA</h2></legend>
               
<div class="row" id="biblio">      
  <fieldset id="bibliografia_complementaria" class="recuadro">
    <?php 
      if(isset($this->bibliografiasComplementaria)){
        for ($i=0; $i < count($this->bibliografiasComplementaria); $i++) { 
          $numeroBibliografiaActual = $this->bibliografiasComplementaria[$i]['numero_bibliografia'];
    ?>
      <div class="container-fluid" id="container_bibliografia<?php echo $numeroBibliografiaActual; ?>_complementaria" data-numero-bibliografia="1">
        <span></span>
        <div class="form-group">
          <label for="titulo_bibliografia<?php echo $numeroBibliografiaActual; ?>_complementaria">Titulo Libro</label>
          <input class="form-control" type="text" name="titulo_bibliografia<?php echo $numeroBibliografiaActual; ?>_complementaria" 
            id="titulo_bibliografia<?php echo $numeroBibliografiaActual; ?>_complementaria" required
            value="<?php echo $this->bibliografiasComplementaria[$i]['nombre_libro']; ?>">
        </div>
        
        <div class="form-group">
          <label for="autor_bibliografia<?php echo $numeroBibliografiaActual; ?>_complementaria">Autor</label>
          <input class="form-control" type="text" name="autor_bibliografia<?php echo $numeroBibliografiaActual; ?>_complementaria" 
            id="autor_bibliografia<?php echo $numeroBibliografiaActual; ?>_complementaria" required
            value="<?php echo $this->bibliografiasComplementaria[$i]['autor_libro']; ?>">
        </div>
        <input class="btn pull-right btn-primary btn-warning" type="button" value="eliminar X" onclick="eliminarBibliografia('container_bibliografia<?php echo $numeroBibliografiaActual; ?>_complementaria');" ><br><br><br>
        <?php
        if($i<count($this->bibliografiasBase)-1){
            echo '<legend id="separador"> </legend>';
          } 
        ?>
      </div>
    <?php
        }
      }
     ?>
  </fieldset>

<input class="btn btn-primary" type="button" value="añadir bibliografia" onClick="addBibliografia('bibliografia_complementaria');">
</div> 
<br>  
<!--Fin parte 6-->
      <!-- <div class="container-fluid" id="container_bibliografia1_complementaria" data-numero-bibliografia="1">
        <div class="form-group">
          <label for="titulo_bibliografia1_complementaria">Titulo Libro</label>
          <input class="form-control" type="text" name="titulo_bibliografia1_complementaria" id="titulo_bibliografia1_complementaria" required>
        </div>
        
        <div class="form-group">
          <label for="autor_bibliografia1_complementaria">Autor</label>
          <input class="form-control" type="text" name="autor_bibliografia1_complementaria" id="autor_bibliografia1_complementaria" required>
        </div>

      </div> -->
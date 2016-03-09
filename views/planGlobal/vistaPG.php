
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Plan Global</title>
    <!--importando librerias utiles para trabajar con estilos CSS de bootstrap-->
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <link rel="stylesheet" href="<?php echo BASE_URL; ?>/public/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo BASE_URL; ?>public/style/estilo.css">

  <!--importantando las librerias para trabajar con jquery y javascript de bootstrap-->
  <script type="text/javascript" src="<?php echo BASE_URL; ?>public/js/jquery-1.12.0.js"></script>
  <script type="text/javascript" src="<?php echo BASE_URL; ?>views/planGlobal/js/crear_input.js"></script>
  <script type="text/javascript" src="<?php echo BASE_URL; ?>views/planGlobal/js/checkbox.js"></script>
  <script type="text/javascript" src="<?php echo BASE_URL; ?>views/planGlobal/js/validarSoloNumero.js"></script>
  <script type="text/javascript" src="<?php echo BASE_URL; ?>views/planGlobal/js/seleccionarItem.js"></script>
  <script type="text/javascript" src="<?php echo BASE_URL; ?>public/js/bootstrap.js"></script>
     
</head>
    
<body>
                  
<div class="container" id="cuadro">
    <header><!-- seccion de la cabecera de la pagina web-->
        <div class="container">
           <div class="row">
              <div class="col-xs-3 col-md-3"> <!--seccion para el logo del sistema web-->
                <img src="<?php echo BASE_URL; ?>public/imagen/logoUmss.png" class="img-responsive" alt="">
              </div>
              <div class="col-xs-9 col-md-9"> <!--titulo del sistema web-->
                <h1>Sistema de Gesti&oacute;n De Planes Globales</h1>   
              </div>
           </div>   
        </div>
    </header>
   
  <!--Menu de navegacion Horizontal-->
  <nav class="navbar navbar-default navbar-fixed-top"><!--"nabar-default" es el estandar del nav el cual ocupa todo el ancho de la pagina-->
    
    <!--contenedor para el menu en dispositivos moviles-->
    <div class="container-fluid"> 
       <!--div para realizar un menu desplegable que funcione en dispositivos moviles--> 
       <div class="navbar-header">
         <!--boton que funciona como disparador para desplegar el menu en dispositivos moviles-->
         <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu_horizontal">
           <span class="sr-only">toggle-navigation</span>
           <span class="icon-bar"></span>
           <span class="icon-bar"></span>
           <span class="icon-bar"></span>
         </button>
         <a href="#" class="navbar-brand">Menu</a>
       </div><!--fin del div del menu desplegable--> 

        <!--div para el contenido de los elementos y enlaces que tendra el menu horizontal los cuales seran visualidados en los desktop-->
        <div class="collapse navbar-collapse" id="menu_horizontal">
          <ul class="nav navbar-nav">
            <li><a href="<?php echo BASE_URL; ?>index.php">Inicio</a></li>
            <li><a href="#">Contactos</a></li>
            
            <li class="dropdown"><!--Opcion dropdown-->
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Facultad<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li> <a href="<?php echo BASE_URL; ?>materias">Materias</a> </li>
                <li> <a href="<?php echo BASE_URL; ?>planDeEstudio">Planes de Estudio</a> </li>
                <li> <a href="<?php echo BASE_URL; ?>planGlobal/registrar">Planes Globales</a> </li>
              </ul>
            </li>
          </ul>
        </div>
    </div> 
  </nav>
  <!--fin del menu horizontal--> 

  <section class="main row">
  <br>
     <!--seccion del menu de navegacion vertical--> 
     <nav id="menu" class="col-xs-12 col-sm-4 col-md-3">
      <div class="container-fluid">
         <div class="row"><!--menu con las opciones mas relevantes por el momento.. -->
                <ul class="nav nav-pills nav-stacked">
                    <li role="presentation"><a href="<?php echo BASE_URL; ?>index.php">Inicio</a></li>
                    <li role="presentation"><a href="#">Facultades</a></li>
                    <li role="presentation"><a href="#">Carreras</a></li>
                    <li role="presentation"><a href="<?php echo BASE_URL; ?>planDeEstudio">Planes de Estudio</a></li>
                    <li role="presentation"><a href="<?php echo BASE_URL; ?>materias">Materias</a></li>
                    <li role="presentation"class="active"><a href="<?php echo BASE_URL; ?>planGlobal/registrar">Planes Globales</a></li>
                </ul>
         </div>
      </div>
     </nav>
     
    <div class="container-fluid col-xs-12 col-sm-8 col-md-9" id="vista">
     <div class="panel panel-default">
        <div class="panel-vista container-fluid">
          <div class="col-xs-3 col-sm-3 col-md-2">
            <img src="<?php echo BASE_URL; ?>views/planGlobal/imagen/fcyt.jpg" class="img-responsive" width="85" height="85" alt="">
          </div>
          <div class="col-xs-7 col-sm-7 col-md-8">
            <h4><p class="text-center">UNIVERSIDAD MAYOR DE SAN SIMON</p></h4>
            <h4><p class="text-center">FACULTAD DE CIENCIAS Y TECNOLOGIA</p></h4>
          </div>
          <div class="col-xs-2 col-sm-2 col-md-2">
             <img src="<?php echo BASE_URL; ?>views/planGlobal/imagen/umss.png" class="img-responsive" width="85" height="85" alt="">
          </div>
            <legend id="separador"></legend>
              
          <h3><strong><center>Plan global</center></strong></h3>
          <h4 class="text-center"><strong><?php if(isset($this->planGlobal))echo $this->planGlobal['titulo']; ?></strong></h4>
          <br>
          <ol type="I">
            <h4><li><b class="bordes">DATOS DE IDENTIFICACION</b></li></h4>

             <div class="panel panel-default">
                <div class="table-responsive">
                  <table class="table table-striped table-bordered">
                    <tr class="text-align-legf">
                      <td>Nombre de la materia:</td>
                      <td><?php if(isset($this->materia))echo $this->materia['nombre_materia']; ?></td>
                    </tr>
                    <tr>
                      <td>Codigo:</td>
                      <td><?php if(isset($this->materia))echo $this->materia['codigo_materia']; ?></td>
                    </tr>
                    <tr>
                      <td>Grupos:</td>
                      <td>
                        <?php
                          if(isset($this->grupos)) 
                            for ($i=0; $i < count($this->grupos) ; $i++) { 
                              echo $this->grupos[$i]['grupo'] . " ";
                            }
                         ?>
                      </td>
                    </tr>
                    <tr>
                      <td <?php if(isset($this->carga_horaria) && 
                                  $this->carga_horaria['periodos_teoricos_semana']) echo 'rowspan="2"'; ?>>
                        Carga horaria:
                      </td>
                      <td>
                        <?php 
                          if(isset($this->carga_horaria)){
                            echo $this->carga_horaria['horas_semestre'] . " periodos totales";
                            if($this->carga_horaria['periodos_semana'])
                              echo ", " . $this->carga_horaria['periodos_semana'] . "periodos por semana";
                          }
                         ?>
                      </td>
                    </tr>
                    <?php 
                      if(isset($this->carga_horaria)){
                        if($this->carga_horaria['periodos_teoricos_semana']){
                     ?>
                    <tr>
                      <td>
                        <?php
                          echo $this->carga_horaria['periodos_teoricos_semana'] . 
                                " periodos teoricos por semana, " .
                                $this->carga_horaria['periodos_practicos_semana'] .
                                " periodos practicos por semana";
                         ?>
                      </td>
                    </tr>
                    <?php 
                        }
                      }
                     ?>
                    <tr>
                      <td>Materias relacionadas</td>
                      <td>
                        <?php 
                          if(isset($this->materias_relacionadas))
                            for ($i=0; $i < count($this->materias_relacionadas); $i++) { 
                              echo $this->materias_relacionadas[$i]['nombre_materia'] . "<br>";
                            }
                         ?>
                      </td>
                    </tr>
                    <tr>
                      <td>Docentes:</td>
                      <td>
                        <?php 
                          if(isset($this->docentes)){
                            for ($i=0; $i < count($this->docentes); $i++) { 
                              echo $this->docentes[$i]['nombre_usuario'] . "<br>";
                            }
                          }
                         ?>
                      </td>
                    </tr>
                    <tr>
                      <td>Tel&eacute;fonos:</td>
                      <td>
                        <?php 
                          if(isset($this->docentes)){
                            for ($i=0; $i < count($this->docentes); $i++) { 
                              echo $this->docentes[$i]['nombre_usuario'] .": ".
                                    $this->docentes[$i]['numero_movil_usuario'];
                              echo $this->docentes[$i]['numero_fijo_usuario']?
                                    " - " . $this->docentes[$i]['numero_fijo_usuario']:""; 
                              echo "<br>";
                            }
                          }
                         ?>
                      </td>
                    </tr>
                    <tr>
                      <td>Correo electr&oacute;nico:</td>
                      <td>
                        <?php 
                          if(isset($this->docentes)){
                            for ($i=0; $i < count($this->docentes); $i++) { 
                              echo $this->docentes[$i]['nombre_usuario'] .": ".
                                    $this->docentes[$i]['correo_usuario'] . "<br>";
                            }
                          }
                         ?>
                      </td>
                    </tr>
                      </td> 
                    </tr>
                  </table>
                </div>
              </div>

            <h4><li><b class="bordes">JUSTIFICACION</b></li></h4>
              <p>
              <?php if(isset($this->planGlobal))echo $this->planGlobal['justificacion']; ?>
              </p>
            
            <h4><li><b class="bordes">OBJETIVOS</b></li></h4>
              <ol>
                <!-- lista de objetivos generales -->
                <li><h4><b>Objetivos Generales</b></h4>
                  <ul>
                    <?php 
                      if(isset($this->objetivosGenerales)){
                        for ($i=0; $i < count($this->objetivosGenerales); $i++) { 
                    ?>

                    <li type="square">
                     <h4><?php echo $this->objetivosGenerales[$i]['titulo_objetivo_general']; ?></h4>
                     <?php 
                          if($this->objetivosGenerales[$i]['descripcion_objetivo_general'])
                            echo "<p>" . $this->objetivosGenerales[$i]['descripcion_objetivo_general'] .
                                  "</p>";
                      ?>
                    </li>

                    <?php
                        }
                      }
                     ?>
                  </ul>
                </li>
                
                <!-- lista de objetivos especificos -->
                <?php 
                  if(isset($this->objetivosEspecificos) && $this->objetivosEspecificos){
                ?>

                <li><h4><b>Objetivos Especificos</b></h4>
                   <ul>
                    <?php 
                      if(isset($this->objetivosEspecificos)){
                        for ($i=0; $i < count($this->objetivosEspecificos); $i++) { 
                    ?>

                    <li type="square">
                     <h4><?php echo $this->objetivosEspecificos[$i]['titulo_objetivo_especifico']; ?></h4>
                     <?php 
                          if($this->objetivosEspecificos[$i]['descripcion_objetivo_especifico'])
                            echo "<p>" . $this->objetivosEspecificos[$i]['descripcion_objetivo_especifico'] .
                                  "</p>";
                      ?>
                    </li>

                    <?php
                        }
                      }
                     ?>
                  </ul>
                </li>
                <?php
                  }
                 ?>
              </ol><br>

            <!-- contenido minimo   -->
            <h4><li><b class="bordes">SELECCION Y ORGANIZACION DE CONTENIDOS</b></li></h4>
              <?php 
                if(isset($this->unidades)){
                  for ($i=0; $i < count($this->unidades); $i++) {
              ?>
              <br>
              <p class="text-center">
                <b class="unidades">UNIDAD<?php echo $this->unidades[$i]['numero_unidad'] . ": " .
                strtoupper($this->unidades[$i]['titulo_unidad']); ?></b>
              </p>
              <?php 
                  if($this->unidades[$i]['objetivo_unidad']){
              ?>
              <p><b>Objetivo de la Unidad</b></p>
              <p>
                <?php echo $this->unidades[$i]['objetivo_unidad']; ?>
              </p>
                
              <?php  
                  }

                  if($this->unidades[$i][9]){// 'id_capitulo' = 9
                    $unidadAnterior = $this->unidades[$i][1]; // 'id_unidad' = 1
                ?>
              <p><b>Contenido:</b></p>
              <ol>
                <?php
                    for ($j=$i; $j < count($this->unidades); $j++) { 
                      if($unidadAnterior == $this->unidades[$j][1]){
                ?>
                <li><?php echo $this->unidades[$j]['titulo_capitulo']; ?>
                <?php 
                        if($this->unidades[$j][16]){ // 'id_subtitulo' = 16
                ?>
                  <ul>
                <?php
                          $capituloAnterior = $this->unidades[$j][9];

                          for ($k=$j; $k < count($this->unidades); $k++) {
                            if($unidadAnterior == $this->unidades[$j][1] &&
                              $capituloAnterior == $this->unidades[$k][9]){
                        ?>
                        <li><?php echo $this->unidades[$k][16]; ?></li>                        
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
                 ?>                      
                  </ul>
                <?php          
                        }

                        if($i<$j){
                          $i++;
                        }
                        $unidadAnterior = $this->unidades[$j][1];
                ?>
                </li>
                <?php
                      }//777777777777777777
                      else{
                        break;
                      }
                    }    
                ?>

                </ol>
              
              <?php
                  } 
                  }
                }
               ?>
            <br>
            <li><h4><b class="bordes">METODOLOGIAS</b></h4></li>
              <p class="text-justify">
                <?php if(isset($this->planGlobal))echo $this->planGlobal['metodologias']; ?>
             </p>
             <br>
            <li><h4><b class="bordes">CRONOGRAMA O DURACION EN PERIODOS ACADEMICOS POR UNIDAD</b></h4></li>
              <p>El cronograma y avance de la materia se regir&aacute; por la siguiente secuencia</p>
              <div class="panel panel-default">
                <div class="table-responsive">
                  <table class="table table-striped table-bordered">
                    <tr>
                      <th class="text-center">UNIDAD</th>
                      <th class="text-center">DURACION HRS. ACADEMICAS</th>
                      <th class="text-center">DURACION SEMANAS</th>
                    </tr>
                    <?php 
                      if(isset($this->unidades)){
                        $unidadAnterior = "";
                        for ($i=0; $i < count($this->unidades); $i++) {                          
                          if($unidadAnterior != $this->unidades[$i][1]){

                    ?>
                    <tr>
                        <td><?php echo $this->unidades[$i]['titulo_unidad']; ?></td>
                        <td><?php echo $this->unidades[$i]['duracion_horas_academicas']; ?></td>
                        <td><?php echo $this->unidades[$i]['duracion_semanas']; ?></td>
                    </tr>
                    <?php
                            $unidadAnterior = $this->unidades[$i][1];
                          }
                        }
                      }
                     ?>
                  </table>
                </div>
              </div>
              <br>

            <h4><li><b class="bordes">CRITERIOS DE EVALUACION</b></li></h4>
              <p>
                <?php if(isset($this->planGlobal)) echo $this->planGlobal['criterios_evaluacion']; ?>
              </p>
              <br>
            <h4><li><b class="bordes">BIBLIOGRAFIA</b></li></h4>    
              <h4>Bibliografia base</h4>
              <ul>
                <?php 
                  if(isset($this->bibliografiasBase)){
                    for ($i=0; $i < count($this->bibliografiasBase); $i++) { 
                ?>
                <li type="disc">
                  <b>
                    <?php echo $this->bibliografiasBase[$i]['nombre_libro']; ?>
                  </b>
                  <?php echo $this->bibliografiasBase[$i]['autor_libro']; ?>
                </li>
                <?php
                    }
                  }
                 ?>
              </ul>
              
              <?php 
                if(isset($this->bibliografiasComplementaria) && $this->bibliografiasComplementaria){
              ?>
              <h4>Bibliografia complementaria</h4>
              <ul>
              <?php 
                  if(isset($this->bibliografiasComplementaria)){
                    for ($i=0; $i < count($this->bibliografiasComplementaria); $i++) { 
                ?>
                <li type="disc">
                  <b>
                    <?php echo $this->bibliografiasComplementaria[$i]['nombre_libro']; ?>
                  </b>
                  <?php echo $this->bibliografiasComplementaria[$i]['autor_libro']; ?>
                </li>
                <?php
                    }
                  }
              ?>
              </ul>
              <?php
                }
               ?>

              <br>
              <!--Secciones Adicionales-->

              <?php 
                if(isset($this->seccionesAdicionales) && $this->seccionesAdicionales){
                  for ($i=0; $i < count($this->seccionesAdicionales); $i++) { 
              ?>
              <h4><li><b class="bordes">
                <?php echo strtoupper($this->seccionesAdicionales[$i]['titulo_seccion']); ?>
              </b></li></h4>
              <?php 
                    //implemantar las funcionalidad para que se muestre los objetivos que tenga una seccion
                    if($this->seccionesAdicionales[$i]['objetivo_seccion']){
                      echo "<p>".$this->seccionesAdicionales[$i]['objetivo_seccion']."</p>";
                    }

                    //implementacion de los contenidos de una seccion. 'id_contenido' = 7
                    if($this->seccionesAdicionales[$i][7]){
                      $seccionAnterior = $this->seccionesAdicionales[$i][1]; // 'id_seccion' = 1'
              ?>
                <ul>
              <?php

                      for ($j=$i; $j < count($this->seccionesAdicionales); $j++) { 
                        if($seccionAnterior == $this->seccionesAdicionales[$j][1]){
              ?>
                <li>
                  <h4><b><?php echo $this->seccionesAdicionales[$j]['titulo_contenido']; ?></b></h4>
              <?php 
                          if($this->seccionesAdicionales[$j]['descripcion_contenido']){
              ?>
                  <p class="text-justify">
                    <?php echo $this->seccionesAdicionales[$j]['descripcion_contenido']; ?>
                  </p>
              <?php
                          }
                          if($this->seccionesAdicionales[$j]['id_subtitulo_seccion']){
                            $contenidoAnterior = $this->seccionesAdicionales[$j][7];
              ?>
                  <ul class"text-justify">
              <?php 
                            for ($k=$j; $k < count($this->seccionesAdicionales); $k++) {
                              if($seccionAnterior == $this->seccionesAdicionales[$k][1] &&
                                  $contenidoAnterior == $this->seccionesAdicionales[$k][7]){

               ?>
                    <li><?php echo $this->seccionesAdicionales[$k]['subtitulo_seccion']; ?></li>
              <?php
                                if($k>$j){
                                  $j++; $i++;
                                }
                                $contenidoAnterior = $this->seccionesAdicionales[$k][7];
                              }
                              else
                                break;
                            }
              ?>
                  </ul> 
              <?php
                          }
               ?>
                  
                </li>                        
                  
              <?php
                          if($j>$i){
                            $i++;
                          }
                          $seccionAnterior = $this->seccionesAdicionales[$j][1];
                        }
                        else
                          break;
                       }
              ?>
                </ul>
              <?php
                      }
                    }              
                  }                
              ?>
          </ol>

        </div>
     </div>
    </div> 
  </section>
  <!-- <input type="button" onclick="ver()"> -->
</div>
  <footer> 
    <!--Codigo para incluir el pie de pagina-->
    <?php 
       include ROOT.'views'.DS.'include'.DS.'pie_de_pagina.php"'
    ?> <!--fin del codigo de pie de pagina-->  
  </footer>

<script>
  function ver(){
    print();
  }
</script>

</body>

</html>
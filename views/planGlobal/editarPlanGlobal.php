<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Plan Global</title>
    <!--importando librerias utiles para trabajar con estilos CSS de bootstrap-->
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <link rel="stylesheet" href="<?php echo BASE_URL; ?>/public/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo BASE_URL; ?>public/style/estilo.css">
  <link rel="stylesheet" href="<?php echo BASE_URL; ?>public/style/newStyle.css">

  <!--importantando las librerias para trabajar con jquery y javascript de bootstrap-->
  <script type="text/javascript" src="<?php echo BASE_URL; ?>public/js/jquery-1.12.0.js"></script>
  <script type="text/javascript" src="<?php echo BASE_URL; ?>views/planGlobal/js/crear_input.js"></script>
  <script type="text/javascript" src="<?php echo BASE_URL; ?>views/planGlobal/js/checkbox.js"></script>
  <script type="text/javascript" src="<?php echo BASE_URL; ?>views/planGlobal/js/validarDatosBackEnd.js"></script>
  <script type="text/javascript" src="<?php echo BASE_URL; ?>views/planGlobal/js/validarDatosFrontEnd.js"></script>
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
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Administracion<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li> <a href="<?php echo BASE_URL; ?>materias">Materias Habilitadas</a> </li>
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
         <div class="row">
         
             <!-- <div id="MainMenu">
                    <div class="list-group panel">
                          
                    <a href="<?php echo BASE_URL; ?>index" class="list-group-item list-group-item-success">Inicio</a> 
                          
                    <a href="#menu2" class="list-group-item list-group-item-success" data-toggle="collapse" data-parent="#MainMenu">Facultad</a>
                    <div class="collapse list-group-submenu" id="menu2">
                      <a href="<?php echo BASE_URL; ?>facultad/carreras" class="list-group-item"><i>Carreras</i></a>
                    </div>
                    <a href="<?php echo BASE_URL; ?>materias" class="list-group-item list-group-item-success">Materias Registradas</a>
                    <a href="#SubMenu3" class="active list-group-item list-group-item-success" data-toggle="collapse" data-parent="#MainMenu">Contenido Minimo</a>
                    </div>
              </div> -->

              <h3><ins>Navegacion</ins></h3>
              <div class="tree muro">
                  <ul>
                    <li>  
                       <a href="<?php echo BASE_URL; ?>index">Inicio</a>
                        <ul>
                            <li>  
                              <a href="<?php echo BASE_URL; ?>facultad">Facultad</a>
                              <ul>
                                <li>
                                 <a href="<?php echo BASE_URL; ?>facultad/carreras">Carreras</a>
                                </li>
                                <li class="active">  
                                  <a href="<?php echo BASE_URL; ?>planEstudios">Inform&aacute;tica</a>
                                  <ul>
                                    <li>  
                                      <a href="<?php echo BASE_URL; ?>planEstudios/planDeEstudios">Plan de Estudios</a>
                                    </li>
                                    <li>  
                                      <a href="">Ver Plan Global</a>
                                      <ul>
                                      <li>  
                                        <a href=""><strong>Editar Plan Global</strong></a>
                                      </li>
                                    </ul> 
                                    </li>
                                  </ul>
                                </li>
                                <!-- <li>
                                  <a href="#">Nivel 1</a>
                                </li> -->
                              </ul>
                            </li>
                        </ul>
                    </li>
                  </ul>
              </div>

              

         </div>
      </div>
     </nav>

    <article class="col-xs-12 col-sm-8 col-md-9">
     <div id="parte" class="container-fluid">
  
        <?php 
        //include 'prueba.php';
        if(1==1)
        {
        ?>
        <!-- registro de plan global-->  
        <div class="panel panel-default">
            <div class="panel-body">
              <!--Titulo del formulario-->
              <h1><strong><center><?php if(isset($this->tituloFormulario)) echo $this->tituloFormulario; ?></center></strong></h1>
                   
              <form name="formPg1" method="post" onsubmit="return antesDeEnviar();"
                action="<?php echo BASE_URL . 'planGlobal/actualizar/'; echo (isset($this->materia))?$this->materia['codigo_materia']:""; ?>/1/<?php echo $this->planGlobal['id_pg']; ?>">

                <input type="hidden" name='guardar' value="1">

                <div class="row container-fluid">
                  <!--<div class="col-xs-12 col-md-9">--> 
                    <span id="error_anio_gestion" class="label label-danger"></span>
                    <span id="error_codigo_pg" class="label label-danger"></span>
                    <br>
                    <div class="form-inline">
                      <label for="gestion">Gestion:</label>
                      <!--<input class="form-control" type="" id="nomMateria">-->
                      <select class="form-control" name="gestion" style="width:25%" id="gestion" size="1" required>
                           <option value="I">I</option>
                           <option value="II">II</option>
                           <option value="III">III</option>
                           <option value="IV">IV</option>
                      </select>
                      <script>
                        insertarGestion();
                        function insertarGestion(){
                          var gestion = document.getElementById("gestion");
                          var elemento;

                          for (var i = 0; i < gestion.childNodes.length; i++) {
                            elemento = gestion.childNodes[i];

                            if(elemento instanceof HTMLOptionElement){
                              if(elemento.value == "<?php if(isset($this->gestion)) echo $this->gestion;?>"){
                                elemento.selected = true;
                                break;
                              }
                            }
                          };
                        }
                      </script>
                      <input type="text" class="form-control" pattern="[/^([0-9])*$/]{4}" name="anio_gestion"
                              id="anio_gestion" placeholder="Año 4 digitos" onkeyup="validarAnioGestion(this.value);" required
                              title="1832 hasta el año actual!"
                              value="<?php if(isset($this->anio_gestion)) echo $this->anio_gestion; ?>">
                      &nbsp;&nbsp;&nbsp; 
                      <label for="codigo_plan_global">Codigo:</label>
                      <input type="text" name="codigo_plan_global" id="codigo_plan_global"
                              class="form-control" maxlength="30" placeholder="Código del plan global" 
                              onkeyup="validarCodigoUnico(this);"
                              data-value-anterior = "<?php if(isset($this->planGlobal)) echo $this->planGlobal['codigo_plan_global'];?>"
                              data-url-validar="<?php echo BASE_URL.'planGlobal/validar_codigo';?>"
                              value = "<?php if(isset($this->planGlobal)) echo $this->planGlobal['codigo_plan_global'];?>"><br>
                    </div><br>

                    <div class="form-group">
                      <div class="input-group">
                           <span class="input-group-addon">Titulo</span>
                           <input type="text" class="form-control"name="titulo" id="titulo" required maxlength="300"
                                  value="<?php if(isset($this->planGlobal)) echo $this->planGlobal['titulo']; ?>">
                                  <br>
                      </div>
                    </div> 

                  <!--</div>-->  
                </div>

                <!--<div class="row">-->
                  <!--<div class="col-xs-12">-->     
                    <fieldset>
                       <legend id="separador">Datos de Identificacion</legend>
              
                        <div class="row container-fluid">
                          <!--<div class="col-xs-9 col-md-12">-->
                            <div class="form-group">
                              <label for="nombre_materia">Nombre de la Materia:</label>
                              <input class="form-control" type="text" id="nombre_materia" readonly
                                value="<?php if(isset($this->materia)) echo $this->materia['nombre_materia']; ?>">
                              <!-- <select class="form-control" name="nom_materia" style="width:100%" id="nomMateria" size="1">
                                 <option value="1">Introduccion a la programacion</option>
                                 <option value="2">Taller de programacion en bajo nivel</option>                                              
                              </select> -->
                            </div>    
                          <!--</div>-->
                        </div>

                        <div class="row container-fluid"> 
                          <!--<div class="col-xs-12">-->
                        <div class="row"> 
                          <div class="col-xs-12">

                           <div class="form-group">
                             <label for="codigo_materia">Codigo Materia:</label>
                             <input readonly class="form-control" type="text" id="codigo_materia" name="codigo_materia"
                                value="<?php echo $this->materia['codigo_materia']; ?>">
                           </div>
                          </div>
                        </div>
            
                        <div class="row">
                          
                            <legend id="separador">Ingrese los grupos que participaran en este plan </legend>
                           
                        </div> 
                        <span id="error_grupo" class="label label-danger"></span>
                         <div class="table-responsive"> <!--tabla con los grupo existentes de una materia-->
                         <table class="table">
                            <tr class="info">
                              <th>Grupos totales en las materia</th>
                              <th></th>
                            <th>Grupos en el plan Global</th>
                          </tr>
                          <tr>
                             <td>
                               <!--lista con los grupos existentes de una materia-->

                               <select id="sel1" style="width:250px" size="6">
                                <?php
                                  for ($i=0; $i < count($this->gruposTotales); $i++) { 
                                ?>
                                <option value="<?php echo $this->gruposTotales[$i]['id_usuario'] .'_'. $this->gruposTotales[$i]['grupo'] ?>"
                                  data-docente="<?php echo $this->gruposTotales[$i]['id_usuario'] ?>">
                                  Grupo <?php echo $this->gruposTotales[$i]['grupo']; ?>
                                </option>
                                <?php  }?>
                               </select>
                             </td>
                             <td>
                               <!--botones para activar el script y pasar los datos de los grupos que participaran en el plan global-->
                              <input type="button" onclick="ingresarGrupo()" value="-->>">
                              <br><br>
                             
                              <input type="button" onclick="eliminarGrupo()" value="<<--">
                             </td>

                             <td>
                             <span class="navArriba">
                                 <select name="grupos_plan_global[]" id="sel2" style="width:220px" size="6" multiple="multiple">
                                  <?php
                                    for ($i=0; $i < count($this->gruposPlanGlobal); $i++) { 
                                  ?>
                                  <option value="<?php echo $this->gruposPlanGlobal[$i]['id_usuario'] .'_'. $this->gruposPlanGlobal[$i]['grupo'] ?>"
                                    data-docente="<?php echo $this->gruposPlanGlobal[$i]['id_usuario'] ?>">
                                    Grupo <?php echo $this->gruposPlanGlobal[$i]['grupo']; ?>
                                  </option>
                                  <?php  }?>
                                 </select>
                               </span>
                             </td>
                            
                          </tr>
                          </table>                
                        </div> <!--fin de la tabla de grupos de una materia-->
                        
                         <div class="row">
                          <div class="col-xs-12">
                            <legend id="separador">Ingrese los docentes que participaran en este plan</legend>   
                          </div> 
                         </div> 
                         
                        <div class="table-responsive"> <!--tabla de docente perteneciente a una materia en comun-->
                        <table class="table">
                          <tr class="info">
                            <th>Docentes totales en las materia</th>
                            <th></th>
                            <th>Docentes en el plan Global</th>
                          </tr>
                          <tr>
                             <td>
                              <!--lista con todos los docentes designados a una materia-->

                              <select id="sel3" style="width:250px" size="6">
                                <?php 
                                  for ($i=0; $i < count($this->docentesTotales); $i++) { 
                                    ?>
                                <option value="<?php echo $this->docentesTotales[$i]['id_usuario']; ?>">
                                  <?php echo $this->docentesTotales[$i]['nombre_usuario']; ?>
                                </option>
                                <?php  }
                                 ?>
                              </select>  
                             </td>

                               
                             <td>
                                <!--botones para activar el script y pasar los datos de los docente que participaran en el plan global-->
                                <input class="center-block" type="button" name="pasarValor1" onclick="ingresarDocente();" value="-->>">
                                <br><br>
                                <input class="center-block" type="button" name="pasarValor2" onclick="eliminarDocente();" value="<<--">
                             </td>

                             <td>
                             <span class="navArriba">
                                 <select id="sel4" style="width:220px" size="6" name="carrera[]" multiple="multiple">
                                  <?php 
                                    for ($i=0; $i < count($this->docentesPlanGlobal); $i++) { 
                                      ?>
                                  <option value="<?php echo $this->docentesPlanGlobal[$i]['id_usuario']; ?>">
                                    <?php echo $this->docentesPlanGlobal[$i]['nombre_usuario']; ?>
                                  </option>
                                  <?php  }
                                   ?>
                                  </select>
                               </span>
                             </td>
                            
                          </tr>
                         </table>
                        </div> <!--fin de la tabla de los docente pertenecientes a una materia en comun-->
                         
                        <div class="row"> <!-- campo para añadir telefono-->
                          <div class="col-xs-12">
                           <div class="form-group ">

                             <label for="telefono">Telefonos:</label>
<textarea readonly class="form-control"name="" id="telefonos" cols="60" rows="3">
<?php 
for ($i=0; $i < count($this->docentesPlanGlobal); $i++) { 
echo $this->docentesPlanGlobal[$i]['nombre_usuario'] . ": " . $this->docentesPlanGlobal[$i]['numero_movil_usuario'] . " " . $this->docentesPlanGlobal[$i]['numero_fijo_usuario'] . "\n";
}
 ?></textarea>
                            <script>
                              docentesTotales = <?php echo json_encode($this->docentesTotales); ?>                              
                              docentesPlanGlobal = <?php echo json_encode($this->docentesPlanGlobal); ?>

                              setDocentes(docentesTotales.concat(docentesPlanGlobal));
                            </script>

                           </div>
                          </div>
                        </div>

                        <div class="row"> <!-- campo para añadir correo-->
                          <div class="col-xs-12">
                           <div class="form-group">
                              <label for="correo">Correos:</label>

<textarea readonly class="form-control"name="" id="correos" cols="60" rows="3">
<?php 
for ($i=0; $i < count($this->docentesPlanGlobal); $i++) { 
echo $this->docentesPlanGlobal[$i]['nombre_usuario'] . ": " . $this->docentesPlanGlobal[$i]['correo_usuario'] . "\n";
}
 ?></textarea>

                           </div>
                          </div>
                        </div>

                     <?php 

}

 ?>  
    <?php 
      //Parte 2
      include ROOT.'views'.DS.'planGlobal'.DS.'editarPG2.php"';
      
      //Parte 3
      include ROOT.'views'.DS.'planGlobal'.DS.'editarPG3.php"';                            
    ?>
    
    <?php
      // Parte 4
      include ROOT.'views'.DS.'planGlobal'.DS.'editarPG4.php"';                             
      
      //Parte 5
      include ROOT.'views'.DS.'planGlobal'.DS.'editarPG5.php"';                            
     
      //Parte 6
      include ROOT.'views'.DS.'planGlobal'.DS.'editarPG6.php"';

      //Parte 7                            
      include ROOT.'views'.DS.'planGlobal'.DS.'editarPG7.php"';                            

    ?>
    
    <br><br>
    <button class="submit btn btn-default" type="submit" required>REGISTRAR PLAN GLOBAL</button>
                                



             </fieldset>

       </form>      
      
      </div>             
     </div>
        
      </div>
     </article>
     
     <div class="container-fluid" id="paginador">
            <nav>
            <ul class="pager"> <!--campo para los paginadores para pasar a la continuacion del formulario-->
              <!--<li class="next"><a href="<?php echo BASE_URL; ?>planGlobal/registrar/2">siguiente &rarr;</a></li>-->
              <li class="next"><a href="#">siguiente &rarr;</a></li>
            </ul>
            </nav>
      </div>

  </section>


</div>
  <footer> 
    <!--Codigo para incluir el pie de pagina-->
    <?php 
       include ROOT.'views'.DS.'include'.DS.'pie_de_pagina.php"'
    ?> <!--fin del codigo de pie de pagina-->  
  </footer>

  <div class="modal fade" id="modalProcesoExitoso" data-keyboard="false" data-backdrop="static"> <!--div contenedor de la ventana emergente de registro de materia-->
           <div class="modal-dialog modal-sm"> <!--div de la ventana emergente-->
               <div class="modal-content">
                       <!--Cabecera de la ventana-->
                       <!-- <div class="modal-header"> -->
                       <!--Contenido de la ventana-->
                       <div class="modal-body"> 
                         <div id="nuevo"> <!--formulario para regitrar los datos de una materia-->
                           <h5 class="modal-title">Plan Global registrada exitosamente!!</h5> <!--Titulo del formulario de registro de materia-->
                         </div>
                       </div> 

                       <!--footer de la ventana-->
                       <div class="modal-footer">
                          <!-- <button type="button" class="btn btn-default" data-dismiss="modal">Aceptar</button> -->
                          <a data-url="<?php echo BASE_URL; ?>planGlobal/mostrarPlanGlobal/" 
                            data-url-buscar="<?php echo BASE_URL; ?>planGlobal/getPlanGlobalInsertado"
                            onclick="irANuevoPlanGlobal(this);" class="btn btn-default">Aceptar</a>
                       </div>
                </div>
            </div>
        </div>

  <script>
    confirmar = <?php echo isset($this->confirmarGuardar)?$this->confirmarGuardar:"2";?>;
    if(confirmar == "1")
      $("#modalProcesoExitoso").modal('show');

    
  </script>
  
</body>

</html>
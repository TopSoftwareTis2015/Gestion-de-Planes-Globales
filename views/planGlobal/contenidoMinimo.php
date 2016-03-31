<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Contenido Minimo</title>
    <!--importando librerias utiles para trabajar con estilos CSS de bootstrap-->
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/public/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>public/style/estilo.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>public/style/newStyle.css">

    <!--importantando las librerias para trabajar con jquery y javascript de bootstrap-->
    <script type="text/javascript" src="<?php echo BASE_URL; ?>public/js/jquery-1.12.0.js"></script>
    <script type="text/javascript" src="<?php echo BASE_URL; ?>views/planGlobal/js/validarDatosBackEnd.js"></script>
    <script type="text/javascript" src="<?php echo BASE_URL; ?>views/planGlobal/js/validarDatosFrontEnd.js"></script>
    <script type="text/javascript" src="<?php echo BASE_URL; ?>views/planGlobal/js/seleccionarItem.js"></script>
    <script type="text/javascript" src="<?php echo BASE_URL; ?>public/js/bootstrap.js"></script>
  
</head>
<body>
  <!-- div contenedor -->
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
    <nav class="navbar navbar-default navbar-fixed-top">

     <div class="container-fluid"> 
       
       <!--div para realizar un menu desplegable que funcione en dispositivos moviles--> 
       <div class="navbar-header">
  
         <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu_horizontal">
           <span class="sr-only">toggle-navigation</span>
           <span class="icon-bar"></span>
           <span class="icon-bar"></span>
           <span class="icon-bar"></span>
         </button>
         <a href="#" class="navbar-brand">Menu</a>
       </div>

       <div class="collapse navbar-collapse" id="menu_horizontal">
          <ul class="nav navbar-nav">
            <li><a href="<?php echo BASE_URL; ?>index.php">Inicio</a></li>
            <li><a href="#">Contactos</a></li>
            
            <li class="dropdown"><!--Opcion dropdown-->
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Administracion<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li> <a href="<?php echo BASE_URL; ?>materias">Registro Materias</a> </li>
                <li> <a href="">Formatos Plan Global</a> </li>
              </ul>
            </li>
          </ul>
        </div>
     </div> 
    </nav>
    <!--fin del menu horizontal--> 
    
     <div class="main row">
     <br>
     	<nav id="menu" class="col-xs-12 col-sm-4 col-md-3">
	      <div class="container-fluid">
	        <div class="row">

	            <!--  <div id="MainMenu">
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
			                                  <a href=""><strong>Contenido Minimo</strong></a>
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

	    <div class="container-fluid col-xs-12 col-sm-8 col-md-9" id="vista">
 
	        <!-- <nav class="navbar navbar-inverse">
	          <div class="container-fluid">
	            <ul class="nav navbar-nav">
	              <li><a href=""><b>Editar</b></a></li>
	              <li><a href=""><b>Contenido Minimo</b></a></li>  
	            </ul>
	          </div>
	        </nav> -->
	        <div class="page-header">
	        	<h1 class="text-center"><u>Contenido Minimo</u></h1>
	        </div>
            
            <div class="panel panel-default">
			 <div class="panel-vista container-fluid">
	           <div class="col-md-10">
	            <h5><p><b>UNIVERSIDAD MAYOR DE SAN SIMON</b></p></h5>
	            <h5><p><b>FACULTAD DE CIENCIAS Y TECNOLOGIA<b></p></h5>
	            <h5><p><b>UNIDAD ACADEMICA DEPARTAMENTO DE INFORMATICA - SISTEMAS<b></p></h5>
	            <h5><p><b>PLAN DE ESTUDIO: LICENCIATURA EN INFORMATICA – LICENCIATURA EN INGENIERIA DE SISTEMAS<b></p></h5>
	           </div>
	           <div class="col-md-2">
	              <br>
	           	  <img src="<?php echo BASE_URL; ?>views/planGlobal/imagen/fcyt.jpg" class="img-responsive" width="85" height="85" alt="">
	           </div>
	           <legend id="separador"></legend>
	           
	           <div class="table-responsive">
    		     <div class="datagrid">
	    		    <table class="table table-bordered order-table" id="datos">
	    		      <thead>
				         <tr class="contenido_minimo">
				           <!--nombres de las columnas de la tabla de materias-->  
					       <th>Asignatura: <?php if(isset($this->materia)) echo $this->materia['nombre_materia'];?></th>
				           <th>Codigo: <?php if(isset($this->codigo)) echo $this->codigo;?></th>

				    	 </tr>
				      </thead>
				      <tbody>
				      	<tr class="contenido_minimo">
				           <td colspan="2" align="left">                
							
							<?php 
				              if(isset($this->unidades)){
				                  for ($i=0; $i < count($this->unidades); $i++) {
				            ?>
				              <br>
				              <p>
				                <b class="unidades">UNIDAD <?php echo $this->unidades[$i]['numero_unidad'] . ": " .
				                strtoupper($this->unidades[$i]['titulo_unidad']); ?></b>
				              </p>
				            <?php 
				                  if($this->unidades[$i]['objetivo_unidad']){
				            ?>
				              <p><mark>Objetivo de la Unidad</mark></p>
				              <p>
				                <?php echo $this->unidades[$i]['objetivo_unidad']; ?>
				              </p>
				                
				            <?php  
				                  }

				                  if($this->unidades[$i][9]){// 'id_capitulo' = 9
				                    $unidadAnterior = $this->unidades[$i][1]; // 'id_unidad' = 1
				            ?>
				              <p><mark>Contenido:</mark></p>
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
							                               
                            <!-- Contenido Minimo -->
					 <!-- <p>UNIDAD 1: ELEMENTOS DE PROGRAMACION</p>
								1.1. Concepto de recursión. 1.2.  Partes de la recursión;Mecanismos formales de recursión. 1.3. Reglas de la recursividad. 1.4. Recursión vs. iteración 1.5. Coste Espacial. 1.6. Implementación de la recursividad en ejemplos de aplicación.

                          <p>UNIDAD 2: PROGRAMACION ORIENTADA A OBJETOS AVANZADA</p>
								2.1.Conceptos básicos de la POO. 2.2 Polimorfismo. 2.3 Genericidad. 2.4 Propiedades de datos abstractos 2.5 Generalización: estructural y de facilidades – herencia. Clases abstractas, ineterfaces. 2.6  Flujos de Entrada y salida

						  <p>UNIDAD 3: MEMORIA DINAMICA</p>
								3.1 Datos estáticos y dinámicos. 3.2 Tipo puntero. 3.3 Gestión de memoria dinámica 3.4 Operaciones con punteros. 3.5 Listas enlazadas. 3.6 Operaciones con listas enlazadas 3.7 Listas doblemente enlazadas

						  <p>UNIDAD 4: ESTRUCTURAS DE DATOS LINEALES</p>
								4.1 Definición y representación de estructuras de datos lineales. 4.2 Tipo abstracto de dato: pila, cola.  4.3 Tipos de estructuras de almacenamiento. 4.4 Operaciones con pila. 4.5 Operaciones con colas. 4.6 Paquetes de estrustura de datos lineales. 4.7 Ejercicios de aplicación
						  <p>UNIDAD 5: ESTRUCTURAS DE DATOS NO LINEALES</p>
								5.1 Definición de estructuras de datos no lineales. 5.2  Arboles. 5.3 ´Arboles n- arios. 5.4  Arboles binarios. 5.5 Arboles binarios de búsqueda. 5.6 Arboles balanceados. 5.7 Arboles B. 5.8  Operaciones con arboles: inserción, borrado, recorrido, búsqueda. 5.9 Análisis de desempeño 5.10 Grafos: dirigidos – no dirigidos, recorridos, búsquedas, conectividad, caminos 5.11 Ejercicios de aplicación -->


				                <!-- contenido minimo   -->
					            

				           </td>			
			            </tr>
				      </tbody>
				    </table>
 			     </div>
 			   </div>

			 </div>			 	
			</div> 
	        
	    </div>
     </div>
	
	</div>
	<!-- fin div contenedor -->
   
    <footer> 
     <!--Codigo para incluir el pie de pagina-->
     <?php 
       include ROOT.'views'.DS.'include'.DS.'pie_de_pagina.php"'
     ?>
    </footer>
</body>
</html>
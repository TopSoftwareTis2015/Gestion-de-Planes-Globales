
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
  <script>
      /*function getComboA(sel) {
          var value = sel.value;
          var id = 'gMateria' + value;
          var valor = document.getElementById(id);
          var dato = valor.innerHTML;
          //alert(dato);
          window.location.href = "listaDocControlador.php?dato=" + dato;
      }*/
  </script>                      
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
        <div class="panel-body">
          <h4><p class="text-center">UNIVERSIDAD MAYOR DE SAN SIMON</p></h4>
          <h4><p class="text-center">FACULTAD DE CIENCIAS Y TECNOLOGIA</p></h4>
          <legend id="separador"></legend>
              
          <h3><strong><center>Plan global</center></strong></h3>
          <h4 class="text-center"><strong>ELEMENTOS DE PROGRAMACION Y ESTRUCTURA DE DATOS</strong></h4>
          <br>
          <ol type="I">
            <h4 class="vistaSub"><li><b>DATOS DE IDENTIFICACION</b></li></h4>

             <div class="panel panel-default">
                <div class="table-responsive">
                  <table class="table table-striped table-bordered">
                    <tr class="text-align-legf">
                      <td>Nombre de la materia:</td>
                      <td>Elementos de Programacion y Estructura de Datos</td>
                    </tr>
                    <tr>
                      <td>Codigo:</td>
                      <td>2010003</td>
                    </tr>
                    <tr>
                      <td>Grupo:</td>
                      <td>1,2,3,4y5</td>
                    </tr>
                    <tr>
                      <td>Cargahoraria:</td>
                      <td>4 periodos teoricos, 2 periodos pr&aacute;ctica</td>
                    </tr>
                    <tr>
                      <td>Materias relacionadas</td>
                      <td>
                        Introducci&oacute;n a la Programaci&oacute;n M&aacute;todos,T&aacute;cnicas y Taller de Programaci&oacute;n
                      </td>
                    </tr>
                    <tr>
                      <td>Docentes:</td>
                      <td>
                        RoseMary Salazar <br>
                        Leticia Blanco Coca <br>
                        Jhonny Arias Tapia <br>
                      </td>
                    </tr>
                    <tr>
                      <td>Tel&eacute;fono:</td>
                      <td>4233719</td>
                    </tr>
                    <tr>
                      <td>Correoelectr&oacute;nico:</td>
                      <td>
                        r.salazar@umss.edu.bo <br>
                        leticia@memi.umss.edu.bo <br>
                        jarias@memi.umss.edu.bo <br>
                      </td> 
                    </tr>
                  </table>
                </div>
              </div>

            <h4 class="vistaSub"><li><b>JUSTIFICACION</b></li></h4>
              <p class="text-justify">
                Después de tener los conocimientos básicos de programación, se necesita contar con más elementos que ayuden a un profesional del área de ciencias de la computación, a resolver problemas de forma elegante, eﬁciente y correcta. La ﬁnalidad de este curso es brindar al estudiante un conjunto de conceptos que identiﬁcan elementos importantes que enriquecen la metodología de programación, es importante también considerar las distintas estructuras que existen para representarlos datos.
                La algoritmia es una parte importante para poder abstraer soluciones que serán automatizadas, la demostración de la correctitud de un algoritmo entonces es importante, para poder asegurar la resolución de un problema; otro aspecto importante que considerar es la eﬁciencia de los algoritmos que se escriben, respecto al tiempo y al recurso de memoria que estos consumen para lograr su objetivos.
              </p>
            
            <h4 class="vistaSub"><li><b>OBJETIVOS</b></li></h4>
              <ol>
                <!-- lista de objetivos generales -->
                <h4><li><b>Objetivos Generales</b></h4>
                  <ul>
                    <li type="square">
                     Conseguir habilidades para enfrentar la solucion de problemas utilizando la POO
                     <p><b>Descripcion </b>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque, perferendis maxime reprehenderit voluptatibus accusamus dicta, quasi quia odio nam incidunt id tempore minus non, exercitationem hic voluptate natus totam ea.</p>
                    </li>
                    <li type="square"> 
                     Analizarlaeﬁcienciadesolucionesautomatizadasaproblemas
                     <p><b>Descripcion </b>Reprehenderit deleniti voluptates pariatur, praesentium sed error, debitis iusto soluta possimus aspernatur necessitatibus inventore ipsa molestias quos rem commodi aliquam quam vel?</p>
                    </li>
                  </ul>
                </li>
                
                <!-- lista de objetivos especificos -->
                <h4><li><b>Objetivos Especificos</b></h4>
                   <ul>
                     <li type="square">
                       Introducir a las estructuras de datos, de forma conceptual y practica.
                       <p><b>Descripcion </b>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa facere commodi, amet temporibus quisquam asperiores aperiam quae assumenda ducimus. Molestiae, ullam eius, consequuntur unde molestias qui vero pariatur. Error, voluptates.</p>
                     </li>
                     <li type="square">  
                       Aplicar estructuras de datos adecuadas para la resolucion de problemas
                       <p><b>Descripcion </b>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab sequi sunt perferendis blanditiis, voluptate esse praesentium impedit. Minus perspiciatis similique, adipisci iure id quidem enim, deserunt eaque impedit vero! Quasi.</p>
                     </li>
                     <li type="square">
                       Introducir concepto de administracion dinamica de memoria e implementar estructuras de datos en base a enlaces
                       <p><b>Descripcion </b>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam, impedit porro laborum fugiat blanditiis non praesentium illo, repellat officia? Minima, a, ullam? Sint, quam! Molestias enim beatae fugiat, reiciendis blanditiis.</p>
                     </li>
                   </ul>
                </li>
              </ol>

            <!-- contenido minimo   -->
            <h4 class="vistaSub"><li><b>SELECCION Y ORGANIZACION DE CONTENIDOS</b></li></h4>
              <br><p class="text-center"><b>Unidad1:Programacion orientada al objeto</b></p>
                <p><b>Objetivo de la Unidad</b></p>
                <p>
                Al ﬁnal de la unidad, el estudiante tendra un marco general de la POO,retomando lo aprendido en Introduccion a la Programacion y fortaleciendo conceptos de herencia y mane jo de ﬂujos de IO.
                </p>
              <br><p class="text-center"><b>Unidad2:Programacion orientada al objeto</b></p>
                <p><b>Objetivo de la Unidad</b></p>
                <p>
                Al ﬁnal de la unidad, el estudiante tendra un marco general de la POO,retomando lo aprendido en Introduccion a la Programacion y fortaleciendo conceptos de herencia y mane jo de ﬂujos de IO.
                </p>
                  <ol>
                    <li>Deﬁnicion de recursion.
                    </li>
                    <li>Partes de la recursion.
                      <ol>
                        <li>Subtitulo</li>
                        <li>Subtitulos</li>
                      </ol>
                    </li>
                    <li>Reglas de recursividad.</li>
                    <li>Implementacion de la recursividad en ejemplos de aplicacion.</li>
                  </ol>
              <br><p class="text-center"><b>Unidad3:Programacion orientada al objeto</b></p>
                <p><b>Objetivo de la Unidad</b></p>
                <p>
                Al ﬁnalizar la unidad, el estudiante sera capaz de: encontrar el tiempo de ejecucion de una propuesta de solucion, encontrar la complejidad de una propuesta de solucion elegir entre varias alternativas de solucion en base a metricas de eﬁciencia.Probar la correctitud de las propuestas de solucion de forma matematica.
                </p>
                  <ol>
                    <li>Algoritmo.
                      <ol>
                        <li>Subtitulo</li>
                        <li>Subtitulos</li>
                      </ol>
                    </li>
                    <li>Eﬁciencia temporal.</li>
                    <li>Tiemposde ejecucion.</li>
                    <li>Complejidad.</li>
                    <li>Eﬁciencia espacial.</li>
                  </ol>
              <br><p class="text-center"><b>Unidad4:Programacion orientada al objeto</b></p>
                <p><b>Objetivo de la Unidad</b></p>
                <p>
                 Al ﬁnal de la unidad, el estudiante sera capaz de: explicar, especiﬁcar, distinguir y aplicar las estructuras de datos lineales.
                </p>
                  <ol>
                      <li>Deﬁnicion de estructuras de datos lineales.
                      </li>
                      <li>Deﬁnicion de listas: organizacion y operaciones estandares.</li>
                      <li>Deﬁnicion de pilas.
                        <ol>
                          <li>Subtitulo</li>
                          <li>Subtitulos</li>
                        </ol>
                      </li>
                      <li>Sobreescritura</li>
                      <li>Deﬁnicion de colas.</li>
                    </ol>


            <h4 class="vistaSub"><li><b>METODOLOGIAS</b></li></h4>
              <p class="text-justify">
                Clases magistrales ilustrando los conceptos con ejemplos. El estudiante tiene que implementar aplicaciones pequeñas utilizando los diferentes conceptos de la materia.
                Es importante que el estudiante practique en la computadora fuera de clases, por cada unidad, el estudiante debe entregar trabajos de aplicación utilizando de forma correcta los conceptos. Estos trabajos son imprescindibles para rendir los exámenes escritos.
                Por otro lado, para veriﬁcar el funcionamiento de implementaciones de clase, se plantean algunas de las clases en laboratorio.
                Material de apoyo se provee a través de la página de la materia www.memi.umss.edu.bo/ elementos, las herramientas para este curso son Java y BlueJ.
             </p>
             <link rel="stylesheet" href="">
            <h4 class="vistaSub"><li><b>CRONOGRAMA O DURACION EN PERIODOS ACADEMICOS POR UNIDAD</b></li></h4>
              <p>El cronograma y avance de la materia se regir&aacute; por la siguiente secuencia</p>
              <div class="panel panel-default">
                <div class="table-responsive">
                  <table class="table table-striped table-bordered">
                    <tr>
                      <th class="text-center">UNIDAD</th>
                      <th class="text-center">DURACION HRS. ACADEMICAS</th>
                      <th class="text-center">DURACION SEMANAS</th>
                    </tr>
                    <tr>
                        <td>Programacion Orientada a Objetos</td>
                        <td>22</td>
                        <td>3</td>
                    </tr>
                    <tr>
                      <td>Elementos de Progamacion</td>
                      <td>22</td>
                      <td>3</td>
                    </tr>
                    <tr>
                      <td>Unidad ..3</td>
                      <td>22</td>
                      <td>3</td>
                    </tr>
                    <tr>
                      <td>Unidad ..4</td>
                      <td>22</td>
                      <td>3</td>
                    </tr>
                  </table>
                </div>
              </div>


            <h4 class="vistaSub"><li><b>CRITERIOS DE EVALUACION</b></li></h4>
              <ul class="text-justify">
                <li>
                  Evaluación diagnostica. Al principio del semestre es necesario nivelar a los estudiantes respecto a conceptos de POO. Para ello se hace un repaso de los conceptos principales, en base a la participación de los estudiantes respondiendo a preguntas y respuestas que el profesor realiza. Del mismo modo en clases acerca de material ya avanzado.
                </li>
                <li>
                  Evaluación formativa. Durante el semestre y por cada unidad el estudiante debe entregar trabajos que apliquen los conceptos introducidos, esta tarea se hace en coordinación con los auxiliares de la materia.
                </li>
                <li>
                  Evaluación sumativa. La materia consta de exámenes escritos que tienen un ponderado en la nota ﬁnal, así mismo los trabajos que se realizan en el transcurso del semestre son de carácter habilitante a estas pruebas escritas.
                </li>
              </ul>
            <h4 class="vistaSub"><li><b>BIBLIOGRAFIA</b></li></h4>    
              <ul>
                <li type="disc">
                  <b>Estructuras de datos y algoritmos,</b>MARK ALLEN WEISS. Addison Wesley 2nd edition, 2006
                </li>
                <li type="disc">
                  <b>Introduction to algorithms,</b> THOMAS CORMEN, CHARLES LEISERSON,RONALD RIVEST. MITPress-2001
                </li>
                <li type="disc">
                  <b>Algorithms and data structures: the science of computing,</b> DOUGLAS BALD WINANDGREGW. SCRAGG. Charles River Media(C)2004
                </li>
                <li type="disc">
                  <b>Objects ﬁrst with java. A practical introduction using BLUEJ,</b> DAVID BARNES,MICHAEL KOLLING. Prentice Hall,2006
                </li>
              </ul>
          </ol>

        </div>
     </div>
    </div> 
  </section>
</div>
  <footer> 
    <!--Codigo para incluir el pie de pagina-->
    <?php 
       include ROOT.'views'.DS.'include'.DS.'pie_de_pagina.php"'
    ?> <!--fin del codigo de pie de pagina-->  
  </footer>

</body>

</html>
function repararContainer(contenedor){
  if(contenedor.childNodes[0] instanceof Text){
    var primerObjetivo = contenedor.childNodes[1];
    contenedor.innerHTML="";
    contenedor.appendChild(primerObjetivo);
  }
}

//funcion para crear campos para objetivos generales
function addObjetivo(idObjetivoContainer)
{
  
   var nuevoObjetivo = document.createElement("fieldset");
   var contenedor = document.getElementById(idObjetivoContainer);

   var ultimoObjetivo = 1;

  if(contenedor.childNodes.length){
    repararContainer(contenedor);
    ultimoObjetivo = parseInt(contenedor.lastChild.dataset.numeroObjetivo) + 1;
  }

   nuevoObjetivo.dataset.numeroObjetivo = ultimoObjetivo;
   identificadorObjetivo = idObjetivoContainer.replace("objetivo", "objetivo"+nuevoObjetivo.dataset.numeroObjetivo);
   nuevoObjetivo.id = "container_" + identificadorObjetivo;
    
    contenedor.appendChild(nuevoObjetivo);

    var nuevoElemento03 = '<legend>Objetivo '+nuevoObjetivo.dataset.numeroObjetivo+'</legend>';

    var nuevoElemento04 = '<div class="form-group">';
    var nuevoElemento05 = '<label for="titulo_'+identificadorObjetivo+'">Titulo:</label>';
    var nuevoElemento06 = '<input class="form-control" type="text" name="titulo_'+identificadorObjetivo+'" id="titulo_'+identificadorObjetivo+'" required>';
    var nuevoElemento07 = '</div>';
    var nuevoElemento08 = '<div class="form-group">';
    var nuevoElemento09 = '<label for="descripcion_'+identificadorObjetivo+'">Descripcion:</label>';
    var nuevoElemento10 = '<textarea class="form-control" name="descripcion_'+identificadorObjetivo+'" id="descripcion_'+identificadorObjetivo+'" cols="100" rows="5"></textarea>';
    var nuevoElemento11 = '</div>';
    var nuevoElemento12 = '<input class="btn pull-right btn-primary btn-warning" type="button" value="eliminar X" onClick="eliminarObjetivo(\''+nuevoObjetivo.id+'\');" ><br><br><br>'; 
    
    nuevoObjetivo.innerHTML = /*objetivo.innerHTML + nuevoElemento01 + nuevoElemento02 + */nuevoElemento03 + nuevoElemento04 +
        nuevoElemento05 + nuevoElemento06 + nuevoElemento07 + nuevoElemento08 + nuevoElemento09 + nuevoElemento10 +
        nuevoElemento11 + nuevoElemento12;// + nuevoElemento13;// + nuevoElemento14;
}

function addBibliografia(idBibliografiaContainer)
{
  
   var nuevaBibliografia = document.createElement("div");
   var contenedor = document.getElementById(idBibliografiaContainer);

   ultimaBibliografia = 1;

  if(contenedor.childNodes.length){
    repararContainer(contenedor);
    ultimaBibliografia = parseInt(contenedor.lastChild.dataset.numeroBibliografia) + 1;
  }


   nuevaBibliografia.dataset.numeroBibliografia = ultimaBibliografia;
   identificadorBibliografia = idBibliografiaContainer.replace("bibliografia", "bibliografia"+nuevaBibliografia.dataset.numeroBibliografia);
   nuevaBibliografia.id = "container_" + identificadorBibliografia;
   nuevaBibliografia.className = "container-fluid";
    
    contenedor.appendChild(nuevaBibliografia);

    var nuevoElemento03 = '<legend id="separador"> </legend>';
    var nuevoElemento04 = '<div class="form-group">';
    var nuevoElemento05 = '<label for="titulo_'+identificadorBibliografia+'">Titulo:</label>';
    var nuevoElemento06 = '<input class="form-control" type="text" name="titulo_'+identificadorBibliografia+'" id="titulo_'+identificadorBibliografia+'" required>';
    var nuevoElemento07 = '</div>';
    var nuevoElemento08 = '<div class="form-group">';
    var nuevoElemento09 = '<label for="autor_'+identificadorBibliografia+'">Autor:</label>';
    var nuevoElemento10 = '<input class="form-control" type="text" name="autor_'+identificadorBibliografia+'" id="autor_'+identificadorBibliografia+'" required>';
    var nuevoElemento11 = '</div>';
    var nuevoElemento12 = '<input class="btn pull-right btn-primary btn-warning" type="button" value="eliminar X" onclick="eliminarBibliografia(\''+nuevaBibliografia.id+'\');" ><br><br><br>'; 
    
    nuevaBibliografia.innerHTML = /*objetivo.innerHTML + nuevoElemento01 + nuevoElemento02 + */nuevoElemento03 + nuevoElemento04 +
        nuevoElemento05 + nuevoElemento06 + nuevoElemento07 + nuevoElemento08 + nuevoElemento09 + nuevoElemento10 +
        nuevoElemento11 + nuevoElemento12;// + nuevoElemento13;// + nuevoElemento14;
}

function addSeccion(idSeccionContainer)
{
   var nuevaSeccion = document.createElement("fieldset");
   var contenedor = document.getElementById(idSeccionContainer);

   var ultimaSeccion = 1;

  if(contenedor.childNodes.length){
     repararContainer(contenedor);
     var ultimaSeccion = parseInt(contenedor.lastChild.dataset.numeroSeccion) + 1;
  }



   nuevaSeccion.dataset.numeroSeccion = ultimaSeccion;
   identificadorSeccion = idSeccionContainer + ultimaSeccion;
   nuevaSeccion.id = "container_" + identificadorSeccion;
    
    contenedor.appendChild(nuevaSeccion);

    var nuevoElemento01 = '<button type="button" class="close" aria-hidden="true" onclick="eliminarSeccion(\''+nuevaSeccion.id+'\');" title="Eliminar esta Seccion!">&times; eliminar Seccion</button><br>';
    var nuevoElemento02 = '<legend>Seccion Personalizada '+ultimaSeccion+'</legend>';

    var nuevoElemento03 = '<div class="form-group">';
    var nuevoElemento04 = '<label for="titulo_'+identificadorSeccion+'">Titulo de la Seccion:</label>';
    var nuevoElemento05 = '<input class="form-control" type="text" name="titulo_'+identificadorSeccion+'" id="titulo_'+identificadorSeccion+'" required>';
    var nuevoElemento06 = '</div>';
    var nuevoElemento07 = '<div class="form-group">';
    var nuevoElemento08 = '<label for="objetivo_'+identificadorSeccion+'">Objetivo:</label>';
    var nuevoElemento09 = '<textarea class="form-control" name="objetivo_'+identificadorSeccion+'" id="objetivo_'+identificadorSeccion+'" cols="100" rows="3"></textarea>';
    var nuevoElemento10 = '</div>';

    var nuevoElemento11 = "";

    var nuevoElemento12 = '<div class="container-fluid recuadro">';
    var nuevoElemento13 = '<legend>CONTENIDO</legend>';
    
    var nuevoElemento14 = '<fieldset id="contenido_seccion'+ultimaSeccion+'"></fieldset>';
    // var nuevoElemento15 = '<div class="container-fluid recuadro" id="container_contenido1_seccion'+ultimaSeccion+'" data-numero-contenido="1">';
    // var nuevoElemento16 = "";

    // var nuevoElemento17 = '<legend>Contenido 1</legend>';
    // var nuevoElemento18 = '<div class="form-group">';
    // var nuevoElemento19 = '<label for="titulo_contenido1_seccion'+ultimaSeccion+'">Titulo del Capitulo:</label>';
    // var nuevoElemento20 = '<input class="form-control" type="text" name="titulo_contenido1_seccion'+ultimaSeccion+'" id="titulo_contenido1_seccion'+ultimaSeccion+'" required>';
    // var nuevoElemento21 = '</div>';

    // var nuevoElemento22 = '<div class="form-group">';
    // var nuevoElemento23 = '<label for="descripcion_contenido1_seccion'+ultimaSeccion+'">Descripcion del Contenido:</label>';
    // var nuevoElemento24 = '<textarea class="form-control" name="descripcion_contenido1_seccion'+ultimaSeccion+'" id="descripcion_contenido1_seccion'+ultimaSeccion+'" cols="100" rows="3"></textarea>';
    // var nuevoElemento25 = '</div>';

    // var nuevoElemento26 = '<div id="subtitulo_contenido1_seccion'+ultimaSeccion+'" class="form-group col-md-6 col-md-offset-3">';
    
    // var nuevoElemento27 = '<div id="container_subtitulo1_contenido1_seccion'+ultimaSeccion+'" data-numero-subtitulo="1">';
    // var nuevoElemento28 = '<label for="subtitulo1_contenido1_seccion'+ultimaSeccion+'">Subtitulo:</label>';
    // var nuevoElemento29 = '<input class="form-control" type="text" name="subtitulo1_contenido1_seccion'+ultimaSeccion+'" id="subtitulo1_contenido1_seccion'+ultimaSeccion+'" required>';
    // var nuevoElemento30 = '</div>';

    // var nuevoElemento31 = '</div>';
    
    // var nuevoElemento32 = '<input class="btn btn-primary col-md-6 col-sm-6 col-xs-6 col-md-offset-3" type="button" value="Añadir Subtitulo" onclick="addSubtituloContenidoSeccion(\'subtitulo_contenido1_seccion'+ultimaSeccion+'\');">';

    // var nuevoElemento33 = '</div>';

    // var nuevoElemento34 = '</fieldset>';

    var nuevoElemento15 = '<br>';
    var nuevoElemento16 = '<input class="btn btn-primary type="button" value="Añadir Contenido" onClick="addContenidoSeccion(\'contenido_seccion'+ultimaSeccion+'\');"> <br> <br>';
    var nuevoElemento17 = '</div><br><br>';
    
    nuevaSeccion.innerHTML = nuevoElemento01 + nuevoElemento02 + nuevoElemento03 + nuevoElemento04 +
        nuevoElemento05 + nuevoElemento06 + nuevoElemento07 + nuevoElemento08 + nuevoElemento09 + nuevoElemento10 +
        nuevoElemento11 + nuevoElemento12 + nuevoElemento13 + nuevoElemento14 +
        nuevoElemento15 + nuevoElemento16 + nuevoElemento17;/* + nuevoElemento18 + nuevoElemento19 + nuevoElemento20 +
        nuevoElemento21 + nuevoElemento22 + nuevoElemento23 + nuevoElemento24 +
        nuevoElemento25 + nuevoElemento26 + nuevoElemento27 + nuevoElemento28 + nuevoElemento29 + nuevoElemento30 +
        nuevoElemento31 + nuevoElemento32 + nuevoElemento33 + nuevoElemento34 + nuevoElemento35 + nuevoElemento36 + nuevoElemento37;*/
}


function addContenidoSeccion(idContenidoContainer)
{
   var nuevoContenido = document.createElement("div");
   var contenedor = document.getElementById(idContenidoContainer);


   var ultimoContenido = 1;

  if(contenedor.childNodes.length){
     repararContainer(contenedor);
     var ultimoContenido = parseInt(contenedor.lastChild.dataset.numeroContenido) + 1;
  }
   


   nuevoContenido.dataset.numeroContenido = ultimoContenido;
   var identificadorContenido = idContenidoContainer.replace("contenido", "contenido"+ ultimoContenido);
   nuevoContenido.id = "container_" + identificadorContenido;
   nuevoContenido.className = "container-fluid recuadro";
    
    contenedor.appendChild(nuevoContenido);

    var nuevoElemento01 = '<br><br><button type="button" class="close" aria-hidden="true" onclick="eliminarContenidoSeccion(\''+nuevoContenido.id+'\')" title="Eliminar este Contenido!">&times; eliminar contenido</button><br>';
    var nuevoElemento02 = '';

    var nuevoElemento03 = '<legend>Contenido '+ultimoContenido+'</legend>';
    var nuevoElemento04 = '<div class="form-group">';
    var nuevoElemento05 = '<label for="titulo_'+identificadorContenido+'">Titulo del Contenido:</label>';
    var nuevoElemento06 = '<input class="form-control" type="text" name="titulo_'+identificadorContenido+'" id="titulo_'+identificadorContenido+'" required>';
    var nuevoElemento07 = '</div>';

    var nuevoElemento08 = '<div class="form-group">';
    var nuevoElemento09 = '<label for="descripcion_'+identificadorContenido+'">Descripcion del Contenido:</label>';
    var nuevoElemento10 = '<textarea class="form-control" name="descripcion_'+identificadorContenido+'" id="descripcion_'+identificadorContenido+'" cols="100" rows="3"></textarea>';
    var nuevoElemento11 = '</div>';

    var nuevoElemento12 = '<div id="subtitulo_'+identificadorContenido+'" class="form-group col-md-6 col-md-offset-3"></div>';
    
    // var nuevoElemento13 = '<div id="container_subtitulo1_'+identificadorContenido+'" data-numero-subtitulo="1">';
    // var nuevoElemento14 = '<label for="subtitulo1_'+identificadorContenido+'">Subtitulo:</label>';
    // var nuevoElemento15 = '<input class="form-control" type="text" name="subtitulo1_'+identificadorContenido+'" id="subtitulo1_'+identificadorContenido+'" required>';
    // var nuevoElemento16 = '</div>';

    // var nuevoElemento17 = '</div>';
    
    var nuevoElemento13 = '<input class="btn btn-primary col-md-6 col-sm-6 col-xs-6 col-md-offset-3" type="button" value="Añadir Subtitulo" onclick="addSubtituloContenidoSeccion(\'subtitulo_'+identificadorContenido+'\');"> <br> <br>';
    
    nuevoContenido.innerHTML = nuevoElemento01 + nuevoElemento02 + nuevoElemento03 + nuevoElemento04 +
        nuevoElemento05 + nuevoElemento06 + nuevoElemento07 + nuevoElemento08 + nuevoElemento09 + nuevoElemento10 +
        nuevoElemento11 + nuevoElemento12 + nuevoElemento13;/* + nuevoElemento14 +
        nuevoElemento15 + nuevoElemento16 + nuevoElemento17 + nuevoElemento18;*/
}

function addSubtituloContenidoSeccion(idSubituloContainer)
{ 
   var nuevoSubtitulo = document.createElement("div");
   var contenedor = document.getElementById(idSubituloContainer);

    var ultimoSubtitulo = 1;

  if(contenedor.childNodes.length){
     repararContainer(contenedor);
     var ultimoSubtitulo = parseInt(contenedor.lastChild.dataset.numeroSubtitulo) + 1;
  }




   nuevoSubtitulo.dataset.numeroSubtitulo = ultimoSubtitulo;
   identificadorObjetos = idSubituloContainer.replace("subtitulo", "subtitulo"+ ultimoSubtitulo);
   nuevoSubtitulo.id = "container_" + identificadorObjetos;
    
    contenedor.appendChild(nuevoSubtitulo);

    var nuevoElemento01 = '<button type="button" class="close" aria-hidden="true" onclick="eliminarSubtitulo(\''+nuevoSubtitulo.id+'\')" title="Eliminar este Subtitulo!">&times;</button><br>';
    var nuevoElemento02 = '<label for="'+identificadorObjetos+'">Subtitulo:</label>';
    var nuevoElemento03 = '<input class="form-control" type="text" name="'+identificadorObjetos+'" id="'+identificadorObjetos+'" required>';
    
    nuevoSubtitulo.innerHTML = nuevoElemento01 + nuevoElemento02 + nuevoElemento03;
}

function addUnidad(idUnidadContainer)
{
  
   var nuevaUnidad = document.createElement("fieldset");
   var contenedor = document.getElementById(idUnidadContainer);

   repararContainer(contenedor);

   var ultimaUnidad = parseInt(contenedor.lastChild.dataset.numeroUnidad) + 1;
   nuevaUnidad.dataset.numeroUnidad = ultimaUnidad;
   nuevaUnidad.id = "container_" + idUnidadContainer + nuevaUnidad.dataset.numeroUnidad;
    
    contenedor.appendChild(nuevaUnidad);

    var nuevoElemento01 = '<button type="button" class="close" aria-hidden="true" onclick="eliminarUnidad(\''+nuevaUnidad.id+'\')" title="Eliminar esta unidad!">&times; eliminar unidad</button><br>';
    var nuevoElemento02 = '<legend>Unidad '+nuevaUnidad.dataset.numeroUnidad+'</legend>';

    var nuevoElemento03 = '<div class="form-group">';
    var nuevoElemento04 = '<label for="titulo_'+idUnidadContainer+ultimaUnidad+'">Titulo de la Unidad:</label>';
    var nuevoElemento05 = '<input class="form-control" type="text" name="titulo_'+idUnidadContainer+ultimaUnidad+'" id="titulo_'+idUnidadContainer+ultimaUnidad+'" required onkeyup="actualizarUnidadCronograma(\''+nuevaUnidad.id+'\');">';
    var nuevoElemento06 = '</div>';
    var nuevoElemento07 = '<div class="form-group">';
    var nuevoElemento08 = '<label for="objetivo_'+idUnidadContainer+ultimaUnidad+'">Objetivo:</label>';
    var nuevoElemento09 = '<textarea class="form-control" name="objetivo_'+idUnidadContainer+ultimaUnidad+'" id="objetivo_'+idUnidadContainer+ultimaUnidad+'" cols="100" rows="3"></textarea>';
    var nuevoElemento10 = '</div>';
    var nuevoElemento11 = '<div>';
    var nuevoElemento12 = '<div class="container-fluid recuadro">';
    var nuevoElemento13 = '<legend>CONTENIDO</legend>';
    
    var nuevoElemento14 = '<div id="contenido_unidad'+ultimaUnidad+'"></div>';
    // var nuevoElemento15 = '<fieldset id="container_contenido1_unidad'+ultimaUnidad+'" data-numero-contenido="1">';

    // var nuevoElemento16 = '<div class="clearfix">';

    // var nuevoElemento17 = '<legend>Capitulo 1</legend>';
    // var nuevoElemento18 = '<div class="form-group">';
    // var nuevoElemento19 = '<label for="titulo_contenido1_unidad'+ultimaUnidad+'">Titulo del Capitulo:</label>';
    // var nuevoElemento20 = '<input class="form-control" type="text" name="titulo_contenido1_unidad'+ultimaUnidad+'" id="titulo_contenido1_unidad'+ultimaUnidad+'" required>';
    // var nuevoElemento21 = '</div>';

    // var nuevoElemento22 = '<div id="subtitulo_contenido1_unidad'+ultimaUnidad+'">';
    
    // var nuevoElemento23 = '<div class="form-group col-md-6 col-md-offset-3" id="container_subtitulo1_contenido1_unidad'+ultimaUnidad+'" data-numero-subtitulo="1">';
    // var nuevoElemento24 = '<label for="subtitulo1_contenido1_unidad'+ultimaUnidad+'">Subtitulo:</label>';
    // var nuevoElemento25 = '<input class="form-control" type="text" name="subtitulo1_contenido1_unidad'+ultimaUnidad+'" id="subtitulo1_contenido1_unidad'+ultimaUnidad+'" required>';
    // var nuevoElemento26 = '</div>';

    // var nuevoElemento27 = '</div>';
    
    // var nuevoElemento28 = '<input class="btn btn-primary col-md-6 col-sm-6 col-xs-6 col-md-offset-3" type="button" value="Añadir Subtitulo" onclick="addSubtitulo(\'subtitulo_contenido1_unidad'+ultimaUnidad+'\');">';

    // var nuevoElemento29 = '</div>';

    // var nuevoElemento30 = '</fieldset>';

    // var nuevoElemento31 = '</div>';

    var nuevoElemento15 = '</div>';
    var nuevoElemento16 = '<br>';
    var nuevoElemento17 = '</div>';
    var nuevoElemento18 = '<input class="btn btn-primary pull-right" type="button" value="Añadir Capitulo" onClick="addCapitulo(\'contenido_unidad'+ultimaUnidad+'\');">';
    var nuevoElemento19 = '<br> <br> ';
    
    nuevaUnidad.innerHTML = nuevoElemento01 + nuevoElemento02 + nuevoElemento03 + nuevoElemento04 +
        nuevoElemento05 + nuevoElemento06 + nuevoElemento07 + nuevoElemento08 + nuevoElemento09 + nuevoElemento10 +
        nuevoElemento11 + nuevoElemento12 + nuevoElemento13 + nuevoElemento14 +
        nuevoElemento15 + nuevoElemento16 + nuevoElemento17 + nuevoElemento18 + nuevoElemento19;/* + nuevoElemento20 +
        nuevoElemento21 + nuevoElemento22 + nuevoElemento23 + nuevoElemento24 +
        nuevoElemento25 + nuevoElemento26 + nuevoElemento27 + nuevoElemento28 + nuevoElemento29 + nuevoElemento30 +
        nuevoElemento31 + nuevoElemento32 + nuevoElemento33 + nuevoElemento34 + nuevoElemento35 + nuevoElemento36;*/

    actualizarCronograma(nuevaUnidad.id);
}

function actualizarCronograma(idUnidad){
  var tablaCronograma = document.getElementById('tab_cronograma');


  var nuevaFilaCronograma = document.createElement('tr');
  
  repararContainer(tablaCronograma.childNodes[3]);



  tablaCronograma.childNodes[3].appendChild(nuevaFilaCronograma);

  nuevaFilaCronograma.id = idUnidad+"_fila";
  var elemento01 = '<td id="'+idUnidad+'_titulo"></td>';
  var elemento02 = '<td><input id="'+idUnidad+'_horas" name="'+idUnidad+'_horas" type="number" min="1" required onkeyup="sumar(this.value,this.id)"></td>';
  var elemento03 = '<td><input id="'+idUnidad+'_semanas" name="'+idUnidad+'_semanas" type="text" required readonly></td>';

  nuevaFilaCronograma.innerHTML = elemento01 + elemento02 + elemento03;
}


//cambia el nombre de la unidad en la fila respectiva del cronograma.
function actualizarUnidadCronograma(idUnidad){
  var fila = document.getElementById(idUnidad+"_fila");

  //cambiando la fila en base al idUnidad encontrando el idTitulo y del titulo sacando su valor.
  document.getElementById(idUnidad+"_titulo").innerHTML= document.getElementById(
                                                    "titulo_"+idUnidad.replace("container_","")).value;
}

function addCapitulo(idContenidoContainer)
{
  
   var nuevoContenido = document.createElement("fieldset");
   var contenedor = document.getElementById(idContenidoContainer);

   var ultimoContenido = 1;

  if(contenedor.childNodes.length){
    repararContainer(contenedor);
    ultimoContenido = parseInt(contenedor.lastChild.dataset.numeroContenido) + 1;
  }

   var unidadPadre = idContenidoContainer.replace("contenido_","");
   nuevoContenido.dataset.numeroContenido = ultimoContenido;
   nuevoContenido.id = "container_" + idContenidoContainer.replace("contenido", "contenido"+ ultimoContenido);
    
    contenedor.appendChild(nuevoContenido);

    var nuevoElemento01 = '<br><br><button type="button" class="close" aria-hidden="true" onclick="eliminarContenido(\''+nuevoContenido.id+'\')" title="Eliminar este Contenido!">&times; eliminar contenido</button><br>';
    var nuevoElemento02 = '<div class="clearfix">';

    var nuevoElemento03 = '<legend>Capitulo '+ultimoContenido+'</legend>';
    var nuevoElemento04 = '<div class="form-group">';
    var nuevoElemento05 = '<label for="titulo_contenido'+ultimoContenido+'_'+unidadPadre+'">Titulo del Capitulo:</label>';
    var nuevoElemento06 = '<input class="form-control" type="text" name="titulo_contenido'+ultimoContenido+'_'+unidadPadre+'" id="titulo_contenido'+ultimoContenido+'_'+unidadPadre+'" required>';
    var nuevoElemento07 = '</div>';

    var nuevoElemento08 = '<div id="subtitulo_contenido'+ultimoContenido+'_'+unidadPadre+'"></div>';
    
    // var nuevoElemento09 = '<div class="form-group col-md-6 col-md-offset-3" id="container_subtitulo1_contenido'+ultimoContenido+'_'+unidadPadre+'" data-numero-subtitulo="1">';
    // var nuevoElemento10 = '<label for="subtitulo1_contenido'+ultimoContenido+'_'+unidadPadre+'">Subtitulo:</label>';
    // var nuevoElemento11 = '<input class="form-control" type="text" name="subtitulo1_contenido'+ultimoContenido+'_'+unidadPadre+'" id="subtitulo1_contenido'+ultimoContenido+'_'+unidadPadre+'" required>';
    // var nuevoElemento12 = '</div>';

    // var nuevoElemento13 = '</div>';
    
    var nuevoElemento09 = '<input class="btn btn-primary col-md-6 col-sm-6 col-xs-6 col-md-offset-3" type="button" value="Añadir Subtitulo" onclick="addSubtitulo(\'subtitulo_contenido'+ultimoContenido+'_'+unidadPadre+'\');">';

    var nuevoElemento10 = '</div>';
    
    nuevoContenido.innerHTML = nuevoElemento01 + nuevoElemento02 + nuevoElemento03 + nuevoElemento04 +
        nuevoElemento05 + nuevoElemento06 + nuevoElemento07 + nuevoElemento08 + nuevoElemento09 + nuevoElemento10;/* +
        nuevoElemento11 + nuevoElemento12 + nuevoElemento13 + nuevoElemento14 +
        nuevoElemento15;*/
}

function eliminarObjetivo(idObjetivo){
  var objetivo = document.getElementById(idObjetivo);

  var contador = 0; // me sirve para nombrar los nuevos objetivos.
  var containerObjetivo = objetivo.parentNode;
  var numeroObjetivo = parseInt(objetivo.dataset.numeroObjetivo);

  containerObjetivo.removeChild(objetivo);

  for (var i = 0; i < containerObjetivo.childNodes.length; i++) {
    if(i>= (numeroObjetivo - 1)){
      modificarObjetivo(containerObjetivo.childNodes[i], numeroObjetivo+contador);
      contador++;
    }
  };
}

function eliminarBibliografia(idBibliografia){
  var bibliografia = document.getElementById(idBibliografia);

  var contador = 0; // me sirve para nombrar los nuevos bibliografias.
  var containerBibliografia = bibliografia.parentNode;
  var numeroBibliografia = parseInt(bibliografia.dataset.numeroBibliografia);

  containerBibliografia.removeChild(bibliografia);

  for (var i = 0; i < containerBibliografia.childNodes.length; i++) {
    if(i>= (numeroBibliografia - 1)){
      modificarBibliografia(containerBibliografia.childNodes[i], numeroBibliografia+contador);
      contador++;
    }
  };
}

function eliminarContenido(idContenido){
  contenido = document.getElementById(idContenido);

  var contador = 0; // me sirve para nombrar los  nuevos contenidos.
  var containerContenido = contenido.parentNode;
  var numeroContenido = parseInt(contenido.dataset.numeroContenido);

  containerContenido.removeChild(contenido);

  for (var i = 0; i < containerContenido.childNodes.length; i++) {
    if(i >= (numeroContenido - 1)){
      modificarContenido(containerContenido.childNodes[i], numeroContenido+contador);
      contador++;
    }
  };
}

function eliminarContenidoSeccion(idContenido){
  contenido = document.getElementById(idContenido);

  var contador = 0; // me sirve para nombrar los  nuevos contenidos.
  var containerContenido = contenido.parentNode;
  var numeroContenido = parseInt(contenido.dataset.numeroContenido);

  containerContenido.removeChild(contenido);

  for (var i = 0; i < containerContenido.childNodes.length; i++) {
    if(i >= (numeroContenido - 1)){
      modificarContenidoSeccion(containerContenido.childNodes[i], numeroContenido+contador);
      contador++;
    }
  };
}


function eliminarUnidad(idUnidad){
  unidad = document.getElementById(idUnidad);

  var contador = 0; // me sirve para nombrar los  nuevos unidads.
  var containerUnidad = unidad.parentNode;
  var numeroUnidad = parseInt(unidad.dataset.numeroUnidad);

  containerUnidad.removeChild(unidad);

  for (var i = 0; i < containerUnidad.childNodes.length; i++) {
    if(i >= (numeroUnidad - 1)){
      modificarUnidad(containerUnidad.childNodes[i], numeroUnidad+contador);
      contador++;
    }
  };

  eliminarUnidadCronograma(idUnidad);
}

function eliminarUnidadCronograma(idUnidad){
  var filaAEliminar = document.getElementById(idUnidad+"_fila");
  filaAEliminar.parentNode.removeChild(filaAEliminar);
}


function eliminarSeccion(idSeccion){
  seccion = document.getElementById(idSeccion);

  var contador = 0; // me sirve para nombrar los  nuevos seccions.
  var containerSeccion = seccion.parentNode;
  var numeroSeccion = parseInt(seccion.dataset.numeroSeccion);

  containerSeccion.removeChild(seccion);

  for (var i = 0; i < containerSeccion.childNodes.length; i++) {
    if(i >= (numeroSeccion - 1)){
      modificarSeccion(containerSeccion.childNodes[i], numeroSeccion+contador);
      contador++;
    }
  };
}

function modificarObjetivo(objetivo, nuevoNumeroObjetivo){
  oldId = objetivo.id.split("_")[1];
  newId = "objetivo"+nuevoNumeroObjetivo;

  objetivo.id = objetivo.id.replace(oldId, newId);
  
  objetivo.dataset.numeroObjetivo = nuevoNumeroObjetivo;
  //modificando el titulo del objetivo.
  objetivo.childNodes[0].innerHTML = "Objetivo " + nuevoNumeroObjetivo;
  //modificando el input del titulo del objetivo.
  objetivo.childNodes[1].childNodes[0].setAttribute("for", objetivo.childNodes[1].childNodes[1].id.replace(oldId, newId));
  var atributoAuxiliar = objetivo.childNodes[1].childNodes[0].getAttribute("for");
  objetivo.childNodes[1].childNodes[1].id = atributoAuxiliar;
  objetivo.childNodes[1].childNodes[1].name = atributoAuxiliar;

  //modificando el input de la descripcion del objetivo.
  objetivo.childNodes[2].childNodes[0].setAttribute("for", objetivo.childNodes[2].childNodes[1].id.replace(oldId, newId));
  var atributoAuxiliar = objetivo.childNodes[2].childNodes[0].getAttribute("for");
  objetivo.childNodes[2].childNodes[1].id = atributoAuxiliar;
  objetivo.childNodes[2].childNodes[1].name = atributoAuxiliar;
  //actualizamos el boton eliminar del objetivo
  objetivo.childNodes[3].setAttribute("onclick", "eliminarObjetivo('"+objetivo.id+"'");
}

function modificarBibliografia(bibliografia, nuevoNumeroBibliografia){
  oldId = bibliografia.id.split("_")[1];
  newId = "bibliografia"+nuevoNumeroBibliografia;

  bibliografia.id = bibliografia.id.replace(oldId, newId);
  
  bibliografia.dataset.numeroBibliografia = nuevoNumeroBibliografia;

  //modificando el input del titulo del bibliografia.
  bibliografia.childNodes[1].childNodes[0].setAttribute("for", bibliografia.childNodes[1].childNodes[1].id.replace(oldId, newId));
  var atributoAuxiliar = bibliografia.childNodes[1].childNodes[0].getAttribute("for");
  bibliografia.childNodes[1].childNodes[1].id = atributoAuxiliar;
  bibliografia.childNodes[1].childNodes[1].name = atributoAuxiliar;

  //modificando el input del autor del bibliografia.
  bibliografia.childNodes[2].childNodes[0].setAttribute("for", bibliografia.childNodes[2].childNodes[1].id.replace(oldId, newId));
  var atributoAuxiliar = bibliografia.childNodes[2].childNodes[0].getAttribute("for");
  bibliografia.childNodes[2].childNodes[1].id = atributoAuxiliar;
  bibliografia.childNodes[2].childNodes[1].name = atributoAuxiliar;
  //actualizamos el boton eliminar del bibliografia
  bibliografia.childNodes[3].setAttribute("onclick", "eliminarBibliografia('"+bibliografia.id+"');");
}



function modificarContenido(contenido, nuevoNumeroContenido){
  oldId = contenido.id.split("_")[1];
  newId = "contenido"+nuevoNumeroContenido;

  contenido.id = contenido.id.replace(oldId, newId);
  
  contenido.dataset.numeroContenido = nuevoNumeroContenido;

  contenido.childNodes[2].setAttribute("onclick","eliminarContenido('"+contenido.id+"')");

  contenido.childNodes[4].childNodes[0].innerHTML = "Capitulo " + nuevoNumeroContenido;
  contenido.childNodes[4].childNodes[1].childNodes[0].setAttribute("for", contenido.childNodes[4].childNodes[1].childNodes[1].id.replace(oldId, newId));
  var atributoAuxiliar = contenido.childNodes[4].childNodes[1].childNodes[0].getAttribute("for");
  contenido.childNodes[4].childNodes[1].childNodes[1].id = atributoAuxiliar;
  contenido.childNodes[4].childNodes[1].childNodes[1].name = atributoAuxiliar;

  contenido.childNodes[4].childNodes[2].id = contenido.childNodes[4].childNodes[2].id.replace(oldId, newId);

  for (var i = 0; i < contenido.childNodes[4].childNodes[2].childNodes.length; i++) {
    modificarSectorSubtitulo(contenido.childNodes[4].childNodes[2].childNodes[i], oldId, newId);
  };

  contenido.childNodes[4].childNodes[3].setAttribute("onclick", "addSubtitulo('"+contenido.childNodes[4].childNodes[2].id+"');")
}

function modificarContenidoSeccion(contenido, nuevoNumeroContenido){
  oldId = contenido.id.split("_")[1];
  newId = "contenido"+nuevoNumeroContenido;

  contenido.id = contenido.id.replace(oldId, newId);
  
  contenido.dataset.numeroContenido = nuevoNumeroContenido;

  contenido.childNodes[2].setAttribute("onclick","eliminarContenidoSeccion('"+contenido.id+"')");

  contenido.childNodes[4].innerHTML = "Contenido " + nuevoNumeroContenido;
  
  contenido.childNodes[5].childNodes[0].setAttribute("for", contenido.childNodes[5].childNodes[1].id.replace(oldId, newId));
  var atributoAuxiliar = contenido.childNodes[5].childNodes[0].getAttribute("for");
  contenido.childNodes[5].childNodes[1].id = atributoAuxiliar;
  contenido.childNodes[5].childNodes[1].name = atributoAuxiliar;

  contenido.childNodes[6].childNodes[0].setAttribute("for", contenido.childNodes[6].childNodes[1].id.replace(oldId, newId));
  var atributoAuxiliar = contenido.childNodes[6].childNodes[0].getAttribute("for");
  contenido.childNodes[6].childNodes[1].id = atributoAuxiliar;
  contenido.childNodes[6].childNodes[1].name = atributoAuxiliar;

  contenido.childNodes[7].id = contenido.childNodes[7].id.replace(oldId, newId);

  for (var i = 0; i < contenido.childNodes[7].childNodes.length; i++) {
    modificarSectorSubtitulo(contenido.childNodes[7].childNodes[i], oldId, newId);
  };

  contenido.childNodes[8].setAttribute("onclick", "addSubtituloContenidoSeccion('"+contenido.childNodes[7].id+"');");
}

function modificarSectorContenido(contenido, oldId, newId){
  contenido.id = contenido.id.replace(oldId, newId);

  contenido.childNodes[2].setAttribute("onclick","eliminarContenido('"+contenido.id+"')");

  contenido.childNodes[4].childNodes[0].innerHTML = "Capitulo " + nuevoNumeroContenido;
  contenido.childNodes[4].childNodes[1].childNodes[0].setAttribute("for", contenido.childNodes[4].childNodes[1].childNodes[1].id.replace(oldId, newId));
  var atributoAuxiliar = contenido.childNodes[4].childNodes[1].childNodes[0].getAttribute("for");
  contenido.childNodes[4].childNodes[1].childNodes[1].id = atributoAuxiliar;
  contenido.childNodes[4].childNodes[1].childNodes[1].name = atributoAuxiliar;

  contenido.childNodes[4].childNodes[2].id = contenido.childNodes[4].childNodes[2].id.replace(oldId, newId);

  for (var i = 0; i < contenido.childNodes[4].childNodes[2].childNodes.length; i++) {
    modificarSectorSubtitulo(contenido.childNodes[4].childNodes[2].childNodes[i], oldId, newId);
  };

  contenido.childNodes[4].childNodes[3].setAttribute("onclick", "addSubtitulo('"+contenido.childNodes[4].childNodes[2].id+"');")
}


function modificarSectorContenidoSeccion(contenido, oldId, newId){
  alert(contenido.id);
  contenido.id = contenido.id.replace(oldId, newId);

  contenido.childNodes[2].setAttribute("onclick","eliminarContenidoSeccion('"+contenido.id+"')");
  console.log(contenido);
  contenido.childNodes[5].childNodes[0].setAttribute("for", contenido.childNodes[5].childNodes[1].id.replace(oldId, newId));
  var atributoAuxiliar = contenido.childNodes[5].childNodes[0].getAttribute("for");
  contenido.childNodes[5].childNodes[1].id = atributoAuxiliar;
  contenido.childNodes[5].childNodes[1].name = atributoAuxiliar;

  contenido.childNodes[6].childNodes[0].setAttribute("for", contenido.childNodes[6].childNodes[1].id.replace(oldId, newId));
  var atributoAuxiliar = contenido.childNodes[6].childNodes[0].getAttribute("for");
  contenido.childNodes[6].childNodes[1].id = atributoAuxiliar;
  contenido.childNodes[6].childNodes[1].name = atributoAuxiliar;

  contenido.childNodes[7].id = contenido.childNodes[7].id.replace(oldId, newId);

  for (var i = 0; i < contenido.childNodes[7].childNodes.length; i++) {
    modificarSectorSubtitulo(contenido.childNodes[7].childNodes[i], oldId, newId);
  };

  contenido.childNodes[8].setAttribute("onclick", "addSubtituloContenidoSeccion('"+contenido.childNodes[7].id+"');");
}

function modificarUnidad(unidad, nuevoNumeroUnidad){
  oldId = unidad.id.split("_")[1];
  newId = "unidad"+nuevoNumeroUnidad;

  //actualiza el valor de su cronograma
  modificarUnidadCronograma(unidad.id, oldId, newId);

  unidad.id = unidad.id.replace(oldId, newId);
  
  unidad.dataset.numeroUnidad = nuevoNumeroUnidad;

  unidad.childNodes[0].setAttribute("onclick","eliminarUnidad('"+unidad.id+"')");

  unidad.childNodes[2].innerHTML = "Unidad " + nuevoNumeroUnidad;

  //modificando id y name del titulo de la unidad.
  unidad.childNodes[3].childNodes[0].setAttribute("for", unidad.childNodes[3].childNodes[1].id.replace(oldId, newId));
  var atributoAuxiliar = unidad.childNodes[3].childNodes[0].getAttribute("for");
  unidad.childNodes[3].childNodes[1].id = atributoAuxiliar;
  unidad.childNodes[3].childNodes[1].name = atributoAuxiliar;

  unidad.childNodes[3].childNodes[1].setAttribute("onkeyup","actualizarUnidadCronograma('"+unidad.id+"');")

  //modificando id y name del objetivo de la unidad.
  unidad.childNodes[4].childNodes[0].setAttribute("for", unidad.childNodes[4].childNodes[1].id.replace(oldId, newId));
  var atributoAuxiliar = unidad.childNodes[4].childNodes[0].getAttribute("for");
  unidad.childNodes[4].childNodes[1].id = atributoAuxiliar;
  unidad.childNodes[4].childNodes[1].name = atributoAuxiliar;

  //actualizando los ids y names de contenido y subtitulos.
  unidad.childNodes[5].childNodes[0].childNodes[1].id = unidad.childNodes[5].childNodes[0].childNodes[1].id.replace(oldId, newId);

  for (var i = 0; i < unidad.childNodes[5].childNodes[0].childNodes[1].length; i++) {
    modificarSectorContenido(unidad.childNodes[5].childNodes[0].childNodes[1].childNodes[i], oldId, newId);
  };

  //actualizando el boton de añadir capitulos a una unidad con diferente id.
  unidad.childNodes[6].setAttribute("onclick", "addCapitulo('"+unidad.childNodes[5].childNodes[0].childNodes[1].id +"');");
}

function modificarUnidadCronograma(idUnidad, oldId, newId){
  var fila = document.getElementById(idUnidad+"_fila");
  var titulo = document.getElementById(idUnidad+"_titulo");
  var horas = document.getElementById(idUnidad+"_horas");
  var semanas = document.getElementById(idUnidad+"_semanas");

  fila.id = fila.id.replace(oldId, newId);
  titulo.id = titulo.id.replace(oldId, newId);
  horas.name = horas.name.replace(oldId, newId);
  horas.id = horas.name;
  semanas.name = semanas.name.replace(oldId, newId);
  semanas.id = semanas.name;
}

function modificarSeccion(seccion, nuevoNumeroSeccion){
  oldId = seccion.id.split("_")[1];
  newId = "seccion"+nuevoNumeroSeccion;
  seccion.id = seccion.id.replace(oldId, newId);

  seccion.dataset.numeroSeccion = nuevoNumeroSeccion;

  seccion.childNodes[0].setAttribute("onclick","eliminarSeccion('"+seccion.id+"')");

  seccion.childNodes[2].innerHTML = "Seccion Personalizada " + nuevoNumeroSeccion;

  //modificando id y name del titulo de la seccion.
  seccion.childNodes[3].childNodes[0].setAttribute("for", seccion.childNodes[3].childNodes[1].id.replace(oldId, newId));
  var atributoAuxiliar = seccion.childNodes[3].childNodes[0].getAttribute("for");
  seccion.childNodes[3].childNodes[1].id = atributoAuxiliar;
  seccion.childNodes[3].childNodes[1].name = atributoAuxiliar;

  //modificando id y name del objetivo de la seccion.
  seccion.childNodes[4].childNodes[0].setAttribute("for", seccion.childNodes[4].childNodes[1].id.replace(oldId, newId));
  var atributoAuxiliar = seccion.childNodes[4].childNodes[0].getAttribute("for");
  seccion.childNodes[4].childNodes[1].id = atributoAuxiliar;
  seccion.childNodes[4].childNodes[1].name = atributoAuxiliar;

  //actualizando los ids y names de contenido y subtitulos.
  seccion.childNodes[5].childNodes[1].id = seccion.childNodes[5].childNodes[1].id.replace(oldId, newId);

  for (var i = 0; i < seccion.childNodes[5].childNodes[1].childNodes.length; i++) {
    modificarSectorContenidoSeccion(seccion.childNodes[5].childNodes[1].childNodes[i], oldId, newId);
  };

  //actualizando el boton de añadir capitulos a una seccion con diferente id.
  seccion.childNodes[5].childNodes[3].setAttribute("onclick", "addContenidoSeccion('"+seccion.childNodes[5].childNodes[1].id +"');");
}


function addSubtitulo(idSubituloContainer)
{
  
   var nuevoSubtitulo = document.createElement("div");
   var contenedor = document.getElementById(idSubituloContainer);

   var ultimoSubtitulo = 1;

  if(contenedor.childNodes.length){
    repararContainer(contenedor);
    ultimoSubtitulo = parseInt(contenedor.lastChild.dataset.numeroSubtitulo) + 1;
  }

   nuevoSubtitulo.dataset.numeroSubtitulo = ultimoSubtitulo;
   identificadorObjetos = idSubituloContainer.replace("subtitulo", "subtitulo"+ ultimoSubtitulo);
   nuevoSubtitulo.id = "container_" + identificadorObjetos;
   nuevoSubtitulo.className = "form-group col-md-6 col-md-offset-3";
    
    contenedor.appendChild(nuevoSubtitulo);

    var nuevoElemento01 = '<button type="button" class="close" aria-hidden="true" onclick="eliminarSubtitulo(\''+nuevoSubtitulo.id+'\')" title="Eliminar este Subtitulo!">&times;</button><br>';
    var nuevoElemento02 = '<label for="'+identificadorObjetos+'">Subtitulo:</label>';
    var nuevoElemento03 = '<input class="form-control" type="text" name="'+identificadorObjetos+'" id="'+identificadorObjetos+'" required>';
    
    nuevoSubtitulo.innerHTML = nuevoElemento01 + nuevoElemento02 + nuevoElemento03;
}

function eliminarSubtitulo(idSubtitulo){
  subtitulo = document.getElementById(idSubtitulo);
  var contador = 0; // me sirve para nombrar los  nuevos subtitulos.
  var containerSubtitulo = subtitulo.parentNode;
  var numeroSubtitulo = parseInt(subtitulo.dataset.numeroSubtitulo);

  containerSubtitulo.removeChild(subtitulo);

  for (var i = 0; i < containerSubtitulo.childNodes.length; i++) {
    if(i >= (numeroSubtitulo - 1)){
      modificarSubtitulo(containerSubtitulo.childNodes[i], numeroSubtitulo+contador);
      contador++;
    }
  };
}

function modificarSubtitulo(subtitulo, nuevoNumeroSubtitulo){
  oldId = subtitulo.id.split("_")[1];
  newId = "subtitulo"+nuevoNumeroSubtitulo;

  subtitulo.id = subtitulo.id.replace(oldId, newId);
  subtitulo.dataset.numeroSubtitulo = nuevoNumeroSubtitulo;

  subtitulo.childNodes[0].setAttribute("onclick", "eliminarSubtitulo('container_"+subtitulo.childNodes[3].id.replace(oldId, newId)+"')");
  subtitulo.childNodes[2].setAttribute("for", subtitulo.childNodes[3].id.replace(oldId, newId));
  //subtitulo.childNodes[2].for = subtitulo.childNodes[2].for.replace(oldId, newId);
  subtitulo.childNodes[3].id = subtitulo.childNodes[3].id.replace(oldId, newId);
  subtitulo.childNodes[3].name = subtitulo.childNodes[3].name.replace(oldId, newId);
}

function modificarSectorSubtitulo(subtitulo, oldId, newId){
  subtitulo.id = subtitulo.id.replace(oldId, newId);

  subtitulo.childNodes[0].setAttribute("onclick", "eliminarSubtitulo('container_"+subtitulo.childNodes[3].id.replace(oldId, newId)+"')");
  subtitulo.childNodes[2].setAttribute("for", subtitulo.childNodes[3].id.replace(oldId, newId));
  //subtitulo.childNodes[2].for = subtitulo.childNodes[2].for.replace(oldId, newId);
  subtitulo.childNodes[3].id = subtitulo.childNodes[3].id.replace(oldId, newId);
  subtitulo.childNodes[3].name = subtitulo.childNodes[3].name.replace(oldId, newId);
}

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

   repararContainer(contenedor);

   var ultimoObjetivo = parseInt(contenedor.lastChild.dataset.numeroObjetivo) + 1;
   nuevoObjetivo.dataset.numeroObjetivo = ultimoObjetivo;
   identificadorObjetivo = idObjetivoContainer.replace("objetivo", "objetivo"+nuevoObjetivo.dataset.numeroObjetivo);
   nuevoObjetivo.id = "container_" + identificadorObjetivo;
    
    contenedor.appendChild(nuevoObjetivo);

    var nuevoElemento03 = '<legend>Objetivo '+nuevoObjetivo.dataset.numeroObjetivo+'</legend>';

    var nuevoElemento04 = '<div class="form-group">';
    var nuevoElemento05 = '<label for="titulo_'+identificadorObjetivo+'">Titulo:</label>';
    var nuevoElemento06 = '<input class="form-control" type="text" name="titulo_'+identificadorObjetivo+'" id="titulo_'+identificadorObjetivo+'">';
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

   repararContainer(contenedor);

   var ultimaBibliogragia = parseInt(contenedor.lastChild.dataset.numeroBibliografia) + 1;
   nuevaBibliografia.dataset.numeroBibliografia = ultimaBibliogragia;
   identificadorBibliografia = idBibliografiaContainer.replace("bibliografia", "bibliografia"+nuevaBibliografia.dataset.numeroBibliografia);
   nuevaBibliografia.id = "container_" + identificadorBibliografia;
   nuevaBibliografia.className = "container-fluid";
    
    contenedor.appendChild(nuevaBibliografia);

    var nuevoElemento03 = '<legend id="separador"> </legend>';
    var nuevoElemento04 = '<div class="form-group">';
    var nuevoElemento05 = '<label for="titulo_'+identificadorBibliografia+'">Titulo:</label>';
    var nuevoElemento06 = '<input class="form-control" type="text" name="titulo_'+identificadorBibliografia+'" id="titulo_'+identificadorBibliografia+'">';
    var nuevoElemento07 = '</div>';
    var nuevoElemento08 = '<div class="form-group">';
    var nuevoElemento09 = '<label for="autor_'+identificadorBibliografia+'">Autor:</label>';
    var nuevoElemento10 = '<input class="form-control" type="text" name="autor_'+identificadorBibliografia+'" id="autor_'+identificadorBibliografia+'">';
    var nuevoElemento11 = '</div>';
    var nuevoElemento12 = '<input class="btn pull-right btn-primary btn-warning" type="button" value="eliminar X" onClick="eliminarBibliografia(\''+nuevaBibliografia.id+'\');" ><br><br><br>'; 
    
    nuevaBibliografia.innerHTML = /*objetivo.innerHTML + nuevoElemento01 + nuevoElemento02 + */nuevoElemento03 + nuevoElemento04 +
        nuevoElemento05 + nuevoElemento06 + nuevoElemento07 + nuevoElemento08 + nuevoElemento09 + nuevoElemento10 +
        nuevoElemento11 + nuevoElemento12;// + nuevoElemento13;// + nuevoElemento14;
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
    var nuevoElemento05 = '<input class="form-control" type="text" name="titulo_'+idUnidadContainer+ultimaUnidad+'" id="titulo_'+idUnidadContainer+ultimaUnidad+'" required>';
    var nuevoElemento06 = '</div>';
    var nuevoElemento07 = '<div class="form-group">';
    var nuevoElemento08 = '<label for="objetivo_'+idUnidadContainer+ultimaUnidad+'">Objetivo:</label>';
    var nuevoElemento09 = '<textarea class="form-control" name="objetivo_'+idUnidadContainer+ultimaUnidad+'" id="objetivo_'+idUnidadContainer+ultimaUnidad+'" cols="100" rows="3"></textarea>';
    var nuevoElemento10 = '</div>';
    var nuevoElemento11 = '<div>';
    var nuevoElemento12 = '<div class="container-fluid recuadro">';
    var nuevoElemento13 = '<legend>CONTENIDO</legend>';
    
    var nuevoElemento14 = '<div id="contenido_unidad'+ultimaUnidad+'">';
    var nuevoElemento15 = '<fieldset id="container_contenido1_unidad'+ultimaUnidad+'" data-numero-contenido="1">';

    var nuevoElemento16 = '<div class="clearfix">';

    var nuevoElemento17 = '<legend>Capitulo 1</legend>';
    var nuevoElemento18 = '<div class="form-group">';
    var nuevoElemento19 = '<label for="titulo_contenido1_unidad'+ultimaUnidad+'">Titulo del Capitulo:</label>';
    var nuevoElemento20 = '<input class="form-control" type="text" name="titulo_contenido1_unidad'+ultimaUnidad+'" id="titulo_contenido1_unidad'+ultimaUnidad+'" required>';
    var nuevoElemento21 = '</div>';

    var nuevoElemento22 = '<div id="subtitulo_contenido1_unidad'+ultimaUnidad+'">';
    
    var nuevoElemento23 = '<div class="form-group col-md-6 col-md-offset-3" id="container_subtitulo1_contenido1_unidad'+ultimaUnidad+'" data-numero-subtitulo="1">';
    var nuevoElemento24 = '<label for="subtitulo1_contenido1_unidad'+ultimaUnidad+'">Subtitulo:</label>';
    var nuevoElemento25 = '<input class="form-control" type="text" name="subtitulo1_contenido1_unidad'+ultimaUnidad+'" id="subtitulo1_contenido1_unidad'+ultimaUnidad+'" required>';
    var nuevoElemento26 = '</div>';

    var nuevoElemento27 = '</div>';
    
    var nuevoElemento28 = '<input class="btn btn-primary col-md-6 col-sm-6 col-xs-6 col-md-offset-3" type="button" value="Añadir Subtitulo" onclick="addSubtitulo(\'subtitulo_contenido1_unidad'+ultimaUnidad+'\');">';

    var nuevoElemento29 = '</div>';

    var nuevoElemento30 = '</fieldset>';

    var nuevoElemento31 = '</div>';

    var nuevoElemento32 = '</div>';
    var nuevoElemento33 = '<br>';
    var nuevoElemento34 = '</div>';
    var nuevoElemento35 = '<input class="btn btn-primary pull-right" type="button" value="Añadir Capitulo" onClick="addCapitulo(\'contenido_unidad'+ultimaUnidad+'\');">';
    var nuevoElemento36 = '<br> <br> ';
    
    nuevaUnidad.innerHTML = nuevoElemento01 + nuevoElemento02 + nuevoElemento03 + nuevoElemento04 +
        nuevoElemento05 + nuevoElemento06 + nuevoElemento07 + nuevoElemento08 + nuevoElemento09 + nuevoElemento10 +
        nuevoElemento11 + nuevoElemento12 + nuevoElemento13 + nuevoElemento14 +
        nuevoElemento15 + nuevoElemento16 + nuevoElemento17 + nuevoElemento18 + nuevoElemento19 + nuevoElemento20 +
        nuevoElemento21 + nuevoElemento22 + nuevoElemento23 + nuevoElemento24 +
        nuevoElemento25 + nuevoElemento26 + nuevoElemento27 + nuevoElemento28 + nuevoElemento29 + nuevoElemento30 +
        nuevoElemento31 + nuevoElemento32 + nuevoElemento33 + nuevoElemento34 + nuevoElemento35 + nuevoElemento36;
}

function addCapitulo(idContenidoContainer)
{
  
   var nuevoContenido = document.createElement("fieldset");
   var contenedor = document.getElementById(idContenidoContainer);

   repararContainer(contenedor);

   var unidadPadre = idContenidoContainer.replace("contenido_","");
   var ultimoContenido = parseInt(contenedor.lastChild.dataset.numeroContenido) + 1;
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

    var nuevoElemento08 = '<div id="subtitulo_contenido'+ultimoContenido+'_'+unidadPadre+'">';
    
    var nuevoElemento09 = '<div class="form-group col-md-6 col-md-offset-3" id="container_subtitulo1_contenido'+ultimoContenido+'_'+unidadPadre+'" data-numero-subtitulo="1">';
    var nuevoElemento10 = '<label for="subtitulo1_contenido'+ultimoContenido+'_'+unidadPadre+'">Subtitulo:</label>';
    var nuevoElemento11 = '<input class="form-control" type="text" name="subtitulo1_contenido'+ultimoContenido+'_'+unidadPadre+'" id="subtitulo1_contenido'+ultimoContenido+'_'+unidadPadre+'" required>';
    var nuevoElemento12 = '</div>';

    var nuevoElemento13 = '</div>';
    
    var nuevoElemento14 = '<input class="btn btn-primary col-md-6 col-sm-6 col-xs-6 col-md-offset-3" type="button" value="Añadir Subtitulo" onclick="addSubtitulo(\'subtitulo_contenido'+ultimoContenido+'_'+unidadPadre+'\');">';

    var nuevoElemento15 = '</div>';
    
    nuevoContenido.innerHTML = nuevoElemento01 + nuevoElemento02 + nuevoElemento03 + nuevoElemento04 +
        nuevoElemento05 + nuevoElemento06 + nuevoElemento07 + nuevoElemento08 + nuevoElemento09 + nuevoElemento10 +
        nuevoElemento11 + nuevoElemento12 + nuevoElemento13 + nuevoElemento14 +
        nuevoElemento15;
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
  bibliografia.childNodes[3].setAttribute("onclick", "eliminarbibliografia('"+bibliografia.id+"'");
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

  for (var i = 1; i < contenido.childNodes[4].childNodes[2].childNodes.length; i++) {
    modificarSectorSubtitulo(contenido.childNodes[4].childNodes[2].childNodes[i], oldId, newId);
  };

  contenido.childNodes[4].childNodes[3].setAttribute("onclick", "addSubtitulo('"+contenido.childNodes[4].childNodes[2].id+"');")
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

  for (var i = 1; i < contenido.childNodes[4].childNodes[2].childNodes.length; i++) {
    modificarSectorSubtitulo(contenido.childNodes[4].childNodes[2].childNodes[i], oldId, newId);
  };

  contenido.childNodes[4].childNodes[3].setAttribute("onclick", "addSubtitulo('"+contenido.childNodes[4].childNodes[2].id+"');")
}


function modificarUnidad(unidad, nuevoNumeroUnidad){
  oldId = unidad.id.split("_")[1];
  newId = "unidad"+nuevoNumeroUnidad;

  unidad.id = unidad.id.replace(oldId, newId);
  
  unidad.dataset.numeroUnidad = nuevoNumeroUnidad;

  unidad.childNodes[0].setAttribute("onclick","eliminarUnidad('"+unidad.id+"')");

  unidad.childNodes[2].innerHTML = "Unidad " + nuevoNumeroUnidad;

  //modificando id y name del titulo de la unidad.
  unidad.childNodes[3].childNodes[0].setAttribute("for", unidad.childNodes[3].childNodes[1].id.replace(oldId, newId));
  var atributoAuxiliar = unidad.childNodes[3].childNodes[0].getAttribute("for");
  unidad.childNodes[3].childNodes[1].id = atributoAuxiliar;
  unidad.childNodes[3].childNodes[1].name = atributoAuxiliar;

  //modificando id y name del objetivo de la unidad.
  unidad.childNodes[4].childNodes[0].setAttribute("for", unidad.childNodes[4].childNodes[1].id.replace(oldId, newId));
  var atributoAuxiliar = unidad.childNodes[4].childNodes[0].getAttribute("for");
  unidad.childNodes[4].childNodes[1].id = atributoAuxiliar;
  unidad.childNodes[4].childNodes[1].name = atributoAuxiliar;

  //actualizando los ids y names de contenido y subtitulos.
  unidad.childNodes[5].childNodes[0].childNodes[1].id.replace(oldId, newId);

  for (var i = 0; i < unidad.childNodes[5].childNodes[0].childNodes[1].length; i++) {
    modificarSectorContenido(unidad.childNodes[5].childNodes[0].childNodes[1].childNodes[i], oldId, newId);
  };

  //actualizando el boton de añadir capitulos a una unidad con diferente id.
  unidad.childNodes[6].setAttribute("onclick", "addCapitulo('"+unidad.childNodes[5].childNodes[0].childNodes[1].id +"');");
}


function addSubtitulo(idSubituloContainer)
{
  
   var nuevoSubtitulo = document.createElement("div");
   var contenedor = document.getElementById(idSubituloContainer);

   repararContainer(contenedor);

   var ultimoSubtitulo = parseInt(contenedor.lastChild.dataset.numeroSubtitulo) + 1;
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

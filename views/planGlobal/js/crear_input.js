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
   nuevoObjetivo.id = "container_" + idObjetivoContainer + nuevoObjetivo.dataset.numeroObjetivo;
    
    contenedor.appendChild(nuevoObjetivo);

    var nuevoElemento03 = '<legend>Objetivo '+nuevoObjetivo.dataset.numeroObjetivo+'</legend>';



    //var nuevoElemento01 = '<div class="container-fluid" id="obj_'+(cont)+'">';
    //var nuevoElemento01 = '<div class="container-fluid" id="objG'+(id)+'">';
    //var nuevoElemento02 = '<fieldset>';
    var nuevoElemento04 = '<div class="form-group">';
    var nuevoElemento05 = '<label for="titulo_'+idObjetivoContainer+ultimoObjetivo+'">Titulo:</label>';
    var nuevoElemento06 = '<input class="form-control" type="text" name="titulo_'+idObjetivoContainer+ultimoObjetivo+'" id="titulo_'+idObjetivoContainer+ultimoObjetivo+'">';
    var nuevoElemento07 = '</div>';
    var nuevoElemento08 = '<div class="form-group">';
    var nuevoElemento09 = '<label for="descripcion_'+idObjetivoContainer+ultimoObjetivo+'">Descripcion:</label>';
    var nuevoElemento10 = '<textarea class="form-control" name="descripcion_'+idObjetivoContainer+ultimoObjetivo+'" id="descripcion_'+idObjetivoContainer+ultimoObjetivo+'" cols="100" rows="5"></textarea>';
    var nuevoElemento11 = '</div>';
    var nuevoElemento12 = '<input class="btn pull-right btn-primary btn-warning" type="button" value="eliminar X" onClick="eliminarObjetivo('+ultimoObjetivo+','+idObjetivoContainer+');" ><br><br><br>'; 
    //var nuevoElemento13 = '</fieldset>';
     
    //var nuevoElemento14 = '</div>';
    
    //window.alert(id);
    
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
   nuevaBibliografia.id = "container_" + idBibliografiaContainer + nuevaBibliografia.dataset.numeroBibliografia;
    
    contenedor.appendChild(nuevaBibliografia);

    var nuevoElemento03 = '<legend id="separador"> </legend>';
    var nuevoElemento04 = '<div class="form-group">';
    var nuevoElemento05 = '<label for="titulo_'+idBibliografiaContainer+ultimaBibliogragia+'">Titulo:</label>';
    var nuevoElemento06 = '<input class="form-control" type="text" name="titulo_'+idBibliografiaContainer+ultimaBibliogragia+'" id="titulo_'+idBibliografiaContainer+ultimaBibliogragia+'">';
    var nuevoElemento07 = '</div>';
    var nuevoElemento08 = '<div class="form-group">';
    var nuevoElemento09 = '<label for="autor_'+idBibliografiaContainer+ultimaBibliogragia+'">Autor:</label>';
    var nuevoElemento10 = '<input class="form-control" type="text" name="autor_'+idBibliografiaContainer+ultimaBibliogragia+'" id="autor_'+idBibliografiaContainer+ultimaBibliogragia+'">';
    var nuevoElemento11 = '</div>';
    var nuevoElemento12 = '<input class="btn pull-right btn-primary btn-warning" type="button" value="eliminar X" onClick="eliminarObjetivo('+ultimaBibliogragia+','+idBibliografiaContainer+');" ><br><br><br>'; 
    
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

    var nuevoElemento01 = '<button type="button" class="close" aria-hidden="true" onclick="eliminarUnidad(\''+nuevaUnidad.id+'\','+ultimaUnidad+')" title="Eliminar esta unidad!">&times; eliminar unidad</button><br>';
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
    modificarSubtituloContenido(contenido.childNodes[4].childNodes[2].childNodes[i], oldId, newId);
  };

  contenido.childNodes[4].childNodes[3].setAttribute("onclick", "addSubtitulo('"+contenido.childNodes[4].childNodes[2].id+"');")
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

function modificarSubtituloContenido(subtitulo, oldId, newId){
  subtitulo.id = subtitulo.id.replace(oldId, newId);

  subtitulo.childNodes[0].setAttribute("onclick", "eliminarSubtitulo('container_"+subtitulo.childNodes[3].id.replace(oldId, newId)+"')");
  subtitulo.childNodes[2].setAttribute("for", subtitulo.childNodes[3].id.replace(oldId, newId));
  //subtitulo.childNodes[2].for = subtitulo.childNodes[2].for.replace(oldId, newId);
  subtitulo.childNodes[3].id = subtitulo.childNodes[3].id.replace(oldId, newId);
  subtitulo.childNodes[3].name = subtitulo.childNodes[3].name.replace(oldId, newId);
}

var contOG = 2;
var contOE = 2;

var contSub = 2;
var contC = 2;
var contU = 2;

var contB = 2;
var numSub = 1;

//funcion para crear campos para objetivos generales
function addObjG(divname)
{
  
   var elemento = document.createElement("div");
    
    if(divname == 'obj_general'){
        var objetivo = document.getElementById("objG1");
        objetivo.appendChild(elemento);
        id =contOG;
        var nuevoElemento03 = '<legend>Objetivo '+(contOG++)+'</legend>';

    }

    //var nuevoElemento01 = '<div class="container-fluid" id="obj_'+(cont)+'">';
    var nuevoElemento01 = '<div class="container-fluid" id="objG'+(id)+'">';
    var nuevoElemento02 = '<fieldset>';
    var nuevoElemento04 = '<div class="form-group">';
    var nuevoElemento05 = '<label for="titulo">Titulo:</label>';
    var nuevoElemento06 = '<input class="form-control" type="text" name="tituloObjG'+(id)+'" id="tituloObj'+(id)+'">';
    var nuevoElemento07 = '</div>';
    var nuevoElemento08 = '<div class="form-group">';
    var nuevoElemento09 = '<label for="descripcion">Descripcion:</label>';
    var nuevoElemento10 = '<textarea class="form-control" name="descripcionObjG'+(id)+'" id="descripcionObj'+(id)+'" cols="100" rows="5"></textarea>';
    var nuevoElemento11 = '</div>';
    var nuevoElemento12 = '</fieldset>';
    var nuevoElemento13 = '<input class="btn pull-right btn-primary btn-warning" type="button" value="eliminar X" onClick="eliminarObjG('+(id)+');" >'; 
     
    var nuevoElemento14 = '</div>';
    
    //window.alert(id);
                    
    objetivo.innerHTML = objetivo.innerHTML + nuevoElemento01 + nuevoElemento02 + nuevoElemento03 + nuevoElemento04 +
        nuevoElemento05 + nuevoElemento06 + nuevoElemento07 + nuevoElemento08 + nuevoElemento09 + nuevoElemento10 +
        nuevoElemento11 + nuevoElemento12 + nuevoElemento13 + nuevoElemento14;
}

function eliminarObjG(n){

  var objetivo = 'objG' + n;

  var elemento = document.getElementById(objetivo);

  if (elemento.parentNode) {
    elemento.parentNode.removeChild(elemento);
  }

}

//funcion para crear campos para objetivos especificos
function addInput(divname)
{
    
  var elemento = document.createElement("div");
    
  if(divname == 'obj_especifico'){
    var objetivo = document.getElementById("objE1");
    objetivo.appendChild(elemento); 
    id=contOE;  
    var nuevoElemento03 = '<legend>Objetivo '+(contOE++)+'</legend>';
  }

  //var nuevoElemento01 = '<div class="container-fluid" id="obj_'+(cont)+'">';
  var nuevoElemento01 = '<div class="container-fluid" id="objE'+(id)+'">';
  var nuevoElemento02 = '<fieldset>';
  var nuevoElemento04 = '<div class="form-group">';
  var nuevoElemento05 = '<label for="titulo">Titulo:</label>';
  var nuevoElemento06 = '<input class="form-control" type="text" name="tituloObjE'+(id)+'" id="tituloObjE'+(id)+'">';
  var nuevoElemento07 = '</div>';
  var nuevoElemento08 = '<div class="form-group">';
  var nuevoElemento09 = '<label for="descripcion">Descripcion:</label>';
  var nuevoElemento10 = '<textarea class="form-control" name="descripcionObjE'+(id)+'" id="descripcionObjE'+(id)+'" cols="100" rows="5"></textarea>';
  var nuevoElemento11 = '</div>';
  var nuevoElemento12 = '</fieldset>';
  var nuevoElemento13 = '<input class="btn pull-right btn-primary btn-warning" type="button" value="eliminar X" onClick="eliminarInput1('+(id)+');" >'; 
  var nuevoElemento14 = '</div>';
  
  // window.alert(id);
                    
  objetivo.innerHTML = objetivo.innerHTML + nuevoElemento01 + nuevoElemento02 + nuevoElemento03 + nuevoElemento04 +
    nuevoElemento05 + nuevoElemento06 + nuevoElemento07 + nuevoElemento08 + nuevoElemento09 + nuevoElemento10 +
    nuevoElemento11 + nuevoElemento12 + nuevoElemento13 + nuevoElemento14;
}

function eliminarInput1(n){

  var objetivo = 'objE' + n;
  var elemento = document.getElementById(objetivo);

  if (elemento.parentNode) {
    elemento.parentNode.removeChild(elemento);
  }
  
}

//funcion para crear campos para nuevos subtitulos
function addInput2(divname,numSub){
  
  //var elemento = document.createElement("div");

  if(divname == 'new_subtitulo'){
    var idSub = 'aSubtitulo'+numSub;
    var subtitulo = document.getElementById(idSub);
    //subtitulo.appendChild(elemento);
  }
  numSub++;
  var subtitulo01 = '<div id="bSubtitulo'+(numSub)+'"><label for="codigo">Subtitulo:</label>';
  var subtitulo02 = '<input class="form-control" type="text" name="subtitulo'+(numSub)+'" id="subtitulo'+(numSub)+'" required>';
  var subtitulo03 = '</div>';

  subtitulo.innerHTML = subtitulo.innerHTML + subtitulo01 + subtitulo02 + subtitulo03;
}

//funcion para crear campos para nuevo capitulo
function addInput3(divname,num){

  if(divname == 'new_capitulo'){
    var subtitulo = document.getElementById("capitulo");
    //subtitulo.appendChild(elemento);
  }

  contSub++;

  var capitulo01 = '<div class="clearfix"><legend>Capitulo '+(contC)+'</legend><div class="form-group"><label for="nombre">Titulo del capitulo:</label><input class="form-control" type="text" name="tituloCapitulo'+(contC)+'" id="tituloCapitulo'+(contC++)+'" required></div>';
  var capitulo02 = '<div class="form-group col-md-6 col-md-offset-3"  id="aSubtitulo"><label for="codigo">Subtitulo:</label><input class="form-control" type="text" name="aSubtitulo'+(contSub)+'" id="subtitulo'+(contSub)+'" required></div>';
  var capitulo03 = '<input class="btn btn-primary col-md-6 col-sm-6 col-xs-6 col-md-offset-3" type="button" value="Añadir Subtitulo" onClick="addInput2(\'new_subtitulo\','+(contSub)+');"></div><br/><br/>';

  capitulo.innerHTML = capitulo.innerHTML + capitulo01 + capitulo02 + capitulo03;
}

//funcion para crear campos para nueva unidad
function addUnidad(divname){

  var capituloN=1;

  if(divname == 'new_unidad'){
    var unidad = document.getElementById("unidad");
    //subtitulo.appendChild(elemento);
  }
  contSub++;
  var unidad01 = '<legend>Unidad '+(contU)+'</legend>'  
  var unidad02 = '<div class="form-group"><label for="nombre">Titulo de la unidad:</label><input class="form-control" type="text" name="tituloUnidad'+(contU)+'" id="titulo'+(contU)+'" required></div>'
  var unidad03 = '<div class="form-group"><label for="codigo">Objetivo:</label><textarea class="form-control" name="objetivoUnidad'+(contU++)+'" id="objetivo'+(contU)+'" cols="100" rows="3"></textarea></div>'
  
  var unidad04 = '<div class="container-fluid" id="contenido"><form name="formPg6" method="post" action="#"><fieldset>'
  var unidad05 = '<legend>CONTENIDO</legend><div class="container-fluid" id="capitulo'+(capituloN)+'">'
  var unidad06 = '<div><legend>Capitulo '+(capituloN)+'</legend><div class="form-group"><label for="nombre">Titulo del capitulo:</label><input class="form-control" type="text" id="tituloCapitulo" required></div>';
  var unidad07 = '<div class="form-group col-md-6 col-md-offset-3" id="aSubtitulo'+(contSub)+'"><label for="codigo">Subtitulo:</label><input class="form-control" type="text" id="subtitulo" required></div>';
  var unidad08 = '<input class="btn btn-primary col-md-6 col-sm-6 col-xs-6 col-md-offset-3" type="button" value="Añadir Subtitulo" onClick="addInput2(\'new_subtitulo\','+(contSub)+');"></div><br/><br/>';
  var unidad09 = '</div></fieldset><br>'
  var unidad10 = '<input class="btn btn-primary pull-right" type="button" value="Añadir Capitulo" onClick="addInput3(new_capitulo);"><br>'      
  var unidad11 = '</form></div>'
  unidad.innerHTML = unidad.innerHTML + unidad01 + unidad02 + unidad03 + unidad04 + unidad05 + unidad06 + unidad07 + unidad08 + unidad09 + unidad10 + unidad11;
}

//funcion para crear campos para bibliografias
function addInput4(divname){

  if(divname == 'n_biblio'){
    var biblio = document.getElementById("add_biblio");
  }
  var b=contB;

  var nBibliografia01 = '<div class="row container-fluid" id="biblio'+(contB++)+'">';
  var nBibliografia02 = '<legend id="separador"> </legend>';
  var nBibliografia03 = '<div class="form-group">';
  var nBibliografia04 = '<label for="titulo">Titulo Libro</label>';
  var nBibliografia05 = '<input class="form-control" type="text" name="tituloB'+(b)+'" id="titulo">';
  var nBibliografia06 = '</div>';
  var nBibliografia07 = '<div class="form-group">';
  var nBibliografia08 = '<label for="autor">Autor</label>';
  var nBibliografia09 = '<input class="form-control" type="text" name="autorB'+(b)+'" id="autor">';
  var nBibliografia10 = '<input class="btn pull-right btn-warning" type="button" value="eliminar X" onClick="eliminarBiblio(\'biblio\','+(b)+');" >'; 
  var nBibliografia11 = '</div> </div>';
  
  biblio.innerHTML = biblio.innerHTML + nBibliografia01 + nBibliografia02 + nBibliografia03 + nBibliografia04 +
    nBibliografia05 + nBibliografia06 + nBibliografia07 + nBibliografia08 + nBibliografia09 + nBibliografia10 + nBibliografia11;
}

function eliminarBiblio(divname,num){
  
  var objetivo = 'biblio'+num;
  var elemento = document.getElementById(objetivo);

  if (elemento.parentNode) {
    elemento.parentNode.removeChild(elemento);
  }

}
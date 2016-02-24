var contOG = 2;
var contOE = 2;

var contSub = 2;
var contC = 2;
var contU = 2;

var contB = 2;
var numSub = 1;

var conContenido = 2;

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
    var nuevoElemento06 = '<input class="form-control" type="text" name="titulo_og'+(id)+'" id="titulo_og'+(id)+'" required>';
    var nuevoElemento07 = '</div>';
    var nuevoElemento08 = '<div class="form-group">';
    var nuevoElemento09 = '<label for="descripcion">Descripcion:</label>';
    var nuevoElemento10 = '<textarea class="form-control" name="descripcion_og'+(id)+'" id="descripcion_og'+(id)+'" cols="100" rows="5"></textarea>';
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
  var u=contOG-1;

  if (elemento.parentNode) {
    elemento.parentNode.removeChild(elemento);
  }

  if(n<u){
    var p=n+1;
    for (var i = p; i <= u; i++) {
      eliminarOldG(i);
    };
  }
  
  contOG=n; 
  for (var i = n; i < u; i++) {
    addObjG("obj_general");
  };

}

function eliminarOldG(id){
  var objetivo = 'objG'+id;
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
    idE=contOE;  
    var nuevoElemento03 = '<legend>Objetivo '+(contOE++)+'</legend>';
  }

  //var nuevoElemento01 = '<div class="container-fluid" id="obj_'+(cont)+'">';
  var nuevoElemento01 = '<div class="container-fluid" id="objE'+(idE)+'">';
  var nuevoElemento02 = '<fieldset>';
  var nuevoElemento04 = '<div class="form-group">';
  var nuevoElemento05 = '<label for="titulo">Titulo:</label>';
  var nuevoElemento06 = '<input class="form-control" type="text" name="titulo_oe'+(idE)+'" id="titulo_oe'+(idE)+'" required>';
  var nuevoElemento07 = '</div>';
  var nuevoElemento08 = '<div class="form-group">';
  var nuevoElemento09 = '<label for="descripcion">Descripcion:</label>';
  var nuevoElemento10 = '<textarea class="form-control" name="descripcion_oe'+(idE)+'" id="descripcion_oe'+(idE)+'" cols="100" rows="5"></textarea>';
  var nuevoElemento11 = '</div>';
  var nuevoElemento12 = '</fieldset>';
  var nuevoElemento13 = '<input class="btn pull-right btn-primary btn-warning" type="button" value="eliminar X" onClick="eliminarObjE('+(idE)+');" >'; 
  var nuevoElemento14 = '</div>';
  
  // window.alert(id);
                    
  objetivo.innerHTML = objetivo.innerHTML + nuevoElemento01 + nuevoElemento02 + nuevoElemento03 + nuevoElemento04 +
    nuevoElemento05 + nuevoElemento06 + nuevoElemento07 + nuevoElemento08 + nuevoElemento09 + nuevoElemento10 +
    nuevoElemento11 + nuevoElemento12 + nuevoElemento13 + nuevoElemento14;
}

function eliminarObjE(n){

  var objetivo = 'objE' + n;
  var elemento = document.getElementById(objetivo);
  var u=contOE-1;

  if (elemento.parentNode) {
    elemento.parentNode.removeChild(elemento);
  }
  
  if(n<u){
    var p=n+1;
    for (var i = p; i <= u; i++) {
      eliminarOldE(i);
    };
  }
  
  contOE=n; 
  for (var i = n; i < u; i++) {
    addInput("obj_especifico");
  };
}

function eliminarOldE(id){
  var objetivo = 'objE'+id;
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
  var subtitulo02 = '<button type="button" class="close" aria-hiden="false" onClick="eliminarSubtitulo('+(numSub)+');">&times;</button>';
  var subtitulo03 = '<input class="form-control" type="text" name="bsubtitulo'+(numSub)+'" id="bsubtitulo'+(numSub)+'" required>';
  var subtitulo04 = '</div>';

  subtitulo.innerHTML = subtitulo.innerHTML + subtitulo01 + subtitulo02 + subtitulo03 + subtitulo04;
}

function eliminarSubtitulo(id){
  var objetivo = 'bSubtitulo'+id;
  var elemento = document.getElementById(objetivo);
  
  if (elemento.parentNode) {
    elemento.parentNode.removeChild(elemento);
  }
}

//funcion para crear campos para nuevo capitulo
function addInput3(divname){

  if(divname == 'new_capitulo'){
    var capitulo = document.getElementById("capitulo");
    //subtitulo.appendChild(elemento);
  }
  contSub++;
  var cap=contC;
    
  var capitulo01 = '<div class="clearfix" id="cap_'+(cap)+'"><button type="button" class="close" aria-hiden="false" onClick="eliminarCapitulo('+(cap)+');">&times;</button><legend>Capitulo '+(contC++)+'</legend><div class="form-group"><label for="nombre">Titulo del capitulo:</label><input class="form-control" type="text" name="titulo_cap'+(cap)+'" id="titulo_cap'+(cap)+'" required></div>';
  var capitulo02 = '<div class="form-group col-md-6 col-md-offset-3" id="aSubtitulo'+(contSub)+'"><label for="codigo">Subtitulo:</label><input class="form-control" type="text" name="subtitulo_cap'+(cap)+'" id="subtitulo_cap'+(cap)+'" required></div>';
  var capitulo03 = '<input class="btn btn-primary col-md-6 col-sm-6 col-xs-6 col-md-offset-3" type="button" value="Añadir Subtitulo" onClick="addInput2(\'new_subtitulo\','+(contSub)+');"><br></div>';

  capitulo.innerHTML = capitulo.innerHTML + capitulo01 + capitulo02 + capitulo03;
}

function eliminarCapitulo(id){
  var objetivo = 'cap_'+id;
  var elemento = document.getElementById(objetivo);
  var u=contC-1;

  if (elemento.parentNode) {
    elemento.parentNode.removeChild(elemento);
  }

  if(id<u){
    var p=id+1;
    for (var i = p; i <= u; i++) {
      eliminarCap(i);
    };
  }
  
  contC=id;
  for (var i = id; i < u; i++) {
    addInput3("new_capitulo");
  };
}

function eliminarCap(id){
  var objetivo = 'cap_'+id;
  var elemento = document.getElementById(objetivo);
  
  if (elemento.parentNode) {
    elemento.parentNode.removeChild(elemento);
  }
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

// function eliminarUnidad(id){
//   var objetivo = 'uni_'+id;
//   var elemento = document.getElementById(objetivo);
//   var u=contU-1;

//   if (elemento.parentNode) {
//     elemento.parentNode.removeChild(elemento);
//   }

//   if(id<u){
//     var p=id+1;
//     for (var i = p; i <= u; i++) {
//       eliminarU(i);
//     };
//   }
  
//   contC=id;
//   for (var i = id; i < u; i++) {
//     addUnidad("new_unidad");
//   };
// }

// function eliminarU(id){
//   var objetivo = 'uni_'+id;
//   var elemento = document.getElementById(objetivo);
  
//   if (elemento.parentNode) {
//     elemento.parentNode.removeChild(elemento);
//   }
// }


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
  var nBibliografia05 = '<input class="form-control" type="text" name="titulo_'+(b)+'" id="titulo_'+(b)+'" required>';
  var nBibliografia06 = '</div>';
  var nBibliografia07 = '<div class="form-group">';
  var nBibliografia08 = '<label for="autor">Autor</label>';
  var nBibliografia09 = '<input class="form-control" type="text" name="autor_'+(b)+'" id="autor_'+(b)+'">';
  var nBibliografia10 = '<input class="btn pull-right btn-warning" type="button" value="eliminar X" onClick="eliminarBiblio(\'biblio\','+(b)+');" >';
  var nBibliografia10 = '<input class="btn pull-right btn-warning" type="button" value="eliminar X" onClick="eliminarBiblio(\'biblio\','+(b)+');" >'; 

  var nBibliografia11 = '</div>';
   //var elementos = document.getElementById("add_biblio");
    
  biblio.innerHTML = biblio.innerHTML + nBibliografia01 + nBibliografia02 + nBibliografia03 + nBibliografia04 +
    nBibliografia05 + nBibliografia06 + nBibliografia07 + nBibliografia08 + nBibliografia09 + nBibliografia10 + nBibliografia11;
}

function eliminarBiblio(divname,num){
  
  var objetivo = 'biblio'+num;
  var elemento = document.getElementById(objetivo);
  var u=contB-1;
  
  if (elemento.parentNode) {
    elemento.parentNode.removeChild(elemento);
  }
  
  if(num<u){
    var p=num+1;
    for (var i = p; i <= u; i++) {
      eliminarOld("biblio",i);
    };
  }
  
  contB=num; 
  for (var i = num; i < u; i++) {
    addInput4("n_biblio");
  };
   //window.alert(contB);
}
function eliminarOld(divname,id){
  var objetivo = 'biblio'+id;
  var elemento = document.getElementById(objetivo);
  
  if (elemento.parentNode) {
    elemento.parentNode.removeChild(elemento);
  }
}


//funcion para crear nuevos contenidos en secciones adicionales
function addContenidos(divname){
  if(divname == 'nuevo_contenido'){
    var contenido = document.getElementById("contenido");
  }
  contSub++;
  var cont=conContenido;
    
  var contenido01 = '<div class="clearfix" id="contenido_'+(cont)+'"><button type="button" class="close" aria-hiden="false" onClick="eliminarCapitulo('+(cont)+');">&times;</button><legend>Capitulo '+(conContenido++)+'</legend><div class="form-group"><label for="nombre">Titulo del capitulo:</label><input class="form-control" type="text" name="titulo_cap'+(cont)+'" id="titulo_cap'+(cont)+'" required></div>';
  var contenido02 = '<div class="form-group col-md-6 col-md-offset-3" id="aSubtitulo'+(contSub)+'"><label for="codigo">Subtitulo:</label><input class="form-control" type="text" name="subtitulo_cap'+(cont)+'" id="subtitulo_cap'+(cont)+'" required></div>';
  var contenido03 = '<input class="btn btn-primary col-md-6 col-sm-6 col-xs-6 col-md-offset-3" type="button" value="Añadir Subtitulo" onClick="addInput2(\'new_subtitulo\','+(contSub)+');"><br></div>';

   
  <div class="container-fluid" id="new_contenido">
                  <fieldset>
                      <legend>CONTENIDO</legend>
                       <fieldset>
                         <div class="container-fluid" id="nuevo_contenido">
                          
                            <legend>Contenido 1</legend>
                            <div class="form-group">
                                 <label for="nombre">Titulo del contenido</label>
                                 <input class="form-control" type="text" id="tituloContenido" required>
                             </div>
                             <div class="form-group">
                                  <label for="codigo">Descripcion del contenido</label>
                                  <textarea class="form-control" id="descripcionContenido" cols="100" rows="3" required></textarea>
                             </div>
                             <div class="form-group col-md-6 col-md-offset-3" id="nuevo_subtitulo">
                                  <label for="codigo">Subtitulo 1</label>
                                  <input class="form-control" type="text" name="sub_contenido1" id="sub_contenido1" required>
                                  <br>
                                  <button class="btn btn-primary" type="button">Añadir subtitulo</button>
                             </div>
                          
                          </div> 
                       </fieldset>
                       <br>
                       <input class="btn btn-primary pull-right" type="button" value="Añadir Contenido" onClick="addContenido('nuevo_contenido');">
                  </fieldset>
                  </div> 

  contenido.innerHTML = contenido.innerHTML + capitulo01 + capitulo02 + capitulo03;
}

function eliminarContenido(id){
  var objetivo = 'cont_'+id;
  var elemento = document.getElementById(objetivo);
  var u=contC-1;

  if (elemento.parentNode) {
    elemento.parentNode.removeChild(elemento);
  }

  if(id<u){
    var p=id+1;
    for (var i = p; i <= u; i++) {
      eliminarCap(i);
    };
  }
  
  contC=id;
  for (var i = id; i < u; i++) {
    addInput3("new_capitulo");
  };
}

function eliminarCap(id){
  var objetivo = 'cap_'+id;
  var elemento = document.getElementById(objetivo);
  
  if (elemento.parentNode) {
    elemento.parentNode.removeChild(elemento);
  }
}



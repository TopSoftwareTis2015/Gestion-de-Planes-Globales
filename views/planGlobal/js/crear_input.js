//var counter = 1;
//var limit = 5;
//var contador = 2;
//var txtTitulo = document.getElementById('Titulo');
var contOG = 2;
var contOE = 2;
var contC = 2;
var contSub = 2;

var numSub = 1;

function addInput(divname)
{
    //if (counter == limit)
    //{
    //    alert("Llegaste al limite de Objetivos " + counter + " inputs");
    //}
    //else
    //{
    //    //var newlabel= document.createElement('label');
    //    var newdiv = document.createElement('div');
    //    //newlabel.innerHTML="<label for="titulo">Titulo:</label>";
    //
    //    counter++;
    //contador++;
    //}


    var elemento = document.createElement("div");

    if(divname == 'obj_general'){
        var objetivo = document.getElementById("objetivoG");
        objetivo.appendChild(elemento);
        var nuevoElemento03 = '<legend>Objetivo '+(contOG++)+'</legend>';
    }
    if(divname == 'obj_especifico'){
        var objetivo = document.getElementById("objetivoE");
        objetivo.appendChild(elemento);
        var nuevoElemento03 = '<legend>Objetivo '+(contOE++)+'</legend>';
    }

    var nuevoElemento01 = '<div class="container-fluid">';
    var nuevoElemento02 = '<fieldset>';
    var nuevoElemento04 = '<div class="form-group">';
    var nuevoElemento05 = '<label for="titulo">Titulo:</label>';
    var nuevoElemento06 = '<input class="form-control" type="text" id="titulo">';
    var nuevoElemento07 = '</div>';
    var nuevoElemento08 = '<div class="form-group">';
    var nuevoElemento09 = '<label for="descripcion">Descripcion:</label>';
    var nuevoElemento10 = '<textarea class="form-control"name="" id="descripcion" cols="100" rows="5"></textarea>';
    var nuevoElemento11 = '</div>';
    var nuevoElemento12 = '<div id="obj_general">   </div>';
    var nuevoElemento13 = '</fieldset>';
    var nuevoElemento14 = '</div>';

    objetivo.innerHTML = objetivo.innerHTML + nuevoElemento01 + nuevoElemento02 + nuevoElemento03 + nuevoElemento04 +
        nuevoElemento05 + nuevoElemento06 + nuevoElemento07 + nuevoElemento08 + nuevoElemento09 + nuevoElemento10 +
        nuevoElemento11 + nuevoElemento12 + nuevoElemento13 + nuevoElemento14 ;
}

function addInput2(divname, numSub){
    //var elemento = document.createElement("div");

    if(divname == 'new_subtitulo'){
        var idSub = 'aSubtitulo'+numSub;
        var subtitulo = document.getElementById(idSub);

        //subtitulo.appendChild(elemento);
    }
    numSub++;
    var subtitulo01 = '<div id="bSubtitulo'+(numSub)+'"><label for="codigo">Subtitulo:</label>';
    var subtitulo02 = '<input class="form-control" type="text" id="subtitulo" required>';
    var subtitulo03 = '</div>';

    subtitulo.innerHTML = subtitulo.innerHTML + subtitulo01 + subtitulo02 + subtitulo03;
}

function addInput3(divname){

    if(divname == 'new_capitulo'){
        var subtitulo = document.getElementById("capitulo");
        //subtitulo.appendChild(elemento);
    }

    contSub++;

    var capitulo01 = '<div><legend>Capitulo '+(contC++)+'</legend><div class="form-group"><label for="nombre">Titulo del capitulo:</label><input class="form-control" type="text" id="tituloCapitulo" required></div>';
    var capitulo02 = '<div class="form-group col-md-6 col-md-offset-3" id="aSubtitulo'+(contSub)+'"><label for="codigo">Subtitulo:</label><input class="form-control" type="text" id="subtitulo" required></div>';
    var capitulo03 = '<input class="btn btn-primary col-md-6 col-sm-6 col-xs-6 col-md-offset-3" type="button" value="Aniadir Subtitulo" onClick="addInput2(\'new_subtitulo\','+(contSub)+');"></div><br/><br/>';


    capitulo.innerHTML = capitulo.innerHTML + capitulo01 + capitulo02 + capitulo03;
}
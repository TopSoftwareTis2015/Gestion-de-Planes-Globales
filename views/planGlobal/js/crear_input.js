//var counter = 1;
//var limit = 10;
//var contador = 2;
//var txtTitulo = document.getElementById('Titulo');

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
    //
    //    counter++;
    //contador++;
    //}


    var elemento = document.createElement("div");

    if(divname == 'obj_general'){
        var objetivo = document.getElementById("objetivoG");
        objetivo.appendChild(elemento);
    }
    if(divname == 'obj_especifico'){
        var objetivo = document.getElementById("objetivoE");
        objetivo.appendChild(elemento);
    }


    var nuevoElemento01 = '<div class="container-fluid">';
    var nuevoElemento02 = '<fieldset>';
    var nuevoElemento03 = '<legend>Objetivo 1</legend>';
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
        nuevoElemento11 + nuevoElemento12 + nuevoElemento13 + nuevoElemento14;

}
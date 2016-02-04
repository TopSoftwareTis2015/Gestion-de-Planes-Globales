function newBiblio(divname)
{
    

    var elemento = document.createElement("div");

    var bibliografia = document.getElementById("add_biblio");
    bibliografia.appendChild(elemento);


    var nuevoElemento01 ='<fieldset id="bibliografia">';
    var nuevoElemento02 ='<div class="container-fluid">';
    var nuevoElemento03 ='<div class="form-group">';
    var nuevoElemento04 ='<label for="nombre">Titulo Libro</label>';
    var nuevoElemento05 ='<input class="form-control" type="text" id="tituloCap" required>';
    var nuevoElemento06 ='</div>';
    var nuevoElemento07 ='<div class="form-group">';
    var nuevoElemento08 ='<label for="codigo">Autor</label>';
    var nuevoElemento09 ='input class="form-control" type="text" id="descripcion" required>';
    var nuevoElemento10 ='</div>';
    var nuevoElemento11 ='</div>'; 
    var nuevoElemento12 ='</fieldset>';
    
    bibliografia.innerHTML = bibliografia.innerHTML + nuevoElemento01 + nuevoElemento02 + nuevoElemento03 + nuevoElemento04 +
        nuevoElemento05 + nuevoElemento06 + nuevoElemento07 + nuevoElemento08 + nuevoElemento09 + nuevoElemento10 +
        nuevoElemento11 + nuevoElemento12 + nuevoElemento13 + nuevoElemento14;
}
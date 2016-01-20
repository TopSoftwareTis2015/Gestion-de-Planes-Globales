var counter = 1;
var limit = 5;
var contador = 1;
//var txtTitulo = document.getElementById('Titulo');

function addInput(divName)
{
    if (counter == limit)
	{
        alert("Llegaste al limite de Objetivos " + counter + " inputs");
    }
    else 
	{
        //var newlabel= document.createElement('label');
        var newdiv = document.createElement('div');
        //newlabel.innerHTML="<label for="titulo">Titulo:</label>";
                           
        newdiv.innerHTML="<h4>Titulo:</h4>";
        newdiv.innerHTML ="<br><input class='form-control' type='text' name='titulo_"+contador+"'>";
       //newdiv.innerHTML ="<br><textarea class='form-control' name='descripcion_"+contador+"' cols="100" rows="5"></textarea>";

        //document.getElementById(divName).appendChild(txtTitulo);
        document.getElementById(divName).appendChild(newdiv);

        counter++;
	contador++;
    }
}
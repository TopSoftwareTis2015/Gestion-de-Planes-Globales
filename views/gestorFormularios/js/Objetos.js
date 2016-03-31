///////////////////////////
// CLASE ELEMENTO BASICO //
///////////////////////////

function ElementoBasico(contenedorPadre, posicionEnElArray){
	this.posicionEnElArray = posicionEnElArray;
	this.soyElementoBasico = true;
	this.contenedorPadre = contenedorPadre;
	this.contenedor = this.establecerContenedor();
	this.desplegarContenido();
	this.controles = this.contenedor.childNodes[0].childNodes[0];
	this.establecerFuncionesControles();
	this.verificarSiSePuedeEliminar();
}

ElementoBasico.prototype.establecerContenedor = function(){
	var contenedor = document.createElement('div');
	
	if(this.contenedorPadre.childNodes.length <= 1){
		contenedor.dataset.numeroContenedor = this.contenedorPadre.childNodes.length;
	}
	else{
		contenedor.dataset.numeroContenedor = 
			parseInt(this.contenedorPadre.childNodes[this.contenedorPadre.childNodes.length-1].dataset.numeroContenedor) + 1;
	}
	contenedor.className = "elemento-basico";
	contenedor.id = this.contenedorPadre.id + "_" + contenedor.dataset.numeroContenedor;

	this.contenedorPadre.appendChild(contenedor);

	return contenedor;
}

ElementoBasico.prototype.desplegarContenido = function(){
	var contenido = this.getControlesBasicos();
	this.contenedor.innerHTML = contenido;
}

ElementoBasico.prototype.getControlesBasicos = function(){
	var parte1 = '<div><ul class="controles">';
	var parte_2 = '<li class="itemControles">';
	var parte_3 = '<button type="button" class="btn btn-success btn-xs">';
	var parte_4 = '<span class="glyphicon glyphicon-plus" aria-hidden="true" title="Agregar un titulo"></span> T';
	var parte_5 = '</button>';
	var parte_6 = '</li>';
	var parte2 = '<li class="itemControles">';
	var parte3 = '<button type="button" class="btn btn-success btn-xs">';
	var parte4 = '<span class="glyphicon glyphicon-plus" aria-hidden="true" title="Agregar un input titulo"></span> IT';
	var parte5 = '</button>';
	var parte6 = '</li>';
	var parte7 = '<li class="itemControles">';
	var parte8 = '<button type="button" class="btn btn-success btn-xs">';
	var parte9 = '<span class="glyphicon glyphicon-plus" aria-hidden="true" title="Agregar un input Descripcion"></span> ID';
	var parte10 = '</button>';
	var parte11 = '</li>';
	var parte12 = '<li class="itemControles">';
	var parte13 = '<button type="button" class="btn btn-success btn-xs">';
	var parte14 = '<span class="glyphicon glyphicon-plus" aria-hidden="true" title="Agregar un Contenido Basico"></span> C';
	var parte15 = '</button>';
	var parte16 = '</li>';
	var parte17 = '<li class="itemControles">';
	var parte18 = '<button type="button" class="btn btn-success btn-xs">';
	var parte19 = '<span class="glyphicon glyphicon-list-alt" aria-hidden="true" title="Agregar una Lista de Contenidos"> L</span>';
	var parte20 = '</button>';
	var parte21 = '</li>';
	var parte22 = '<li class="itemControles">';
	var parte23 = '<button type="button" class="btn btn-danger btn-xs">';
	var parte24 = '<span class="glyphicon glyphicon-remove" aria-hidden="true" title="Eliminar Componente"></span>';
	var parte25 = '</button>';
	var parte26 = '</li>';
	var parte27 = '</ul><div class="clearfix"></div>';
	var parte28 = '</div>';
	return parte1 + parte_2 + parte_3 + parte_4 + parte_5 + parte_6 + parte2 + parte3 + parte4 + parte5 + parte6 + parte7 + parte8 + parte9 + parte10 +
					parte11 + parte12 + parte13 + parte14 + parte15 + parte16 + parte17 + parte18 + parte19 + parte20 +
					parte21 + parte22 + parte23 + parte24 + parte25 + parte26 + parte27 + parte28;
}

ElementoBasico.prototype.verificarSiSePuedeEliminar = function(){
	if(this.contenedorPadre.parentNode.elementosBasicos === undefined){
		this.eliminarControl(5);
	}
}

ElementoBasico.prototype.eliminarControles = function(controles){
	for (var i = 0; i < controles.length; i++) {
		this.eliminarControl(controles[i]);
	};
}

ElementoBasico.prototype.eliminarControl = function(control){
	for (var i = 0; i < this.controles.childNodes.length; i++) {
		if(this.controles.childNodes[i].childNodes[0].control == control){
			this.controles.removeChild(this.controles.childNodes[i]);
			break;
		}
	};
}

ElementoBasico.prototype.establecerFuncionesControles = function(){
	for (var i = 0; i < this.controles.childNodes.length; i++) {
		this.controles.childNodes[i].childNodes[0].elementoBasico = this;
		this.controles.childNodes[i].childNodes[0].control = i;
	};

	this.controles.childNodes[0].childNodes[0].setAttribute("onclick","this.elementoBasico.agregarTitulo()");
	this.controles.childNodes[1].childNodes[0].setAttribute("onclick","this.elementoBasico.agregarElementoTitulo()");
	this.controles.childNodes[2].childNodes[0].setAttribute("onclick","this.elementoBasico.agregarElementoDescripcion()");
	this.controles.childNodes[3].childNodes[0].setAttribute("onclick","this.elementoBasico.agregarElementoBasico()");
	this.controles.childNodes[4].childNodes[0].setAttribute("onclick","this.elementoBasico.agregarContenedorLista()");
	this.controles.childNodes[5].childNodes[0].setAttribute("onclick","this.elementoBasico.eliminarElementoBasico()");
}

ElementoBasico.prototype.agregarTitulo = function(){
	crearContenedorBasico(this.contenedor.id,0);
}

ElementoBasico.prototype.agregarElementoTitulo = function(){
	crearContenedorBasico(this.contenedor.id,1);
}

ElementoBasico.prototype.agregarElementoDescripcion = function(){
	crearContenedorBasico(this.contenedor.id,2);
}

ElementoBasico.prototype.agregarElementoBasico = function(){
	crearContenedorBasico(this.contenedor.id,3);
}

ElementoBasico.prototype.agregarContenedorLista = function(){
	crearContenedorBasico(this.contenedor.id,4);
}

function ingresarNumeroEnteroValido(){
	var respuesta;
	while(isNaN(respuesta)){
		respuesta = prompt("Ingrese el numero maximo de elementos de la lista (entero positivo mayor que cero)");
	}
}

ElementoBasico.prototype.eliminarElementoBasico = function(){
	this.contenedor.parentNode.removeChild(this.contenedor);
	delete this.contenedorPadre.elementosBasicos[this.posicionEnElArray];
}

ElementoBasico.prototype.generarInput = function(contenedor, tituloInput, esTitulo, esInputText){
  var parte1 = '<label for="titulo_'+contenedor.id+'">'+tituloInput+'</label>';
  var parte2 = '<input class="form-control" type="text" name="titulo_'+contenedor.id+'" id="titulo_'+contenedor.id+'" required>';
  var parte3 = "";
  if(!esTitulo){
  	if(esInputText)
  		parte3 = '<input class="form-control" type="text" name="input_titulo_'+contenedor.id+'" id="input_titulo_'+contenedor.id+'" required>'
  	else
  		parte3 = '<textarea class="form-control" name="descripcion_'+contenedor.id+'" id="descripcion_'+contenedor.id+'" cols="100" rows="5"></textarea>';
  }

  var contenido = document.createElement('div');
  contenido.className = "form-group";

  contenido.innerHTML = parte1 + parte2 + parte3;

  contenedor.appendChild(contenido);
}



//////////////////////////////////////
//                        SUBCLASES //
//////////////////////////////////////

////////////////////////////////////////////////////////////
//                  ELEMENTO TITULO ES UN ELEMENTO BASICO //
////////////////////////////////////////////////////////////

function ElementoTitulo(contenedorPadre, posicionEnElArray){
	ElementoBasico.call(this, contenedorPadre, posicionEnElArray);
	this.contenedor.className += " elemento-titulo";
	this.eliminarControles([0,1,2,3,4]);
	this.generarInput(this.contenedor, "Titulo Central", true, false);
}
ElementoTitulo.prototype = Object.create(ElementoBasico.prototype);


////////////////////////////////////////////////////////////
//                  ELEMENTO INPUT TITULO ES UN ELEMENTO BASICO //
////////////////////////////////////////////////////////////

function ElementoInputTitulo(contenedorPadre, posicionEnElArray){
	ElementoBasico.call(this, contenedorPadre, posicionEnElArray);
	this.contenedor.className += " elemento-input-titulo";
	this.eliminarControles([0,1,2,3,4]);
	this.generarInput(this.contenedor, "Titulo del Campo-Titulo", false, true);
}
ElementoInputTitulo.prototype = Object.create(ElementoBasico.prototype);


////////////////////////////////////////////////////////////
//                  ELEMENTO INPUT DESCRIPCION ES UN ELEMENTO BASICO //
////////////////////////////////////////////////////////////

function ElementoInputDescripcion(contenedorPadre, posicionEnElArray){
	ElementoBasico.call(this, contenedorPadre, posicionEnElArray);
	this.contenedor.className += " elemento-input-descripcion";
	this.eliminarControles([0,1,2,3,4]);
	this.generarInput(this.contenedor, "Titulo del Campo-Descripcion", false, false);
}
ElementoInputDescripcion.prototype = Object.create(ElementoBasico.prototype);//new ElementoBasico;
//ElementoInputDescripcion.prototype.constructor = ElementoInputDescripcion;


////////////////////////////////////////////////////////////
//                  ELEMENTO BASICO PLANTILLA ES UN ELEMENTO BASICO //
////////////////////////////////////////////////////////////

function ElementoBasicoPlantilla(contenedorPadre, posicionEnElArray){
	ElementoBasico.call(this, contenedorPadre, posicionEnElArray);
	this.contenedor.className += " elemento-contenedor-lista";
	this.eliminarControles(5);
	this.agregarControlesCotas();
}
ElementoBasicoPlantilla.prototype = Object.create(ElementoBasico.prototype);//new ElementoBasico;

ElementoBasicoPlantilla.prototype.agregarControlesCotas = function(){
	var controles = document.createElement('div');
	controles.innerHTML = this.getControlesBasicosCotas();
	this.contenedor.appendChild(controles);
}

ElementoBasicoPlantilla.prototype.getControlesBasicosCotas = function(){
	var parte1 = '<ul class="controles">';
	var parte_2 = '<li class="itemControles">';
	var parte_3 = '<button type="button" class="btn btn-success btn-xs">';
	var parte_4 = '<span class="glyphicon glyphicon-plus" aria-hidden="true" title="Agregar un titulo"></span> #T';
	var parte_5 = '</button>';
	var parte_6 = '</li>';
	var parte2 = '<li class="itemControles">';
	var parte3 = '<button type="button" class="btn btn-success btn-xs">';
	var parte4 = '<span class="glyphicon glyphicon-plus" aria-hidden="true" title="Agregar un input titulo"></span> #IT';
	var parte5 = '</button>';
	var parte6 = '</li>';
	var parte7 = '<li class="itemControles">';
	var parte8 = '<button type="button" class="btn btn-success btn-xs">';
	var parte9 = '<span class="glyphicon glyphicon-plus" aria-hidden="true" title="Agregar un input Descripcion"></span> #ID';
	var parte10 = '</button>';
	var parte11 = '</li>';
	var parte12 = '<li class="itemControles">';
	var parte13 = '<button type="button" class="btn btn-success btn-xs">';
	var parte14 = '<span class="glyphicon glyphicon-plus" aria-hidden="true" title="Agregar un Contenido Basico"></span> #C';
	var parte15 = '</button>';
	var parte16 = '</li>';
	var parte17 = "";//'<li class="itemControles">';
	var parte18 = "";//'<button type="button" class="btn btn-success btn-xs">';
	var parte19 = "";//'<span class="glyphicon glyphicon-list-alt" aria-hidden="true" title="Agregar una Lista de Contenidos"> L</span>';
	var parte20 = "";//'</button>';
	var parte21 = "";//'</li>';
	var parte22 = "";//'<li class="itemControles">';
	var parte23 = "";//'<button type="button" class="btn btn-danger btn-xs">';
	var parte24 = "";//'<span class="glyphicon glyphicon-remove" aria-hidden="true" title="Eliminar Componente"></span>';
	var parte25 = "";//'</button>';
	var parte26 = "";//'</li>';
	var parte27 = '</ul><div class="clearfix"></div>';
	var parte28 = "";//'</div>';
	return parte1 + parte_2 + parte_3 + parte_4 + parte_5 + parte_6 + parte2 + parte3 + parte4 + parte5 + parte6 + parte7 + parte8 + parte9 + parte10 +
					parte11 + parte12 + parte13 + parte14 + parte15 + parte16 + parte17 + parte18 + parte19 + parte20 +
					parte21 + parte22 + parte23 + parte24 + parte25 + parte26 + parte27 + parte28;
}


////////////////////////////////////////////////////////////
//                  ELEMENTO LISTA DE CONTENIDOS BASICOS ES UN ELEMENTO BASICO //
////////////////////////////////////////////////////////////

function ElementoContenedorLista(contenedorPadre, posicionEnElArray){
	ElementoBasico.call(this, contenedorPadre, posicionEnElArray);
	this.contenedor.className += " elemento-contenedor-lista";
	this.eliminarControles([0,1,2,3,4]);
	var tituloLista = crearContenedorBasico(this.contenedor.id, 0);
	var lista = crearContenedorBasico(this.contenedor.id, 6);
	tituloLista.eliminarControl(5);
	lista.eliminarControl(5);
}
ElementoContenedorLista.prototype = Object.create(ElementoBasico.prototype);//new ElementoBasico;


////////////////////////////////////////////////////////////
//                  ELEMENTO LISTA DE CONTENIDOS BASICOS ES UN ELEMENTO BASICO //
////////////////////////////////////////////////////////////

function ElementoListaContenidosBasicos(contenedorPadre, posicionEnElArray){
	ElementoBasico.call(this, contenedorPadre, posicionEnElArray);
	this.contenedor.className += " elemento-lista-contenidos-basicos";
	this.eliminarControles([0,1,2,3,4]);
	var plantilla = crearContenedorBasico(this.contenedor.id, 5);
	plantilla.eliminarControl(5);
}
ElementoListaContenidosBasicos.prototype = Object.create(ElementoBasico.prototype);//new ElementoBasico;






function crearContenedorBasico(idPadre, tipoContenedor){
	var elemento = document.getElementById(idPadre);
	if(elemento.elementoBasico===undefined)
		elemento.elementosBasicos = [];

	var contenedorBasicoAuxiliar;

	switch(tipoContenedor){
		case 0:
			contenedorBasicoAuxiliar = new ElementoTitulo(elemento, elemento.elementosBasicos.length);
			break;
		case 1:
			contenedorBasicoAuxiliar = new ElementoInputTitulo(elemento, elemento.elementosBasicos.length);
			break;
		case 2:
			contenedorBasicoAuxiliar = new ElementoInputDescripcion(elemento, elemento.elementosBasicos.length);
			break;
		case 3:
			contenedorBasicoAuxiliar = new ElementoBasico(elemento, elemento.elementosBasicos.length);
			break;
		case 4:
			contenedorBasicoAuxiliar = new ElementoContenedorLista(elemento, elemento.elementosBasicos.length);
			break;
		case 5:
			contenedorBasicoAuxiliar = new ElementoBasicoPlantilla(elemento, elemento.elementosBasicos.length);
			break;
		case 6:
			contenedorBasicoAuxiliar = new ElementoListaContenidosBasicos(elemento, elemento.elementosBasicos.length);
			break;
	}

	elemento.elementosBasicos[elemento.elementosBasicos.length] = contenedorBasicoAuxiliar;
	return contenedorBasicoAuxiliar;
}

$(document).ready(function(){
	crearContenedorBasico("datosI",3);
	crearContenedorBasico("justificacion",3);
	crearContenedorBasico("objetivos",3);
	crearContenedorBasico("unidades",3);
	crearContenedorBasico("metodologias",3);
	crearContenedorBasico("cronograma",3);
	crearContenedorBasico("criteriosEval",3);
	crearContenedorBasico("bibliografias",3);
	crearContenedorBasico("reglamentos",3);
	crearContenedorBasico("prerequisitos",3);
});
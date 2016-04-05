////////////////////////
//      CLASE CONTROL //
////////////////////////

function Control(elementoBasico, id, title, descButton, icon, tipo){
	this.id = id;

	this.control = this.establecerControl(elementoBasico, title, descButton, icon, tipo);
}

Control.prototype.establecerControl = function(elementoBasico, title, descButton, icon, tipo){
	var contenedorControl = document.createElement('li');
	contenedorControl.className = "itemControles";
	var control = document.createElement('button');
	control.className = "btn btn-"+tipo+" btn-xs";
	control.title = title;
	control.elementoBasico = elementoBasico;

	var icono = '<span class="glyphicon glyphicon-'+icon+'" aria-hidden="true"></span>'+descButton;
	control.innerHTML = icono;

	// if(this.id == "EEB"){
	// 	control.className = "btn btn-danger btn-xs"
	// }

	contenedorControl.appendChild(control);

	return contenedorControl;

}

Control.prototype.addFuncion = function(funcion) {
		this.control.firstChild.setAttribute("onclick",funcion);
}

Control.prototype.eliminarControl = function(){
	this.control.parentNode.removeChild(this.control);
}


/////////////////////////////////
//    CLASE LISTA DE CONTROLES //
/////////////////////////////////

function ListaControles(elementoBasico, id){
	this.id = id;
	this.elementoBasico = elementoBasico;

	this.listaControles = [];

	this.contenedor = this.getContenedorControles();//contenedor div ul
}

ListaControles.prototype.getContenedorControles = function(){
	var parte1 = '<ul class="controles">';
	var parte2 = '</ul><div class="clearfix"></div>';
	var containerControl = document.createElement('div');
	containerControl.innerHTML = parte1 + parte2;
	return containerControl;
}

ListaControles.prototype.addControl = function(control){
	this.listaControles.push(control);
	this.contenedor.childNodes[0].appendChild(control.control);
}

ListaControles.prototype.eliminarControl = function(idControl){
	for (var i = 0; i < this.listaControles.length; i++) {
		if(this.listaControles[i].id == idControl){
			this.listaControles[i].eliminarControl();
			this.listaControles.splice(i,1);
		}
	};
}

ListaControles.prototype.eliminarControles = function(controles){
	for (var i = 0; i < controles.length; i++) {
		this.eliminarControl(controles[i]);
	};
}
// devuleve todos los ids de sus controladores menos los que se dieron.
ListaControles.prototype.getAllLess = function(idsControls){
	var respuesta = [];


	if(idsControls.length == 0){
		for (var i = 0; i < this.listaControles.length; i++) {
			respuesta[i] = this.listaControles[i].id;
		};
	}
	else{
		var exito;
		for (var i = 0, k = 0; i < this.listaControles.length; i++) {
			exito = true;
			for (var j = 0; j < idsControls.length; j++) {
				if(this.listaControles[i].id == idsControls[j]){
					exito = false;
					break;
				}
			};
			if(exito){
				respuesta[k] = this.listaControles[i].id;
				k++;
			}
		};
	}

	return respuesta;

}


///////////////////////////////////
// CLASE DESPLEGADOR DE MODAL //
///////////////////////////////////

function DesplegadorModal(elementoBasico){
	this.modal = document.getElementById('modal');
	this.titulo = document.getElementById('modal-title');
	this.contenido = document.getElementById('modal-body');
	this.control = this.establecerControl();

	this.elementoBasico = elementoBasico;
}

DesplegadorModal.prototype.establecerControl = function(){
	var control = document.getElementById('modal-btn');
	control.modal = this;
	control.setAttribute("onclick","this.modal.reestrablecerContenidoElementoBasico();");
	return control;
}

DesplegadorModal.prototype.addContenido = function(contenido, tituloModal){
	this.titulo.innerHTML = tituloModal;
	this.contenido.appendChild(contenido);
	contenido.style.display = "block";
	var idModalJQuery = "#"+this.modal.id;
	$(idModalJQuery).modal('show');
}

//saca el contenido del modal y lo vuelve a poner en el elemento basico.
DesplegadorModal.prototype.reestrablecerContenidoElementoBasico = function(){
	var contenedor = this.elementoBasico.contenedor;
	this.contenido.lastChild.style.display = "none";
	contenedor.insertBefore(this.contenido.lastChild, contenedor.firstChild);
}




///////////////////////////
// CLASE ELEMENTO BASICO //
///////////////////////////

function ElementoBasico(contenedorPadre, posicionEnElArray){
	// Alias para referirme al objeto
	this.alias = "B"
	// El numero de elemento que es este elemento basico
	this.numeroElemento = null;
	// El modal donde se mostraran todos los mensajes o controles.
	this.modal = new DesplegadorModal(this);
	// Me aviza en que posicion estoy para cuando elimine este eleemnto tambien elimine el objeto dentro del array.
	this.posicionEnElArray = posicionEnElArray;
	//Me dice que soy elemento basico y no una deribado... tal vez no se use esta variable.
	this.soyElementoBasico = true;
	//mi contenedor padre donde esta el elemento basico.
	this.contenedorPadre = contenedorPadre;
	//el contenedor html del componenete basico que es un div. y su estructura interna.
	this.contenedor = this.establecerContenedor();
	//esta es una lista de listas de controles asi se puede tener mas de una lista de controles.
	this.listaControles = [];
	//establece la lista de controles principales que ocupara un campo en nuestro array de listacontroles.
	this.establecerControlesPrincipales();
	//controles secundarios
	this.panelConfiguracion = this.establecerPanelConfiguracion();
	//verifica si es un eleemnto basico que se puede eliminar o uno que no se puede y tiene que estar presente.
	this.verificarSiSePuedeEliminar();
}

ElementoBasico.prototype.establecerPanelConfiguracion= function(){
	var contenedor = document.createElement("div");
	contenedor.style.display = "none";
	this.contenedor.insertBefore(contenedor, this.contenedor.firstChild);

	var parte1 = '<input type="checkbox" name="required" value="required"> El Elemento es Required?';
	contenedor.innerHTML = parte1;

	contenedor.childNodes[0].name = this.contenedor.id +"_required";

	//elemento hidden que nos dice que numero de componente es por defecto es 0
	this.numeroElemento = document.createElement("input");
	this.numeroElemento.type="hidden";
	this.numeroElemento.name = this.contenedor.id +"_numeroElemento"
	//establecemos el input hidden que me dira el numero de elemento.
	this.numeroElemento.value = this.contenedor.dataset.numeroContenedor;

	contenedor.appendChild(this.numeroElemento);

	//elemento auxiliares para saber el numero de componentes de un elemento basico.
	this.contadorT = document.createElement("input");
	this.contadorT.type="hidden";
	this.contadorT.value = 0;
	this.contadorT.name = this.contenedor.id +"_contadorT"
	contenedor.appendChild(this.contadorT)

	this.contadorIT = document.createElement("input");
	this.contadorIT.type="hidden";
	this.contadorIT.value = 0;
	this.contadorIT.name = this.contenedor.id +"_contadorIT"
	contenedor.appendChild(this.contadorIT)

	this.contadorID = document.createElement("input");
	this.contadorID.type="hidden";
	this.contadorID.value = 0;
	this.contadorID.name = this.contenedor.id +"_contadorID"
	contenedor.appendChild(this.contadorID)

	this.contadorCL = document.createElement("input");
	this.contadorCL.type="hidden";
	this.contadorCL.value = 0;
	this.contadorCL.name = this.contenedor.id +"_contadorCL"
	contenedor.appendChild(this.contadorCL)

	this.contadorB = document.createElement("input");
	this.contadorB.type="hidden";
	this.contadorB.value = 0;
	this.contadorB.name = this.contenedor.id +"_contadorB"
	contenedor.appendChild(this.contadorB)

	return contenedor;
}

ElementoBasico.prototype.establecerControlesPrincipales = function(){
	var indiceLista = this.listaControles.length;
	this.listaControles[indiceLista] = new ListaControles(this, "principal");
	this.listaControles.principal = indiceLista;
	
	var control1 = new Control(this, "AET", "Agregar un Titulo Central","T", "plus", "success");
	this.listaControles[indiceLista].addControl(control1);

	var control2 = new Control(this, "AEIT", "Agregar un campo Titulo","IT", "plus", "success");
	this.listaControles[indiceLista].addControl(control2);

	var control3 = new Control(this, "AEID", "Agregar un Campo Descripcion","ID", "plus", "success");
	this.listaControles[indiceLista].addControl(control3);

	var control4 = new Control(this, "AEB", "Agregar un Elemento Basico","B", "plus", "success");
	this.listaControles[indiceLista].addControl(control4);

	var control5 = new Control(this, "ACL", "Agregar un Contenedor Lista","L", "plus", "success");
	this.listaControles[indiceLista].addControl(control5);

	var control51 = new Control(this, "config", "Configurar este Elemento","", "wrench", "default");
	this.listaControles[indiceLista].addControl(control51);	

	var control6 = new Control(this, "EEB", "Eliminar este Elemento","", "remove", "danger");
	this.listaControles[indiceLista].addControl(control6);


	control1.addFuncion("this.elementoBasico.agregarElementoTitulo()");
	control2.addFuncion("this.elementoBasico.agregarElementoInputTitulo()");
	control3.addFuncion("this.elementoBasico.agregarElementoInputDescripcion()");
	control4.addFuncion("this.elementoBasico.agregarElementoBasico()");
	control5.addFuncion("this.elementoBasico.agregarContenedorLista()");
	control5.addFuncion("this.elementoBasico.agregarContenedorLista()");
	control51.addFuncion("this.elementoBasico.configurarElemento()");
	control6.addFuncion("this.elementoBasico.eliminarElementoBasico()");

	//aniadimos el contenedor de la lista al contenedor del contenido basico.
	this.contenedor.appendChild(this.listaControles[indiceLista].contenedor);
}

ElementoBasico.prototype.establecerContenedor = function(){
	var contenedor = document.createElement('div');
	
	if(this.contenedorPadre.childNodes.length <= 2){
		contenedor.dataset.numeroContenedor = 1;//this.contenedorPadre.childNodes.length;
	}
	else{
		contenedor.dataset.numeroContenedor = 
			parseInt(this.contenedorPadre.childNodes[this.contenedorPadre.childNodes.length-2].dataset.numeroContenedor) + 1;
	}

	contenedor.className = "elemento-basico";
	contenedor.id = this.setIdContenedor(contenedor.dataset.numeroContenedor);
	contenedor.elementoBasico = this;	

	if(this.contenedorPadre.childNodes.length == 0)
		this.contenedorPadre.appendChild(contenedor);
	else
		this.contenedorPadre.insertBefore(contenedor,this.contenedorPadre.lastChild);

	return contenedor;
}

ElementoBasico.prototype.setIdContenedor = function(numeroContenedor){
	var id = this.contenedorPadre.id + "_" + numeroContenedor + this.alias;
	return id;
}

ElementoBasico.prototype.verificarSiSePuedeEliminar = function(){
	if(this.contenedorPadre.parentNode.elementosBasicos === undefined){
		this.eliminarControl("EEB","principal");
	}
}

ElementoBasico.prototype.eliminarControles = function(controles, idListaControl){
	for (var i = 0; i < this.listaControles.length; i++) {
		if(this.listaControles[i].id == idListaControl){
			this.listaControles[i].eliminarControles(controles);
		}
		this.eliminarControl(controles[i]);
	};
}

ElementoBasico.prototype.eliminarControl = function(control, idListaControl){
	for (var i = 0; i < this.listaControles.length; i++) {
		if(this.listaControles[i].id == idListaControl){
			this.listaControles[i].eliminarControl(control);
			break;
		}
	};
}


ElementoBasico.prototype.agregarElementoTitulo = function(){
	crearContenedorBasico(this.contenedor.id,"new ElementoTitulo");
	this.incrementarElemento(this.contadorT);
}

ElementoBasico.prototype.agregarElementoInputTitulo = function(){
	crearContenedorBasico(this.contenedor.id,"new ElementoInputTitulo");
	this.incrementarElemento(this.contadorIT);
}

ElementoBasico.prototype.agregarElementoInputDescripcion = function(){
	crearContenedorBasico(this.contenedor.id,"new ElementoInputDescripcion");
	this.incrementarElemento(this.contadorID);
}

ElementoBasico.prototype.agregarElementoBasico = function(){
	crearContenedorBasico(this.contenedor.id,"new ElementoBasico");
	this.incrementarElemento(this.contadorB);
}

ElementoBasico.prototype.agregarContenedorLista = function(){
	crearContenedorBasico(this.contenedor.id,"new ElementoContenedorLista");
	this.incrementarElemento(this.contadorCL);
}

ElementoBasico.prototype.eliminarElementoBasico = function(){
	this.contenedor.parentNode.removeChild(this.contenedor);
	this.contenedorPadre.elementoBasico.decrementarElemento(this);
	delete this.contenedorPadre.elementosBasicos[this.posicionEnElArray];
}

ElementoBasico.prototype.incrementarElemento = function(elemento){
	elemento.value = parseInt(elemento.value)+1;
}

ElementoBasico.prototype.decrementarElemento = function(elemento){
	var auxContador;
	if(elemento instanceof ElementoTitulo)
		auxContador = this.contadorT;
	else if(elemento instanceof ElementoInputTitulo)
		auxContador = this.contadorIT;
	else if(elemento instanceof ElementoInputDescripcion)
		auxContador = this.contadorID;
	else if(elemento instanceof ElementoContenedorLista)
		auxContador = this.contadorCL;
	else
		auxContador = this.contadorB;

	auxContador.value = parseInt(auxContador.value)-1;
}

ElementoBasico.prototype.generarInput = function(contenedor, tituloInput, esTitulo, esInputText){
  var parte1 = '<label for="'+contenedor.id+'_t">'+tituloInput+'</label>';
  var parte2 = '<input class="form-control" type="text" name="'+contenedor.id+'_t" id="'+contenedor.id+'_t" required>';
  var parte3 = "";
  if(!esTitulo){
  	if(esInputText){
  		parte3 = '<input class="form-control" type="text" id="input_titulo_'+contenedor.id+'">'
  		parte1 = parte1.replace(/_t"/g,'_tt"');
  		parte2 = parte2.replace(/_t"/g,'_tt"');
  	}
  	else{
  		parte3 = '<textarea class="form-control" id="descripcion_'+contenedor.id+'" cols="100" rows="5"></textarea>';
  		parte1 = parte1.replace(/_t"/g,'_td"');
  		parte2 = parte2.replace(/_t"/g,'_td"');
  	}
  }

  var contenido = document.createElement('div');
  contenido.className = "form-group";

  contenido.innerHTML = parte1 + parte2 + parte3;

  contenedor.appendChild(contenido);
}

// muestra el modal  y los controles en este.
ElementoBasico.prototype.configurarElemento = function(){
	this.modal.addContenido(this.panelConfiguracion, "Controles Alternos");
}



//////////////////////////////////////
//                        SUBCLASES //
//////////////////////////////////////

////////////////////////////////////////////////////////////
//                  ELEMENTO TITULO ES UN ELEMENTO BASICO //
////////////////////////////////////////////////////////////

function ElementoTitulo(contenedorPadre, posicionEnElArray){
	ElementoBasico.call(this, contenedorPadre, posicionEnElArray);
	this.alias = "T";
	this.contenedor.id = this.setIdContenedor(this.contenedor.dataset.numeroContenedor);
	this.contenedor.className += " elemento-titulo";
	this.eliminarControles(this.listaControles[this.listaControles.principal].getAllLess(["EEB","config"]),
								"principal");
	this.generarInput(this.contenedor, "Titulo Central", true, false);
}
ElementoTitulo.prototype = Object.create(ElementoBasico.prototype);


////////////////////////////////////////////////////////////
//                  ELEMENTO INPUT TITULO ES UN ELEMENTO BASICO //
////////////////////////////////////////////////////////////

function ElementoInputTitulo(contenedorPadre, posicionEnElArray){
	ElementoBasico.call(this, contenedorPadre, posicionEnElArray);
	this.alias = "IT";
	this.contenedor.id = this.setIdContenedor(this.contenedor.dataset.numeroContenedor);
	this.contenedor.className += " elemento-input-titulo";
	this.eliminarControles(this.listaControles[this.listaControles.principal].getAllLess(["EEB","config"]),
								"principal");
	this.generarInput(this.contenedor, "Titulo del Campo-Titulo", false, true);
}
ElementoInputTitulo.prototype = Object.create(ElementoBasico.prototype);


////////////////////////////////////////////////////////////
//                  ELEMENTO INPUT DESCRIPCION ES UN ELEMENTO BASICO //
////////////////////////////////////////////////////////////

function ElementoInputDescripcion(contenedorPadre, posicionEnElArray){
	ElementoBasico.call(this, contenedorPadre, posicionEnElArray);
	this.alias = "ID"
	this.contenedor.id = this.setIdContenedor(this.contenedor.dataset.numeroContenedor);
	this.contenedor.className += " elemento-input-descripcion";
	this.eliminarControles(this.listaControles[this.listaControles.principal].getAllLess(["EEB","config"]),
								"principal");
	this.generarInput(this.contenedor, "Titulo del Campo-Descripcion", false, false);
}
ElementoInputDescripcion.prototype = Object.create(ElementoBasico.prototype);//new ElementoBasico;



////////////////////////////////////////////////////////////
//                  ELEMENTO CONTENEDOR DE LISTA DE CONTENIDOS BASICOS ES UN ELEMENTO BASICO //
////////////////////////////////////////////////////////////

function ElementoContenedorLista(contenedorPadre, posicionEnElArray){
	ElementoBasico.call(this, contenedorPadre, posicionEnElArray);
	this.alias = "CL";
	this.contenedor.id = this.setIdContenedor(this.contenedor.dataset.numeroContenedor);
	this.contenedor.className += " elemento-contenedor-lista";
	this.eliminarControles(this.listaControles[this.listaControles.principal].getAllLess(["EEB","config"]),
								"principal");
	var tituloLista = crearContenedorBasico(this.contenedor.id, "new ElementoTitulo");
	var lista = crearContenedorBasico(this.contenedor.id, "new ElementoListaContenidosBasicos");
	tituloLista.eliminarControl("principal");
	lista.eliminarControl("EEB", "principal");

	this.contenedor.insertBefore(this.contenedor.lastChild, this.contenedor.firstChild);
}
ElementoContenedorLista.prototype = Object.create(ElementoBasico.prototype);//new ElementoBasico;


////////////////////////////////////////////////////////////
//                  ELEMENTO LISTA DE CONTENIDOS BASICOS ES UN ELEMENTO BASICO //
////////////////////////////////////////////////////////////

function ElementoListaContenidosBasicos(contenedorPadre, posicionEnElArray){
	ElementoBasico.call(this, contenedorPadre, posicionEnElArray);
	this.alias = "L";
	this.contenedor.id = this.setIdContenedor(this.contenedor.dataset.numeroContenedor);
	this.contenedor.className += " elemento-lista-contenidos-basicos";
	this.eliminarControles(this.listaControles[this.listaControles.principal].getAllLess(["EEB","config"]),
								"principal");
	var plantilla = crearContenedorBasico(this.contenedor.id, "new ElementoBasico");
	plantilla.eliminarControl("EEB", "principal");
	
	this.contenedor.insertBefore(this.contenedor.lastChild, this.contenedor.firstChild);
}
ElementoListaContenidosBasicos.prototype = Object.create(ElementoBasico.prototype);//new ElementoBasico;






function crearContenedorBasico(idPadre, classContenedor){
	var elemento = document.getElementById(idPadre);
	if(elemento.elementosBasicos===undefined)
		elemento.elementosBasicos = [];

	var contenedorBasicoAuxiliar = eval(classContenedor + "(elemento, elemento.elementosBasicos.length)");

	elemento.elementosBasicos[elemento.elementosBasicos.length] = contenedorBasicoAuxiliar;
	return contenedorBasicoAuxiliar;
}

$(document).ready(function(){
	crearContenedorBasico("datosI","new ElementoBasico");
	crearContenedorBasico("justificacion","new ElementoBasico");
	crearContenedorBasico("objetivos","new ElementoBasico");
	crearContenedorBasico("unidades","new ElementoBasico");
	crearContenedorBasico("metodologias","new ElementoBasico");
	crearContenedorBasico("cronograma","new ElementoBasico");
	crearContenedorBasico("criteriosEval","new ElementoBasico");
	crearContenedorBasico("bibliografias","new ElementoBasico");
	crearContenedorBasico("reglamentos","new ElementoBasico");
	crearContenedorBasico("prerequisitos","new ElementoBasico");
});

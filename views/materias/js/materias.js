$(document).ready(function(){

	$("#btnEliminar").click(function(){
		var valor = getSeleccionado($('#datos input[type=checkbox]'));
		ejecutarPeticion(valor, "#eliminar_materia");
	});
	$("#btnEditar").click(function(){
		var valor = getSeleccionado($('#datos input[type=checkbox]'));
		ejecutarPeticion(valor, "#editar_materia");
	});

	$("#confirmarEliminar").click(function(){
		var codigo_materia = getSeleccionado($('#datos input[type=checkbox'));
		alert(this.dataset.baseurl + codigo_materia);
		window.location = this.dataset.baseurl + codigo_materia;
	});

});

function getSeleccionado(arrayCheck){
	var valor = null;

	for (var i = 0; i < arrayCheck.length; i++) {
		if(arrayCheck[i].checked)
			valor = arrayCheck[i].value;
	}

	return valor;
}

function ejecutarPeticion(valor, ventanaModal){
	if(valor!=null)
		$(ventanaModal).modal('show');
	else
		alert("Seleccione una materia de la lista!");
}
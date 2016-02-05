$(document).ready(function(){
	$("#btnEliminar").click(function(){
		var valor = getSeleccionado($('#datos input[type=checkbox]'));
		confirmarEliminacion(valor, "#eliminar_materia", this.dataset.baseurl);
	});
	$("#btnEditar").click(function(){
		var valor = getSeleccionado($('#datos input[type=checkbox]'));
		confirmarEdicion(valor, this.dataset.baseurl + "/" + valor);
	});

	$("#confirmarEliminar").click(function(){
		var codigo_materia = getSeleccionado($('#datos input[type=checkbox'));
		window.location = this.dataset.baseurl + "/" +codigo_materia;
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

function confirmarEliminacion(valor, modalDialog, baseurl){
	if(valor!=null){
		$.ajax({
			url: baseurl+"/"+valor,
			type: 'POST',
			success: function(result){
				if(result == "0")
					$('#modalNoSePuedeEliminar').modal('show');
				else
					$(modalDialog).modal('show');
			}
		});
	}
	else
		alert("Seleccione una materia de la lista!");
}



function confirmarEdicion(valor, paginaEdicion){
	if(valor!=null)
		window.location = paginaEdicion;
	else
		alert("Seleccione una materia de la lista!");
}
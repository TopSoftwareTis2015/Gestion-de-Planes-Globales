$(document).ready(function(){
	// $("#btnEliminar").click(function(){
	// 	//var valor = getSeleccionado($('#datos input[type=checkbox]'));
	// 	confirmarEliminacion(this.dataset.valor, "#eliminar_materia", this.dataset.baseurl);
	// });
	// $("#btnEditar").click(function(){
	// 	var valor = getSeleccionado($('#datos input[type=checkbox]'));
	// 	confirmarEdicion(valor, this.dataset.baseurl + "/" + valor);
	// });

	$("#confirmarEliminar").click(function(){
		//var codigo_materia = getSeleccionado($('#datos input[type=checkbox]'));
		var codigo_materia = document.getElementById("auxiliarNoBorrar").dataset.codigo;
		window.location = this.dataset.baseurl + "/" +codigo_materia;
	});

	$("#habilitada").click(function(event){
		event.preventDefault();
		if(!this.checked)
			confirmarEliminacionEnEditar(this.dataset.codigoMateria, this.dataset.baseurl, this.dataset.baseurlEliminar, this);			
		else
			darDeAltaMateria(this.dataset.codigoMateria, this.dataset.baseurlDarDeAlta, this);
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

function confirmarEliminacion(enlace){
		if(enlace.dataset.habilitada == '1'){
			$.ajax({
				url: enlace.dataset.baseurl+"/"+enlace.dataset.valor,
				type: 'POST',
				success: function(result){
					if(result == "0")
						$('#modalNoSePuedeEliminar').modal('show');
					else{
						document.getElementById('auxiliarNoBorrar').dataset.codigo = enlace.dataset.valor;
						$("#eliminar_materia").modal('show');
					}
				}
			});
		}else{
			$('#modalYaEstaBaja').modal('show');
		}
}

function confirmarEliminacionEnEditar(valor, baseurl, baseurlEliminar, checkboxHabilitar){
	$.ajax({
		url: baseurl+"/"+valor,
		type: 'POST',
		success: function(result){
			if(result == "0"){
				$('#modalNoSePuedeEliminar').modal('show');				
			}
			else
				eliminarEnEditar(valor, baseurlEliminar, checkboxHabilitar);
			
		}
	});
}

function darDeAltaMateria(valor, baseurlDarDeAlta, checkboxHabilitar){
	$.ajax({
		url: baseurlDarDeAlta+"/"+valor,
		type: 'POST',
		success: function(){
			checkboxHabilitar.checked = true;
		}
	});
}

function eliminarEnEditar(valor, baseurlEliminar, checkboxHabilitar){
	$.ajax({
		url: baseurlEliminar+"/"+valor,
		type: 'POST',
		success: function(){
			checkboxHabilitar.checked = false;
		}
	});
}



// function confirmarEdicion(valor, paginaEdicion){
// 		window.location = paginaEdicion+"/"+valor;
// }


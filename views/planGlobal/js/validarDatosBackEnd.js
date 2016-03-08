function validarCodigoUnico(codigo_pg){
	$.ajax({
		url : codigo_pg.dataset.urlValidar +"/"+ codigo_pg.value,

		// data : {codigo_plan_global: codigo_pg.value},

		// type : 'POST',

		// dataType : 'json',

		success : function(existeCodigo){
			if(existeCodigo == "1"){
				actualizarError("error_codigo_pg", "El codigo del plan global ingresado ya existe!");
			}
			else{
				actualizarError("error_codigo_pg", "");
			}
		},

		error : function(xhr, status) {
			alert(status + " aqui es el error "+ xhr);
		}
	});
	
}
	
	function irANuevoPlanGlobal(enlace){
      $.ajax({
        url : enlace.dataset.urlBuscar,

        success : function(id_pg){
          window.location = enlace.dataset.url + id_pg;
        } 
      });
    }
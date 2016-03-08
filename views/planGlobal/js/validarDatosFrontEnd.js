  function validarAnioGestion(numero){
    try{
    	numero = parseInt(numero);

    	if(isNaN(numero))
    		throw "numero no válido!";

    	var anioActual = (new Date()).getFullYear();

    	if(numero < 1831 || numero > anioActual){
    		throw "Año no válido!! Ingrese un año entre 1832 - " + anioActual;
    	}
    	else{
    		actualizarError("error_anio_gestion","");
    	}
    }catch(error){
    	actualizarError("error_anio_gestion", error);
    }
  }

  function actualizarError(idElementoError, mensaje){
  	var elementoError = document.getElementById(idElementoError);
  	elementoError.innerHTML = mensaje;
  }

  function verificarNumerosCargaHoraria(inputNumero){
    var numero = Number(inputNumero.value);
    
    if(!esNumeroEntero(numero))
    	actualizarError("error_carga_horaria","hay entradas con números no válidos");
    else{
       // if(){
       // }else{
    	  //  actualizarError("error_carga_horaria","");
       // }
       verificar();
      }

	}

	function esNumeroEntero(numero){
		if(isNaN(numero))
			return false;
		else
		if((numero*10)%10 != 0)
			return false;

		return true;
	}


  function antesDeEnviar(){
    verificarGrupos();

    spans = document.getElementsByTagName("span");
    var patt = /error_/;

    for (var i = 0; i < spans.length; i++) {
      if(spans[i].id)
        if(patt.test(spans[i].id)) {
          if(spans[i].innerHTML){
            alert("existen errores para corregir");
            return false;            
          }
        }
    };

    habilitarSelectGrupos();

    return true;  
  }

  function verificarGrupos(){
    spanErrorGrupo = document.getElementById("error_grupo");
    selectGrupo = document.getElementById("sel2");
    if(selectGrupo.getElementsByTagName("option").length==0){
      spanErrorGrupo.innerHTML = "Elija por lo menos un grupo o docente!";
    }
    else
      spanErrorGrupo.innerHTML = "";
  }

  function habilitarSelectGrupos(){
    selectGrupo = document.getElementById("sel2");

    for (var i = 0; i < selectGrupo.childNodes.length; i++) {
      selectGrupo.childNodes[i].selected = true;
    };
  }
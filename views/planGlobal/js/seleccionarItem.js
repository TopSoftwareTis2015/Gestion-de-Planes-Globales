var docentes;

function setDocentes(p){
    docentes = p;
}



function ingresarGrupo(){
    gruposTotales = document.getElementById('sel1');
    gruposPlanGlobal = document.getElementById('sel2');

    grupoAgregado = intercambiarOption(gruposTotales, gruposPlanGlobal);
    if(grupoAgregado!=null){
        docentesTotales = document.getElementById('sel3');
        docentesPlanGlobal = document.getElementById('sel4');
        if(intercambiarDocente(grupoAgregado.dataset.docente, docentesTotales, docentesPlanGlobal)){
            agregarInformacionDocente(grupoAgregado.dataset.docente);
        }
    }
}

function intercambiarOption(select1, select2) {

    for (var i = 0; i < select1.options.length; i++) {
        option = select1.options[i];
        if(option.selected){
            select1.removeChild(option);
            select2.appendChild(option);
            return option;
        }
    };

    return null;
}

function eliminarDocente(id_docente, select){

    for (var i = 0; i < select.options.length; i++) {
        option = select.options[i];
        if(option.dataset.docente == id_docente){
            return true;
        }
    };
    
    docentesTotales = document.getElementById('sel3');
    docentesPlanGlobal = document.getElementById('sel4');
    intercambiarDocente(id_docente, docentesPlanGlobal, docentesTotales);
    eliminarDatosDocente(id_docente);
}

function intercambiarDocente(id_docente, selectOrigen, selectDestino){
    
    for (var i = 0; i < selectOrigen.options.length; i++) {
        option = selectOrigen.options[i];
        if(option.value == id_docente){
            selectOrigen.removeChild(option);
            selectDestino.appendChild(option);
            return true;
        }
    };
    return false;    
}

function eliminarDatosDocente(id_docente){
    var numerosDocente = "";
    var correosDocente = "";

    for (var i = 0; i < docentes.length; i++) {
        if(docentes[i]['id_docente']!=id_docente){
            numerosDocente = docentes[i]['nombre_usuario'] + ": " +
                docentes[i]['numero_movil_usuario'] + " " + docentes[i]['numero_fijo_usuario'] + "\n";
            correosDocente = docentes[i]['nombre_usuario'] + ": " +
                docentes[i]['correo_usuario'] + "\n";
        }
    };

    document.getElementById('telefonos').innerHTML = numerosDocente;
    document.getElementById('correos').innerHTML = correosDocente;
}

function agregarInformacionDocente(id_docente){
    var nuevoNumeroDocente = "";
    var nuevoCorreoDocente = "";

    for (var i = 0; i < docentes.length; i++) {
        if(docentes[i]["id_usuario"]==id_docente){
            nuevoNumeroDocente = docentes[i]['nombre_usuario'] + ": " +
                docentes[i]['numero_movil_usuario'] + " " + docentes[i]['numero_fijo_usuario'] + "\n";
            nuevoCorreoDocente = docentes[i]['nombre_usuario'] + ": " +
                docentes[i]['correo_usuario'] + "\n";

            document.getElementById('telefonos').innerHTML += nuevoNumeroDocente;
            document.getElementById('correos').innerHTML += nuevoCorreoDocente;
        }
    };
}
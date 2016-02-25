/////////////////////////////////////////////////////////
// FUNCIONES PARA LA FUNCIONALIDAD DE SELECCIONAR ITEM //
/////////////////////////////////////////////////////////

//////////////////////////////////
// FUNCIONES PARA CARGA HORARIA //
//////////////////////////////////


var docentes;

function setDocentes(p){
    docentes = p;
}

function eliminarGrupo(){
    gruposTotales = document.getElementById('sel1');
    gruposPlanGlobal = document.getElementById('sel2');

    grupoEliminado = intercambiarOption(gruposPlanGlobal, gruposTotales);
    if(grupoEliminado!=null){
        quitarDocente(grupoEliminado.dataset.docente,gruposPlanGlobal)
    }
}

function eliminarDocente(){
    docentesTotales = document.getElementById('sel3');
    docentesPlanGlobal = document.getElementById('sel4');

    docenteEliminado = intercambiarOption(docentesPlanGlobal, docentesTotales);
    if(docenteEliminado!=null){
        eliminarDatosDocente(docenteEliminado.value);
        eliminarGruposDocente(docenteEliminado.value);
    }
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

function ingresarDocente(){
    docentesTotales = document.getElementById('sel3');
    docentesPlanGlobal = document.getElementById('sel4');

    docenteAgregado = intercambiarOption(docentesTotales, docentesPlanGlobal);
    if(docenteAgregado!=null){
        gruposTotales = document.getElementById('sel1');
        gruposPlanGlobal = document.getElementById('sel2');
        agregarInformacionDocente(docenteAgregado.value);
        intercambiarGruposDocente(docenteAgregado.value, gruposTotales, gruposPlanGlobal);
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

function quitarDocente(id_docente, gruposPlanGlobal){

    for (var i = 0; i < gruposPlanGlobal.options.length; i++) {
        grupo = gruposPlanGlobal.options[i];
        if(grupo.dataset.docente == id_docente){
            return true;
        }
    };
    
    docentesTotales = document.getElementById('sel3');
    docentesPlanGlobal = document.getElementById('sel4');
    intercambiarDocente(id_docente, docentesPlanGlobal, docentesTotales);
    eliminarDatosDocente(id_docente);
}

function eliminarGruposDocente(id_docente){
    gruposPlanGlobal = document.getElementById('sel2');

    for (var i = 0; i < gruposPlanGlobal.options.length; i++) {
        grupo = gruposPlanGlobal.options[i];
        if(grupo.dataset.docente == id_docente){
            gruposTotales = document.getElementById('sel1');
            gruposPlanGlobal = document.getElementById('sel2');
            intercambiarGruposDocente(id_docente, gruposPlanGlobal, gruposTotales);
        }
    };
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

function intercambiarGruposDocente(id_docente, selectOrigen, selectDestino){
    for (var i = 0; i < selectOrigen.options.length;) {
        grupo = selectOrigen.options[i];
        if(grupo.dataset.docente == id_docente){
            selectOrigen.removeChild(grupo);
            selectDestino.appendChild(grupo);
        }else{
            i++;
        }
    };
}

function eliminarDatosDocente(id_docente){
    docentesPlanGlobal = document.getElementById('sel4');
    var numerosDocente = "";
    var correosDocente = "";

    for (var i = 0; i < docentesPlanGlobal.options.length; i++) {
        docenteOption = docentesPlanGlobal.options[i];
        docente = getDocentePorId(docenteOption.value);
        numerosDocente += docente['nombre_usuario'] + ": " +
            docente['numero_movil_usuario'] + " " + docente['numero_fijo_usuario'] + "\n";
        correosDocente += docente['nombre_usuario'] + ": " +
            docente['correo_usuario'] + "\n";
    };

    document.getElementById('telefonos').innerHTML = numerosDocente;
    document.getElementById('correos').innerHTML = correosDocente;
}

function getDocentePorId(id_docente){
    for (var i = 0; i < docentes.length; i++) {
        if(id_docente == docentes[i]['id_usuario']){
            return docentes[i];
        }
    };
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

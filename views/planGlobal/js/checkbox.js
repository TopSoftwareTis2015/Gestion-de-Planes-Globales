//////////////////////////////////
// FUNCIONES PARA CARGA HORARIA //
//////////////////////////////////

function cambiarEstado(estadoActual, idElemento) {
    var inputAsociado = document.getElementById(idElemento);

    if (estadoActual) {
        // habilitamos
        inputAsociado.disabled = false;
        inputAsociado.required = true;
    } else if (!estadoActual) {
        // deshabilitamos
        inputAsociado.disabled = true;
        inputAsociado.required = false;
        inputAsociado.value = "";
    }
}

function cambiarEstadoPorPar(estadoActual, idElemento, idElementoPar, idCheckboxPar){
    cambiarEstado(estadoActual, idElemento);
    cambiarEstado(estadoActual, idElementoPar);

    document.getElementById(idCheckboxPar).checked = estadoActual;
}
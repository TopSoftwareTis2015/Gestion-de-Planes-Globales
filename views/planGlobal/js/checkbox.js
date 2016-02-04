function deshabilitarCampoTexto(value,divname) {
    if(divname == 'hSemestre')
        var valor = document.getElementById("horaSemestre");

    if(divname == 'hTeorica')
        var valor = document.getElementById("horaTeorica");

    if(divname == 'hPractica')
        var valor = document.getElementById("horaPractica");

    if(divname == 'pSemana')
        var valor = document.getElementById("periodoSemana");

    if(divname == 'pTeorico')
        var valor = document.getElementById("periodoTeorico");

    if(divname == 'pPractico')
        var valor = document.getElementById("periodoPractico");



    if (value == true) {
        // habilitamos
        valor.disabled = false;
    } else if (value == false) {
        // deshabilitamos
        valor.disabled = true;
    }
}
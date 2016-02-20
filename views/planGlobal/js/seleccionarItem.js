function ingresarGrupo(){
    gruposTotales = document.getElementById('sel1');
    gruposPlanGlobal = document.getElementById('sel2');

    optionAgregado = intercambiarOption(gruposTotales, gruposPlanGlobal);
    if(optionAgregado!=null){
        if(exiteGrupoDelMismoProfesor())
    }
}

function intercambiarOption(select1, select2) {

    for (var i = 0; i < select1.options.length; i++) {
        option = select1.options[i];
        if(select1.options[i].selected){
            select1.removeChild(option);
            select2.appendChild(option);
            return option;
        }
    };

    return null;
                    
    /*for (i=0; opt=obj.options[i]; i++)
                                    
        if (opt.selected) {
            valor=opt.value; // almacenar value
            txt=obj.options[i].text; // almacenar el texto
                      
            if (obj.options.length==1){
                obj.options[i].text="-";  
                obj.options[i].value="-"; 
            }else{
                obj.focus();
                obj.options[i]=null;      
            }  
                          
            if (obj2.options[0].value=='-'){ // si solo está la opción inicial borrarla
                obj2.options[0]=null;
            }  
                                  
            if(valor!='-'){
                opc = new Option(txt,valor);
                eval(obj2.options[obj2.options.length]=opc);
            }
        }
                               
        if (obj.options.length<=0){
            opc = new Option("-","");
            eval(obj.options[0]=opc);
            return;
        }*/ 
}
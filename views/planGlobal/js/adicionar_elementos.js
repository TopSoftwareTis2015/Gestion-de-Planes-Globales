var tablaElementos = document.getElementById('tabla-elementos');

var txtTitulo = document.getElementById('titulo');
var txtDescripcion = document.getElementById('descripcion');

var btnAgregar = document.getElementById('agregar');

var datos = [];

function btnEditar_Click(event) {

    txtTitulo.value = this.elemento.titulo;
    txtDescripcion.value = this.elemento.descripcion;
}

function btnAgregar_Click(event) {

    var titulo = txtTitulo.value || '';
    var descripcion = txtDescripcion.value || '';

    if (!titulo || !titulo.trim().length) {
        alert('debe ingresar un titulo');
        return;
    }
    
    if (!descripcion || !descripcion.trim().length) {
        alert('debe ingresar una descripcion');
        return;
    }

    txtTitulo.value = '';
    txtDescripcion.value = '';

    txtTitulo.focus();

    // JSON

    var item = {
        titulo: titulo.trim(),
        descripcion: descripcion.trim(),
        fecha: new Date()
    };

    datos.push(item);
    
    //tablaElementos.innerHTML = '';

    while (tablaElementos.childElementCount > 0) {
        tablaElementos.removeChild(tablaElementos.firstElementChild);
    }

    for (var i = 0; i < datos.length; i++) {

        var elemento = datos[i];

        /*
        var fila = '<tr><td>' + elemento.titulo +
                    '</td><td>' + elemento.descripcion +
                    '</td><td>' + elemento.tipo + '</td></tr>';

        tablaElementos.innerHTML += fila;
        */

        var tr = document.createElement('tr');
        var td1 = document.createElement('td');
        var td2 = document.createElement('td');
        var td3 = document.createElement('td');

        tr.appendChild(td1);
        tr.appendChild(td2);
        tr.appendChild(td3);
        tr.appendChild(td4);

        td1.textContent = elemento.titulo;
        td2.textContent = elemento.descripcion;

        tablaElementos.appendChild(tr);

        var nuevoBoton = document.createElement('button');
        nuevoBoton.type = 'button';
        nuevoBoton.textContent = 'Editar';
        
        nuevoBoton.addEventListener('click', btnEditar_Click);
        nuevoBoton.elemento = elemento;
        td3.appendChild(nuevoBoton);

    }

};

btnAgregar.addEventListener('click', btnAgregar_Click);
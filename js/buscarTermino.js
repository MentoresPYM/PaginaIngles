function buscarTermino() {

    document.getElementById('search-bar').addEventListener('input', function() {
        if (this.value.trim() === "") {
            eliminarResaltados();
        }
    });
    document.getElementById('search-bar').addEventListener('keyup', function(event) {
        if (event.key === ' Enter') {
            buscarTermino();
        }
    });
    
    // Obtener el término de búsqueda del input
    var terminoBusqueda = document.getElementById('search-bar').value.toLowerCase().trim();

    // Si el término de búsqueda está vacío, no hacer nada
    if (terminoBusqueda === "") {
      
            // Eliminar resaltados anteriores
    var terminosResaltados = document.querySelectorAll('.resaltado');
    terminosResaltados.forEach(function(resaltado) {
        resaltado.classList.remove('resaltado');
        var parent = resaltado.parentNode;
        parent.replaceChild(document.createTextNode(resaltado.textContent), resaltado);
        parent.normalize();
    });
    return;
    }
            // Eliminar resaltados anteriores
            var terminosResaltados = document.querySelectorAll('.resaltado');
            terminosResaltados.forEach(function(resaltado) {
                resaltado.classList.remove('resaltado');
                var parent = resaltado.parentNode;
                parent.replaceChild(document.createTextNode(resaltado.textContent), resaltado);
                parent.normalize();
            });
    // Obtener todo el contenido de texto del glosario
    var contenido = document.getElementById('glossary');
    
    // Crear una función recursiva para resaltar los términos en los nodos de texto
    function resaltarTexto(node) {
        if (node.nodeType === Node.TEXT_NODE) {
            var texto = node.nodeValue;
            var nuevoHTML = texto.replace(new RegExp(terminoBusqueda, 'gi'), function(matched) {
                return '<span class="resaltado">' + matched + '</span>';
            });

            if (nuevoHTML !== texto) {
                var tempDiv = document.createElement('div');
                tempDiv.innerHTML = nuevoHTML;
                while (tempDiv.firstChild) {
                    node.parentNode.insertBefore(tempDiv.firstChild, node);
                }
                node.parentNode.removeChild(node);
            }
        } else if (node.nodeType === Node.ELEMENT_NODE && node.childNodes) {
            for (var i = 0; i < node.childNodes.length; i++) {
                resaltarTexto(node.childNodes[i]);
            }
        }
    }

    // Llamar a la función recursiva para el nodo de contenido
    resaltarTexto(contenido);

    var primerTerminoResaltado = document.querySelector('.resaltado');
    if (primerTerminoResaltado) {
        primerTerminoResaltado.scrollIntoView({ behavior: 'smooth' });
    }

    function eliminarResaltados() {
        var terminosResaltados = document.querySelectorAll('.resaltado');
        terminosResaltados.forEach(function(resaltado) {
            resaltado.classList.remove('resaltado');
            var parent = resaltado.parentNode;
            parent.replaceChild(document.createTextNode(resaltado.textContent), resaltado);
            parent.normalize();
        });
    }
}
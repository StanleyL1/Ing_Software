function agregarProducto(nombre, precio) {
    // Obtener la lista de órdenes del almacenamiento local
    let ordenes = JSON.parse(localStorage.getItem('ordenes')) || [];

    // Verificar si el producto ya está en la orden
    const productoExistente = ordenes.find(producto => producto.nombre === nombre);

    if (!productoExistente || !productoExistente.realizada) {
        if (productoExistente) {
            Swal.fire({
                icon: 'question',
                title: 'Producto ya en la orden',
                text: `El producto "${nombre}" ya está en tu orden.`,
                showCancelButton: true, // Mostrar botón de cancelar
                confirmButtonText: 'Agregar de nuevo', // Texto del botón de confirmación
                cancelButtonText: 'Cancelar' // Texto del botón de cancelar
            }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire({
                        icon: 'success',
                        title: 'Producto agregado',
                        text: `El producto "${nombre}" ha sido agregado de nuevo a tu orden.`
                    });
                    
                    // Marcar como no realizada
                    productoExistente.realizada = false;

                    // Agregar uno más del mismo producto
                    const nuevoProducto = {
                        nombre: nombre,
                        precio: precio,
                        tiempoInicio: Date.now(),
                        realizada: false
                    };
                    
                    ordenes.push(nuevoProducto);

                    // Guardar la nueva lista de órdenes en localStorage
                    localStorage.setItem('ordenes', JSON.stringify(ordenes));

                    // Actualizar la vista de la orden
                    mostrarOrden();
                }
            });
        } else {
            Swal.fire({
                icon: 'success',
                title: 'Orden realizada',
                text: `Tu orden de "${nombre}" ha sido realizada.`
            });
            
            // Si el producto no está en la orden, agregarlo
            const nuevoProducto = {
                nombre: nombre,
                precio: precio,
                tiempoInicio: Date.now(), // Iniciar el contador de tiempo
                realizada: false // Marcar como no realizada
            };

            ordenes.push(nuevoProducto);

            // Guardar la nueva lista de órdenes en localStorage
            localStorage.setItem('ordenes', JSON.stringify(ordenes));

            // Actualizar la vista de la orden
            mostrarOrden();
        }
    } else {
        Swal.fire({
            icon: 'info',
            title: 'Orden ya realizada',
            text: `El producto "${nombre}" ya ha sido ordenado.`
        });
    }
}

// Función para mostrar la orden
function mostrarOrden() {
    const ordenContainer = document.getElementById('orden');
    ordenContainer.innerHTML = '';

    let ordenes = JSON.parse(localStorage.getItem('ordenes')) || [];
    let total = 0; // Variable para calcular el total de precios

    if (ordenes.length === 0) {
        Swal.fire({
            icon: 'info',
            title: 'Tu orden está vacía',
            text: 'Agrega productos a tu orden desde la página de productos.'
        });
    } else {
        const tabla = document.createElement('table');
        tabla.classList.add('table', 'table-striped');

        tabla.innerHTML = `
            <thead>
                <tr>
                    <th>Producto</th>
                    <th>Tiempo de orden</th>
                    <th>Precio</th>
                    <th>Eliminar</th>
                </tr>
            </thead>
            <tbody>
                ${ordenes.map((producto, index) => {
                    total += producto.precio;
                    
                    return `
                        <tr>
                            <td>${producto.nombre}</td>
                            <td id="tiempo-${index}">0 segundos</td>
                            <td>$${producto.precio.toFixed(2)}</td>

                            <td>
                                <button class="btn btn-danger" onclick="eliminarProducto('${producto.nombre}', ${index})">Eliminar</button>
                            </td>
                        </tr>
                    `;
                }).join('')}
            </tbody>
        `;

        ordenContainer.appendChild(tabla);

        // Mostrar el total
        const totalElement = document.createElement('div');
        totalElement.innerHTML = `<strong>Total:</strong> $${total.toFixed(2)}`;
        totalElement.style.marginLeft = '31%'; // Aplicar un margen izquierdo de 12px
        ordenContainer.appendChild(totalElement);

        // Iniciar y actualizar el contador de tiempo para cada producto
        ordenes.forEach((producto, index) => {
            actualizarTiempo(index);
        });
    }
}

// Función para iniciar y actualizar el contador de tiempo
function actualizarTiempo(index) {
    const tiempoElement = document.getElementById(`tiempo-${index}`);
    const producto = JSON.parse(localStorage.getItem('ordenes'))[index];

    function actualizar() {
        const tiempoTranscurrido = Math.floor((Date.now() - producto.tiempoInicio) / 1000);
        tiempoElement.textContent = `${tiempoTranscurrido} segundos`;
    }

    // Llamamos a actualizar una vez para que el tiempo se muestre de inmediato
    actualizar();

    // Usamos setInterval para actualizar el tiempo cada segundo
    setInterval(actualizar, 1000);
}

// Función para eliminar un producto de la orden
function eliminarProducto(nombre, index) {
    let ordenes = JSON.parse(localStorage.getItem('ordenes')) || [];

    // Eliminar el producto de la orden
    ordenes.splice(index, 1);

    // Guardar la nueva lista de órdenes en localStorage
    localStorage.setItem('ordenes', JSON.stringify(ordenes));

    // Actualizar la vista de la orden
    mostrarOrden();
}

// Mostrar la orden al cargar la página
mostrarOrden();



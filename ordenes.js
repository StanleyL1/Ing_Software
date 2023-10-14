function mostrarOrdenes() {
    const ordenList = document.getElementById("orden-list");
    ordenList.innerHTML = ""; // Limpiamos la lista antes de actualizarla

    // Recuperar las órdenes almacenadas en el almacenamiento local
    const ordenes = JSON.parse(localStorage.getItem("ordenes")) || [];

    // Iterar sobre las órdenes y mostrarlas en la lista
    ordenes.forEach((orden, index) => {
        const listItem = document.createElement("li");
        listItem.classList.add("list-group-item", "d-flex", "justify-content-between", "align-items-center");
        const tiempoActual = new Date().getTime();
        const tiempoEntrada = new Date(orden.tiempo);
        const tiempoTranscurrido = Math.floor((tiempoActual - tiempoEntrada) / 1000);
        const tiempoRestante = Math.max(0, 10 - tiempoTranscurrido);
        const tiempoMensaje = tiempoRestante > 0 ? `Entró hace ${tiempoTranscurrido} segundos. Estará lista en ${tiempoRestante} segundos` : "Tu orden está lista";

        const tiempoTranscurridoReloj = obtenerReloj(tiempoTranscurrido);
        const tiempoRestanteReloj = obtenerReloj(tiempoRestante);

        listItem.innerHTML = `
            <div>
                <h5 class="mb-1">Producto:</h5>
                <p>${orden.product}</p>
                <h5 class="mb-1">Precio:</h5>
                <p>$${orden.price}</p>
                <h5 class="mb-1">Tiempo de orden:</h5>
                <p>Tiempo transcurrido: ${tiempoTranscurridoReloj}</p>
                <p>Tiempo restante: ${tiempoRestanteReloj}</p>
            </div>
            <div>
                <h5 class="mb-1">Cantidad:</h5>
                <p>${orden.cantidad}</p>
                <button class="btn btn-primary" onclick="agregarCantidad(${index})">+</button>
                <button class="btn btn-danger" onclick="restarCantidad(${index})">-</button>
                <h5 class="mb-1">Total:</h5>
                <p>$${orden.price * orden.cantidad}</p>
<button class="btn btn-danger" onclick="eliminarProducto(0)">Eliminar</button>
            </div>`;

        ordenList.appendChild(listItem);
    });
}

// Función para obtener una representación en reloj del tiempo (HH:MM:SS)
function obtenerReloj(tiempoSegundos) {
    const horas = Math.floor(tiempoSegundos / 3600);
    const minutos = Math.floor((tiempoSegundos % 3600) / 60);
    const segundos = tiempoSegundos % 60;
    return `${rellenarCeros(horas)}:${rellenarCeros(minutos)}:${rellenarCeros(segundos)}`;
}

// Función para rellenar con ceros los valores de tiempo
function rellenarCeros(valor) {
    return valor < 10 ? `0${valor}` : valor;
}
function agregarCantidad(index) {
    const ordenes = JSON.parse(localStorage.getItem("ordenes")) || [];
    
    if (index >= 0 && index < ordenes.length) {
        // Aumenta la cantidad del producto en la posición 'index'
        ordenes[index].cantidad++;

        // Guarda la lista de órdenes actualizada en el almacenamiento local
        localStorage.setItem("ordenes", JSON.stringify(ordenes));

        // Muestra las órdenes actualizadas
        mostrarOrdenes();
    }
}

// Función para eliminar un producto de las órdenes
function eliminarProducto(index) {
    const ordenes = JSON.parse(localStorage.getItem("ordenes")) || [];
    ordenes.splice(index, 1);

    // Guardar la lista de órdenes actualizada en el almacenamiento local
    localStorage.setItem("ordenes", JSON.stringify(ordenes));

    // Mostrar las órdenes actualizadas
    mostrarOrdenes();
}

// Función para agregar más cantidad a una orden
function agregarProducto(productName, price) {
    // Obtener la lista de órdenes existente o crear una nueva si no existe
    let ordenes = JSON.parse(localStorage.getItem("ordenes")) || [];

    // Agregar el nuevo producto a la lista de órdenes
    const orden = {
        product: productName,
        price: price,
        tiempo: new Date(), // Usar new Date() en lugar de new Date().toString()
        cantidad: 1, // Inicializar la cantidad en 1
    };

    ordenes.push(orden);

    // Guardar la lista de órdenes en el almacenamiento local
    localStorage.setItem("ordenes", JSON.stringify(ordenes));

    // Redirigir a la página de órdenes
}

// Función para restar cantidad a una orden
function restarCantidad(index) {
    const ordenes = JSON.parse(localStorage.getItem("ordenes")) || [];
    if (ordenes[index].cantidad > 0) {
        ordenes[index].cantidad--;
        // Guardar la lista de órdenes actualizada en el almacenamiento local
        localStorage.setItem("ordenes", JSON.stringify(ordenes));
    }

    // Mostrar las órdenes actualizadas
    mostrarOrdenes();
}

// Mostrar las órdenes cuando se carga la página
mostrarOrdenes();

// Actualizar el tiempo cada segundo
setInterval(mostrarOrdenes, 1000);
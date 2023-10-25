let alertaMostrada = false; // Variable para rastrear si la alerta ya se mostró
function mostrarOrdenes() {
    const ordenList = document.getElementById("orden-list");
    ordenList.innerHTML = "";

    // Obtener el nombre de usuario desde la variable JavaScript generada en PHP
    const nombreUsuario = "<?php echo isset($usuario) ? $usuario : ''; ?>";

    // Crear un párrafo para mostrar el cliente y el nombre de usuario
    const clienteInfo = document.createElement("p");
    clienteInfo.innerText = `Cliente: ${nombreUsuario}`;
    ordenList.appendChild(clienteInfo);
    ordenes.forEach((orden, index) => {
        const listItem = document.createElement("li");
        listItem.classList.add("list-group-item", "d-flex", "justify-content-between", "align-items-center");
        const tiempoActual = new Date().getTime();
        const tiempoEntrada = new Date(orden.tiempo);
        const tiempoTranscurrido = Math.floor((tiempoActual - tiempoEntrada) / 1000);
        const tiempoRestante = Math.max(0, 60 - tiempoTranscurrido); // 600 segundos (10 minutos) el contador funciona con segundos 60s es un minuto
        const tiempoMensaje = tiempoRestante > 0 ? `Entró hace ${tiempoTranscurrido} segundos. Estará lista en ${tiempoRestante} segundos` : "Orden Lista";

        const tiempoTranscurridoReloj = obtenerReloj(tiempoTranscurrido);
        const tiempoRestanteReloj = obtenerReloj(tiempoRestante);

        listItem.innerHTML = `
    <div>
        <h5 class="mb-1">Cliente:</h5>
        <p>${nombreUsuario}</p>
    </div>
    <div>
        <h5 class="mb-1">Producto:</h5>
        <p>${orden.product}</p>
        <h5 class="mb-1">Precio:</h5>
        <p>$${orden.price}</p>
        <h5 class="mb-1">Tiempo de orden:</h5>
        <p>Tiempo restante: ${tiempoRestanteReloj}</p>
    </div>
    <div>
        <h5 class="mb-1">Cantidad:</h5>
        <p>${orden.cantidad}</p>
        <button class="btn btn-primary" onclick="agregarCantidad(${index})">+</button>
        <button class="btn btn-danger" onclick="restarCantidad(${index})">-</button>
        <h5 class="mb-1">Total:</h5>
        <p>$${orden.price * orden.cantidad}</p>
        <button class="btn btn-danger" onclick="eliminarProducto(${index})">Eliminar</button>
    </div>`;


        ordenList.appendChild(listItem);

       
        if (tiempoRestante === 0 && !alertaMostrada) {
            alertaMostrada = true; 
            Swal.fire('Orden Lista', 'Tu orden está lista para ser recogida.', 'success');
        }
    });
}


mostrarOrdenes();

setInterval(mostrarOrdenes, 1000);

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
        // Duplica la cantidad del producto en la posición 'index'
        ordenes[index].cantidad += 1;

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

}

function restarCantidad(index) {
    const ordenes = JSON.parse(localStorage.getItem("ordenes")) || [];
    if (index >= 0 && index < ordenes.length && ordenes[index].cantidad > 1) {
        ordenes[index].cantidad--;
        localStorage.setItem("ordenes", JSON.stringify(ordenes));
    }

    mostrarOrdenes();
}


mostrarOrdenes();

setInterval(mostrarOrdenes, 1000);
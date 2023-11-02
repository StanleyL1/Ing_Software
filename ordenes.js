

 

let alertaMostrada = false; // Variable para rastrear si la alerta ya se mostró

// Definir la variable usuario (debes asignar un valor)
const usuario = "EjemploUsuario";

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
        const tiempoRestante = Math.max(0, 600 - tiempoTranscurrido); // 600 segundos (10 minutos)

        const tiempoRestanteReloj = obtenerReloj(tiempoRestante);

        listItem.innerHTML = `
            <div>
                <h5 class="mb-1">Cliente:</h5>
                <p>${nombre_completo}</p>
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
                <button class "btn btn-danger" onclick="restarCantidad(${index})">-</button>
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

function agregarProducto(productName, price) {
    // Obtener la lista de órdenes existente o crear una nueva si no existe
    let ordenes = JSON.parse(localStorage.getItem("ordenes")) || [];

    // Agregar el nuevo producto a la lista de órdenes
    const orden = {
        product: productName,
        price: price,
        tiempo: new Date(),
        cantidad: 1, // Inicializar la cantidad en 1
    };

    ordenes.push(orden);

    // Guardar la lista de órdenes en el almacenamiento local
    localStorage.setItem("ordenes", JSON.stringify(ordenes));

    mostrarOrdenes(); // Actualizar la lista después de agregar un producto
}

function agregarCantidad(index) {
    const ordenes = JSON.parse(localStorage.getItem("ordenes")) || [];

    if (index >= 0 && index < ordenes.length && ordenes[index].cantidad > 1) {
        const producto = ordenes[index];
        const confirmar = confirm(`¿Deseas sumar una unidad del producto ${producto.product}?`);

        if (confirmar) {
            // Reducir la cantidad del producto en la posición 'index'
            producto.cantidad += 1;

        // Guardar la lista de órdenes actualizada en el almacenamiento local
        localStorage.setItem("ordenes", JSON.stringify(ordenes));

        mostrarOrdenes(); // Actualizar la lista después de cambiar la cantidad
    }
}
}

function restarCantidad(index) {
    const ordenes = JSON.parse(localStorage.getItem("ordenes")) || [];

    if (index >= 0 && index < ordenes.length && ordenes[index].cantidad > 1) {
        const producto = ordenes[index];
        const confirmar = confirm(`¿Deseas restar una unidad del producto ${producto.product}?`);

        if (confirmar) {
            // Reducir la cantidad del producto en la posición 'index'
            producto.cantidad -= 1;

            // Guardar la lista de órdenes actualizada en el almacenamiento local
            localStorage.setItem("ordenes", JSON.stringify(ordenes));

            mostrarOrdenes(); // Actualizar la lista después de cambiar la cantidad
        }
    }
}


function eliminarProducto(index) {
    const ordenes = JSON.parse(localStorage.getItem("ordenes")) || [];

    if (index >= 0 && index < ordenes.length) {
        ordenes.splice(index, 1);

        // Guardar la lista de órdenes actualizada en el almacenamiento local
        localStorage.setItem("ordenes", JSON.stringify(ordenes));

        mostrarOrdenes(); // Actualizar la lista después de eliminar un producto
    }

}

function obtenerReloj(tiempoSegundos) {
    const horas = Math.floor(tiempoSegundos / 3600);
    const minutos = Math.floor((tiempoSegundos % 3600) / 60);
    const segundos = tiempoSegundos % 60;
    return `${rellenarCeros(horas)}:${rellenarCeros(minutos)}:${rellenarCeros(segundos)}`;
}

function rellenarCeros(valor) {
    return valor < 10 ? `0${valor}` : valor;
}

// Llama a mostrarOrdenes para cargar la lista de órdenes al inicio
mostrarOrdenes();

// Configura un intervalo para actualizar la lista de órdenes cada segundo
setInterval(mostrarOrdenes, 1000);
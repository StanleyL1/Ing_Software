let alertaMostrada = false;

const nombre_completo = "EjemploUsuario";

function mostrarOrdenes() {
    const ordenList = document.getElementById("orden-list");
    ordenList.innerHTML = "";

    const ordenes = JSON.parse(localStorage.getItem("ordenes")) || [];

    ordenes.forEach((orden, index) => {
        const listItem = document.createElement("li");
        listItem.classList.add("list-group-item", "d-flex", "justify-content-between", "align-items-center");
        const tiempoActual = new Date().getTime();
        const tiempoEntrada = new Date(orden.tiempo);
        const tiempoTranscurrido = Math.floor((tiempoActual - tiempoEntrada) / 1000);
        const tiempoRestante = Math.max(0, 25 - tiempoTranscurrido);

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
            <button class="btn btn-danger" onclick="restarCantidad(${index})">-</button>
            <h5 class="mb-1">Total:</h5>
            <p>$${orden.price * orden.cantidad}</p>
        </div>
        `;

        ordenList.appendChild(listItem);



        if (tiempoRestante === 0 && !alertaMostrada) {
            alertaMostrada = true;
            Swal.fire('Orden Lista', 'Tu orden está lista para ser recogida.', 'success');
        }
        
    });
}


function agregarProducto(productName, price) {
    let ordenes = JSON.parse(localStorage.getItem("ordenes")) || [];

    const orden = {
        product: productName,
        price: price,
        tiempo: new Date(),
        cantidad: 1, 
    };

    ordenes.push(orden);

    localStorage.setItem("ordenes", JSON.stringify(ordenes));

    mostrarOrdenes(); 
}

function agregarCantidad(index) {
    const ordenes = JSON.parse(localStorage.getItem("ordenes")) || [];

    if (index >= 0 && index < ordenes.length) {
        const producto = ordenes[index];

        // Ensure the quantity doesn't exceed 3
        if (producto.cantidad < 5) {
            producto.cantidad += 1;

            localStorage.setItem("ordenes", JSON.stringify(ordenes));

            mostrarOrdenes();
        }
    }
}


function restarCantidad(index) {
    const ordenes = JSON.parse(localStorage.getItem("ordenes")) || [];

    if (index >= 0 && index < ordenes.length) {
        const producto = ordenes[index];

        // Ensure the quantity doesn't go below 1
        if (producto.cantidad > 1) {
            producto.cantidad -= 1;

            localStorage.setItem("ordenes", JSON.stringify(ordenes));

            mostrarOrdenes();
        }
    }
}
function eliminarProducto(index, buttonElement) {
    const ordenes = JSON.parse(localStorage.getItem("ordenes")) || [];

    if (index >= 0 && index < ordenes.length) {
        ordenes.splice(index, 1);

        localStorage.setItem("ordenes", JSON.stringify(ordenes));

        // Disable the button and hide it after 5 seconds
        setTimeout(() => {
            buttonElement.style.display = "none";
            buttonElement.disabled = true;
        }, 5000);
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

mostrarOrdenes();

setInterval(mostrarOrdenes, 500);
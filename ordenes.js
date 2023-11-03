
let alertaMostrada = false; 

const usuario = "EjemploUsuario";
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
        <button class =  "btn btn-primary" onclick="agregarCantidad(${index})">+</button>
        <button class  = "btn btn-danger" onclick="restarCantidad(${index})">-</button>
        <h5 class="mb-1">Total:</h5>
        <p>$${orden.price * orden.cantidad}</p>           
        <button id="eliminar-button-${index}" class="btn btn-danger" onclick="eliminarProducto(${index}, this)">Eliminar</button>
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

    if (index >= 0 && index < ordenes.length && ordenes[index].cantidad > 1) {
        const producto = ordenes[index];
        const confirmar = confirm(`¿Deseas sumar una unidad del producto ${producto.product}?`);

        if (confirmar) {
            producto.cantidad += 1;

        localStorage.setItem("ordenes", JSON.stringify(ordenes));

        mostrarOrdenes(); 
    }
}
}

function restarCantidad(index) {
    const ordenes = JSON.parse(localStorage.getItem("ordenes")) || [];

    if (index >= 0 && index < ordenes.length && ordenes[index].cantidad > 1) {
        const producto = ordenes[index];
        const confirmar = confirm(`¿Deseas restar una unidad del producto ${producto.product}?`);

        if (confirmar) {
            producto.cantidad -= 1;

            localStorage.setItem("ordenes", JSON.stringify(ordenes));

            mostrarOrdenes(); 
        }
    }
}function eliminarProducto(index, buttonElement) {
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

setInterval(mostrarOrdenes, 1000);
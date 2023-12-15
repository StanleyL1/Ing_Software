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
            <button class="btn btn-danger" onclick="eliminarProducto(${index})">Eliminar</button>
    
            <h5 class="mb-1">Total:</h5>
            <p>$${orden.price * orden.cantidad}</p>
    
            <button class="btn btn-success mt-2" onclick="pagar()">Pagar Ahora</button>
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
function pagar(precioTotal) {
    const ordenes = JSON.parse(localStorage.getItem("ordenes")) || [];

    Swal.fire({
        title: '¿Cómo quieres pagar?',
        icon: 'question',
        showCancelButton: true,
        confirmButtonText: 'Efectivo',
        cancelButtonText: 'Tarjeta'
    }).then((result) => {
        if (result.isConfirmed) {
            Swal.fire({
                title: 'Pagarás en Efectivo',
                text: `El total a pagar es $${precioTotal}`,
                icon: 'info',
                confirmButtonText: 'Ok'
            });
            // Aquí podrías agregar la lógica para pagar en efectivo y mostrar el monto al usuario
        } else if (result.dismiss === Swal.DismissReason.cancel) {
            Swal.fire({
                title: 'Pago con Tarjeta',
                html: '<input type="text" id="numeroTarjeta" placeholder="Ingresa tu número de tarjeta" class="swal2-input">',
                icon: 'info',
                confirmButtonText: 'Ok',
                preConfirm: () => {
                    const numeroTarjeta = Swal.getPopup().querySelector('#numeroTarjeta').value;
                    // Aquí puedes manejar la lógica relacionada con el número de tarjeta ingresado
                    return numeroTarjeta;
                }
            }).then((result) => {
                if (result.isConfirmed) {
                    const tarjetaIngresada = result.value;
                    // Puedes hacer algo con el número de tarjeta ingresado
                    Swal.fire('Tarjeta ingresada', `Número de tarjeta: ${tarjetaIngresada}`, 'success');
                }
            });
            // Aquí podrías agregar la lógica para pagar con tarjeta
        }
    });
}
    // Llamada a la función pagar con el precio total del producto
    

setInterval(mostrarOrdenes, 5000);
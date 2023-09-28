document.addEventListener("DOMContentLoaded", function () {
    // Obtener el valor de orderCount desde localStorage
    let orderCount = localStorage.getItem("orderCount");
    orderCount = orderCount ? parseInt(orderCount) : 0;

    const orderLog = document.getElementById("order-log");
    const orderCountDisplay = document.getElementById("order-count");

    document.getElementById("place-order").addEventListener("click", function () {
        const customerName = prompt("Por favor, ingrese su nombre:");
        if (customerName) {
            orderCount++;
            orderCountDisplay.textContent = `Órdenes recibidas: ${orderCount}`;
            const newOrder = document.createElement("li");
            newOrder.textContent = `Orden ${orderCount} - Cliente: ${customerName}`;
            orderLog.querySelector("ul").appendChild(newOrder);

            // Guardar el nuevo valor de orderCount en localStorage
            localStorage.setItem("orderCount", orderCount);
        }
    });

    // Actualizar la visualización inicial de orderCount
    orderCountDisplay.textContent = `Órdenes recibidas: ${orderCount}`;
});

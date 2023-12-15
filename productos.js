function ordenarProducto(productName, price) {
    Swal.fire({
        title: `Quieres ordenar este producto?`,
        icon: 'question',
        showCancelButton: true,
        confirmButtonText: 'Sí',
        cancelButtonText: 'No',
        timer: 15000, // 15 segundos
        timerProgressBar: true, // Muestra una barra de progreso del temporizador
    }).then((result) => {
        if (result.isConfirmed) {
            Swal.fire('Pedido realizado','', 'success');
        }
    });
}

const ordenarButtons = document.querySelectorAll(".btn.btn-primary");
ordenarButtons.forEach((button) => {
    const productName = button.getAttribute("data-product");
    const price = parseFloat(button.getAttribute("data-price"));
    button.addEventListener("click", function () {
        ordenarProducto(productName, price);
    });
});document.addEventListener("click", function(event) {
    if (event.target.classList.contains("btn-primary")) {
        const productName = event.target.getAttribute("data-product");
        const price = parseFloat(event.target.getAttribute("data-price"));
        ordenarProducto(productName, price);
    }
});

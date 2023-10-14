function ordenarProducto(productName, price) {
    Swal.fire({
        title: `¿Quieres realizar un pedido?`,
        icon: 'question',
        showCancelButton: true,
        confirmButtonText: 'Sí',
        cancelButtonText: 'No',
        timer: 15000, // 15 segundos
        timerProgressBar: true, // Muestra una barra de progreso del temporizador
    }).then((result) => {
        if (result.isConfirmed) {
            Swal.fire('Pedido realizado', 'Se ha realizado con éxito.', 'success');
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
});

// Función para agregar un producto a la orden
function agregarProducto(nombreProducto, precio) {
    const producto = {
        nombre: nombreProducto,
        precio: precio,
        tiempoOrden: 0
    };

    // Agregar el producto a la orden
    let ordenes = JSON.parse(localStorage.getItem('ordenes')) || [];
    ordenes.push(producto);
    localStorage.setItem('ordenes', JSON.stringify(ordenes));

//setTimeout(function() {
  //  window.location.href = 'ordenes.html';
//}, 5000); 

Swal.fire({
    icon: 'success',
    title: '¡Tu producto ha sido ordenado!',
    //text: 'Gracias por tu pedido. Serás redirigido a la página de órdenes en breve.',
   // timer: 2000, // 2000 milisegundos (2 segundos)
    //timerProgressBar: true,
    showConfirmButton: true, // Mostrar un botón "OK"
    confirmButtonText: 'OK' // Personalizar el texto del botón
}).then(function() {
    //window.location.href = 'ordenes.html';
});


}

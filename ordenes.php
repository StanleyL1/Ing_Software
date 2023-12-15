<?php include 'header.php'; ?>

<div class="container mt-5">
    <h1>Órdenes</h1>
    <ul id="orden-list" class="list-group mt-3">
        <!-- Example of an order card with a delete button -->
        <li class="list-group-item d-flex justify-content-between align-items-center">
            <!-- Solo el botón "Eliminar" y la orden -->
            <div>
                <!-- Detalles de la orden -->
                <h5 class="mb-1">Orden:</h5>
                <!-- Aquí se muestran los detalles de la orden -->
                <!-- Por ejemplo, Producto, Precio, etc. -->
            </div>
            <div>
                <!-- Botón "Eliminar" para esta orden -->
                <button class="btn btn-danger delete-button">Eliminar</button>
            </div>
        </li>
    </ul>
</div>






<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://kit.fontawesome.com/81581fb069.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>
<script src="ordenes.js"></script>
<script src="productos.js"></script>

<script>
    // Agrega un controlador de eventos para el botón "Eliminar"
    $('.delete-button').on('click', function () {
        // Encuentra el elemento padre li y elimínalo
        $(this).closest('li').remove();
    });
</script>
</html>
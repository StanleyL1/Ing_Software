<?php include 'header.php'; ?>

<div class="container mt-5">
    <h1>Órdenes</h1>
    <ul id="orden-list" class="list-group mt-3">
        <!-- Example of an order card with a delete button -->
        <li class="list-group-item d-flex justify-content-between align-items-center">
            <div>
                <h5 class="mb-1">Cliente:</h5>
                <p><?php echo htmlspecialchars($_SESSION['nombre_completo']); ?></p>
                <!-- Other order details -->
            </div>
            <div>
                <h5 class="mb-1">Eliminar:</h5>
                <p>1</p>
                <!-- Add a delete button for this card -->
                <button class="btn btn-danger delete-button">Eliminar</button>
                <!-- Other order details -->
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
    // Add a click event handler for the delete button
    $('.delete-button').on('click', function () {
        // Find the parent list item and remove it
        $(this).closest('li').remove();
    });
</script>
</html>

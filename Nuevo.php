<?php include 'header.php' ?>
<!DOCTYPE html>
<html>
<head>
    <!-- Incluye SweetAlert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>

<!-- Contenido de la página -->

<script>
// Función para mostrar la alerta cuando la página se carga
document.addEventListener("DOMContentLoaded", function () {
    Swal.fire({
        title: "Proximamente",
        text: "¡Gracias por visitar nuestra página!",
        icon: "info",
        confirmButtonText: "OK"
    });
});
</script>

</body>
</html>

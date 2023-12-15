<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include 'PhP/conexion_be.php'; // Asegúrate de que la ruta sea la correcta

    $nombre_completo = $_POST['nombre_completo'];
    $usuario = $_POST['usuario'];
    $numero_tarjeta = $_POST['numero_tarjeta'];

    // Verificar si el número de tarjeta ya está asignado
    $sql_check_tarjeta = "SELECT id FROM tarjetas WHERE numero_tarjeta = ?";
    $stmt_check = mysqli_prepare($conexion, $sql_check_tarjeta);
    mysqli_stmt_bind_param($stmt_check, "s", $numero_tarjeta);
    mysqli_stmt_execute($stmt_check);
    mysqli_stmt_store_result($stmt_check);

    if (mysqli_stmt_num_rows($stmt_check) > 0) {
        // Si ya existe un registro con ese número de tarjeta
        echo "El número de tarjeta ya está asignado";
    } else {
        // Preparar la consulta para insertar los datos en la tabla tarjetas
        $sql_insert_tarjeta = "INSERT INTO tarjetas (numero_tarjeta, nombre_completo, usuario) VALUES (?, ?, ?)";
        $stmt_insert = mysqli_prepare($conexion, $sql_insert_tarjeta);

        mysqli_stmt_bind_param($stmt_insert, "sss", $numero_tarjeta, $nombre_completo, $usuario);

        if (mysqli_stmt_execute($stmt_insert)) {
            // Éxito: redireccionar a la página asignar_tarjeta.php
            header("Location: asignar_tarjeta.php");
            exit();
        } else {
            echo "Error en la asignación de la tarjeta";
        }

        mysqli_stmt_close($stmt_insert);
    }

    mysqli_stmt_close($stmt_check);
    mysqli_close($conexion);
}
?>

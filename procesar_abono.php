<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include 'PhP/conexion_be.php'; // Asegúrate de que la ruta sea la correcta

    $usuario = $_POST['usuario'];
    $monto = $_POST['monto'];

    // Verificar si el usuario existe
    $sql_check_usuario = "SELECT id FROM tarjetas WHERE usuario = ?";
    $stmt_check = mysqli_prepare($conexion, $sql_check_usuario);
    mysqli_stmt_bind_param($stmt_check, "s", $usuario);
    mysqli_stmt_execute($stmt_check);
    mysqli_stmt_store_result($stmt_check);

    if (mysqli_stmt_num_rows($stmt_check) > 0) {
        // Actualizar el saldo del usuario
        $sql_update_saldo = "UPDATE tarjetas SET saldo = saldo + ? WHERE usuario = ?";
        $stmt_update = mysqli_prepare($conexion, $sql_update_saldo);
        mysqli_stmt_bind_param($stmt_update, "ds", $monto, $usuario);
        
        if (mysqli_stmt_execute($stmt_update)) {
            echo "Abono realizado con éxito";
        } else {
            echo "Error al realizar el abono";
        }
        
        mysqli_stmt_close($stmt_update);
    } else {
        echo "El usuario no existe o no tiene tarjeta asociada";
    }

    mysqli_stmt_close($stmt_check);
    mysqli_close($conexion);
}
?>

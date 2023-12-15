<?php include 'header.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Asignar Usuario a Tarjeta</title>
    <style>
        /* Estilos adicionales si los necesitas */
    </style>
    <!-- Agregar SweetAlert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
</head>

<body>
    <div class="container mt-4">
        <div class="card text-center">
            <div class="card-header">
                Asignar Usuario a Tarjeta
            </div>
            <div class="card-body">
                <form action="procesar_asignacion.php" method="POST">
                    <div class="form-group">
                        <label for="nombre_completo">Nombre Completo:</label>
                        <select class="form-control" id="nombre_completo" name="nombre_completo" required>
                            <!-- Generar las opciones de nombre completo desde la base de datos -->
                            <?php
                            include 'PhP/conexion_be.php'; // Asegúrate de que la ruta sea la correcta

                            $query = "SELECT CONCAT(nombre_completo, ' ', Apellidos) AS nombre_completo FROM usuarios";
                            $result = mysqli_query($conexion, $query);

                            while ($row = mysqli_fetch_assoc($result)) {
                                echo "<option value='" . $row['nombre_completo'] . "'>" . $row['nombre_completo'] . "</option>";
                            }

                            mysqli_close($conexion);
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="usuario">Usuario:</label>
                        <select class="form-control" id="usuario" name="usuario" required>
                            <!-- Generar las opciones de usuario desde la base de datos -->
                            <?php
                            include 'PhP/conexion_be.php'; // Asegúrate de que la ruta sea la correcta

                            $query_usuario = "SELECT usuario FROM usuarios";
                            $result_usuario = mysqli_query($conexion, $query_usuario);

                            while ($row_usuario = mysqli_fetch_assoc($result_usuario)) {
                                echo "<option value='" . $row_usuario['usuario'] . "'>" . $row_usuario['usuario'] . "</option>";
                            }

                            mysqli_close($conexion);
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="numero_tarjeta">Número de Tarjeta (máx. 16 dígitos):</label>
                        <input type="text" class="form-control" id="numero_tarjeta" name="numero_tarjeta" maxlength="16" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Asignar</button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>

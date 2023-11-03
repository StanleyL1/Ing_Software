<?php
include 'header.php';

include("PhP/conexion_be.php");

$tableName = "critica_chalet";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre_completo = $_SESSION['nombre_completo'];
    $critica = $_POST["critica"];

    $sql = "INSERT INTO $tableName (nombre, critica) VALUES ('$nombre_completo', '$critica')";
    if (mysqli_query($conexion, $sql)) {
       
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Chalet UGB</title>
</head>
<style>
        .review-box {
            background-color: #f2f2f2;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ddd;
        }
    </style>
<body>
    <div class="container">
        <h1 class="mt-5">Apartado de sugerencias  para Chalet UGB</h1>
        <h2>Críticas:</h2>

        <form method="POST">
            <div class="form-group">
                <textarea name="critica" class="form-control" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Agregar Crítica</button>
        </form><br><br>
        <?php
        $sql = "SELECT nombre, critica, fecha_creacion FROM $tableName";
        $resultado = mysqli_query($conexion, $sql);

        if (mysqli_num_rows($resultado) > 0) {
            while ($fila = mysqli_fetch_assoc($resultado)) {
                echo "<div class='review-box'>";
                echo "<p><strong>{$fila['nombre']}:</strong> {$fila['critica']} ({$fila['fecha_creacion']})</p>";
                echo "</div>";
            }
        } else {
            echo "No hay críticas disponibles para esta página.";
        }
        ?>
    </div>
</body>
</html>

<?php
include 'header.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include("PhP/conexion_be.php"); 

    $nombre_completo = $_SESSION['nombre_completo'];
    $critica = $_POST["critica"];

    $sql = "INSERT INTO criticas (nombre, critica) VALUES ('$nombre_completo', '$critica')";
    
    if (mysqli_query($conexion, $sql)) {
      
    }

    mysqli_close($conexion);
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Kiosko</title>
    <style>
        .review-box {
            background-color: #f2f2f2;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ddd;
        }
    </style>
</head>
<body>
    <div class="container">
    <h1 class="mt-5">Apartado de sugerencias  para Kiosko</h1>
        <h2>Críticas:</h2>

        <form method="POST">
            <div class="form-group">
                <textarea name="critica" class="form-control" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Agregar Crítica</button>
        </form>
        <br><br><br>

        <?php
        include("PhP/conexion_be.php"); 

        $sql = "SELECT nombre, critica, fecha_creacion FROM criticas";
        $resultado = mysqli_query($conexion, $sql);

        if (mysqli_num_rows($resultado) > 0) {
            while ($fila = mysqli_fetch_assoc($resultado)) {
                echo "<div class='review-box'>";
                echo "<p><strong>{$fila['nombre']}:</strong> {$fila['critica']} ({$fila['fecha_creacion']})</p>";
                echo "</div>";
            }
        } 


        mysqli_close($conexion);
        ?>
    </div>
</body>
</html>

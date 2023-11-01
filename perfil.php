<?php

include 'header.php';
include 'PhP/conexion_be.php';

?>

<body>

<div class="container">
    <h1>Editar Perfil</h1>
    <form method="post" action="guardar_perfil.php">
        <div class="mb-3">
            <label for="nombreCompleto" class="form-label">Nombre Completo</label>
            <input type="text" class="form-control" id="nombre_completo" name="nombre_completo" value="<?php echo $nombre_completo; ?>">
        </div>
        <div class="mb-3">
            <label for="usuario" class="form-label">Usuario</label>
            <input type="text" class="form-control" id="usuario" name="usuario" value="<?php echo $usuario; ?>">
        </div>
        <div class="mb-3">
            <label for="correo" class="form-label">Correo</label>
            <input type="email" class="form-control" id="correo" name="correo" value="<?php echo $correo; ?>">
        </div>
        <button type="submit" class="btn btn-primary">Guardar Cambios</button>
    </form>
</div>
<?php
$usuario_id = 1; // Debes obtener esto de alguna manera, como desde una sesión de usuario
$sql = "SELECT nombre_completo, usuario, correo FROM usuarios WHERE id = $usuario_id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $nombre_completo = $row["nombre_completo"];
    $usuario = $row["usuario"];
    $correo = $row["correo"];
} else {
    echo "No se encontraron datos para el usuario.";
}

$conn->close();
?>


</body>
</html>

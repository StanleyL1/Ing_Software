<?php 
include 'conexion_be.php';

$nombre_completo = $_POST['nombre_completo'];
$correo = $_POST['correo'];
$usuario = $_POST['usuario'];
$contraseña = $_POST['contraseña'];
$contraseña = password_hash($_POST['contraseña'], PASSWORD_DEFAULT);

// Validación del formato del correo electrónico
if (!filter_var($correo, FILTER_VALIDATE_EMAIL) || !preg_match('/@ugb.edu.sv$/', $correo)) {
    echo '
    <script>
    alert("Por favor, ingresa un correo estudiantil válido");
    window.location = "../login.php";
    </script>';
    exit();
}

$Verificar_correo = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo = '$correo'  ");
if (mysqli_num_rows($Verificar_correo) > 0) {
    echo '
    <script>
    alert("Este correo ya está en uso");
    window.location = "../login.php";
    </script>';
    exit();
}

$Verificar_usuario = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario = '$usuario' ");
if (mysqli_num_rows($Verificar_usuario) > 0) {
    echo '
    <script>
    alert("Este usuario ya existe");
    window.location = "../login.php";
    </script>';
    exit();
}

$query = "INSERT INTO usuarios (nombre_completo, correo, usuario, contraseña) 
           VALUES ('$nombre_completo', '$correo', '$usuario', '$contraseña')";

$ejecutar = mysqli_query($conexion, $query);

if ($ejecutar) {
    echo '
    <script>
    alert("Te has registrado exitosamente");
    window.location = "../login.php";
    </script>';
} else {
    echo '
    <script>
    alert("Oh no, parece que algo falló");
    window.location = "../login.php";
    </script>';
}

mysqli_close($conexion);
?>

<?php 
include 'conexion_be.php';

$nombre_completo = $_POST['nombre_completo'];
$Apellidos = $_POST['Apellidos'];
$correo = $_POST['correo'];
$usuario = $_POST['usuario'];
$contraseña = $_POST['contraseña'];
$contraseña = password_hash($_POST['contraseña'], PASSWORD_DEFAULT);

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

$query = "INSERT INTO usuarios (nombre_completo, Apellidos, correo, usuario, contraseña) 
           VALUES ('$nombre_completo','$Apellidos', '$correo', '$usuario', '$contraseña')";

$ejecutar = mysqli_query($conexion, $query);
// Después de la inserción en la tabla usuarios
if ($ejecutar) {
    // Obtener el ID del usuario recién insertado
    $id_usuario_insertado = mysqli_insert_id($conexion);

    // Obtener el nombre completo del usuario registrado
    $nombre_completo_usuario = $nombre_completo . ' ' . $Apellidos;

    // Insertar en la tabla tarjetas
    $query_tarjetas = "INSERT INTO tarjetas (nombre_completo, numero_tarjeta, usuario, saldo) 
                       VALUES ('$nombre_completo_usuario', 'numerodeTarjeta', '$usuario', 0.00)";

    $ejecutar_tarjetas = mysqli_query($conexion, $query_tarjetas);

    if ($ejecutar_tarjetas) {
        echo '
        <script>
        alert("Te has registrado exitosamente");
        window.location = "../login.php";
        </script>';
    } else {
        echo '
        <script>
        alert("Registro exitoso, pero falló la creación de la tarjeta");
        window.location = "../login.php";
        </script>';
    }
} else {
    echo '
    <script>
    alert("Oh no, parece que algo falló");
    window.location = "../login.php";
    </script>';
}

?>

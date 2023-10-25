<?php 

include("conexion_be.php");

$usuario = $_POST['usuario'];
$contraseña = $_POST['contraseña'];



$usuario = mysqli_real_escape_string($conexion, $usuario);

$resultado = mysqli_query($conexion, "SELECT contraseña FROM usuarios WHERE usuario = '$usuario'");
if ($resultado && mysqli_num_rows($resultado) > 0) {
    $row = mysqli_fetch_assoc($resultado);
    $contraseña_hasheada = $row['contraseña'];

   }

if (password_verify($contraseña, $contraseña_hasheada)) {
    session_start();

    $row = mysqli_fetch_assoc($resultado);
    $nombre_usuario = $row['nombre_de_usuario'];

    $_SESSION['nombre_usuario'] = $nombre_usuario;

    header("location: ../inicio.php");
    exit;
}else {
    echo '
    <script>
    alert("Vaya.. parece que no hemos encontrado este usuario, verifique los datos proporcionados");
    window.location = "../login.php";
    </script>
    ';
    exit;
}

?>
<?php 
session_start(); 

include("conexion_be.php");

$usuario = $_POST['usuario'];
$contraseña = $_POST['contraseña'];

$usuario = mysqli_real_escape_string($conexion, $usuario);

$resultado = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario = '$usuario'");

if ($resultado && mysqli_num_rows($resultado) > 0) {
    $row = mysqli_fetch_assoc($resultado);
    $contraseña_hasheada = $row['contraseña'];
    $_SESSION['usuario'] = $row['usuario'];

      

        header("location: ../inicio.php");
    } else {
        echo '
        <script>
        alert("Contraseña incorrecta");
        window.location = "../Login.php";
        </script>
        ';
        exit;
    }



?>

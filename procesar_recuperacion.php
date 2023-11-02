<?php
include 'PhP/conexion_be.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $correo = $_POST['txtcorreo'];
// El resto del código continúa aquí


$queryusuario = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo = '$correo'");
$nr = mysqli_num_rows($queryusuario);
if ($nr == 1) {
    $mostrar = mysqli_fetch_array($queryusuario);
    $enviarcontraseña = $mostrar['contraseña'];


    $paracorreo = $correo;
    $titulo = "Recuperar contraseña";
    $mensaje = "tu contraseña es:" .$enviarcontraseña;
    $tucorreo = "From: xxxxx@gmail.com";

    if (mail($paracorreo, $titulo, $mensaje, $tucorreo)) {
        echo "<script> alert ('contraseña enviada'); window.location=' ../Login.php </script>";
        } else {
            echo "<script>  alert ('Error'); window.location='../login.php </script>";

        }
    
}
}



?>
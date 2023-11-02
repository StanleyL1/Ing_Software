<?php
include 'PhP/conexion_be.php';
ini_set("SMTP", "smtp.gmail.com");
ini_set("smtp_port", "587");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];

    $token = bin2hex(random_bytes(32));


    $reset_link = "https://tuaplicacion.com/restablecer-contrasena.php?token=" . $token;

    $to = $email;
    $subject = "Recuperación de Contraseña";
    $message = "Para restablecer tu contraseña, haz clic en el siguiente enlace: " . $reset_link;
    $headers = "From: Stanleylarin10@correo.com";

    if (mail($to, $subject, $message, $headers)) {
        echo "Se ha enviado un enlace de restablecimiento a tu correo electrónico. Por favor, verifica tu bandeja de entrada.";
    } else {
        echo "Hubo un problema al enviar el correo electrónico. Por favor, inténtalo de nuevo más tarde.";
    }
}
?>

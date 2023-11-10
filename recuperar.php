<?php
require 'phpmailer/PHPMailerAutoload.php';

// Conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "123456";
$dbname = "login_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Error de conexión a la base de datos: " . $conn->connect_error);
}

// Recupera la dirección de correo electrónico del formulario
if (isset($_POST['email'])) {
    $email = $_POST['email'];

    // Consulta la base de datos para obtener la contraseña asociada a la dirección de correo electrónico
    $sql = "SELECT contraseña FROM usuarios WHERE correo = '$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $contraseña = $row['contraseña'];

        // Crea un mensaje de correo electrónico
        $mail = new PHPMailer;
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'stanleylarin10@gmail.com';
        $mail->Password = '12345678';
        $mail->SMTPSecure = 'ssl';
        $mail->Port = 587;
        $mail->setFrom('stanleylarin10@gmail.com', 'Admin');
        $mail->addAddress($email);
        $mail->isHTML(true);
        $mail->Subject = 'Recuperación de Contraseña';
        $mail->Body = "Tu contraseña es: $contraseña";

        if ($mail->send()) {
            echo "Se ha enviado un correo electrónico con la contraseña.";
        } else {
            echo "Error al enviar el correo electrónico: " . $mail->ErrorInfo;
        }
    } else {
        echo "No se encontró un usuario con esa dirección de correo electrónico.";
    }
}

$conn->close();
?>

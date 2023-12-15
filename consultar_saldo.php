<?php
// Realizar la conexión a la base de datos (asumiendo MySQL)
$servername = "localhost";
$username = "root";
$password = "123456";
$dbname = "login_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST['usuario'];

    // Utilizando consultas preparadas para prevenir inyección SQL
    $stmt = $conn->prepare("SELECT usuario, saldo FROM tarjetas WHERE usuario = ?");
    $stmt->bind_param("s", $usuario);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "El saldo de ".$row['usuario']." es: ".$row['saldo']."<br>";
        }
    } else {
        echo "El usuario no existe o no tiene saldo asociado.";
    }
    $stmt->close();
}

$conn->close();
?>

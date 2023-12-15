<?php include 'header.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Consulta de Saldo</title>
    <style>
     
        .container 1{
            width: 80%;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            text-align: center;
            color: #333;
        }
        form {
            text-align: center;
            margin-bottom: 20px;
        }
        label {
            font-weight: bold;
        }
        input[type="text"] {
            padding: 8px;
            border-radius: 4px;
            border: 1px solid #ccc;
        }
        input[type="submit"] {
            padding: 8px 20px;
            border: none;
            background-color: #4caf50;
            color: #fff;
            border-radius: 4px;
            cursor: pointer;
        }
        .resultado {
            text-align: center;
        }
        .resultado p {
            margin-bottom: 10px;
        }
        .saldo {
            color: #4caf50;
            font-size: 24px;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container1">
    <h2>Consulta de Saldo</h2>
        <form method="post" action="mostrar_saldo.php">
            <label>Usuario:</label>
            <input type="text" name="usuario">
            <input type="submit" value="Consultar">
        </form>
        <div class="resultado">
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $servername = "localhost";
                $username = "root";
                $password = "123456";
                $dbname = "login_db";

                $conn = new mysqli($servername, $username, $password, $dbname);

                if ($conn->connect_error) {
                    die("Conexión fallida: " . $conn->connect_error);
                }

                $usuario = $_POST['usuario'];

                $stmt = $conn->prepare("SELECT usuario, saldo FROM tarjetas WHERE usuario = ?");
$stmt->bind_param("s", $usuario);

                $stmt->execute();
                $result = $stmt->get_result();

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<p>El saldo de " . $row['usuario'] . " es: <span class='saldo'>$" . $row['saldo'] . "</span></p>";
                    }
                } else {
                    echo "<p>El usuario no existe o no tiene saldo asociado.</p>";
                }
                $stmt->close();
                $conn->close();
            }
            ?>
        </div>
    </div>
</body>
</html>

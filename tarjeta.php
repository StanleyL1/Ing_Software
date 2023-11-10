<?php
include 'header.php';


// Supongamos que el saldo actual se almacena en una variable $saldo.
$saldo = 35; // Debes cargar el saldo real desde tu base de datos o donde lo tengas almacenado.

// Verificamos si se ha enviado una orden, por ejemplo, a través de un formulario POST.
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Supongamos que el precio del producto se obtiene desde el formulario.
    $precio_producto = 0.50;

    // Realizamos la resta del precio del producto al saldo actual.
    $saldo -= $precio_producto;

    // Aquí puedes agregar más lógica, como guardar la orden en una base de datos, etc.
    // ...
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tarjeta de Membresía</title>
    <style>
        .tarjeta {
            max-width: 400px;
            margin: 0 auto;
            background-color: #FFD700; /* Amarillo claro similar al dorado del Banco Agrícola */
            color: black; /* Texto en color negro */
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            border-radius: 15px; /* Borde redondeado */
        }

        .tarjeta-front {
            background-color: #FFD700; /* Amarillo claro */
            color: black;
            padding: 20px;
            border-radius: 25px;
        }

        .tarjeta-header {
            text-align: center;
        }

        .icono {
            font-size: 24px;
        }

        .user-name {
            font-weight: bold;
        }

        .tarjeta-back {
            display: none;
        }

        .card-title {
            background-color: black;
            color: white;
            padding: 10px;
        }
    </style>
</head>
<body>

    <div class="container mt-5">
        <div class="tarjeta" id="cardContainer">
            <div class="tarjeta-front">
                <div class="tarjeta-header">
                    <h5 class="card-title h3">Tarjeta de Membresía</h5>
                </div>
                <p class="card-text h4 ">Nombre del Titular: <span class="user-name"><?php echo htmlspecialchars($_SESSION['nombre_completo']); ?> <span class="user-name"><?php echo htmlspecialchars($_SESSION['Apellidos']); ?></span></p>
                <p class="card-text h4">**** **** ****1997 </p>
                <p class="card-text h4">Fecha de Vencimiento: 12/25</p>
                <p class="card-text h4">Saldo Disponible: $35</p> 
                <div class="tarjeta-footer h5">
                    <i class="  icono fas fa-university" ></i> Local Universitario
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

<?php include 'header.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menú Interactivo</title>
    <style>
        body {
            background-color: #f8f9fa;
        }

        .card {
            margin-top: 50px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .card-header {
            background-color: #007bff;
            color: #fff;
            font-weight: bold;
        }

        .card-title {
            font-weight: bold;
            margin-bottom: 20px;
        }

        .btn-option {
            margin-bottom: 15px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="card text-center">
            <div class="card-header">
                Bienvenido Administrador
            </div>
            <div class="card-body">
                <h5 class="card-title">¿Qué deseas hacer?</h5>
                <div class="btn-group-vertical">
                    <button class="btn btn-primary btn-block btn-option" onclick="location.href='asignar_tarjeta.php'">Asignar Tarjeta a Usuario</button>
                    <button class="btn btn-primary btn-block btn-option" onclick="location.href='abonar_saldo.php'">Abonar Saldo</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>

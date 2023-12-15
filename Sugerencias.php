<?php include 'header.php'; ?>

    <style>
   

        .h1 {
            color: #333;
            text-align: center;
        }

        .row {
            display: flex;
            justify-content: center;
        }

        .card {
            margin: 10px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
        }

        .card-title {
            font-size: 24px;
            font-weight: bold;
            color: #333;
        }

        .btn-primary {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<body>
    <div class="container">
        <h1 class="h1">Bienvenido a nuestro apartado de sugerencias</h1>
        <h1 class="h1">Elige un lugar entre nuestras opciones a la cual deseas dar tu opinión de nuestro local:</h1>

        <div class="row mt-4">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Kiosko</h5>
                        <a href="Kiosko.php" class="btn btn-primary">Opinar</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Chalet UGB</h5>
                        <a href="ChaletUGB.php" class="btn btn-primary">Opinar</a>
                    </div>
                </div>
            </div>
    
<div class="col-md-6">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Proximamente</h5>
            <a href="ChaletUGB.php" class="btn btn-primary" id="opinarBtn">Opinar</a>
        </div>
    </div>
</div>

<script>
// lee el clic en el botón "Opinar" y muestra la alerta
document.addEventListener("DOMContentLoaded", function () {
    const opinarBtn = document.getElementById("opinarBtn");
    opinarBtn.addEventListener("click", function (event) {
        event.preventDefault(); // Evita que el enlace redirija

        Swal.fire({//muestra una alerta al finalizar el tiempo de preparacion del pedido
            title: "Proximamente",
            text: "¡Gracias por tu opinión!",
            icon: "info",
            confirmButtonText: "OK"
        });
    });
});
</script>

        </div>
    </div>
</body>
</html>

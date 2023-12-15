<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Escolarbite</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <script src="https://kit.fontawesome.com/81581fb069.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

    <script>
        $(document).ready(function() {
            $('.dropdown-toggle').dropdown();
        });
    </script>

<body>

    <style>
     .header {background-color: cyan;}
        a {
            color: black;
        }

        .user-name {
            font-size: 17px;
            font-weight: bold;
        }

        .container-hero {
        }

        @media (max-width: 768px) {
            .container-hero {
            }
        }

        .titulo {
            color: white;
        }
    </style>

    <header>
        <div class="container-hero">
            <div class="container hero">
                <div class="customer-support">
                    <i class="fa-solid fa-headset"></i>
                    <div class="content-customer-support">
                        <span class="text">Soporte al cliente</span>
                        <span class="number">7260-2346</span>
                    </div>
                </div>

                <div class="container-logo" style="text-align: center;">
                    <i class="fa-solid fa-utensils fa-beat" style="margin-left: 150px;"></i>
                    <br>
                    <h1 class="logo"><a href="Inicio.php">Escolarbite</a></h1>
                </div>

                <p class="d-flex">
                    <div class="btn-group h2">
                        <i class="fas fa-user user-name"></i>
      <br>
      <span class="user-name"><?php echo htmlspecialchars($_SESSION['nombre_completo']); ?></span>
<span class="user-name"><?php echo htmlspecialchars($_SESSION['Apellidos']); ?></span>
<button class="btn btn-secondary ml-2" onclick="location.href='logout.php'">Cerrar Sesión</button>

    </div>
</div>

                    </div>
                </p>
            </div>
        </div>

        <div class="container-navbar">
            <nav class="navbar container">
                <i class="fa-solid fa-bars"></i>
                <ul class="menu">
                    <li><a href="Inicio.php">Inicio</a></li>
                    <li><a href="pepes.php">Kiosko UGB</a></li>
                    <li><a href="chalet.php">Chalet UGB</a></li>
                    <li><a href="ordenes.php">Ordenes</a></li>
                    <li><a href="Sugerencias.php">Sugerencias</a></li>
                    <li><a href="Nuevo.php">Proximamente</a></li>
                    <li><a href="mostrar_saldo.php">Metodo de pago</a></li>
                    <li><a href="admin.php">Admin</a></li>


                </ul>
            </nav>
        </div>
    
</body>

</html>

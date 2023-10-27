<?php
session_start();

?>


<!DOCTYPE html>
<html lang="en">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Escolarbite</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
</head>
<script src="https://kit.fontawesome.com/81581fb069.js" crossorigin="anonymous"></script>
<script>
    $(document).ready(function() {
        $('.dropdown-toggle').dropdown();
    });
</script>


<style>
a {
    color: black;
}
	.user-name {
    font-size: 17px; /* Elige un tamaño de fuente adecuado */
    font-weight: bold; }

.container-hero {
}

@media (max-width: 768px) {
    .container-hero {
    }
}
.titulo{color: white;}

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
    <span class="user-name">
    <?php echo htmlspecialchars($_SESSION['usuario']); ?></span>
        <button class="btn btn-secundary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            Ajustes
        </button>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="perfil.php">Perfil</a></li>
            <li><a class="dropdown-item" href="Login.php">Cerrar Sesión</a></li>
        </ul>
    </div>
</p>



            </div>
        </div>

        <div class="container-navbar">
            <nav class="navbar container">
                <i class="fa-solid fa-bars"></i>
                <ul class="menu">
                    <li><a href="Inicio.php">Inicio</a></li>
                    <li><a href="Pepes.php">Pepe´ Coffe</a></li>
                    <li><a href="chalet.php">Chalet UGB</a></li>
                    <li><a href="ordenes.php">Ordenes</a></li>
                    <li><a href="Sugerencias.php">Sugerencias</a></li>
                </ul>

              
            </nav>
        </div>
    </header>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
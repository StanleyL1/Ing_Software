
<!DOCTYPE html>
<html lang="en">
	<head>
        
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta
			name="viewport"
			content="width=device-width, initial-scale=1.0"
		/>
		<title>Escolarbite</title>
		<link rel="stylesheet" href="styles.css" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    
	</head>
    <script
			src="https://kit.fontawesome.com/81581fb069.js"
			crossorigin="anonymous"
		></script>
	<body>
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

					<div class="container-logo">
						<i class="fa-solid fa-utensils fa-beat"></i>
						<br>
						<h1 class="logo"><a href="Inicio.php">Escolarbite</a></h1>
					</div>
                   
                    <div class="container-user">
    <a href="ordenes.html" class="fa-solid fa-basket-shopping"></a>
    <div class="content-shopping-cart">
        <span class="text">Carrito</span>
        <div id="order-count">0</div>
    </div>
    <?php
    include 'PhP/conexion_be.php';
    session_start(); 

    if (isset($nombre_usuario)) {
        echo '<i class="fa-solid fa-user"></i>';
        echo '<span>Bienvenido, ' . $nombre_usuario . '</span>';
    }
    ?>
</div>
				</div>
			</div>
            
            
			<div class="container-navbar">
				<nav class="navbar container">
					<i class="fa-solid fa-bars"></i>
					<ul class="menu">
						<li><a href="Inicio.php">Inicio</a></li>
						<li><a href="Pepes.html">Pepe´ Coffe</a></li>
						<li><a href="chalet.html">Chalet UGB</a></li>
						<li><a href="ordenes.html">Ordenes</a></li>
						<li><a href="Sugerencias.html">Sugerencias</a></li>
						

					</ul>

					<form class="search-form">
						<input type="search" placeholder="Buscar..." />
						<button class="btn-search">
							<i class="fa-solid fa-magnifying-glass"></i>
						</button>
					</form>
				</nav>
			</div>
		</header>

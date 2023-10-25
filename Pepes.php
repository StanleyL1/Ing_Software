<?php include 'header.php'; ?>

	<style>
		

  .card-product {
    width: 100%;
    margin: 10px;
    border: 1px solid #ddd; 
    padding: 10px;
    text-align: center;
  }

		 

        .container-img img {
            max-width: 100%; 
            height: auto; 
			background-repeat: no-repeat;
        }

      
     
        .price {
            font-weight: bold;
        }
        .titulo {
            font-size: 24px; /* Reducimos el tamaño del título */
            font-weight: bold;
			color: white;
        }
	</style>
    
		
        
	<section class="banner">
		<div class="content-banner">
		
				<div class="titulo">Pepe's Coffee</div>
				<p>¡Bienvenido a Pepe's Coffee! Disfruta de una deliciosa comida con nosotros.</p>
				<p>¡Esperamos verte pronto!</p>
		</div>
	</section>

	<section class="container top-categories">
        <h1 class="heading-1">Catálogo</h1>
        <div class="container-options"></div>
        <div class="container-products">
			
			<div class="card-product">
				<div class="container-img">
					<img src="productos/hamburguesa.jpg" alt="Hamburguesa	|" />

				</div>
				<br>
				<br><br><br>
				<div class="content-card-product">

					<div class="stars">
						<button class="btn btn-primary" onclick="agregarProducto('Hamburguesa', 1.75)">Ordenar</button>

					</div>
					<h3>Hamburguesa</h3>
					<p class="price">$1.75</p>
				</div>


			</div>
			<div class="card-product">
				<div class="container-img">
					<img src="productos/pupusas.jpeg" alt="Cafe incafe-ingles.jpg" />
					<br><br>


				</div>
				<div class="content-card-product">
					<div class="stars"><br><br>
						<button class="btn btn-primary" onclick="agregarProducto('Pupusas', 0.75)">Ordenar</button>

					</div>
					<h3>Pupusas</h3>


					<p class="price">$0.75</p>
				</div>
			</div>
			
			<div class="card-product">
				<div class="container-img">
					<img src="productos/nachos.jpg" alt="Nachos" />

				</div>
				<div class="content-card-product">
					<div class="stars"><br><br><br><br><br>
						<button class="btn btn-primary" onclick="agregarProducto('Nachos', 2.00)">Ordenar</button>

					</div>
					<h3>Nachos</h3>


					<p class="price">$2.00</p>

				</div>
			</div>
			
			<div class="card-product">
				<div class="container-img">
					<img src="productos/Maruchan.jpg" alt="Maruchan" />

				</div>
				<div class="content-card-product">
					<div class="stars">
						<button class="btn btn-primary" onclick="agregarProducto('Maruchan', 1.75)">Ordenar</button>

					</div>
					<h3>Maruchan</h3>


					<p class="price">$1.75</p>
				</div>
			</div>
			<div class="card-product">
				<div class="container-img">
					<img src="productos/Palomitas.jpg" alt="Palomitas" />

				</div>
				<div class="content-card-product">
					<div class="stars"><br><br><br><br><br>
						<button class="btn btn-primary" onclick="agregarProducto('Palomitas', 1.00)">Ordenar</button>

					</div>
					<h3>Palomitas</h3>


					<p class="price">$1.00</p>

				</div>
			</div>
			<div class="card-product">
				<div class="container-img">
					<img src="productos/Panpollo.jpg" alt="Pan con Pollo" />

				</div>
				<div class="content-card-product">
					<div class="stars"><br><br><br><br><br>
						<button class="btn btn-primary" onclick="agregarProducto('Panpollo', 0.50)">Ordenar</button>

					</div>
					<h3>Pan con Pollo</h3>


					<p class="price">$0.50</p>

				</div>
			</div>
			<div class="card-product">
				<div class="container-img">
					<img src="productos/Panjamon.jpg" alt="Pan con Jamón" />

				</div>
				<div class="content-card-product">
					<div class="stars"><br><br><br><br><br><br>
						<button class="btn btn-primary" >Ordenar</button>

					</div>
					<h3>Pan con Jamón</h3>


					<p class="price">$0.50</p>

				</div>
			</div>
			<div class="card-product">
				<div class="container-img">
					<img src="productos/hotdog.jpg" alt="Hotdog" />

				</div>
				<div class="content-card-product">
					<div class="stars"><br><br><br><br>
						<button class="btn btn-primary" onclick="agregarProducto('Hotdog', 1.50)">Ordenar</button>

					</div>
					<h3>Hotdog</h3>


					<p class="price">$1.50</p>

				</div>
			</div>
			<div class="card-product">
				<div class="container-img"><br>
					<br><br><br><br><br>
					<img src="productos/oreo.jpg" alt="Oreo" />
				</div>
				<div class="content-card-product">
					<div class="stars"><br><br><br><br><br><br><br><br><br><br>
						<button class="btn btn-primary" onclick="agregarProducto('Oreo', 0.35)">Ordenar</button>
					</div>
					<h3>Oreo</h3>
					<p class="price">$0.35</p>
				</div>
			</div>

			<div class="card-product">
				<div class="container-img"><br>
					<br><br><br><br><br><br><br><br>
					<img src="productos/gelatina.jpg" alt="Gelatina" />
				</div>
				<div class="content-card-product">
					<div class="stars"><br><br><br><br><br>
						<button class="btn btn-primary" onclick="agregarProducto('Gelatina', 0.50)">Ordenar</button>
					</div>
					<h3>Gelatina</h3>
					<p class="price">$0.50</p>
				</div>
			</div>			

			<div class="card-product">
				<div class="container-img"><br><br><br><br>
					<img src="productos/fruta.jpg" alt="Fruta" />
				</div>
				<div class="content-card-product">
					<div class="stars"><br><br><br><br>
						<button class="btn btn-primary" onclick="agregarProducto('Fruta', 1.25)">Ordenar</button>
					</div>
					<h3>Vaso de frutas</h3>
					<p class="price">$1.25</p>
				</div>
			</div>

			<div class="card-product">
				<div class="container-img">
					<img src="productos/frappe.jpg" alt="Frappe" />
				</div>
				<div class="content-card-product">
					<div class="stars"><br>
						<button class="btn btn-primary" onclick="agregarProducto('Frappe', 2.00)">Ordenar</button>
					</div>
					<h3>Frappe</h3>
					<p class="price">$2.00</p>
				</div>
			</div>

			<div class="card-product">
				<div class="container-img">
					<img src="productos/flanqueso.jpg" alt="Flan" />
				</div>
				<div class="content-card-product">
					<div class="stars"><br><br><br><br>
						<button class="btn btn-primary" onclick="agregarProducto('Flan', 2.00)">Ordenar</button>
					</div>
					<h3>Flan de queso</h3>
					<p class="price">$2.00</p>
				</div>
			</div>

			<div class="card-product">
				<div class="container-img">
					<img src="productos/pastel.jpg" alt="Pastel" />
				</div>
				<div class="content-card-product">
					<div class="stars"><br><br><br><br>
						<button class="btn btn-primary" onclick="agregarProducto('Pastel', 2.50)">Ordenar</button>
					</div>
					<h3>Poricion de pastel</h3>
					<p class="price">$2.50</p>
				</div>
			</div>

			<div class="card-product">
				<div class="container-img">
					<img src="productos/chocobananos.jpg" alt="Pastel" />
				</div>
				<div class="content-card-product">
					<div class="stars"><br><br><br><br><br><br>
						<button class="btn btn-primary" onclick="agregarProducto('chocobananos', 0.75)">Ordenar</button>
					</div>
					<h3>Chocobananos</h3>
					<p class="price">$0.75</p>
				</div>
			</div>
		</div>
		<section class="container specials">
        <h1 class="heading-1">Bebidas</h1>
        <div class="container-products">
			<div class="card-product">
				<div class="container-img">
					<img src="productos/tamarindo.jpg" alt="Fresco tamarindo" />
					<span class="discount"></span>
					<div class="button-group">

					</div>
				</div>
				<div class="content-card-product">
					<div class="stars"><br><br><br><br><br><br><br>
						<button class="btn btn-primary" onclick="agregarProducto('Fresco tamarindo', 0.50)">Ordenar</button>

					</div>
					<h3>Fresco de tamarindo</h3>


					<p class="price">$0.50</p>
				</div>
			</div>
			<div class="card-product">
				<div class="container-img">
					<img src="productos/horchata.jpg" alt="Fresco horchata" />
					<span class="discount"></span>
					<div class="button-group">

					</div>
				</div>
				<div class="content-card-product">
					<div class="stars"><br><br><br><br><br><br><br>
						<button class="btn btn-primary" onclick="agregarProducto('Fresco horchata', 0.50)">Ordenar</button>

					</div>
					<h3>Fresco de horchata</h3>


					<p class="price">$0.50</p>
				</div>
			</div>
			<!-- Producto 2 -->
			<div class="card-product">
				<div class="container-img">
					<img src="productos/cebada.jpg" alt="" />
					<span class="discount"></span>
					<div class="button-group">

					</div>
				</div>
				<div class="content-card-product">
					<div class="stars"><br><br><br><br><br>
						<button class="btn btn-primary" onclick="agregarProducto('Fresco cebada', 0.50)">Ordenar</button>

					</div>
					<h3>Fresco de  cebada</h3>


					<p class="price">$0.50</p>
				</div>
			</div>

			<div class="card-product">
				<div class="container-img">
					<img src="productos/jamaica.jpg" alt="" />
					<span class="discount"></span>
					<div class="button-group">

					</div>
				</div>
				<div class="content-card-product">
					<div class="stars"><br><br><br><br><br><br><br><br>
						<button class="btn btn-primary" onclick="agregarProducto('Fresco jamaica', 0.50)">Ordenar</button>

					</div>
					<h3>Fresco de  jamaica</h3>


					<p class="price">$0.50</p>
				</div>
			</div>

			<!--  -->
			<div class="card-product">
				<div class="container-img">
					<img src="productos/jugo del vale.jpeg" alt="Cafe Viena" />
					<span class="discount"></span>
					<div class="button-group">

					</div>
				</div>
				<div class="content-card-product">
					<div class="stars"><br>
						<button class="btn btn-primary"
							onclick="agregarProducto('Jugo del valle', 0.75)">Ordenar</button>

					</div>
					<h3>Jugo del valle</h3>


					<p class="price">$0.75</p>
				</div>
			</div>
			<!--  -->
			<div class="card-product">
				<div class="container-img">
					<img src="productos/coca.jpg" alt="Cafe Liqueurs" />
					<div class="button-group">

					</div>
				</div>
				<div class="content-card-product">
					<div class="stars"><br>
						<button class="btn btn-primary" onclick="agregarProducto('Coca-Cola', 1.00)">Ordenar</button>

					</div>
					<h3>Coca-Cola</h3>


					<p class="price">$1.00</p>
				</div>
			</div>

			<div class="card-product">
				<div class="container-img">
					<img src="productos/cafe.jpeg" alt="Cafe Liqueurs" />
					<div class="button-group">

					</div>
				</div>
				<div class="content-card-product">
					<div class="stars"><br><br><br><br><br><br>
						<button class="btn btn-primary" onclick="agregarProducto('cafe', 0.25)">Ordenar</button>

					</div>
					<h3>Café</h3>


					<p class="price">$0.25</p>
				</div>
			</div>

			<div class="card-product">
				<div class="container-img">
					<img src="productos/gatorade.jpg" alt="Cafe Liqueurs" />
					<div class="button-group">

					</div>
				</div>
				<div class="content-card-product">
					<div class="stars"><br>
						<button class="btn btn-primary" onclick="agregarProducto('gatorade', 1.00)">Ordenar</button>

					</div>
					<h3>Gatorade</h3>


					<p class="price">$1.00</p>
				</div>
			</div>

			<div class="card-product">
				<div class="container-img">
					<img src="productos/licuadobanano.jpg" alt="Cafe Liqueurs" />
					<div class="button-group">

					</div>
				</div>
				<div class="content-card-product">
					<div class="stars"><br><br><br>
						<button class="btn btn-primary" onclick="agregarProducto('Licuadobanano', 1.00)">Ordenar</button>

					</div>
					<h3>Licuado de banano</h3>


					<p class="price">$1.00</p>
				</div>
			</div>

			<div class="card-product">
				<div class="container-img">
					<img src="productos/licuadofresa.jpg" alt="Cafe Liqueurs" />
					<div class="button-group">

					</div>
				</div>
				<div class="content-card-product">
					<div class="stars"><br>
						<button class="btn btn-primary" onclick="agregarProducto('Licuadofresa', 1.00)">Ordenar</button>

					</div>
					<h3>Licuado de fresa</h3>


					<p class="price">$1.00</p>
				</div>
			</div>
		</div>


		

	
		
		
		<script src="productos.js"></script>
		<script src="https://kit.fontawesome.com/81581fb069.js" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>
		<script src="ordenes.js"></script>
		
</body>
<?php include 'header.php'; ?>
<style>

  .container-products {
    display: flex;
    flex-wrap: wrap;
  }
  .card {
  width: 300px; 
  height: 200px; 
}
  .card-product {
    width: 235px; /* Establece el ancho fijo deseado */
    margin: 10px; /* Espacio entre los productos */
    border: 1px solid black; 
  }

  .container-img {
    max-height: 300px; 
    text-align: center;
  }

  .container-img img {
    max-width: 100%;
    max-height: 100%;
    display: inline-block;
    vertical-align: middle;
  }

  
  .price {
    text-align: center;
  }
  .button-group {
  display: flex;
  justify-content: center;
  margin-top: 10px; 
}

.card-product {
  text-align: center; 
}
.content-card-product {
  display: flex;
  flex-direction: column;
  justify-content: space-between;
  padding: 15px;
}

.ordenar {
  margin-bottom: 10;
}

.price {
  text-align: center;
}
.card-product img {
width: 200px;
height: 200px;
}


</style>


		<section class="banner">
			<div class="content-banner">
			
					<div class="titulo h1"  >Chalet UGB</div>
					<p>¡Bienvenido a Chalet UGB lideres en alimentos de calidad para ti.</p>
					<p>Ven a visitarnos y poder verte pronto!</p>
			</div>
		</section>		
			
			<section class="container specials">
				<h1 class="heading-1">Desayunos</h1>

				<div class="container-products">
					<div class="card-product">
						<div class="container-img">
						<img src="productos/frijoles.jpg" alt="frijoles" style="width: 200px; height: 200px;" />
							<span class="discount"></span>
							<div class="button-group">
							
							</div>
						</div>
						<div class="content-card-product">
							<div class="ordenar">
								<button class="btn btn-primary" onclick="agregarProducto('frijoles', 0.50)">Ordenar</button>
							</div>
							<h3>frijoles</h3>
							
			
							<p class="price">$0.50</p>
						</div>
					</div>
					<div class="card-product">
						<div class="container-img">
							<img src="productos/platanos.jpg" alt="platanos" />
							<span class="discount"></span>
							<div class="button-group">
								
							</div>
						</div>
						<div class="content-card-product">
							<div class="ordenar">
								<button class="btn btn-primary" onclick="agregarProducto('Platanos', 0.75)">Ordenar</button>
	
							</div>
							<h3>Platanos</h3>
							
			
							<p class="price">$0.75</p>
						</div>
					</div>
					<div class="card-product">
						<div class="container-img">
							<img
								src="productos/arroz negrito.jpg"
								alt="arroz negrito.jpg"
							/>
							<span class="discount"></span>
							<div class="button-group">
								
							</div>
						</div>
						<div class="content-card-product">
							<div class="ordenar">
								<button class="btn btn-primary" onclick="agregarProducto('Arroz Negrito', 0.50)">Ordenar</button>
	
							</div>
							<h3>Arroz Negrito</h3>
							
			
							<p class="price">$0.50</p>
						</div>
					</div>
					
					<div class="card-product">
						<div class="container-img">
							<img src="productos/huevo.jpg" alt="Huevo" />
							<span class="discount"></span>
							<div class="button-group">
								
							</div>
						</div>
						<div class="content-card-product">
							<div class="ordenar">
								<button class="btn btn-primary" onclick="agregarProducto('Huevo', 0.60)">Ordenar</button>
	
							</div>
							<h3>Huevo</h3>
						
							<p class="price">$0.60</p>
						</div>
					</div>
					<div class="card-product">
						<div class="container-img">
							<img src="productos/tortilla.jpg" alt="Tortilla" />
							<div class="button-group">
							
							</div>
						</div>
						<div class="content-card-product">
							<div class="ordenar">
								<button class="btn btn-primary" onclick="agregarProducto('Tortilla', 0.60)">Ordenar</button>
	
							</div>
							<h3>Tortilla con Quesillo</h3>
							
			
							<p class="price">$0.60</p>
						</div>
					</div>

					<div class="card-product">
						<div class="container-img">
							<img src="productos/jamon huevo.jpg" alt="jamonhuevo" />
							<span class="discount"></span>
							<div class="button-group">
								
							</div>
						</div>
						<div class="content-card-product">
							<div class="ordenar">
								<button class="btn btn-primary" onclick="agregarProducto('Jamonhuevo', 0.95)">Ordenar</button>
	
							</div>
							<h3>Jamon con Huevo</h3>
							
			
							<p class="price">$0.95</p>
						</div>
					</div>
					<div class="card-product">
						<div class="container-img">
							<img
								src="productos/salchicha.jpg"
								alt="salchicha.jpg"
							/>
							<span class="discount"></span>
							<div class="button-group">
								
							</div>
						</div>
						<div class="content-card-product">
							<div class="ordenar">
								<button class="btn btn-primary" onclick="agregarProducto('huevosalchicha', 0.95)">Ordenar</button>
	
							</div>
							<h3>Huevo con salchicha</h3>
							<p class="price">$0.95</p>
						</div>
					</div>
					<div class="card-product">
						<div class="container-img">
							<img src="productos/chorizo.JPG" alt="Chorizo" />
							<span class="discount"></span>
							<div class="button-group">
								
							</div>
						</div>
						<div class="content-card-product">
							<div class="ordenar">
								<button class="btn btn-primary" onclick="agregarProducto('Chorizo', 0.95)">Ordenar</button>
	
							</div>
							<h3>Chorizo entomatado</h3>
						
							<p class="price">$0.95</p>
						</div>
					</div>
					<div class="card-product">
						<div class="container-img">
							<img src="productos/cafe 8 onz.png" alt="cafe 8 onz" />
							<span class="discount"></span>
							<div class="button-group">
							
							</div>
						</div>
						<div class="content-card-product">
							<div class="ordenar">
								<button class="btn btn-primary" onclick="agregarProducto('cafe 8 onz', 0.30)">Ordenar</button>
	
							</div>
							<h3>Cafe 8 Onz</h3>
						
							<p class="price">$0.30</p>
						</div>
					</div>
					<div class="card-product">
						<div class="container-img">
							<img src="productos/chocolate.jpg" alt="chocolate" />
							<span class="discount"></span>
							<div class="button-group">
								
							</div>
						</div>
						<div class="content-card-product">
							<div class="ordenar">
								<button class="btn btn-primary" onclick="agregarProducto('Chocolate', 0.35)">Ordenar</button>
	
							</div>
							<h3>Chocolate 8 Onz</h3>
							
			
							<p class="price">$0.35</p>
						</div>
					</div>
					
					<div class="card-product">
						<div class="container-img">
							<img
								src="productos/crema.jpg"
								alt="crema.jpg"
							/>
							<span class="discount"></span>
							<div class="button-group">
								
							</div>
						</div>
						<div class="content-card-product">
							<div class="ordenar">
								<button class="btn btn-primary" onclick="agregarProducto('Crema', 0.35)">Ordenar</button>
	
							</div>
							<h3>Crema Porcion</h3>
							<p class="price">$0.35</p>
						</div>
					</div>
					
					
					<div class="card-product">
						<div class="container-img">
							<img src="productos/queso.jpg" alt="Queso" />
							<span class="discount"></span>
							<div class="button-group">
								
							</div>
						</div>
						<div class="content-card-product">
							<div class="ordenar">
								<button class="btn btn-primary" onclick="agregarProducto('Queso', 0.40)">Ordenar</button>
	
							</div>
							<h3>Queso Porcion</h3>
						
							<p class="price">$0.40</p>
						</div>
					</div>

					<div class="card-product">
						<div class="container-img">
							<img src="productos/pupusafrijol.jpg" alt="pupusafrijol" />
							<span class="discount"></span>
							<div class="button-group">
							
							</div>
						</div>
						<div class="content-card-product">
							<div class="ordenar">
								<button class="btn btn-primary" onclick="agregarProducto('pupusafrijol', 0.60)">Ordenar</button>
	
							</div>
							<h3>Pupusa de Frijol</h3>
						
							<p class="price">$0.60</p>
						</div>
					</div>
					<div class="card-product">
						<div class="container-img">
							<img src="productos/pupusachicharron.jpg" alt="pupusachicharron" />
							<span class="discount"></span>
							<div class="button-group">
								
							</div>
						</div>
						<div class="content-card-product">
							<div class="ordenar">
								<button class="btn btn-primary" onclick="agregarProducto('pupusachicharron', 0.70)">Ordenar</button>
	
							</div>
							<h3>Pupusa de Chicharron</h3>
						
							<p class="price">$0.70</p>
						</div>
					</div>
					
					<div class="card-product">
						<div class="container-img">
							<img
								src="productos/pupusapollo.jpg"
								alt="pupusapollo"
							/>
							<span class="discount"></span>
							<div class="button-group">
								
							</div>
						</div>
						<div class="content-card-product">
							<div class="ordenar">
								<button class="btn btn-primary" onclick="agregarProducto('pupusapollo', 0.70)">Ordenar</button>
	
							</div>
							<h3>Pupusa de Pollo</h3>
							<p class="price">$0.70</p>
						</div>
					</div>
			</div>
			<section class="container specials">
				<h1 class="heading-1">Almuerzos</h1>

				<div class="container-products">
					<div class="card-product">
						<div class="container-img">
							<img src="productos/polloempanizado.jpg" alt="polloempanizado" />
							<span class="discount"></span>
							<div class="button-group">
							
							</div>
						</div>
						<div class="content-card-product">
							<div class="ordenar">
								<button class="btn btn-primary" onclick="agregarProducto('polloempanizado', 3.00)">Ordenar</button>
	
							</div>
							<h3>Pollo Empanizado</h3>
							
			
							<p class="price">$3.00</p>
						</div>
					</div>
					<div class="card-product">
						<div class="container-img">
							<img src="productos/polloentomatado.jpg" alt="polloentomatado" />
							<span class="discount"></span>
							<div class="button-group">
								
							</div>
						</div>
						<div class="content-card-product">
							<div class="ordenar">
								<button class="btn btn-primary" onclick="agregarProducto('Polloentomatado', 2.00)">Ordenar</button>
	
							</div>
							<h3>Pollo entomatado</h3>
							<p class="price">$2.00</p>
						</div>
					</div>
					
					<div class="card-product">
						<div class="container-img">
							<img
								src="productos/polloencebollado.JPG"
								alt="polloencebollado"
							/>
							<span class="discount"></span>
							<div class="button-group">
								
							</div>
						</div>
						<div class="content-card-product">
							<div class="ordenar">
								<button class="btn btn-primary" onclick="agregarProducto('polloencebollado', 2.00)">Ordenar</button>
	
							</div>
							<h3>Pollo encebollado</h3>
	
							<p class="price">$2.00</p>
						</div>
					</div>
					
					
					<div class="card-product">
						<div class="container-img">
							<img src="productos/polloguisado.jpg" alt="polloguisado" />
							<span class="discount"></span>
							<div class="button-group">
								
							</div>
						</div>
						<div class="content-card-product">
							<div class="ordenar">
								<button class="btn btn-primary" onclick="agregarProducto('polloguisado', 2.50)">Ordenar</button>
	
							</div>
							<h3>Pollo Guisado</h3>
						
							<p class="price">$2.50</p>
						</div>
					</div>
					
					<div class="card-product">
						<div class="container-img">
							<img src="productos/pollodorado.jpg" alt="pollodorado" />
							<div class="button-group">
							
							</div>
						</div>
						<div class="content-card-product">
							<div class="ordenar">
								<button class="btn btn-primary" onclick="agregarProducto('pollodorado', 3.00)">Ordenar</button>
	
							</div>
							<h3>Pollo Dorado</h3>
							<p class="price">$3.00</p>
						</div>
					</div>

					<div class="card-product">
						<div class="container-img">
							<img src="productos/carneguisada.jpg" alt="carneguisada" />
							<span class="discount"></span>
							<div class="button-group">
								
							</div>
						</div>
						<div class="content-card-product">
							<div class="ordenar">
								<button class="btn btn-primary" onclick="agregarProducto('carneguisada', 2.50)">Ordenar</button>
	
							</div>
							<h3>Carne Guisada</h3>
							
			
							<p class="price">$2.50</p>
						</div>
					</div>
					<div class="card-product">
						<div class="container-img">
							<img
								src="productos/carnetomatada.jpg"
								alt="carnetomatada"
							/>
							<span class="discount"></span>
							<div class="button-group">
								
							</div>
						</div>
						<div class="content-card-product">
							<div class="ordenar">
								<button class="btn btn-primary" onclick="agregarProducto('carnetomatada', 2.50)">Ordenar</button>
	
							</div>
							<h3>Carne Entomatada</h3>
							<p class="price">$2.50</p>
						</div>
					</div>
					<div class="card-product">
						<div class="container-img">
							<img src="productos/carnencebollada.jpg" alt="carnencebollada" />
							<span class="discount"></span>
							<div class="button-group">
								
							</div>
						</div>
						<div class="content-card-product">
							<div class="ordenar">
								<button class="btn btn-primary" onclick="agregarProducto('carnencebollada', 2.50)">Ordenar</button>
	
							</div>
							<h3>Carne encebollada</h3>
						
							<p class="price">$2.50</p>
						</div>
					</div>
					<div class="card-product">
						<div class="container-img">
							<img src="productos/chuleta.jpg" alt="chuleta" />
							<span class="discount"></span>
							<div class="button-group">
							
							</div>
						</div>
						<div class="content-card-product">
							<div class="ordenar">
								<button class="btn btn-primary" onclick="agregarProducto('chuleta', 2.50)">Ordenar</button>
	
							</div>
							<h3>Chuleta</h3>
						
							<p class="price">$2.50</p>
						</div>
					</div>
					<div class="card-product">
						<div class="container-img">
							<img src="productos/rellenocoli.jpg" alt="rellenocoli" />
							<span class="discount"></span>
							<div class="button-group">
								
							</div>
						</div>
						<div class="content-card-product">
							<div class="ordenar">
								<button class="btn btn-primary" onclick="agregarProducto('rellenocoli', 2.00)">Ordenar</button>
	
							</div>
							<h3>Relleno de Coliflor</h3>
							<p class="price">$2.00</p>
						</div>
					</div>
					
					<div class="card-product">
						<div class="container-img">
							<img
								src="productos/rellenoejo.jpg"
								alt="rellenoejo"
							/>
							<span class="discount"></span>
							<div class="button-group">
								
							</div>
						</div>
						<div class="content-card-product">
							<div class="ordenar">
								<button class="btn btn-primary" onclick="agregarProducto('rellenoejo', 2.00)">Ordenar</button>
	
							</div>
							<h3>Relleno de ejote</h3>
							<p class="price">$2.00</p>
						</div>
					</div>
					
					
					<div class="card-product">
						<div class="container-img">
							<img src="productos/rellenoguis.jpg" alt="rellenoguis" />
							<span class="discount"></span>
							<div class="button-group">
								
							</div>
						</div>
						<div class="content-card-product">
							<div class="ordenar">
								<button class="btn btn-primary" onclick="agregarProducto('rellenoguis', 2.00)">Ordenar</button>
	
							</div>
							<h3>Relleno de Guisquil</h3>
						
							<p class="price">$2.00</p>
						</div>
					</div>
			</div>

			<section class="container specials">
				<h1 class="heading-1">Bebidas</h1>

				<div class="container-products">
					<div class="card-product">
						<div class="container-img">
							<img src="productos/sodas.jpg" alt="sodas" />
							<span class="discount"></span>
							<div class="button-group">
							
							</div>
						</div>
						<div class="content-card-product">
							<div class="ordenar">
								<button class="btn btn-primary" onclick="agregarProducto('sodas', 0.75)">Ordenar</button>
	
							</div>
							<h3>Sodas</h3>
							<p class="price">$0.75</p>
						</div>
					</div>
					<div class="card-product">
						<div class="container-img">
							<img src="productos/gatorade.jpg" alt="gatorade" />
							<span class="discount"></span>
							<div class="button-group">
								
							</div>
						</div>
						<div class="content-card-product">
							<div class="ordenar">
								<button class="btn btn-primary" onclick="agregarProducto('gatorade', 1.10)">Ordenar</button>
	
							</div>
							<h3>Gatorade Grande</h3>
							<p class="price">$1.10</p>
						</div>
					</div>
					
					<div class="card-product">
						<div class="container-img">
							<img
								src="productos/agua.jpg"
								alt="agua"
							/>
							<span class="discount"></span>
							<div class="button-group">
								
							</div>
						</div>
						<div class="content-card-product">
							<div class="ordenar">
								<button class="btn btn-primary" onclick="agregarProducto('agua', 0.50)">Ordenar</button>
	
							</div>
							<h3>Agua medio litro</h3>
							<p class="price">$0.50</p>
						</div>
					</div>
					
					
					<div class="card-product">
						<div class="container-img">
							<img src="productos/frutado.jpg" alt="frutado" />
							<span class="discount"></span>
							<div class="button-group">
								
							</div>
						</div>
						<div class="content-card-product">
							<div class="ordenar">
								<button class="btn btn-primary" onclick="agregarProducto('frutado', 0.60)">Ordenar</button>
	
							</div>
							<h3>Frutado</h3>
						
							<p class="price">$0.60</p>
						</div>
					</div>
					
					<div class="card-product">
						<div class="container-img">
							<img src="productos/yogut.jpg" alt="yogut" />
							<div class="button-group">
							
							</div>
						</div>
						<div class="content-card-product">
							<div class="ordenar">
								<button class="btn btn-primary" onclick="agregarProducto('yogut', 0.75)">Ordenar</button>

							</div>
							<h3>Yogurt</h3>
							<p class="price">$0.75</p>
						</div>
					</div>
				</div>

				<section class="container specials">
					<h1 class="heading-1">	Golosinas</h1>
	
					<div class="container-products">

						<div class="card-product">
							<div class="container-img">
								<img src="productos/halls.jpg" alt="halls" />
								<span class="discount"></span>
								<div class="button-group">
								
								</div>
							</div>
							<div class="content-card-product">
								<div class="ordenar">
									<button class="btn btn-primary" onclick="agregarProducto('halls', 0.40)">Ordenar</button>
		
								</div>
								<h3>Halls de Barra</h3>
								
				
								<p class="price">$0.40</p>
							</div>
						</div>
						<div class="card-product">
							<div class="container-img">
								<img src="productos/trident.jpg" alt="tridentpe" />
								<span class="discount"></span>
								<div class="button-group">
									
								</div>
							</div>
							<div class="content-card-product">
								<div class="ordenar">
									<button class="btn btn-primary" onclick="agregarProducto('tridentpe', 0.15)">Ordenar</button>
		
								</div>
								<h3>Trident Pequeños</h3>
								<p class="price">$0.15</p>
							</div>
						</div>
						
						<div class="card-product">
							<div class="container-img">
								<img
									src="productos/trident18.jpg"
									alt="trident18"
								/>
								<span class="discount"></span>
								<div class="button-group">
									
								</div>
							</div>
							<div class="content-card-product">
								<div class="ordenar">
									<button class="btn btn-primary" onclick="agregarProducto('trident18', 1.25)">Ordenar</button>
		
								</div>
								<h3>Trident 18u</h3>

								<p class="price">$1.25</p>
							</div>
						</div>
						

						<div class="card-product">
							<div class="container-img">
								<img src="productos/trident twist.jpg" alt="tridentwist" />
								<span class="discount"></span>
								<div class="button-group">
									
								</div>
							</div>
							<div class="content-card-product">
								<div class="ordenar">
									<button class="btn btn-primary" onclick="agregarProducto('tridentwist', 0.65)">Ordenar</button>
		
								</div>
								<h3>Trident Twist</h3>
							
								<p class="price">$0.65</p>
							</div>
						</div>

						<div class="card-product">
							<div class="container-img">
								<img src="productos/clorets 12.jpg" alt="clorets" />
								<div class="button-group">
								
								</div>
							</div>
							<div class="content-card-product">
								<div class="ordenar">
									<button class="btn btn-primary" onclick="agregarProducto('clorets', 0.40)">Ordenar</button>
		
								</div>
								<h3>Cloret 20/12</h3>	
								<p class="price">$0.40</p>
							</div>
						</div>
	
						<div class="card-product">
							<div class="container-img">
								<img src="productos/galleta ri.jpg" alt="galletari" />
								<span class="discount"></span>
								<div class="button-group">
									
								</div>
							</div>
							<div class="content-card-product">
								<div class="ordenar">
									<button class="btn btn-primary" onclick="agregarProducto('galletari', 0.25)">Ordenar</button>
		
								</div>
								<h3>Galleta rit</h3>
								
				
								<p class="price">$0.25</p>
							</div>
						</div>
						<div class="card-product">
							<div class="container-img">
								<img
									src="productos/galletachiky.png"
									alt="galletachiky"
								/>
								<span class="discount"></span>
								<div class="button-group">
									
								</div>
							</div>
							<div class="content-card-product">
								<div class="ordenar">
									<button class="btn btn-primary" onclick="agregarProducto('galletachiky', 0.25)">Ordenar</button>
		
								</div>
								<h3>Galleta Chiky</h3>
								<p class="price">$0.25</p>
							</div>
						</div>
						<div class="card-product">
							<div class="container-img">
								<img src="productos/freegel.jpg" alt="freegel" />
								<span class="discount"></span>
								<div class="button-group">
									
								</div>
							</div>
							<div class="content-card-product">
								<div class="ordenar">
									<button class="btn btn-primary" onclick="agregarProducto('fregel', 0.25)">Ordenar</button>
		
								</div>
								<h3>Freegells</h3>
							
								<p class="price">$0.25</p>
							</div>
						</div>

						<div class="card-product">
							<div class="container-img">
								<img src="productos/saladinas.jpg" alt="saladinas" />
								<span class="discount"></span>
								<div class="button-group">
								
								</div>
							</div>
							<div class="content-card-product">
								<div class="ordenar">
									<button class="btn btn-primary" onclick="agregarProducto('saladinas', 0.20)">Ordenar</button>
		
								</div>
								<h3>Saladinas</h3>
							
								<p class="price">$0.20</p>
							</div>
						</div>
						<div class="card-product">
							<div class="container-img">
								<img src="productos/vitalido.png" alt="vita" />
								<span class="discount"></span>
								<div class="button-group">
									
								</div>
							</div>
							<div class="content-card-product">
								<div class="ordenar">
									<button class="btn btn-primary" onclick="agregarProducto('vita', 0.20)">Ordenar</button>

								</div>
								<h3>Vita Lido</h3>
								<p class="price">$0.20</p>
							</div>
						</div>
				</div>
					


		<script src="ordenes.js"></script>
		<script src="https://kit.fontawesome.com/81581fb069.js" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>
		<script src="productos.js"></script>
	</body>
</html>
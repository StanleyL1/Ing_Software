<?php include 'header.php'; ?>

<style>
	.comment.irrelevant {
		background-color: #f2f2f2;
	}
	.comment {
		border: 1px solid #ccc;
		padding: 10px;
		margin-bottom: 10px;
		font-size: 16px; /* Tamaño de fuente personalizado */
	}
	.irrelevant {
		background-color: #ff0000; /* Cambia el color a rojo */
	}
</style>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>

<div class="container">
<h1 class="my-4">Sugerencias</h1>

<button id="miBoton" class="btn btn-primary">Pulsa para el confeti</button>

<textarea id="commentInput" class="form-control my-3" rows="4" required></textarea>
<button class="btn btn-primary" onclick="publicarComentario()">Publicar Comentario</button>

<div id="commentContainer" class="mt-4">
	<!-- Comentarios se agregan aquí -->
</div>

<div id="mensajeAgradecimiento" class="alert alert-success" style="display: none;">
	Gracias por tu comentario.
</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.15.7/dist/sweetalert2.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/canvas-confetti@0.5.0/dist/canvas-confetti.min.js"></script>
<script src="sugerencias.js"></script>
<script>


document.getElementById('miBoton').addEventListener('click', mostrarConfeti);
</script>
</body>
</html>
<?php include 'header.php'; ?>

<style>
	.comment.irrelevant {
		background-color: #f2f2f2;
	}
	.comment {
		border: 1px solid #ccc;
		padding: 10px;
		margin-bottom: 10px;
		font-size: 16px; 
	}
	.irrelevant {
		background-color: #ff0000; 
	}
</style>

</head>
<body>

<div class="container">
<h1 class="my-4">Sugerencias</h1>


<textarea id="commentInput" class="form-control my-3" rows="4" required></textarea>
<button class="btn btn-primary" onclick="publicarComentario()">Publicar Comentario</button>

<div id="commentContainer" class="mt-4">
	<!-- Comentarios se agregan aquí -->
</div>

<div id="mensajeAgradecimiento" class="alert alert-success" style="display: none;">
	Gracias por tu comentario.
</div>
</div>
<script src="sugerencias.js"></script>
<script>


</script>
</body>
</html>
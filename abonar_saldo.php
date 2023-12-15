<!-- abonar_saldo.php -->
<?php include 'header.php'; ?>

<div class="container mt-4">
    <div class="card text-center">
        <div class="card-header">
            Abonar Saldo a Usuario
        </div>
        <div class="card-body">
            <form action="procesar_abono.php" method="POST">
                <div class="form-group">
                    <label for="usuario">Nombre de Usuario:</label>
                    <input type="text" class="form-control" id="usuario" name="usuario" required>
                </div>
                <div class="form-group">
                    <label for="monto">Monto a Abonar:</label>
                    <input type="number" step="0.01" min="0.01" class="form-control" id="monto" name="monto" required>
                </div>
                <button type="submit" class="btn btn-primary">Abonar</button>
            </form>
        </div>
    </div>
</div>

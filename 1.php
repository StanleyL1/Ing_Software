<button id="miBoton" class="btn btn-danger">Eliminar</button>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const miBoton = document.getElementById("miBoton");
        
        setTimeout(function() {
            miBoton.style.display = "none";
        }, 5000); // Ocultar el botón después de 5 segundos (5000 ms)
    });
</script>

function borrarComentario(button) {
    const comment = button.parentElement;
    comment.remove();
}

function marcarIrrelevante(button) {
    const comment = button.parentElement;
    comment.classList.add("irrelevant");
}

function publicarComentario() {
    const commentText = document.getElementById("commentInput").value;

    if (commentText.trim() === "") {
        Swal.fire('Error', '', 'error');
    } else {
        const commentContainer = document.getElementById("commentContainer");

        const comment = document.createElement("div");
        comment.className = "comment";
        comment.innerHTML = `
            <p>${commentText}</p>
            <button class="btn btn-danger" onclick="borrarComentario(this)">Eliminar</button>
            <button class="btn btn-warning" onclick="marcarIrrelevante(this)">Marcar</button>
        `;

        commentContainer.appendChild(comment);

        document.getElementById("commentInput").value = "";

        Swal.fire('Gracias', 'Gracias por tu comentario.', 'success');
    }
}

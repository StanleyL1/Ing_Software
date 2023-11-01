// Ejecutando funciones
document.getElementById("btn__iniciar-sesion").addEventListener("click", mostrarFormularioLogin);
document.getElementById("btn__registrarse").addEventListener("click", mostrarFormularioRegistro);

// Declarando variables
var formularioLogin = document.getElementById("form-login");
var formularioRegistro = document.getElementById("form-register");

// FUNCIONES

function mostrarFormularioLogin() {
    formularioLogin.style.display = "block";
    formularioRegistro.style.display = "none";
}

function mostrarFormularioRegistro() {
    formularioLogin.style.display = "none";
    formularioRegistro.style.display = "block";
}

// Asegúrate de que uno de los formularios esté visible inicialmente
mostrarFormularioLogin();

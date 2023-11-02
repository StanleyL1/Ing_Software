    <?php
    session_start();
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Escolarbite</title>
        
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">


        <link rel="stylesheet" href="assets/css/estilos.css">
    </head>
    <body>


        
        <div class="formulario__login" id="form-login">
        <div class="container">
            <div class="row justify-content-center mt-5">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header text-center">
                            <h2>Iniciar Sesión</h2>
                        </div>
                        <div class="card-body">
                            <form action="PhP/login_usuario.php" method="POST">
                                <div class="mb-3">
                                    <label for="usuario" class="form-label">Usuario</label>
                                    <input type="text" class="form-control" id="usuario" name="usuario" required>
                                </div>
                                <div class="mb-3">
                                    <label for="contraseña" class="form-label">Contraseña</label>
                                    <input type="password" class="form-control" id="contraseña" name="contraseña" required>
                                </div>
                                <button type="submit" class="btn btn-primary mx-auto d-block">Iniciar Sesion</button>
            <p class="mt-3 text-center">¿ Aun no tienes cuenta? <a href="#" id="mostrarRegistro">Regístrate aquí</a></p>

            <p class="mt-3 text-center">
        ¿Has olvidado tu contraseña? <a href="#" id="olvidadoContrasena">Recupérala aquí</a>
    </p>
        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="olvidadoContrasena" id="form-recuperacion" style="display: none;">
    <div class="container">
            <div class="row justify-content-center mt-5">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header text-center">
                            <h2>Recuperar Contraseña</h2>
                        </div>
                        <div class="card-body">
                            <form action="procesar_recuperacion.php" method="POST" id="form-recuperacion">
                                <div class="mb-3">
                                    <label for="txtcorreo" class="form-label">Correo Electrónico</label>
                                    <input type="text" class="form-control" id="txtcorreo" name="txtcorreo" required>
                                </div>
                                <button type="submit" class="btn btn-primary btn-block">Recuperar Contraseña</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>



        
    <div class="formulario__register" id="form-register" style="display: none;">
    <div class="container mt-4">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header text-center">
                            <h2>Registrarse</h2>
                        </div>
                        <div class="card-body">
                            <form action="PhP/registro.php" method="POST">
                                <div class="mb-3">
                                    <label for="nombre_completo" class="form-label">Nombre</label>
                                    <input type="text" class="form-control" id="nombre_completo" name="nombre_completo" required>
                                </div>
                                <div class="mb-3">
                                    <label for="correo" class="form-label">Correo Electrónico</label>
                                    <input type="text" class="form-control" id="correo" name="correo" required>
                                </div>
                                <div class="mb-3">
                                    <label for="usuario" class="form-label">Usuario</label>
                                    <input type="text" class="form-control" id="usuario" name="usuario" required>
                                </div>
                                <div class="mb-3">
                                    <label for="contraseña" class="form-label">Contraseña</label>
                                    <input type="password" class="form-control" id="contraseña" name="contraseña" required minlength="6">
                                </div>
                                <button type="submit" class="btn btn-primary mx-auto d-block">Registrarse</button>
                                <p class="mt-3 text-center">¿Ya tienes una cuenta? <a href="#" id="mostrarIniciarSesion">Iniciar Sesion</a></p>

                            </form>
    </div>


            <script src="assets/js/script.js"></script>
            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
        <script>
    document.addEventListener('DOMContentLoaded', function() {
        const mostrarRecuperacionLink = document.getElementById('olvidadoContrasena');
        const formLogin = document.getElementById('form-login');
        const formRecuperacion = document.getElementById('form-recuperacion');

        mostrarRecuperacionLink.addEventListener('click', function(event) {
            event.preventDefault();
            formLogin.style.display = 'none';
            formRecuperacion.style.display = 'block';
        });
    });
    </script>


            
                <script>
        document.addEventListener('DOMContentLoaded', function() {
            const correoInput = document.getElementById('correo');

            correoInput.addEventListener('input', function() {
                const correo = correoInput.value;

                const correoRegex = /^(USAT|USIS|USLE)\w+@ugb.edu.sv$/;

                if (!correoRegex.test(correo)) {
                    correoInput.setCustomValidity('El correo electrónico debe comenzar con USAT, USIS o USLE y terminar en @ugb.edu.sv.');
                } else {
                    correoInput.setCustomValidity('');
                }
            });
        });
    </script>

    <script>
    document.addEventListener('DOMContentLoaded', function() {
        const mostrarRegistroLink = document.getElementById('mostrarRegistro');
        const mostrarIniciarSesionLink = document.getElementById('mostrarIniciarSesion');
        const formLogin = document.getElementById('form-login');
        const formRegister = document.getElementById('form-register');

        mostrarRegistroLink.addEventListener('click', function(event) {
            event.preventDefault();
            formLogin.style.display = 'none';
            formRegister.style.display = 'block';
        });

        mostrarIniciarSesionLink.addEventListener('click', function(event) {
            event.preventDefault();
            formLogin.style.display = 'block';
            formRegister.style.display = 'none';
        });
    });
    </script>






            
    </body>
    </html>
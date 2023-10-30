<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login y Registro </title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <main>
        <div class="contenedor__todo">
            <div class="caja__trasera">
                <div class="caja__trasera-login">
                    <h3>¿ya tienes una cuenta?</h3>
                    <p>inicia sesion para entrar en la pagina</p>
                    <button id="btn__iniciar-sesion">iniciar sesion</button>
                </div>

                <div class="caja__trasera-registro">
                    <h3>¿aun no tengo una cuenta?</h3>
                    <p>registrarse para que puedas iniciar sesion</p>
                    <button id="btn__registrarse">registrarse</button>
                </div>
            </div>

            <div class="contenedor__login-registro">
                <form action="php/login_usuario.php" method = "POST" class="formulario__login">
                    <h2>iniciar sesion</h2>
                    <input type="text" placeholder="Correo electronico" name ="correo">
                    <input type="password" placeholder="Contraseña" name ="contrasena">
                    <button>Entrar</button> 
                </form>
                
                <form action = "php/registro.php" method = "POST" class="form formulario__registrarse">
                    <h2>registrarse</h2>
                    <input type="text"placeholder="Nombre completo" name = "nombre_completo">
                    <input type="text" placeholder="Correo electronico" name = "correo">
                    <input type="text" placeholder="Usuario" name = "usuario">
                    <input type="password" placeholder="Contraseña" name ="contrasena">
                    <button>Registrarse</button>
            </div>
        </div>
    </main>
    <script src="css/scri/script.js"></script>
</body>
</html>
<?php

session_start();

if(isset($_SESSION['usuario'])){
    header("location: bienvenido.php");
}

?>


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
                    <h3>¿Ya tienes una cuenta?</h3>
                    <p>Inicia sesion para entrar en la página</p>
                    <button title="Iniciar Sesión" id="btn__iniciar-sesion">Iniciar Sesión</button>
                </div>

                <div class="caja__trasera-registro">
                    <h3>¿Aún no tienes una cuenta?</h3>
                    <p>Regístrate para que puedas iniciar sesión</p>
                    <button title="Regístrarse" id="btn__registrarse">Regístrarse</button>
                </div>
            </div>

            <!--Formularios-->
            <div class="contenedor__login-registro">
                <!--Login-->
                <form action="php/login_usuario.php" method = "POST" class="formulario__login">
                    <h2>Iniciar Sesión</h2>
                    <input type="text" placeholder="Correo Electronico" name ="correo">
                    <input type="password" placeholder="Contraseña" name ="contrasena">
                    <button title="Entrar" >Entrar</button> 
                </form>
                
                <form action = "php/registro.php" method = "POST" class="formulario__registrarse">
                    <h2>Regístrarse</h2>
                    <input type="text"placeholder="Nombre completo" name = "nombre_completo">
                    <input type="text" placeholder="Correo electronico" name = "correo">
                    <input type="text" placeholder="Usuario" name = "usuario">
                    <input type="password" placeholder="Contraseña" name ="contrasena">
                    <button title="Regístrarse" >Regístrarse</button>
                </form>
            </div>
        </div>
    </main>
    <script src="js/script.js"></script>
    <!--Boton de accessibility-->
    <script class="mx-3">(function(d){var s = d.createElement("script");s.setAttribute("data-account", "tkCHtUA3Ge");s.setAttribute("src", "https://cdn.userway.org/widget.js");(d.body || d.head).appendChild(s);})(document)</script><noscript>Please ensure Javascript is enabled for purposes of <a href="https://userway.org">website accessibility</a></noscript>
        
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./extras/img/logouni.ico" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="./view/style.css">
    <title>Editar</title>
</head>
<body>
    <h1 class="text-center">Encuesta TWD - Editar</h1>
    <form action="" method="get">
        <?php
        foreach($dato as $key => $value):
        foreach($value as $v):
        ?>

        <div class="input-group">
            <label for="nombre">Nombre Completo:</label>
            <input type="text" name="nombre" id="nombre" value="<?php echo $v['nombre']; ?>">
        </div>

        <div class="input-group">
            <label for="telefono">Teléfono:</label>
            <input type="number" name="telefono" id="telefono" value="<?php echo $v['telefono']; ?>">
        </div>

        <div class="input-group">
            <label for="email">Correo:</label>
            <input type="email" name="email" id="email" value="<?php echo $v['email']; ?>">
        </div>

        <div class="input-group">
            <label for="calificacion">1 al 5 Califica la serie (1.Muy mala serie y 5.Excelente serie)</label>
            <input type="number" name="calificacion" id="calificacion" value="<?php echo $v['calificacion']; ?>">
        </div>

        <div class="input-group">
            <label for="personaje">Personaje favorito:</label>
            <input type="text" name="personaje" id="personaje" value="<?php echo $v['personaje']; ?>">
        </div>

        <div class="input-group">
            <label for="recomienda">¿Recomiendas la serie? Justifica</label>
            <input type="text" name="recomienda" id="recomienda" value="<?php echo $v['recomienda']; ?>">
        </div>

        <div class="button-container">
            <button type="submit" name="m" value="guardar">GUARDAR</button>
        </div>

        <input type="hidden" value="<?php echo $v['encuesta_id'] ?>" name="id"> <br>
        <input type="hidden" name="m" value="actualizar">
        <div class="contact-info">

        <div class="info">
            <p align="center" >
                    
                    Gracias por contestar nuestra encuesta,
                    nos ayudas a mejorar cada día.
                    </p>
                    
                </p>            
            </div>

            <div class="info">
                <span><i class="fas fa-phone"></i> +57 3014062595</span>
            </div>

        </div>
        <?php
        endforeach;
        endforeach;
        ?>
    </form>
    
    <script src="https://kit.fontawesome.com/bbff992efd.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <!--Boton de accessibility-->
    <script class="mx-3">(function(d){var s = d.createElement("script");s.setAttribute("data-account", "tkCHtUA3Ge");s.setAttribute("src", "https://cdn.userway.org/widget.js");(d.body || d.head).appendChild(s);})(document)</script><noscript>Please ensure Javascript is enabled for purposes of <a href="https://userway.org">website accessibility</a></noscript>
        
</body>
</html>
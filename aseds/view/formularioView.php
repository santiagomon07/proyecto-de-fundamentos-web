<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./resources/img/zombi.ico" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="./view/style.css">
    <title>Encuesta</title>
</head>

<body>
    <h1 class="text-center">Encuesta TWD</h1>
    <form action="" method="get">

        <div class="input-group">
            <label for="nombre">Nombre Completo:</label>
            <input type="text" name="nombre" id="nombre">
        </div>

        <div class="input-group">
            <label for="telefono">Teléfono:</label>
            <input type="number" name="telefono" id="telefono">
        </div>

        <div class="input-group">
            <label for="email">Correo:</label>
            <input type="email" name="email" id="email">
        </div>

        <div class="input-group">
            <label for="calificacion">1 al 5 Califica la serie (1.Muy mala serie y 5.Excelente serie)</label>
            <input type="number" name="calificacion" id="calificacion">
        </div>

        <div class="input-group">
            <label for="personaje">Personaje favorito:</label>
            <input type="text" name="personaje" id="personaje">
        </div>

        <div class="input-group">
            <label for="recomienda">¿Recomiendas la serie? Justifica</label>
            <input type="text" name="recomienda" id="recomienda">
        </div>

        <div class="button-container">
            <button type="submit" name="m" value="guardar">GUARDAR</button>
        </div>
        <br>
        <div class="button-container">
            <button type="submit" name="m" value="index">MOSTRAR RESPUESTAS</button>
        </div>
        <br>
        <div class="contact-info">

            <div class="info">
                <span><i class="fas fa-map-marker-alt"></i> Avenida 6N <br>No. 28N - 102. <br>Cali - Valle</span>
            </div>

            <div class="info">
                <span><i class="fas fa-phone"></i> +57 602 6667777</span>
            </div>

        </div>
    </form>
    <script src="https://kit.fontawesome.com/bbff992efd.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>

</html>
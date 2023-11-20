<?php

session_start();

if(!isset($_SESSION['usuario'])){
    echo '
    <script> 
        alert("Por favor debes iniciar sesion");
        window.location = "index.php";
    </script>';
    session_destroy();
    die();
}

?>
<!DOCTYPE html>
<html lang="es">

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

        <title>The Walking Dead</title>
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <link rel="stylesheet" href="./css/style2.css">
        <link rel="stylesheet" href="./ejercicio_files/cls.css">
        <link rel="shortcut icon" href="./resources/img/zombi.ico"
            type="image/x-icon">
        <link rel="stylesheet" type="text/css"
            href="./ejercicio_files/230223.css">
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9"
            crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
        <link  rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    </head>
    <iframe id="google_esf" name="google_esf"
        src="./ejercicio_files/zrt_lookup.html" style="display: none;"></iframe>

    <body aria-hidden="false" style="--fsAncillary: var(--use);" >
        <div id="Outer">

            <div id="Inner">

                <h1>THE WALKING DEAD</h1>
                <h5>Una serie para verdaderos fanaticos de los muertos
                    vivientes.</h5>

                <hr>

                <div id="Content">
                    <div id="bannerL" style><!-- Tag ID: lipsumcom_left_siderail -->
                        <div align="center" data-freestar-ad="__300x600"
                            id="lipsumcom_left_siderail"
                            name="lipsumcom_left_siderail"
                            data-google-query-id="CJKu--j2j4EDFSmBWgUd0KoLtA">

                        </div>
                    </div>
                    <div id="bannerR" style><!-- Tag ID: lipsumcom_right_siderail -->
                        <div align="center" data-freestar-ad="__300x600"
                            id="lipsumcom_right_siderail"
                            name="lipsumcom_right_siderail"
                            data-google-query-id="CLDZ9-j2j4EDFSmBWgUd0KoLtA">

                        </div>
                    </div>
                    <div id="Panes">
                        <div>
                            <h2>¿Qué es?</h2>
                            <p><strong>The Walking Dead</strong> es una serie de
                                televisión estadounidense de drama horror
                                postapocalíptico de <a
                                    href="https://www.amc.com/shows/the-walking-dead--1002293">AMC</a>
                                basada
                                en la <a
                                    href="https://thewalkingdead.fandom.com/es/wiki/The_Walking_Dead_(c%C3%B3mic)">serie
                                    de cómics homónima</a> de Robert Kirkman,
                                Tony Moore y
                                Charlie Adlard. La serie presenta un gran elenco
                                como supervivientes de un apocalipsis zombi,
                                tratando de mantenerse con vida bajo la amenaza
                                casi constante de ataques de los zombis sin
                                conciencia, coloquialmente conocidos como
                                «caminantes». Sin embargo, con la caída de la
                                humanidad, estos supervivientes también
                                enfrentan conflictos con otros supervivientes
                                que han
                                formado grupos y comunidades con sus propios
                                conjuntos de leyes y morales, lo que a menudo
                                conduce a conflictos hostiles entre las
                                comunidades humanas.</p>
                            <img id="twd" src="./resources/img/TWD.jpg"
                                alt="TWD.jpg">
                        </div>
                        <div>
                            <h2>¿En qué plataformas la encuentro?</h2>
                            <p> - La serie The Walking Dead está en Disney
                                Plus, donde tienen 11 temporadas.
                                <br>
                                - está disponible en la plataforma Netflix,
                                donde encontrarás un total de 10 temporadas.
                            </p>

                            <video width="430" height="290" autoplay controls>
                                <source src="./resources/video/videotwd.mp4"
                                    type="video/mp4">
                                <!-- Texto alternativo -->
                            </video>

                        </div><br>
                        <div>
                            <h2>¿De dónde viene?</h2>
                            <p> The Walking Dead se ha convertido en una de las
                                series más exitosas de la generación,
                                trayendo de vuelta a uno de los personajes del
                                mundo de terror más espeluznantes de
                                todos los tiempos, los zombies, que son el
                                centro de esta increíble historia de sci-fi.
                                A lo largo de más de 10 años de trayectoria, la
                                serie creada por Robert Kirkman se ha
                                convertido en una producción de culto, y abrió
                                la puerta para que las series y
                                películas de zombies vuelvan a recuperar su
                                gloria en el mundo del entretenimiento en
                                televisión.</p>
                            <a
                                href="https://es.wikipedia.org/wiki/Robert_Kirkman"><img
                                    id="twd" src="./resources/img/creador.jpg"
                                    alt="TWD.jpg">
                            </a>

                        </div>
                        <div>
                            <h2>Personajes más iconicos actualmente</h2>
                            <div class="row">
                                <div class="col-4">
                                    <div class="list-group" id="list-tab"
                                        role="tablist">
                                        <a
                                            class="list-group-item list-group-item-action active"
                                            id="list-rick-list"
                                            data-bs-toggle="list"
                                            href="#list-rick" role="tab"
                                            aria-controls="list-rick">Rick
                                            Grimes</a>
                                        <a
                                            class="list-group-item list-group-item-action"
                                            id="list-darl-list"
                                            data-bs-toggle="list"
                                            href="#list-daryl" role="tab"
                                            aria-controls="list-daryl">Daryl
                                            Dixon</a>
                                        <a
                                            class="list-group-item list-group-item-action"
                                            id="list-negan-list"
                                            data-bs-toggle="list"
                                            href="#list-negan" role="tab"
                                            aria-controls="list-negan">Negan
                                            Smith</a>
                                        <a
                                            class="list-group-item list-group-item-action"
                                            id="list-maggie-list"
                                            data-bs-toggle="list"
                                            href="#list-maggie" role="tab"
                                            aria-controls="list-maggie">Maggie
                                            Greene</a>
                                        <a
                                            class="list-group-item list-group-item-action"
                                            id="list-morgan-list"
                                            data-bs-toggle="list"
                                            href="#list-morgan" role="tab"
                                            aria-controls="list-morgan">Morgan
                                            Jones</a>
                                        <a
                                            class="list-group-item list-group-item-action"
                                            id="list-michonne-list"
                                            data-bs-toggle="list"
                                            href="#list-michonne" role="tab"
                                            aria-controls="list-michonne">Michonne</a>
                                    </div>
                                </div>
                                <div class="col-8">
                                    <div class="tab-content" id="nav-tabContent">
                                        <div class="tab-pane fade show active"
                                            id="list-rick" role="tabpanel"
                                            aria-labelledby="list-rick-list">
                                            <img id="rick"
                                                src="./resources/img/rick.webp"
                                                alt="rick.webp"><br>
                                            <a
                                                href="https://thewalkingdead.fandom.com/es/wiki/Rick_Grimes">Rick
                                                Grimes</a> era el valeroso líder
                                            de un intrépido grupo de
                                            supervivientes del apocalipsis zombi
                                            y el principal precursor de la
                                            reconstrucción de la civilización.
                                            <br>
                                            En el principio, Rick era un policía
                                            de pueblo que despertó de un coma en
                                            un mundo plagado por muertos
                                            vivientes y que por fortuna encontró
                                            a su familia con
                                            vida en un campamento en las afueras
                                            de la ciudad de Atlanta.</div>
                                        <div class="tab-pane fade"
                                            id="list-daryl" role="tabpanel"
                                            aria-labelledby="list-darl-list">
                                            <img id="daryl"
                                                src="./resources/img/daryl.webp"
                                                alt="daryl.webp"><br>
                                            <a
                                                href="https://thewalkingdead.fandom.com/es/wiki/Daryl_Dixon">Daryl
                                                Dixon</a> es un experimentado
                                            rastreador y survivalista del
                                            apocalipsis zombie que
                                            forma parte del grupo de
                                            supervivientes formado por Rick
                                            Grimes. <br>
                                            Aunque nunca abandonó su fachada de
                                            lobo solitario, Daryl se volvió
                                            sumamente apegado a sus compañeros
                                            de equipo y demostró ser un valioso
                                            aliado en un
                                            mundo consumido por el caos. Durante
                                            los momentos de desesperación
                                            causados por el Gobernador de
                                            Woodbury, se levantó como el segundo
                                            al mando del grupo y
                                            también se consagró como el hombre
                                            de confianza de Rick.
                                        </div>
                                        <div class="tab-pane fade"
                                            id="list-negan" role="tabpanel"
                                            aria-labelledby="list-negan-list">
                                            <img id="negan"
                                                src="./resources/img/negan.webp"
                                                alt="negan.webp"><br>
                                            <a
                                                href="https://thewalkingdead.fandom.com/es/wiki/Negan_Smith">Negan
                                                Smith</a>
                                            es un superviviente del apocalipsis
                                            zombie y el infame líder de los
                                            Salvadores. <br>
                                            Al mando de un grupo de hombres
                                            rudos y peligrosos, estos
                                            mantuvieron por mucho tiempo en
                                            zozobra a las comunidades que
                                            rodeaban Washington, D.C.,
                                            obligándolos
                                            a pagar altísimos tributos a cambio
                                            de dejarlos vivir.</div>
                                        <div class="tab-pane fade"
                                            id="list-maggie" role="tabpanel"
                                            aria-labelledby="list-maggie-list">
                                            <img id="maggie"
                                                src="./resources/img/maggie.jpg"
                                                alt="maggie.jpg"><br>
                                            <a
                                                href="https://thewalkingdead.fandom.com/es/wiki/Maggie_Greene">Maggie
                                                Greene</a>
                                            es una de las sobrevivientes del
                                            apocalipsis zombie. Maggie vivía con
                                            su padre y su hermana Beth en una
                                            granja apartada de la ciudad. Cuando
                                            Rick apareció
                                            en su puerta un día con un
                                            gravemente herido Carl en brazos,
                                            Maggie tuvo la misión de encontrar a
                                            Lori para contarle lo que estaba
                                            pasando.
                                        </div>
                                        <div class="tab-pane fade"
                                            id="list-morgan" role="tabpanel"
                                            aria-labelledby="list-morgan-list">
                                            <img id="morgan"
                                                src="./resources/img/morgan.jpg"
                                                alt="morgan.jpg"><br>
                                            <a
                                                href="https://thewalkingdead.fandom.com/es/wiki/Morgan_Jones">Morgan
                                                Jones</a>
                                            es un superviviente del apocalípsis
                                            zombie al que Rick Grimes conoció al
                                            poco tiempo de despertar de su coma
                                            en el hospital de King County. <br>
                                            Después de que su esposa fuera
                                            mordida por un caminante mientras se
                                            dirigían a Atlanta, Morgan y su hijo
                                            Duane quedaron varados en King
                                            County y se
                                            instalaron en una casa abandonada.
                                            Habiendo salvado a Rick después de
                                            encontrarlo deambulando desprevenido
                                            por las calles del vecindario,
                                            Morgan le reveló
                                            todo lo que necesitaba saber sobre
                                            los muertos vivientes y se ganó su
                                            gratitud eterna.
                                        </div>
                                        <div class="tab-pane fade"
                                            id="list-michonne" role="tabpanel"
                                            aria-labelledby="list-michonne-list">
                                            <img id="michonne"
                                                src="./resources/img/michonne.webp"
                                                alt="michonne.webp"><br>
                                            <a
                                                href="https://thewalkingdead.fandom.com/es/wiki/Michonne">Michonne</a>
                                            es una sobreviviente del apocalipsis
                                            zombie y una de los miembros del
                                            grupo de Rick Grimes y una de las
                                            lideres de Alexandria tras la
                                            desaparición de su pareja. <br>
                                            Antes del advenimiento de los
                                            muertos vivientes, Michonne vivía
                                            con su novio Mike y su hijo Andre en
                                            un loft en el centro de Atlanta.
                                            Tras la caída de la
                                            civilización ella aprendió a manejar
                                            una katana y se volvió una feroz
                                            guerrera, aunque eventualmente Andre
                                            fue asesinado y Mike mordido durante
                                            un ataque
                                            de caminantes.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>

                        <hr>
                        <div>
                        <a title="Nueva Encuesta" type="button" class="btn btn-success" href="index.php?m=nuevo" style="margin-right: 965px;">ENCUESTA</a>
                        <p></p>
                        </div>
                        <table id="table" class="table table-bordered table-striped dataTable dtr-inline border-dark" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>NOMBRE</th>
                                        <th>TELÉFONO</th>
                                        <th>CORREO</th>
                                        <th>CALIFICACIÓN</th>
                                        <th>PERSONAJE FAVORITO</th>
                                        <th>RECOMENDACIÓN</th>
                                        <th>ACCIÓN</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                if(!empty($dato)):
                                    foreach($dato as $key => $value)
                                        foreach($value as $v):?>
                                        <tr>
                                            <td><?php echo $v['encuesta_id'] ?> </td>
                                            <td><?php echo $v['nombre'] ?> </td>
                                            <td><?php echo $v['telefono'] ?> </td>
                                            <td><?php echo $v['email'] ?> </td>
                                            <td><?php echo $v['calificacion'] ?> </td>
                                            <td><?php echo $v['personaje'] ?> </td>
                                            <td><?php echo $v['recomienda'] ?> </td>
                                            <td>
                                                <a title="Editar" type="button" class="btn btn-success" href="index.php?m=editar&id=<?php echo $v['encuesta_id']?>"><i class="fas fa-edit"></i></a>
                                                <a title="Eliminar" type="button" class="btn btn-danger" href="index.php?m=eliminar&id=<?php echo $v['encuesta_id']?>" onclick="return confirm('¿ESTA SEGURO?'); false"><i class="fas fa-trash-alt"></i></a>
                                                
                                            </td>
                                        </tr>
                                        <?php endforeach; ?>
                                <?php else: ?>
                                    <tr>
                                        <td colspan="3">NO HAY REGISTROS</td>
                                    </tr>
                                <?php endif ?>
                                </tbody>
                        </table>
                        <hr>
                        <?php
                        require_once "./view/grafica.php";
                        ?>
                    </div>
                    <hr>
                    <div class="boxed">Fundamentos Web - <strong>4303A</strong></div>
                </div>

                <hr>

                <div class="boxed"><a style="text-decoration:none"
                        href="mailto:mail@mail.com">solucionesprogramadas@gmail.com</a><br><a
                        style="text-decoration:none" rel="nofollow"
                        href="https://www.uniajc.edu.co/">Universidad Antonio
                        José Camacho</a>

                    <a style="cursor:pointer" class="change-consent">|Diseñado
                        por estudiantes</a>

                </div>

            </div>
            
            <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
            crossorigin="anonymous"></script>
            <script src="https://kit.fontawesome.com/bbff992efd.js" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
            <!--Boton de accessibility-->
            <script class="mx-3">(function(d){var s = d.createElement("script");s.setAttribute("data-account", "tkCHtUA3Ge");s.setAttribute("src", "https://cdn.userway.org/widget.js");(d.body || d.head).appendChild(s);})(document)</script><noscript>Please ensure Javascript is enabled for purposes of <a href="https://userway.org">website accessibility</a></noscript>
        
        
        </body>

    </html>
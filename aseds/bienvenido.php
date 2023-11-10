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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bienvenido</title>
    <link rel="stylesheet" href="cc2/style.css">
</head>
<body id="cr7" aria-hidden="false" style="--fsAncillary: var(--use);">
    <div id="Outer">
        


        <div id="Inner">

            <h1>El Mejor Futbolista De Todos Los tiempos </h1>
            <h4>"A lo largo de la histria de la humanidad el futbol se ha convertido en uno de los mayores eventos de
                atracion..."</h4>
            <h5>"en este documento vamos a ver a quien yo considero como el mas grande de la historia del futbol"</h5>


            <hr>

            <div id="Content">
                <div id="bannerL" style=""><!-- Tag ID: lipsumcom_left_siderail -->
                    <div align="center" data-freestar-ad="__300x600" id="lipsumcom_left_siderail"
                        name="lipsumcom_left_siderail" data-google-query-id="CJKu--j2j4EDFSmBWgUd0KoLtA">


                    </div>
                </div>
                <div id="bannerR" style=""><!-- Tag ID: lipsumcom_right_siderail -->
                    <div align="center" data-freestar-ad="__300x600" id="lipsumcom_right_siderail"
                        name="lipsumcom_right_siderail" data-google-query-id="CLDZ9-j2j4EDFSmBWgUd0KoLtA">


                    </div>
                </div>
                <div id="Panes">
                    <div>
                        <h2>Aveiro Dos santos Cristiano Ronaldo</h2>
                        <p><strong>Cristiano Ronaldo</strong> es un futbolista portugués que juega como delantero y es
                            considerado uno de los mejores del mundo.
                            Nació en Funchal, Madeira, el 5 de febrero de 1985.
                            Ha jugado en varios clubes europeos, como el Manchester United, el Real Madrid y la Juventus
                            F.C.
                            Es el capitán y el máximo goleador de la selección de Portugal.
                            Ha ganado tres Balones de Oro y otros numerosos premios individuales y colectivos</p>
                        <a href="https://www.youtube.com/watch?v=MWa-OXLz3dI">
                            <h7>Histori de Cristiano Ronaldo</h7>
                        </a>
                        <img src="imagen/Ronaldo/OIP.jfif" alt="">
                    </div>
                    <div>
                        <h2>Inicios en el Fútbol</h2>
                        <p><strong>Cristiano Ronaldo:</strong> comenzó a jugar al fútbol desde una edad temprana en su
                            ciudad natal de Funchal.
                            Su talento sobresaliente se destacó rápidamente, y a los 12 años se mudó a Lisboa para
                            unirse a la Academia Sporting de Lisboa.</p>
                        <p> <strong>Debut profesional</strong> Ronaldo hizo su debut profesional con el Sporting de
                            Lisboa en 2002.
                            Su impresionante desempeño atrajo la atención de los principales clubes europeos.
                        </p>
                        <video width="430" height="290" autoplay controls>
                            <source
                                src="./videos/ronaldo/El primer partido oficial de CRISTIANO RONALDO con Sporting Lisboa 2002 - DEBUT de CR7 (17 años).mp4"
                                type="video/mp4">
                        </video>
                    </div><br>
                </div>
                
                    <div class="boxed" style="font-size: 25px;"><strong>Paso por clubes</strong></div>
                    
                    <div id="Panes">
                    <div>
                        
                        <p><strong>Sporting de Lisboa</strong> aqui hizo su debut en el 2002 en la primera division de
                            la liga portuguesa. Gracias a su desempeño un año despues lo ficho el Manchester United.  </p>
                        <img id="sporting" src="imagen/Ronaldo/descarga1.jfif" alt="">
                    </div>

                    <div>
                        <p><strong>Manchester United:</strong>En 2003, Cristiano Ronaldo se unió al Manchester United en
                            la Premier League de Inglaterra.
                            Durante su tiempo en el club, ganó tres títulos de la Premier League, una Liga de Campeones
                            de la UEFA y su primer Balón de Oro en 2008. </p>
                        <img id="mancher" src="imagen/Ronaldo/manchess.jpg" alt="">
                    </div>
                    <div>
                        <p><strong>Real Madrid</strong> En 2009, se transfirió al Real Madrid por una entonces cifra
                            récord mundial de 94 millones de euros.
                            Durante su estancia en el Real Madrid, se convirtió en el máximo goleador histórico del club
                            y ganó numerosos títulos, incluyendo cuatro Ligas de Campeones de la UEFA y cuatro Balones
                            de Oro adicionales.</p>
                        <img id="real" src="imagen/Ronaldo/real.jpg" alt="">
                    </div>
                    <div>
                        <p><strong>Juventus</strong>En 2018, Ronaldo se unió a la Juventus en la Serie A italiana.
                            Continuó demostrando su calidad y liderazgo en el campo.
                        </p>
                        <img id="juventus" src="imagen/Ronaldo/juventus.jfif" alt="">
                    </div>
                    <div>
                        <p><Strong>Regreso al Manchester United</Strong>En agosto de 2021, Cristiano Ronaldo regresó al
                            Manchester United, donde se convirtió en una figura clave del equipo una vez más.
                        </p>
                        <img id="regreso" src="imagen/Ronaldo/regreso.jfif" alt="">
                    </div>
                    <div>
                       
                    </div><br>
                </div>
                
                <div class="boxed" style="font-size: 25px;"><strong>Paso Por La Seleccion De Portugal</strong></div>
                <div id="Panes">
                    <p>Cristiano Ronaldo es una figura icónica en la selección nacional de Portugal y ha tenido una carrera excepcional representando a su país en competiciones internacionales. 
                        a sus 18 años aparecio por primera vez con la seleccion mayor el dia 20 de agosto del 2003. hoy despues de 20 años es el maximo goleador historico de su seleccion.
                        a demas con sus 123 goles es el maximo goleador historico de selecciones a nivel mundial. </p>
                        <p>esta seleccion antes de la llegada del bicho no habia ganado ningun titulo importante con buenos jugadores como <Strong>deco, figo, ricardo, Eusebio. ETC..</Strong>
                        para el año 2016 portugal conquista su primera Eurocopa en su historia de la mano de <Strong>Ronaldo como maxima figura</Strong>. siendo este el jugador mas influyente en el torneo.</p>
                    </p>
                    <p>con su seleccion ha ganado: </p>
                        <p>una Eurocopa (2016)</p>
                        <p>una  UEFA Nations League (2018-2019)</p>
                        <p>
                        el luso es considerado el mejor jugador de la historia de portugal.
                    </p>
                    <div>
                    <a href="https://www.youtube.com/watch?v=1HWWtIkRnfA">
                        <h7>camino a la gloria (Eurocopa 2016)</h7>
                    </a>
                </div>
                    <video width="430" height="290" autoplay controls>
                        <source
                            src="./videos/ronaldo/La GLORIOSA Eurocopa de Cristiano Ronaldo _ HISTORIA COMPLETA.mp4"
                            type="video/mp4">
                    </video>
                </div>
           
            <div class="boxed">Fundamentos Wed - <strong>4303A</strong></div>
        </div>

        <hr>

        <div class="boxed"><a style="text-decoration:none" href="mailto:portacantante14@mail.com">portacantante14@mail.com</a><br><a
                style="text-decoration:none" rel="nofollow" href="https://es.wikipedia.org/wiki/Cristiano_Ronaldo">wikipedia</a>
           
        </div>





</html>
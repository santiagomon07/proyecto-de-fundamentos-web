<?php
require_once "./php/conexion.php";
?>
<html>

<head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load("current", {
            packages: ["corechart"]
        });
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ['Task', 'Hours per Day'],
                <?php
                $SQL ="SELECT * FROM encuesta";
                $consulta = mysqli_query($conexion, $SQL);
                while ($resultado = mysqli_fetch_assoc($consulta)){
                    echo "['".$resultado['nombre']."',".$resultado['calificacion']."],";
                }
                ?>
            ]);

            var options = {
                title: 'Gráfica calificaciones',
                is3D: true,
            };

            var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
            chart.draw(data, options);
        }
    </script>
</head>

<body>
    <div id="piechart_3d" style="width: 900px; height: 500px;"></div>
</body>

</html>
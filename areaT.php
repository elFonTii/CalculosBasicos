<!DOCTYPE html>
<html>
    <head>
        <title>Resultado de la operación</title>
        <link rel="stylesheet" href="estilos.css">
    </head>
    <body>
        <br><br><br><h3>OPERACIÓN REALIZADA CON ÉXITO</h3><br><br>

        <h3>
            <?php
                include("clases.php");
                $base=$_GET['B'];
                $altura=$_GET['A'];
        
                echo "El área de su rectángulo es: " .Calculos::areaTriangulo($base,$altura)."cm";
            ?>
        </h3>
        
    </body>
</html>
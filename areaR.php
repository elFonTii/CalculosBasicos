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
                $largo=$_GET['Largo'];
                $ancho=$_GET['Ancho'];
        
                echo "El área de su rectángulo es: " .Calculos::areaRectangulo($largo,$ancho)."cm";
            ?>
        </h3>
        
    </body>
</html>
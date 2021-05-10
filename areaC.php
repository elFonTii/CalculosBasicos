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
                $lado=$_GET['L'];  
        
                echo "El área de su cuadrado es: " .Calculos::areaCuadrado($lado)."cm";
            ?>
        </h3>
        
    </body>
</html>
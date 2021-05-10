<!DOCTYPE html>
<html>
    <head>
        <title>Resultado de la operación</title>
        <link rel="stylesheet" href="estilos.css">
    </head>
    <body>
        <br><br><br>
        <h3>
            <?php
                include("clases.php");
                $Num1=$_GET['Num1'];
        
                echo "" .Calculos::RaizCuadrada($Num1);
            ?>
        </h3>
        
    </body>
</html>
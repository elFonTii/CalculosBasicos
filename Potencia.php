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
                $Num=$_GET['Num'];
                $exponente=$_GET['Exponente'];
        
                echo (Calculos::Potencia($Num,$exponente));
            ?>
        </h3>
        
    </body>
</html>
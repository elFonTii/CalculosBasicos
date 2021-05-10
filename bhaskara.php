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
                $a=$_GET['a'];
                $b=$_GET['b'];
                $c=$_GET['c'];
        
                echo (Calculos::FormulaBhaskara($a,$b,$c));
            ?>
        </h3>
        
    </body>
</html>
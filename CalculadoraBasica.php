<!DOCTYPE html>
<html>
    <head>
        <title>Resultado de la operación</title>
        <link rel="stylesheet" href="estilos.css">
    </head>

    <body>
    <div class="result">
        <br><br><br><h1>OPERACIÓN REALIZADA CON ÉXITO</h1><br><br>
            <hr>
            <br>
        <div>
            <h3>
                <?php
    |           //Incluimos el archivo en el cual tenemos nuestra clase con sus funciones.
                include("clases.php");

                /*
                    Utilizamos la funcion isset para comprobar si una variable está colocada, en este caso si el botón con el nombre calcular es presionado entonces realizamos
                    un bucle switch tomando en cuenta el valor que fue almacenado desde el formulario.

                    Como resultado tenemos la devolución de la operación correspondiente a la selección del usuario.
                */
                
                if(isset($_REQUEST['calcular'])){
                $num1=$_REQUEST['N1'];
                $num2=$_REQUEST['N2'];
                $op=$_REQUEST['Opciones'];


                    switch($op){
                        case 0: echo "<h4>RESULTADO DE LA OPERACIÓN (SUMA)</h4><br><br><h2>".$num1. "+". $num2. "=" .Calculos::sumar($num1, $num2)."</h2>"; break;
                        case 1: echo "<h4>RESULTADO DE LA OPERACIÓN (RESTA)</h4><br><br><h2>".$num1. "-". $num2. "=" .Calculos::restar($num1, $num2)."</h2>"; break;
                        case 2: echo "<h4>RESULTADO DE LA OPERACIÓN (MULTIPLICACIÓN)</h4><br><br><h2>".$num1. "x". $num2. "=" .Calculos::multiplicar($num1, $num2)."</h2>"; break;
                        case 3: echo "<h4>RESULTADO DE LA OPERACIÓN (DIVISIÓN)</h4><br><br><h2>".$num1. "/". $num2. "=" .Calculos::dividir($num1, $num2)."</h2>"; break;
                    }
                }
                ?>
            </h3>
        </div>
    </div>
    </body>

</html>
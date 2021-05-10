<!DOCTYPE html>
<html lang="es-UY">
    <meta charset=UTF-8>
    <head>
        <title>Laboratorio 1</title>
        <link rel="stylesheet" href="estilos.css">
        <link rel="icon" href="page_logo.png" type="image/png"/>
    </head>
    <div class="titleText">
    <img src="page_logo.png" alt="main_logo">
    <h1>LABORATORIO 1</h1><br>
    </div>
<div class="mainContainer">
    <h2>PASO 1</h2><br><br>

    <h4>Calculadora:</h4><br>

        <div id="contenedor1">
            <form action="CalculadoraBasica.php" method="REQUEST">
                <input type="text" name="N1" placeholder="Ingresar primer valor">
                <input type="text" name="N2" placeholder="Ingresar segundo valor">
                <select class="select" name="Opciones">
                    <option value="0">Sumar</option>
                    <option value="1">Restar</option>
                    <option value="2">Multiplicar</option>
                    <option value="3">Dividir</option>
                </select>
                <input type="submit" name="calcular" value="Calcular">
            </form>
        </div><br>

        <h2>PASO 2</h2><br><br>

        <h4>Área del cuadrado:</h4><br><br>
        <div id="contenedor2">
            <form action="areaC.php" method="GET">
                <input type="text" name="L" placeholder="Ingresar valor del lado">
                <input type="submit" value="Calcular">
            </form>
        </div><br>

        <h4>Área del rectángulo:</h4><br><br>
        <div id="contenedor3">
            <form action="areaR.php" method="GET">
                <input type="text" name="Largo" placeholder="Ingresar valor del largo">
                <input type="text" name="Ancho" placeholder="Ingresar valor del ancho">
                <input type="submit" value="Calcular">
            </form>
        </div><br>

        <h4>Área de la circunferencia:</h4><br><br>
        <div id="contenedor4">
            <form action="areaCir.php" method="GET">
                <input type="text" name="R" placeholder="Ingresar valor de su radio">
                <input type="submit" value="Calcular">
            </form>
        </div><br>

        <h4>Área del triángulo:</h4><br><br>
        <div id="contenedor5">
            <form action="areaT.php" method="GET">
                <input type="text" name="B" placeholder="Ingresar valor de la base">
                <input type="text" name="A" placeholder="Ingresar valor de la altura">
                <input type="submit" value="Calcular">
            </form>
        </div><br>

        <h2>PASO 3</h2><br><br>

        <h4>Ecuación cuadrática:</h4><br><br>
        <form action="bhaskara.php" method="GET">
            <input type="text" name="a" placeholder="Ingresar el valor de a">
            <input type="text" name="b" placeholder="Ingresar el valor de b">
            <input type="text" name="c" placeholder="Ingresar el valor de c">
            <input type="submit" value="Calcular">
        </form><br>

        <h4>Raíz cuadrada:</h4><br><br>
        <form action="RaizCuadrada.php" method="GET">
            <input type="text" name="Num1" placeholder="Ingresar un valor">
            <input type="submit" value="Calcular">
        </form><br>

        <h4>Potencia de un número:</h4><br><br>
        <form action="Potencia.php" method="GET">
            <input type="text" name="Num" placeholder="Ingrese un valor base">
            <input type="text" name="Exponente" placeholder="Ingrese su exponente">
            <input type="submit" value="Calcular">
        </form><br><br>
        
    </div>
    <div class="embedCode">
    <script src="https://emgithub.com/embed.js?target=https%3A%2F%2Fgithub.com%2FelFonTii%2FCalculosBasicos%2Fblob%2Fmain%2Findex.html&style=github&showBorder=on&showLineNumbers=on&showFileMeta=on&showCopy=on"></script>
    </div>
</html>
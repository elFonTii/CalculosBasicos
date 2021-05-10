<?php

class Calculos{


    // Funcion - SUMA
    public static function sumar($num1,$num2)
    {
        $suma=$num1+$num2;
        return $suma;
    }


    // Funcion - RESTA
    public static function restar($num1,$num2)
    {
        $resta=$num1-$num2;
        return $resta;
    }


    // Funcion - MULTIPLICACIÓN
    public static function multiplicar($num1,$num2)
    {
        $multiplicacion=$num1*$num2;
        return $multiplicacion;
    }


    // Funcion - DIVISION
    public static function dividir($num1,$num2)
    {
        $division=$num1/$num2;
        return $division;
    }


    // Funcion - AREA DEL CUADRADO
    public static function areaCuadrado($lado)
    {
        $areaC=$lado*$lado;
        return $areaC;
    }


    // Funcion - AREA DEL RECTANGULO
    public static function areaRectangulo($largo,$ancho)
    {
        $areaR=$largo*$ancho;
        return $areaR;
    }
    

    // Funcion - AREA DEL CIRCULO
    public static function areaCircunferencia($radio)
    {
        $res1=$radio*$radio;
        $areaCir=3.14*$res1;
        return $areaCir;
    }


    // Funcion - AREA DEL TRIANGULO
    public static function areaTriangulo($base,$altura)
    {
        $R1=$base*$altura;
        $areaR=$R1/2;
        return $areaR;
    }


    //Funcion - FUNCION CUADRÁTICA
    public static function FormulaBhaskara($a,$b,$c)
    {
        $r1=($b*$b)-(4*$a*$c);
        $r2=2*$a;
        if($r1 < 0){
            print("Su raices son indeterminadas.");
        }
        else {

            $rC=sqrt($r1);
            $x1=(-$b+$rC)/$r2;
            $x2=(-$b-$rC)/$r2;

            print("Sus raices son: ".$x1." ".$x2);

        }
    }
    

    //Funcion - CÁLCULO DE RAIZ CUADRADA
    public static function RaizCuadrada($Num1)
    {
        if($Num1 < 0){
            print("El valor ingresado es negativo, por lo tanto no se puede calcilar la raiz cuadrada.");
        }  
        else {

            $raizCuadrada=sqrt($Num1);
            print("Su raiz cudrada es: ".$raizCuadrada);
        }
    }


    //Funcion - CÁLCULO DE POTENCIA
    public static function Potencia($Num,$exponente)
    {
        $potencia = pow($Num,$exponente);
        print("La potencia es: ". $potencia);
    }
}
?>
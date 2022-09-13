<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <h1>Trabajo practico N°1</h1>

     <?php
     echo "Hola mundo";
     ?>
     <br>
     <br>
     <?php
     $mensaje = "Hola mundo";
     echo $mensaje;
     ?>

     <br>
     <br>

     <?php
     $num1=5;
     $num2=10;
     $resultado=0;
     $resultado = $num1 + $num2;
     echo "5 + 10 ","="," ", $resultado;
     ?>

     <br>
     <br>

     <?php
     $num1=10;
     $num2=5;
     $resultado=0;
     $resultado = $num1 - $num2;
     echo "10 - 5 ","="," ", $resultado;
     ?>

     <br>
     <br>

     <?php
     $num1=10;
     $num2=5;
     $resultado=0;
     $resultado = $num1 * $num2;
     echo "10 * 5 ","="," ", $resultado;
     ?>

     <br>
     <br>

     <?php
     $num1=10;
     $num2=5;
     $resultado=0;
     $resultado = $num1 / $num2;
     echo "10 / 5 ","="," ", $resultado;
     ?>

     <br>
     <br>

     <?php
     $num1=10;
     $num2=5;
     $resultado=0;
     $resultado = $num1 % $num2;
     echo "resto 10 / 5 ","="," ", $resultado;
     ?>

     <br>
     <br>

     <?php
     $celsius = 20;
     $fahrenheit = ($celsius * 9 / 5) + 32;
     echo "20°Celcisius a ",$fahrenheit,"°"," ","Fahrenheit";
     ?>

     <br>
     <br>

     <?php
     $b=18;
     $a=21;
     $p=0;
     $A=0;
     $p=(2 * $a) + (2 * $b);
     $A=($a * $b);
     echo "El perimetro de un rectangulo es"," ",$p,"cm.";
     ?>

     <br>
     <br>

     <?php
     $b=18;
     $a=21;
     $p=0;
     $A=0;
     $A=($a * $b);
     echo "El area de un rectangulo es"," ",$A,"cm.";
     ?>

     <br>
     <br>
     <br>

     <?php
     define("pi","3.1416");
     $r=30;
     $p=0;
     $p=($r + $r) * pi;
     echo "El perimetro de un circulo es"," ",$p,"cm.";
     ?>

     <br>
     <br>

     <?php
     
     $r=30;
     $A=0;
     $A=($r * $r) * pi;
     echo "El area de un circulo es ", " ",$A,"cm.";
     ?>

  </body>
</html>

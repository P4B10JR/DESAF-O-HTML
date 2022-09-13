<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <H2>TP2_Backend.php</H2>

  <hr><br>

  <li>Ejercicio 1: <br><br>
  <?php
  $num=2;
  if ($num >= 1) {
    echo $num," Es un numero positivo";
  }?><br><br><hr><br>

  <li>Ejercicio 2: <br> <br>
  <?php
  $num=5;
  if ($num >1 && $num<10) {
    echo $num, " Es mayor a 1 y menor a 10";
  }?><br><br><hr><br>

  <li>Ejercicio 3: <br> <br>
  <?php
  $num=3;
  if ($num >10 or $num <2) {
    echo $num, " Es menor a 10";
  } else {
    echo $num, " Es mayor a 2";
  }?><br><br><hr><br>

  <li>Ejercicio 4: <br> <br>
  <?php
  $num1=5;
  $num2=10;
  $resultado=0;
  if ($num1 > $num2) {
    echo "El resultado de la suma es ",$resultado=($num1 + $num2),"."," ";
    echo "El resultado de la resta es ",$resultado=($num1 - $num2),"."," ";
  } elseif ($num2 > $num1) {
     echo "El resultado de la multiplicacion es ",$resultado=($num2 * $num1),"."," ";
     echo "El resultado de la division es ",$resultado=($num2 / $num1),"."," ";
     echo "El resto de la division es ",$resultado=($num2 % $num1),"."," ";
  } elseif ($num1 == $num2) {
    echo " Los numero ingresados son iguales";
   }?>
</body>
</html>

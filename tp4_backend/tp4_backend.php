<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h2>tp4_backend.php</h2> <br>
    <hr>
    <li>Ejercicio 1: <br><br>
    <?php
    $i=1;
    while ($i <= 100) {
      echo $i .", ";
      $i++;
    }
     ?>
     <hr>
     <li>Ejercicio 2: <br><br>
    <?php
    $i=100;
    do {
      echo $i .", ";
      $i--;
    } while ($i >= 1)
     ?>
     <hr>
     <li>Ejercicio 3: <br><br>
    <?php
    for ($i=2; $i <=100 ; $i++) {
      if ($i%2==0) {
        echo $i .", ";
      }
    }
     ?>
     <hr>
     <li>Ejercicio 4: <br><br>
    <?php
    $i=1;
    while ($i <= 100) {
      if ($i%2!=0) {
        echo $i .", ";
      }
      $i++;
    }
      ?>
      <hr>
      <li>Ejercicio 5: <br><br>
    <?php
    $i=1;
    $suma=0;
    while ($i <= 20) {
    $suma+=$i;
    $i++;
      }
    echo $suma;
     ?>

     <hr>
     <li>Ejercicio 6: <br><br>
    <?php
    $i=1;
    $suma=0;
    while ($i <= 20) {
      if ($i%2==0) {
      $suma+=$i;
      }
     $i++;
    }
    echo $suma;
    ?>

  </body>
</html>

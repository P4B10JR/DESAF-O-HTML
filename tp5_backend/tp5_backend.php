<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h2>tp4_backend.php</h2>
    <hr>
    <br>
    <li>Ejercicio 1:<br>
    <?php
    $b = array(2, 4, 6, 8, 10, 12, 14, 16, 18, 20);
    foreach ($b as $valor){
    print " <p>$valor</p>";
    }
  ?><br>
    <hr>
    <br>
    <li>Ejercicio 2:<br><br><br>
    <?php
    $c = array('Pedro', 'Ana', 34, 1);
    print_r($c);
  ?><br><br>
    <hr>
    <br>
    <li>Ejercicio 3:<br><br><br>
    <?php
    $d = array('Nombre'=>"Pedro",'Apellido'=>"Torres",'Direccion'=>"Av. Mayor 3703",'Telefono'=>1122334455);
    print_r($d);
  ?><br><br>
    <hr>
    <br>
    <li>Ejercicio 4:<br><br><br>
    <?php
    $e = array ('Madrid', 'Barcelona', 'Londres', 'New York', 'Los Ángeles', 'Chicago');
    print $e[0]
   ?><br><br>
   <hr>
   <br>
   <li>Ejercicio 5:<br><br><br>
    <?php
    $f = array('MD'=>"Madrid" ,'BCL'=>"Barcelona", 'LD'=>"Londres", 'NY'=>"New York", 'LA'=>"Los Angeles", 'CCG'=>"Chicago");
    print_r($f)
   ?><br><br>
   <hr>
  </body>
</html>

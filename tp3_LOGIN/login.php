<?php

$usuario = $_POST ["user"];
$contrasenia = $_POST["pass"];

$chkuser = "admin";
$chkpass = "12345";

if ($usuario==$chkuser && $contrasenia==$chkpass){
  header("location:https://www.potrerodigital.org/");
}else{
  header("location:./error.html");
}
 ?>

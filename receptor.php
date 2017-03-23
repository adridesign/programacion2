<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
</head>

<body>

<?php

$nombre = $_GET['dato1'];
$apellido = $_GET['dato2'];

if ($nombre=="" || $apellido==""){
  echo "Ey! Faltan datos!";
} else{
  if ($nombre=="Albert" && $apellido=="Carles") {
    echo "Ya está! El profe pesao 🌚";
  } else {
    echo "Hola ".$nombre." ".$apellido;
  }
}

?>

</body>
</html>

<?php include 'includes/header.php';

$numero = 20;
$numeroDos = 30;
$numeroTres = 30;
$numeroCuatro = "40";


//Comparacion Mayor y Menor que 
var_dump($numero >= $numeroDos);
echo "<br>";

var_dump($numero <= $numeroDos);
echo "<br>";

var_dump($numero > $numeroDos);
echo "<br>";

var_dump($numero < $numeroDos);
echo "<br>";



//Comparando si son iguales
var_dump($numeroDos == $numeroTres);
echo "<br>";

var_dump($numeroDos === $numeroCuatro);
echo "<br>";


//-1 si el numero de la izquierda es menor, 0 si son iguales, 1 si el de la izquierda es mayor 
var_dump($numero <=> $numeroDos);
echo "<br>";

var_dump($numeroDos <=> $numeroTres);
echo "<br>";
var_dump($numeroDos <=> $numero);
echo "<br>";

include 'includes/footer.php';
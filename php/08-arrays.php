<?php include 'includes/header.php';

$carrito = ["Tv","Laptop","Telefono"];

//Util para ver los contenido de un array 
echo "<pre>";
var_dump($carrito[1]);
echo "</pre>";


//Acceder a un elemento del array
echo $carrito[1];


//Añadir un elemento en el indice 3 del arreglo
$carrito[3] = "New Producto";

//Añadir un elemento  al final del array
array_push($carrito,"Pc");

//Añadir un elemento  al inicio del array
array_unshift($carrito,"Teclado");

//Util para ver los contenido de un array 
echo "<pre>";
var_dump($carrito);
echo "</pre>";


$cliente = array("Cliente1","Cliente2");

echo "<pre>";
var_dump($cliente);
echo "</pre>";

include 'includes/footer.php';
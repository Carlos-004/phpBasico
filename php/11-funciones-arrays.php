<?php include 'includes/header.php';

//in_array - Buscar elementos en un array
$carrito = ["Tablet","tv","Laptop"];
var_dump(in_array("Laptop",$carrito));

//Ordenar elementos de un arreglo
$numeros = array(1,2,3,4,5,6,7);
sort($numeros);//De menor a Mayor 
rsort($numeros);//De mayor a Menor

echo "<pre>";
var_dump($numeros);
echo "</pre>";

//Ordenar array asociativos
$clientes = array(
    "precio" => 200,
    "nombre" => "Daniel",
    "tipo" => "Premium"
);
echo "<pre>";
var_dump($clientes);
echo "</pre>";

sort($clientes);//Ordena por valores
ksort($clientes);//Ordena por llaves

echo "<pre>";
var_dump($clientes);
echo "</pre>";


include 'includes/footer.php';
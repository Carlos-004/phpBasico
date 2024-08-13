<?php include 'includes/header.php';

$clientes = [];
$clientes2 = array();
$clientes3 = array("Carlos","Daniel","Karen");
$cleinte = [
    "nombre" => "Carlos",
    "precio" => 200,
];

//Empty - Revisa si un array esta vacio

var_dump(empty($clientes));
var_dump(empty($clientes2));
var_dump(empty($clientes3));


//Isset - Revisa si un array esta creado o una propiedad esta definida
echo '<br>';
var_dump(isset($clientes));
echo '<br>';
var_dump(isset($clientes2));
echo '<br>';
var_dump(isset($clientes3));
echo '<br>';


//isset permite revisar si una propiedad de un array asociativo, existe
var_dump(isset($cleinte["nombre"]));


include 'includes/footer.php';
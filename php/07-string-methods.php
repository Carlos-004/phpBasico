<?php include 'includes/header.php';

$nombreCliente = 'Carlos Daniel';

//Conocer extension de un string
echo strlen($nombreCliente);//strlen dice la cantidad de indice que tiene tu string
var_dump($nombreCliente);

//Eliminar espacios en blanco
$texto = trim($nombreCliente);
echo $texto;


//Convertir a Mayuscula
echo strtoupper($nombreCliente);
echo strtolower($nombreCliente);

$email = "correo@correo.com";
$email2 = "Correo@correo.com";


var_dump(strtolower($email) === strtolower($email2));
echo str_replace("Carlos","Yimmy",$nombreCliente);

//Revisar si un string existe 
echo strpos($nombreCliente, "los");

$tipoCliente = "Premium";
echo "El Cliente " . $nombreCliente . " es " . $tipoCliente;

echo "El cliente {$nombreCliente} es {$tipoCliente}";

include 'includes/footer.php';
<?php include 'includes/header.php';

$autenticado = true;
$admin = false;

if ($autenticado || $admin) {
   echo "User autenticado correcta mente";
}else{
    echo "User no autenticado, Inicia secion";
}

$clientes = array(
    "precio" => 200,
    "nombre" => "Daniel",
    "informacion" =>[
        "tipo" => "Premium"
    ]
);

echo "<br>";
if (!empty($clientes)) {
    echo "El Array de cliente no esta vaico";

    if ($clientes["precio"] >= 0) {
        echo "El cleinte tiene saldo suficiente";
    }else{ 
        echo "No hay saldo";
    }
}

echo "<br>";

if ($clientes["precio"] >= 0) {
    echo "El cliente tiene saldo";
}else if ($clientes["informacion"]["tipo"] === "Premium") {
    echo "El cliente es Premium ";
}else{
    echo "No hay cliente definido o no tiene saldo o no es Premium";
}

include 'includes/footer.php';


echo "<br>";


$tecnologia = "JavaScript";


switch($tecnologia){
    case 'php':
        echo "Este es el mejor lenguaje {$tecnologia}";
        break;
    case 'JavaScript':
        echo "Este es el mejor lenguaje {$tecnologia}";
        break;
    default:
    echo "No se cual es este lenguaje";
        break;
}
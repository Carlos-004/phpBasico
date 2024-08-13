<?php include 'includes/header.php';

$clien =[
    "nombre" => "Carlos",
    "precio" => 3000,
    "informacion" =>[
        "tipo" => "Primium",
        "disponible" => 100
    ]
];

echo "<pre>";
var_dump($clien);
echo "</pre>";

echo $clien["nombre"];
echo $clien["informacion"]["tipo"];

include 'includes/footer.php';
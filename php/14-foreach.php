<?php include 'includes/header.php';

$clientes =  array("Pedro","Daniel","Jose");

//forEach

foreach($clientes as $cliente){
    echo $cliente . "<br>";
}

// $carrito = ["TV", "Laptop","Auto","Tablet"];

// for ($i=0; $i < count($carrito) ; $i++) { 
//     # code...
//     echo "<h1>$carrito[$i]</h1>";
// }


$productos = [
  [
    "nombre" => "Laptop",
    "precio" => 2000,
    "disponible" => true,
  ],
  [
    "nombre" => "Monitor",
    "precio" => 4000,
    "disponible" => true,
  ],
  [
    "nombre" => "TV",
    "precio" => 3000,
    "disponible" => true,
  ]
];

foreach($productos as $producto){?>
    <li>
        <p>Productos: <?php echo $producto["nombre"]; ?> </p>
    </li>
    
    <?php

    echo "<pre>";
        var_dump($producto);
    echo "</pre>";
}

include 'includes/footer.php';
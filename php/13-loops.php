<?php include 'includes/header.php';
//While
$i = 0;

while ($i <= 10) {
    $i++;
    echo "El valor de i es {$i}";
}

echo "<br>";
$a = 0;
do {
    echo "El valor de a es {$a} ";
    $a++;
} while ($a <= 20);



// $carrito = ["Laptop","Tv","Auto"];

//FOR

for ($i=0; $i <= 20; $i++) { 
   echo $i . "<br>";
}

include 'includes/footer.php';
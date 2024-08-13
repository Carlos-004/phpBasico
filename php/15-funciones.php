<?php include 'includes/header.php';


function suma($a,$b){
    $resultado = $a + $b;
    return $resultado;

}
echo suma(11,10);

function nombreCompleto($userName = 0, $lastName =0){
    $resultado = "Hola {$userName} {$lastName}";
    return $resultado;
}
echo nombreCompleto("Carlos","Deleon");


include 'includes/footer.php';
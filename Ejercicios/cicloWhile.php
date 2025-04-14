<?php 
//Realizar un programa que imprima los números del 1 al 10

$i = 1; // Inicializamos la variable $i en 1
$num = 2;

echo "La tabla del: $num <br>";
while($i <= 10){
    echo "$num x $i = " . ($num * $i) . "<br>";
    $i++;
}
?>